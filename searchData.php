<?php
echo "connect";
require ('connectDB.php');
$output = '';
// if(isset($_POST["query"])){
//  $search = mysqli_real_escape_string($con, $_POST["query"]);
 $query = "
  SELECT * FROM kharuphan 
  WHERE id LIKE '%".$_POST["search"]."%'
 ";
//   OR  LIKE '%".$search."%' 
//   OR City LIKE '%".$search."%' 
//   OR PostalCode LIKE '%".$search."%' 
//   OR Country LIKE '%".$search."%'
// }
// else
// {
//  $query = "
//   SELECT * FROM kharuphan ORDER BY id
//  ";
// }
$result = mysqli_query($con, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>ID</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["id"].'</td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>