@extends('user-layout')


@push('styles')
    <link rel="stylesheet" href="{{ asset('css/soc-innovation.css') }}">
@endpush


@section('content')


<div>
    <h3 class="page-title">Social Innovation Project</h3>
</div>


<hr class="my-3">

<div class="cards-container">
            <div class="card">
                <h4>Sosialisasi Peningkatan Minat Baca</h4>
                <p>Innovation Type: CSA FYP 2028</p>
                <p>Scheme: CSA FYP 2028 - Kemanggisan</p>
                <p>Social Innovation Name: What are your SDGs? - BINUS @Kemanggisan</p>
                <button class="status reviewed">Report Approved</button>
            </div>


            <div class="card">
            <h4>Sosialisasi Peningkatan Minat Baca</h4>
                <p>Innovation Type: CSA FYP 2028</p>
                <p>Scheme: CSA FYP 2028 - Kemanggisan</p>
                <p>Social Innovation Name: What are your SDGs? - BINUS @Kemanggisan</p>
                <button class="status in-review">Proposal Approved and Need Report</button>
            </div>


            <!-- <div class="card">
            <h4>Sosialisasi Peningkatan Minat Baca</h4>
                <p>Innovation Type: CSA FYP 2028</p>
                <p>Scheme: CSA FYP 2028 - Kemanggisan</p>
                <p>Social Innovation Name: What are your SDGs? - BINUS @Kemanggisan</p>
                <button class="status waiting">Waiting To Upload Proposal</button>
            </div>


            <div class="card">
            <h4>Sosialisasi Peningkatan Minat Baca</h4>
                <p>Innovation Type: CSA FYP 2028</p>
                <p>Scheme: CSA FYP 2028 - Kemanggisan</p>
                <p>Social Innovation Name: What are your SDGs? - BINUS @Kemanggisan</p>
                <button class="status waiting">Waiting To Upload Proposal</button>
            </div> -->
</div>


@endsection
