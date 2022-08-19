<div class="content">
    <form action="" method="post">
        @csrf
        <div class="mapform">
            <div class="row">
                <div class="col-5">
                    <input type="text" class="form-control" placeholder="lat" name="lat" id="lat">
                </div>
                <div class="col-5">
                    <input type="text" class="form-control" placeholder="lng" name="lng" id="lng">
                </div>
            </div>

            <div id="map" style="height:400px; width: 800px;" class="my-3"></div>

            <script>
                let map;

                function initMap() {
                    map = new google.maps.Map(document.getElementById("map"), {
                        center: {
                            lat: -34.397,
                            lng: 150.644
                        },
                        zoom: 8,
                        scrollwheel: true,
                    });
                    const uluru = {
                        lat: -34.397,
                        lng: 150.644
                    };
                    let marker = new google.maps.Marker({
                        position: uluru,
                        map: map,
                        draggable: true
                    });
                    google.maps.event.addListener(marker, 'position_changed',
                        function() {
                            let lat = marker.position.lat()
                            let lng = marker.position.lng()
                            $('#lat').val(lat)
                            $('#lng').val(lng)
                        })
                    google.maps.event.addListener(map, 'click',
                        function(event) {
                            pos = event.latLng
                            marker.setPosition(pos)
                        })
                }
            </script>
            {{-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDRfh_HvdqylaziKyQMZ1ADuI0vlfBshEY&callback=initMap"
                        type="text/javascript"></script> --}}

            <iframe width="100%" height="450" style="border:0" loading="lazy" allowfullscreen
                referrerpolicy="no-referrer-when-downgrade"
                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDRfh_HvdqylaziKyQMZ1ADuI0vlfBshEY
    &q=Space+Needle,Seattle+WA">
            </iframe </div>

            <input type="submit" class="btn btn-primary">
    </form>


</div>



<script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDRfh_HvdqylaziKyQMZ1ADuI0vlfBshEY&libraries=places"
        type="text/javascript"></script>

</head>

<body>
    <input type="text" id="address">
    <script type="text/javascript">
        $(document).ready(function() {
            var autoComplete;
            var id = 'address';
            autoComplete = new google.maps.places.Autocomplete(document.getElementById(id)), {
                types: ['geocode'],
            };

            google.maps.event.addListener(autoComplete, 'place_changed', function() {
                var place = autoComplete.getPlace();

            });


        });
    </script>
</body>



</html>
