<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แสดงการสร้างและใช้งานค่าคงที่</title>
</head>
    <body>
        <font size ="3">
            <?php
            define("x",10);
            echo "The value of the constant is x.<br/>";
            echo "The value of the constant is <b>";
            echo x;
            echo "</b>";
            echo x = 20;
            echo x;

            ?>
        </font>
    </body>
</html>