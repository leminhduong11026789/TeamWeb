<!-- San Pham Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('san_pham_id', 'San Pham Id:') !!}
    {!! Form::text('san_pham_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Content Field -->
<div class="form-group col-sm-6">
    {!! Form::label('content', 'Content:') !!}
    {!! Form::text('content', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <div class="form-actions">
        <div class="row  col-md-offset-0">
            {!! Form::submit('Save', ['class' => 'btn green']) !!}
            <a href="{!! route('admin.moTaSanPhams.index') !!}" class="btn btn-default">Cancel</a>
        </div>
    </div>
</div>
