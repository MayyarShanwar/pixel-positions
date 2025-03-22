@props(['job'])
<div
    class="p-5 group border border-transparent bg-white/5 flex rounded-xl items-center flex space-x-4 hover:border hover:border-blue-700 transition-colors duration-300">
    <div>
        <x-employer-logo :employer="$job->employer" :width='150' />

    </div>
    <div class=" flex justify-between w-full h-full self-start">
        <div class="ml-6">
            <a class="self-start text-sm text-stone-400">{{ $job->employer->name }}</a>
            <h3 class="font-bold text-xl mt-2 group-hover:text-blue-700 transition-colors duration-300">
                {{ $job->title }}</h3>
            <p class="text-xs text-stone-400 mt-9">{{ $job->location }} - {{ $job->salary }}</p>

        </div>
        <div class="flex flex-col space-x-2 justify-between items-start">
<div>
            @foreach ($job->tags as $tag)
                <x-tag :$tag size='small'>Tag</x-tag>
            @endforeach
        </div>
            <a href="/jobs/{{$job['id']}}" class="flex mt-4 ml-2 cursor-pointer bg-blue-600 text-white font-medium rounded-md px-4 py-1 items-center self-end hover:bg-blue-800 transition duration-300 ease-in-out shadow-lg">
                Show Details
            </a> 
        </div>
        
    </div>
    
</div>
