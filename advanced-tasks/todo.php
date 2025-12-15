<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
    <style>
        label {
            display: block;
        }

        input,
        div {
            display: block;
            margin: 10px 0px;
            border-radius: 10px;
            padding: 10px;
            border: 1px solid grey;
        }
    </style>
</head>

<body>
    <?php
    session_start();
    if (!isset($_SESSION['tasks'])) {
        $_SESSION['tasks'] = [];
    }

    if (isset($_POST['task']) && $_POST['task'] !== '') {
        array_push($_SESSION['tasks'], $_POST['task']);
    }

    ?>
    <form action="#" method="post">
        <label>
            Task: <input type="text" name="task">
        </label>
        <input type="submit" value="ADD">
    </form>

    <?php
    foreach ($_SESSION['tasks'] as $task) {
        echo "<div>$task</div>";
    }
    ?>
</body>

</html>