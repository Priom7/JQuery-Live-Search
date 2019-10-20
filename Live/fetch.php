<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "123", "ajax");

$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM books 
  WHERE title LIKE '%".$search."%'
 ";
}
else
{
 $query = "
  SELECT * FROM books ORDER BY id
 ";


}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
        <table class="table table bordered">
            <tr>
            <th>Author</th>
            <th>Title</th>
            <th>Publisher</th>
            <th>Published</th>
            </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
            <td>'.$row["Author"].'</td>
            <td>'.$row["Title"].'</td>
            <td>'.$row["Publisher"].'</td>
            <td>'.$row["Published"].'</td>
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