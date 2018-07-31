<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>SDSU Marathon Report</title>
    <link rel="stylesheet" href="report.css">

</head>

<!--   Code by Namratha Prabhu (jadrn047 -->
<body>
    <h1>SDSU Marathon Runner's Report</h1>
<?php
$server = 'opatija.sdsu.edu:3306';
$user = 'jadrn047';
$password = 'socket';
$database = 'jadrn047';
if(!($db = mysqli_connect($server,$user,$password,$database)))
    echo "ERROR in connection ".mysqli_error($db);
else {
    $sql = "select * from person order by category,lname;";    
    $result = mysqli_query($db, $sql);
    echo "<table>\n";
    echo
   
"<tr><td>Last Name</td><td>First Name</td><td>Age</td><td>Email</td><td>Experience Level</td><td>Category</td><td>Runner's Image</td></tr>";
    while($row=mysqli_fetch_row($result)) {
        echo "<tr>";
        foreach(array_slice($row,1,-1) as $item) 
            echo "<td>$item</td>";
 
            $img_src = $row[7];

            echo "<td><img src ='./runner_images/".$img_src."'></td>";
            //echo $img_src;



        echo "</tr>\n";
        }
    mysqli_close($db);
    }
?>
</table>
</body>
</html>