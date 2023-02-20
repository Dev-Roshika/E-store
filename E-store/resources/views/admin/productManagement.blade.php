@include('../estoreHeader')
<table>
    <thead>
        <th>
            <a href="{{url('adminDetails')}}">Admin name</a>
        </th>
        <th>
            <a href="{{url('productManagement')}}">Products</a>
        </th>
        <th>
            <a href="{{url('')}}">Employees</a>
        </th>
        <th>
            <a href="{{url('adminWelcome')}}">Logout</a>
        </th>
    </thead>
</table>
<div>
    <a href="{{url('product/create')}}">Create new product</a>
</div>
<div>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Detail</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->details }}</td>
                <td>{{ $item->price }}</td>
                <td>
                    <a href="{{ url('/product/' . $item->id) }}" title="View Product"><button
                            class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                    <a href="{{ url('/product/' . $item->id . '/edit') }}" title="Edit Product"><button
                            class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            Edit</button></a>
                    <form method="POST" action="{{ url('/product' . '/' . $item->id) }}" accept-charset="UTF-8"
                        style="display:inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger btn-sm" title="Delete product"
                            onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o"
                                aria-hidden="true"></i> Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@include('footer')