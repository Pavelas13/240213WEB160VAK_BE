<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //  Užrašyk klasę, kuri talpintų žmogaus vardą, pavardę ir metodą pasisveikinimui.
//  - Sukurk du žmones su skirtingais duomenimis.
//  - Išvesk šiuos duomenis naršyklėje.
    class Person
    {
        public $vardas;
        public $pavarde;
        public function __construct(
            $vardas,
            $pavarde,
        ) {
            $this->vardas = $vardas;
            $this->pavarde = $pavarde;
        }
        public function pasisveikinimas()
        {
            echo 'Sveiki ' . $this->vardas . '!';
        }
    }
    $person1 = new Person('Jonas', 'Jonaitis');
    $person2 = new Person('Petras', 'Petraitis');
    $person1->pasisveikinimas();
    echo '<br>';
    echo $person1->vardas . ' ' . $person1->pavarde;
    echo '<br>';
    $person2->pasisveikinimas();
    echo '<br>';
    echo $person2->vardas . ' ' . $person2->pavarde;
    ?>
</body>
</html>