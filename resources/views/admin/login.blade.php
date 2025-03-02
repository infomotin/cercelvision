<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div>
        admin login page
    </div>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="mb-4 text-sm text-red-600 dark:text-red-400">
                {{ $error }}
            </div>
        @endforeach
    @endif
    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
            {{ session('status') }}
        </div>
    @endif
    @if (session('error'))
        <div class="mb-4 font-medium text-sm text-red-600 dark:text-red-400">
            {{ session('error') }}
        </div>
    @endif

    @if (session('success'))
        <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
            {{ session('success') }}
        </div>
    @endif


    <form method="POST" action="{{ route('admin.login_submit') }}">
        @csrf
        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>



        <div class="flex items-center justify-end mt-4">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</x-guest-layout>
