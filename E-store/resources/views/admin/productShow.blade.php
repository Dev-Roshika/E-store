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