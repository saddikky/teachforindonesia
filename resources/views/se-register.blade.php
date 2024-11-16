@extends('user-layout')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/se-register.css') }}">
@endpush

@section('content')

<body>

    <div class="containerss">
        <section class="registration-form">
            <h2 class="form-title">Register Event</h2>
            <form id="form">
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <span id="nim">: fetch nim</span>
                </div>
    
                <div class="form-group">
                    <label for="name">Name</label>
                    <span id="name">: fetch name</span>
                </div>
    
                <div class="form-group">
                    <label for="email">Email</label>
                    <span id="email">: fetch email</span>
                </div>
    
                <div class="form-group">
                    <label for="phone">Phone Number <span class="required">*</span></label>
                    <input type="tel" id="phone" name="phone" required>
                </div>
    
                <div class="form-group">
                    <label for="campus">Campus</label>
                    <span id="campus">BINUS CAMPUS</span>
                </div>
    
                <div class="form-group">
                    <label for="faculty">Faculty</label>
                    <span id="faculty">Science</span>
                </div>
    
                <div class="form-group">
                    <label for="program">Study Program</label>
                    <span id="program">Computer Science</span>
                </div>
    
                <div class="form-group">
                    <label for="requirements">Requirements</label>
                    <span id="requirements">harus cinta kami apa adanya</span>
                </div>

                <div class="form-group">
                    <label class="checkbox-wrapper">
                        <span class="checkbox-container">
                            <input type="checkbox" id="terms" name="terms">
                            <label class="terms">I have read all information and willing to accept all terms mentioned</label>
                        </span>
                    </label>
                </div>
                
                <div class="button-container">
                    <button type="button" class="status in-review">CANCEL</button>
                    <button type="submit" class="status reviewed" disabled>REGISTER</button>
                </div>
            </form>
        </section>
    </div>

    <!-- <script src="script.js"></script> -->
</body>

@endsection

@push('scripts')
    <script src="{{ asset('js/se-register.js') }}"></script>
@endpush
