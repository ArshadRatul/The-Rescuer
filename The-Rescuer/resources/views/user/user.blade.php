



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-color:rgb(243, 248, 248)">

  {{-- nav --}}
    @include('user.NavWithLinks')
  {{-- nav  close--}}


    @include('Dashboard.CoverPhoto')

{{-- welcomeMEssage  --}}
@include('hospital.welcomeMessage')
{{-- welcomeMEssage close --}}




{{-- DoctorList --}}

@include('hospital.SeeDoctor')

{{-- DoctorList close --}}

{{-- see map --}}
@include('user.ViewMap')
{{-- see map close--}}

{{-- footer --}}
@include('admin.AdminFooter')
{{-- footer  close--}}
</body>
</html>
