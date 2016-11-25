<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leccion extends Model
{
    protected $table = 'lecciones';

    protected $fillable = ['name','code','status','audio','t_actual_id','t_actual_2_id','curso_id'];

	public function curso()
    {
        return $this->belongsTo('App\Curso');
    }	

	public function tareas()
    {
        return $this->hasMany('App\Tarea');
    }

	public function users()
    {
        return $this->belongsToMany('App\User');
    }

	public function t_actual()
    {
        return $this->belongsTo('App\TareasProduccion');
    }

    public function t_actual_2()
    {
        return $this->belongsTo('App\TareasProduccion');
    }

    public function forward(Tarea $tareaOld, $workerName)
    {     
        // Actualizar 'status' de tareas
        $tareaType = $tareaOld->t_prod->type;        
        if($tareaType == "Accion")
        {
            $tareaOld->status = "En Revision";            
            $tareaOld->save();
        }
        elseif($tareaType == "Asignacion")
        {
            $tareaOld->status = "Completada";
            $user = User::where('name', $workerName)->first();
            $this->users()->save($user);

        }    
        elseif($tareaType == "Revision") 
        {                
            $tareaOld->status = "Completada";
            $tareaOld->save();

            // "Revisar Cortes de Audio" NO requiere revisión final por parte del "Edumático"
            if($tareaOld->t_prod->id == 3)
            {                
                $tareaPrev = $this->tareas()->where('t_prod_id', 2)->first();
                $tareaPrev->status = "Aprobada";
                $tareaPrev->save();

                // Finalizar intento
                $intento = Intento::where('tarea_id', $tareaPrev->id)->orderBy('created_at', 'desc')->first();
                $intento->status = "Finalizado";
                $intento->save();
            }    
        }            
        elseif($tareaType == "Revision-Final")
        {   
            // "Revisar presentación estática final" @DM         
            if($tareaOld->t_prod->id == 7)
            {                
                $tareaPrev = $this->tareas()->where('t_prod_id', 5)->first();
                $tareaPrev->status = "Aprobada";
                $tareaPrev->save();

                // Finalizar intento
                $intento = Intento::where('tarea_id', $tareaPrev->id)->orderBy('created_at', 'desc')->first();
                $intento->status = "Finalizado";
                $intento->save();

                $tareaOld->status = "Completada";            
                $tareaOld->save();
                    
            }
            // "Revisar versión final" @DPA       
            elseif($tareaOld->t_prod->id == 13)
            {                    
                $tareaPrev = $this->tareas()->where('t_prod_id', 9)->first();
                $tareaPrev->status = "Aprobada";
                $tareaPrev->save();

                // Finalizar intento
                $intento = Intento::where('tarea_id', $tareaPrev->id)->orderBy('created_at', 'desc')->first();
                $intento->status = "Finalizado";
                $intento->save();

                $tareaPrev = $this->tareas()->where('t_prod_id', 11)->first();
                $tareaPrev->status = "Aprobada";
                $tareaPrev->save();
                    
                // Finalizar intento
                $intento = Intento::where('tarea_id', $tareaPrev->id)->orderBy('created_at', 'desc')->first();
                $intento->status = "Finalizado";
                $intento->save();

                $tareaOld->status = "Completada";            
                $tareaOld->save();                
            }    
        }    

        // Verificar si es la última tarea
        if($this->t_actual_id != 13)
        {    
            // Apuntar a la tarea siguiente    
            $this->t_actual_id++;
            $this->save();

            // Crear tarea siguiente
            $tareaNew = new Tarea;
            $tareaNew->type = "Produccion";
            $tareaNew->status = "Activa";
            $tareaNew->t_prod_id = $this->t_actual_id;
            $tareaNew->leccion_id = $this->id;
            $tareaNew->path_in = $tareaOld->path_out;
            $tareaNew->user_id = $this->users()->where('cargo_id', $tareaNew->t_prod->cargo_id)->first()->id; 
            $this->tareas()->save($tareaNew);

            // Si la tarea siguiente es de tipo 'Accion', crear su primer intento
            if($tareaNew->t_prod->type == "Accion")
            {                    
                $intento = new Intento;
                $intento->num = 1;        
                $intento->status = "Activo";
                $tareaNew->intentos()->save($intento);
            }    
        }
        else
        {
            // Cambiar 'status' de la lección
            $this->status = "Completada" ;
            $this->save();
        } 
    }    

    public function backward(Tarea $tarea, $obs, $animFail, $html5Fail)
    {        
        // Verificar si es la última tarea
        if($this->t_actual_id != 13)
        {    
            $tareaType = $tarea->t_prod->type;        

            // Ubicar tarea revisada
            if($tareaType == "Revision")
            {
                $tareaPrevNum = $this->t_actual_id - 1;
            }
            elseif($tareaType == "Revision-Final")    
            {
                $tareaPrevNum = $this->t_actual_id - 2;   
            }    

            // Actualizar 'status' de la tarea revisada
            $tareaPrev = $this->tareas()->where('t_prod_id', $tareaPrevNum)->first();
            $tareaPrev->status = "Modificar";
            $tareaPrev->save();

            // Finalizar intento 
            $intentoOld = Intento::where('tarea_id', $tareaPrev->id)->orderBy('created_at', 'desc')->first();            
            $intentoOld->status = "Finalizado";
            $intentoOld->save();

            // Agregar observación
            $obsNew = new Observacion;
            $obsNew->title = "Observación";
            $obsNew->data = $obs;
            $obsNew->intento_id = $intentoOld->id;
            $obsNew->save();            

            // Generar nuevo intento
            $intentoNew = new Intento;
            $intentoNew->num = $intentoOld->num + 1;        
            $intentoNew->status = "Activo";
            $tareaPrev->intentos()->save($intentoNew);            

            // Actualizar apuntador de la lección
            if($tareaType == "Revision")
            {
                $this->t_actual_id--;
                $this->save();
            }
            elseif($tareaType == "Revision-Final")    
            {
                $this->t_actual_id -= 2;
                $this->save();
            }                

            // Actualizar 'status' de tarea
            $tarea->status = "Completada";
            $tarea->save();
        }
        // Revisar versión final (última tarea)
        else
        {
            // Ubicar tarea a modificar 
            if($animFail == "on")
            {                                
                // Actualizar 'status' de la tarea revisada
                $tareaPrevNum = 9;
                $tareaPrev = $this->tareas()->where('t_prod_id', $tareaPrevNum)->first();
                $tareaPrev->status = "Modificar";
                $tareaPrev->save();

                // Finalizar intento
                $intentoOld = Intento::where('tarea_id', $tareaPrev->id)->orderBy('created_at', 'desc')->first();
                $intentoOld->status = "Finalizado";
                $intentoOld->save();

                // Agregar observación
                $obsNew = new Observacion;
                $obsNew->title = "Observación";
                $obsNew->data = $obs;
                $obsNew->intento_id = $intentoOld->id;
                $obsNew->save();     

                // Generar nuevo intento
                $intentoNew = new Intento;
                $intentoNew->num = $intentoOld->num + 1;        
                $intentoNew->status = "Activo";
                $tareaPrev->intentos()->save($intentoNew);                

                // Actualizar apuntador de la lección
                $this->t_actual_id = $tareaPrevNum;
                $this->save();                

                // Actualizar 'status' de la tarea 'flotante'
                $tareaPrevNum = 11;
                $tareaPrev = $this->tareas()->where('t_prod_id', $tareaPrevNum)->first();
                $tareaPrev->status = "Rechazada";
                $tareaPrev->save();

                // Finalizar intento 
                $intentoOld = Intento::where('tarea_id', $tareaPrev->id)->orderBy('created_at', 'desc')->first();
                $intentoOld->status = "Finalizado";
                $intentoOld->save();

                // Actualizar 'status' de tarea
                $tarea->status = "Completada";
                $tarea->save();
            }                
            elseif($html5Fail == "on")    
            {                                
                // Actualizar 'status' de la tarea revisada
                $tareaPrevNum = 11;
                $tareaPrev = $this->tareas()->where('t_prod_id', $tareaPrevNum)->first();
                $tareaPrev->status = "Modificar";
                $tareaPrev->save();

                // Finalizar intento
                $intentoOld = Intento::where('tarea_id', $tareaPrev->id)->orderBy('created_at', 'desc')->first();
                $intentoOld->status = "Finalizado";
                $intentoOld->save();

                // Agregar observación
                $obsNew = new Observacion;
                $obsNew->title = "Observación";
                $obsNew->data = $obs;
                $obsNew->intento_id = $intentoOld->id;
                $obsNew->save();     

                // Generar nuevo intento
                $intentoNew = new Intento;
                $intentoNew->num = $intentoOld->num + 1;        
                $intentoNew->status = "Activo";
                $tareaPrev->intentos()->save($intentoNew);                

                // Actualizar apuntador de la lección
                $this->t_actual_id = $tareaPrevNum;
                $this->save();

                // Actualizar 'status' de tarea
                $tarea->status = "Completada";
                $tarea->save();
            }
        }            
    }    
}
