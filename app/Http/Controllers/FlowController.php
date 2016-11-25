<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

use App\Tarea;
use App\Leccion;

class FlowController extends Controller
{    
    public function direct(Request $request, int $tarea_id)
    {           
        $tarea = Tarea::find($tarea_id);
        $tareaType = $tarea->t_prod->type;
        $leccion = $tarea->leccion;

        if ($request->file('out')){
            $file = $request->file('out');
            $nombre = Carbon::now()->second.$file->getClientOriginalName();
            \Storage::disk('local')->put($nombre,  \File::get($file));
            $tarea->path_out = Carbon::now()->second.$file->getClientOriginalName();
        }



        // Backward 
        if($tareaType == "Revision" && $request->reject == "on")
        {    
            $leccion->backward();
        }
        // Forward 
        elseif($tareaType == "Asignacion")
        {
            $leccion->forward($tarea, $request->worker,$nombre);
        }
        elseif($tareaType == "Accion" || $tareaType == "Revision" && $request->accept == "on" || $tareaType == "Revision-Final" && $request->accept == "on")
        {
            $leccion->forward($tarea, NULL, NULL);
        }    
                
        return back();
    }
}
