<table class="table table-responsive" id="tasks-table">
    <thead>
        <th>Title</th>
        <th>Description</th>
        <th>Priority Id</th>
        <th>User Id</th>
        <th>To User Id</th>
        <th>Task Start</th>
        <th>Task End</th>
        <th>Active</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($tasks as $task)
        <tr>
            <td>{!! $task->title !!}</td>
            <td>{!! $task->description !!}</td>
            <td>{!! $task->priority_id !!}</td>
            <td>{!! $task->user_id !!}</td>
            <td>{!! $task->to_user_id !!}</td>
            <td>{!! $task->task_start !!}</td>
            <td>{!! $task->task_end !!}</td>
            <td>{!! $task->active !!}</td>
            <td>
                {!! Form::open(['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tasks.show', [$task->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tasks.edit', [$task->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>