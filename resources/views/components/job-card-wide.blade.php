@props(['job'])

<x-panel class="flex gap-x-6">
    <div>
        <x-employer-logo />
    </div>

    <div class="flex-1 flex flex-col">
        <a href="" class="text-start text-sm text-gray-400">{{$job->employer->name}}</a>
        <h3 class="group-hover:text-blue-600 font-bold text-xl mt-3 transition-colors duration-300">{{$job->title}}</h3>
        <p class="text-sm text-gray-400 mt-auto">{{$job->salary}}</p>
    </div>

    <div>
        @foreach ($job->tags as $tag)
            <x-tag :tag="$tag"/>
        @endforeach
    </div>
</x-panel>
