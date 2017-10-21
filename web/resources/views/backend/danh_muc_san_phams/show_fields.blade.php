<table class="table table-striped table-bordered table-hover">
    <tbody>
    <tr>
        <td>{!! Form::label('id', Lang::get('messages.id_dmsp')) !!}</td>
        <td>{!! $danhMucSanPham->id !!}</td>
    </tr>

    <tr>
        <td>{!! Form::label('ten', Lang::get('messages.ten_dmsp')) !!}</td>
        <td>{!! $danhMucSanPham->ten !!}</td>
    </tr>

    <tr>
        <td> {!! Form::label('description', Lang::get('messages.description')) !!}</td>
        <td>{!! $danhMucSanPham->description !!}</td>
    </tr>

    <tr>
        <td> {!! Form::label('created_at',Lang::get('messages.created_at')) !!}</td>
        <td>{!! $danhMucSanPham->created_at !!}</td>
    </tr>
    </tbody>
</table>