<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;     

class UserController extends Controller
{
    public function store(Request $request){
        $users = $request->all();
        $users['password'] = Hash::make($request->password);
        User::create($users);
        return response()->json([
            'res' => true,
            'message' => 'se creo el usuario correctamente'
        ],200);
    }

    public function login(Request $request){
        $users = User::whereEmail($request->email)->first();
        if(!is_null($users) && Hash::check($request->password, $users->password)){

            $users->api_token = Str::random(100);
            $users->save();

           return response()->json([
            'res' => true,
            'token' => $users->api_token,
            'message' => 'Usuario Correcto'
        ],200);
        }else{
            return response()->json([
            'res' => true,
            'message' => 'usuario incorrecto'
        ],200);
        }
    }
}
