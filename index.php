<?php 
// nối chuỗi
$str = "hellow" ." " . "word";
echo $str;

// cộng dồn
$sum = 7;
$sum += 5; // cộng dồn
echo "<br>";
echo $sum;

// nối chuỗi dồn
$tr1 = "bv7";
$tr1 .=  "a" ;//bv7a
echo "<br>";
echo $tr1;

//học về mãng 

// numric array( array thường vì chỉ số của nó là số)
$a = [3, 5, 7, 4, 2];
$b = [0 => 3, 1 =>5, 2=>7, 3=>4, 4=>2]; //phần tử bao gồm 2 phần chỉ số và giá trị // chỉ số dùng index hoặc key, chỉ số không được trùng chỉ số
echo "<br>";
var_dump($a);

//array kết hợp(associative array ): chỉ số của nó là chuỗi
$c = ["toan" => 9, "ly" => 5, "hoa" => 4];
 //array kết hợp

 echo "<br>";
var_dump($c);

$c["ly"] = 8;
echo "<br>";
echo $c["ly"]; // 8;

// mãng nhiều chiều
$a1 = [3, 5, 7, 4, 2]; // mãng 1 chiều
$a2 = [[4, 9], ["hello", true]]; // mãng 2 chiều a2 có 2 phần tử mõi phần tử của nó là array thường làm việc trên 2 phần tử là nhiều
// lấy phần tử "hello";
echo "<br>";
echo $a2[1][0]; // 
echo "<br>";

$today = "wed";
// switch biến nào trùng với case đó thì chạy case đó
switch ($today) {
	case 'mon':
		# code...
	echo "hôm nay là thứ 2";
		break; 

		case 'tuesday':
		# code...
	echo "hôm nay là thứ 3";
		break;

		case 'wed':
		# code...

	echo "hôm nay là thứ 4";
		// break;
		// gặp break thoát khỏi switch;
		// nếu không gặp break thì chạy ra 2 cái luôn
		// nếu k gặp break nó sẽ đi tìm case có break nhảy case luôn
		// break dùng để thoát khỏi switch

		case 'thu':
		# code...
	echo "<br>";
	echo "hôm nay là thứ 5";
		break;

		case 'fri':
		# code...
	echo "hôm nay là thứ 6";
		break;
	
	default:
		# code...
	echo "hôm nay là cuối tuần";
		break;
}

// array kết hợp k dùng for để thao tác bởi vì chỉ số của nó là chuỗi, dùng foreach để thao tác
// cộng các điểm lại với nhau
$c = ["toan" => 9, "ly" => 5, "hoa" => 4, "van" =>10];
// lần lượt lấy từng phần tử trong $c nó gán tương ướng bên môn và điểm
// mon lấy giá trị là toan, diem lay gia tri là 9
// vòng lặp đầu tiên mon có giá trị là toan, diem có giá trị là 9, sau đó cộng dòn dô sum
// sau đó nó xem có phải là phần tử cuối hay chưa, chưa phải nó tiếp tục lấy phần tử 2 chạy, cứ tiếp tục như vậy cho đến hết các phần tử được duyệt rồi hiển thỉ ra sum    vòng for
// cách 1
$sum = 0;
foreach ($c as $mon => $diem) {
	# code...
	$sum += $diem;
}
echo "<br>";
echo $sum;

// cách 2

$sum = 0;
foreach ($c as  $diem) {
	# code...
	$sum += $diem;
}
echo "<br>";
echo $sum;

$d = [4, 5, 9, 7, 2];
$sum = 0;
for ($i = 0; $i <= count($d) - 1; $i++) {
	$sum += $d[$i];	
}

    echo "<br>";
	echo $sum;


// ưu tiên sài foreach hầu hết trong các trường hợp
// độ ưu tiên foreach, while, do while
// while thường sử dụng trong cơ sở dữ liệu liên quan tới database;

$d = [4, 5, 9, 7, 2];
$sum = 0;
foreach ($d as $diem ) {
	# code...
	$sum += $diem;
}
    echo "<br>";
	echo $sum;

// while: kt đk đúng chạy cho đến khi sai, nếu sai dừng ngay k chạy
// tính tổng
$d = [4, 5, 9, 7, 2];
$sum = 0;
$i = 0;
while ($i <= count($d) - 1) {
	# code...
	$sum += $d[$i];
	$i++;
}
 echo "<br>";
 echo $sum;

