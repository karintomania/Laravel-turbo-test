<turbo-stream
    target="createTask"
    action="replace"
>
    <template>
        @include('tasks._create')

    </template>
</turbo-stream>

<turbo-stream
    target="showTask"
    action="append"
>
    <template>
        @include('tasks._show', ['task' => $task])
    </template>
</turbo-stream>

<turbo-stream
    target="taskCount"
    action="replace"
>
    <template>
        <x-tasks._count :count="$count" />
    </template>
</turbo-stream>
