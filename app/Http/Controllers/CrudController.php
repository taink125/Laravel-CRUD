<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Crud;


class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cruds = Crud::all();
        return view('home.index')->with('cruds', $cruds);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'name'   => 'required|min:8|max:50',
            'date'   => 'required',
            'gender' => 'required',
            'email'  => 'required',
            'phone'  => 'required'
        ]);

        $request    = request()->all();
        
        $cr         = new Crud();
        $cr->name   = $request['name'];
        $cr->date   = $request['date'];
        $cr->gender = $request['gender'];
        $cr->email  = $request['email'];
        $cr->phone  = $request['phone'];

        $cr->save();

        return redirect('/');
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
        return view('layouts.edit')->with('cruds', Crud::find($id));    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate(request(), [
            'name'   => 'required|min:8|max:50',
            'date'   => 'required',
            'gender' => 'required',
            'email'  => 'required',
            'phone'  => 'required'
        ]);

        $request    = request()->all();

        $cr         = Crud::find($id);
        $cr->name   = $request['name'];
        $cr->date   = $request['date'];
        $cr->gender = $request['gender'];
        $cr->email  = $request['email'];
        $cr->phone  = $request['phone'];

        $cr->save();

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cr = Crud::find($id);
        $cr -> delete();
        return redirect('/');
    }
}
