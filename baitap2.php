<?php 
echo "------------bai tap 1-----------------";
echo "<br>";
$sum = 0;
for ($i = 3; $i <= 15 ; $i++) { 
	$sum += $i;
}
echo $sum;
echo "<br>";


echo "====== bai tap 2 ===========";
echo "<br>";

$a = [3, 5, 4, 9, 17, 20];
$sum = 0;

foreach ($a as $val) {
	if($val % 2 == 0) {
		$sum += $val;
	}
	
	
}
echo $sum;
echo "<br>";

$sum = 0;
for ($i=0;  $i <= count($a) - 1  ; $i++) { 
	if($a[$i] % 2 ==0) {
		$sum += $a[$i];
	}
	
}
echo $sum;
echo "<br>";

function isTongChan($a, $b) {
	$c = $a + $b ;
	if($c % 2 == 0) {
		return true;
	}
	return false;

}

$result = isTongChan(5, 2);
if($result) {
	echo "tong chan";
}
else {
	echo "le";
}
echo "<br>";

function isPassed($diem) {
$diemToan = $diem["toan"];
$diemLy   = $diem["ly"];
$diemHoa  = $diem["hoa"];
$tongDiem = ($diemToan + $diemLy) * 2 + $diemHoa;
if ($tongDiem > 24) {
	return true;

}
return false;
}  
echo "<br>";
$d = ["toan" => 7, "ly" => 1, "hoa" => 1];
$result = isPassed($d);
if($result) {
	echo "đậu";
}
else {
	echo "rớt";
}

function passedList($danh_sach_diem_sv) {
$danhSachDau = [];
$dachSachRot = [];
foreach ($danh_sach_diem_sv as $tenSV => $diem) {
	if(isPassed($diem)) {
		$danhSachDau[] = $tenSV;

	}
	
}
return $danhSachDau;

}




$DSDSV = array(
	"nga" => array("toan" => 1, "ly" => 4, "hoa" => 8.5),
	"nam" => array("toan" => 4, "ly" => 9, "hoa" => 3.5),
	"nhan" => array("toan" => 7, "ly" => 5, "hoa" => 9.5)

);
$DSD = passedList($DSDSV);
var_dump($DSD);

 ?>