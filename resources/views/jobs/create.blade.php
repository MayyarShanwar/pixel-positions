<x-layout>
        <form action="/jobs" method="post"  class="space-y-4">
            @csrf
        <h1 class="text-4xl font-bold text-center">Create A New Job</h1>
        <x-forms.input label='Title' name='title' placeholder='Front-End Developer ...' />
        <x-forms.input label='Salary' name='salary' placeholder='50,000$ ...' />
        <x-forms.input label='Location' name='location' placeholder='Syria , Homs ...' />

        <x-forms.select label='Schedule' name='schedule'>
            <option>Full Time</option>
            <option>Part Time</option>
        </x-forms.select>
        <x-forms.checkbox label='Feature (Costs More)' name='featured' />
        <x-forms.input label='Url' name='url' placeholder='http://Microsoft.com/jobs/(Some name or id) ...' />

        <x-forms.divider/>
        <x-forms.input label='Tags (Seperate with comma ,)' name='tags' placeholder='FroneEnd , Backend .....' />
        <x-forms.button type='submit' class="mt-2">Create</x-forms.button>
    </form>
</x-layout>
