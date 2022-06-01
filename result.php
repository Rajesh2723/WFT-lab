<html><body>
<?php
 $con = mysqli_connect("localhost","root") or die(mysql_error());
 mysqli_select_db($con,"rajesh");
 $sql= "select * from student where name= '$_POST[name]' " ;
 $result= mysqli_query($con,$sql) ;
if(mysqli_num_rows($result) == 0)
die("no records found");
echo "<table border='1'> <tr> <th>Name</th> <th>Addresss1</th>
 <th>Addresss2</th> <th>Email</th> </tr> " ;
while($row=mysqli_fetch_array($result))
{
 echo "<tr>" ;
 echo "<td> $row[name] </td>" ;
 echo "<td> $row[address] </td>" ;
 echo "<td> $row[address2] </td>" ;
 echo "<td> $row[email] </td>" ;
 echo "</tr>" ;
}
echo "</table>";
mysqli_close($con);
?> </body> </html>