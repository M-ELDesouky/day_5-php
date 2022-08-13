<?php
include "layout/header.php";
?>

<body>
    <div class="main offset-2 mt-5 d-flex flex-row align-content-between
 justify-content-between
 ">
        <div class="row ">
            <div class="table">
                <table>
                    <thead style="background-color: green;color: white; ">
                        <td><b>Question</b></td><br><br>
                        <td><b>Bad</b></td>
                        <td><b>Good</b></td>
                        <td><b>Very Good</b></td>
                        <td><b>Excellent</b></td>
                    </thead>
                    <tbody>
                        <td>Are You Satisfied With The Cleanliness ? </td>
                        <td><input type="radio" name="radio_t1"></td>
                        <td><input type="radio" name="radio_t2"></td>
                        <td><input type="radio" name="radio_t3"></td>
                        <td><input type="radio" name="radio_t4"></td>
                    </tbody>
                    <tbody>
                        <td>Are You Satisfied With The Prices of The Services ? </td>
                        <td><input type="radio" name="radio_t5"></td>
                        <td><input type="radio" name="radio_t6"></td>
                        <td><input type="radio" name="radio_t7"></td>
                        <td><input type="radio" name="radio_t8"></td>
                    </tbody>
                    <tbody>
                        <td>Are You Satisfied With The Nursing Service ? </td>
                        <td><input type="radio" name="radio_t10"></td>
                        <td><input type="radio" name="radio_t11"></td>
                        <td><input type="radio" name="radio_t12"></td>
                        <td><input type="radio" name="radio_t13"></td>
                    </tbody>
                    <tbody>
                        <td>Are You Satisfied With The Level of The Doctor ? </td>
                        <td><input type="radio" name="radio_t14"></td>
                        <td><input type="radio" name="radio_t15"></td>
                        <td><input type="radio" name="radio_t16"></td>
                        <td><input type="radio" name="radio_t17"></td>
                    </tbody>
                    <tbody>
                        <td>Are You Satisfied With The Calmness in The Hospital ? </td>
                        <td><input type="radio" name="radio_t18"></td>
                        <td><input type="radio" name="radio_t19"></td>
                        <td><input type="radio" name="radio_t20"></td>
                        <td><input type="radio" name="radio_t21"></td>
                    </tbody>

                </table>

                <a href="Result.php" style="color: white; text-decoration: none;"> <button type=submit name="phone" value="Result" style="background-color:green ; color: white; border: none ; width: 100%; height: 40px;" class="rounded-pill mb-4 mt-4">Submit
                    </button></a>
                <?php
                if (isset($_POST['phone'])) ////checking whether the input element is set or not
                {
                    $a = $_POST['t1'];
                    $a2 = $_POST['t2'];
                    $a3 = $_POST['t3'];
                    $a4 = $_POST['t4'];
                    $a5 = $_POST['t5'];
                    $a6 = $_POST['t6'];
                    $a7 = $_POST['t7'];
                    $a8 = $_POST['t8'];
                    $a9 = $_POST['t9'];
                    $a10 = $_POST['t10'];
                    $a11 = $_POST['t11'];
                    $a12 = $_POST['t12'];
                    $a13 = $_POST['t13'];
                    $a14 = $_POST['t14'];
                    $a15 = $_POST['t15'];
                    $a16 = $_POST['t16'];
                    $a17 = $_POST['t17'];
                    $a18 = $_POST['t18'];
                    $a19 = $_POST['t19'];
                    $a20 = $_POST['t20'];
                    $a21 = $_POST['t21'];
                    $sum = ($a + $a1 + $a2 + $a3 + $a4 + $a5 + $a6 + $a7 + $a8 + $a9 + $a10 + $a11 + $a12 + $a13 + $a14 + $a15 + $a16 + $a17 + $a18 + $a19 + $a20 + $a21);
                    if ($sum >= 0 && $sum <= 5)
                        $grade = "bad";
                    if ($sum > 5 && $sum <= 7)
                        $grade = "Good man";
                    if ($sum > 7 && $sum <= 10)
                        $grade = "Very_good man ";
                };
                echo $grade;
                ?>

            </div>
        </div>
    </div>
    <?php
    include "layout/footer.php";
    ?>