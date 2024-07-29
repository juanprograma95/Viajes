<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de hoteles</title>
</head>
<style>
    body{
        background-color: #DBDBDE;
    }
</style>
<body>
 <br/><br/>
 <form action="conexion.php" method="POST">

 <table border='2' align='center'>
 <caption>Registrar hotel</caption>
 <tr>
        <td>Nombre del hotel</td>
        <td><input type="text" name="hotel" size="50" /></td>
 </tr>

 <tr>
        <td>Ubicación</td>
        <td><input type="text" name="ubicacion" size="50" /></td>
 </tr>
    <tr>
        <td>Habitaciones disponibles</td>
        <td><input type="number" name="habitaciones_disponibles"/></td>
 </tr>
 <tr>
    <tr>
        <td>Tarifa por noche</td>
        <td><input type="number" name="tarifa_noche"></td>
    </tr>

     <td colspan='2' align='center'>
        <input type="submit" name="ingresar" value="Ingresar">
        <input type="submit" name="modificar" value="Modificar">
        <input type="submit" name="consultar" value="Consultar">
        <input type="reset" name="eliminar" value="Cancelar" />
    </td>
 </tr>
 </table>
</form>
</body>
 </html>
