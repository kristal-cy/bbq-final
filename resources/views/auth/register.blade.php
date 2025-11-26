@extends('layouts.app')

@section('title', 'Sign Up')

@section('body-class', 'bg-gradient-to-b from-[#d95353] to-[#a04040] flex items-center justify-center min-h-screen p-4')

@section('content')
    <div class="w-full max-w-2xl bg-white/20 p-8 sm:p-10 rounded-xl shadow-2xl backdrop-blur-sm">

        <div class="flex flex-col items-center mb-8">
            <img src="{{ asset('images/logo1.png') }}" alt="BBQ-Lagao Logo" class="w-20 h-auto mb-2">
            <h1 class="text-4xl font-extrabold text-white text-shadow-lg" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">Sign Up</h1>
        </div>

        <form id="registrationForm" action="{{ route('register') }}" method="POST" class="space-y-6">
            @csrf

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-6 gap-y-4">

                <div>
                    <label for="given_name" class="block text-white font-semibold mb-1">*Given Name:</label>
                    <input type="text" id="given_name" name="given_name" placeholder="Enter your given name..."
                        class="bg-white/30 border border-white/60 text-white placeholder:text-white/70 px-3 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-white/50 w-full required-field">
                </div>

                <div>
                    <label for="surname" class="block text-white font-semibold mb-1">*Surname:</label>
                    <input type="text" id="surname" name="surname" placeholder="Enter your surname..."
                        class="bg-white/30 border border-white/60 text-white placeholder:text-white/70 px-3 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-white/50 w-full required-field">
                </div>

                <div>
                    <label for="middle_initial" class="block text-white font-semibold mb-1">Middle Initial:</label>
                    <input type="text" id="middle_initial" name="middle_initial" placeholder="Enter your middle initial..."
                        class="bg-white/30 border border-white/60 text-white placeholder:text-white/70 px-3 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-white/50 w-full">
                </div>

                <div>
                    <label for="suffix" class="block text-white font-semibold mb-1">Suffix:</label>
                    <input type="text" id="suffix" name="suffix" placeholder="Enter your suffix... Ex. III, Jr., etc."
                        class="bg-white/30 border border-white/60 text-white placeholder:text-white/70 px-3 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-white/50 w-full">
                </div>

                <div class="sm:col-span-2">
                    <label for="address" class="block text-white font-semibold mb-1">*Address:</label>
                    <input type="text" id="address" name="address" placeholder="Enter your full address..."
                        class="bg-white/30 border border-white/60 text-white placeholder:text-white/70 px-3 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-white/50 w-full required-field">
                </div>

                <div>
                    <label for="email" class="block text-white font-semibold mb-1">*Email:</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email..."
                        class="bg-white/30 border border-white/60 text-white placeholder:text-white/70 px-3 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-white/50 w-full required-field">
                </div>

                <div>
                    <label for="contact_number" class="block text-white font-semibold mb-1">*Contact Number:</label>
                    <input type="tel" id="contact_number" name="contact_number" placeholder="Enter your contact number..."
                        class="bg-white/30 border border-white/60 text-white placeholder:text-white/70 px-3 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-white/50 w-full required-field">
                </div>

                <div>
                    <label for="password" class="block text-white font-semibold mb-1">*Password:</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password..."
                        class="bg-white/30 border border-white/60 text-white placeholder:text-white/70 px-3 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-white/50 w-full required-field">
                </div>

                <div>
                    <label for="confirm_password" class="block text-white font-semibold mb-1">*Confirm Password</label>
                    <input type="password" id="confirm_password" name="confirm_password" placeholder="Re-type the password..."
                        class="bg-white/30 border border-white/60 text-white placeholder:text-white/70 px-3 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-white/50 w-full required-field">
                </div>
            </div>

            <p class="text-white text-center text-lg mt-4">Fields marked with asterisk (<span class="text-yellow-300">*</span>) are required.</p>

            <div class="flex justify-center space-x-6 pt-4">
                <a href="{{ route('login') }}" class="bg-[#f0f0f0] text-[#d95353] border-none py-3 px-8 rounded-full font-bold text-xl cursor-pointer transition-colors hover:bg-[#e0e0e0] shadow-lg">
                    Back to Login
                </a>
                <button type="submit" class="bg-[#f0f0f0] text-[#d95353] border-none py-3 px-8 rounded-full font-bold text-xl cursor-pointer transition-colors hover:bg-[#e0e0e0] shadow-lg">
                    Confirm Registration
                </button>
            </div>
        </form>

    </div>

    <div id="errorModal" class="fixed inset-0 bg-black bg-opacity-60 flex items-center justify-center hidden z-50">
        <div class="bg-red-600 border-4 border-white rounded-3xl p-10 shadow-2xl max-w-sm text-center">
            <h3 class="text-4xl font-extrabold text-white mb-4" style="text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">Error</h3>
            <p id="errorModalMessage" class="text-2xl font-semibold text-white mb-2" style="text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">All required fields must be filled out.</p>
            <button id="closeErrorModal" class="bg-[#f0f0f0] border-4 border-black rounded-2xl text-black text-xl font-bold p-5 mt-6 cursor-pointer shadow-lg hover:bg-[#e0e0e0]">OK</button>
        </div>
    </div>

    <div id="successModal" class="fixed inset-0 bg-black bg-opacity-60 flex items-center justify-center hidden z-50">
        <div class="bg-green-600 border-4 border-white rounded-3xl p-10 shadow-2xl max-w-sm text-center">
            <h3 class="text-4xl font-extrabold text-white mb-4" style="text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">Success</h3>
            <p class="text-2xl font-semibold text-white mb-2" style="text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">Registration Success! You may now login.</p>
            <button id="closeSuccessModal" class="bg-[#f0f0f0] border-4 border-black rounded-2xl text-black text-xl font-bold p-5 mt-6 cursor-pointer shadow-lg hover:bg-[#e0e0e0]">OK</button>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    const form = document.getElementById('registrationForm');

    // Error Modal elements
    const errorModal = document.getElementById('errorModal');
    const closeErrorModal = document.getElementById('closeErrorModal');
    const errorModalMessage = document.getElementById('errorModalMessage');

    // Success Modal elements
    const successModal = document.getElementById('successModal');
    const closeSuccessModal = document.getElementById('closeSuccessModal');


    form.addEventListener('submit', function(e) {
        e.preventDefault();

        const requiredFields = document.querySelectorAll('.required-field');
        let allFieldsFilled = true;
        let passwordMatch = true;
        let errorMessage = '';

        // 1. Check if all required fields are filled
        requiredFields.forEach(field => {
            if (field.value.trim() === '') {
                allFieldsFilled = false;
            }
        });
        if (!allFieldsFilled) {
            errorMessage = 'All required fields must be filled out.';
        }

        // 2. Check if passwords match (only if all fields are filled to avoid confusing messages)
        const password = document.getElementById('password').value.trim();
        const confirmPassword = document.getElementById('confirm_password').value.trim();

        if (allFieldsFilled && password !== confirmPassword) {
            passwordMatch = false;
            errorMessage = 'Password and Confirm Password must match.';
        }

        if (errorMessage) {
            // Handle Error
            errorModalMessage.textContent = errorMessage;
            errorModal.classList.remove('hidden');
        } else {
            // Handle Success
            successModal.classList.remove('hidden');
        }
    });

    // Event listeners to close the modals
    closeErrorModal.addEventListener('click', function() {
        errorModal.classList.add('hidden');
    });
    errorModal.addEventListener('click', function(e) {
        if (e.target === errorModal) {
            errorModal.classList.add('hidden');
        }
    });

    closeSuccessModal.addEventListener('click', function() {
        successModal.classList.add('hidden');
        // Redirect the user to the login page after success and clicking OK
        window.location.href = '{{ route("login") }}';
    });
    successModal.addEventListener('click', function(e) {
        if (e.target === successModal) {
            successModal.classList.add('hidden');
            // Redirect the user to the login page after success and clicking outside
            window.location.href = '{{ route("login") }}';
        }
    });
</script>
@endpush