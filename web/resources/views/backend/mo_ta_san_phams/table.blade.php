<table class="table table-responsive" id="moTaSanPhams-table">
    <thead>
        <th>San Pham Id</th>
        <th>Content</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($moTaSanPhams as $moTaSanPham)
        <tr>
            <td>{!! $moTaSanPham->san_pham_id !!}</td>
            <td>{!! $moTaSanPham->content !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.moTaSanPhams.destroy', $moTaSanPham->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.moTaSanPhams.show', [$moTaSanPham->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.moTaSanPhams.edit', [$moTaSanPham->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>