<html>
	<head>
		<meta charset="utf-8" />
		<title>Curso PHP</title>
	</head>

	<body>

        <?php
            $registros = array('Título noticia 1', 'Título noticia 2', 'Título noticia 3');

            $idx = 0;
            while($idx <3 ){

                echo $registros[$idx];
                echo '
                
                    <br/><hr/><br/>
                        <div class="card">
                            <div class="card-body">
                                This is some text within a card body.
                            </div>
                        </div>;
                        ';
                $idx++;

            }
            
            
            
        ?>


        
		
    </body>

</hml>
