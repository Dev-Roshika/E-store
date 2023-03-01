@include('../estoreHeader')
@include('customer/customerDashboardHead')

<h1>Edit an Employee</h1>
<form action="{{url('customer'.'/'.$products->id)}}" method="post">
    {{ csrf_field() }}
    @method('PATCH')
    <input type="hidden" id="id" name="id" value="{{$products->id}}">
    <label for="name">Product Name :</label>
    <input type="text" id='name' name='name' value="{{$products->name}}">
    <label for="employee">Employee: </label>
    <select name="employee">
        <option value="">Select Employee</option>
        @foreach ($employees as $id => $name)
        <option value="{{ $id }}">{{ $name }}</option>
        @endforeach
    </select>

    <label for="price">price :</label>
    <input type="text" id='price' name='price' value="{{$products->price}}">
    <label for="gender">Gender :</label>

    <input type="submit" value="Order">
</form>

@include('../footer')