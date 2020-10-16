<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pokemon Nanaimo Map!</title>
    <link href="StyleSheet.css" rel="stylesheet">;

    <link rel="stylesheet" type="text/css" href="https://assets.pokemon.com/static2/_ui/css/main.css">;
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">;

    <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous">
    </script>
    <script>

        var map;
        var myMarkers = [];

        function initMap() {
            var nanaimo = {lat: 49.159700, lng: -123.907750};
            map = new google.maps.Map(document.getElementById('map'), {
                zoom: 13,
                center: nanaimo
            });
        }

        function clearMarkers() {
            for (var i = 0; i < myMarkers.length; i++) {
                //console.log("Clearing marker: [" + i + "]");
                myMarkers[i].setMap(null);
            }
            myMarkers = [];
        }

        $(document).ready(function () {

            console.log("Document ready!");

            $('#reset').click(function () {

                // remove any previous markers
                clearMarkers();

                var url = 'getPokemon.php?reset=true';
                var data = {};
                $.getJSON(url, data, function (data, status) {
                    console.log("Back from the reset");
                    var showData = $('#show-data');
                    showData.text("Session Reset");
                });
            });

            $('#get-data').click(function () {

                // remove any previous markers
                // DC: note this might be somewhat inefficient.. for performance you might have to keep an index
                // of which marker is for which pokemon, and update the lat and long accordingly
                clearMarkers();

                var showData = $('#show-data');
                showData.empty();

                var url = 'getPokemon.php';
                var data = {
                    q: 'search',
                    text: 'not implemented yet!'
                };
                console.log("Sending request for Pokemon marker list...");

                $.getJSON(url, data, function (data, status) {
                    console.log("Ajax call completed, status is: " + status);

                    // show the  message from the data
                    showData.text(data.message);

                    //console.log("Setting up markers");

                    data.markers.forEach(function (marker) {
                        //console.log("Creating marker on map");
                        var myLatlng = new google.maps.LatLng(marker.lat, marker.long);

                        //var image = marker.image;

                        var myIcon = new google.maps.MarkerImage(("images/" + marker.image), null, null, null, new google.maps.Size(40,40));

                        var mmarker = new google.maps.Marker({
                            position: myLatlng,
                            map: map,
                            title:marker.name,
                            icon: myIcon
                        });

                        // add this marker to our array of markers
                        myMarkers.push(mmarker);
                    });
                })
                .error(function(jqXHR, textStatus, errorThrown) {
                     console.log("error " + textStatus);
                     console.log("incoming Text " + jqXHR.responseText);
                     });

            });
        });
    </script>
</head>

<body>
<div id="map" style="width: 800px; height: 600px"></div>
<a href="#" id="get-data">Attack! (one round)</a>
<br>
<a href="#" id="reset">Reset</a>

<div id="show-data"></div>

<!-- NOTE this google map is using an ITAS Google Map key! Do not use for any of your private applications hosted live anywhere-->
<script asyn defer
        src="https://maps.googleapis.com/maps/api/js?AIzaSyDmP3lJ1eycOU7-HRjm1Ro1I-Y5VNgOQRYAIzaSyDmP3lJ1eycOU7-HRjm1Ro1I-Y5VNgOQRY&callback=initMap">
</script>

<nav>
            <ul>
                <li class="li-1" id="li-1"><a href="#li-1"><span class="icon icon_home"></span>Home</a></li>
                <li class="li-2" id="li-2"><a href="#li-2"><span class="icon icon_pokeball"></span>Pokédex</a></li>
                <li class="li-3" id="li-3"><a href="#li-3"><span class="icon icon_pokemontv"></span>Watch Pokémon TV</a></li>
                <li class="li-4" id="li-4"><a href="#li-4"><span class="icon icon_joystick"></span>Play Games</a></li>
                <li class="li-5" id="li-5"><a href="#li-5"><span class="icon icon_cards"></span>Trading Card Game</a></li>
                <li class="li-6" id="li-6"><a href="#li-6"><span class="icon icon_videogame"></span>Video Games</a></li>
                <li class="li-7" id="li-7"><a href="#li-7"><span class="icon icon_event"></span>Attend Events</a></li>
          </ul>
        </nav>

</body>
</html>

