<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', __('models/users.fields.id').':') !!}
    <p>{{ $user->id }}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', __('models/users.fields.name').':') !!}
    <p>{{ $user->name }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', __('models/users.fields.email').':') !!}
    <p>{{ $user->email }}</p>
</div>

<!-- Password Field -->
<div class="form-group">
    {!! Form::label('password', __('models/users.fields.password').':') !!}
    <p>{{ $user->password }}</p>
</div>

<!-- Password Confirmation Field -->
<div class="form-group">
    {!! Form::label('password_confirmation', __('models/users.fields.password_confirmation').':') !!}
    <p>{{ $user->password_confirmation }}</p>
</div>

<!-- Role Id Field -->
<div class="form-group">
    {!! Form::label('role_id', __('models/users.fields.role_id').':') !!}
    <p>{{ $user->role_id }}</p>
</div>

