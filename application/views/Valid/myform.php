<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validasi</title>
</head>
<body>
    <?php echo validation_errors(); ?>
    <?php echo form_open('formvalid/insert'); ?>

    <table> 
        <tr>
            <td><label for="username">Username</label></td> 
            <td><input type="text" name="username" size="50" /></td> 
        </tr>
        <tr>
            <td><label for="password">Password</label></td> 
            <td><input type="password" name="password" size="50"></td> 
        </tr>
        <tr>
            <td><label for="confirmpw">Password Confirm</label></td> 
            <td><input type="password" name="confirmpw" size="50"></td> 
        </tr>
        <tr>
            <td><label for="email">Email Address</label></td> 
            <td><input type="text" name="email" size="50"></td> 
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Create news item" /></td>
        </tr>
</body>
</html>