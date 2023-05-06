<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Python Scripts</title>
    <link href="./css/style.css" rel="stylesheet" type="text/css">
</head>

<body>

    <header>
        <h1>Python Scripts</h1>
        <img src="./static/images/control.png" alt="control panel" />
    </header>


    <main>
        
        <div class="first_container">

            <div class="first_part_container">
                <!--Primera Parte De Carpetas -->
                <div class="carpeta_container first_items">
                    <form method="GET" action="index.php">
                        <h2>CARPETAS</h2>
                        <div class='label_container'>
                        <label>
                            <input type="radio" name="carpetas" value="GOOGLE" checked>
                            Google ADS
                        </label>
                        <label>
                            <input type="radio" name="carpetas" value="RETORNOS">
                            RETORNOS ADS
                        </label>
                        </div>
                        <button>BUSCAR</button>
                    </form>
                </div>
                <div class="scripts_container first_items">
                    <form methond='GET' actions='index.php'>
                        <h2>SCRIPTS</h2>
                        <?php
                        if (isset($_GET['carpetas'])) {
                            $buscar = $_GET['carpetas'];
                            $ruta_general = "python C:\Users\carlo\OneDrive\Documentos\SCRIPTS\BUSCADOR\buscador.py ";
                            $ruta_buscador = $ruta_general . $buscar;
                            $resultado = exec($ruta_buscador);
                            $lista_carpetas_seleccionadas = explode(",", $resultado);
                            array_pop($lista_carpetas_seleccionadas);
                            $total = count($lista_carpetas_seleccionadas);
                            echo "<div class='label_container'>";
                            foreach ($lista_carpetas_seleccionadas as $carpetas) {
                                echo "<label>";
                                echo "<input type='radio' name='scripts' value='" . $carpetas . "-$buscar'>";
                                echo $carpetas;
                                echo "</label>";
                            }
                            echo "</div>
                <button>BUSCAR</button>";
                        }
                        ?>
                    </form>
                </div>
            </div>
            <div class="second_container">
                <div class="second_item">
                    <form methond='GET' actions='index.php'>
                        <?php
                        if (isset($_GET['scripts'])) {
                            $scripts = $_GET['scripts'];
                            $parametros = explode("-", $scripts);
                            $carpeta_seleccionada = $parametros[1];
                            $script_selecionados = $parametros[0];

                            echo "<h2>CARPETA SELECCIONADO $carpeta_seleccionada</h2>";
                            $ruta_general_2 = "python C:\Users\carlo\OneDrive\Documentos\SCRIPTS\BUSCADOR\buscador_scripts.py ";
                            $script_file = $ruta_general_2 . $scripts;
                            $resultado_scripts = exec($script_file);
                            $lista_carpetas_seleccionadas = explode(",", $resultado_scripts);
                            array_pop($lista_carpetas_seleccionadas);
                            $total = count($lista_carpetas_seleccionadas);
                            echo "<div class='label_container'>";
                            foreach ($lista_carpetas_seleccionadas as $scrpt) {
                                echo "<label>";
                                echo "<input type='radio' name='scripts_selected' value='" . $carpeta_seleccionada ."/".$script_selecionados."/".$scrpt."'>";
                                echo $scrpt;
                                echo "</label>";
                            }
                            echo "
                            </div>
                                <button>EJECUTAR</button>";
                        }
                        ?>
                    </form>
                </div>
            </div>
        </div>
        <div class="execution_container">
            <div class="execution_item">
                        <h2>CUADRO DE EJECUCIÓN </h2>

            <?php
        if (isset($_GET['scripts_selected'])) {
            $scripts_3 = $_GET['scripts_selected'];
            $url = "python C:/Users/carlo/OneDrive/Documentos/SCRIPTS/".$scripts_3;
            $resultado_scripts = exec($url);
            echo "<p class='script_resultado'>SCRIPT EJECUTADO: $resultado_scripts</p>";
        }
        ?>

            </div>

        </div>






    </main>








</body>

</html>