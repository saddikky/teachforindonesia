@extends('user-layout')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/soc-event.css') }}">
@endpush

@section('content')

<body>
    
    <div>
        <h3 class="page-title">Social Event</h3>
    </div>

    <hr class="my-3">
    
    <!-- <div class="containerss"> -->
        <div class="tabs">
            <!-- <button class="tab" data-tab="lab">Ongoing Event</button>
            <button class="tab" data-tab="lec">Past Event</button> -->
            <ul class="C--tabs type-3 nav nav-tabs">
                <li class="tabssrcomp tab-item nav-item">
                    <a class="pb-4 label-tab tab-item-link tab-active nav-link" data-tab="ongoing">ONGOING</a>
                </li>
                <li class="tabssrcomp tab-item nav-item">
                    <a class="pb-4 label-tab tab-item-link tab-inactive nav-link" data-tab="past">PAST</a>
                </li>
            </u1>
        </div>

        <div class="cards-container">
            <div class="tab-content" data-tab="ongoing">
                <div class="card ongoing">
                    <h4>Blockchain Fundamental</h4>
                    <p>Location: Room 101</p>
                    <p>Registration Deadline: 2024-01-01</p>
                    <p>Community Service Hours: 5</p>
                    <div class="progress-bar">
                        <div class="progress" style="width: 22%;"></div>
                    </div>
                    <p>Quota filled: 22%</p>
                    <a href="{{ route('SEdetails') }}" class="view-more" style="text-align: right">View more >></a>
                </div>

                <div class="card ongoing">
                    <h4>Computer Forensic</h4>
                    <p>Location: Room 102</p>
                    <p>Registration Deadline: 2024-01-05</p>
                    <p>Community Service Hours: 3</p>
                    <div class="progress-bar">
                        <div class="progress" style="width: 14%;"></div>
                    </div>
                    <p>Class progress: 14%</p>
                    <a href="#" class="view-more">View More</a>
                </div>

                <div class="card ongoing">
                    <h4>Blockchain Fundamental</h4>
                    <p>Location: Room 101</p>
                    <p>Registration Deadline: 2024-01-01</p>
                    <p>Community Service Hours: 5</p>
                    <div class="progress-bar">
                        <div class="progress" style="width: 22%;"></div>
                    </div>
                    <p>Class progress: 22%</p>
                    <a href="#" class="view-more">View More</a>
                </div>
                <div class="card ongoing">
                    <h4>Blockchain Fundamental</h4>
                    <p>Location: Room 101</p>
                    <p>Registration Deadline: 2024-01-01</p>
                    <p>Community Service Hours: 5</p>
                    <div class="progress-bar">
                        <div class="progress" style="width: 22%;"></div>
                    </div>
                    <p>Class progress: 22%</p>
                    <a href="#" class="view-more">View More</a>
                </div>
            </div>


            <div class="tab-content" data-tab="past">
                <div class="card past">
                    <h4>Human and Computer Interaction</h4>
                    <p>Location: Room 103</p>
                    <p>Registration Deadline: 2023-12-01</p>
                    <p>Community Service Hours: 4</p>
                    <div class="progress-bar">
                        <div class="progress" style="width: 50%;"></div>
                    </div>
                    <p>Class progress: 50%</p>
                    <a href="#" class="view-more">View More</a>
                </div>
                <div class="card past">
                    <h4>Research Methodology in Computer Science</h4>
                    <p>Location: Room 104</p>
                    <p>Registration Deadline: 2023-12-15</p>
                    <p>Community Service Hours: 2</p>
                    <div class="progress-bar">
                        <div class="progress" style="width: 30%;"></div>
                    </div>
                    <p>Class progress: 30%</p>
                    <a href="#" class="view-more">View More</a>
                </div>
                <div class="card past">
                    <h4>Research Methodology in Computer Science</h4>
                    <p>Location: Room 104</p>
                    <p>Registration Deadline: 2023-12-15</p>
                    <p>Community Service Hours: 2</p>
                    <div class="progress-bar">
                        <div class="progress" style="width: 30%;"></div>
                    </div>
                    <p>Class progress: 30%</p>
                    <a href="#" class="view-more">View More</a>
                </div>
                <div class="card past">
                    <h4>Research Methodology in Computer Science</h4>
                    <p>Location: Room 104</p>
                    <p>Registration Deadline: 2023-12-15</p>
                    <p>Community Service Hours: 2</p>
                    <div class="progress-bar">
                        <div class="progress" style="width: 30%;"></div>
                    </div>
                    <p>Class progress: 30%</p>
                    <a href="#" class="view-more">View More</a>
                </div>
                <div class="card past">
                    <h4>Research Methodology in Computer Science</h4>
                    <p>Location: Room 104</p>
                    <p>Registration Deadline: 2023-12-15</p>
                    <p>Community Service Hours: 2</p>
                    <div class="progress-bar">
                        <div class="progress" style="width: 30%;"></div>
                    </div>
                    <p>Class progress: 30%</p>
                    <a href="#" class="view-more">View More</a>
                </div>
            </div>

        </div>
    <!-- </div> -->
    <script src="script.js"></script>
</body>

@endsection

@push('scripts')
    <script src="{{ asset('js/social-event.js') }}"></script>
@endpush