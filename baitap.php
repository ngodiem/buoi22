<?php 
echo "======bài tập 1=======";
// bài tập 1: tính tổng giá trị các số bao gồm các số từ 3 đến 15 kq 117
$sum = 0;
for ($i= 3; $i <= 15 ; $i++) { 
	# code...
	$sum += $i;
}
echo "<br>";
echo $sum;


echo "<br>";
echo "======bài tập 2=======";
// bài tập 2: tính tổng giá trị các số bao gồm các số 3,5,9,4,17,20  kq 58 dùng 2 cách foreach, for
$a = [3, 5, 4, 9, 17, 20 ];
$sum = 0;
for ($i = 0; $i <= count($a) - 1; $i++) { 
	# code...
	$sum += $a[$i];
}
echo "<br>";
echo $sum;


echo "<br>";
echo "======bài tập 3 =======";
// bài tập 3: tính tổng giá trị của các phần tử chẳn trong arry   bao gồm các số 3,5,9,4,17,20
$a = [3, 5, 4, 9, 17, 20 ];
$sum = 0;
for ($i = 0; $i <= count($a) - 1; $i++) { 
	# code...
	if($a[$i] % 2 == 0) {
	$sum += $a[$i];	
	}
	
}
echo "<br>";
echo $sum;


echo "<br>";
echo "======bài tập 4 =======";
// bài tập 4: viết hàm isTongChan(a,b) hàm này trả về true nếu kết quả tổng 2 số a,b là số chẳn, ngược lại false
function isTongChan($a, $b) {
	//code here
	$c = $a  + $b;
	if($c % 2 == 0) {
		return true; // return là không chạy phía dưới
	}
		return false;		
}

echo "<br>";
$result = isTongChan(5, 2);
if($result) {
	echo "tổng chẳn ";
}
else {
	echo "tổng lẻ";
}




echo "<br>";
echo "======bài tập 5 =======";

function isPassed($diem) {
	$diemToan = $diem["toan"];
	$diemLy = $diem["ly"];
	$diemHoa = $diem["hoa"];
	$tongDiem = ($diemToan + $diemLy) * 2 + $diemHoa > 24;
	if( $tongDiem > 24) {
		return true;
	}
	else {
		return false;
	}

}
echo "<br>";
$d = ["toan" => 7, "ly" => 4, "hoa" => 8.5];
$result = isPassed($d);
if($result) {
	echo "đậu";
}
else {
	echo "rớt";
}



echo "<br>";
echo "======bài tập 6 =======";

function passedList($danh_sach_sv) {
	$danhSachDau = [];
	
	foreach ($danh_sach_sv as $tenSV => $diem) {
		# code...
		if(isPassed($diem)) {
			$danhSachDau[] = $tenSV;
			
		}

	}
return $danhSachDau;
	
}


echo "<br>";
$DSDSV = array(
	"nga" => array("toan" => 1, "ly" => 4, "hoa" => 8.5),
	"nam" => array("toan" => 4, "ly" => 9, "hoa" => 3.5),
	"nhan" => array("toan" => 7, "ly" => 5, "hoa" => 9.5)

);

$dsDau = passedList($DSDSV );
var_dump($dsDau);
 ?>