<?php

namespace App\Http\Controllers\Inertable;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class InertableController extends Controller
{

    public function index(Request $request)
    {
        $routeArr = explode('.', Route::currentRouteName());
        $routeName =  end($routeArr);        
        $model = 'App\\Models\\' . ucfirst($routeName);
        $modelClass = new $model();
        //return response($modelClass->all());

        $offset = 0;
        $limit = null;
        

        return response($request->all());
    }
}
