<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>After Effects Films</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <LINK REL=StyleSheet HREF="css/estilo.css" TYPE="text/css" MEDIA=screen>
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
    <h1>El equipo de After Effects</h1>
    <p>Nuestro gran equipo de producción, hizo posible el corto Mandarin Revenge. Se compone de 4 jóvenes programadores
        con mucha imaginación.</p>
    <div class="container">
        <div class="row">
            <table class="table table-borderless">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Usuario</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="col-2 col-sm-2"><img src="img/inigo.png" alt="perfilInigo"
                                class="img-fluid imagenesSobre rounded"></td>
                        <td>Iñigo</td>
                        <td>Zuriaga</td>
                        <td>@tonto</td>
                    </tr>
                    <tr>
                        <td class="col-2 col-sm-2"><img src="img/pablo.jpg" alt="perfilPablo"
                                class="img-fluid imagenesSobre rounded"></td>
                        <td>Pablo</td>
                        <td>Horcajada</td>
                        <td>@pinto</td>
                    </tr>
                    <tr>
                        <td class="col-2 col-sm-2"><img src="img/pabloB.jpg" alt="perfilPabloB"
                                class="img-fluid imagenesSobre rounded"></td>
                        <td>Pablo</td>
                        <td>Bejar</td>
                        <td>@lux</td>
                    </tr>
                    <tr>
                        <td class="col-2 col-sm-2"><img src="img/sergio.jpg" alt="perfilSergio"
                                class="img-fluid imagenesSobre rounded"></td>
                        <td>Sergio</td>
                        <td>Díaz</td>
                        <td>@karamba</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <h4>C/ de los Pirineos, 55, 28040 Madrid</h4>
    <div id="map"></div>
    <script src=""></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDohJJmi37KRYta7lXYchfd2DA7l2CcZ8s&callback=iniciarMap"></script>
</body>

</html>