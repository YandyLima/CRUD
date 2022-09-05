<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$users=User::paginate(5);
        //return view('app.users',compact('users'));

        $datos['users']=User::paginate(5);
        return view('app.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('app.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserStoreRequest $request)
    {
        //
        //$datosUsers = request()->all();
        $datosUsers = request()->except('_token');

        if($request->hasFile('Foto')){
        $datosUsers['Foto']=$request->file('Foto')->store('uploads', 'public');
        }

        User::insert($datosUsers);
        
        //return response()->json($datosUsers);
        return redirect('users')->with('mensaje','Usuario Agregado Con Exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user=User::findOrFail($id);

        return view ('app.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
       //dd($request->all(), $id);
        $datosUsers = request()->except(['_token','_method']);

        $user=User::find($id);

        if($request->file('Foto')){
           $fileName=$user->Foto;

           $request->file('Foto')->storeAs('uploads', basename($fileName), 'public');

            $datosUsers['Foto']=$request->file('Foto')->store('uploads', 'public');
            }

        $user->update($datosUsers);
        return view ('app.edit', compact('user'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
 
        $user=User::findOrFail($id);
            if(storage::delete('public/'.$user->Foto)){
                User::destroy($id);
            };

        return redirect('users')->with('mensaje','Usuario Borrado Con Exito');
    }
}
