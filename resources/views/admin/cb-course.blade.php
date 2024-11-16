@extends('admin.admin-layout')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/admin/adm-cb-course.css') }}">
@endpush

@section('content')

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

    <div>
        <h3 class="page-title">Character Building Course</h3>
    </div>

    <hr class="my-3">

    <div>
        <a href="{{ route('admCreate') }}" class="status blue">ADD NEW CB COURSE</a>
    </div>

    <hr class="my-3">

<div class="cards-container">
            @foreach ($events as $event)
            <div class="card">
                <h4>{{ $event->e_name }}</h4>
                <p>Character Building Type: {{ $event->cb_type }}</p>
                <p>Opening Registration: {{ \Carbon\Carbon::parse($event->open_reg)->format('d M Y') }}</p>
                <p>Closing Registration: {{ \Carbon\Carbon::parse($event->close_reg)->format('d M Y') }}</p>
                <p>Report Deadline: {{ \Carbon\Carbon::parse($event->report_deadline)->format('d M Y') }}</p>
                <a href="{{ route('admEdit', ['id' => $event->event_id]) }}" class="status waiting">EDIT</a>
            </div>
            @endforeach

            <!-- <div class="card">
                <h4>Project CB Course Odd 2023/2024</h4>
                <p>CB Type: Pancasila</p>
                <p>Opening Registration: 2023-01-01</p>
                <p>Closing Registration: 2023-02-01</p>
                <p>Report Deadline: 2023-05-27</p>
                <button class="status waiting">EDIT</button>
            </div>

            <div class="card">
                <h4>Project CB Course Odd 2024/2025</h4>
                <p>CB Type: Pendidikan</p>
                <p>Opening Registration: 2024-02-10</p>
                <p>Closing Registration: 2024-03-01</p>
                <p>Report Deadline: 2024-12-25</p>
                <button class="status waiting">EDIT</button>
            </div>

            <div class="card">
                <h4>Project CB Course Odd 2024/2025</h4>
                <p>CB Type: Pendidikan</p>
                <p>Opening Registration: 2024-02-10</p>
                <p>Closing Registration: 2024-03-01</p>
                <p>Report Deadline: 2024-12-25</p>
                <button class="status waiting">EDIT</button>
            </div>

            <div class="card">
                <h4>Project CB Course Odd 2024/2025</h4>
                <p>CB Type: CB Pendidikan</p>
                <p>Opening Registration: 2024-02-10</p>
                <p>Closing Registration: 2024-03-01</p>
                <p>Report Deadline: 2024-12-25</p>
                <button class="status waiting">EDIT</button>
            </div> -->
</div>

@endsection