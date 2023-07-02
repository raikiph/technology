<form action="<?php echo BASE_URL ?>/login/dangnhap" method="post">
<?php
    if(isset($msg)){
        echo '<span style="color:blue;font-weight:bold;">' .$msg. '</span>';
    }
    ?>
    <table>
    <tr>
        <td>User name</td>
        <td><input type="text" name="username"></td>
    </tr>
    <tr>
        <td>Password</td>
        <td><input type="password" name="password"></td>
    </tr>
    <tr>
        <td><input type="submit" name="login" value="Login"></td>
    </tr>
</table>

</form>