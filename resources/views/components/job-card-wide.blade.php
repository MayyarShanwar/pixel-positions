@props(['job'])
<div class="p-5 group border border-transparent bg-white/5 flex rounded-xl items-center flex space-x-4 hover:border hover:border-blue-700 transition-colors duration-300">
    <div>
        <x-employer-logo/>
</div>
<div class=" flex justify-between w-full h-full self-start">
    <div class="ml-6">
        <a class="self-start text-sm text-stone-400">{{$job->employer->name}}</a>
        <h3 class="font-bold text-xl mt-2 group-hover:text-blue-700 transition-colors duration-300">{{$job->title}}</h3>
        <p class="text-xs text-stone-400 mt-9">{{$job->location}} - {{$job->salary}}</p>

    </div>
    <div class="flex items-center space-x-2 items-start">

        @foreach ($job->tags as $tag)
        <x-tag :$tag size='small'>Tag</x-tag>
        @endforeach



    </div>
</div>
</div>
