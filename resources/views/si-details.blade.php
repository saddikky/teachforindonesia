@extends('user-layout')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/si-details.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
@endpush

@section('content')


<div class="centered-div">
        <ol class="lg:flex items-center w-full space-y-4 lg:space-y-0">
            <li class="flex-1">
                <a class="flex items-center font-medium space-x-3 p-4 rounded-lg">
                    <div class="flex-shrink-0">
                        <span class="flex-shrink-0 w-10 h-10 border rounded-full transparent flex justify-center items-center text-sm">01</span>
                    </div>
                    <h4 class="text-base">Proposal</h4>
                </a>
            </li>
            <svg class="w-5 h-5 ml-2 stroke-indigo-600 sm:ml-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M5 18L9.67462 13.0607C10.1478 12.5607 10.3844 12.3107 10.3844 12C10.3844 11.6893 10.1478 11.4393 9.67462 10.9393L5 6M12.6608 18L17.3354 13.0607C17.8086 12.5607 18.0452 12.3107 18.0452 12C18.0452 11.6893 17.8086 11.4393 17.3354 10.9393L12.6608 6" stroke="#333" stroke-width="1.6" stroke-linecap="round" />
            </svg>
            <li class="flex-1">
                <a class="flex items-center font-medium space-x-3 p-4 rounded-lg">
                    <span class="flex-shrink-0 w-10 h-10 border rounded-full before flex justify-center items-center text-sm">02</span>
                    <h4 class="text-before whitespace-nowrap">Report</h4>
                </a>
            </li>
        </ol>
    </div>

    <div class="containerss">
        <section class="student-detail">
            <h2 class="form-title">Registration Form</h2>
            <form id="form">
            <div class="form-group">
                <label for="si-name">Social Innovation</label>
                <input type="text" id="si-name" value="" required>
            </div>
            <div class="form-group">
                <label for="nim">Leader NIM</label>
                <input type="text" id="nim" value="" required>
            </div>
            <div class="form-group">
                <label for="leader-name">Leader Name</label>
                <input type="text" id="leader-name" value="" required>
            </div>
            <div class="form-group">
                <label for="phone-number">Phone Number</label>
                <input type="tel" id="phone-number" value="" required>
            </div>
            <div class="form-group">
                <label for="project-name">Project Name</label>
                <input type="text" id="project-name" value="" required>
            </div>
            <div class="form-group">
                <label for="start-date">Start Date</label>
                <input type="date" id="start-date" name="start-date" required>
            </div>
            <div class="form-group">
                <label for="end-date">End Date</label>
                <input type="date" id="end-date" name="end-date" required>
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <select id="category" name="category" required>
                    <option value="">Select a category</option>
                    <option value="education">Education</option>
                    <option value="environment">Environment</option>
                    <option value="health">Health</option>
                    <option value="welfare">Welfare</option>
                </select>
            </div>
            <div class="form-group">
                <label for="scale">Scale</label>
                <input type="number" id="scale" name="scale" min="1" max="10" required>
            </div>
            <div class="form-group">
                    <label for="proposal">Proposal</label>
                    <input type="file" id="proposal" name="proposal" accept=".pdf, .doc, .docx" required>
            </div>
            <div class="form-group  centered-div">
                <a href="#" class="status blue">DOWNLOAD TEMPLATE</a>
            </div>

            <div class="button-container">
                <button type="button" class="status in-review">CANCEL</button>
                <button type="submit" class="status reviewed" disabled>SUBMIT</button>
            </div>
            </form>
        </section>
    </div>

    @endsection