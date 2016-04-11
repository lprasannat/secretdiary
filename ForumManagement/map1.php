

<html>
    <head>
        <meta charset="utf-8" />
        <title>Get Location Map using Address</title>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
    </head>

    <body>
        <form method="post" action="process.php">
            Address : <input type="text" value="" name="address" /><br/>
            City :<input type="text" value="" name="city" /><br/>
            State : <input type="text" value="" name="state" /><br/>
            Country : <input type="text" value="" name="country" /><br/>
            Zip code :<input type="text" value="" name="zip" /><br/>
            <input type="submit" name="submit" value="Find Location" />
        </form>
        <?php
        $address	= trim(urlencode($_POST['address']));
        $city 		= trim(urlencode($_POST['city']));
        $state 		= trim(urlencode($_POST['state']));
        $country  	= trim(urlencode($_POST['country']));
        $zip 		= trim($_POST['zip']);




        $geocode	=	file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$add.',+'.$city.',+'.$state.',+'.$country.'&sensor=false');

        $output		= json_decode($geocode); //Store values in variable
        //print_r($output);

        if($output->status == 'OK'){ // Check if address is available or not
        echo "<br/>";
        echo "Latitude : ".$latitude = $output->results[0]->geometry->location->lat; //Returns Latitude

        echo "<br/>";
        echo "Longitude : ".$longitude = $output->results[0]->geometry->location->lng; // Returns Longitude

        }
        else {
        echo "Sorry we can't find this location.Check the details again!";
        }

        ?>

        <script type="text/javascript">
            $(document).ready(function () {
                // Define the latitude and longitude positions
                var latitude = parseFloat("<?php echo $latitude; ?>"); // Latitude get from above variable
                var longitude = parseFloat("<?php echo $longitude; ?>"); // Longitude from same
                var latlngPos = new google.maps.LatLng(latitude, longitude);

                // Set up options for the Google map
                var myOptions = {
                    zoom: 14,
                    center: latlngPos,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    zoomControlOptions: true,
                    zoomControlOptions: {
                        style: google.maps.ZoomControlStyle.LARGE
                    }
                };

                // Define the map
                map = new google.maps.Map(document.getElementById("map"), myOptions);

                // Add the marker
                var marker = new google.maps.Marker({
                    position: latlngPos,
                    map: map,
                    title: "Your Location"
                });

            });
        </script>

        <div id="map" style="width:450px;height:350px;  margin:20px auto 0;"></div> 


    </body>
</html>
