<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>simple php syntax</title>
</head>
<body>
    <?php
        //Task 1
        $name = "Miguel Mañabo";
        $age = 21;
        $address = "Rosario, Cavite";
        $hobbies = "Reading, Gaming and Coding";
        $pet_peeve = "not being able to respond in GCs for important announcements";

        echo "Hello, I am <b>$name</b> <br> <b>$age</b> Years old<br> I live at <b>$address</b> <br> Hobbies I do are <b>$hobbies</b> <br>  and my biggest pet peeve is <b>$pet_peeve</b> <br><br>";

        //Task 2
        $name = "Miguel Mañabo";
        $age = 21;
        $address = "Rosario, Cavite";
        //$hobbies = "Reading, Gaming and Coding";
        //$pet_peeve = "not being able to respond in GCs for important announcements";

        //Task 3
        const NAME = "John Miguel Mañabo";
        const AGE = 21;
        const ADDRESS = "Somehere in Cavite";
        const HOBBIES = "Coding Reading and Gaming";
        const PET_PEEVE = "not being able to respond in GCs for IMPORTANT announcements";

        echo "Hello, I am <b>" . NAME . "</b> <br> <b> " . AGE ."</b> Years old<br> I live at <b> " . ADDRESS . " </b> <br> Hobbies I do are <b>" . HOBBIES . "</b> <br>  and my biggest pet peeve is <b> " . PET_PEEVE . " </b> <br><br>";

        //Task 4
        function dump($data) {
            echo var_dump($data) . "<br>";
        }
        echo dump(NAME) . dump(AGE) . dump(ADDRESS) . dump(HOBBIES) . dump(PET_PEEVE);

        //Task 5
        /* It is my pet_peeve because for me, responses in a group chat is very imporpant, since you can only see that they have seen your message and it is actually the purpose of having a GC inside a school, sometimes, you cannot have the assurance that they get the point of your announcement of just saw my name then turned off the phone without actually reading, so a simple heart react message gives a relief to me that they have understood it at some point.
        */
    ?>
</body>
</html>
