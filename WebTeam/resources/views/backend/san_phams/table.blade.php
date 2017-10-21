<table id="datatable" class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>@lang('messages.name')</th>
            <th>@lang('messages.danh_muc')</th>
            <th>@lang('messages.mo_ta')</th>
            <th>@lang('messages.url')</th>
            <th>@lang('messages.action')</th>
        </tr>
    </thead>
    <tbody>
    @if(count($sanPhams)==0)
        Khong ban ghi nao
    @else
        @foreach($sanPhams as $index=>$sanPham)
            <tr>
                <td>{{$sanPham->ten}}</td>
                <td>{{$sanPham->danhMucSanPham->ten}}</td>
                <td>{{$sanPham->description}}</td>
                <td>{{$sanPham->url}}</td>
                <td>
                    {!! Form::open(['route' => ['admin.sanPhams.destroy', $sanPham->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('admin.sanPhams.show', [$sanPham->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('admin.sanPhams.edit', [$sanPham->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach


        {{--<tr>--}}
            {{--<td>Garrett Winters</td>--}}
            {{--<td>Accountant</td>--}}
            {{--<td>Tokyo</td>--}}
            {{--<td>63</td>--}}
            {{--<td>2011/07/25</td>--}}
            {{--<td>$170,750</td>--}}
        {{--</tr>--}}
        {{--<tr>--}}
            {{--<td>Ashton Cox</td>--}}
            {{--<td>Junior Technical Author</td>--}}
            {{--<td>San Francisco</td>--}}
            {{--<td>66</td>--}}
            {{--<td>2009/01/12</td>--}}
            {{--<td>$86,000</td>--}}
        {{--</tr>--}}
    @endif
    </tbody>

</table>