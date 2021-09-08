<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

<?php 
//trong PHP phân biệt chữ hoa chữ thường ở tất cả tên biến 

echo "Hello World<br>";

// This is the commment
# This is the commment
/*
This is the comment
This is the comment
*/

$color = "red";//khởi tạo biến 
// echo "My car is " . $color . "<br>"; //in biến với giá trị 
// echo "My house is " . $COLOR . "<br>";
// echo "My boat is " . $coLOR . "<br>";

$x=5  /* +15 */   + 5;

echo $x;


//Quy tắc đặt tên biến 
/*
	Một biến bắt đầu bằng $dấu, theo sau là tên của biến

	Tên biến phải bắt đầu bằng một chữ cái hoặc ký tự gạch dưới

	Tên biến không thể bắt đầu bằng số

	Tên biến chỉ có thể chứa các ký tự chữ-số và dấu gạch dưới (Az, 0-9 và _)

	Tên biến có phân biệt chữ hoa chữ thường ( $agevà $AGE là hai biến khác nhau)

*/
	$txt= " World";
	echo "<br>I love $txt";
	echo "<br>I love" .$txt. " !";
?>

<?php  
//Biến toàn cầu 
$x = 5; // global scope
//khi khai báo biến toàn cầu mà trong hàm có sử dụng biến thì sẽ lỗi 
//chúng phải được khai báo trong hàm thì ms sử dụng được 
//nhưng ngoài hàm thì vẫn sử dụng được.
//cách sử dụng biến toàn cầu là khai báo  global + biến cần
function myTest() {
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";


$a=5;
$b=10;
function myTest1(){
	global $a, $b;
	$a= $a+$b;
}
myTest1();
echo $a;


?>

</body>
</html>