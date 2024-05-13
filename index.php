<!DOCTYPE html>
<html>
<head>
        <title>ToDo List App</title>
</head>
<body>
        <div >
                <h2 >ToDo List App (PHP and MySQL)</h2>
        </div>
        <form method="post" action="process.php" >
                <input type="text" name="task" >
                <button type="submit" name="submit" id="add_btn" >Add Task</button>
        </form>
        <br>
        <div>
        <table>
                <thead>
                        <tr>
                                <th>#</th>
                                <th>Tasks</th>
                                <th>Delete</th>
                        </tr>
                </thead>

                <tbody>
                        <?php 
                        $db = mysqli_connect("127.0.0.1", "usr-php", "Userphp#123", "db_php_todo");
                        // select tasks 
                        $tasks = mysqli_query($db, "SELECT * FROM tasks");
                        $i = 1;
                                while ($row = mysqli_fetch_array($tasks)) { ?>
                                <tr>
                                        <td> <?php echo $i; ?> </td>
                                        <td> <?php echo $row['task']; ?> </td>
                                        <td> <a href="process.php?del_task=<?php echo $row['id'] ?>">x</a> </td>
                                </tr>
                        <?php $i++; } 
                        ?>  
                </tbody>
        </table>
        </div>
</body>
</html>