@props(['job'])

<x-panel class="flex flex-col text-center">
    <div class="self-start text-sm">{{$job->employer->name}}</div>

    <div class="py-8 ">
        <h3 class="group-hover:text-blue-600 font-bold transition-colors duration-300 text-xl">
            <a href="{{$job->url}}" target="_blank">
                {{$job->title}}
            </a>
        </h3>
        <p class="text-xm mt-4">{{$job->salary}}</p>
    </div>

    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach($job->tags as $tag)
                <x-tag size="sm" :$tag/>
            @endforeach
        </div>

        <x-employer-logo :width="42" :employer="$job->employer"/>
    </div>
</x-panel>
