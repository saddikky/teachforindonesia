@extends('user-layout')

@push('styles')
   <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endpush

@section('content')

   <div>
       <h3>Dashboard</h3>
   </div>

   <hr class="my-3">
   <!-- Main Content -->
   <div class="dashboard">
   <div class="cards-container">
       <!-- Community Service Hours Card -->
<div class="card community-service" data-comserve="{{ $user->comserve }}">
    <div class="kiri">
        <h4>Community Service Hours</h4>
    </div>
    <div class="circle-container">
        <div class="progress-value" id="progress-value">0/30    </div>
        <svg width="300" height="200">
            <defs>
                <linearGradient id="gradient" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%" style="stop-color:#4caf50; stop-opacity:1" />
                    <stop offset="100%" style="stop-color:#81c784; stop-opacity:1" />
                </linearGradient>
            </defs>
            <!-- Background Circle -->
            <circle cx="100" cy="100" r="70" id="bg-circle" stroke="#ccc" stroke-width="10" fill="none"></circle>
            <!-- Progress Circle -->
            <circle cx="100" cy="100" r="70" id="progress-circle" stroke="url(#gradient)" stroke-width="10" fill="none" stroke-dasharray="440" stroke-dashoffset="440"></circle>
        </svg>
    </div>
</div>


    <div class="card soc">
        <div class="kiri">
            <h4>Ongoing Character Building Course</h4>
        </div>
        <div class="event-list">
        @foreach ($events as $event)
            <div class="event">
                <span>{{ $event->e_name }}</span>
                <span>{{ \Carbon\Carbon::parse($event->open_reg)->format('d M Y, H:i') }} GMT+7</span>
            </div>
        @endforeach
        <a href="{{ route('cb-course') }}" class="view-more" style="text-align: right">View more >></a>
    </div>
       </div>
   </div>




   <!-- My Submission Card -->
   <div class="card submission-card">
        <div class="kiri">
            <h4>My Submission</h4>
        </div>
        <div class="submission-list">
            @foreach ($submissions as $submission)
                <div class="submission">
                    <span>{{ $submission->project_name }}</span>
                    <span class="status {{ $submission->status }}">{{ strtoupper($submission->status) }}</span>
                </div>
            @endforeach
       </div>
   </div>
</div>



@endsection




@push('scripts')
    <script>
        window.userComserve = {!! $user->comserve ?? 0 !!};
    </script>
   <script src="{{ asset('js/dashboard.js') }}"></script>
@endpush
