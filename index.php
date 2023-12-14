<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SISTEM PENGELOLAAN SURAT</title>
    <link rel="stylesheet" href="stylelogin.css">
</head>

<body>
<form action="login.php" method="POST">
        <table>
            <H1>SISTEM INFORMASI PENGELOLAAN SURAT</H1>
            <tr>
                <td colspan="2"><img id="logo" src="images\logo.jpg" alt=""></td>
            </tr>
            <tr>
                <td colspan="2"><input type="text" name="username" placeholder="Username"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="password" name="password" placeholder="Password"></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="login" value="Login">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>