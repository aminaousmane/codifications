<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Position;
use DB;
use Auth;
class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('positions.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('positions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $req =DB::table('chambres')->selectRaw('chambres.couloir,chambres.etage')->where('code',$request->chambre)->where('pavillon',$request->pavillon)->first();
        $data = ['chambre'=>$request->chambre,
                 'pavillon'=>$request->pavillon,
                 'etage'=>$req->etage,
                 'genre'=>$request->genre,
                 'formation'=>$request->formation,
                 'couloir'=>$req->couloir];
        DB::table('positions')->insert($data);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
      public function show(Position $Position)
    {
        $position = DB::table('positions')->selectRaw('positions.chambre,positions.pavillon,positions.etage,positions.couloir,positions.genre,positions.formation')->where('genre',Auth::user()->genre)->where('formation',Auth::user()->formation)->where('etat','<',4)->get();
        $etud = DB::table('reservations')->selectRaw('reservations.etudiant,reservations.chambre,reservations.pavillon,reservations.etage,reservations.couloir,reservations.etat')->where('etudiant',Auth::user()->id_etudiant)->first();
        $etud1 = DB::table('reservations')->selectRaw('reservations.etudiant,reservations.chambre,reservations.pavillon,reservations.etage,reservations.couloir,reservations.etat')->where('etudiant',Auth::user()->id_etudiant)->where('etat','>',0)->first();
        $codif =DB::table('codifications')->selectRaw('codifications.id,codifications.date_fin')->first();
        if(@$codif->date_fin > now())
        {
            if($etud1)
                return view('reservations.edit',compact('etud'));
            if($etud)
                return view('positions.index',compact('etud'));
            else
              return view('positions.show',compact('position'));
          }else
                return view('positions.edit');

            
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Position $Position)
    {
        return view('positions.edit',compact('Position'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Position $Position)
    {
                request()->validate([
            'code' => 'required',
            'etage' => 'required',
        ]);
        $Position->update($request->all());
        return redirect()->route('positions.index')
                        ->with('success','Position updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
                Position::destroy($id);
        return redirect()->route('positions.index')
                        ->with('success','Position deleted successfully');
    }
}
