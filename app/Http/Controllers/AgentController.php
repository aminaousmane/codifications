<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agent;
use DB;

class AgentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:agent');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('agent');
    }
    public function index1()
    {
        return view('agents.index');
    }

     public function create()
    {
        return view('agents.create');
    }

     public function show(Agent $agent)
    {
        $agent = DB::table('agents')->selectRaw('agents.name,agents.email')->where('agents.admin',0)->get();
            return view('agents.show',compact('agent'));
    }
    public function store(Request $request)
    {
        $data = ['name'=>$request->name,
                 'email'=>$request->email,
                 'password'=>bcrypt($request->password)];
        DB::table('agents')->insert($data);
        return back();
    }

    public function destroy()
    {
        $mail = $_GET['email'];
        $id = DB::table('agents')->selectRaw('agents.id')->where('email',$mail)->first()->id;
    $task = Agent::findOrFail($id);
 
    $task->delete();
    return redirect()->route('Agentshow');
    }
}
