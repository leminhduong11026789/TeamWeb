<table class="table table-striped table-bordered table-hover" id="danhMucSp-table">
    <thead>
    <th class="center">#</th>
    <th class="center">
        <input type="checkbox" name="check-all" class="icheck check-all"/>
    </th>
    <th class="center">@lang('messages.ten_danh_muc')</th>
    <th class="center">@lang('messages.description')</th>
    <th class="center" style="width: 100px">@lang('messages.action')</th>
    </thead>
    <tbody>
    @if (count($danhMucSanPhams) == 0)
        <tr class="text-center">
            <td colspan="12">@lang('messages.no-items')</td>
        </tr>
    @else
        @foreach($danhMucSanPhams as $index => $danhMucSanPham)
            <tr>
                <td class="center"><a href="{!! route('admin.danhMucSanPhams.show', [$danhMucSanPham->id]) !!}" >{!! $index+1 !!}.</a></td>
                <td class="center"><input type="checkbox" name="ids[]" value="{{ $danhMucSanPham->id }}" class="icheck check-single" form="items" /></td>
                <td>{!! $danhMucSanPham->ten !!}</td>
                <td>{!! $danhMucSanPham->description !!}</td>
                <td class="center">
                    {!! Form::open(['route' => ['admin.danhMucSanPhams.destroy', $danhMucSanPham->id], 'method' => 'delete']) !!}
                    <div class="clearfix">
                        <a href="{!! route('admin.danhMucSanPhams.show', [$danhMucSanPham->id]) !!}" class="btn btn btn-xs grey-cascade">
                            <i class="fa fa-eye"></i>
                        </a>
                        <a href="{!! route('admin.danhMucSanPhams.edit', [$danhMucSanPham->id]) !!}" class="btn btn btn-xs blue">
                            <i class="fa fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn btn-xs red', 'onclick' => "return confirm('".Lang::get('messages.are_you_sure')."')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    @endif
    </tbody>
</table>