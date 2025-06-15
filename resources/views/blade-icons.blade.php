
<div class="grid grid-cols-2 gap-4 p-1">
@foreach ($icons as $set)
    <s:svg class="w-10 h-10 hover:text-red" src="{{ $set->augmentedValue('icon')->raw() }}"/>
    {!! $set->icon !!}
@endforeach
</div>