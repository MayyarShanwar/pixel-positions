<x-layout>
    <form action="/jobs/{{$job->id}}" method="post"  class="space-y-4">
        @csrf
        @method('PATCH')
    <h1 class="text-4xl font-bold text-center">Create A New Job</h1>
    <x-forms.input label='Title' name='title' value='{{$job->title}}'/>
    <x-forms.input label='Salary' name='salary' value='{{$job->salary}}'/>
    <x-forms.input label='Location' name='location' value='{{$job->location}}'/>

    <x-forms.select label='Schedule' name='schedule'>
        @if ($job->schedule =='Full Time')
        <option selected>Full Time</option>
        <option>Part Time</option>
        @endif
        @if ($job->schedule =='Part Time')
        <option >Full Time</option>
        <option selected>Part Time</option>
        @endif
        
    </x-forms.select>
    @if ($job->featured)
    <x-forms.checkbox label='Feature (Costs More)' name='featured' checked/>
    @else
    <x-forms.checkbox label='Feature (Costs More)' name='featured' />
    @endif
    
    <x-forms.input label='Url' name='url' value='{{$job->url}}'/>

    <x-forms.divider/>
    @php
    $tagees='';
    foreach ($job->tags as $tag) {
        $tagees .= $tag->name.',';
    }
    @endphp
    <x-forms.input label='Tags (Seperate with comma ,)' name='tags'  value='{{$tagees}}'
    />
    <x-forms.button type='submit' class="mt-2">Update</x-forms.button>
</form>
</x-layout>
