@include('../estoreHeader')
@include('admin/adminDashboardHead')


<table>
    <thead>
        <th>Details of Employee</th>
    </thead>
    <tbody>
        <tr>
            <td>Name :{{$employees->name}}</td>
        </tr>
        <tr>
            <td>Email :{{$employees->email}}</td>
        </tr>
        <tr>
            <td>Gender :{{$employees->gender}}</td>
        </tr>
        <tr>
            <td>Address :{{$employees->address}}</td>
        </tr>
        <tr>
            <td>Mobile no :{{$employees->mobile}}</td>
        </tr>
    </tbody>
</table>

@include('footer')