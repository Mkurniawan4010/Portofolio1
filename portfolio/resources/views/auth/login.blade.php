<x-guest-layout>
    <h2 class="text-2xl font-bold text-white mb-1">Welcome Back</h2>
    <p class="text-gray-500 mb-6">Sign in to your admin panel</p>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="space-y-5">
        @csrf

        <!-- Email Address -->
        <div>
            <label for="email" class="block text-sm font-semibold text-gray-300 mb-2">
                <i class="fas fa-envelope mr-2 text-blue-400"></i>Email
            </label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username"
                class="w-full px-4 py-3 rounded-xl bg-gray-800/50 border border-white/10 text-white placeholder-gray-500 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition"
                placeholder="admin@example.com">
            @error('email')
                <p class="text-red-400 text-sm mt-2">{{ $message }}</p>
            @enderror
        </div>

        <!-- Password -->
        <div>
            <label for="password" class="block text-sm font-semibold text-gray-300 mb-2">
                <i class="fas fa-lock mr-2 text-blue-400"></i>Password
            </label>
            <input id="password" type="password" name="password" required autocomplete="current-password"
                class="w-full px-4 py-3 rounded-xl bg-gray-800/50 border border-white/10 text-white placeholder-gray-500 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition"
                placeholder="••••••••">
            @error('password')
                <p class="text-red-400 text-sm mt-2">{{ $message }}</p>
            @enderror
        </div>

        <!-- Remember Me -->
        <div class="flex items-center justify-between">
            <label for="remember_me" class="inline-flex items-center cursor-pointer">
                <input id="remember_me" type="checkbox" name="remember"
                    class="rounded bg-gray-800 border-gray-600 text-blue-500 focus:ring-blue-500 focus:ring-offset-0">
                <span class="ml-2 text-sm text-gray-400">Remember me</span>
            </label>

            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="text-sm text-blue-400 hover:text-blue-300 transition">
                    Forgot password?
                </a>
            @endif
        </div>

        <!-- Login Button -->
        <button type="submit"
            class="w-full py-3 rounded-xl font-bold text-white bg-gradient-to-r from-blue-600 via-purple-600 to-cyan-600 hover:from-blue-500 hover:via-purple-500 hover:to-cyan-500 transition-all duration-300 shadow-lg hover:shadow-blue-500/25 flex items-center justify-center gap-2">
            <i class="fas fa-sign-in-alt"></i>
            Sign In
        </button>

        <!-- Back to site -->
        <div class="text-center pt-2">
            <a href="{{ route('home') }}" class="text-sm text-gray-500 hover:text-gray-300 transition inline-flex items-center gap-1">
                <i class="fas fa-arrow-left text-xs"></i>
                Back to portfolio
            </a>
        </div>
    </form>
</x-guest-layout>
