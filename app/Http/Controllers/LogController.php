<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use App\Models\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class LogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Log::with('user')->get();
        return Inertia::render('logs', ['data' => $data]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Log::with('user')->orderBy('id','desc')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('archivo')){
            $path=$request->file('archivo')->store('archivos');
//        $path = $request->file('archivo')->store('avatars');

        }else{
            $path="";
        }
        echo $path;
        exit;

//        if ($request->hasFile('avatar')) {
//            // Si es así , almacenamos en la carpeta public/avatars
//            // esta estará dentro de public/defaults/
//            $url = $request->avatar->store('users/avatar');
////            $userAvatarUpdate = User::find(auth()->id());
//            /** Áctualización y
//            return JSON*/
//        }
//        return "Noo Llego una imagen";
//
//
//        exit;
        $d=new Log();
        $d->titulo=$request->titulo;
        $d->descripcion=$request->descripcion;
        $d->archivo=$path;
        $d->user_id=Auth::user()->id;
//        $d->titulo=$request->titulo;
//        $d->titulo=$request->titulo;
        $d->save();
        return  $d;
//        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Log  $log
     * @return \Illuminate\Http\Response
     */
    public function show(Log $log)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Log  $log
     * @return \Illuminate\Http\Response
     */
    public function edit(Log $log)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Log  $log
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Log $log)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Log  $log
     * @return \Illuminate\Http\Response
     */
    public function destroy(Log $log)
    {
        //
    }
}
