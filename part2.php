<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
</head>
<body>
<!-- 1.viết hàm tính chu vi hình chữ nhật, truyền vào a,b trả ra chu vi -->
<?php
function chuViHinhChuNhat($a, $b) {
    return 2 * ($a + $b);
}
$a = 5;
$b = 3;
echo "Chu vi hình chữ nhật: " . chuViHinhChuNhat($a, $b);
?><br>
<!-- 2. viết hàm giải phương trình bậc nhất -->
<?php
function giaiPhuongTrinhBacNhat($a, $b) {
    if ($a == 0) {
        if ($b == 0) {
            return "Phương trình có vô số nghiệm.";
        } else {
            return "Phương trình vô nghiệm.";
        }
    } else {
        $x = -$b / $a;
        return "Phương trình có nghiệm x = " . $x;
    }
}
$a = 2;
$b = -4;
echo giaiPhuongTrinhBacNhat($a, $b);
?><br>
<!-- 3. viết hàm giải phương trình bậc 2 -->
<?php
function ptb2($a, $b, $c) {
    if ($a == 0) {
        if ($b == 0) {
            if ($c == 0) {
                return "phương trình vô số nghiệm" ;
            }
            else {
                return "phương trình có một nghiệm x = " . (-$c / $b);
            }
        }
    }
    $delta = $b*$b - 4*$a*$c;
    if ($delta > 0) {
        $x1 = (-$b + sqrt($delta)) / (2* $a);
        $x2 = (-$b - sqrt($delta)) / (2* $a);
        return "phương trình có hai nghiệm phân biệt: x1 = $x1, x2 = $x2" ;
    }
    elseif ($delta == 0) {
        $x = -$b / (2* $a);
        return "phương trình có nghiệm kép x = $x ";
    }
    else {
        return "phương trình vô nghiêm";
    }
}
echo ptb2(2,2,3);
?>
<!-- random sinh viên -->
<?php
$sinhvien= array (
    1 => "Trần Thị Hồng Nhung" ,
    2 => "Đặng Kiều Oanh" ,
    3 => "Phạm Gia Bảo Phong" ,
    4 => "Lê Thị Y Phụng" ,
);
function get_student_by_id($id, array $students){
    foreach ($students as $s => $s_value) {
        if ($id == $s) {
            return $s_value;
        }
    }
}
$stt = rand ( 1, count($sinhvien));
echo '<div class="alert alert-success">' ;
echoLine ( "mời bạn có stt: ". $stt . " tên là: ". get_student_by_id($stt, $sinhvien) . "lên bảng");
echo '</div>';
?>
</body>
</html>