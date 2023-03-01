@include('../estoreHeader')
@include('customer/customerDashboardHead')
<h1>Order details</h1>
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
                    <form method="POST" action="{{ url('/customer/order' . '/' . $item->id) }}" accept-charset="UTF-8"
                        style="display:inline">
                        @method('POST')
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger btn-sm" title="Place an order"
                            onclick="return confirm(&quot;Confirm order?&quot;)"><i class="fa fa-trash-o"
                                aria-hidden="true"></i> Place an order</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@include('footer')