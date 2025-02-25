@props(['size'=>'base'])

@php
$classes = "bg-white/10 rounded-xl hover:bg-white/20 transition-colors duration-300";
    if ( $size == 'base') {
        $classes .= " text-sm py-1 px-5";
    }

    if ( $size == 'small') {
        $classes .= " text-xs py-1 px-2";
    }
    
@endphp
<a href="" class="{{$classes}}">{{ $slot }}</a>
