@props(['titulo', 'type','nombre'])

<label class="pr-2">{{ $titulo }}</label>
<input type={{ $type }} name={{$nombre}} class="border border-[#f9a8d4] rounded-lg text-ellipsis">

@error($nombre)
<p>{{ $message }}</p>
@enderror
