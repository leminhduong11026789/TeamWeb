@extends('layouts.app')

@section('content')
<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-equalizer font-red-sunglo"></i>
            <span class="caption-subject font-red-sunglo bold uppercase">DanhMucSanPham</span>
        </div>
    </div>
    <div>
        @include('metronic-templates::common.errors')
    </div>
    <div class="portlet-body form">
        <div class="row">
           {!! Form::model($danhMucSanPham, ['route' => ['admin.danhMucSanPhams.update', $danhMucSanPham->id], 'method' => 'patch']) !!}

            @include('backend.danh_muc_san_phams.fields')

           {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection