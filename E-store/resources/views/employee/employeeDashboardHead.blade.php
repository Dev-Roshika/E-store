<table>
    <thead>
        <th>
            <a href="">{{Auth::user()->name}}</a>
            <?php  //For get the employee name  ?>
        </th>
        <th>
            <a href="{{url('product')}}">Products</a>
        </th>
        <th>
            <a href="{{url('employee')}}">Employees</a>
        </th>
        <th>
            <a href="{{ route('logout') }}">Logout</a>
        </th>
    </thead>
</table>