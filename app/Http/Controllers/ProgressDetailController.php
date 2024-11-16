<?php

<<<<<<< HEAD

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\ProgressDetail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;


class ProgressDetailController extends Controller
{
    public function showCBform(){
        return view('cb-details', [
            'title' => 'cb-details',
            'active' => 'cb-details'
        ]);
    }


    public function CBform(Request $request){


        Log::info('Received data: ', $request->all());


        DB::listen(function ($query) {
            Log::info('SQL Query: ', ['query' => $query->sql, 'bindings' => $query->bindings]);
        });
       
        $validator = Validator::make($request->all(), [
            'nim' => 'required|numeric',
            'leader_nim' => 'required|numeric',
            'lecturer_code' => 'required|string|max:255',
            'lecturer' => 'required|string|max:255',
            'cb_type' => 'required|string|max:255',
            'cb_class' => 'required|string|max:255',
            'project_name' => 'required|string|max:255',
            'project_location' => 'required|string|max:255',
            'category' => 'required',
            'scale' => 'required',
            'report' => 'required|file',
            'video' => 'required|file',
            'report_link' => 'required|url',
            'video_link' => 'required|url'
        ]);


        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }


        $validatedData = $request->except(['report', 'video']);


         if ($request->hasFile('report')) {
            $validatedData['report'] = $request->file('report')->store('reports');
        }


        if ($request->hasFile('video')) {
            $validatedData['video'] = $request->file('video')->store('videos');
        }
        
        try{
            $CBdata = ProgressDetail::create([
                'nim' => $request->nim,
                'leader_nim' => $request->leader_nim,
                'lecturer_code' => $request->lecturer_code,
                'lecturer' => $request->lecturer,
                'cb_type' => $request->cb_type,
                'cb_class' => $request->cb_class,
                'project_name' => $request->project_name,
                'project_location' => $request->project_location,
                'category' => $request->category,
                'scale' => $request->scale,
                'report' => $validatedData['report'],
                'video' => $validatedData['video'],
                'report_link' => $request->report_link,
                'video_link' => $request->video_link
            ]);
            // ProgressDetail::create($validatedData);
        }catch(\Exception $e){
            return redirect()->back()->with('error', 'Failed to submit form. Please try again.');
            //Log::error('Failed to submit form: ' . $e->getMessage());
        }
        return redirect()->route('cb-course')->with('success', 'Form submitted successfully!');
    }
}


		
=======
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgressDetailController extends Controller
{
    //
}
>>>>>>> fc48673907dbea020c02c8d0370ee6d0d7cebc9e
