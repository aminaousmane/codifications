<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Etage;
use DB;
class EtageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('etages.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('etages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = ['niveau'=>$request->niveau,
                 'pavillon'=>$request->pavillon];
        DB::table('etages')->insert($data);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Etage $Etage)
    {
        return view('etages.show',compact('Etage'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Etage $Etage)
    {
        return view('etages.edit',compact('Etage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Etage $Etage)
    {
                request()->validate([
            'code' => 'required',
            'etage' => 'required',
        ]);
        $Etage->update($request->all());
        return redirect()->route('etages.index')
                        ->with('success','Etage updated successfully');
    }

    /**
     * Remove the specified resource from storage.
      *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
                Etage::destroy($id);
        return redirect()->route('etages.index')
                        ->with('success','Etage deleted successfully');
    }
}
