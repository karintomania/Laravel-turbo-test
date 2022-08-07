<turbo-frame id="@domid($task)">
	<div class="mb-2">
		<form class="w-full " method="put" action="{{route('tasks.update', ['task' => $task->id])}}" target="_top">
			@csrf
			<div class="flex">
				<div class="w-2/3">
					# <input class="outline-0  border-b border-black" name="task" type="text" value="{{$task->task}}">
				</div>
				<x-common.img-submit :src="asset('img/save.svg')" :id="'updateTask_'.$task->id"></x-common.img-submit>
			</div>
			@error('task')
				<p class="w-full text-red-400 ">{{$errors->first('task')}}</p>
			@enderror
		</form>
		<form x-ref="cancelForm" class="hidden" action="{{route('tasks.show', ['task' => $task->id])}}">
			<input  type="submit">
		</form>
	</div>
</turbo-frame>