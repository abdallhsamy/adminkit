<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', __('models/articles.fields.id').':') !!}
    <p>{{ $article->id }}</p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', __('models/articles.fields.title').':') !!}
    <p>{{ $article->title }}</p>
</div>

<!-- Content Field -->
<div class="form-group">
    {!! Form::label('content', __('models/articles.fields.content').':') !!}
    <p>{{ $article->content }}</p>
</div>

