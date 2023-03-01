@include('../estoreHeader')
@include('customer/customerDashboardHead')
Welcome to Customer page
Customer name: {{Auth::user()->name}}
@include('footer')