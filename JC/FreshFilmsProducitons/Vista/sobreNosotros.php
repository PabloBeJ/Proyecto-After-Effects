<?php
require('app/header.php');
?>
<body>
<div style="padding-top: 7%" class="container">
    <div class="row d-flex justify-content-center">
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
                <td class="col-2 col-sm-2"><img src="../img/inigo.jpg" alt="perfilInigo" class="img-fluid imagenesSobre rounded"></td>
                <td>Iñigo</td>
                <td>Zuriaga</td>
                <td>@topo</td>
            </tr>
            <tr>
                <td class="col-2 col-sm-2"><img src="../img/pablo.jpg" alt="perfilPablo"
                                                class="img-fluid imagenesSobre rounded"></td>
                <td>Pablo</td>
                <td>Horcajada</td>
                <td>@pinto</td>
            </tr>
            <tr>
                <td class="col-2 col-sm-2"><img src="../img/pabloB.jpg" alt="perfilPabloB"
                                                class="img-fluid imagenesSobre rounded"></td>
                <td>Pablo</td>
                <td>Bejar</td>
                <td>@lux</td>
            </tr>
            <tr>
                <td class="col-2 col-sm-2"><img src="../img/sergio.jpg" alt="perfilSergio"
                                                class="img-fluid imagenesSobre rounded"></td>
                <td>Sergio</td>
                <td>Díaz</td>
                <td>@karamba</td>
            </tr>
            </tbody>
        </table>
    </div>
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
require('app/footer.php');
?>
