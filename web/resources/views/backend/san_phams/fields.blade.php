<!-- Ten Field -->
<div class="form-group col-sm-12">
    {!! Form::label('ten', 'Tên Sản Phẩm') !!}
    {!! Form::text('ten', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Title Field -->
<div class="form-group col-sm-6">
    <div class="form-group col-sm-6">
        <div class="fileinput fileinput-new" data-provides="fileinput">
            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                @if(isset($sanPham))
                    @if(isset($sanPham->anh))
                        <img style="width: 200px; height: 150px;" src="{!! $sanPham->anh !!}">
                    @else
                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                    @endif
                @endif
            </div>
            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
            <div>
                <span class="btn default btn-file">
                    <span class="fileinput-new"> @lang('messages.san_pham_select_image') </span>
                    <span class="fileinput-exists"> @lang('messages.change') </span>
                    @if(isset($sanPham))
                        @if(isset($sanPham->anh))
                            <input name="image_title" type="file" href="{{$sanPham->anh}}">
                        @else

                        @endif
                    @else
                        {!! Form::file('anh',[]) !!}
                    @endif
                </span>
                <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> @lang('messages.delete') </a>
            </div>
        </div>
    </div>
</div>

<!-- Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('url', 'URL') !!}
    {!! Form::text('url', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12">
    {!! Form::label('description', 'Mô tả') !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <div class="form-actions">
        <div class="row  col-md-offset-0">
            {{ Form::button('<i class="fa fa-save"></i> '.Lang::get('messages.save'), ['type' => 'submit', 'class' => 'btn btn-default btn-sm font-white blue-steel','name'=>'save','value'=>'save'] )  }}
            {{ Form::button('<i class="fa fa-save"></i> '.Lang::get('messages.save_edit'), ['type' => 'submit', 'class' => 'btn btn-default btn-sm font-white green','name'=>'save','value'=>'save_edit'] )  }}
            {{ Form::button('<i class="fa fa-save"></i> '.Lang::get('messages.new'), ['type' => 'submit', 'class' => 'btn btn-default btn-sm font-white green-jungle','name'=>'save','value'=>'save_new'] )  }}
            <a href="{!! route('admin.sanPhams.index') !!}" class="btn btn-default btn-sm"><i class="fa fa-reply"></i> @lang('messages.back')</a>
        </div>
    </div>
</div>