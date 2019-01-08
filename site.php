<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    
    <?php
        echo("Hello, world!");
        echo "<hr>";
        echo "<h1>Hello, again</h1>";

        $firstquarter = array("Jan", "Feb", "Mar");
        print_r($firstquarter);

        echo "<br>";

        for($x=0; $x<count($firstquarter); $x++) {
            echo "$firstquarter[$x]<br>";
        }


        echo "<hr>";


        class Student {
            var $name;
            var $gpa;

            function __construct($name, $gpa){
                $this->gpa=$gpa;
                $this->name=$name;
            }

            function hasHonors(){
                if ($this->gpa >= 3.5) {
                    return "true";
                }
                return "false";
            }
        }

        $stu1 = new Student("Jim", 3.0);
        $stu2 = new Student("Pam", 4.0);

        echo $stu1->hasHonors();
        echo "<br>";
        echo $stu2->hasHonors();


        echo "<hr>";


        class Movie {
            public $title;
            private $rating;

            function __construct($title, $rating){
                $this->title = $title;
                $this->setRating($rating);
            }

            function getRating(){
                return $this->rating;
            }

            function setRating($rating){
                if ($rating=="G"||$rating=="PG"||$rating=="PG-13"||$rating=="R"){
                    $this->rating = $rating;
                } else {
                    $this->rating = "NR";
                }
            }
        }

        $avengers = new Movie("Avengers", "PG-13");

        echo $avengers->setRating("PG-13");
        echo $avengers->getRating();


        echo "<hr>";


        class Chef {
            function makeRice(){
                echo "The chef makes rice.";
            }

            function makeBroccoli(){
                echo "The chef makes broccoli.";
            }

            function makeSpecial(){
                echo "The chef makes his grandma's vegan eggrolls!";
            }
        }

        class ItalianChef extends Chef {
            function makePasta(){
                echo "The chef makes pasta.";
            }
            function makeSpecial(){
                echo "The chef makes vegan Italian sausage!";
            }
        }

        $chef1 = new ItalianChef();

        $chef1->makeRice();
        echo "<br>";
        $chef1->makePasta();

        $chef2 = new Chef();

        echo "<br>";

        $chef1->makeSpecial();
        echo "<br>";
        $chef2->makeSpecial();


       

    ?>

</body>
</html>