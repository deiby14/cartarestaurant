<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./css/estilos.css">
    <title>Carta</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
    <header>
    <header class="flex">
        
    </header>
    </header>
<?php
if (file_exists('./xml/carta.xml')) {
    $menu = simplexml_load_file('./xml/carta.xml');
} else {
    exit('Error abriendo archivo XML con los datos de la carta.');
}
?>
<!--Tabla de datos-->
<div class="container">
    <br>
    <h1 class="titulo">CARTA DE LE BONNE PETIT RESTAURANT</h1>
  
    <h2 class="titulo-seccion">Entrantes</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Descripción</th>
            </tr>
        </thead>

        <tbody>
    <?php
    foreach ($menu->plato as $plato) {
        if ($plato['tipo'] == 'entrante') {
            echo '<tr>';
            echo '<td>' . $plato->nombre;

            // Verifica si el plato tiene la característica "con gluten"
            foreach ($plato->caracteristicas->item as $item) {
                if ($item == 'Con gluten') {
                    // Muestra la imagen de gluten
                    echo '<img src="imagenes/congluten.jpg" alt="Con gluten" style="width: 20px; height: 20px;">';
                    break; // Sal del bucle una vez que se haya encontrado la característica
                }
            }
            
            echo '</td>';
            echo '<td>' . $plato->precio . '</td>';
            echo '<td>' . $plato->descripcion . '</td>';
            echo '</tr>';
        }
    }
    ?>
</tbody>
<tbody>
 

        <tbody>
            <?php
            foreach ($menu->plato as $plato) {
                if ($plato['tipo'] == 'entrante') {
                    echo '<tr>';
                    echo '<td>' . $plato->nombre . '</td>';
                    echo '<td>' . $plato->precio . '</td>';
                    echo '<td>' . $plato->descripcion . '</td>';
                    echo '</tr>';
                }
            }
            ?>
        </tbody>
    </table>

    <h2 class="titulo-seccion">Primeros</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Descripción</th>
            </tr>
        </thead>
     <tbody>
        <?php
         foreach ($menu->plato as $plato) {
           if ($plato['tipo'] == 'primero') {
            echo '<tr>';
            echo '<td>' . $plato->nombre;

            // Verifica si el plato tiene la característica "con gluten"
            foreach ($plato->caracteristicas->item as $item) {
                if ($item == 'Con gluten') {
                    // Muestra la imagen de gluten
                    echo '<img src="imagenes/congluten.jpg" alt="Con gluten" style="width: 20px; height: 20px;">';
                    break; // Sal del bucle una vez que se haya encontrado la característica
                }
            }
            
            echo '</td>';
            echo '<td>' . $plato->precio . '</td>';
            echo '<td>' . $plato->descripcion . '</td>';
            echo '</tr>';
        }
    }
    ?>
</tbody>
        <br>
        <tbody>
            <?php
            foreach ($menu->plato as $plato) {
                if ($plato['tipo'] == 'primero') {
                    echo '<tr>';
                    echo '<td>' . $plato->nombre . '</td>';
                    echo '<td>' . $plato->precio . '</td>';
                    echo '<td>' . $plato->descripcion . '</td>';
                    echo '</tr>';
                }
            }
            ?>
        </tbody>
    
    </table>
     <br>
    <h2 class="titulo-seccion">Segundos</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Descripción</th>
            </tr>
        </thead>
        <tbody>
        <?php
    foreach ($menu->plato as $plato) {
        if ($plato['tipo'] == 'segundo') {
            echo '<tr>';
            echo '<td>' . $plato->nombre;

            // Verifica si el plato tiene la característica "con gluten"
            foreach ($plato->caracteristicas->item as $item) {
                if ($item == 'Con gluten') {
                    // Muestra la imagen de gluten
                    echo '<img src="imagenes/congluten.jpg" alt="Con gluten" style="width: 20px; height: 20px;">';
                    break; // Sal del bucle una vez que se haya encontrado la característica
                }
            }
            
            echo '</td>';
            echo '<td>' . $plato->precio . '</td>';
            echo '<td>' . $plato->descripcion . '</td>';
            echo '</tr>';
        }
    }
    ?>
</tbody>
        <br>
        <tbody>
            <?php
            foreach ($menu->plato as $plato) {
                if ($plato['tipo'] == 'segundo') {
                    echo '<tr>';
                    echo '<td>' . $plato->nombre . '</td>';
                    echo '<td>' . $plato->precio . '</td>';
                    echo '<td>' . $plato->descripcion . '</td>';
                    echo '</tr>';
                }
            }
            ?>
        </tbody>
    </table>
      <br>
    <h2 class="titulo-seccion">Postres</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Descripción</th>
            </tr>
        </thead>
        <tbody>
        <?php
    foreach ($menu->plato as $plato) {
        if ($plato['tipo'] == 'postre') {
            echo '<tr>';
            echo '<td>' . $plato->nombre;

            // Verifica si el plato tiene la característica "con gluten"
            foreach ($plato->caracteristicas->item as $item) {
                if ($item == 'Con gluten') {
                    // Muestra la imagen de gluten
                    echo '<img src="imagenes/congluten.jpg" alt="Con gluten" style="width: 20px; height: 20px;">';
                    break; // Sal del bucle una vez que se haya encontrado la característica
                }
            }
            
            echo '</td>';
            echo '<td>' . $plato->precio . '</td>';
            echo '<td>' . $plato->descripcion . '</td>';
            echo '</tr>';
        }
    }
    ?>
</tbody>
        <br>
        <tbody>
            <?php
            foreach ($menu->plato as $plato) {
                if ($plato['tipo'] == 'postre') {
                    echo '<tr>';
                    echo '<td>' . $plato->nombre . '</td>';
                    echo '<td>' . $plato->precio . '</td>';
                    echo '<td>' . $plato->descripcion . '</td>';
                    echo '</tr>';
                }
            }
            ?>
        </tbody>
    </table>
    <br>

    <h2 class="titulo-seccion">Bebidas</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Descripción</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($menu->plato as $plato) {
                if ($plato['tipo'] == 'bebida') {
                    echo '<tr>';
                    echo '<td>' . $plato->nombre . '</td>';
                    echo '<td>' . $plato->precio . '</td>';
                    echo '<td>' . $plato->descripcion . '</td>';
                    echo '</tr>';
                }
            }
            ?>
        </tbody>
    </table>
    
 
</tbody>

</div>
<footer>
        *IVA incluido en todos los precios.
    </footer>
</body>
</html>
<!-- Git commit- m " nombre"
Git push origin main -->