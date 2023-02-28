@include('../estoreHeader')
@include('admin/adminDashboardHead')

<h1>Edit an Employee</h1>
<form action="{{url('employee'.'/'.$employees->id)}}" method="post">
    {{ csrf_field() }}
    @method('PATCH')
    <input type="hidden" id="id" name="id" value="{{$employees->id}}">
    <label for="name">Name :</label>
    <input type="text" id='name' name='name' value="{{$employees->name}}">
    <label for="email">Email :</label>
    <input type="email" id='email' name='email' value="{{$employees->email}}">
    <label for="gender">Gender :</label>
    <!--Note this-->
    <select name="gender" id="gender">
        <option value="male" {{ $employees->gender == 'male' ? 'selected' : '' }}>Male</option>
        <option value="female" {{ $employees->gender == 'female' ? 'selected' : '' }}>Female</option>
    </select>

    <label for="address">Address :</label>
    <input type="text" id='address' name='address' value="{{$employees->address}}">
    <label for="mobile">Mobile no:</label>
    <input type="tel" id='mobile' name='mobile' value="{{$employees->mobile}}">
    <input type="submit" value="Update">
</form>

@include('../footer')