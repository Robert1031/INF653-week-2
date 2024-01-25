<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 2 assignment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #008080;
            color: #800080;
            margin: 20px;
        }

        .container {
            max-width: 800px; 
            padding: 20px;
            background-color: #000000;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php
        //This statement gets the first name from the url
        $firstname=filter_input(INPUT_GET, 'firstname', FILTER_SANITIZE_SPECIAL_CHARS);

        //This statement gets the last name from the url
        $lastname=filter_input(INPUT_GET, 'lastname', FILTER_SANITIZE_SPECIAL_CHARS);

        //This statement gets the age from the url
        $age=filter_input(INPUT_GET, 'age', FILTER_SANITIZE_NUMBER_INT);

        //this statement print the info for #1 
        echo "Hello, my name is $firstname $lastname.<br/>";

        //age condition

        //if older or equal to 18
        if($age>=18)
        {
        echo "I am $age years old and I am old enough to vote in the United States.<br/>";
        }
        //younger than 18
        else
        {
        echo "I am $age years old and I am not old enough to vote in the United States.<br/>";
        }
        //age in days
        $numofdays = $age  * 365;
        //print the days
        echo "Number of days from the age is $numofdays <br/>";

        //current date
        $date = date('Y-m-d H:i:s');
        echo $date;
        ?> 
    </div> 
</body>
</html>
