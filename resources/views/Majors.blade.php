<x-layout>
    <div class="max-w-5xl mx-auto p-6">
        <h1 class="text-2xl md:text-3xl font-bold text-blue-900 mb-6 text-center">
            {{ $major->name }}
        </h1>
        @if($major->video_link)

            <video class="w-full h-64 rounded-xl" controls>
                 <source src="{{ asset($major->video_link) }}" type="video/mp4">
            </video>

        @else
            <div class="bg-gray-100 p-6 rounded-xl text-center text-gray-500 mb-6 border-2 border-dashed border-gray-300">
                Educational video is coming soon!
            </div>
        @endif

        <div class="bg-white p-6 rounded-xl shadow mb-4">
            <h2 class="text-2xl font-semibold mb-2">Description</h2>
            <p class="text-gray-700">{{ $major->description }}</p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow mb-4">
            <h2 class="text-2xl font-semibold mb-2">Duration</h2>
            <p class="text-gray-700">{{ $major->duration }}</p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow mb-4">
            <h2 class="text-2xl font-semibold mb-2">Study Plan</h2>
            <div class ="grid md:grid-cols-2 gap-4" >
                @foreach($major->Study_Plan as $year => $plan)
                    <div class = " rounded-lg p-4">
                        <h3 class="font-bold text-blue-700"> {{ $year }}</h3>
                        <p class="text-gray-600 text-sm">{{ $plan }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        @if ($major->Teaching_Methods)
            <div class="bg-white p-6 rounded-xl shadow mb-4">
                <h2 class="text-2xl font-semibold mb-4">Teaching Methods: </h2>
                <ul class ="grid md:grid-cols-2 gap-2 text-gray-700 mb-2">
                    @foreach($major->Teaching_Methods as $method)
                        <li>• {{ $method }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        @if ($major->Assessment_Methods)
            <div class="bg-white p-6 rounded-xl shadow mb-4">
                <h2 class="text-2xl font-semibold mb-4">Assessment Methods: </h2>
                <ul class ="grid md:grid-cols-2 gap-2 text-gray-700 mb-2">
                    @foreach($major->Assessment_Methods as $method)
                        <li>• {{ $method }}</li>
                    @endforeach
                </ul>
            </div>
        @endif            

        <div class="bg-white p-6 rounded-xl shadow mb-4">
            <h2 class="text-2xl font-semibold mb-4">Skills you will gain: </h2>
            <ul class ="grid md:grid-cols-2 gap-2 text-gray-700 mb-2">
                @foreach($major->Skills as $skill)
                    <li>• {{ $skill }}</li>
                @endforeach
            </ul>
        </div>

        <div class="bg-white p-6 rounded-xl shadow mb-4">
            <h2 class="text-2xl font-semibold mb-3">Career Opportunities in the Future</h2>
            <div class="grid md:grid-cols-2 gap-3 ">
                @foreach($major->Career_Opportunities as $career)
                    <div class="p-3 rounded-lg bg-gray-100 text-gray-700">
                        {{ $career }}
                    </div>
                @endforeach
            </div>
        </div>
        <div class="flex gap-4 justify-center">
            <a href="{{ route('university.show', $major->college->university->name) }}" class="btn btn-outline">
                Back to University
            </a>
            <a href="{{ route('colleges.show', $major->college_id) }}" class="btn btn-outline">
                Back to College
            </a>
        </div>
    </div>
</x-layout>