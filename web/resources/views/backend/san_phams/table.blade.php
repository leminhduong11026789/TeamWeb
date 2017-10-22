<table class="table table-striped table-bordered table-hover">
    <thead>
    <th class="center">#</th>
    <th class="center">
        <input type="checkbox" name="check-all" class="icheck check-all"/>
    </th>
    <th class="center">@lang('messages.san_pham_ten')</th>
    <th class="center">@lang('messages.san_pham_danh_muc')</th>
{{--    <th class="center">@lang('messages.san_pham_mo_ta')</th>--}}
    <th class="center">@lang('messages.san_pham_url')</th>
    <th class="center">@lang('messages.san_pham_anh')</th>
    <th class="center" style="width: 100px">@lang('messages.action')</th>
    </thead>
    <tbody>
    @if (count($sanPhams) == 0)
        <tr class="text-center">
            <td colspan="12">@lang('messages.no-items')</td>
        </tr>
    @else
        @foreach($sanPhams as $index => $sanPham)
            <tr>
                <td class="center"><a href="{!! route('admin.sanPhams.show', [$sanPham->id]) !!}" >{!! $index+1 !!}.</a></td>
                <td class="center"><input type="checkbox" name="ids[]" value="{{ $sanPham->id }}" class="icheck check-single" form="items" /></td>
                <td>{!! $sanPham->ten !!}</td>
                <td>{!! $sanPham->danh_muc_id !!}</td>
{{--                <td>{!! $sanPham->description !!}</td>--}}
                <td><a href="{!! $sanPham->url !!}">Xem</a></td>
                @if(empty($sanPham->anh))
                    <td></td>
                @else
                    <td><img src="{!! $sanPham->anh !!}" height="50px"></td>
                @endif
                <td class="center">
                    {!! Form::open(['route' => ['admin.sanPhams.destroy', $sanPham->id], 'method' => 'delete']) !!}
                    <div class="clearfix">
                        <a href="{!! route('admin.sanPhams.show', [$sanPham->id]) !!}" class="btn btn btn-xs grey-cascade">
                            <i class="fa fa-eye"></i>
                        </a>
                        <a href="{!! route('admin.sanPhams.edit', [$sanPham->id]) !!}" class="btn btn btn-xs blue">
                            <i class="fa fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn btn-xs red', 'onclick' => "return confirm('".Lang::get('messages.are_you_sure')."')"]) !!}
                    </div>
                    {!! Form::close() !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    @endif
    </tbody>
</table>