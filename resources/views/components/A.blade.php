@props(['color','path','c','pro'])
<a style="color:{{ $color }}" href="{{ $path }}{{ $pro->id }}" {{ $pro->id }}">{{ $c }}</a>