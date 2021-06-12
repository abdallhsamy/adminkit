<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', __('models/permissions.fields.id').':') !!}
    <p>{{ $permission->id }}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', __('models/permissions.fields.name').':') !!}
    <p>{{ $permission->name }}</p>
</div>

<!-- Guard Name Field -->
<div class="form-group">
    {!! Form::label('guard_name', __('models/permissions.fields.guard_name').':') !!}
    <p>{{ $permission->guard_name }}</p>
</div>

