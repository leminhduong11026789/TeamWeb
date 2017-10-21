@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-equalizer font-red-sunglo"></i>
                        <span class="caption-subject font-red-sunglo bold uppercase">@lang('messages.dmsp_edit')</span>
                    </div>
                    <div class="form-actions">
                        <div class="row  pull-right">
                            {{ Form::button('<i class="fa fa-save"></i> '.Lang::get('messages.save'), ['type' => 'submit', 'class' => 'btn btn-default btn-sm font-white blue-steel','name'=>'save','value'=>'save','form'=>'form_dmsp'] )  }}
                            {{ Form::button('<i class="fa fa-save"></i> '.Lang::get('messages.save_edit'), ['type' => 'submit', 'class' => 'btn btn-default btn-sm font-white green','name'=>'save','value'=>'save_edit','form'=>'form_dmsp'] )  }}
                            {{ Form::button('<i class="fa fa-save"></i> '.Lang::get('messages.save_new'), ['type' => 'submit', 'class' => 'btn btn-default btn-sm font-white green-jungle','name'=>'save','value'=>'save_new','form'=>'form_dmsp'] )  }}
                            <a href="{!! route('admin.danhMucSanPhams.index') !!}" class="btn btn-default btn-sm"><i class="fa fa-reply"></i> Back</a>
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
                            {!! Form::model($danhMucSanPham, ['id' => 'form_dmsp', 'route' => ['admin.danhMucSanPhams.store']]) !!}
                        @else
                            {!! Form::model($danhMucSanPham, ['id' => 'form_dmsp', 'route' => ['admin.danhMucSanPhams.update', $danhMucSanPham->id], 'method' => 'patch']) !!}
                        @endif
                        @include('backend.danh_muc_san_phams.fields')

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection