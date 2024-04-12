<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- estilos -->
    <link rel="stylesheet" type="text/css" href="./css/estilos.css">
    <title>Carta</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/9215a13914.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alegreya:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">

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
    exit('Error al abrir XML con los datos de la carta.');
}
?>
<!--Tabla de datos-->
<div class="container">
        <br>
        <h1 class="titulo"> LE BONNE PETIT RESTAURANT</h1>
      
        <!-- bucle entrantes y item -->
        <h2 class="titulo-seccion">Entrées</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre/Nom</th>
                    <th>Precio/Prix</th>
                    <th>Descripción/Description</th>
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
                                echo '<i class="fa-solid fa-wheat-awn-circle-exclamation"></i>';
                                break; 
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

 

    </table>

    <h2 class="titulo-seccion">Premières</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre/Nom</th>
                <th>Precio/Prix</th>
                <th>Descripción/Description</th>
            </tr>
        </thead>
     <tbody>
        <!-- bucle primero y item -->
        <?php
         foreach ($menu->plato as $plato) {
           if ($plato['tipo'] == 'primero') {
            echo '<tr>';
            echo '<td>' . $plato->nombre;

            
            foreach ($plato->caracteristicas->item as $item) {
                if ($item == 'Con gluten') {
                   
                    echo '<i class="fa-solid fa-wheat-awn-circle-exclamation"></i>';
                 
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
        
    
    </table>
     <br>
    <h2 class="titulo-seccion">Secondes</h2>
    <table class="table">
    <tbody>
        <!-- bucle segundo y item -->
        <?php
         foreach ($menu->plato as $plato) {
           if ($plato['tipo'] == 'segundo') {
            echo '<tr>';
            echo '<td>' . $plato->nombre;

           
            foreach ($plato->caracteristicas->item as $item) {
                if ($item == 'Con gluten') {
                   
                    echo '<i class="fa-solid fa-wheat-awn-circle-exclamation"></i>';
                 
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
    </table>
      <br>
    <h2 class="titulo-seccion">Desserts</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre/Nom</th>
                <th>Precio/Prix</th>
                <th>Descripción/Description</th>
            </tr>
        </thead>
    >
        <br>
        <!-- bucle postre -->
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

    <h2 class="titulo-seccion">Boissons</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre/Nom</th>
                <th>Precio/Prix</th>
                <th>Descripción/Description</th>
            </tr>
        </thead>
        <!-- bucle bebida -->
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
<!-- footer -->
<footer>
        *IVA incluido en todos los precios./ *IVA incluse dans tous les prix.
        <br>
        *Las etiquetas marcadas contienen gluten/ *Les étiquettes marquées contiennent du gluten.
    </footer>
</body>
</html>
<!-- Git commit- m " nombre"
Git push origin main -->