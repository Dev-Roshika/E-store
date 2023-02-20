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
<h1>Add a new product</h1>
<form action="{{url('product'.'/'.$products->id)}}" method="post">
    {{ csrf_field() }}
    @method('PATCH')
    <input type="hidden" id="id" name="id" value="{{$products->id}}">
    <label for="name">Name</label>
    <input type="text" id='name' name='name' value="{{$products->name}}">
    <label for="detail">Detail</label>
    <input type="text" id='details' name='details' value="{{$products->details}}">
    <label for="price">Price</label>
    <input type="text" id='price' name='price' value="{{$products->price}}">
    <input type="submit" value="Update">
</form>

@include('../footer')