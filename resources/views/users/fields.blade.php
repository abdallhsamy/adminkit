<!-- Name Field -->
<div class="form-group col-sm-12">
    {!! Form::label('name', __('models/users.fields.name').':') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-12">
    {!! Form::label('email', __('models/users.fields.email').':') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-12">
    {!! Form::label('role_id', __('models/users.fields.role').':') !!}
{{--    <select--}}
{{--        class="form-control"--}}
{{--        id="role_id"--}}
{{--        name="role_id">--}}
{{--        @foreach($roles as $id => $name)--}}
{{--            <option value="{{ $id }}" @if (old('role_id', ))--}}
{{--                --}}
{{--            @endif>{{ $name }}</option>--}}
{{--        @endforeach--}}
{{--    </select>--}}
    {!! Form::select('role_id', $roles, null, ['class' => 'form-control']) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-12">
    {!! Form::label('password', __('models/users.fields.password').':') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-12">
    {!! Form::label('password_confirmation', __('models/users.fields.password').':') !!}
    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('users.index') }}" class="btn btn-default">{{ __('crud.cancel') }}</a>
</div>
