<x-layout>
    <div class="space-y-10">
        <section class="text-center space-y-6">
            <h1 class="text-4xl font-bold ">Lets Find You A Great Job</h1>
            {{-- <form action="">
                <input type="text" placeholder="Web Developer ..."
                    class="rounded-xl bg-stone-800 border border-stone-700 px-3 py-2 w-2/3">
            </form> --}}

            <x-forms.form action='/search' class="">
                <button type='submit' class="absolute mt-2 ml-70 hover:bg-stone-600 rounded-4xl pt-2 pl-2 pr-1 pb-1 font-bold cursor-pointer"><svg class="w-8 h-8 flex text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 25 25">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg></button>
                <x-forms.input :label='false' name='q' placeholder='Web Developer ...' />
            </x-forms.form>
        </section>
        <section class="pt-10">
            <x-heading>Featured Jobs</x-heading>
            <div class="grid grid-cols-3 gap-8 mt-4 ">
                @foreach($featuredJobs as $job)
                <x-job-card :$job/>
                
                @endforeach
                
            </div>
        </section>

        <section>
            <x-heading>Tags</x-heading>
            <div class="mt-6 space-x-1 flex flex-wrap gap-2">
                @foreach($tags as $tag)
                    <x-tag :$tag/>
                @endforeach
            </div>
        </section>

        <section>
            <x-heading>Recent Jobs</x-heading>
            <div class="mt-6 space-y-6">
                @foreach ($jobs as $job)
                <x-job-card-wide :$job/>
                @endforeach
                
            </div>
        </section>

    </div>
</x-layout>
