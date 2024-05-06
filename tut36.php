<?php
$marks = [
    "Ansari" => [
        "Math" => 85, 
        "Hindi" =>76,
        "Urdu" => 79
        ],
    
    "White" => [
        "Math" => 65,
        "Hindi" =>60,
        "Urdu" => 86
        ],
    
    "Zeeshan" => [
        "Math" => 90,
        "Hindi" =>77,
        "Urdu" => 81
        ]
    ];

    echo "<pre>";
    print_r($marks);
    echo "</pre>";
    

    // foreach ($marks as $key => $value1) {
    //     echo $key ;
    //     foreach($value1 as $value2){
    //         echo $value2 . " " ;
    //     };
    //     echo "</br>";
    // };

    echo "<table border='2px' cellpadding='5px' cellspacing='0px'>;

    <tr>
<th> Student Name </th>
<th> Math </th>
<th> Hindi </th>
<th> Urdu </th>
    </tr>";
    foreach ($marks as $key => $value1) {
        echo "<tr>
         <td> $key </td>" ;
        foreach($value1 as $value2){
            echo "<td> $value2 </td>" ;
        };
        echo "</tr>";
    };
    echo "</table>";

?>