<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
    <style>
        body{
            margin: 100px;
        }
    </style>
</head>
<body>
    <center>
    <img src="https://i.pinimg.com/originals/6a/73/cc/6a73cc81e92d2f1a28533c4384e6a6cb.jpg" alt="ủa ảnh hỏng hiện"><br>
    <?php
    echo "<span style='color: pink; font-size: 30px;'>Ehhe</span>";
    ?><br>
    </center>
    <!-- bài tập mẫu -->
    <p><span style='color: violet; font-size: 30px;'>Bài tập mẫu</span></p>
    <?php
    echo "Hello world";
    ?><br>
    <?php
    echo "Số phần tử trong tên Lê Thị Y Phụng là: " .strlen ("Lê Thị Y Phụng");
    ?><br>
    <?php
    echo "Đảo ngược chuỗi'hello kitty': " .strrev("hello kitty");
    ?><br>
    <?php
    $x = 25;
    $ketQua = $x * $x * $x;
    echo "Lập phương của $x là: $ketQua";
    ?><br>
    <!-- bài tập về nhà -->
    <p><span style='color: violet; font-size: 30px;'>Bài tập về nhà</span></p>
    <!-- Viết một chương trình PHP để đếm số từ trong một chuỗi sử dụng hàm str_word_count() -->
    <?php
    echo "Số từ trong chuỗi 'how are you, today?': " .str_word_count("how are you, today?");
    ?><br>
    <!-- Viết một chương trình PHP để tìm kiếm một chuỗi con trong một chuỗi sử dụng hàm strpos() -->
    <?php
    echo "Vị trí của từ 'bùm' trong 'Bùm BÙM bùm chíu' là: " .strpos("Bùm BÙM bùm chíu", "bùm");
    ?><br>
    <!-- Viết một chương trình PHP để thay thế một chuỗi con trong một chuỗi bằng một chuỗi khác sử dụng hàm str_replace() -->
    <?php
    echo "Thay thế 'world' bằng 'kitty': " .str_replace("world","Kitty","Hello world");
    ?><br>
    <!-- Viết một chương trình PHP để kiểm tra xem một chuỗi có bắt đầu bằng một chuỗi con khác không sử dụng hàm strncmp() -->
    <?php 
    function batdauchuoi($chuoi1, $chuoi2) 
    { 
        return strncmp($chuoi1, $chuoi2, strlen($chuoi2)) === 0;
    }
    $chuoi1 = "Hello, world!";
    $chuoi2 = "Hello";
    if (batdauchuoi($chuoi1, $chuoi2)) {
        echo "Chuỗi '$chuoi1' bắt đầu bằng chuỗi con '$chuoi2'.";
    } else {
        echo "Chuỗi '$chuoi1' không bắt đầu bằng chuỗi con '$chuoi2'.";
    }
    ?><br>
    <!-- Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ hoa sử dụng hàm strtoupper() -->
    <?php
    echo "In hoa chuỗi'hello kitty': " .strtoupper("hello kitty!");
    ?> <br>
    <!-- Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ thường sử dụng hàm strtolower() -->
    <?php
    echo "In thường chuỗi'HELLO KITTY!': " .strtolower("hello kitty!");
    ?> <br>
    <!-- Viết một chương trình PHP để chuyển đổi một chuỗi thành chuỗi in hoa chữ cái đầu tiên của mỗi từ sử dụng hàm ucwords() -->
    <?php
    $str = "How are you? i'm fine, thanks";
    echo "Chuỗi in hoa chữ cái đầu mỗi từ: " .ucwords($str);
    ?><br>
    <!-- Viết một chương trình PHP để loại bỏ khoảng trắng ở đầu và cuối chuỗi sử dụng hàm trim() -->
    <?php
    $str = "   How are you? i'm fine, thanks   ";
    echo "Chuỗi đã lược bỏ khoảng trắng thừa: " .trim($str);
    ?><br>
    <!-- Viết một chương trình PHP để loại bỏ ký tự đầu tiên của một chuỗi sử dụng hàm ltrim() -->
    <?php
    $str1 = "hello kitty!";
    echo "Chuỗi 'hello kitty!' sau khi loại bỏ kí tự h đầu chuỗi: " .ltrim($str1,"h");
    ?><br>
    <!-- Viết một chương trình PHP để loại bỏ ký tự cuối cùng của một chuỗi sử dụng hàm rtrim() -->
    <?php
    $str1 = "hello kitty!";
    echo "Chuỗi 'hello kitty!' sau khi loại bỏ kí tự ! cuối chuỗi: " .rtrim($str1,"!");
    ?><br>
    <!-- Viết một chương trình PHP để tách một chuỗi thành một mảng các phần tử sử dụng hàm explode() -->
    <?php
    echo "Tách chuỗi thành mảng: ";
    $string = "Apple,Orange,Banana,Grapes";
    $delimiter = ",";
    $array = explode($delimiter, $string);
    print_r($array);
    ?><br>
    <!-- Viết một chương trình PHP để nối các phần tử của một mảng thành một chuỗi sử dụng hàm implode() -->
    <?php
    echo "Nối mảng thành chuỗi: ";
    $array = ["Apple", "Orange", "Banana", "Grapes"];
    $glue = " ";
    $string1 = implode($glue, $array);
    echo $string1;
    ?><br>
    <!-- Viết một chương trình PHP để thêm một chuỗi vào đầu hoặc cuối của một chuỗi sử dụng hàm str_pad() -->
    <?php
    $originalString = "Hello";
    $padString = " kitty";
    $newLength = strlen($originalString) + strlen($padString);
    $result = str_pad($originalString, $newLength, $padString, STR_PAD_RIGHT);
    echo "Thêm vào cuối: " . $result;
    ?><br>
    <!-- Viết một chương trình PHP để kiểm tra xem một chuỗi có kết thúc bằng một chuỗi con khác không sử dụng hàm strrchr() -->
    <?php
    $mainString = "Hello, welcome to the world of PHP";
    $substring = "PHP";
    $lastOccurrence = strrchr($mainString, $substring[0]);
    if ($lastOccurrence !== false && substr($lastOccurrence, 0, strlen($substring)) === $substring) {
    echo "Chuỗi '$mainString' không kết thúc với chuỗi con '$substring'.";
    }  
    else {
    echo "Chuỗi '$mainString' kết thúc với chuỗi con '$substring'.";
    }
    ?><br>
    <!-- Viết một chương trình PHP để kiểm tra xem một chuỗi có chứa một chuỗi con khác không sử dụng hàm strstr() -->
    <?php
    $mainString = "Hello, welcome to the world of PHP";
    $substring = "welcome";
    if (strstr($mainString, $substring) !== false) {
    echo "Chuỗi '$mainString' có chứa chuỗi con '$substring'.";
    } 
    else {
    echo "Chuỗi '$mainString' không chứa chuỗi con '$substring'.";
    }
    ?><br>
    <!-- Viết một chương trình PHP để thay thế tất cả các ký tự trong một chuỗi không phải là chữ cái hoặc số bằng một ký tự khác sử dụng hàm preg_replace() -->
    <?php
    $originalString = "hello, welcome to the world of php! 123.";
    $replacementChar = "-";
    $pattern = "/[^a-zA]/";
    $resultString = preg_replace($pattern, $replacementChar, $originalString);
    echo "Chuỗi sau khi thay thế: " . $resultString;
    ?><br>
    <!-- Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một số nguyên hay không sử dụng hàm is_int() -->
    <?php
    $inputString = "12345";
    $convertedValue = (int)$inputString;
    if (strval($convertedValue) === $inputString && is_int($convertedValue)) {
    echo "Chuỗi '$inputString' là một số nguyên.";
    } 
    else {
    echo "Chuỗi '$inputString' không phải là một số nguyên.";
    }
    ?> <br>
    <!-- Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một email hợp lệ hay không sử dụng hàm filter_var() -->
    <?php
    $email = "anhthien1652k1@gmail.com";
    if (filter_var($email, FILTER_VALIDATE_EMAIL) !== false) {
    echo "Chuỗi '$email' là một email hợp lệ.";
    } 
    else {
    echo "Chuỗi '$email' không phải là một email hợp lệ.";
    }
    ?>

</body>
</html>