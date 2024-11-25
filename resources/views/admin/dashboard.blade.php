@extends('admin.admin-layout')

@push('styles')
   <link rel="stylesheet" href="{{ asset('css/admin/adm-dashboard.css') }}">
@endpush

@section('content')

   <div>
       <h3 class="page-title">Dashboard</h3>
   </div>
   <hr class="my-3">

    <div class="dashboard">
        <div class="cards-container">
            <div class="card soc">
                <div class="kiri">
                    <h4>Ongoing Character Building Course</h4>
                </div>
                <div class="event-list">
                    @foreach ($ongoingEvents as $event)
                        <div class="event">
                            <span>{{ $event->e_name }}</span>
                            <span>{{ \Carbon\Carbon::parse($event->report_deadline)->format('d F Y, h:i A') }} GMT+7</span>
                        </div>
                    @endforeach
                    <a href="{{ route('admCreate') }}" class="view-more" style="text-align: right">View more >></a>
                </div>
            </div>
        </div>

        <div class="card submission-card">
            <div class="kiri">
                <h4>Project Submissions</h4>
            </div>
            <div class="submission-list">
                @foreach ($submissions as $submission)
                    <div class="submission">
                        <span>{{ $submission->project_name }}</span>
                        <span class="status {{ $submission->status }}">{{ strtoupper($submission->status) }}</span>
                    </div>
                @endforeach
                <a href="{{ route('admProject') }}" class="view-more" style="text-align: right">View more >></a>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
   <script src="{{ asset('js/dashboard.js') }}"></script>
@endpush