<?php
//echo "Welcome to the Web Engineering Class";
//echo phpinfo();
/*
$a =40;
$b=20;
$sum = $a+$b;
$min= $a-$b;
$mul=$a*$b;
$div=$a/$b;
$concat= $a.$b;
echo $sum."<br />";
echo $min."<br />";
echo $mul."<br />";
echo $div."<br />";
echo $concat."<br />";
*/
//echo "<pre>";
//print_r($_SERVER);
/*
function reverse ($str)
{
   $result = "";
   
   for ($index= strlen($str)-1; $index >= 0; $index--)
      $result .= substr($str, $index,1);
   return $result;
}
 echo reverse('myname');
 * 
 */
$con = mysqli_connect('localhost', 'root', 'root', 'blog_post');
$file= 'persons.csv';
$handler = fopen($file, 'w+');
$query ='select * from user';
$result = mysqli_query($con, $query);
while ($raw = mysqli_fetch_assoc($result) ) {
	fputcsv($handler, $raw);}

	
	




?>