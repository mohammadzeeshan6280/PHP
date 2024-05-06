<?php
// $emp = [	
// 	[1,"Ansari","Manager",25500],
// 	[2,"Hacker","Developer",19000],
// 	[3,"HTML","Officer",21000],
// 	[4,"Programmer","Engineer",5000]
// ];

// // foreach ($emp as list($id, $name, $designation, $salary)) {
// //    echo "$id $name $designation $salary </br>";
// // };

// echo "<table border='2px' cellpadding='5px' cellspacing='0px'>";
// echo "<tr>
// <th> Id </th>
// <th> Name </th>
// <th> Designation </th>
// <th> Salary </th>
// </tr>";
// foreach ($emp as list($id, $name, $designation, $salary)) {
//    echo "<tr><td> $id</td> <td> $name </td> <td> $designation </td> <td> $salary</tr> </td> ";
// };
// echo "</table>";


$emp = [
             [
        "id" => 1, 
        "name" => "Ansari",
        "Designation" => "Manager",
        "salary" => 50000
        ],

             [
        "id" => 2, 
        "name" => "White",
        "Designation" => "Hacker",
        "salary" => 25000
        ],
             [
        "id" => 3, 
        "name" => "Zeeshan",
        "Designation" => "Developer",
        "salary" => 30000
             ],
             [
        "id" => 4, 
        "name" => "Ram",
        "Designation" => "Programmer",
        "salary" => 19000
        ]

             ];

echo "<table border='2px' cellpadding='5px' cellspacing='0px'>";
echo "<tr>
<th> Id </th>
<th> Name </th>
<th> Designation </th>
<th> Salary </th>
</tr>";
foreach ($emp as list("id" => $id, "name" => $name, "Designation" => $designation, "salary" =>  $salary)) {
   echo "<tr><td> $id</td> <td> $name </td> <td> $designation </td> <td> $salary</tr> </td> ";
};
echo "</table>";
?>