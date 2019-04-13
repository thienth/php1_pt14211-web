<?php if(isset($_GET['err'])):?>
    <span style="color: red"><?= $_GET['err']?></span>
<?php endif?>
<form action="index.php" method="post">
    <label for="">Username</label>
    <input type="text" name="username">
    <br>
    <label for="">Password</label>
    <input type="password" name="pwd">
    <br>
    <button type="submit">Login</button>
</form>
