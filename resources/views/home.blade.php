<x-layout>
    <x-slot:title>Home Page</x-slot:title>
    <h1 class ="text-center text-5xl font-bold mt-6">Welcome to UniGude</h1>
    <h3 class= "text-center text-2xl text-gray-500 mt-4 " >Find Your Perfect Academic Path</h3>
    <div class=" flex justify-center mt-2">
        <input type ="text" placeholder="Search for University..." class = "text-center w-1000 h-9 bg-base-100 rounded-lg border border-gray-300  focus:ring " >
    </div>

    <!--<div class="max-w-2xl mx-auto"> this one makes it line by line I 2 uni's in a line-->
    <div class="flex items-center mt-8">
        <div class="flex-grow border-t border-gray-400"></div>
            <h2 class= "text-center text-2xl mx-4">Public Universities</h2>
        <div class="flex-grow border-t border-gray-400"></div>
    </div>
    <div class ="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-6">
    @foreach ($PublicUniversities as $University)
        <div class="card bg-base-100 shadow mt-6">
            <figure>
                <img src = "{{ asset($University['Image'] ?? 'images/default.jpg') }}" alt="University Image" class="w-full h-48 object-cover ">
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

    <div class="flex items-center mt-8">
        <div class="flex-grow border-t border-gray-400"></div>
            <h2 class= "text-center text-2xl mx-4">Private Universities</h2>
        <div class="flex-grow border-t border-gray-400"></div>
    </div>
    <div class ="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-6">
    @foreach ($PrivateUniversities as $University)
        <div class="card bg-base-100 shadow mt-6">
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