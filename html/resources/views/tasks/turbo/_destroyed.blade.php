<turbo-stream
    target="@domid($task)"
    action="remove"
></turbo-stream>

<turbo-stream
    target="taskCount"
    action="replace"
>
    <template>
        <x-tasks._count :count="$count" />
    </template>
</turbo-stream>