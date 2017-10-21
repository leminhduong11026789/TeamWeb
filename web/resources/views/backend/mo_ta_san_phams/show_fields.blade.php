<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $moTaSanPham->id !!}</p>
</div>

<!-- San Pham Id Field -->
<div class="form-group">
    {!! Form::label('san_pham_id', 'San Pham Id:') !!}
    <p>{!! $moTaSanPham->san_pham_id !!}</p>
</div>

<!-- Content Field -->
<div class="form-group">
    {!! Form::label('content', 'Content:') !!}
    <p>{!! $moTaSanPham->content !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $moTaSanPham->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $moTaSanPham->updated_at !!}</p>
</div>

