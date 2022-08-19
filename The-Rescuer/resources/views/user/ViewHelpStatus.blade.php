<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    {{-- nav --}}
    @include('user.NavWithLinks')
    {{-- nav  close --}}

    <table class="table mt-lg-5">

        <tr>
            <th scope="col">Your Name</th>
            <th scope="col">Your Disease</th>
            <th scope="col">Your Gender</th>
            <th scope="col">Status</th>
            <th scope="col">Cancel Request</th>
        </tr>

        <tbody>
            @foreach ($AppointmentT as $Appointment)
            <tr>
                <td>{{ $Appointment->PatientName }}</td>
                <td>{{ $Appointment->AppointmentType }}</td>
                <td>{{ $Appointment->gender }}</td>
                <td>{{ $Appointment->status }}</td>
                <td> <a type="button" style="color:rgb(0, 6, 0); background-color:rgb(223, 92, 65)" onClick="return confirm('Are you sure')" class="btn btn-danger  m-2" href="{{ url('CancelRequest',$Appointment->id) }} ">Cancel</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>


    {{-- @if (session()->has('confirm'))
    <div style="font-weight: 900; font-size: 20px; color: rgb(173, 37, 27);" class="alert alert-success ">
        <button type="button" class="close" data-dismiss="alert">X</button>
        {{ session()->get('confirm') }}

    </div>
@endif --}}



</body>

</html>
