<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> home page</title>
    <link rel="stylesheet" href="bootstrap/css/custom.css">
</head>
<body>
<div class="form_class">
    <form action="saveUser.php" method="post">
        <input type="text "placeholder="name here" name="x" required class="s_input"><br>
        <input type="email" placeholder="email here" name="y" required class="s_input"><br>
        <input type="password" placeholder="password here" name="z" required class="s_input"><br>
        <input type="submit"value="save" name="btn_save" class="input_btn"><br>
        <a href="viewUsers.php" class="a_link"> view user</a><br>
    </form>
</div>

</body>
</html>






