<!DOCTYPE html>

<html>
        <head>
                <meta charset = "utf-8"/>
                <meta name = "viewport" content = "width=device-width"/>
                <link rel = "stylesheet" href = "css/registro.css"/>
        </head>

        <body>
                <div class = "pagina">
                <h2>Consulta de usuarios</h2>
        <div class="resultado">
		<?php
			include_once("conexion.php");
			$sql = "SELECT nombre, appaterno, apmaterno FROM usuarios order by appaterno;";

$result = consulta($sql) or die('Query failed: ' . pg_last_error());
$rows = 9;
//$rows = pg_numrows($result);

    echo "<table border='1'><tr><td>Nombre</td><td>Apellido Paterno</td><td>Apellido Materno</td>

         </tr><tr>";
    for($i=1;$i<=$rows; $i++){
$line = pg_fetch_array($result, NULL, PGSQL_ASSOC);
echo "\t<tr>\n";
echo "\t\t<td>$line[id]</td>\n";
echo "\t\t<td>$line[cedula]</td>\n";
echo "\t\t<td>$line[nombre]</td>\n";
echo "\t</tr>\n";
}
echo "</table>\n";
echo "<hr>";

		?>
    </div>
		<p>Termine</p>
    <script type="text/javascript">
        var a = $('.resultado').html()
        
    </script>>
	</body>
</html>
