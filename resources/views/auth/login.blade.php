@extends('layouts.app')

@section('title', 'Login')

@section('body-class', 'bg-gray-100 flex items-center justify-center min-h-screen')

@section('content')
    <div class="flex w-full max-w-4xl shadow-2xl rounded-lg overflow-hidden h-[600px]">
        <div class="bg-white flex items-center justify-center w-1/2 p-10">
            <img src="{{ asset('images/logo1.png') }}" alt="BBQ-Lagao Logo" class="max-w-full h-auto">
        </div>
        <div class="bg-[url('{{ asset('images/bg2.png') }}')] bg-cover bg-center relative overflow-hidden w-1/2 flex items-center justify-center before:absolute before:inset-0 before:backdrop-blur-[8px] before:bg-red-900/50">
            <div class="relative z-20 p-8 w-full max-w-xs">
                <h2 class="text-4xl font-extrabold text-center mb-10 tracking-widest uppercase">Login</h2>
                <form action="{{ route('login') }}" method="POST" class="space-y-4">
                    @csrf

                    <div>
                        <label for="email" class="block text-lg font-medium">Email:</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email..."
                            class="mt-1 block w-full px-4 py-3 bg-white/20 border-white/50 border rounded-lg placeholder-white/70 focus:outline-none focus:ring-2 focus:ring-white text-white">
                    </div>

                    <div>
                        <label for="password" class="block text-lg font-medium">Password:</label>
                        <input type="password" id="password" name="password" placeholder="Enter your password..."
                            class="mt-1 block w-full px-4 py-3 bg-white/20 border-white/50 border rounded-lg placeholder-white/70 focus:outline-none focus:ring-2 focus:ring-white text-white">
                    </div>

                    <div class="text-right -mt-1 mb-4">
                        <a href="{{ route('login.phone') }}" class="text-sm text-white hover:text-gray-300 underline">Login using number.</a>
                    </div>

                    <button type="submit"
                        class="w-full bg-white text-red-700 py-3 rounded-full font-bold text-xl hover:bg-gray-200 transition duration-150">
                        Login
                    </button>

                    <a href="{{ route('register') }}"
                        class="block text-center w-full bg-transparent border-2 border-white text-white py-3 rounded-full font-bold text-xl hover:bg-white/10 transition duration-150 mt-4">
                        Register
                    </a>

                </form>
            </div>
        </div>
    </div>

    <div id="warningModal" class="fixed inset-0 bg-black bg-opacity-60 flex items-center justify-center hidden z-50">
        <div class="bg-red-600 border-4 border-white rounded-3xl p-10 box-shadow-2xl max-w-sm text-center">
            <h3 class="text-4xl font-extrabold text-white mb-4" style="text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">Error</h3>
            <p class="text-2xl font-semibold text-white mb-2" style="text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">Email and password are required.</p>
            <button id="closeModal" class="bg-[#f0f0f0] border-4 border-black rounded-2xl text-black text-xl font-bold p-5 mt-6 cursor-pointer shadow-lg hover:bg-[#e0e0e0]">OK</button>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    const modal = document.getElementById('warningModal');
    const closeModal = document.getElementById('closeModal');

    document.querySelector('form').addEventListener('submit', function(e) {
        // NOTE: Removed the 'required' attributes from the input fields in the HTML
        // so that this JavaScript validation logic controls the submission entirely.
        const email = document.getElementById('email').value.trim();
        const password = document.getElementById('password').value.trim();

        if (!email || !password) {
            e.preventDefault();
            modal.classList.remove('hidden');
        }
    });

    closeModal.addEventListener('click', function() {
        modal.classList.add('hidden');
    });

    // Close modal when clicking outside
    modal.addEventListener('click', function(e) {
        if (e.target === modal) {
            modal.classList.add('hidden');
        }
    });
</script>
@endpush