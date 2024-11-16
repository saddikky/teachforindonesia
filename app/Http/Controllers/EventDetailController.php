<?php

namespace App\Http\Controllers;

use App\Models\EventDetail;
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
<<<<<<< HEAD
        $events = EventDetail::all();

        return view('admin.cb-course', compact('events'));
=======
        return view('admin.cb-course');
>>>>>>> fc48673907dbea020c02c8d0370ee6d0d7cebc9e
    }

    function showAdmCreate(){
        return view('admin.create-cb');
    }

    public function createCb(Request $request)
    {
        // Define custom validation rules
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

        // Check if the validation failed
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            // Attempt to create the event
            EventDetail::create($request->all());
            
            // Redirect with success message
            return redirect()->route('admCb_course')->with('success', 'Event Detail created successfully.');
        } catch (QueryException $e) {
<<<<<<< HEAD
            dd($e->getMessage()); // Menampilkan pesan error query di browser
=======
            // Catch database-related errors
>>>>>>> fc48673907dbea020c02c8d0370ee6d0d7cebc9e
            return redirect()->back()->with('error', 'There was an error creating the event. Please try again.');
        } catch (\Exception $e) {
            // Catch any other errors
            return redirect()->back()->with('error', 'An unexpected error occurred. Please try again.');
        }
    }


    function showAdmCreate2(){
        return view('admin.create-cb-2');
    }

    function showAdmProject(){
        return view('admin.cb-project');
    }

<<<<<<< HEAD
    public function showAdmEdit($id)
    {
        // Temukan event berdasarkan event_id
        $event = EventDetail::where('event_id', $id)->firstOrFail();

        // Return ke view dengan data event
        return view('admin.edit-cb', compact('event'));
    }

    public function updateCb(Request $request, $event_id)
    {
        // Validasi input
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
            // Temukan data berdasarkan event_id dan update
            $event = EventDetail::where('event_id', $event_id)->firstOrFail();
            $event->update($request->all());
    
            // Redirect dengan pesan sukses
            return redirect()->route('admCb_course')->with('success', 'Event updated successfully.');
        } catch (\Exception $e) {
            // Tangani error
            return redirect()->back()->with('error', 'An unexpected error occurred. Please try again.');
        }
    }    


=======
    function showAdmEdit(){
        return view('admin.edit-cb');
    }

>>>>>>> fc48673907dbea020c02c8d0370ee6d0d7cebc9e
    function showAdmEdit2(){
        return view('admin.edit-cb-2');
    }
}
