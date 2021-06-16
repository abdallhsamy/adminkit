<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', __('models/roles.fields.id').':') !!}
    <p>{{ $role->id }}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', __('models/roles.fields.name').':') !!}
    <p>{{ $role->name }}</p>
</div>

<!-- Guard Name Field -->
<div class="form-group">
    {!! Form::label('guard_name', __('models/roles.fields.guard_name').':') !!}
    <p>{{ $role->guard_name }}</p>
</div>

@if (isset($permissions) && count($permissions) > 0)
    @foreach($permissions as $group => $array)
        <div class="form-group">
            <label class="form-label">{{ $group }}</label>
            <div class="selectgroup selectgroup-pills">
                @foreach($array as $permission)
                    <label class="selectgroup-item">
                        <input type="checkbox" name="value" value="HTML" class="selectgroup-input" checked="" disabled>
                        <span class="selectgroup-button">{{ $permission->name }}</span>
                    </label>
                @endforeach
            </div>
        </div>
    @endforeach
@endif

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/roles.fields.created_at').':') !!}
    <p>{{ $role->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/roles.fields.updated_at').':') !!}
    <p>{{ $role->updated_at }}</p>
</div>

