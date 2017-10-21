<table class="table table-responsive" id="lienHeKhaches-table">
    <thead>
        <th>Ten Lien He</th>
        <th>So Dien Thoai</th>
        <th>Email</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($lienHeKhaches as $lienHeKhach)
        <tr>
            <td>{!! $lienHeKhach->ten_lien_he !!}</td>
            <td>{!! $lienHeKhach->so_dien_thoai !!}</td>
            <td>{!! $lienHeKhach->email !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.lienHeKhaches.destroy', $lienHeKhach->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.lienHeKhaches.show', [$lienHeKhach->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.lienHeKhaches.edit', [$lienHeKhach->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>