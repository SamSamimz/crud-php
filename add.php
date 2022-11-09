<?php
include 'login_only.php';
include 'header.php';
?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="sname" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="saddress" />
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
            <input type="text" name="sphone" />
        </div>
        <input class="submit" name="submit" type="submit" value="Save" />
    </form>
</div>
</div>
</body>

</html>