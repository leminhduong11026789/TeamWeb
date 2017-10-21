<table class="table table-responsive" id="danhMucSanPhams-table">
    <thead>
        <th>Ten</th>
        <th>Description</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($danhMucSanPhams as $danhMucSanPham)
        <tr>
            <td>{!! $danhMucSanPham->ten !!}</td>
            <td>{!! $danhMucSanPham->description !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.danhMucSanPhams.destroy', $danhMucSanPham->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.danhMucSanPhams.show', [$danhMucSanPham->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.danhMucSanPhams.edit', [$danhMucSanPham->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>