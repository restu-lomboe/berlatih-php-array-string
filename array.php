<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
</head>
<body>
    <h1>Berlatih Array</h1>
        
    <?php 
        echo "<h3> Soal 1 </h3>";
        /* 
            SOAL NO 1
            Kelompokkan nama-nama di bawah ini ke dalam Array.
            Kids : "Mike", "Dustin", "Will", "Lucas", "Max", "Eleven" 
            Adults: "Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"
        */
        $kids = ["Mike", "Dustin", "Will", "Lucas", "Max", "Eleven"]; // Lengkapi di sini
        // print_r($kids);
        // echo "<br>";
        echo "Array Kids : ";
        for($i=0;$i<count($kids);$i++){
            echo $kids[$i].", ";
        }
        echo "<br>";
        echo "Array Adults : ";
        $adults = ["Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"]; 
        // print_r($adults);
        for($i=0;$i<count($adults);$i++){
            echo $adults[$i].", ";
        }


        echo "<h3> Soal 2</h3>";
        /* 
            SOAL NO 2
            Tunjukkan panjang Array di Soal No 1 dan tampilkan isi dari masing-masing Array.
        */
        $kid = count($kids);
        echo "Cast Stranger Things: ";
        echo "<br>";
        echo "Total Kids: $kid panjang array " ; // Berapa panjang array kids
        echo "<br>";
        echo "<ol>"; 
        echo "<li> $kids[0] </li>";
        echo "<li> $kids[1] </li>";
        echo "<li> $kids[2] </li>";
        echo "<li> $kids[3] </li>";
        echo "<li> $kids[4] </li>";
        echo "<li> $kids[5] </li>";
        // Lanjutkan

        echo "</ol>";
        
        $adult = count($adults);
        echo "Total Adults: $adult panjang array " ;// Berapa panjang array adults
        echo "<br>";
        echo "<ol>";
        echo "<li> $adults[0] </li>";
        echo "<li> $adults[1] </li>";
        echo "<li> $adults[2] </li>";
        echo "<li> $adults[3] </li>";
        echo "<li> $adults[4] </li>";
        // Lanjutkan

        echo "</ol>";

        /*
            SOAL No 3
            Susun data-data berikut ke dalam bentuk Asosiatif Array (Array Multidimensi)
            
            Name: "Will Byers"
            Age: 12,
            Aliases: "Will the Wise"
            Status: "Alive"

            Name: "Mike Wheeler"
            Age: 12,
            Aliases: "Dungeon Master"
            Status: "Alive"

            Name: "Jim Hopper"
            Age: 43,
            Aliases: "Chief Hopper"
            Status: "Deceased"

            Name: "Eleven"
            Age: 12,
            Aliases: "El"
            Status: "Alive"
            
        */
        echo "<h3> Soal 3</h3>";
        echo "Asosiatif Array (Array Multidimensi) <br><br>";

        $nama = [
            [
                "Name" => "Will Byers", 
                "Age" => "12", 
                "Aliases" => "Will the Wise", 
                "Status" => "Alive" 
            ],
            [
                "Name" => "Mike Wheeler", 
                "Age" => "12", 
                "Aliases" => "Dungeon Master", 
                "Status" => "Alive" 
            ],
            [
                "Name" => "Jim Hopper", 
                "Age" => "43", 
                "Aliases" => "Chief Hopper", 
                "Status" => "Deceased" 
            ],
            [
                "Name" => "Eleven", 
                "Age" => "12", 
                "Aliases" => "El", 
                "Status" => "Alive" 
            ],
        ];

        foreach ($nama as $name) {
            echo "<label>"."Nama :".$name['Name']."<br>"."</label>";
            echo "<label>"."Age :".$name['Age']."<br>"."</label>";
            echo "<label>"."Aliases :".$name['Aliases']."<br>"."</label>";
            echo "<label>"."Status :".$name['Status']."<br><br>"."</label>";
        }
    ?>
</body>
</html>