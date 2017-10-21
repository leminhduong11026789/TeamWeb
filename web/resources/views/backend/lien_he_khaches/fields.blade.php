<!-- Ten Lien He Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ten_lien_he', Lang::get('messages.khach_hang_ten')) !!}
    {!! Form::text('ten_lien_he', null, ['class' => 'form-control']) !!}
</div>

<!-- So Dien Thoai Field -->
<div class="form-group col-sm-6">
    {!! Form::label('so_dien_thoai', Lang::get('messages.kh_sdt')) !!}
    {!! Form::text('so_dien_thoai', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', Lang::get('messages.email')) !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <div class="form-actions">
        <div class="row  col-md-offset-0">
            {{ Form::button('<i class="fa fa-save"></i> '.Lang::get('messages.save'), ['type' => 'submit', 'class' => 'btn btn-default btn-sm font-white blue-steel','name'=>'save','value'=>'save'] )  }}
            {{ Form::button('<i class="fa fa-save"></i> '.Lang::get('messages.save_edit'), ['type' => 'submit', 'class' => 'btn btn-default btn-sm font-white green','name'=>'save','value'=>'save_edit'] )  }}
            {{ Form::button('<i class="fa fa-save"></i> '.Lang::get('messages.new'), ['type' => 'submit', 'class' => 'btn btn-default btn-sm font-white green-jungle','name'=>'save','value'=>'save_new'] )  }}
            <a href="{!! route('admin.lienHeKhaches.index') !!}" class="btn btn-default btn-sm"><i class="fa fa-reply"></i> @lang('messages.back')</a>
        </div>
    </div>
</div>
