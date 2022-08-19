<div class="page-section bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <h1 class="font-weight-normal">Our Doctors</h1>
                <div class="row">
                    @foreach ($doctorT as $doctor)
                        <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
                            <div class="card-doctor">
                                <div class="header">
                                    <img src="Hospital/Hospital/doctor_2.jpg" alt="">
                                    <div class="meta">
                                        <a href="#"><span class="mai-call"></span></a>
                                        <a href="#"><span class="mai-logo-whatsapp"></span></a>
                                    </div>
                                </div>
                                <div class="body">
                                    <p class="text-xl mb-0 ">{{ $doctor->first_name }} {{ $doctor->last_name }}</p>
                                    <p class="text-xl mb-0">Hospital :{{ $doctor->HospitalName }} </p>
                                    <span class="text-xl text-grey">{{ $doctor->Department }}</span>

                                    <p class="text-xl mb-0">{{ $doctor->Position }} </p>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>

            </div>
        </div>
    </div> <!-- .container -->
</div>
