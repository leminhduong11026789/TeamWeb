<li class="{!! Request::is('home*') ? 'active' : '' !!}">
    <a href="{!! url('/home') !!}" class="nav-link nav-toggle">
        <i class="fa fa-tachometer" aria-hidden="true"></i>
        <span class="title">@lang("messages.home")</span>
    </a>
</li>

<li class="nav-item start ">
    <a href="javascript:;" class="nav-link nav-toggle">
        <i class="fa fa-users" aria-hidden="true"></i>
        <span class="title"> @lang("messages.quanlisanpham")</span>
        <span class="arrow"></span>
    </a>
    <ul class="sub-menu">
        <li class="{!! Request::is('sanphams*') ? 'active' : '' !!}">
            <a class="nav-link nav-toggle" href="{!! route('admin.sanPhams.index') !!}">
                <i class="fa fa-edit"></i>
                <span  class="title">@lang("messages.sanpham")</span></a>
        </li>
        <li class="{!! Request::is('sanphams*') ? 'active' : '' !!}">
            <a class="nav-link nav-toggle" href="{!! route('admin.sanPhams.create') !!}">
                <i class="fa fa-edit"></i>
                <span  class="title">@lang("messages.sanpham_themmoi")</span></a>
        </li>
    </ul>
</li>
<li class="nav-item start ">
    <a href="javascript:;" class="nav-link nav-toggle">
        <i class="fa fa-users" aria-hidden="true"></i>
        <span class="title"> @lang("messages.quanlidanhmucsp")</span>
        <span class="arrow"></span>
    </a>
    <ul class="sub-menu">
        <li class="{!! Request::is('danh_muc_san_phams*') ? 'active' : '' !!}">
            <a class="nav-link nav-toggle" href="{!! route('admin.danhMucSanPhams.index') !!}">
                <i class="fa fa-edit"></i>
                <span  class="title">@lang("messages.dm_sanpham")</span></a>
        </li>
        <li class="{!! Request::is('sanphams*') ? 'active' : '' !!}">
            <a class="nav-link nav-toggle" href="{!! route('admin.danhMucSanPhams.create') !!}">
                <i class="fa fa-edit"></i>
                <span  class="title">@lang("messages.dmsp_themmoi")</span></a>
        </li>
    </ul>
</li>
<li class="nav-item start ">
    <a href="javascript:;" class="nav-link nav-toggle">
        <i class="fa fa-users" aria-hidden="true"></i>
        <span class="title"> @lang("messages.khachhang")</span>
        <span class="arrow"></span>
    </a>
    <ul class="sub-menu">
        <li class="{!! Request::is('lienHeKhaches*') ? 'active' : '' !!}">
            <a class="nav-link nav-toggle" href="{!! route('admin.lienHeKhaches.index') !!}">
                <i class="fa fa-edit"></i>
                <span  class="title">@lang("messages.dskhachhang")</span></a>
        </li>
        <li class="{!! Request::is('sanphams*') ? 'active' : '' !!}">
            <a class="nav-link nav-toggle" href="{!! route('admin.lienHeKhaches.create') !!}">
                <i class="fa fa-edit"></i>
                <span  class="title">@lang("messages.kh_themmoi")</span></a>
        </li>
    </ul>
</li>
<li class="{!! Request::is('moTaSanPhams*') ? 'active' : '' !!}">
    <a class="nav-link nav-toggle" href="{!! route('admin.moTaSanPhams.index') !!}">
    <i class="fa fa-edit"></i>
    <span  class="title">MoTaSanPhams</span></a>
</li>

