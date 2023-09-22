<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
<body>
    <h2>Login</h2>

    <form method = "POST">
        <input type="text" name="user" placeholder="user">
        <br>
        <input type="password" name="pass" placeholder="password">
        <br>
        <input type="submit">
    </form>

    <?php 

    if (isset($_POST["user"]) && isset($_POST["pass"])) {

        $dic = ['pep' => 'contrapep', 'maria' => 'contramaria'];

        $user = $_POST["user"];
        $pass = $_POST["pass"];
        $esValid = false;

        foreach($dic as $name => $password) {
            if ($user == $name && $pass == $password) {
                $esValid = true;
                
            }
        }

        if ($esValid == true) {
            echo "<br>"."Login correcte!";
        } else {
            echo "<br>"."Login incorrecte!";
        }
    }
    
    ?>

</body>
</html>