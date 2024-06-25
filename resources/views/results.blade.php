<x-layout>
    <x-page-heading>Results for "{{ $query }}"</x-page-heading>

        @if(count($jobs))
        <div class="space-y-6">
            @foreach($jobs as $job)
                <x-job-card-full :$job />
            @endforeach
        </div>
        @else
        <div class="m-auto">No result Found :(</div>
        @endif
</x-layout>
