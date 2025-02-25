<x-layout>
    <div class="space-y-10">
        <section class="text-center space-y-6">
            <h1 class="text-4xl font-bold ">Lets Find You A Great Job</h1>
            <form action="">
                <input type="text" placeholder="Web Developer ..." class="rounded-xl bg-stone-800 border border-stone-700 px-3 py-2 w-2/3">
            </form>
        </section>
        <section class="pt-10">
            <x-heading>Featured Jobs</x-heading>
            <div class="grid grid-cols-3 gap-8 mt-4">
                <x-job-card />
                <x-job-card />
                <x-job-card />
            </div>
        </section>

        <section>
            <x-heading>Tags</x-heading>
            <div class="mt-6 space-x-1">
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>

            </div>
        </section>

        <section>
            <x-heading>Recent Jobs</x-heading>
            <div class="mt-6 space-y-6">
                <x-job-card-wide />
                <x-job-card-wide />
                <x-job-card-wide />
                <x-job-card-wide />
            </div>
        </section>
    </div>
</x-layout>
