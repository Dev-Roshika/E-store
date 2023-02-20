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
@include('footer')