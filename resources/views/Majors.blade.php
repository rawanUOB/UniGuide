<x-layout>
    <div class="max-w-5xl mx-auto p-6">
        <h1 class="text-3xl font-bold text-blue-900 mb-6">
            {{ $major->name }}
        </h1>

        @if($major->video_link)
            <div class="mb-6">
                <iframe class="w-full h-64 rounded-xl" 
                src="{{ $major->video_link }}" 
                frameborder="0" allowfullscreen></iframe>
            
            </div>

        @else
            <div class="bg-gray-100 p-6 rounded-xl text-center text-gray-500 mb-6">
                Educational video is coming soon!
            </div>
        @endif

        <div class="bg-white p-6 rounded-xl shadow mb-4">
            <h2 class="text-2xl font-semibold mb-2">Description</h2>
            <p class="text-gray-700">{{ $major->description }}</p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow mb-4">
            <h2 class="text-2xl font-semibold mb-2">Duration</h2>
            <p >{{ $major->duration }}</p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow">
            <h2 class="text-2xl font-semibold mb-2">Admission Requirements</h2>
            <p>{{ $major->requirements }}</p> 
        </div>
        
        
    </div>
</x-layout>