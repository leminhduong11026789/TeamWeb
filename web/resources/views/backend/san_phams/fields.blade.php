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
                            <input name="anh" type="file" href="{{$sanPham->anh}}">
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
@if(isset($sanPham))
    @foreach($allDescription as $description)
        @if($description->order == 1)
            <div class="form-group col-sm-12">
                {!! Form::label('description', 'Mô tả 1') !!}
                {!! Form::text('description[1]', $description->content, ['class' => 'form-control']) !!}
            </div>
        @else
            <div class="elementAdd form-group col-sm-12 order{{$description->order}}">
                {!! Form::label('description', 'Mô tả '.$description->order) !!}
                {!! Form::text('description['. $description->order .']', $description->content, ['class' => 'form-control']) !!}
            </div>
        @endif
    @endforeach
    <div class="form-group col-sm-6 addDescription" >
        <label id="clickAddDescription" order="{{count($allDescription)+1}}" style="cursor: pointer; cursor: hand;"><i class="fa fa-plus-circle"></i><b> Thêm Mô Tả</b></label>
    </div>

    <div class="form-group col-sm-6 removeDescription">
        <label id="clickRemoveDescription" order="{{count($allDescription)}}" style="cursor: pointer; cursor: hand; float: right;"><i class="fa fa-minus-circle"></i><b> Xóa một mô tả</b></label>
    </div>
@else
    <div class="form-group col-sm-12">
        {!! Form::label('description', 'Mô tả 1') !!}
        {!! Form::text('description[1]', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group col-sm-6 addDescription" >
        <label id="clickAddDescription" order="2" style="cursor: pointer; cursor: hand;"><i class="fa fa-plus-circle"></i><b> Thêm Mô Tả</b></label>
    </div>

    <div class="form-group col-sm-6 removeDescription">
        <label id="clickRemoveDescription" order="1" style="cursor: pointer; cursor: hand; float: right;"><i class="fa fa-minus-circle"></i><b> Xóa một mô tả</b></label>
    </div>
@endif




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