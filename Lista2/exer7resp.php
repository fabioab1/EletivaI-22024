<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resposta do Exercício 7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

    <main class="container">
        
        <h1>Resposta do Exercício 7</h1>
        <?php
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                try{
                    $fahrenheit = (float) $_POST['fahrenheit'] ?? 0;
                    $celsius = ($fahrenheit - 32) * 5/9;

                    echo $fahrenheit." ºF para grau Celsius é: ".number_format($celsius, 1, ",", ".")." ºC.";
                } catch (Exception $e) {
                    echo 'Erro! '.$e->getMessage();
                }
            } else{
                echo "<h3>Ops! Algo deu errado...</h3><p>Tente novamente.</p>";
            }


        ?>

    </main>  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>