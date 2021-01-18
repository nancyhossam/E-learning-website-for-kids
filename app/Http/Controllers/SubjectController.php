<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\subjects;

class SubjectController extends Controller
{
    /**
     * Display a listing of -he resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function savemath( $link)
    {   $id=Auth()->user()->id;
       // $link=$request->input()->name;
        DB::insert('insert into levels values(?,?)',[1,"nan"]);
       
    }
    public function Math(){
        $links=DB::select('select * from subjects where subject="math" order by level');
        return view('Math',compact('links'),$links);
    }
    public function Arabic(){
        $links=DB::select('select * from subjects where subject="arabic"  order by level ');
        return view('Arabic',compact('links'),$links);
    }
    public function English(){
        $links=DB::select('select * from subjects where subject="english" order by level');
        return view('English',compact('links'),$links);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
