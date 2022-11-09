<?php
include 'login_only.php';
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>

    <?php

    $conn = new mysqli("localhost", "root", "", "project") or die("Connection Failed");

    $sql = "SELECT * FROM student JOIN studentclass WHERE student.sclass = studentclass.cid";

    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {


    ?>

        <table cellpadding="7px">
            <thead>
                <th>Id</th>
                <th>Name</th>
                <th>Address</th>
                <th>Class</th>
                <th>Phone</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php
                $count = 0;
                while ($rows = mysqli_fetch_assoc($result)) {
                    $count++;
                ?>
                    <tr>
                        <td><?php echo $count ?></td>
                        <td><?php echo $rows['snane'] ?></td>
                        <td><?php echo $rows['saddress'] ?></td>
                        <td><?php echo $rows['cname'] ?></td>
                        <td><?php echo $rows['sphone'] ?></td>
                        <td>
                            <a href='edit.php?sid=<?php echo $rows['sid'] ?>'>Edit</a>
                            <a href='delete_inline.php?id=<?php echo $rows['sid'] ?>'>Delete</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    <?php

    } else {
        echo "<div class='alert alert-danger'>No data here!</div>";
    }
    mysqli_close($conn);
    ?>
</div>
</div>
</body>

</html>