@props(['job'])

<x-panel class="flex gap-x-6">
    <div>
        <x-employer-logo/>
    </div>

    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-sm text-gray-400">{{ $job->employer->name }}</a>
        <h3 class="font-bold text-xl mt-2 group-hover:text-blue-600 transition-colors duration-200">{{ $job->title }}</h3>
        <p class="text-sm text-gray-500 mt-auto">Full Time - From ${{ $job->salary }}</p>
    </div>


    <div class="flex items-start justify-center gap-2">
        @foreach($job->tags as $tag)
            <x-tag :$tag size="small">Backend</x-tag>
        @endforeach
    </div>
</x-panel>
