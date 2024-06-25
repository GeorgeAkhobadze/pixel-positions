@props(['employer', 'width' => 90])
<img src="{{ asset($employer->logo) }}" alt="" class="rounded-xl " style="width: {{ $width }}; height: {{ $width }}; object-fit: cover"/>
