<?php

namespace App\Http\Controllers;

use App\Grofile;
use Illuminate\Http\Request;

class GrofileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grofiles = Grofile::all();

        return $grofiles;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->validate([
            'name'=> 'required',
            'email'=> 'required',
            'age' => 'required'
        ]);
        $grofiles = Grofile::create($data);

        return response()->json(['success'],201,[],JSON_NUMERIC_CHECK);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Grofile  $grofile
     * @return \Illuminate\Http\Response
     */
    public function show(Grofile $grofile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Grofile  $grofile
     * @return \Illuminate\Http\Response
     */
    public function edit(Grofile $grofile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Grofile  $grofile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Grofile $grofile,$id)
    {

        $gro = Grofile::find($id);
        $gro->name = $request->name;
        $gro->email = $request->email;
        $gro->age = $request->age;
        $gro->save();

         return 'success';

       
        // dd($request->name);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Grofile  $grofile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grofile $grofile,$id)
    {
        $temp = Grofile::findOrfail($id);

        $temp->delete();

        return 'success';
    }
}
