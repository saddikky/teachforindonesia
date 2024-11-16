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
       <div class="card community-service">
           <div class="kiri">
               <h4>Community Service Hours</h4>
           </div>
           <div class="circle-container">
               <div class="progress-value" id="progress-value">0%</div>
               <svg width="300" height="200">
                   <defs>
                       <linearGradient id="gradient" x1="0%" y1="0%" x2="100%" y2="100%">
                           <stop offset="0%" style="stop-color:#4caf50; stop-opacity:1" />
                           <stop offset="100%" style="stop-color:#81c784; stop-opacity:1" />
                       </linearGradient>
                   </defs>
                   <!-- Background Circle -->
                   <circle cx="100" cy="100" r="70" id="bg-circle"></circle>
                   <!-- Progress Circle -->
                   <circle cx="100" cy="100" r="70" id="progress-circle"></circle>
               </svg>
           </div>
       </div>




       <!-- Upcoming Social Event Card -->
       <div class="card soc">
        <div class="kiri">
            <h4>Upcoming Social Event</h4>
        </div>
            <div class="event-list">
               <div class="event">
                   <span>Pelatihan Pengenalan Komputer Siswa SD 1</span>
                   <span>31 Sep 2024, 09:00 GMT+7</span>
               </div>
               <div class="event">
                   <span>Pelatihan Pengenalan Komputer Siswa SD 2</span>
                   <span>31 Sep 2024, 09:00 GMT+7</span>
               </div>
               <a href="{{ route('social-event') }}" class="view-more" style="text-align: right">View more >></a>
           </div>
       </div>
   </div>




   <!-- My Submission Card -->
   <div class="card submission-card">
        <div class="kiri">
            <h4>My Submission</h4>
        </div>
        <div class="submission-list">
           <div class="submission">
               <span>Project Character Building Course Odd 2023/2024</span>
               <span class="status pending">PENDING</span>
           </div>
           <div class="submission">
               <span>Donor Darah Kampus Kemanggisan Sep 2024</span>
               <span class="status accepted">ACCCEPTED</span>
           </div>
           <div class="submission">
               <span>Fun Learning di PAUD Kec Palmerah Batch1 Ganjil 24</span>
               <span class="status rejected">REJECTED</span>
           </div>
           <div class="submission">
               <span>BIMBEL Kampus Kijang BINUS Batch 1 Ganjil 2024</span>
               <span class="status pending">PENDING</span>
           </div>
       </div>
   </div>
</div>




@endsection




@push('scripts')
   <script src="{{ asset('js/dashboard.js') }}"></script>
@endpush
