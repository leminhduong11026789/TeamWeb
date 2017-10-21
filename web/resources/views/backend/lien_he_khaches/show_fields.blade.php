<table class="table table-striped table-bordered table-hover">
    <tbody>
    <tr>
        <td>{!! Form::label('id', Lang::get('messages.khach_hang_id')) !!}</td>
        <td>{!! $lienHeKhach->id !!}</td>
    </tr>

    <tr>
        <td>{!! Form::label('ten_lien_he', Lang::get('messages.khach_hang_ten')) !!}</td>
        <td>{!! $lienHeKhach->ten_lien_he !!}</td>
    </tr>

    <tr>
        <td>{!! Form::label('so_dien_thoai', Lang::get('messages.sdt')) !!}</td>
        <td>{!! $lienHeKhach->so_dien_thoai !!}</td>
    </tr>

    <tr>
        <td> {!! Form::label('email', Lang::get('messages.email')) !!}</td>
        <td>{!! $lienHeKhach->email !!}</td>
    </tr>

    <tr>
        <td>{!! Form::label('created_at', Lang::get('messages.khach_hang_order')) !!}</td>
        <td>{!! $lienHeKhach->created_at !!}</td>
    </tr>
    </tbody>
</table>

