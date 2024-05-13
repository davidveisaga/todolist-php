<?php 
    // initialize errors variable
        $errors = "";

        // connect to database
        $db = mysqli_connect("127.0.0.1", "usr-php", "Userphp#123", "db_php_todo");

        // insert a quote if submit button is clicked
        if (isset($_POST['submit'])) {
                if (empty($_POST['task'])) {
                        $errors = "You must fill in the task";
                        header('location: index.php');
                }else{
                        $task = $_POST['task'];
                        $sql = "INSERT INTO tasks (task) VALUES ('$task')";
                        echo $sql;
                        mysqli_query($db, $sql);
                        header('location: index.php');
                }
        }
        
        // delete task
        if (isset($_GET['del_task'])) {
                $id = $_GET['del_task'];

                mysqli_query($db, "DELETE FROM tasks WHERE id=".$id);
                header('location: index.php');
        }

?>

        // ...