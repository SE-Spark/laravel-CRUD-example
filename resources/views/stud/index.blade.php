<div class="col-lg-12">
<a href="{{url('/create')}}" class="btn btn-sm btn-primary">Add New Student</a>
    <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email</th>
            <th scope="col">city</th>
            <th scope="col">Country</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{$student->firstName}}</td>
                    <td>{{$student->lastName}}</td>
                    <td>{{$student->email}}</td>
                    <td>{{$student->city}}</td>
                    <td>{{$student->Country}}</td>
                    <td>
                        <a href="{{url('/edit/'.$student->id)}}" class="btn btn-sm btn-warning">Edit</a>
                        <a href="{{url('/delete/'.$student->id)}}" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>