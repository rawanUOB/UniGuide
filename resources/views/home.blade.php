<x-layout>
    <x-slot:title>Home Page</x-slot:title>
    <h1 class ="text-center text-3xl md:text-5xl font-bold mt-6">Welcome to UniGuide</h1>
    <h3 class= "text-center text-lg md:text-2xl text-gray-500 mt-4" >Find Your Perfect Academic Path</h3>
    <div class=" flex justify-center mt-2 px-4">
        <input type ="text" id="UniSearch" placeholder="Search for University..."
         onkeydown="if(event.key === 'Enter') searchUniversities()"
         class = "text-center w-1000 h-9 bg-base-100 rounded-lg border border-gray-300  focus:ring " >
    </div>

    <div id="no-results" class="text-center mt-10 hidden">
        <p class="text-xl text-gray-500">This university was not found...</p>
    </div>

    <!--<div class="max-w-2xl mx-auto"> this one makes it line by line I 2 uni's in a line-->
    <div class="uni-section">
        <div class="flex items-center mt-8">
            <div class="flex-grow border-t border-gray-400"></div>
                <h2 class= "text-center text-xl md:text-2xl mx-4">Public Universities</h2>
            <div class="flex-grow border-t border-gray-400"></div>
        </div>
        <div class ="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 px-4">
        @foreach ($PublicUniversities as $University)
        <a href="{{ route('university.show', $University['University']) }}" class="University-class"
        data-name="{{  strtolower($University['University']) }}">
            <div class="card bg-base-100 shadow mt-6 hover:shadow-lg">
                <figure>
                    <img src = "{{ asset($University['Image'] ?? 'images/default.jpg') }}" alt="University Image" class="w-full h-48 object-cover ">
                </figure>
                <div class="card-body">
                    <div>
                        <div class="font-semibold">{{ $University['University'] }}</div>
                        <div class="text-sm text-gray-500 mt-2">{{ $University['Type'] }}</div>
                    </div>
                </div>
            </div>
        </a>
        @endforeach
        </div>
    </div>

    <div class="uni-section">
        <div class="flex items-center mt-8">
            <div class="flex-grow border-t border-gray-400"></div>
                <h2 class= "text-center text-xl md:text-2xl mx-4">Private Universities</h2>
            <div class="flex-grow border-t border-gray-400"></div>
        </div>
        <div class ="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 px-4">
        @foreach ($PrivateUniversities as $University)
            <a href="{{ route('university.show', $University['University']) }}" class="University-class"
        data-name="{{  strtolower($University['University']) }}">
            <div class="card bg-base-100 shadow mt-6 hover:shadow-lg">
                <figure>
                    <img src = "{{ asset($University['Image'] ?? 'images/default.jpg') }}" alt="University Image" class="w-full h-48 object-cover">
                </figure>
                <div class="card-body">
                    <div>
                        <div class="font-semibold">{{ $University['University'] }}</div>
                        <div class="text-sm text-gray-500 mt-2">{{ $University['Type'] }}</div>
                    </div>
                </div>
            </div>
            </a>
            @endforeach
        </div>
    </div>

    <script> 
    /**this function is not vulnarable to aql injection becasue it is not connected to the DB. and 
        no XSS vulnerability*/
    function searchUniversities(){
        const query = document.getElementById('UniSearch').value.toLowerCase().trim();
        const cards = document.querySelectorAll('.University-class'); 
        let totalVisible = 0; // so if no uni is found a message is displayed

        cards.forEach( card=>{
            const name = card.getAttribute('data-name');
            if (query === '' || name.includes(query)){
                card.style.display = "block"; 
                totalVisible++; 
            } else {
                card.style.display = 'none'; 
            }
        }); 

        const sections = document.querySelectorAll('.uni-section');
        sections.forEach (section => {
            const hasVisible = Array.from(section.querySelectorAll('.University-class'))
                            .some(c => c.style.display !== 'none');
        section.style.display = hasVisible ? 'block' : 'none';
        });

        //if university not found then: 
        const noResultsDiv = document.getElementById('no-results');
        if (totalVisible === 0 && query !== '') {
            noResultsDiv.classList.remove('hidden');
        } else {
            noResultsDiv.classList.add('hidden');
        }

    }    
    </script>
</x-layout>