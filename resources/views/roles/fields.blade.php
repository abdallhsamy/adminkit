<!-- Name Field -->
<div class="form-group col-sm-12">
    {!! Form::label('name', __('models/roles.fields.name').':') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Guard Name Field -->
<div class="form-group col-sm-12">
    {!! Form::label('guard_name', __('models/roles.fields.guard_name').':') !!}
    {!! Form::text('guard_name', null, ['class' => 'form-control']) !!}
</div>


<!-- Guard Name Field -->
<div class="form-group col-sm-12">
    @if (isset($permissions) && count($permissions) > 0)
        <div class="card">

            <div class="card-header">
                <h4>{{ __('models/permissions.plural') }}</h4>
            </div>
            @foreach($permissions as $group => $array)
                <div class="card-body">
                    <div class="form-group">
                        <div class="control-label">{{ $group }}</div>
                        @foreach($array as $permission)
                            <label class="custom-switch mt-2">
                                <input
                                    type="checkbox"
                                    name="permissions[]"
                                    class="custom-switch-input"
                                    data-val="{{ $permission->id }}"
                                    value="{{ $permission->id }}"
                                    @if (in_array($permission->id, $checked))
                                    checked
                                    @endif
                                >
                                <span class="custom-switch-indicator"></span>
                                <span class="custom-switch-description">{{ $permission->name }}</span>
                            </label>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('roles.index') }}" class="btn btn-default">{{ __('crud.cancel') }}</a>
</div>
