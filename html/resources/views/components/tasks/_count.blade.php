@props(['count' => 1])
<div id="taskCount" {{$attributes}}>
	{{$count}} {{Str::plural('task', $count)}}
</div>