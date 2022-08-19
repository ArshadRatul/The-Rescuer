<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="{{ url('css/hospital/AddDoctor/style.css') }}">

    <title></title>
</head>

<body>

    {{-- nav --}}
    @include('user.NavWithLinks')
    {{-- nav  close --}}
    <section class="SignUp-section">
        <form class="col-lg-5 col-md-7 col-sm-8 col-10 shadow p-5 text-center" id="SIgnup-design" method="POST"
            action="{{ url('MakeAppointment') }}" enctype="multipart/form-data">
            @csrf
            @if (session()->has('confirmation'))
                <div style="font-weight: 900; font-size: 20px; color: rgb(173, 37, 27);" class="alert alert-success ">
                    <button type="button" class="close" data-dismiss="alert">X</button>
                    {{ session()->get('confirmation') }}

                </div>
            @endif
            <p style="font-weight: 900; font-size: 40px; color: rgb(173, 37, 27);">Get Doctor help</p>
            <br>
            <label for="Address" class="form-label">Get help For:</label>
            <select name="AppointmentType" id="form-design" style="width: 100%; text-align: center">>
                <option value="Cardiology">Cardiology</option>
                <option value="Diabetes">Diabetes</option>
                <option value="Hemorrhoid">Hemorrhoid</option>
                <option value="Anxiety">Anxiety</option>
                <option value="Depression">Depression</option>
                <option value="Fever">Fever</option>
                <option value="Colds and Flu">Colds and Flu</option>
                <option value="Headaches">Headaches</option>
                <option value="Diarrhea">Diarrhea</option>
                <option value="Psychiatry">Psychiatry</option>
                <option value="Physiotherapist">Physiotherapist</option>
                <option value="Dental">Dental</option>

            </select>
            <label for="Address" class="form-label mt-4">Your Age:</label>
            <input type="text" name="Age" placeholder="Age" class=" form-control my-3 py-3 p-1"
                id="form-design"onfocus="this.placeholder=''" onblur="this.placeholder='Age '" required>

            <label for="Address" class="form-label mt-4">Describe your Problems:</label>
            <input type="textarea" name="Problems" placeholder="Details " class=" form-control my-3 py-3 p-1"
                id="form-designText"onfocus="this.placeholder=''" onblur="this.placeholder='Details '" required>
{{--
            <label for="gender" id="gender" class="mt-4">
                Gender :</label>

            <br> <input type="radio" name="gender" value="Male" name="gender" required>

            <label for="ma">Male</label>
            <input type="radio" id="fe" value="Female" name="gender">
            <label for="fe">Female</label> --}}
            <br> <br>

            <button type="submit" name="submitButton" class="btn my-2 py-2" id="button-login">Submit
                Appointment</button>





        </form>


    </section>
    {{-- nav --}}
    @include('admin.AdminFooter')
    {{-- nav  close --}}
</body>

</html>
