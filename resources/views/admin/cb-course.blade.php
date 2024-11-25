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
    @forelse ($events as $event)
    <div class="card">
        <h4>{{ $event->e_name }}</h4>
        <p>Character Building Type: {{ $event->cb_type }}</p>
        <p>Opening Registration: {{ \Carbon\Carbon::parse($event->open_reg)->format('d M Y') }}</p>
        <p>Closing Registration: {{ \Carbon\Carbon::parse($event->close_reg)->format('d M Y') }}</p>
        <p>Report Deadline: {{ \Carbon\Carbon::parse($event->report_deadline)->format('d M Y') }}</p>
        <a href="{{ route('admEdit', ['id' => $event->event_id]) }}" class="status waiting">EDIT</a>
    </div>
    @empty
        <div class="centered-div" style="text-align: center; color: darkgrey;">
            <p>No Course Created</p>
        </div>
    @endforelse
</div>

@endsection