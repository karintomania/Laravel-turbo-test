<turbo-frame id="@domid($task)">
	<div class="w-full flex mb-2">
		<a class="block w-2/3" href="{{route('tasks.edit', ['task' => $task->id])}}"># {{$task->task}}</a>
		<form class="w-1/3" class="inline"
			method="delete"
			action="{{route('tasks.destroy', ['task' => $task])}}"
			target="showTask"
			>
			@csrf
			<x-common.img-submit :src="asset('img/done.svg')" :id="'deleteTask_'.$task->id"></x-common.img-submit>
		</form>
	</div>
</turbo-frame>