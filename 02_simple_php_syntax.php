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
        $hobbies = ["Reading" , "Coding", "Gaming"];
        $pet_peeve = "not being able to respond in GCs for important announcements, people who are with anger issues, those who make small things big - instead of fixing it, those who are insensitive about their surrouding";

        echo "Hello, I am <b>$name</b> <br> 
        <b>$age</b> Years old <br> 
        I live at <b>$address</b> <br> 
        Hobbies I do are <b>$hobbies[0]</b>, <b>$hobbies[1]</b> and <b>$hobbies[2]</b> <br> 
        And my biggest pet peeve is <b>$pet_peeve</b> <br><br>";

        //Task 2
        $name = "Miguel Mañabo";
        $age = 21;
        $address = "Rosario, Cavite";
        //$hobbies = "Reading, Gaming and Coding";
        //$pet_peeve = "not being able to respond in GCs for important announcements, people who are with anger issues, those who make small things big - instead of fixing it, those who are insensitive about their surrouding";

        //Task 3
        define('NAME', "John Miguel Mañabo");
        define('AGE', 21);
        define('ADDRESS', "Somehere in Cavite");
        define('HOBBIES', ["Reading", "Coding", "Gaming"]);
        define('PET_PEEVE', "not being able to respond in GCs for <b>IMPORTANT</b> announcements, people who are with <b>ANGER ISSUES</b> that do not find a way to control it, those who make <b>SMALL</b> things <b>BIG</b> - instead of fixing it, those who are <b>INSENSITIVE</b> about their surroudings");

        echo "Hello, I am <b>" . NAME . "</b> 
        <br> <b> " . AGE ."</b> Years old <br>
        I live at <b> " . ADDRESS . " </b> <br>
        Hobbies I do are <b>" . HOBBIES[0] . "</b>, <b>" . HOBBIES[1] . "</b> and <b>" . HOBBIES[2] . "</b><br>
        And my biggest pet peeve is <b> " . PET_PEEVE . " </b> <br><br>";

        //Task 4
        function dump($data) {
            echo var_dump($data) . "<br>";
        }
        echo dump(NAME) . dump(AGE) . dump(ADDRESS) . dump(HOBBIES) . dump(PET_PEEVE);

        //Task 5
        /* It is my pet_peeve because for me, responses in a group chat is very imporpant, 
        since you can only see that they have seen your message and it is actually the purpose of having a GC 
        inside a school, sometimes, you cannot have the assurance that they get the point of your announcement of just 
        saw my name then turned off the phone without actually reading, so a simple heart react message gives a relief to me 
        that they have understood it at some point. I mean, you can control your anger issues right?, you can make yourself calm 
        even if you are angry with something, I am not invalidating emotion but please take it into place because not all the places, 
        you can apply your anger into simple things, like opening and closing doors, people who makes issues with something that don't
         make sense, although we talk about issues but the purpose is to address the problem, the feelings and emotions left and finds 
         a solution how to prevent the issue or the thing from happening again, instead of backstabbing someone on their back, people who 
         are insenstive about the things around them, they don't care if they break the aircon, or explode the ink of the pen, or have some 
         of respect of the teacher at front and slamming the door just because you are experiencing something?, think professional, we are at
          an institute that teaches values and having some respect like not banging the door, not watchful of the words that come out of their
           mouth or their fingers in chat, those who "Suggest" Ideas but the tone of their chat is forcing us to choose their suggestions but
            can't commit.*/
    ?>
</body>
</html>
