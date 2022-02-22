<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #map {
            height: 500px;
            width: 80%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
    <script>function iniciarMap(){
            var coord = {lat:40.4538891836561 ,lng: -3.7185732846581763};
            var map = new google.maps.Map(document.getElementById('map'),{
                zoom: 15,
                center: coord
            });
            var marker = new google.maps.Marker({
                position: coord,
                map: map
            });
        }</script>
</head>
<body>
    <h4>C/ de los Pirineos, 55, 28040 Madrid</h4>
    <div id="map"></div>
    <script src=""></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDohJJmi37KRYta7lXYchfd2DA7l2CcZ8s&callback=iniciarMap"></script>
</body>
</html>
