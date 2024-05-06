<?php

$emp = [	 
	[1,"Ansari","Manager",25500],
	[2,"Hacker","Developer",19000],
	[3,"HTML","Officer",21000],
	[4,"Programmer","Engineer",5000]
];
// echo $emp[3][3] . "</br>";
// echo $emp[0][2] . "</br>";
// echo $emp[1][1] . "</br>";
// echo $emp[2][0] . "</br>";

// echo "<pre>";
// print_r($emp);
// echo "</pre>"

// for ($i = 0; $i < 4 ; $i++) { 
//  for ($j = 0; $j < 4; $j++) { 
//     echo $emp[$i][$j] . " ";
//  };
//  echo "</br>";
// };


// foreach ($emp as  $value1) {
// foreach ($value1 as  $value2) {
//  echo $value2 . " ";
// };
// echo "</br>";
// };

echo "<table border='2px solid red' cellpadding='5px' cellspacing='0'>";
echo "<tr>
<th> Emp. Id</th>
<th> Emp. Name</th>
<th> Emp. Categories</th>
<th> Emp. Salary</th>



</tr>";
foreach ($emp as  $value1) {
    echo "<tr>";
foreach ($value1 as  $value2) {
 echo "<td> $value2 </td>";
};
echo "</br>";
};

echo "</table>";

?>