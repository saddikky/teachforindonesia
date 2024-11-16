@extends('user-layout')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/se-details.css') }}">
@endpush

@section('content')

<body>
    <div class="containerss">
        <h2 class="form-title">Event Detail</h2>
        <div class="form-group">
            <label>Status</label>
            <span>: Not Registered</span>
        </div>
        <div class="form-group">
            <label>Event Name</label>
            <span>: Lomba HIMPAUDI Dalam Memperingati Hari Pahlawan</span>
        </div>
        <div class="form-group">
            <label>Event Type</label>
            <span>: Social Event</span>
        </div>
        <div class="form-group">
            <label>Opening Registration</label>
            <span>: 09 November 2024</span>
        </div>
        <div class="form-group">
            <label>Closing Registration</label>
            <span>: 11 November 2024</span>
        </div>
        <div class="form-group">
            <label>Max Confirmation Date</label>
            <span>: H+1 After Registration</span>
        </div>
        <div class="form-group">
            <label>Evaluation Deadline</label>
            <span>: 22 November 2024</span>
        </div>
        <div class="form-group">
            <label>Category</label>
            <span>: Education</span>
        </div>
        <div class="form-group">
            <label>Scale</label>
            <span>: Local</span>
        </div>
        <div class="form-group">
            <label>Event Description</label>
            <span>: Kegiatan ini tidak boleh diikuti Binusian 25 atau mahasiswa lainnya...</span>
        </div>
        <div class="form-group">
            <label>Organizer</label>
            <span>: SSO Kemangsian</span>
        </div>
        <div class="form-group">
            <label>Role</label>
            <span>: Volunteer</span>
        </div>
        <div class="form-group">
            <label>Requirements</label>
            <span>: hNGGGG</span>
        </div>
        <div class="button-container">
            <a href="{{ route('social-event') }}" class="status in-review">BACK</a>
            <a href="{{ route('SEregister') }}" class="status reviewed">SIGN UP</a>          
        </div>
    </div>
</body>

@endsection