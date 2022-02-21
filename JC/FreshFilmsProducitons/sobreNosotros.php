<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<?php
require('Vista/app/header.php');
?>
<body>
<div style="padding-top: 7%" class="container">
    <div class="row">

        <h1>El equipo de After Effects</h1>
        <p>Nuestro gran equipo de producción, hizo posible el corto Mandarin Revenge. Se compone de 4 jóvenes programadores
            con mucha imaginación.</p>
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
                <td class="col-2 col-sm-2"><img src="img/inigo.jpg" alt="perfilInigo" class="img-fluid imagenesSobre rounded"></td>
                <td>Iñigo</td>
                <td>Zuriaga</td>
                <td>@topo</td>
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


<div class="container mt-5">
    <!--NOMBRE-->
    <!--<form class="row g-3"></form>-->
    <form class="row g-3 needs-validation" novalidate>
        <h2>¡Contacta con nosotros!</h2>
        <div class="col-md-6">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Juan" required>
            <div class="invalid-feedback">
                Nombre!
            </div>
        </div>
        <!--APELLIDO-->
        <div class="col-md-6">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" name="apellido" class="form-control" id="apellidos" placeholder="Gorostiza" required>
            <div class="invalid-feedback">
                Apellido!
            </div>
        </div>
        <!--EMAIL-->
        <div class="col-md-8">
            <label for="email" class="form-label">Email</label>
            <div class="input-group">
                <div class="input-group-text">@</div>
                <input class="form-control" id="email" type="email" placeholder="name@example.com" required/>
            </div>

            <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
            <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
        </div>


        <!--TELEFONO-->
        <div class="col-md-4">
            <label for="phoneNumber" class="form-label">Número de teléfono</label>
            <input type="text" class="form-control" id="phoneNumber" placeholder="+34" required>
            <div class="invalid-feedback">
                Teléfono!
            </div>
        </div>

        <!--SEXO-->
        <div class="col-md-3">
            <label for="nombre" class="form-label">Sexo:</label>
            <div class="form-check">
                <div class="col-md-3">
                    <input class="form-check-input" type="radio" name="sexoradios" id="exampleRadios1"
                           value="hombre" checked>
                    <label class="form-check-label" for="radios1">
                        Hombre
                    </label>
                </div>
            </div>
            <div class="form-check">
                <div class="col-md-3">
                    <input class="form-check-input" type="radio" name="sexoradios" id="radios2" value="mujer">
                    <label class="form-check-label" for="radios2">
                        Mujer
                    </label>
                </div>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sexoradios" id="radios3" value="otro" disabled>
                <label class="form-check-label" for="radios3">
                    Otro
                </label>
            </div>
        </div>

        <!--TEXTAREA-->
        <div class="col-md-12">
            <label for="comments" class="form-label">Información</label>
            <textarea class="form-control" id="comments" rows="6"></textarea>
        </div>

        <div class="col-md-6">
            <label for="imagen" class="form-label">Imagen</label>
            <input class="form-control" type="file" id="formFile">
        </div>


        <!--SELECT-->
        <div class="col-md-6">
            <label for="nombre" class="form-label">Noseque</label>
            <select class="form-select" id="autoSizingSelect">
                <option selected>Elige...</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
                uwu?
            </label>
        </div><br>
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>
</div>
<script>
    var forms = document.querySelectorAll('.needs-validation');

    Array.prototype.slice.call(forms).forEach(function (form) {
        form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation();
            }

            form.classList.add('was-validated');
        }, false);
    });
</script>

<?php
require('Vista/app/footer.php');
?>

</body>
</html>
