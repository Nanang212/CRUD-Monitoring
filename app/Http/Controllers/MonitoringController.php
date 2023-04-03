<?php

namespace App\Http\Controllers;

use App\Models\monitoring;
use Illuminate\Http\Request;

class MonitoringController extends Controller
{
    public function index()
    {
       $monitoring = monitoring::all();
       return view('monitoring', compact('monitoring'));
    //    $persent =;
    }
    public function addmasuk(Request $request)
    {
        
        $request->validate([
            'project_name' => 'required',
            'client' => 'required',
            'project_leader'=> 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'progress' => 'required',
            'email' => 'required',
        ]); 
        $data = new monitoring;
        
        $data->project_name = $request->project_name;
        $data->client = $request->client;
        $data->project_leader = $request->project_leader;
        $data->start_date = $request->start_date;
        $data->end_date = $request->end_date; 
        $data->progress = $request->progress;
        $data->email = $request->email;
        // dd($request->id);
        if ($request->id > 0) {
            $update = monitoring::find($request->id);
            $update->project_name = $request->project_name;
            $update->client = $request->client;
            $update->project_leader = $request->project_leader;
            $update->start_date = $request->start_date;
            $update->end_date = $request->end_date; 
            $update->progress = $request->progress;
            $data->email = $request->email;
            $update->save();
        }else{
            $data->save();
        }

        // dd($data);

        return redirect()->route('monitoring');
    }
    public function hapusmonitoring(Request $request)
    {
        $id = $request->id;
        $monitoring = monitoring::find($id);
        $monitoring->delete();

        return redirect()->route('monitoring');
    }
    public function editmonitoring(Request $request, $id)
    {
        $monitoring = monitoring::find($id);
        return view('edit-monitoring', compact('monitoring'));
    }
}
