<?php

//// Snack 1

$teams = [
    [
        'squadraCasa' => 'Cagliari',
        'squadraOspite' => 'Sassari',
        'punteggioCasa' => 3,
        'punteggioOspite' => 23,
    ],
    [
        'squadraCasa' => 'Lakers',
        'squadraOspite' => 'Milano',
        'punteggioCasa' => 6,
        'punteggioOspite' => 14,
    ],
    [
        'squadraCasa' => 'Olimpia',
        'squadraOspite' => 'Toronto',
        'punteggioCasa' => 1,
        'punteggioOspite' => 34,
    ]
];

//// Snack 2

$name = $_GET['name'];
$mail = $_GET['mail'];
$age= $_GET['age'];
if(empty($name) && empty($mail) && empty($age)){
    $messaggio= 'Inserisci Credenziali';
}elseif (strlen($name) > 3  && strpos($mail,'@') !== false && strpos($mail,'.') !== false && is_numeric($age)){
    $messaggio='Accesso Consentito!';
}else{
    $messaggio='Accesso Negato!';
};

//// Snack 3


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

//// Snack 4

$numberArray=[];
while(count($numberArray) < 15){
    $number = rand(1,30);
    if(!in_array($number,$numberArray)){
        $numberArray[] = $number;
    }
}

//// Snack 5

$paragraph="MAMP is a free, local server environment that can be installed under macOS and Windows with just a few clicks. MAMP provides them with all the tools they need to run WordPress on their desktop PC for testing or development purposes, for example. You can even easily test your projects on mobile devices. It does not matter whether you prefer the web server Apache or Nginx in addition to MySQL as database server, or whether you want to work with PHP, Python, Perl or Ruby. MAMP PRO 5 contains a wealth of new features and improvements to make your work as a web developer much easier and faster: Create snapshots, use the new PHP 8, benefit from the vastly improved editor, use the new hierarchical host list, group hosts, work withe the new Redis server. These are just some of the new great features in MAMP PRO 5. These are just some of the new features in MAMP PRO 5. With MAMP PRO you can create as many hosts as you want. Each host can be configured individually and thus adapted exactly to the target system. For example, choose if you need an Apache or NginX web server, which PHP version is needed, or if and which caching system is used. This allows you to work on your different projects in parallel without losing sight of the big picture."
;
 $paragraphPart=explode(',', $paragraph);

 //// Snack 6

 $db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

//// Snack 7

$classe=[
    [
        'nome'=>'Francesco',
        'cognome'=>'Ferrari',
        'voti'=>[8,6,7,6,7,5,]
    ],
    [
        'nome'=>'Dario',
        'cognome'=>'Longo',
        'voti'=>[6,7,6,5,6,6,]
    ],
    [
        'nome'=>'Cristoforo',
        'cognome'=>'Colombo',
        'voti'=>[8,9,9,7,6,10,]
    ],
    [
        'nome'=>'Jack',
        'cognome'=>'Russo',
        'voti'=>[4,3,6,7,2,5,]
    ],
];


?>


<!---------------------------------------------- Html ---------------------------------------------->

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

        /* se si vuole aggiungere altro css è preferibile creare un file a parte */

    </style>
    
</head>
<body>

    <section id="snack1">
        
        <h1> Snack 1 </h1>

        <!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

        <ul>
        <?php for ($i = 0; $i < count($teams); $i++){
        echo "<li><strong>{$teams[$i]["squadraCasa"]}</strong> - <strong>{$teams[$i]['squadraOspite']}</strong> | {$teams[$i]['punteggioCasa']}-{$teams[$i]['punteggioOspite']}</li>";
        } ?>
    </ul>

    </section>

    <section id="snack2">
        
        <h1> Snack 2 </h1>

        <!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

        <p><?php echo $messaggio ?></p>
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


        <?php var_dump($numberArray) ?>

    </section>

    <section id="snack5">
        
        <h1> Snack 5 </h1>

        <!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

        <p><?php var_dump($paragraphPart)?></p>




    </section>

    <section id="snack6">
        
        <h1> Snack 6 </h1>

        <!-- Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.-->

      
            <?php foreach($db as $k => $v){?>
                <?php echo $k?>
                <div>
                    <?php foreach($v as $value){?>

                        <span class="<?php 
                            if($k === 'teachers'){
                                echo 'grey';
                            }else{
                                echo 'green';
                            };
                            ?>">

                        <p><?php echo $value['name'];?> <?php echo $value['lastname'];?></p>
                        
                    <?php }?>
                </div>
            <?php } ?>
        

    </section>

    <section id="snack7">
        
        <h1> Snack 7 </h1>

        <!-- Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.-->

        <ul>
            <?php for($i = 0; $i < count($classe); $i++){?>
            <li>
                <span><?php echo $classe[$i]['nome'].' '.$classe[$i]['cognome'].' <br> Media dei voti: '.ceil(array_sum($classe[$i]['voti']) / count($classe[$i]['voti']))?></span>
            </li>       
           <?php } ?>
        </ul>

    </section>



    
</body>
</html>