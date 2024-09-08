<!DOCTYPE html>
<html>
<head>
    <title>Añadir Cliente</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('views/clientes/styles.css'); ?>">
</head>
<body>

<h2>Crear Cliente</h2>

<form action="<?= base_url('clientes/store') ?>" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" required><br>

    <label for="apellido">Apellido:</label>
    <input type="text" name="apellido" required><br>

    <label for="direccion">Direccion:</label>
    <input type="text" name="direccion" required><br>

    <label for="nit">NIT:</label>
    <input type="text" name="nit" required><br>

    <label for="correo_electronico">Correo Electrónico:</label>
    <input type="email" name="correo_electronico" required><br>

    <label for="telefono">Teléfono:</label>
    <input type="text" name="telefono" required><br>

    <button type="submit">Guardar Cliente</button>
</form>

<a href="<?= base_url('index'); ?>">Volver a la lista</a>

<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 20px;
}

h2 {
    text-align: center;
    color: #fff;
    background-color:  #00027c;
    padding: 10px;
    border-radius: 5px;
}

a {
    color: #00027c; 
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

button {
    width: 100%; 
    background-color: #00027c; 
    color: white;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px; 
}

button:hover {
    background-color: #00027c; 
}

form {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px; 
    max-width: 400px; 
    margin: auto; 
}

label {
    display: block; 
    margin-bottom: 5px; 
    color: #333; 
}

input[type="text"],
input[type="email"] {
    width: 100%;
    max-width: 350px; 
    padding: 10px; 
    margin-bottom: 15px;
    border: 1px solid #076ca7; 
    border-radius: 5px;
    box-sizing: border-box; 
}
</style>
</body>
</html>