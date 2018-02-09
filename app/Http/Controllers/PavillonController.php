<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pavillon;
use DB;
class PavillonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pav = DB::table('pavillons')->selectRaw('pavillons.name')->get();
        $codif =DB::table('codifications')->selectRaw('codifications.id,codifications.date_fin')->first();
        if(@$codif->date_fin > now())
        {
            return view('pavillons.index',compact('pav'));
        }
        else
            return view('positions.edit');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pavillons.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = ['name'=>$request->name,
                 'site'=>$request->site];
        DB::table('pavillons')->insert($data);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id  
     * @return \Illuminate\Http\Response
     */
    public function show(Pavillon $Pavillon)
    {
        $pavillon = DB::table('pavillons')->selectRaw('pavillons.name')->get();
            return view('pavillons.show',compact('pavillon'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pavillon $Pavillon)
    {
        return view('pavillons.edit',compact('Pavillon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Pavillon $Pavillon)
    {
                request()->validate([
            'code' => 'required',
            'Pavillon' => 'required',
        ]);
        $Pavillon->update($request->all());
        return redirect()->route('pavillons.index')
                        ->with('success','Pavillon updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
                Pavillon::destroy($id);
        return redirect()->route('pavillons.index')
                        ->with('success','Pavillon deleted successfully');
    }
}
