<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{ asset('css/eliminado.css') }}">
    <link rel="stylesheet" href="xd.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <title>Ejercicio actualizado</title>
</head>

<body>
    <section class="modal">
        <div class="modal-container">
            <img class="modal-img" src="{{ asset('img/eliminado.svg') }}">
            <h2 class="title">Hola Gerente</h2>
            <p class="paragraph">El Ejercicio fue actualizado correctamente, ¿deseas actualizar otro Ejercicio?</p>
            <div class="btns">
                <a href="{{ route('ejercicio.index') }}" class="open-view">Si</a>
                <a href="{{ route('gerente.indexadmin') }}" class="open-guide">No, volver al index</a>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script>
        Swal.fire({
            title: '<strong>Ejercicio Actualizado</strong>',
            icon: 'success',
            backdrop: true,
            timer: 5000,
            timerProgressBar: true,
            showConfirmButton: true
        })
    </script>
</body>

</html>