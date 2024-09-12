<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- hiển thị dữ liệu -->
<?php

$dbh = mysqli_connect('localhost', 'root', '', 'melodyj');
// Kết nối tới MySQL server

if (!$dbh)
    die("Unable to connect to MySQL: " . mysqli_connect_error());
// Nếu kết nối thất bại thì đưa ra thông báo lỗi

$sql_stmt = "SELECT * FROM my_contacts";
// Câu lệnh select

$result = mysqli_query($dbh, $sql_stmt);
// Thực thi câu lệnh SQL

if (!$result)
    die("Database access failed: " . mysqli_connect_error());
// Thông báo lỗi nếu thực thi thất bại

$rows = mysqli_num_rows($result);
// Lấy số hàng trả về

if ($rows) {
    while ($row = mysqli_fetch_array($result)) {
        echo 'ID: ' . $row['id'] . '<br>';
        echo 'Full Names: ' . $row['full_names'] . '<br>';
        echo 'Gender: ' . $row['gender'] . '<br>';
        echo 'Contact No: ' . $row['contact_no'] . '<br>';
        echo 'Email: ' . $row['email'] . '<br>';
        echo 'City: ' . $row['city'] . '<br>';
        echo 'Country: ' . $row['country'] . '<br><br>';
    }
}

mysqli_close($dbh); // Đóng kết nối CSDL
?>
<!-- thêm dữ liệu vào bảng -->
<?php
$dbh = mysqli_connect('localhost', 'root', '', 'melodyj');
    // Kết nối với MySQL Server

    if (!$dbh)     
    die("Unable to connect to MySQL: " . mysqli_connect_error()); 
    // Thông báo lỗi nếu kết nối thất bại 
    
    if (!mysqli_select_db($dbh, 'melodyj'))     
    die("Unable to select database: " . mysqli_connect_error()); 
    // Thông báo lỗi nếu chọn CSDL thất bại
    
    $sql_stmt = "INSERT INTO `my_contacts` (`full_names`,`gender`,`contact_no`,`email`,`city`,`country`)"; 
    $sql_stmt .= "VALUES('Poseidon','Mail','541',' poseidon@sea.oc ','Troy','Ithaca')"; 
    
    $result = mysqli_query($dbh, $sql_stmt); // Thực thi câu lệnh SQL
    
    if (!$result) {
        die("Adding record failed: " . mysqli_connect_error()); 
        // Thông báo lỗi nếu thực thi câu lệnh thất bại
    } else {
        echo "Poseidon has been successfully added to your contacts list";
    }
    echo "<br>";

    mysqli_close($dbh); // Đóng kết nối CSDL 
?>
<!-- cập nhật dữ liệu vào bảng -->
<?php

$dbh = mysqli_connect('localhost', 'root', '', 'melodyj');
// Kết nối tới MySQL Server

if (!$dbh)    
die("Unable to connect to MySQL: " . mysqli_connect_error()); 
// Thông báo lỗi nếu kết nối thất bại 

if (!mysqli_select_db($dbh,'melodyj'))     
die("Unable to select database: " . mysqli_connect_error()); 
// Thông báo lỗi nếu chọn CSDL thất bại

$sql_stmt = "UPDATE `my_contacts` SET `contact_no` = '785',`email` = 'poseidon@ocean.oc'";
$sql_stmt .= "WHERE `id` = 5";

$result = mysqli_query($dbh,$sql_stmt);
// Thực thi câu lệnh SQL

if (!$result) {
    die("Deleting record failed: " . mysqli_connect_error());
    // Thông báo lỗi nếu thực thi thất bại
} else {
    echo "ID number 5 has been successfully updated";
}

mysqli_close($dbh); //close the database connection
?>
<br>
<!-- xóa dữ liệu -->
<?php

$dbh = mysqli_connect('localhost', 'root', '', 'melodyj');
// Kết nối với MySQL Server

if (!$dbh)     
die("Unable to connect to MySQL: " . mysqli_connect_error()); 
// Thông báo lỗi nếu kết nối thất bại

if (!mysqli_select_db($dbh,'melodyj'))     
die("Unable to select database: " . mysqli_connect_error()); 
// Thông báo lỗi nếu chọn CSDL thất bại

$id = 4; 
// ID của Venus trong CSQL

$sql_stmt = "DELETE FROM `my_contacts` WHERE `id` = $id"; 
// Câu lệnh SQL Delete

$result = mysqli_query($dbh,$sql_stmt); 
// Thực thi câu lệnh SQL

if (!$result) {
    die("Deleting record failed: " . mysqli_connect_error());
    // Thông báo lỗi nếu thực thi thất bại 
} else {
    echo "ID number $id has been successfully deleted";
}

