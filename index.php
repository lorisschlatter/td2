<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>td2</title>
</head>

<body>
    <?php 

    $name = 'loris';
    $name = ucfirst($name);

    $lastname = 'Schlatter';
    $lastname = strtoupper($lastname);

    $age = 21;

    $city = 'labruyere';
    $city = ucfirst($city);

    $introduce = "Bonjour, je m'appelle $name $lastname, j'ai $age ans et j'habite à $city";
    $introduce = ucwords($introduce);

    $notes = [15,13,8,10,17];
    $matieres = ["html/css","algorithmie","anglais","marketing","ui/ux"];

    echo "L'étudiant a eu une note de ".end($notes)." en ".end($matieres);

    $results = array_combine($matieres,$notes);

    $tempSwitchFirst = $results['algorithmie'];

    $results['algorithmie'] = $results['marketing'];
    $results['marketing'] = $tempSwitchFirst;

    $marks = [
        "étudiant1" => [1,2,3,4,5],
        "étudiant2" => [10,11,12,13,14],
        "étudiant3" => [15,16,17,18,19],
        "étudiant4" => [9,8,7,6,5],
    ];

    $count = 1;
    
    foreach ($marks as $etudiant => $notes) {
        echo "<br>Notes de $etudiant : <br>";
        foreach ($notes as $count => $note) {
            echo "Note ".($count+1)." : $note <br>";
        }
        echo "<br>";
    }
    

    $myType = "Je suis une chaîne de caractères";

    $text = <<<TEXT
    Croisant les bras, et tous s'assirent autour du foyer, rougie, rendait violâtre.
    Avoue que je suis simplement ici pour tenir compagnie au tien et pour t'imaginer
    que tu souffres par ta faute. Élevez un étendard sur une montagne, et je serais
    dans un extrême embarras. Voir, si touchés que je fusse un grand misérable!
    Facile, il devait trouver le cardinal seul, sans interlocuteur, un drame invisible et
    inconnu aux autres spectateurs que nous jouions, du pauvre pygmée qui s'en
    allait. 
    TEXT
    ?>

    <p><?= $introduce ?></p>
    <p><?= $text ?></p>
</body>

</html>