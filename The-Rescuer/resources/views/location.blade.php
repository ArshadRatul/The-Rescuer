<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyB2tNmeZykUWKkkLLDfakidOaCPnEVECB8"></script>
</head>
<body>

    {{-- <input type="text" id="address">
    <script type="text/javascript">
       function initMap() {
            var autoComplete;
            var id = 'address';
            autoComplete = new google.maps.places.Autocomplete(document.getElementById(id)), {
                types: ['geocode'],
            };

            google.maps.event.addListener(autoComplete, 'place_changed', function() {
                var place = autoComplete.getPlace();

            });


        };
    </script> --}}


    <div class="form-group">
        <label>Location:</label>
        <input type="text" class="form-control" id="search_input" placeholder="Type address..." />
        <input type="hidden" id="loc_lat" />
        <input type="hidden" id="loc_long" />
    </div>

    <!-- Display latitude and longitude -->
    <div class="latlong-view">
        <p><b>Latitude:</b> <span id="latitude_view"></span></p>
        <p><b>Longitude:</b> <span id="longitude_view"></span></p>
    </div>

<script>

var searchInput = 'search_input';

$(document).ready(function () {
    var autocomplete;
    autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
        types: ['geocode'],
    });

    google.maps.event.addListener(autocomplete, 'place_changed', function () {
        var near_place = autocomplete.getPlace();
        document.getElementById('loc_lat').value = near_place.geometry.location.lat();
        document.getElementById('loc_long').value = near_place.geometry.location.lng();

        document.getElementById('latitude_view').innerHTML = near_place.geometry.location.lat();
        document.getElementById('longitude_view').innerHTML = near_place.geometry.location.lng();
    });
});

</script>



</body>
</html>
