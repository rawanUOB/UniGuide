<x-layout>
    <x-slot:title>Home Page</x-slot:title>
    <h1 class ="text-center text-5xl font-bold mt-6">Welcome to UniGude</h1>
    <div class=" flex justify-center mt-4">
        <input type ="text" placeholder="Search for University..." class = "text-center w-1000 h-8 bg-base-100 rounded-lg border border-grey-400  focus:ring " >
    </div>
    <!--<div class="max-w-2xl mx-auto"> this one makes it line by line I 2 uni's in a line-->
    <div class ="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-6">
    @foreach ($Universities as $University)
        <div class="card bg-base-100 shadow mt-8">
            <figure>
                <img src = "{{ asset($University['Image'] ?? 'images/default.jpg') }}" alt="University Image" class="w-full h-48 object-cover">
            </figure>
            
            <div class="card-body">
            <div>
            <div class="font-semibold">{{ $University['University'] }}</div>
            <div class="mt-1">{{ $University['Overview'] }}</div>
            <div class="text-sm text-gray-500 mt-2">{{ $University['Type'] }}</div>
            </div>
            </div>
        </div>
        @endforeach
    </div>
</x-layout>