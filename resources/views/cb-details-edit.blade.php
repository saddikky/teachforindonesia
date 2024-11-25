@extends('user-layout')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/cb-details.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
@endpush


@section('content')


<body>
    
        <div class="containerss">
            <form action="{{ route('progress-form.update', ['id' => $progress->p_id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <section class="progress-form">
                    <h2 class="form-title">Edit Progress Form</h2>
                    <div class="form-group">
                        <label for="project_name">Project Name</label>
                        <input type="text" id="project_name" name="project_name" value="{{ $progress->project_name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="project_location">Project Location</label>
                        <input type="text" id="project_location" name="project_location" value="{{ $progress->project_location }}" required>
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select id="category" name="category" required>
                            <option value="" disabled selected>Select Option</option>
                            <option value="Education" {{ $progress->category == 'Education' ? 'selected' : '' }} >Education</option>
                            <option value="Environment" {{ $progress->category == 'Environment' ? 'selected' : '' }} >Environment</option>
                            <option value="Health" {{ $progress->category == 'Health' ? 'selected' : '' }} >Health</option>
                            <option value="Welfare" {{ $progress->category == 'Welfare' ? 'selected' : '' }} >Welfare</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="scale">Scale</label>
                        <select id="scale" name="scale" required>
                            <option value="" disabled selected>Select Option</option>
                            <option value="Local" {{ $progress->scale == 'Local' ? 'selected' : '' }} >Local</option>
                            <option value="National" {{ $progress->scale == 'National' ? 'selected' : '' }} >National</option>
                            <option value="International" {{ $progress->scale == 'International' ? 'selected' : '' }}>International</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="report">Report</label>
                        <input type="file" id="report" name="report" accept=".pdf" required>
                    </div>
                    <div class="form-group">
                        <label for="video">Video</label>
                        <input type="file" id="video" name="video" accept="video/*" required>
                    </div>
                    <div class="form-group">
                        <label for="report_link">Report Link</label>
                        <input type="url" id="report_link" name="report_link" value="{{ $progress->video_link }}" required>
                    </div>
                    <div class="form-group">
                        <label for="video_link">Video Link</label>
                        <input type="url" id="video_link" name="video_link" value="{{ $progress->video_link }}" required>
                    </div>

                    <input type="hidden" name="event_id" value="{{ $progress->event_id }}">
                
                    <div class="button-container">
                        <a href="{{ route('cb-course') }}" class="back-button">BACK</a>
                        <button type="submit" class="next-button">UPDATE</button>    
                    </div>
                </section>
            </form>
        </div>
    </div>
</body>


@endsection
