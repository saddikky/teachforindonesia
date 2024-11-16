@extends('admin.admin-layout')


@push('styles')
    <link rel="stylesheet" href="{{ asset('css/admin/adm-create-cb.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
@endpush

<<<<<<< HEAD
=======

>>>>>>> fc48673907dbea020c02c8d0370ee6d0d7cebc9e
@section('content')
@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

@if(session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
@endif

<form action="{{ route('createCb') }}" method="POST" class="post">
    @csrf
    <div class="containerss">
        <section class="student-detail">
            <h2 class="form-title">Character Building Event Detail</h2>
            <div class="form-group">
                <label for="e_name">Event Name</label>
                <input type="text" id="e_name" name="e_name" value="{{ old('e_name') }}" required>
                @error('e_name') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="e_type">Event Type</label>
                <select id="e_type" name="e_type" required>
                    <option value="" disabled selected>Select Option</option>
                    <option value="Social Event" {{ old('e_type') == 'Social Event' ? 'selected' : '' }}>Social Event</option>
                </select>
                @error('e_type') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="organizer">Organizer</label>
                <select id="organizer" name="organizer" required>
                    <option value="" disabled selected>Select Option</option>
                    <option value="BINUS University" {{ old('organizer') == 'BINUS University' ? 'selected' : '' }}>BINUS University</option>
                </select>
                @error('organizer') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="role">Role</label>
                <select id="role" name="role" required>
                    <option value="" disabled selected>Select Option</option>
                    <option value="Volunteer" {{ old('role') == 'Volunteer' ? 'selected' : '' }}>Volunteer</option>
                </select>
                @error('role') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="open_reg">Opening Registration</label>
                <input type="date" id="open_reg" name="open_reg" value="{{ old('open_reg') }}" required>
                @error('open_reg') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="close_reg">Closing Registration</label>
                <input type="date" id="close_reg" name="close_reg" value="{{ old('close_reg') }}" required>
                @error('close_reg') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="report_deadline">Report Deadline</label>
                <input type="date" id="report_deadline" name="report_deadline" value="{{ old('report_deadline') }}" required>
                @error('report_deadline') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="e_desc">Event Description</label>
                <input type="text" id="e_desc" name="e_desc" value="{{ old('e_desc') }}" required>
                @error('e_desc') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="notes">Notes</label>
                <input type="text" id="notes" name="notes" value="{{ old('notes') }}">
                @error('notes') <span class="error">{{ $message }}</span> @enderror
            </div>
        </section>
    </div>

    <div class="containerss">
        <section class="student-detail">
            <h2 class="form-title">Student Detail Form</h2>
            <div class="form-group">
                <label for="cb_type">CB Type</label>
                <select id="cb_type" name="cb_type" required>
                    <option value="" disabled selected>Select Option</option>
                    <option value="Pancasila" {{ old('cb_type') == 'Pancasila' ? 'selected' : '' }}>Pancasila</option>
                    <option value="Kewarganegaraan" {{ old('cb_type') == 'Kewarganegaraan' ? 'selected' : '' }}>Kewarganegaraan</option>
                    <option value="Agama" {{ old('cb_type') == 'Agama' ? 'selected' : '' }}>Agama</option>
                </select>
                @error('cb_type') <span class="error">{{ $message }}</span> @enderror
            </div>
        </section>
        <div class="button-container">
            <a href="{{ route('admCb_course') }}" class="back-button">BACK</a>
            <button type="submit" class="next-button">CREATE</button>
        </div>
    </div>
</form>
   
@endsection
