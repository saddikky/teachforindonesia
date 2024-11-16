@extends('admin.admin-layout')


@push('styles')
    <link rel="stylesheet" href="{{ asset('css/admin/adm-create-cb.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
@endpush


@section('content')

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

@endsection
