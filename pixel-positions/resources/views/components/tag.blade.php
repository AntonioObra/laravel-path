@props(["size" => "base", 'tag'])

@php
    $classes = "bg-white/10 rounded-xl font-bold hover:bg-white/25 transition-colors duration-300";

    if ($size === 'base') {
        $classes .= " px-5 py-1 text-md";
    }

    if ($size === 'sm') {
        $classes .= " px-3 py-1 text-[10px]";
    }
@endphp

<a href="/tags/{{strtolower($tag->name)}}"
   class="{{$classes}}">{{$tag->name}}</a>
