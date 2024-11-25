<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\ProgressDetail;
use App\Models\EventDetail;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;


class ProgressDetailController extends Controller
{
    function showCBCourse(){
        $events = EventDetail::all(); // Ambil semua data event
        return view('cb-course', compact('events'));
    }

    public function showEventsForUser(Request $request)
    {
        $userNim = auth()->user()->nim;

        $progressDetails = ProgressDetail::where('nim', $userNim)->get();
        $allEvents = EventDetail::all();
        $eventsWithProgress = $allEvents->filter(function ($event) use ($progressDetails) {
            return $progressDetails->pluck('event_id')->contains($event->event_id);
        });
        $eventsWithoutProgress = $allEvents->filter(function ($event) use ($progressDetails) {
            return !$progressDetails->pluck('event_id')->contains($event->event_id);
        });

        return view('cb-course', [
            'eventsWithProgress' => $eventsWithProgress,
            'eventsWithoutProgress' => $eventsWithoutProgress,
            'progressDetails' => $progressDetails,
        ]);
    }

    public function showCBform($event_id){
        
        $event = EventDetail::find($event_id);
        if (!$event) {
            return redirect()->back()->with('error', 'Event not found.');
        }
        return view('cb-details', [
            'title' => 'cb-details',
            'active' => 'cb-details',
            'event' => $event,
            'event_id' => $event_id
        ]);
    }


    public function CBform(Request $request, $event_id) {
        Log::info('Received data: ', $request->all());
        Log::info('Report file: ', ['report' => $request->file('report')]);
        Log::info('Video file: ', ['video' => $request->file('video')]);
        Log::info("Event ID: ", ['event_id' => $event_id]);
       
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
            'report' => 'required|file|mimes:pdf',
            'video' => 'required|file|mimes:mp4,avi,mov',
            'report_link' => 'required|url',
            'video_link' => 'required|url',
        ]);

        if ($validator->fails()) {
            Log::error('Validation failed: ', $validator->errors()->toArray());
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $validatedData = $request->except(['report', 'video']);

        $reportPath = null;
        if ($request->hasFile('report')) {
            $reportPath = $request->file('report')->store('post-reports');
        }

        $videoPath = null;
        if ($request->hasFile('video')) {
            $videoPath = $request->file('video')->store('post-videos');
        }
        
        try{
            $CBdata = ProgressDetail::create([
                'status' => 'in-review',
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
                'report' => $reportPath,
                'video' => $videoPath,
                'report_link' => $request->report_link,
                'video_link' => $request->video_link,
                'event_id' => $event_id,
            ]);
        } catch (\Exception $e) {
            Log::error('Database insert failed: ', ['error' => $e->getMessage()]);
            return redirect()->back()->with('error', 'Failed to submit form. Please try again.');
        }
        return redirect()->route('cb-course')->with('success', 'Form submitted successfully!');
    }

    public function updateStatus(Request $request){
        $userNim = auth()->user()->nim;
        $p_id = $request->input('p_id');
        $status = $request->input('status');
        
        $progressDetail = ProgressDetail::where('nim', $userNim)->where('p_id', $p_id)->first();
        $event = EventDetail::find($progressDetail->event_id);

        $progressDetail->status = $status;
            
        if ($status === 'reviewed') {
            $user = $progressDetail->user;
            $user->comserve += 5;
            $user->save();
        }

        $progressDetail->save();

        return redirect()->route('admProject')->with('success', 'Progress detail updated successfully!');
    }

    public function editProgressForm($id){
        $progress = ProgressDetail::with('eventDetail')->where('p_id', $id)->first();
        return view('cb-details-edit', compact('progress'));
    }
    
    public function updateProgressForm(Request $request, $id)
    {
        $validatedData = $request->validate([
            'project_name' => 'required|string|max:255',
            'project_location' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'scale' => 'required|string|max:255',
            'report' => 'required|file|mimes:pdf',
            'video' => 'required|file|mimes:mp4,avi,mov',
            'report_link' => 'url',
            'video_link' => 'url',
        ]);
        
        Log::info('Incoming request data:', $validatedData);
        $progress = ProgressDetail::where('p_id', $id)->firstOrFail();

        $progress->project_name = $request->input('project_name');
        $progress->project_location = $request->input('project_location');
        $progress->category = $request->input('category');
        $progress->scale = $request->input('scale');
        $progress->report_link = $request->input('report_link');
        $progress->video_link = $request->input('video_link');
        $progress->status = 'in-review';

        if ($request->hasFile('report')) {
            $reportPath = $request->file('report')->store('reports');
            $progress->report = $reportPath;
        }

        if ($request->hasFile('video')) {
            $videoPath = $request->file('video')->store('videos');
            $progress->video = $videoPath;
        }

        $progress->save();

        return redirect()->route('cb-course')->with('success', 'Progress form updated successfully!');  
    }
}


		
