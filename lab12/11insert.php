<html>
<body>
<?php
$con = mysqli_connect("localhost","root") or die(mysqli_error());
mysqli_select_db($con,"6c");
 $name=$_POST["name"];
 $add1=$_POST["add1"];
 $add2=$_POST["add2"];
 $email=$_POST["email"];
$sql="insert into student values ( '$name' , '$add1' , '$add2' , '$email' )" ;
$result=mysqli_query($con,$sql) ;
$result1=mysqli_query($con,"select * from student");
 if (!$result1)
{ die(mysqli_error()); }
echo "1 record added";
mysqli_close($con);
?>

<table border="1">
             <tr>
                <th>NAME</th>
                <th>ADDRESS Line1</th>
                <th>ADDRESS Line2</th>
                <th>EMAIL-id</th></tr>
           <?php while($array=mysqli_fetch_row($result1)):
              echo
               "<tr>
                  <td>$array[0]</td>
    			      <td>$array[1]</td>
    			      <td>$array[2]</td>
    			      <td>$array[3]</td>
 		         </tr>";
           endwhile; ?>
           <?mysqli_free_result($result1);?>
           <?mysqli_close($con);?>
        </table>


<form action="11result.php" method="post">
<br/> <br/> <hr/>
Name: <input type="text" name="name" />   <br/>
<input type="submit" value ="Submit" />
</form>
</body>
</html> 
