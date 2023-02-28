@include('../estoreHeader')
@include('admin/adminDashboardHead')


<table>
    <thead>
        <th>Product Details</th>
    </thead>
    <tbody>
        <tr>
            <td>Name :{{$products->name}}</td>
        </tr>
        <tr>
            <td>Detail :{{$products->details}}</td>
        </tr>
        <tr>
            <td>Price :{{$products->price}}</td>
        </tr>
    </tbody>
</table>

@include('footer')