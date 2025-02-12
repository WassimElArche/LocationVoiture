<x-guest-layout>
    
    <form method="POST" action="{{ route('register') }}">
        @csrf
        @if($errors->has('nom') ||$errors->has('prenom') || $errors->has('Email') || $errors->has('password'))
        <div class="alert alert-danger" role="alert">
            Veuillez correctement remplir les champs
        </div>
        @endif
        <!-- Name -->
        <div>
            <x-input-label for="nom" :value="__('Nom')" />
            <x-text-input id="nom" class="block mt-1 w-full" type="text" name="nom" :value="old('nom')"  autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="prenom" :value="__('Prenom')" />
            <x-text-input id="prenom" class="block mt-1 w-full" type="text" name="prenom" :value="old('prenom')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Mot de passe')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <!-- <x-input-error :messages="$errors->get('password')" class="mt-2" /> -->
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirmer mot de passe')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

           <!-- <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" /> -->
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Déja inscrit ?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('S\'inscire ') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
