<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Codification;
use DB;
class CodificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('codifications.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('codifications.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = ['date_debut'=>$request->date_debut,
                 'date_fin'=>$request->date_fin];
        $codif = DB::table('codifications')->selectRaw('date_debut,date_fin')->first();
            if($codif)
            {
                if($codif->date_debut < now())
                    return view('codifications.index',compact('codif'));
                else {
                    $id = DB::table('codifications')->selectRaw('codifications.id')->first()->id;
                    $task = Codification::findOrFail($id);
                    $task->delete();
                    return view('codifications.edit');
                }
            }
            else{
                    DB::table('codifications')->insert($data);
                    return view('codifications.index',compact('codif'));
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Codification $Codification)
    {
        return view('codifications.show',compact('Codification'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Codification $Codification)
    {
        return view('codifications.edit',compact('Codification'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        $Codification->update($request->all());
        return redirect()->route('codifications.index')
                        ->with('success','Codification updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        $id = DB::table('codifications')->selectRaw('codifications.id')->first()->id;
        $task = Codification::findOrFail($id);
 
        $task->delete();
 
        return redirect()->route('Codificationcreate');
    }
}
