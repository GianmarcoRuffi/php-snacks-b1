<?php

$teams = [
    [
        'squadraCasa' => 'Cagliari',
        'squadraOspite' => 'Sassari',
        'punteggioCasa' => 5,
        'punteggioOspite' => 10,
    ],
    [
        'squadraCasa' => 'Padova',
        'squadraOspite' => 'Milano',
        'punteggioCasa' => 6,
        'punteggioOspite' => 30,
    ],
    [
        'squadraCasa' => 'torino',
        'squadraOspite' => 'atalanta',
        'punteggioCasa' => 5,
        'punteggioOspite' => 10,
    ]
];


$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack di gruppo</title>

    <style>

        /* stile per lo snack 6 */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .grey, .green {
            padding: 40px;
            float: left;
            width: 50%;
        }
        .grey {
            background: grey;
        }
        .green {
            background: green;
        }

        /* se si vuole aggiungere altro css è preferibile creare un file apparte */

    </style>
    
</head>
<body>

    <section id="snack1">
        
        <h1> Snack 1 </h1>

        <ul>
        <?php for ($i = 0; $i < count($teams); $i++){
        echo "<li><strong>{$teams[$i]["squadraCasa"]}</strong> - <strong>{$teams[$i]['squadraOspite']}</strong> | {$teams[$i]['punteggioCasa']}-{$teams[$i]['punteggioOspite']}</li>";
        } ?>
    </ul>

    </section>

    <section id="snack2">
        
        <h1> Snack 2 </h1>

        <?php ?>
    </ul>

    </section>

    <section id="snack3">
        
        <h1> Snack 3 </h1>

        <!-- Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.-->


        <ul>
            <?php foreach($posts as $k => $v){?>
                <?php echo $k?>
                <li>
                    <?php foreach($v as $value){?>
                        <p><?php echo $value['title'];?></p>
                        <p><?php echo $value['author'];?></p>
                        <p><?php echo $value['text'];?></p>
                    <?php }?>
                </li>
            <?php } ?>
        </ul>


    </section>

    <section id="snack4">
        
        <h1> Snack 4 </h1>

        <!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

    </section>

    <section id="snack5">
        
        <h1> Snack 5 </h1>

        <!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

    </section>

    <section id="snack6">
        
        <h1> Snack 6 </h1>

        <!-- Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.-->

    </section>

    <section id="snack7">
        
        <h1> Snack 7 </h1>

        <!-- Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.-->

    </section>



    
</body>
</html>