@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-9">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-equalizer font-red-sunglo"></i>
                        <span class="caption-subject font-red-sunglo bold uppercase">@lang('messages.san_pham_edit')</span>
                    </div>
                    <div class="form-actions">
                        <div class="row  pull-right">
                            {{ Form::button('<i class="fa fa-save"></i> '.Lang::get('messages.save'), ['type' => 'submit', 'class' => 'btn btn-default btn-sm font-white blue-steel','name'=>'save','value'=>'save','form'=>'form_san_pham'] )  }}
                            {{ Form::button('<i class="fa fa-save"></i> '.Lang::get('messages.save_edit'), ['type' => 'submit', 'class' => 'btn btn-default btn-sm font-white green','name'=>'save','value'=>'save_edit','form'=>'form_san_pham'] )  }}
                            {{ Form::button('<i class="fa fa-save"></i> '.Lang::get('messages.save_new'), ['type' => 'submit', 'class' => 'btn btn-default btn-sm font-white green-jungle','name'=>'save','value'=>'save_new','form'=>'form_san_pham'] )  }}
                            <a href="{!! route('admin.sanPhams.index') !!}" class="btn btn-default btn-sm"><i class="fa fa-reply"></i> Back</a>
                        </div>
                    </div>
                </div>
                @include('flash::message')
                <div>
                    @include('metronic-templates::common.errors')
                </div>
                <div class="portlet-body form">
                    <div class="row">
                        @if (isset($type) && $type == 'DUPLICATE')
                            {!! Form::model($sanPham, ['enctype'=>'multipart/form-data','id' => 'form_san_pham', 'route' => ['admin.sanPhams.store']]) !!}
                        @else
                            {!! Form::model($sanPham, ['enctype'=>'multipart/form-data','id' => 'form_san_pham', 'route' => ['admin.sanPhams.update', $sanPham->id], 'method' => 'patch']) !!}
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        @endif
                        @include('backend.san_phams.fields')

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <label>
                            {{--<input type="checkbox" class="icheck check-all">--}}
                            <span class="caption-subject font-red-sunglo bold uppercase">@lang('messages.category') ({{count($categories )}})</span>
                        </label>
                    </div>
                </div>
                <div class="portlet-body form">
                    <div class="input-group">
                        <div class="icheck-list">
                            @foreach($categories as $category)
                                @if($category->id == $sanPham->danh_muc_id)
                                    <label><input type="checkbox" name="category_ids[]" value="{{ $category->id }}" form="form_san_pham" class="icheck checkboxOnlySelectOne" checked> {{$category->ten}} </label>
                                @else
                                    <label><input type="checkbox" name="category_ids[]" value="{{ $category->id }}" form="form_san_pham" class="icheck checkboxOnlySelectOne"> {{$category->ten}} </label>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
