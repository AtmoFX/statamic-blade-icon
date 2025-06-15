@extends('blade-layout')

@section('body')
<div class="grid grid-cols-2 gap-4 p-1">
@foreach ($icons as $set)
    {!! $set->icon !!}
    <s:svg class="w-10 h-10 hover:text-red-500 duration-200" src="{{ $set->raw('icon') }}"/>
@endforeach
</div>
@endsection