<table class="table table-striped table-bordered table-hover">
    <tbody>
    <tr>
        <td> {!! Form::label('id', Lang::get('messages.san_pham_id')) !!}</td>
        <td>{!! $sanPham->id !!}</td>
    </tr>

    <tr>
        <td> {!! Form::label('ten',Lang::get('messages.san_pham_ten')) !!}</td>
        <td>{!! $sanPham->ten !!}</td>
    </tr>

    <tr>
        <td> {!! Form::label('danh_muc_id', Lang::get('messages.san_pham_danh_muc')) !!}</td>
        <td>{!! $sanPham->danh_muc_id !!}</td>
    </tr>

    {{--<tr>--}}
        {{--<td> {!! Form::label('description', Lang::get('messages.san_pham_mo_ta')) !!}</td>--}}
        {{--<td>{!! $sanPham->description !!}</td>--}}
    {{--</tr>--}}

    <tr>
        <td>{!! Form::label('url', Lang::get('messages.san_pham_url')) !!}</td>
        <td><a href="{!! $sanPham->url !!}">Xem</a></td>
    </tr>

    <tr>
        <td>{!! Form::label('anh', Lang::get('messages.san_pham_anh')) !!}</td>
        @if(empty($sanPham->anh))
            <td></td>
        @else
            <td><img src="{!! $sanPham->anh !!}" height="200px"></td>
        @endif
        {{--<td>{!! $sanPham->anh !!}</td>--}}
    </tr>

    <tr>
        <td> {!! Form::label('created_at', Lang::get('messages.created_at')) !!}</td>
        <td>{!! $sanPham->created_at !!}</td>
    </tr>
    </tbody>
</table>

