@extends('admin.admin-layout')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/admin/adm-cb-project.css') }}">
@endpush

@section('content')

    <div>
        <h3 class="page-title">Character Building Project Report Submission</h3>
    </div>

    <hr class="my-3">
    
    <div class="tabs">
        <ul class="C--tabs type-3 nav nav-tabs">
            <li class="tabssrcomp tab-item nav-item">
                <a class="pb-4 label-tab tab-item-link tab-active nav-link" data-tab="ongoing">NEED TO BE REVIEWED</a>
            </li>
            <li class="tabssrcomp tab-item nav-item">
                <a class="pb-4 label-tab tab-item-link tab-inactive nav-link" data-tab="past">REVIEWED</a>
            </li>
        </u1>
    </div>

    <div class="cards-container">
    <!-- Ongoing Projects Tab -->
    <div class="tab-content" data-tab="ongoing">
        @forelse ($ongoingProjects as $progress)
            <div class="card ongoing">
                <h4>{{ $progress->project_name }}</h4>
                <p>Character Building Type: {{ $progress->cb_type }}</p>
                <p>Lecturer: {{ $progress->lecturer }}</p>
                <p>Leader Name: {{ $progress->leader_nim }}</p>
                <p>Character Building Class: {{ $progress->cb_class }}</p>
                <a href="{{ $progress->video_link }}" class="status in-review">VIEW VIDEO</a>
                <a href="{{ $progress->report_link }}" class="status in-review">VIEW REPORT</a>
                <div class="button-container">
                    <form action="{{ route('updateStatus') }}" method="POST" style="display: inline;">
                        @csrf
                        <input type="hidden" name="status" value="revision">
                        <input type="hidden" name="p_id" value="{{ $progress->p_id }}">
                        <button type="submit" class="status waiting">REVISION</button>
                    </form>
                    <form action="{{ route('updateStatus') }}" method="POST" style="display: inline;">
                        @csrf
                        <input type="hidden" name="status" value="reviewed">
                        <input type="hidden" name="p_id" value="{{ $progress->p_id }}">
                        <button type="submit" class="status blue">ACCEPT</button>
                    </form>
                </div>
            </div>
        @empty
            <div class="centered-div" style="text-align: center; color: darkgrey;">
                <p>No Submission</p>
            </div>
        @endforelse
    </div>

    <!-- Past Projects Tab -->
    <div class="tab-content" data-tab="past">
        @forelse ($pastProjects as $progress)
            <div class="card past">
                <h4>{{ $progress->project_name }}</h4>
                <p>Character Building Type: {{ $progress->cb_type }}</p>
                <p>Lecturer: {{ $progress->lecturer }}</p>
                <p>Leader Name: {{ $progress->leader_nim }}</p>
                <p>Character Building Class: {{ $progress->cb_class }}</p>
                <div class="button-container">
                    <button class="status reviewed">REVIEWED</button>
                </div>
            </div>
        @empty
            <div class="centered-div" style="text-align: center; color: darkgrey;">
                <p>No Submission</p>
            </div>
        @endforelse
    </div>
</div>

    
    <script src="script.js"></script>
    
@endsection

@push('scripts')
    <script src="{{ asset('js/social-event.js') }}"></script>
@endpush