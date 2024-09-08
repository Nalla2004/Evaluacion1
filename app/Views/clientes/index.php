<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #b9f5ff;
            margin: 0;
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: #fff;
            background-color: #00039c; 
            padding: 10px;
            border-radius: 5px;
        }

        a {
            color: #00b7ff; 
            text-decoration: none; 
        }

        a:hover {
            text-decoration: underline; 
        }

        .btn-aqua {
            background-color: #00b7ff; 
            color: white;
        }

        .btn-aqua:hover {
            background-color: #0095d9; 
            color: white;
        }
        .table {
        background-color: #ffffff; /* Fondo blanco para la tabla */
    }
    </style>
</head>
<body>

<div class="container mt-5">
    <h2>Clientes</h2>
    <table id="cliente" class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Dirección</th>
                <th>NIT</th>
                <th>Correo Electrónico</th>
                <th>Teléfono</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($clientes as $cliente): ?>
                <tr>
                    <td><?= esc($cliente['cliente_id']); ?></td>
                        <td><?= esc($cliente['nombre']); ?></td>
                        <td><?= esc($cliente['apellido']); ?></td>
                        <td><?= esc($cliente['direccion']); ?></td>
                        <td><?= esc($cliente['nit']); ?></td>
                        <td><?= esc($cliente['correo_electronico']); ?></td>
                        <td><?= esc($cliente['telefono']); ?></td>
                    <td>
                        <a href="<?= base_url('clientes/edit/' . $cliente['cliente_id']); ?>" class="btn btn-primary btn-sm">Editar</a> |
                        <a href="<?= base_url('clientes/delete/' . $cliente['cliente_id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este cliente?')">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            <tr>
                <td colspan="8" class="text-center">
                    <a href="<?= base_url('cliente/create'); ?>" class="btn btn-aqua">Añadir Cliente</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        $('#cliente').DataTable({
            "searching": false 
        });
    });
</script>

</body>
</html>