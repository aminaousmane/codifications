<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Couloir;
use DB;
class CouloirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('couloirs.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('couloirs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = ['direction'=>$request->direction,
                 'etage'=>$request->etage];
        DB::table('couloirs')->insert($data);
        return back()->with('ok',('Enregistré !.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Couloir $Couloir)
    {
        return view('couloirs.show',compact('Couloir'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Couloir $Couloir)
    {
        return view('couloirs.edit',compact('Couloir'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Couloir $Couloir)
    {
                request()->validate([
            'code' => 'required',
            'etage' => 'required',
        ]);
        $Couloir->update($request->all());
        return redirect()->route('couloirs.index')
                        ->with('success','Couloir updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
                Couloir::destroy($id);
        return redirect()->route('couloirs.index')
                        ->with('success','Couloir deleted successfully');
    }
}
