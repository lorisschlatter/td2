<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bonustd2</title>
</head>
<body>
    <?php
    
        $firstnames = ['Steve','Jeff','Marck','Sundar'];
        $firstnames[2] = 'Mark';
        array_push($firstnames,'Bill');
        array_unshift($firstnames,'Julie');
        asort($firstnames);

        // print_r("Le premier prénom du tableau firstnames est $firstnames[0]");
        // print_r(count($firstnames));

        foreach ($firstnames as $name){
            echo $name;
        }

        $user1 = [
            'firstname' => 'Steve',
            'lastname' => 'Jobs',
            'email' => 'steve.jobs@apple.com'
        ];

        $user2 = [
            'firstname' => 'Jeff',
            'lastname' => 'Bezos',
            'email' => 'jeff.bezos@amazon.com'
        ];

        $user3 = [
            'firstname' => 'Mark',
            'lastname' => 'Zuckerberg',
            'email' => 'mark.zuckerberg@meta.com'
        ];

        $user4 = [
            'firstname' => 'Sundar',
            'lastname' => 'Pichai',
            'email' => 'sundar.pichai@google.com'
        ];

        $user5 = [
            'firstname' => 'Julie',
            'lastname' => 'Chapon',
            'email' => 'julie.chapon@yuka.com'
        ];

        $user6 = [
            'firstname' => 'Bill',
            'lastname' => 'Gates',
            'email' => 'bill.gates@microsoft.com'
        ];

        $users = [];

        array_push($users,$user1,$user2,$user3,$user4,$user5,$user6); 
        
        print_r("<br>L'email du patron de meta est ".$users[2]['email'].". Le patron de microsoft s'appelle ".$users[5]['firstname']." ".$users[5]['lastname'].
        ". Dans un monde si masculin, Yuka a été fondé en 2016, notamment par ".$users[4]['firstname']." ".$users[4]['lastname'].".");

    ?>
</body>
</html>