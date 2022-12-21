<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<br>
<body>
<form action="login.php">

    <h1>Login</h1>
    <?php if (isset($_GET['error'])) { ?>
      <p class="error"><?php echo$_GET['error'];?></p>
      <?php } ?>
    <br>
    <br>
    <div class="edit">
    
    <label for="">Username</label>
        <div class="gtau">
        
        <input type="text" name="nama" ><br>
        </div>
        <br>
        <label for="">Password</label>
        <div class="gtau">
        <input type="password" name="password"><br>
        </div>
        <br>
        <label for="">Age</label>
        <div class="gtau">
        <input type="number" name="age"><br>
        <br>
        <label for="">Email</label>
        <div class="gtau">
        <input type="text" name="email"><br>
        </div>
        <br>
        <br>
        <input type="submit" name="Submit" value="Submit">

        </div>
    </form>
    </div>
    <br>
    
    

</body>
</html>