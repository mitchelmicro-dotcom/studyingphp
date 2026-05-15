<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador Mega-Sena</title>

    <style>

        body{
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(135deg, #1d2671, #c33764);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container{
            background: white;
            padding: 40px;
            border-radius: 20px;
            text-align: center;
            width: 500px;
            box-shadow: 0px 10px 25px rgba(0,0,0,0.3);
        }

        h1{
            margin-bottom: 30px;
            color: #333;
        }

        .numeros{
            display: flex;
            justify-content: center;
            gap: 15px;
            flex-wrap: wrap;
        }

        .bola{
            width: 60px;
            height: 60px;
            background: #00a86b;
            color: white;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 22px;
            font-weight: bold;
            box-shadow: 0px 5px 10px rgba(0,0,0,0.2);
        }

        .btn{
            margin-top: 30px;
        }

        button{
            padding: 12px 25px;
            border: none;
            border-radius: 10px;
            background: #1d2671;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover{
            transform: scale(1.05);
            background: #2936a3;
        }

    </style>
</head>

<body>

    <div class="container">

        <h1>Sorteador Mega-Sena</h1>

        <div class="numeros">

            <?php

                $numeros_sorteados = array();

                while(count($numeros_sorteados) < 6){

                    $numero_aleatorio = rand(1,60);

                    if(!in_array($numero_aleatorio, $numeros_sorteados)){

                        $numeros_sorteados[] = $numero_aleatorio;

                    }

                }

                foreach($numeros_sorteados as $numero){

                    echo "<div class='bola'>$numero</div>";

                }

            ?>

        </div>

        <div class="btn">
            <form method="post">
                <button type="submit">
                    Sortear Novamente
                </button>
            </form>
        </div>

    </div>

</body>
</html>