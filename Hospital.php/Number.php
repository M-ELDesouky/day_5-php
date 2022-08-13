<?php
include "layout/header.php";
?>


<body class="col-4 offset-4 text-center">
    <div class="main" style="border: 1px solid green; border-radius: 10px;"><br>
        <h1>Hospital</h1>
        <form action="" method="post">

            <span> Phone Number :</span><br><br> <input class="form-control  text-center" type=text name="t1" require><br>

            <br>
            <a href="Review.php" style="color: white; text-decoration: none;"> <button type=submit name="phone" value="Result" style="background-color:green ; color: white; border: none ; width: 265px; height: 40px;" class="rounded-pill mb-4">Submit
            </a>

        </form>
    </div><br>
</body>
<?php
include "layout/footer.php";
?>