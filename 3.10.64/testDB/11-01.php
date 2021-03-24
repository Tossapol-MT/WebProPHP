<!-- ชื่อไฟล์ : Exam11-01.php -->
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตัวอย่างที่ 11-1</title>
    </head>
    <body>
        <?php //------------ส่วนการเปิด Connection ในการติดต่อกับ MySQL ----------------
        $hostname = "localhost";
        $username = "root";
        $password = "1610200";
        $dbname = "itbook";
        $conn = new mysqli($hostname, $username, $password, $dbname);

        mysqli_set_charset($conn,"utf8"); //เปลี่ยนให้เป็นภาษาไทย

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT book.BookID as ID,book.BookName as BookName,typebook.TypeName as TypeName
        FROM book INNER JOIN typebook ON book.TypeID = typebook.TypeID ORDER BY BookID";

        if($result = mysqli_query($conn,$sql)){
            if (mysqli_num_rows($result) > 0) {
                echo "<table>";
                echo "<tr>";
                    echo "<th>book_id</th>";
                    echo "<th>book_name</th>";
                    echo "<th>type_name</th>";
                echo "</tr>";
                while ( $row = mysqli_fetch_array($result))
                {
                    echo "<tr>";
                        echo "<td>".$row['ID']."</td>:";
                        echo "<td>".$row['BookName']."</td>:";
                        echo "<td>".$row['TypeName']."</td>:";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "0 results";
            }
            $conn->close();
    }
        ?>
    </body>
</html>