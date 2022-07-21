<x-layout title="turbo">
<div  class="md:2/3 lg:w-1/3">
	<div class="mb-4">
		<x-tasks._count :count=$count></x-tasks._count>
	</div>
	<div>
	<x-tasks.list :tasks="$tasks"></x-tasks-tasks>
	@include('tasks._create')
	</div>
</div>
</x-layout>