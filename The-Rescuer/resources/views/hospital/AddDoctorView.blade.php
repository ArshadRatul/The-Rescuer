<!DOCTYPE html>
<html>

<head>
    <title>Contact us</title>
    <link rel="stylesheet" type="text/css" href="{{ url('css/hospital/AddDoctor/style.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
</head>

<body>
    @include('hospital.HospitalNavLinks')
    <section class="SignUp-section">


        <form class="col-lg-5 col-md-7 col-sm-8 col-10 shadow p-5 text-center" id="SIgnup-design" method="POST"
            action="{{ url('DoctorInformation') }}" enctype="multipart/form-data">
            @csrf
            @if (session()->has('success'))
                <div style="font-weight: 900; font-size: 20px; color: rgb(173, 37, 27);" class="alert alert-success ">
                    <button type="button" class="close" data-dismiss="alert">X</button>
                    {{ session()->get('success') }}

                </div>
            @endif
            <p style="font-weight: 900; font-size: 40px; color: rgb(173, 37, 27);"> Add Doctor for your Hospital</p>
            <br>



            <label for="first_name" class="form-label">Enter First Name
                :</label>
            <input type="text" name="first_name" placeholder="First Name  " class=" form-control my-3 py-3 p-1"
                id="form-design" onfocus="this.placeholder=''" onblur="this.placeholder='First Name  '" required>
            <label for="last_name" class="form-label">Enter Last
                Name:</label>
            <input type="text" name="last_name" placeholder="Last Name " class=" form-control my-3 py-3 p-1"
                id="form-design"onfocus="this.placeholder=''" onblur="this.placeholder='Last Name '" required>
            <label for="username" class="form-label">Choose a
                username:</label>
            <input type="text" name="username" placeholder="username " class=" form-control my-3 py-3 p-1"
                id="form-design"onfocus="this.placeholder=''" onblur="this.placeholder='username '" required>
            <label for="HospitalName" class="form-label">Hospital Name:</label>
            <input type="text" name="HospitalName" placeholder="Hospital Name " class=" form-control my-3 py-3 p-1"
                id="form-design"onfocus="this.placeholder=''" onblur="this.placeholder='Hospital Name '" required>
            <label for="ContactNumber" class="form-label">Contact Number:</label>
            <input type="text" name="ContactNumber" placeholder="Contact Number " class=" form-control my-3 py-3 p-1"
                id="form-design"onfocus="this.placeholder=''" onblur="this.placeholder='Contact Number '" required>
            <label for="email" class="form-label">Enter a Valid
                Email :</label>
            <input type="email" name="email" placeholder="Email Address " class=" form-control my-3 py-3 p-1"
                id="form-design" onfocus="this.placeholder=''" onblur="this.placeholder='Email Address '" required
                autocomplete="off">

            <label for="Department" class="form-label">Enter Department:</label>
            <input type="text" name="Department" placeholder="Department " class=" form-control my-3 py-3 p-1"
                id="form-design"onfocus="this.placeholder=''" onblur="this.placeholder='Department '" required>
            <label for="Position" class="form-label">Enter Position:</label>
            <input type="text" name="Position" placeholder="Position " class=" form-control my-3 py-3 p-1"
                id="form-design"onfocus="this.placeholder=''" onblur="this.placeholder='Position '" required>
            <label for="Address" class="form-label">Enter Address:</label>
            <input type="text" name="Address" placeholder="Address " class=" form-control my-3 py-3 p-1"
                id="form-design"onfocus="this.placeholder=''" onblur="this.placeholder='Address '" required>
            <label for="DoctorDOB" class="form-label">Date Of Birth</label>
            :</label>
            <input type="date" name="DoctorDOB" placeholder="Email Address " class=" form-control my-3 py-3 p-1"
                id="form-design" onfocus="this.placeholder=''" onblur="this.placeholder='Email Address '" required>
            {{-- <label for="photo" class="form-label">Upload a Picture:</label>
            <input type="file" name="photo" placeholder="Picture " class=" form-control my-3 py-3 p-1"
                id="photo"onfocus="this.placeholder=''" onblur="this.placeholder='Picture '" > --}}
            <label for="gender" id="gender" style="">
                Gender :</label>form-design

            <br> <input type="radio" name="gender" value="Male" name="gender" required>

            <label for="ma">Male</label>
            <input type="radio" id="fe" value="Female" name="gender">
            <label for="fe">Female</label> <br> <br>

            <button type="submit" name="submitButton" class="btn my-2 py-2" id="button-login">Add Doctor</button>





        </form>



        </form>




    </section>

</body>

</html>





{{-- <label for="formGroupExampleInput" class="form-label"
               >Choose a
                Password:</label>
            <input type="password" name="password" placeholder="Password " class=" form-control my-3 py-3 p-1"
                id="formone"onfocus="this.placeholder=''" onblur="this.placeholder='Password '" required>
            <label for="formGroupExampleInput" class="form-label"
                    >Re-Enter the
                Password:</label>
            <input type="password" name="passwordRepeat" placeholder="Confirm Password "
                class=" form-control my-3 py-3 p-1" id="formone"onfocus="this.placeholder=''"
                onblur="this.placeholder='Confirm Password '" required> --}}
