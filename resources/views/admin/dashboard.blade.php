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
