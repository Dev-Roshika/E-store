@include('../estoreHeader')
@include('admin/adminDashboardHead')
<h1>Add a new product</h1>
<form action="{{url('employee')}}" method="post">
    {{ csrf_field() }}
    <label for="name">Name</label>
    <input type="text" id='name' name='name'>
    <label for="email">Email</label>
    <input type="email" id='email' name='email'>
    <label for="gender">Gender</label>
    <select name="gender" id="gender">
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select>
    <label for="address">Address</label>
    <input type="text" id='address' name='address'>
    <label for="mobile">Mobile no:</label>
    <input type="tel" id='mobile' name='mobile'>
    <label for="password">Password</label>
    <input type="password" id='password' name='password'>
    <input type="hidden" id="role" name="role" value="employee">
    <input type="submit" value="Add">
</form>

@include('../footer')