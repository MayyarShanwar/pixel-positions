<x-layout>
    <h1 class="text-4xl font-bold text-center">Results</h1>

    <section>
        
        <div class="mt-6 space-y-6">
            @foreach ($jobs as $job)
            <x-job-card-wide :$job/>
            @endforeach
            
        </div>
    </section>
</x-layout>