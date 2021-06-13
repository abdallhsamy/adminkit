<div class="table-responsive">
    <table class="table" id="articles-table">
        <thead>
            <tr>
                <th>@lang('models/articles.fields.title')</th>
                <th>@lang('models/articles.fields.content')</th>
                <th colspan="3">{{ __('crud.action') }}</th>
            </tr>
        </thead>
        <tbody>
        @foreach($articles as $article)
            <tr>
                <td>{{ $article->title }}</td>
            <td>{{ mb_substr($article->content, 0, 15) }}...</td>
                <td>
                    {!! Form::open(['route' => ['articles.destroy', $article->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('articles.show', [$article->id]) }}" class='btn btn-default btn-xs'><i class="fas fa-eye"></i></a>
                        <a href="{{ route('articles.edit', [$article->id]) }}" class='btn btn-default btn-xs'><i class="fas fa-pencil-alt"></i></a>
                        {!! Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
