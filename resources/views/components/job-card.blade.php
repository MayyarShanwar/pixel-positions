@props(['job'])
<div class="group p-5 border border-transparent bg-white/5 justify-between flex rounded-xl items-center text-center flex flex-col hover:border hover:border-blue-700 transition-colors duration-300">
    <div class="self-start text-sm">{{$job->employer->name}}</div>
    <div class="py-8 ">
        <h3 class="font-bold text-xl group-hover:text-blue-700 transition-colors duration-300">{{$job->title}}</h3>
        <p class="text-sm mt-6">{{$job->location}} - {{$job->salary}}</p>
    </div>
    <div class="flex justify-between items-center w-full">
        <div>
            @foreach($job->tags as $tag)
            <x-tag :$tag size='small'>Tag</x-tag>
            @endforeach
            
    
        </div>

        <x-employer-logo :employer="$job->employer" :width='40' />
        
    </div>
</div>