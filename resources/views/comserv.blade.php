@extends('user-layout')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/comserv.css') }}">
@endpush

@section('content')

    <h3 class="page-title">Community Service Hours</h3>
    <hr class="my-3">

    <div class="containerss">
        @forelse ($reviewedSubmissions as $submission)
            <div class="event-row">
                <div class="event-title">
                    <h6 class="title-bold">{{ $submission->project_name }}</h6>    
                    <h6 class="event-date">{{ \Carbon\Carbon::parse($submission->report_deadline)->format('d F Y') }}</h6>
                </div>
                <div class="event-hours">
                    <span class="star-icon">⭐</span> 
                    {{ $submission->comserve_hours ?? 5 }} Hours
                </div>
            </div>
        @empty
            <p>No reviewed submissions available.</p>
        @endforelse
    </div>



@endsection