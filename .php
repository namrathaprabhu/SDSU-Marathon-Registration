<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Person Report</title>
    <link rel="stylesheet" href="report.css">

</head>
<body>
    <h1>Person Report</h1>
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
    if(!result)
        echo "ERROR in query".mysqli_error($db);
    echo "<table>\n";
    echo
   
"<tr><td>Last Name</td><td>First Name</td><td>Age</td><td>Address</td><td>City</td><td>State</td><td>Zip</td><td>Email</td><td>Gender</td><td>Experience Level</td><td>Category</td><td>Runner's Image</td></tr>";
    while($row=mysqli_fetch_row($result)) {
        echo "<tr>";
        foreach(array_slice($row,1) as $item) 
            echo "<td>$item</td>";
 
            // $img_src = $row[10];
            // echo "<td><img src ='./runner_images/".$img_src."'/></td>";
            // echo $img_src;



        echo "</tr>\n";
        }
    mysqli_close($db);
    }
?>
</table>
</body>
</html>