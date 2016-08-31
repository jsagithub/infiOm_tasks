<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $task->id !!}</p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{!! $task->title !!}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{!! $task->description !!}</p>
</div>

<!-- Priority Id Field -->
<div class="form-group">
    {!! Form::label('priority_id', 'Priority Id:') !!}
    <p>{!! $task->priority_id !!}</p>
</div>

<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{!! $task->user_id !!}</p>
</div>

<!-- To User Id Field -->
<div class="form-group">
    {!! Form::label('to_user_id', 'To User Id:') !!}
    <p>{!! $task->to_user_id !!}</p>
</div>

<!-- Task Start Field -->
<div class="form-group">
    {!! Form::label('task_start', 'Task Start:') !!}
    <p>{!! $task->task_start !!}</p>
</div>

<!-- Task End Field -->
<div class="form-group">
    {!! Form::label('task_end', 'Task End:') !!}
    <p>{!! $task->task_end !!}</p>
</div>

<!-- Active Field -->
<div class="form-group">
    {!! Form::label('active', 'Active:') !!}
    <p>{!! $task->active !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $task->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $task->updated_at !!}</p>
</div>

