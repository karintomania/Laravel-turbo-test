<x-layout title="turbo">

turbo!
@foreach($tasks as $task)
	<p>{{$task->id}}</p>
@endforeach

</x-layout>