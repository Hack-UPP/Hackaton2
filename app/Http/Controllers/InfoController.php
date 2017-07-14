<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    
    public function get_roles() {
        $roles = \App\Rol::where('id','<>',1)->get();
        return response()->json(['roles'=>$roles])
                ->header('Content-Type', 'application/json; charset=UTF-8');
    }

    
}
