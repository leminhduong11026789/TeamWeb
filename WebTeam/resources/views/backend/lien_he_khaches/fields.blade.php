<!-- Ten Lien He Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ten_lien_he', 'Ten Lien He:') !!}
    {!! Form::text('ten_lien_he', null, ['class' => 'form-control']) !!}
</div>

<!-- So Dien Thoai Field -->
<div class="form-group col-sm-6">
    {!! Form::label('so_dien_thoai', 'So Dien Thoai:') !!}
    {!! Form::text('so_dien_thoai', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <div class="form-actions">
        <div class="row  col-md-offset-0">
            {!! Form::submit('Save', ['class' => 'btn green']) !!}
            <a href="{!! route('admin.lienHeKhaches.index') !!}" class="btn btn-default">Cancel</a>
        </div>
    </div>
</div>
