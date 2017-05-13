<html>
<body>
  <?php include 'metas.php';?>

  <div class="map">
    <div class="container">

      <div class="row justify-content-center">
        <div class="col-md-4">
          <div class="map--card text-center">
          <form>
          <div class="form-group">
            <input type="text" class="form-control" id="destination" placeholder="Catedral, Merida Centro">
          </div>
          <a class="btn btn-primary btn-main" href="reserve.php">Reservar lugar</a>
        </form>
        </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12 map--container">
            <div id="map" style="height:70%;"></div>
        </div>
      </div>


    </div>
  </div>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script>
        function initMap() {

            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                center: {
                    lat: 20.967411,
                    lng: -89.622353
                }
            });

            // Create an array of alphabetical characters used to label the markers.
            var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

            // Initializing infowindow to show details
            var infowindow = new google.maps.InfoWindow({});

            // Add some markers to the map.
            // Note: The code uses the JavaScript Array.prototype.map() method to
            // create an array of markers based on a given "locations" array.
            // The map() method here has nothing to do with the Google Maps API.
            var markers = locations.map(function(location, i) {

               // Creating markers
               marker = new google.maps.Marker({
                   position: location
               });

                 // Adding listener to marker on click event
                 marker.addListener('click', function () {

                     infowindow.open(map, this);
                 });
                 marker.setMap(map);

            });




        }
        var locations = [{
                lat: 20.974799,
                lng: -89.621127
            },
            {
                lat: 20.974398,
                lng: -89.622168
            },
            {
                lat: 20.975560,
                lng: -89.621717
            },
            {
                lat: 20.968350,
                lng: -89.619531
            },
            {
                lat: 20.967358,
                lng: -89.621065
            },
            {
                lat: 20.965965,
                lng: -89.623500
            },
            {
                lat: 20.965684,
                lng: -89.625131
            },
            {
                lat: 20.965173,
                lng: -89.626225
            },
            ,
            {
                lat: 20.964582,
                lng: -89.626386
            }
        ]
    </script>
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnOTdmb78nZYCm01SE5TYB6xuSdYUAqkE&callback=initMap">
    </script>
</body>

</html>
