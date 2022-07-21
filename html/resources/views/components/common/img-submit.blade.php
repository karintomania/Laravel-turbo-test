@props(['src', 'id'])
<label for="{{$id}}"  {{ $attributes }}>
	<input id="{{$id}}" class="hidden" type="submit">
	<img class="inline h-5 w-5 hover:scale-125 transition-transform duration-150 overflow-hidden" src="{{$src}}">
</label>