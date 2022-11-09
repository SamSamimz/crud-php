<?php
include 'login_only.php';
include 'header.php';
?>

<div id="main-content">
    <h2>Update Record</h2>

    <?php

    $sid = $_GET['sid'];
    $conn = new mysqli("localhost", "root", "", "project") or die("Connection Failed");

    $sql = "SELECT * FROM `student` WHERE `sid` = $sid";

    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {




    ?>

            <form class="post-form" action="updatedata.php" method="post">
                <div class="form-group">
                    <label>Name</label>
                    <input type="hidden" name="sid" value="<?php echo $row['sid'] ?>">
                    <input type="text" name="sname" value="<?php echo $row['snane'] ?>" />
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="saddress" value="<?php echo $row['saddress'] ?>" />
                </div>
                <div class="form-group">
                    <label>Class</label>
                    <select name="class">
                        <option value="" selected disabled>Select Class</option>
                        <?php
                        $conn = new mysqli("localhost", "root", "", "project") or die("Connection Failed");

                        $sql = "SELECT * FROM  studentclass";

                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {


                            while ($class = mysqli_fetch_assoc($result)) {


                        ?>
                                <option value="<?php echo $class['cid'] ?>"><?php echo $class['cname'] ?></option>
                            <?php
                            }
                            ?>
                    </select>

                <?php
                        }

                ?>
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" name="sphone" value="<?php echo $row['sphone'] ?>" />
                </div>
                <input class="submit" name="update" type="submit" value="Update" />
            </form>
    <?php
        }
    }
    ?>
</div>
</div>
</body>

</html>