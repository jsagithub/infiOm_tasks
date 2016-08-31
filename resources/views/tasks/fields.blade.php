<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'dDescription:') !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Priority Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('priority_id', 'Priority Id:') !!}
    {!! Form::number('priority_id', null, ['class' => 'form-control']) !!}
</div>

<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- To User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('to_user_id', 'To User Id:') !!}
    {!! Form::select('to_user_id', $users, '') !!}
</div>

<!-- Task Start Field -->
<div class="form-group col-sm-6">
    {!! Form::label('task_start', 'Task Start:') !!}
    {!! Form::date('task_start', null, ['class' => 'form-control']) !!}
</div>

<!-- Task End Field -->
<div class="form-group col-sm-6">
    {!! Form::label('task_end', 'Task End:') !!}
    {!! Form::date('task_end', null, ['class' => 'form-control']) !!}
</div>

<!-- Task End Field -->
<div class="form-group col-sm-6">
    {!! Form::label('active', 'Active:') !!}
    {!! Form::checkbox('active', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('tasks.index') !!}" class="btn btn-default">Cancel</a>
</div>
