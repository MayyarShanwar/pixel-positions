@props(['employer','width' => 120])

<img src="{{asset('storage/'.$employer->logo)}}" alt="" class="rounded-lg" width={{$width}}>