mysqli_close($dbh); // Đóng kết nối CSDL
?>
<br>
<!-- Sử dụng PDO thêm dữ liệu vào bảng  -->
<?php
try {
    // Tạo một PDO mới và kết nối với cơ sở dữ liệu
    $dbh = new PDO('mysql:host=localhost;dbname=melodyj', 'root', '');

    // Đặt chế độ lỗi PDO thành ngoại lệ
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql_stmt = "INSERT INTO my_contacts (full_names, gender, contact_no, email, city, country) 
                 VALUES (:full_names, :gender, :contact_no, :email, :city, :country)";

    // Chuẩn bị câu lệnh
    $stmt = $dbh->prepare($sql_stmt);

    // Liên kết các tham số với truy vấn SQL
    $stmt->bindParam(':full_names', $full_names);
    $stmt->bindParam(':gender', $gender);
    $stmt->bindParam(':contact_no', $contact_no);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':city', $city);
    $stmt->bindParam(':country', $country);

    // Gán giá trị cho các tham số
    $full_names = 'Poseidon';
    $gender = 'Male';
    $contact_no = '541';
    $email = 'poseidon@sea.oc';
    $city = 'Troy';
    $country = 'Ithaca';

    $stmt->execute();

    echo "Poseidon has been successfully added to your contacts list";
} catch (PDOException $e) {
// Bắt lỗi và thông báo lỗi
    echo "Error: " . $e->getMessage();
}

// đóng kết nối
$dbh = null;
?>
<br>
<!-- Sử dụng PDO cập nhật dữ liệu vào bảng -->
<?php
try {
    // Tạo một PDO mới và kết nối với cơ sở dữ liệu
    $dbh = new PDO('mysql:host=localhost;dbname=melodyj', 'root', '');

    // Đặt chế độ lỗi PDO thành ngoại lệ
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql_stmt = "UPDATE my_contacts 
                 SET full_names = :full_names, gender = :gender, contact_no = :contact_no, email = :email, city = :city, country = :country 
                 WHERE id = :id";

    // Chuẩn bị câu lệnh
    $stmt = $dbh->prepare($sql_stmt);

    // Liên kết các tham số với truy vấn SQL
    $stmt->bindParam(':full_names', $full_names);
    $stmt->bindParam(':gender', $gender);
    $stmt->bindParam(':contact_no', $contact_no);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':city', $city);
    $stmt->bindParam(':country', $country);
    $stmt->bindParam(':id', $id);

    // Gán giá trị cho các tham số
    $full_names = 'Poseidon';
    $gender = 'Male';
    $contact_no = '999';
    $email = 'poseidon_updated@sea.oc';
    $city = 'Athens';
    $country = 'Greece';
    $id = 1; 

    $stmt->execute();

    echo "The contact has been successfully updated.";
} catch (PDOException $e) {
    // phát hiện lỗi và thông báo
    echo "Error: " . $e->getMessage();
}

// đóng kết nối 
$dbh = null;
?>
<br>
<!-- Xoá dữ liệu ở bảng sử dụng PDO  -->
<?php
try {
    // Tạo một PDO mới và kết nối với cơ sở dữ liệu
    $dbh = new PDO('mysql:host=localhost;dbname=melodyj', 'root', '');

    // Đặt chế độ lỗi PDO thành ngoại lệ
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql_stmt = "DELETE FROM my_contacts WHERE id = :id";

    // Chuẩn bị câu lệnh
    $stmt = $dbh->prepare($sql_stmt);

    // Liên kết các tham số với truy vấn SQL
    $stmt->bindParam(':id', $id);

    // Gán giá trị cho các tham số
    $id = 1; 

    $stmt->execute();

    echo "The contact has been successfully deleted.";
} catch (PDOException $e) {
    // phát hiện lỗi và thông báo
    echo "Error: " . $e->getMessage();
}

// đóng kết nối
$dbh = null;
?>
<br>
<!-- Hiển thị dữ liệu sử dụng PDO   -->
<?php
try {
    // Tạo một PDO mới và kết nối với cơ sở dữ liệu
    $dbh = new PDO('mysql:host=localhost;dbname=melodyj', 'root', '');

    // Đặt chế độ lỗi PDO thành ngoại lệ
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Chuẩn bị câu lệnh
    $sql_stmt = "SELECT * FROM my_contacts";

    // Chuẩn bị câu lệnh
    $stmt = $dbh->prepare($sql_stmt);

    $stmt->execute();

// Lấy tất cả kết quả
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($results) {
        // tạo bảng 
        echo "<table border='1'>
                <tr>
                    <th>ID</th>
                    <th>Full Names</th>
                    <th>Gender</th>
                    <th>Contact No</th>
                    <th>Email</th>
                    <th>City</th>
                    <th>Country</th>
                </tr>";

        foreach ($results as $row) {
            echo "<tr>
                    <td>" . htmlspecialchars($row['id']) . "</td>
                    <td>" . htmlspecialchars($row['full_names']) . "</td>
                    <td>" . htmlspecialchars($row['gender']) . "</td>
                    <td>" . htmlspecialchars($row['contact_no']) . "</td>
                    <td>" . htmlspecialchars($row['email']) . "</td>
                    <td>" . htmlspecialchars($row['city']) . "</td>
                    <td>" . htmlspecialchars($row['country']) . "</td>
                  </tr>";
        }

        echo "</table>";
    } else {
        echo "No records found.";
    }
} catch (PDOException $e) {
    // phát hiện lỗi và thông báo
    echo "Error: " . $e->getMessage();
}

// đóng kết nối
$dbh = null;
?>


</body>
</html>