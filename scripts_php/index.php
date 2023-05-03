<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Python Scripts</title>
</head>

<body>

    <header>
        <h1>Python Scripts</h1>
    </header>

    <main>


   
        <form method="GET" action="index.php">
        <h2>CARPETAS</h2>
            <label>
                <input type="radio" name="carpetas" value="GOOGLE" checked>
                Google ADS
            </label>
            <label>
                <input type="radio" name="carpetas" value="FACEBOOK">
                FACEBOOK ADS
            </label>
            <label>
                <input type="radio" name="carpetas" value="RETORNOS">
                RETORNOS ADS
            </label>
            <button>BUSCAR</button>
        </form>



        <?php
        if (isset($_GET['carpetas'])) {
            $buscar = $_GET['carpetas'];

        $ruta_general = "python C:\Users\carlo\OneDrive\Documentos\SCRIPTS\BUSCADOR\buscador.py ";
        $ruta_buscador = $ruta_general . $buscar;
        $resultado = exec($ruta_buscador);
        $lista_carpetas_seleccionadas = explode(",", $resultado);
        array_pop($lista_carpetas_seleccionadas);
        $total = count($lista_carpetas_seleccionadas);
        echo "<form methond='GET' actions='index.php'
                <h2>SCRIPTS</h2>
                <h3>TOTAL DE CARPETAS $total</h3>
                ";
        foreach ($lista_carpetas_seleccionadas as $carpetas) {
            echo "<label>";
            echo "<input type='radio' name='scripts' value='" . $carpetas . ";$buscar'>";
            echo $carpetas;
            echo "</label>";
        }
        echo "
        <button>BUSCAR</button>
        </form>";
        }
        ?>

        <?php 
        if (isset($_GET['scripts'])) {
            $scripts = $_GET['scripts'];
        }   
            $ruta_general = "python C:/Users/carlo/OneDrive/Documentos/SCRIPTS/BUSCADOR/buscador_scripts.py ";
            $ruta_buscador = $ruta_general . $scripts;
            $resultado = exec($ruta_buscador);
            $lista_carpetas_seleccionadas = explode(",", $resultado);
            array_pop($lista_carpetas_seleccionadas);


        ?>



    </main>








</body>

</html>