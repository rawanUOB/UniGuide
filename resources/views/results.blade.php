<x-layout>
    <div class="max-w-3xl mx-auto py-10">
        <div class="text-center mb-10">
            <h1 class="text-4xl font-bold mb-2">Your Results Are Ready</h1>
            <p class="text-base-content/60">Based on your answers, here are your top major recommendations:</p>
        </div>

        {{-- Here the system will check if the compatibility using cosine score was > 0.75 it will display it 
        if not it'll show the  Decision tree recommendation --}}
        <div class="card bg-primary text-primary-content shadow-xl mb-8">
            <div class="card-body text-center">
                <p class="text-sm font-semibold uppercase tracking-widest opacity-75">Your Best Match</p>
                <h2 class="text-3xl font-bold mt-1">{{ $result['final_recommendation'] }}</h2>
                <div class="badge badge-outline mt-3 mx-auto">
                    {{ $result['method_used'] === 'cosine' ? ' High Confidence Match' : ' AI Recommended' }}
                </div>
            </div>
        </div>

        {{-- The system will display the top 3 matches based on cosine similarity and show a compatibility precentage --}}
        <h3 class="text-xl font-bold mb-4">Your Top 3 Matches</h3>
        <div class="flex flex-col gap-4 mb-10">
            @foreach($result['top_3'] as $index => $match)
            <div class="card bg-base-100 shadow-md">
                <div class="card-body flex flex-row items-center justify-between py-4">
                    <div class="flex items-center gap-4">
                        <div class="text-2xl font-black text-primary opacity-40">#{{ $index + 1 }}</div>
                        <div>
                            <p class="font-bold text-lg">{{ $match['Major'] }}</p>
                            <p class="text-sm text-base-content/50">Compatibility Score</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-2xl font-bold text-primary">{{ $match['Percentage'] }}%</p>

                        <progress class="progress progress-primary w-32 mt-1"
                            value="{{ $match['Percentage'] }}" max="100">
                        </progress>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        @if($result['decision_tree_suggestion'])
        <div class="alert bg-base-100 shadow mb-10">
            <div>
                <p class="text-sm font-semibold">AI also considered:</p>
                <p class="text-sm text-base-content/70">{{ $result['decision_tree_suggestion'] }}</p>
            </div>
        </div>
        @endif

        <div class="flex gap-4 justify-center">
            <a href="{{ route('ai.questionnaire') }}" class="btn btn-outline">
                Retake the Quiz
            </a>
            <a href="{{ route('home') }}" class="btn btn-primary">
                Explore Universities
            </a>
        </div>

    </div>
</x-layout>
