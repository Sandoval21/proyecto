<?php include('conexionDB.php');
$query = "SELECT * FROM clientes";
$query = pg_query($query);
while($row= pg_fetch_array($query,NULL,PGSQL_ASSOC)){
	echo "Codigo:" .$row['cod_cli']."<br/>";
	echo "Nombre: ".$row['nomb_cli']."<br/>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sitio de Viajes</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header>
    <nav>
      <a href="#">Viajes</a>
      <div class="dropdown">
        <a href="#">Información</a>
        <div class="dropdown-menu">
          <a href="conexionDB.php">Tarifas</a>
          <a href="#">Destinos</a>
          <a href="#">Servicios</a>
        </div>
      </div>
      <a href="#">Atención al usuario</a>
      <a href="#">La Terminal</a>
    </nav>
    <div class="search-form">
      <h2>Compra tu tiquete aquí</h2>
      <form>
        <input type="text" placeholder="Origen">
        <input type="text" placeholder="Destino">
        <input type="date" placeholder="Fecha de Ida">
        <input type="date" placeholder="Fecha de Vuelta (Opción)">
        <button type="submit">Buscar</button>
      </form>
    </div>
  </header>

  <section class="features">
    <div class="feature">
      <div class="image-container">
        <img src="/imagenes/infoviajero.png" alt="Icono 1">
        <h3>Información al Viajero</h3>
      </div>
    </div>
    <div class="feature">
      <div class="image-container">
        <img src="/imagenes/pqr.png" alt="Icono 2">
        <h3>PQRS</h3>
      </div>
    </div>
    <div class="feature">
      <div class="image-container">
        <img src="/imagenes/salud.png" alt="Icono 3">
        <h3>Seguridad y Salud</h3>
      </div>
    </div>
  </section>

  <footer>
    <p>&copy; 2023 Sitio de Viajes. Todos los derechos reservados.</p>
  </footer>

</body>
</html>
