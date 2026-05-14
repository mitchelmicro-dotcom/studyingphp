<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Curso PHP</title>
        <!-- Importando Bootstrap para o estilo dos cards -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    </head>

    <body class="bg-light">

        <div class="container mt-5">
            <h2 class="mb-4">Notícias</h2>

            <?php
                // Array multidimensional com título e conteúdo (conforme image_799036.png)
                $registros = array(
                    array('titulo' => 'Título notícia 1', 'conteudo' => 'Conteúdo notícia 1...'),
                    array('titulo' => 'Título notícia 2', 'conteudo' => 'Conteúdo notícia 2...'),
                    array('titulo' => 'Título notícia 3', 'conteudo' => 'Conteúdo notícia 3...'),
                );

                $idx = 0;

                // O count() torna o código mais dinâmico que o "3" fixo
                while($idx < count($registros)){

                    echo '<div class="card mb-3 shadow-sm">';
                        // Cabeçalho do Card (parte azulada na imagem)
                        echo '<div class="card-header bg-primary text-white">';
                            echo $registros[$idx]['titulo'];
                        echo '</div>';

                        // Corpo do Card (conteúdo)
                        echo '<div class="card-body">';
                            echo '<p class="card-text">' . $registros[$idx]['conteudo'] . '</p>';
                        echo '</div>';
                    echo '</div>';

                    $idx++;
                }
            ?>
        </div>

    </body>
</html>