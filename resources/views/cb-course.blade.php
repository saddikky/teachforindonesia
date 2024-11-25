
@extends('user-layout')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/cb-course.css') }}">
@endpush

@section('content')

    <div>
        <h3 class="page-title">Character Building Course</h3>
    </div>

    <hr class="my-3">

    <div class="cards-container">
    <!-- Events with Progress -->
    @foreach ($eventsWithProgress as $event)
        @php
            $progress = $progressDetails->firstWhere('event_id', $event->event_id);
        @endphp
        <div class="card">
            <h4>{{ $event->e_name }}</h4>
            <p>Character Building Type: {{ $event->cb_type }}</p>
            <p>Opening Registration: {{ \Carbon\Carbon::parse($event->open_reg)->format('d M Y') }}</p>
            <p>Closing Registration: {{ \Carbon\Carbon::parse($event->close_reg)->format('d M Y') }}</p>
            <p>Report Deadline: {{ \Carbon\Carbon::parse($event->report_deadline)->format('d M Y') }}</p>
            @if ($progress)
                <a href="{{ $progress->status === 'revision' ? route('progress-form.edit', $progress->p_id) : '#' }}" class="status {{ $progress->status }}">
                {{ strtoupper($progress->status) }}</a>
            @endif
        </div>
    @endforeach

    <!-- Events without Progress -->
    @foreach ($eventsWithoutProgress as $event)
        <div class="card">
            <h4>{{ $event->e_name }}</h4>
            <p>Character Building Type: {{ $event->cb_type }}</p>
            <p>Opening Registration: {{ \Carbon\Carbon::parse($event->open_reg)->format('d M Y') }}</p>
            <p>Closing Registration: {{ \Carbon\Carbon::parse($event->close_reg)->format('d M Y') }}</p>
            <p>Report Deadline: {{ \Carbon\Carbon::parse($event->report_deadline)->format('d M Y') }}</p>
            <a href="{{ route('CBform.show', ['event_id' => $event->event_id]) }}" class="status waiting">Waiting for Report</a>
        </div>
    @endforeach
    </div>

@endsection