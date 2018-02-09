<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;
use DB;
use Auth;
use Session;
class ReservationController extends Controller
{
    public function index()
    {
        return view('reservations.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reservations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = ['date_reservation'=>$request->date_reservation,
                 'pavillon'=>$request->pavillon,
                 'chambre'=>$request->chambre,
                 'etage'=>$request->etage,
                 'couloir'=>$request->couloir,
                 'etudiant'=>$request->etudiant];
        $etud = DB::table('reservations')->selectRaw('reservations.etudiant')->where('etudiant',Auth::user()->id_etudiant)->first();
            if($etud)
            {
                return view('positions.index',compact('etud'));
            }
            else{
                    DB::table('reservations')->insert($data);
                    DB::table('positions')->where('chambre',$request->chambre)->where('pavillon',$request->pavillon)->increment('etat');
                    return view('positions.index',compact('etud'));
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
      public function show(Reservation $Reservation)
    {
        $p = $_GET['pavillon'];
        $reservation = DB::table('reservations')->selectRaw('reservations.etudiant,reservations.chambre,reservations.couloir,reservations.date_reservation,reservations.etage,reservations.etat')->where('pavillon',$p)->get();
            return view('reservations.show',compact('reservation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $Reservation)
    {
        $etud = DB::table('reservations')->selectRaw('reservations.etudiant,reservations.chambre,reservations.pavillon,reservations.couloir')->where('etudiant',Auth::user()->id_etudiant)->first();
        DB::table('reservations')->selectRaw('id')->where('etudiant',Auth::user()->id_etudiant)->increment('etat');
        return view('reservations.edit',compact('etud'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Reservation $reservation)
    {
                request()->validate([
            'code' => 'required',
            'etage' => 'required',
        ]);
        $Reservation->update($request->all());
        return redirect()->route('reservations.index')
                        ->with('success','Reservation updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        $id = DB::table('reservations')->selectRaw('reservations.id,reservations.chambre,reservations.pavillon')->where('etudiant',Auth::user()->id_etudiant)->first();
        DB::table('positions')->where('chambre',$id->chambre)->where('pavillon',$id->pavillon)->decrement('etat');
        $task = Reservation::findOrFail($id->id);
        $task->delete();
        return redirect()->route('show');
    }
}
