@extends('students.layouts')
@section('content')
<br>
    <div class="card">
        <div class="card-header"><h4>Students Page</h4></div>
        <div class="card-body">

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>

                            <th>Name</th>
                            <th>Address</th>
                            <th>Mobile</th>
                            <th>Age</th>

                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>{{ $students->name }}</td>
                            <td>{{ $students->address }}</td>
                            <td>{{ $students->mobile }}</td>
                            <td>{{ $students->age }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
