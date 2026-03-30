<x-layout>
    @if($university)

        <!-- University name and logo -->
        <div class="max-w-5xl mx-auto p-4">
            <div class="flex items-center justify-center gap-3 px-4 border-b border-gray-300 mb-6 ">
                <img 
                src="{{ asset($university->image ?? 'images/default.jpg') }}" 
                alt="University Logo" 
                class="w-45 h-35 object-contain">

                <h1 class="text-5xl front-bold text-center text-blue-900 px-6">
                {{ $university->name }}</h1>
            </div>

            <!-- University details -->
            <div class="bg-white p-6 rounded-xl shadow mb-6">
                <h2 class="text-2xl font-semibold mb-2">Overview</h2>
                <p class="text-gray-700">{{ $university->overview }}</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow mb-6">
                <h2 class="text-2xl front-semibold mb-2">Acceptance Requirements</h2>
                <p class="text-gray-700">{{ $university->requirements }}</p>
            </div>

            <div class="grid grid-cols-2 gap-6 mb-6">
                <div class="bg-white p-6 rounded-xl shadow">
                    <h2 class="text-2xl front-semibold mb-2">University Fees</h2>
                    <p class="text-gray-600">{{ $university->University_fees }}</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow">
                    <h2 class="text-2xl front-semibold mb-2">Available Scholarships</h2>
                    <p class="text-gray-600">{{ $university->available_scholarships }}</p>
                </div>  
            </div>

            <div>
                <h2 class="text-2xl font-semibold mb-4">Colleges</h2>
                <div class ="grid grid-cols-3 gap-4">
                    @foreach ($university->colleges as $college)
                        <div class="group p-5 rounded-xl border bg-white/60 backdrop-blur-sm hover:shadow-lg hover:translate-y-1 transition duration-300 cursor-pointer">
                            <p class="font-semibold text-gray-800 group-hover:text-blue-700 transition">
                                {{ $college->name }}
                            </p>

                            <p class="text-sm text-gray-500 mt-1">
                                Explore Programs ->
                            </p>
                        </div> 
                    @endforeach
                </div>
            </div>
        </div>
    @else
    <!-- For now because not all unis have informations -->
        <div class="max-w-3xl mx-auto p-10 text-center">
            <h1 class="text-3xl front-bold text-blue-900 mb-4" >Welcome to {{ $name }}</h1>
            <p class="text-gray-500 text-lg mb-6">This University does not have data yet! Please check back later for more information.</p>
        </div>
    @endif
</x-layout>