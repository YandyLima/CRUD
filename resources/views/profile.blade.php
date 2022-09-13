<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6  border-b border-gray-200">
                    

                    <div
                        class="md:w-80 mx-auto bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">

                        <img width="50%" class="mx-auto rounded-t-lg" src="{{ Storage::disk('public')->url($user->photo) }}" alt="" />
                        
                        <h5 class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white ">
                            {{ $user->name }}</h5>

                        <div class="p-5">

              
                            <p class="font-bold text-gray-400 dark:text-gray-400"> E-MAIL </p>
                            <h5 class="mb-3 w-full text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                {{ $user->email }}</h5>

                            <p class="font-bold text-gray-400 dark:text-gray-400"> ADDRESS </p>
                            <h5 class="mb-3 w-full text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                {{ $user->address }}</h5>
                                

                            <p class="font-bold text-gray-400 dark:text-gray-400"> PHONE </p>
                            <h5 class="mb-3 w-full text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                {{ $user->phone }}</h5>
                                

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
