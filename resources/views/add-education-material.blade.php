<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <header>
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ __('Add Material') }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ __("Update your academic profile to get started!") }}
                        </p>
                    </header>

                    <form method="post" action="{{ route('save-academic-profile') }}" class="mt-6 space-y-6">
                        @csrf
                        <div>
                            <x-input-label for="name" :value="__('Title')" />
                            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', Auth::user()->name)" required autofocus autocomplete="name" />
                            <x-input-error class="mt-2" :messages="$errors->get('name')" />
                        </div>

                        <div>
                            <x-input-label for="field" :value="__('Field')" />
                            <x-text-input id="field" name="field" type="text" class="mt-1 block w-full" :value="old('field')" required autofocus autocomplete="field" />
                            <x-input-error class="mt-2" :messages="$errors->get('field')" />
                        </div>

                        <div>
                            <x-input-label for="year" :value="__('Year')" />
                            <x-text-input id="year" name="year" type="text" class="mt-1 block w-full" :value="old('year')" required autofocus autocomplete="year" />
                            <x-input-error class="mt-2" :messages="$errors->get('year')" />
                        </div>

                        <div>
                            <x-input-label for="school" :value="__('School')" />
                            <x-text-input id="school" name="school" type="text" class="mt-1 block w-full" :value="old('school')" required autofocus autocomplete="school" />
                            <x-input-error class="mt-2" :messages="$errors->get('school')" />
                        </div>

                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Add') }}</x-primary-button>

                            @if (session('status') === 'profile-updated')
                            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="text-sm text-gray-600">{{ __('Saved.') }}</p>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
