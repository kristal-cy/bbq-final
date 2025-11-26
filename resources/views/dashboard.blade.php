@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<!-- Header / Navigation Bar -->
<header class="sticky top-0 w-full p-4 flex justify-between items-center bg-white/10 backdrop-blur-md z-10">
    <div class="flex items-center gap-3">
        <img src="{{ asset('images/logo1.png') }}" alt="BBQ-Lagao Logo" class="w-12 h-12 rounded-full object-cover">
        <h1 class="text-xl font-extrabold text-red-500">BBQ-Lagao</h1>
    </div>
    <div class="flex items-center gap-4">
        <span class="text-white font-medium">Hello, {{ Auth::user()->name ?? 'Guest' }}!</span>
        <button class="text-white bg-transparent border-none p-2 rounded-full cursor-pointer transition-colors hover:bg-white/10">
            <svg class="w-4 h-4 mb-1 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-5 5v-5zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm1-13h-2v6h2V7zm0 8h-2v2h2v-2z"></path>
            </svg>
        </button>
        <button class="text-white bg-transparent border-none p-2 rounded-full cursor-pointer transition-colors hover:bg-white/10">
            <svg class="w-4 h-4 mb-1 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
            </svg>
        </button>
        <button onclick="showLogoutModal()" class="flex items-center gap-1 text-white/80 bg-transparent border-none text-sm font-semibold cursor-pointer transition-colors hover:text-white">
            <svg class="w-4 h-4 mb-1 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
            </svg>
            Logout
        </button>
    </div>
</header>

<!-- Main Content Area -->
<main class="max-w-7xl mx-auto px-4 py-8">
    <!-- Hero Section -->
    <section class="mb-12">
        <div class="bg-gradient-to-br from-[#dc2626] to-[#991b1b] text-white p-8 rounded-2xl shadow-2xl flex flex-col gap-8 md:flex-row">
            <div class="flex-1">
                <h2 class="text-4xl font-extrabold mb-3 text-red-200">Feast Day Specials!</h2>
                <p class="text-lg mb-6 text-white">
                    Get the Grand BBQ Platter for ₱999! Includes 2 Skewers of everything and 4 rice bowls.
                </p>
                <button class="bg-yellow-400 text-red-600 font-bold py-3 px-8 rounded-full border-none cursor-pointer transition-colors hover:bg-yellow-300">Order Now</button>
            </div>
            <div class="w-32 h-32 bg-white/20 rounded-full flex items-center justify-center border-4 border-white">
                <svg class="w-16 h-16 text-red-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z"></path>
                </svg>
            </div>
        </div>
    </section>

    <!-- Menu Categories Section -->
    <section class="mb-12">
        <h3 class="text-2xl font-bold mb-6 text-red-500">Explore Menu</h3>
        <div class="flex gap-2 overflow-x-auto pb-4">
            <div class="flex-shrink-0 w-32 h-20 bg-white/20 backdrop-blur-md rounded-lg flex flex-col items-center justify-center p-3 transition-colors hover:bg-white/30 cursor-pointer">
                <svg class="w-4 h-4 mb-1 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4"></path>
                </svg>
                <span class="text-sm font-semibold text-white text-center">Chicken BBQ</span>
            </div>
            <div class="flex-shrink-0 w-32 h-20 bg-white/20 backdrop-blur-md rounded-lg flex flex-col items-center justify-center p-3 transition-colors hover:bg-white/30 cursor-pointer">
                <svg class="w-4 h-4 mb-1 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                </svg>
                <span class="text-sm font-semibold text-white text-center">Beef Skewers</span>
            </div>
            <div class="flex-shrink-0 w-32 h-20 bg-white/20 backdrop-blur-md rounded-lg flex flex-col items-center justify-center p-3 transition-colors hover:bg-white/30 cursor-pointer">
                <svg class="w-4 h-4 mb-1 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                </svg>
                <span class="text-sm font-semibold text-white text-center">Rice Meals</span>
            </div>
            <div class="flex-shrink-0 w-32 h-20 bg-white/20 backdrop-blur-md rounded-lg flex flex-col items-center justify-center p-3 transition-colors hover:bg-white/30 cursor-pointer">
                <svg class="w-4 h-4 mb-1 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4"></path>
                </svg>
                <span class="text-sm font-semibold text-white text-center">Soups & Sides</span>
            </div>
        </div>
    </section>

    <!-- Featured Items Grid -->
    <section>
        <h3 class="text-2xl font-bold mb-6 text-red-500">Popular Picks</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            <!-- Item Card 1 -->
            <div class="bg-white/10 rounded-lg p-4 shadow-lg">
                <img src="https://placehold.co/200x160/d95353/ffffff?text=Pares+BBQ" alt="Pares BBQ" class="w-full h-40 rounded-lg mb-4 object-cover">
                <h4 class="text-xl font-bold mb-1 text-white">Grand Pares BBQ</h4>
                <p class="text-sm text-gray-300 mb-3">Tender beef pares slow-grilled to perfection.</p>
                <div class="flex justify-between items-center">
                    <span class="text-2xl font-extrabold text-red-500">₱180</span>
                    <button class="bg-red-500 text-white py-1 px-3 rounded text-sm border-none cursor-pointer flex items-center gap-1 transition-colors hover:bg-red-600">
                        <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        Add
                    </button>
                </div>
            </div>

            <!-- Item Card 2 -->
            <div class="bg-white/10 rounded-lg p-4 shadow-lg">
                <img src="https://placehold.co/200x160/a04040/ffffff?text=Chicken+Skewer" alt="Chicken Skewer" class="w-full h-40 rounded-lg mb-4 object-cover">
                <h4 class="text-xl font-bold mb-1 text-white">Chicken Skewer Supreme</h4>
                <p class="text-sm text-gray-300 mb-3">Marinated chicken breast with sweet BBQ glaze.</p>
                <div class="flex justify-between items-center">
                    <span class="text-2xl font-extrabold text-red-500">₱120</span>
                    <button class="bg-red-500 text-white py-1 px-3 rounded text-sm border-none cursor-pointer flex items-center gap-1 transition-colors hover:bg-red-600">
                        <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        Add
                    </button>
                </div>
            </div>

            <!-- Item Card 3 -->
            <div class="bg-white/10 rounded-lg p-4 shadow-lg">
                <img src="https://placehold.co/200x160/d95353/ffffff?text=Pork+Belly" alt="Pork Belly Adobo" class="w-full h-40 rounded-lg mb-4 object-cover">
                <h4 class="text-xl font-bold mb-1 text-white">Pork Belly Adobo</h4>
                <p class="text-sm text-gray-300 mb-3">Crispy pork belly seasoned with classic adobo.</p>
                <div class="flex justify-between items-center">
                    <span class="text-2xl font-extrabold text-red-500">₱195</span>
                    <button class="bg-red-500 text-white py-1 px-3 rounded text-sm border-none cursor-pointer flex items-center gap-1 transition-colors hover:bg-red-600">
                        <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        Add
                    </button>
                </div>
            </div>

            <!-- Item Card 4 -->
            <div class="bg-white/10 rounded-lg p-4 shadow-lg">
                <img src="https://placehold.co/200x160/a04040/ffffff?text=Garlic+Rice" alt="Garlic Rice Tower" class="w-full h-40 rounded-lg mb-4 object-cover">
                <h4 class="text-xl font-bold mb-1 text-white">Garlic Rice Tower</h4>
                <p class="text-sm text-gray-300 mb-3">Good for 3-4 pax, perfectly toasted garlic rice.</p>
                <div class="flex justify-between items-center">
                    <span class="text-2xl font-extrabold text-red-500">₱90</span>
                    <button class="bg-red-500 text-white py-1 px-3 rounded text-sm border-none cursor-pointer flex items-center gap-1 transition-colors hover:bg-red-600">
                        <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        Add
                    </button>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Logout Modal -->
