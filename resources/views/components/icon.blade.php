@props(['icon', 'class'])

@php
$iconClass = "ReactIcons\\" . $icon;
@endphp
<i class="{{ $iconClass }} {{ $class }}"></i>
