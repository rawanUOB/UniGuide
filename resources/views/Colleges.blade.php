<x-layout>
    <div class="max-w-5xl mx-auto p-6">
        <h1 class="text-3xl font-bold text-blue-900 mb-6">
            {{ $college->name }}
        </h1>

        <h2>
            <div class="grid grid-cols-3 gap-4">
                @foreach ($college->majors as $major)
                    <div class="p-5 rounded-xl border bg-white/60 backdrop-blur-sm hover:shadow-lg hover:-translate-y-1 transition duration-300 cursor-pointer"> <!-- group p-5 rounded-xl border bg-white/60 backdrop-blur-sm hover:shadow-lg hover:translate-y-1 transition duration-300 cursor-pointer -->
                        <a href="{{ route('majors.show', $major->id) }}">
                            <p class="font-semibold text-gray-800 hover:text-blue-700 transition">
                                {{ $major->name }}
                            </p>

                            <p class="text-sm text-gray-500 mt-1">
                                Explore Details ->

                            </p>
                        </a>
                    </div>
                    
                @endforeach

            </div>
        </h2>
    </div>
   
</x-layout>