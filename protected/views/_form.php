
<!DOCTYPE html>

<html lang="pl">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Input Form</title>
    <link rel="stylesheet" href="../css/main.css">
</head>

<body>

    <div id="container">
        <form action="../actions/input.php" method="post">
            <p>
                <label for="imie">imie:</label>
                <input type="text" id="imie" name="imie" value="<?php echo $_POST['imie'] ?? '' ?>">
            </p>
            <p>
                <label for="test">test:</label>
                <input type="text" id="test" name="test" value="<?php echo $_POST['test'] ?? '' ?>">
            </p>
            <p>
                <label for="json">json:</label>
                <textarea id="json" name="json" rows="4" cols="50"></textarea>
            </p>
            <br/>
            <input type="submit" value="Submit">
        </form>
    </div>

</body>

</html>



