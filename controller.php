<?php
include 'dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Cherry Assignment</title>
</head>

<body>
    <?php
    // insert statement
    if (isset($_POST['submit'])) {
        $NAME = $_POST['NAME'];
        $SECTION = $_POST['SECTION'];
        $EMAIL = $_POST['EMAIL'];
        $PASSWORD = $_POST['PASSWORD'];

        $sql = "INSERT INTO `signup`(`NAME`, `SECTION`, `EMAIL`, `PASSWORD`) VALUES (?, ?, ?, ?)";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("ssss", $NAME, $SECTION, $EMAIL, $PASSWORD);

        if ($stmt->execute()) { ?>

            <script type="text/javascript">
                swal("Success!", "Information has been added.", "success")
                    .then(function() {
                        window.location = "login.php";
                    });
            </script>

        <?php }


        // select statement
    }
    if (isset($_POST['login'])) {
        $EMAIL = $_POST['EMAIL'];
        $PASSWORD = $_POST['PASSWORD'];

        $sql = "SELECT * FROM `signup` WHERE `EMAIL`= ? AND `PASSWORD` =?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("ss", $EMAIL, $PASSWORD);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        if ($result->num_rows == 1) {
            $name = "SELECT `NAME` FROM `signup` WHERE `EMAIL`= ? AND `PASSWORD` =?";
            $st = $con->prepare($sql);
            $st->bind_param("ss", $EMAIL, $PASSWORD);
        ?>

            <script type="text/javascript">
                swal("Success!", "Welcome", "success")
                    .then(function() {
                        ;
                        window.location = "landing.php";
                    });
            </script>

        <?php
        } else {

        ?>
            <script type="text/javascript">
                swal("Wrong Password or Email", "ERROR")
                    .then(function() {
                        window.location = "login.php";
                    });
            </script>
        <?php
        }
    };


    if (isset($_POST['update'])) {
        $NAME = $_POST['NAME'];
        $SECTION = $_POST['SECTION'];
        $EMAIL = $_POST['EMAIL'];
        $PASSWORD = $_POST['PASSWORD'];
        $id = $_POST['id'];

        $sql = "UPDATE `signup` SET `NAME` = ?,`SECTION` = ?, `EMAIL` = ?, `PASSWORD` = ? WHERE id = ?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("sssss", $NAME, $SECTION, $EMAIL, $PASSWORD, $id);
        if ($stmt->execute()) { ?>
            <script type="text/javascript">
                swal("Success!", "Information has been updated.", "success")
                    .then(function() {
                        window.location = "landing.php";
                    });
            </script>
        <?php }
    }
    if (isset($_POST['delete'])) {
        $id = $_POST['id'];

        $sql = "DELETE FROM signup WHERE id = ?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("s", $id);
        if ($stmt->execute()) { ?>
            <script type="text/javascript">
                swal("Success!", "Information has been deleted.", "success")
                    .then(function() {
                        window.location = "landing.php";
                    });
            </script>

    <?php }
    }
    ?>



</body>

</html>