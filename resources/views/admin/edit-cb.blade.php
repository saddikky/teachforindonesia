@extends('admin.admin-layout')


@push('styles')
    <link rel="stylesheet" href="{{ asset('css/admin/adm-create-cb.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
@endpush


@section('content')

<<<<<<< HEAD
<div class="containerss">
    <section class="student-detail">
        <h2 class="form-title">Edit Character Building Event Detail</h2>
        <form action="{{ route('updateCb', ['id' => $event->event_id]) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="e_name">Event Name</label>
                <input type="text" id="e_name" name="e_name" value="{{ old('e_name', $event->e_name) }}" required>
            </div>
            <div class="form-group">
                <label for="e_type">Event Type</label>
                <input type="text" id="e_type" name="e_type" value="{{ old('e_type', $event->e_type) }}" required>
            </div>
            <div class="form-group">
                <label for="organizer">Organizer</label>
                <input type="text" id="organizer" name="organizer" value="{{ old('organizer', $event->organizer) }}" required>
            </div>
            <div class="form-group">
                <label for="role">Role</label>
                <input type="text" id="role" name="role" value="{{ old('role', $event->role) }}" required>
            </div>
            <div class="form-group">
                <label for="open_reg">Opening Registration</label>
                <input type="date" id="open_reg" name="open_reg" value="{{ old('open_reg', \Carbon\Carbon::parse($event->open_reg)->format('Y-m-d')) }}" required>
            </div>
            <div class="form-group">
                <label for="close_reg">Closing Registration</label>
                <input type="date" id="close_reg" name="close_reg" value="{{ old('close_reg', \Carbon\Carbon::parse($event->close_reg)->format('Y-m-d')) }}" required>
            </div>
            <div class="form-group">
                <label for="report_deadline">Report Deadline</label>
                <input type="date" id="report_deadline" name="report_deadline" value="{{ old('report_deadline', \Carbon\Carbon::parse($event->report_deadline)->format('Y-m-d')) }}" required>
            </div>
            <div class="form-group">
                <label for="e_desc">Event Description</label>
                <input type="text" id="e_desc" name="e_desc" value="{{ old('e_desc', $event->e_desc) }}" required>
            </div>
            <div class="form-group">
                <label for="notes">Notes</label>
                <input type="text" id="notes" name="notes" value="{{ old('notes', $event->notes) }}">
            </div>
            <div class="button-container">
                <a href="{{ route('admCb_course') }}" class="back-button">BACK</a>
                <button type="submit" class="next-button">UPDATE</button>
            </div>
        </form>
    </section>
</div>

=======
    <div class="centered-div">
        <ol class="lg:flex items-center w-full space-y-4 lg:space-y-0">
            <li class="flex-1">
                <a class="flex items-center font-medium space-x-3 p-4 rounded-lg">
                    <div class="flex-shrink-0">
                        <span class="flex-shrink-0 w-10 h-10 border rounded-full transparent flex justify-center items-center text-sm">01</span>
                    </div>
                    <h4 class="text-base">Event Detail</h4>
                </a>
            </li>
            <svg class="w-5 h-5 ml-2 stroke-indigo-600 sm:ml-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M5 18L9.67462 13.0607C10.1478 12.5607 10.3844 12.3107 10.3844 12C10.3844 11.6893 10.1478 11.4393 9.67462 10.9393L5 6M12.6608 18L17.3354 13.0607C17.8086 12.5607 18.0452 12.3107 18.0452 12C18.0452 11.6893 17.8086 11.4393 17.3354 10.9393L12.6608 6" stroke="#333" stroke-width="1.6" stroke-linecap="round" />
            </svg>
            <li class="flex-1">
                <a class="flex items-center font-medium space-x-3 p-4 rounded-lg">
                    <span class="flex-shrink-0 w-10 h-10 border rounded-full before flex justify-center items-center text-sm">02</span>
                    <h4 class="text-before whitespace-nowrap">Student Detail</h4>
                </a>
            </li>
        </ol>
    </div>

<div class="containerss">
    <!-- BELUM JADI FORM -->
        <section class="student-detail">
            <h2 class="form-title">Character Building Event Detail</h2>
            <div class="form-group">
                <label for="e_name">Event Name</label>
                <input type="text" id="e_name" value="fetch pake {}" required>
            </div>
            <div class="form-group">
                <label for="e_type">Event Type</label>
                <input type="text" id="e_type" value="fetch pake {}" required>
            </div>
            <div class="form-group">
                <label for="organizer">Organizer</label>
                <input type="text" id="organizer" value="fetch pake {}" required>
            </div>
            <div class="form-group">
                <label for="role">Role</label>
                <input type="text" id="role" value="fetch pake {}" required>
            </div>
            <div class="form-group">
                <label for="open-reg">Opening Registration</label>
                <input type="date" id="open-reg" value="fetch pake {}" required>
            </div>
            <div class="form-group">
                <label for="close-reg">Closing Registration</label>
                <input type="date" id="close-reg" value="fetch pake {}" required>
            </div>
            <div class="form-group">
                <label for="report_deadline">Report Deadline</label>
                <input type="date" id="report_deadline" value="fetch pake {}" required>
            </div>
            <div class="form-group">
                <label for="e_desc">Event Description</label>
                <input type="text" id="e_desc" value="fetch pake {}" required>
            </div>
            <div class="form-group">
                <label for="notes">Notes</label>
                <input type="text" id="notes" value="fetch pake {}" required>
            </div>

            <div class="button-container">
                <a href="{{ route('admCb_course') }}" class="back-button">BACK</a>
                <a href="{{ route('admCreate2')}}" class="next-button">NEXT</a>    
            </div>
        </section>
       
    </div>
   
>>>>>>> fc48673907dbea020c02c8d0370ee6d0d7cebc9e
@endsection
