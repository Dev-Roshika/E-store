<table>
    <thead>
        <th>
            <a href="">
                @if(Auth::user()->name)
                {{ Auth::user()->name }}
                @else
                Customer Name
                @endif
            </a>
            <?php  //For get the customer name  ?>
        </th>
        <th>
            <a href="{{url('customer/order')}}">Place orders</a>
        </th>
        <th>
            <a href="{{ route('logout') }}">Logout</a>
        </th>
    </thead>
</table>