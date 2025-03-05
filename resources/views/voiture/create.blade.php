@extends('/layouts/layoutTest')

@section('contenue')

<form method="POST" action="/voiture" enctype="multipart/form-data">
        @csrf
        <div>
                <x-input-label for="nomImage" :value="__('Image du Véhicule')" />
                <x-text-input id="nomImage" class="block mt-1 w-full" type="file" name="nomImage" :required autofocus />
        </div>

        <div class="mt-4">
                    <x-input-label for="nom" :value="__('Nom du véhicule')" />
                    <x-text-input id="nom" class="block mt-1 w-full" type="text" value="{{ old('nom') }}" name="nom" />
        </div>

        <div class="mt-4">
                    <x-input-label for="Km" :value="__('Kilometrage')" />
                    <x-text-input id="Km" class="block mt-1 w-full" type="text" value="{{ old('Km') }}" name="Km" />
        </div>

        <div class="mt-4">
                    <x-input-label for="moteur" :value="__('Moteur')" />
                    <x-text-input id="moteur" class="block mt-1 w-full" type="text" value="{{ old('moteur') }}" name="moteur" />
        </div>

        

        <div class="mt-4">
                    <x-input-label for="Type" :value="__('Type du véhicule')" />
                    <x-text-input id="Type" class="block mt-1 w-full" type="text" value="{{ old('Type') }}" name="Type" />
        </div>



        <br><br>
        <x-primary-button class="ms-3">
                        {{ __('Créer la voiture') }}
        </x-primary-button>

@endsection