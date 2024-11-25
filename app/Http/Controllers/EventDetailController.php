<?php

namespace App\Http\Controllers;

use App\Models\EventDetail;
use App\Models\ProgressDetail;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EventDetailController extends Controller
{
    // Display a listing of the event details
    public function index()
    {
        $eventDetails = EventDetail::all();
        return view('event_details.index', compact('eventDetails'));
    }

    function showAdmCBcourse(){
        $events = EventDetail::all();

        return view('admin.cb-course', compact('events'));
    }

    function showAdmCreate(){
        return view('admin.create-cb');
    }

    public function createCb(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'e_name' => 'required|string|max:255',
            'e_type' => 'required|string|max:255',
            'organizer' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'open_reg' => 'required|date',
            'close_reg' => 'required|date',
            'report_deadline' => 'required|date',
            'e_desc' => 'required|string',
            'notes' => 'nullable|string',
            'cb_type' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            EventDetail::create($request->all());            
            return redirect()->route('admCb_course')->with('success', 'Event Detail created successfully.');
        } catch (QueryException $e) {
            return redirect()->back()->with('error', 'There was an error creating the event. Please try again.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An unexpected error occurred. Please try again.');
        }
    }

    function showAdmProject(){
        $ongoingProjects = ProgressDetail::where('status', 'in-review')->get();
        $pastProjects = ProgressDetail::where('status', 'reviewed')->get();
        return view('admin.cb-project', compact('ongoingProjects', 'pastProjects'));
    }

    public function showAdmEdit($id)
    {
        $event = EventDetail::where('event_id', $id)->firstOrFail();
        return view('admin.edit-cb', compact('event'));
    }

    public function updateCb(Request $request, $event_id)
    {
        $validator = Validator::make($request->all(), [
            'e_name' => 'required|string|max:255',
            'e_type' => 'required|string|max:255',
            'organizer' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'open_reg' => 'required|date',
            'close_reg' => 'required|date',
            'report_deadline' => 'required|date',
            'e_desc' => 'required|string',
            'notes' => 'nullable|string',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        try {
            $event = EventDetail::where('event_id', $event_id)->firstOrFail();
            $event->update($request->all());
    
            return redirect()->route('admCb_course')->with('success', 'Event updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An unexpected error occurred. Please try again.');
        }
    }    
    
}
