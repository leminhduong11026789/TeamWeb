<!-- Ten Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ten', 'Ten:') !!}
    {!! Form::text('ten', null, ['class' => 'form-control']) !!}
</div>

<!-- Danh Muc Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('danh_muc_id', 'Danh Muc Id:') !!}
    {!! Form::text('danh_muc_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('url', 'Url:') !!}
    {!! Form::text('url', null, ['class' => 'form-control']) !!}
</div>

<!-- Anh Field -->
<div class="form-group col-sm-6">
    {!! Form::label('anh', 'Anh:') !!}
    {!! Form::text('anh', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <div class="form-actions">
        <div class="row  col-md-offset-0">
            {!! Form::submit('Save', ['class' => 'btn green']) !!}
            <a href="{!! route('admin.sanPhams.index') !!}" class="btn btn-default">Cancel</a>
        </div>
    </div>
</div>