<div id="logoutModal" class="fixed inset-0 bg-black/70 flex items-center justify-center hidden z-50 p-4">
    <div class="bg-gray-900 rounded-xl w-full max-w-sm p-6 text-center border border-gray-700">
        <svg class="w-12 h-12 mx-auto mb-4 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
        </svg>
        <h3 class="text-xl font-bold text-white mb-2">Confirm Logout</h3>
        <p class="text-gray-400 mb-6">Are you sure you want to log out of your account?</p>
        <div class="flex justify-center gap-4">
            <button onclick="hideLogoutModal()" class="py-2 px-6 border border-gray-500 rounded-full bg-gray-900 text-gray-300 font-semibold cursor-pointer transition-colors hover:bg-gray-700">Cancel</button>
            <button onclick="confirmLogout()" class="py-2 px-6 bg-red-500 text-white border-none rounded-full font-semibold cursor-pointer transition-colors hover:bg-red-600">Yes, Log Out</button>
        </div>
    </div>
</div>

<script>
    const logoutModal = document.getElementById('logoutModal');

    function showLogoutModal() {
        logoutModal.style.display = 'flex';
    }

    function hideLogoutModal() {
        logoutModal.style.display = 'none';
    }

    function confirmLogout() {
        // Create a form to POST to logout route
        const form = document.createElement('form');
        form.method = 'POST';
        form.action = '{{ route("logout") }}';
        const csrf = document.createElement('input');
        csrf.type = 'hidden';
        csrf.name = '_token';
        csrf.value = '{{ csrf_token() }}';
        form.appendChild(csrf);
        document.body.appendChild(form);
        form.submit();
    }

    // Close modal when clicking outside
    logoutModal.addEventListener('click', function(e) {
        if (e.target === logoutModal) {
            hideLogoutModal();
        }
    });
</script>
@endsection
