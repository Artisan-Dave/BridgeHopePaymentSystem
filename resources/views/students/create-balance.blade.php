<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Balance') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900">
                            <form method="post" action="">
                                @csrf
                                @if (session()->has('error'))
                                    <div class="bg-red-500 text-black px-4 py-2">
                                        {{ session('error') }}
                                    </div>
                                @endif
                                <div>
                                    <x-input-label for="full_name" :value="__('Full Name')" />
                                    <x-text-input id="full_name" class="block mt-1 w-full" type="text"
                                        name="full_name" :value="$students->full_name" disabled/>
                                    <x-input-error :messages="$errors->get('full_name')" class="mt-2" />
                                </div>
                                <div>
                                    <x-input-label for="total_balance" :value="__('Total Balance')" />
                                    <x-text-input id="total_balance" class="block mt-1 w-full" type="number"
                                        name="total_balance" :value="$students->total_balance" />
                                    <x-input-error :messages="$errors->get('total_balance')" class="mt-2" />
                                </div>

                                <div class="flex items-center justify-center mt-4">
                                    <x-primary-button class="ms-4">
                                        {{ __('Save') }}
                                    </x-primary-button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
