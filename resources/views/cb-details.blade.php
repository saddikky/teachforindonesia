@extends('user-layout')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/cb-details.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
@endpush


@section('content')


<body>


    <!-- <div class="centered-div">
        <ol class="lg:flex items-center w-full space-y-4 lg:space-y-0">
            <li class="flex-1">
                <a class="flex items-center font-medium space-x-3 p-4 rounded-lg">
                    <div class="flex-shrink-0">
                        <span class="flex-shrink-0 w-10 h-10 border rounded-full transparent flex justify-center items-center text-sm">01</span>
                    </div>
                    <h4 class="text-base">Student Detail</h4>
                </a>
            </li>
            <svg class="w-5 h-5 ml-2 stroke-indigo-600 sm:ml-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M5 18L9.67462 13.0607C10.1478 12.5607 10.3844 12.3107 10.3844 12C10.3844 11.6893 10.1478 11.4393 9.67462 10.9393L5 6M12.6608 18L17.3354 13.0607C17.8086 12.5607 18.0452 12.3107 18.0452 12C18.0452 11.6893 17.8086 11.4393 17.3354 10.9393L12.6608 6" stroke="#333" stroke-width="1.6" stroke-linecap="round" />
            </svg>
            <li class="flex-1">
                <a class="flex items-center font-medium space-x-3 p-4 rounded-lg">
                    <span class="flex-shrink-0 w-10 h-10 border rounded-full before flex justify-center items-center text-sm">02</span>
                    <h4 class="text-before whitespace-nowrap">Progress Update</h4>
                </a>
            </li>
        </ol>
    </div> -->
   
    <!-- <form action="{{ route('CBform.submit', ['event_id' => $event->event_id]) }}" method="get"> -->
    <div class="containerss">
    <h2 class="form-title">Character Building Course Detail</h2>
        <div class="form-group">
            <label>Status</label>
            <span>: Waiting for Report</span>
        </div>
        <div class="form-group">
            <label>Event Name</label>
            <span>: {{$event->e_name}} </span>
        </div>
        <div class="form-group">
            <label>Event Type</label>
            <span>: {{$event->e_type}} </span>
        </div>
        <div class="form-group">
            <label>Organizer</label>
            <span>: {{$event->organizer}} </span>
        </div>
        <div class="form-group">
            <label>Role</label>
            <span>: {{$event->role}} </span>
        </div>
        <div class="form-group">
            <label>Opening Registration</label>
            <span>: {{\Carbon\Carbon::parse($event->open_reg)->format('d/m/Y H:i')}} </span>
        </div>
        <div class="form-group">
            <label>Closing Registration</label>
            <span>: {{\Carbon\Carbon::parse($event->close_reg)->format('d/m/Y H:i')}} </span>
        </div>
        <div class="form-group">
            <label>Report Deadline</label>
            <span>: {{\Carbon\Carbon::parse($event->report_deadline)->format('d/m/Y H:i')}} </span>
        </div>
        <div class="form-group">
            <label>Event Description</label>
            <span>: {{$event->e_desc}} </span>
        </div>
        <div class="form-group">
            <label>Notes</label>
            <span>: {{$event->notes}} </span>
        </div>
    </div>
<!-- </form> -->

    <form method="post" action="{{ route('CBform.submit', ['event_id' => $event->event_id]) }}" enctype="multipart/form-data">
    @csrf
        <div class="containerss">
            <section class="student-detail">
                <h2 class="form-title">Student Detail Form</h2>
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" id="nim" name="nim" value="" required>
                </div>
                <div class="form-group">
                    <label for="leader_nim">Leader NIM</label>
                    <input type="text" id="leader_nim" name="leader_nim" value="" required>
                </div>
                <div class="form-group">
                    <label for="lecturer_code">Lecture Code</label>
                    <input type="text" id="lecturer_code" name="lecturer_code" value="" required>
                </div>
                <div class="form-group">
                    <label for="lecturer">Lecturer</label>
                    <input type="text" id="lecturer" name="lecturer" value="" required>
                </div>
                <div class="form-group">
                <label for="cb_type">CB Type</label>
                <input type="text" id="cb_type" name="cb_type" value="{{ $event->cb_type }}" required>   
                </div>
                <div class="form-group">
                    <label for="cb_class">CB Class</label>
                    <input type="text" id="cb_class" name="cb_class" value="" required>
                </div>
            </section>
        </div>


        <div class="containerss">
            <section class="progress-form">
                <h2 class="form-title">Progress Form</h2>
                <div class="form-group">
                    <label for="project_name">Project Name</label>
                    <input type="text" id="project_name" name="project_name" value="" required>
                </div>
                <div class="form-group">
                    <label for="project_location">Project Location</label>
                    <input type="text" id="project_location" name="project_location" value="" required>
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <select id="category" name="category" required>
                        <option value="" disabled selected>Select Option</option>
                        <option value="Education">Education</option>
                        <option value="Environment">Environment</option>
                        <option value="Health">Health</option>
                        <option value="Welfare">Welfare</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="scale">Scale</label>
                    <select id="scale" name="scale" required>
                        <option value="" disabled selected>Select Option</option>
                        <option value="Local">Local</option>
                        <option value="National">National</option>
                        <option value="International">International</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="report">Report</label>
                    <input type="file" id="report" name="report" accept=".pdf" required>
                </div>
                <div class="form-group">
                    <label for="video">Video</label>
                    <input type="file" id="video" name="video" accept="video/*" required>
                </div>
                <div class="form-group">
                    <label for="report_link">Report Link</label>
                    <input type="url" id="report_link" name="report_link" value="https://drive.google.com/file/d/26202063094/view" required>
                </div>
                <div class="form-group">
                    <label for="video_link">Video Link</label>
                    <input type="url" id="video_link" name="video_link" value="https://drive.google.com/file/d/26202063094/view" required>
                </div>

                <input type="hidden" name="event_id" value="{{ $event_id }}">
               
                <div class="button-container">
                    <a href="{{ route('cb-course') }}" class="back-button">BACK</a>
                    <button type="submit" class="next-button">SUBMIT</button>    
                </div>
            </section>
        </form>
    </div>
    </div>
</body>


@endsection
