@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-equalizer font-red-sunglo"></i>
                        <span class="caption-subject font-red-sunglo bold uppercase">@lang('messages.khach_hang_edit')</span>
                    </div>
                    <div class="form-actions">
                        <div class="row  pull-right">
                            {{ Form::button('<i class="fa fa-save"></i> '.Lang::get('messages.save'), ['type' => 'submit', 'class' => 'btn btn-default btn-sm font-white blue-steel','name'=>'save','value'=>'save','form'=>'form_khach_hang'] )  }}
                            {{ Form::button('<i class="fa fa-save"></i> '.Lang::get('messages.save_edit'), ['type' => 'submit', 'class' => 'btn btn-default btn-sm font-white green','name'=>'save','value'=>'save_edit','form'=>'form_khach_hang'] )  }}
                            {{ Form::button('<i class="fa fa-save"></i> '.Lang::get('messages.save_new'), ['type' => 'submit', 'class' => 'btn btn-default btn-sm font-white green-jungle','name'=>'save','value'=>'save_new','form'=>'form_khach_hang'] )  }}
                            <a href="{!! route('admin.lienHeKhaches.index') !!}" class="btn btn-default btn-sm"><i class="fa fa-reply"></i> Back</a>
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
                            {!! Form::model($lienHeKhach, ['id' => 'form_khach_hang', 'route' => ['admin.lienHeKhaches.store']]) !!}
                        @else
                            {!! Form::model($lienHeKhach, ['id' => 'form_khach_hang', 'route' => ['admin.lienHeKhaches.update', $lienHeKhach->id], 'method' => 'patch']) !!}
                        @endif
                        @include('backend.lien_he_khaches.fields')

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
