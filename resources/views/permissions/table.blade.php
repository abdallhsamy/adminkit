<div class="table-responsive">
    <table class="table" id="permissions-table">
        <thead>
            <tr>
                <th>@lang('models/permissions.fields.name')</th>
        <th>@lang('models/permissions.fields.guard_name')</th>
                <th colspan="3">{{ __('crud.action') }}</th>
            </tr>
        </thead>
        <tbody>
        @foreach($permissions as $permission)
            <tr>
                <td>{{ $permission->name }}</td>
            <td>{{ $permission->guard_name }}</td>
                <td>
                    {!! Form::open(['route' => ['permissions.destroy', $permission->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('permissions.show', [$permission->id]) }}" class='btn btn-default btn-xs'><i class="fas fa-eye"></i></a>
                        <a href="{{ route('permissions.edit', [$permission->id]) }}" class='btn btn-default btn-xs'><i class="fas fa-pencil-alt"></i></a>
                        {!! Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
