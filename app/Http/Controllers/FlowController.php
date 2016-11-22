<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Tarea;
use App\Leccion;

class FlowController extends Controller
{    
    public function direct(Request $request, int $tarea_id)
    {           
        $tarea = Tarea::find($tarea_id);
        $tareaType = $tarea->t_prod->type;
        $leccion = $tarea->leccion;

        // Backward 
        if($tareaType == "Revision" && $request->reject == "on")
        {    
            $leccion->backward();
        }
        // Forward: $tareaType == "Accion"|"Asignacion" or $tareaType == "Revision" & accept == "on"    
        else
        {
            $leccion->forward();
        }
        
        return back();              
    }
}
