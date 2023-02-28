@include('../estoreHeader')
@include('admin/adminDashboardHead')
<h1>Add a new product</h1>
<form action="{{url('product')}}" method="post">
    {{ csrf_field() }}
    <label for="name">Name</label>
    <input type="text" id='name' name='name'>
    <label for="detail">Detail</label>
    <input type="text" id='details' name='details'>
    <label for="price">Price</label>
    <input type="text" id='price' name='price'>
    <input type="submit" value="Add">
</form>

@include('../footer')