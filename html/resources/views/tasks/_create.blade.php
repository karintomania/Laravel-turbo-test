<turbo-frame id="createTask">
	<form  
		class=""
		method="post" action="{{route('tasks.store')}}">
		<div class="flex">
		@csrf
		<input class="outline-0 w-2/3 pr-4" name="task" type="text" placeholder="add new task...">
		<x-common.img-submit class="w-1/3" :src="asset('img/store.svg')" id="createTaskSubmit"></x-common.img-submit>
		</div>
		@error('task')
			<p class="w-full text-red-400 ">{{$errors->first('task')}}</p>
		@enderror
	</form>
</turbo-frame>