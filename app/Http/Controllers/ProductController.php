<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = DB::table('productproject')->get();
        return view('home', ['students'=>$students]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        DB::table('productproject')->insert([
          'title' => $request->title,
          'description' => $request->description,
          'price' => $request->price,
        ]);
        return redirect(route('index'))->with('status','User Added!');
        //
    }

     /**
     *  Show the form for editing the specified resource
     *
     
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     
    public function edit($id)
    {
        $students = DB::table('productproject')->find($id);
        return view('editform', ['students'=>$students]);
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
        $students = DB::table('productproject')->where('id', $id)->update([
             'title' => $request->title,
          'description' => $request->description,
          'price' => $request->price,
        ]);
         return redirect(route('index'))->with('status','User Updated!');
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('productproject')->where('id', $id)->delete();
         return redirect(route('index'))->with('status','User Deleted!');
      
        //
    }
}
