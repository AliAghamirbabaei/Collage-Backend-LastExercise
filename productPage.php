<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>product page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


<div class="title_container">
    <form action="?" method="POST">
        <p>تعداد نمایش عکس ها</p>
        <input type="number" name="numberOfPics" min="0">
        <button name="done">submit</button>
    </form>
</div>

<div class="grid-container">
    <?php
    if (isset($_POST["done"])){

        $numberOfPics = $_POST["numberOfPics"];
        for ($i=1;$i<=$numberOfPics;$i++){
            $randomPicture = rand(1,9);
            ?>
            <div><a href="#"><img width="300px" height="auto" src="img/<?php echo $randomPicture?>.jpg"></a></div>
            <?php
        }
    }
    ?>
</div>



<div class="register_data">
    <form action="result.php" method="POST">
        <h2>ثبت اطلاعات</h2>
        <lable>نام:</lable><input type="text" name="name" ><br>
        <lable>نام خانوادگی:</lable><input type="text" name="family" ><br>
        <label>شماره همراه:</label><input type="text" name="phone" ><br>
        <label>ایمیل:</label><input type="email" name="email" ><br>
        <button name="submit">ثبت اطلاعات</button>
    </form>
</div>



</body>
</html>