<table class="table table-striped table-bordered table-hover">
    <thead>
    <th class="center">#</th>
    <th class="center">
        <input type="checkbox" name="check-all" class="icheck check-all"/>
    </th>
    <th class="center">@lang('messages.khach_hang_ten')</th>
    <th class="center">@lang('messages.sdt')</th>
    <th class="center">@lang('messages.email')</th>
    <th class="center">@lang('messages.khach_hang_order')</th>
    <th class="center" style="width: 100px">@lang('messages.action')</th>
    </thead>
    <tbody>
    @if (count($lienHeKhaches) == 0)
        <tr class="text-center">
            <td colspan="12">@lang('messages.no-items')</td>
        </tr>
    @else
        @foreach($lienHeKhaches as $index => $lienHeKhach)
            <tr>
                <td class="center"><a href="{!! route('admin.lienHeKhaches.show', [$lienHeKhach->id]) !!}" >{!! $index+1 !!}.</a></td>
                <td class="center"><input type="checkbox" name="ids[]" value="{{ $lienHeKhach->id }}" class="icheck check-single" form="items" /></td>
                <td>{!! $lienHeKhach->ten_lien_he !!}</td>
                <td>{!! $lienHeKhach->so_dien_thoai !!}</td>
                <td>{!! $lienHeKhach->email !!}</td>
                <td>{!! $lienHeKhach->created_at !!}</td>
                <td class="center">
                    {!! Form::open(['route' => ['admin.lienHeKhaches.destroy', $lienHeKhach->id], 'method' => 'delete']) !!}
                    <div class="clearfix">
                        <a href="{!! route('admin.lienHeKhaches.show', [$lienHeKhach->id]) !!}" class="btn btn btn-xs grey-cascade">
                            <i class="fa fa-eye"></i>
                        </a>
                        <a href="{!! route('admin.lienHeKhaches.edit', [$lienHeKhach->id]) !!}" class="btn btn btn-xs blue">
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