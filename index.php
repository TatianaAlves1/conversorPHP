<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <?php
        require 'vendor/autoload.php';

        $client = new GuzzleHttp\Client();
        $resposta = $client->request('GET','http://economia.awesomeapi.com.br/json/last/USD-BRL');
        echo "<br>-----<br>";
        echo $resposta->getStatusCode();
        echo "<br>-----<br>";
        $dados = json_decode($resposta->getBody());
        var_dump($dados);
        echo $dados->USDBRL->bid;
        
        
        
        

    ?>
</body>
</html>