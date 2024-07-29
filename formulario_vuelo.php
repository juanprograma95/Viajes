<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de vuelos</title>
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
 <caption>Registro de vuelos</caption>
 <tr>
        <td>Origen</td>
        <td><input type="text" name="origen" size="50" /></td>
 </tr>

 <tr>
        <td>Destino</td>
        <td><input type="text" name="destino" size="50" /></td>
 </tr>
    <tr>
        <td>Fecha</td>
        <td><input type="date" name="fecha"/></td>
 </tr>
 <tr>
    <tr>
        <td>Plazas disponibles</td>
        <td><input type="number" name="plazas_disponibles"></td>
    </tr>
<tr>
    <td>Precio</td>
    <td><input type="number" name="precio"></td>
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