// do while thực hiện rồi mới kt điều kiện
// do chạy ít nhất 1 lần, do chạy rồi kt điều kiện đúng chạy tiếp sau thì dựng lại
$d = [4, 5, 9, 7, 2];
$sum = 0;
$i   = 0;
 do {
 	# code...
 	$sum += $d[$i];
 	$i++;

 } while ( $i <= count($d) - 1);

 echo "<br>";
 echo $sum;

 $e = [5, 9, 2, 4, 6, 1, 4];
 // tính tổng giá trị các phần tử từ trái sang phải, gặp 4 cộng rồi dừng tính
 // mong chờ kq ra 20
 $sum = 0;

 foreach ($e as  $val) {
 	# code...
 	$sum += $val;
 	if($val == 4) {
 		break; // thoát khỏi vòng lặp
 	}
 }
echo "<br>";
echo $sum;

 // bài tập: tính tổng giá trị các phần tử từ trái sang phải, gặp 4 không cộng
 // mong chờ kq ra 23
 $e = [5, 9, 2, 4, 6, 1, 4];
 $sum = 0;

 foreach ($e as  $val) {
 	# code...
 	
 	if($val == 4) {
 		continue; // chạy vòng lặp kế tiếp
 	}
 	$sum += $val;
 }
echo "<br>";
echo $sum;

 // bài tập: tính tổng giá trị các phần tử từ trái sang phải, gặp 4 thì cộng nhưng không được cộng, 1 phần tử sau nó
 // mong chờ kq ra 28

 $e = [5, 9, 2, 4, 6, 1, 4, 5, 3 ];
 $sum = 0;
 for ($i = 0; $i <= count($e) - 1; $i++) {
	$sum += $e[$i];	
	if($e[$i] == 4) {
		$i++;
	}
}

echo "<br>";
echo $sum;


 // bài tập: tính tổng giá trị các phần tử từ trái sang phải, gặp 4 thì cộng nhưng không được cộng, 1 phần tử sau nó
 // mong chờ kq ra 28
// dùng foreach 
$e = [5, 9, 2, 4, 6, 1, 4, 5, 3 ];
$sum = 0;
$isFour = false; // tạo biến cờ
foreach ($e as $val ) {
	# code...
	if ($isFour) { // nếu $isFour true thì sẽ bật $isFour = false;
		// chạy từ giá trị 5 cho đến giá trị 4 $isFour vẫn k chạy vì biến được gán giá trị là false cả code bên trong if k chạy, code bên trong if chỉ chạy khi $isFour có giá trị là true, sau đó bật gán $isFour = false; để continue chạy vòng lặp tiếp theo(code bên dưới bỏ qua k chạy)
		$isFour = false;
		continue; // là không làm ở dưới nghĩa là không cộng dô
	}
	$sum += $val;

	if($val == 4) {
		$isFour = true; 

	}
	
}

echo "<br>";
echo $sum;

// học về hàm(function)
function tong($a, $b) { // tổng là tên hàm function là từ khóa, $a, $b là tham số a tham số b
	$c = $a + $b;
	return $c; // trả về giá trị cho tong giá trị là 14
} // toàn bộ code bên trong là khai báo hàm,  khai báo hàm k bao giờ chạy chỉ khi gọi tới mới chạy, chương trình chạy từ trên xuống dưới k có chạy dòng code nào bên trong hàm 

$x = 5;
$y = 9;
echo "<br>";
echo tong($x, $y); // 14 gọi là gọi hàm tự động truyền x = 5 cho tham số a, y = 9 cho tham số b
// khi chương trình chạy xong vùng nhớ tổng sẽ biến mất
// bên trong hàm không nhìn thấy biến bên ngoài hàm và ngược lại
// để bên trong hàm nhìn thấy biến bên ngoài hàm phải dùng từ khóa .. học sau

// bài tập: viết hàm tongArray($arr), hàm này trả về tổng giá trị các phần  tử

function tongArray($arr) {
	$sum = 0;
	for ($i = 0; $i <= count($arr) - 1 ; $i++) { 
		# code...
		$sum += $arr[$i];
	}
return $sum;
}

$x = [4, 5, 7, 2, 6];
echo "<br>";
echo tongArray($x);

 ?>