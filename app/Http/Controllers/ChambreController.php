<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chambre;
use DB;
class ChambreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('chambres.index');
        $chambres = DB::table('chambres')->paginate(10);
        return view('chambres.index',['chambres' => $chambres]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('chambres.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = ['code'=>$request->code,
                 'pavillon'=>$request->pavillon,
                 'etage'=>$request->etage,
                 'couloir'=>$request->couloir];
        DB::table('chambres')->insert($data);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
      public function show(Chambre $chambre)
    {
        $chambre = DB::table('chambres')->selectRaw('chambres.code,chambres.pavillon,chambres.etage,chambres.couloir')->get();
            return view('chambres.show',compact('chambre'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Chambre $chambre)
    {
        return view('chambres.edit',compact('chambre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Chambre $chambre)
    {
                request()->validate([
            'code' => 'required',
            'etage' => 'required',
        ]);
        $chambre->update($request->all());
        return redirect()->route('chambres.index')
                        ->with('success','Chambre updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
                Chambre::destroy($id);
        return redirect()->route('chambres.index')
                        ->with('success','Chambre deleted successfully');
    }
}
