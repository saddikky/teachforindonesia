@extends('user-layout')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/comserv.css') }}">
@endpush

@section('content')

    <h3 class="page-title">Community Service Hours</h3>
    <hr class="my-3">

    <div class="containerss">
        <div class="event-row">
            <div class="event-title">
                <h6 class="title-bold">Project Character Building: Pancasila Course Odd 2023/2024</h6>    
                <h6 class="event-date">26 October 2024</h6>
            </div>
            <div class="event-hours"><span class="star-icon">⭐</span> 10 Hours</div>
        </div>
        <div class="event-row">
            <div class="event-title">
                <h6 class="title-bold">Project Character Building: Pancasila Course Odd 2023/2024</h6>    
                <h6 class="event-date">26 October 2024</h6>
            </div>
            <div class="event-hours"><span class="star-icon">⭐</span> 8 Hours</div>
        </div>
        <div class="event-row">
            <div class="event-title">
                <h6 class="title-bold">Project Character Building: Pancasila Course Odd 2023/2024</h6>    
                <h6 class="event-date">26 October 2024</h6>
            </div>
            <div class="event-hours"><span class="star-icon">⭐</span> 5 Hours</div>
        </div>
    </div>


@endsection