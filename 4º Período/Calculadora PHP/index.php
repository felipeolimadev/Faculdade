<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>IMC</title>
</head>

<body>
    <div class="formulario">
        <form method="post" action="index.php" class="form-horizontal">
            <fieldset>
                <!-- Formulário -->
                <legend>Calculadora de IMC</legend>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="peso">Peso</label>
                    <div class="col-md-4">
                        <input id="peso" name="peso" placeholder="Peso" class="form-control input-md" required="" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="altura">Altura</label>
                    <div class="col-md-4">
                        <input id="altura" name="altura" placeholder="Altura" class="form-control input-md" required="" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="sexo">Sexo</label>
                    <div class="col-md-4">
                        <select id="sexo" name="sexo" class="form-control">
                            <option value="masculino">Masculino</option>
                            <option value="feminino">Feminino</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-4">
                        <input class="btn btn-primary" type=submit value="Calcular">

                    </div>
                </div>
            </fieldset>
        </form>
        <?php
        if(isset($_POST["peso"])):        
            $peso   = $_POST["peso"];
            $altura = $_POST["altura"];
            $sexo   = $_POST["sexo"];

            $imc = $peso / ($altura * $altura);

            if($imc < 17):
            echo "<h1>Muito abaixo do peso</h1>";
            echo "<h2>".$imc."</h2>";

            elseif($imc > 17 and $imc < 18.49 ):
            echo "<h1>Abaixo do peso</h1>";
            echo "<h2>".$imc."</h2>";

            elseif($imc > 18.5 and $imc < 24.99 ):
            echo "<h1>Peso normal</h1>";
            echo "<h2>".$imc."</h2>";

            elseif($imc > 25 and $imc < 29.99 ):
            echo "<h1>Acima do peso</h1>";
            echo "<h2>".$imc."</h2>";

            elseif($imc > 30 and $imc < 34.99 ):
            echo "<h1>Obesidade I</h1>";
            echo "<h2>".$imc."</h2>";

            elseif($imc > 35 and $imc < 39.99 ):
            echo "<h1>Obesidade II (severa)</h1>";
            echo "<h2>".$imc."</h2>";

            elseif($imc > 40 ):
            echo "<h1>Obesidade III (mórbida)</h1>";
            echo "<h2>".$imc."</h2>";
            endif;
        endif;
        ?>
    </div>









    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
