<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avikesh Sign Up</title>
    <link rel="stylesheet" href="registrationStyle.css">
</head>
<body>
    <h1 class="new_reg">New Registration</h1>

<div class="container">
    <form class="new_reg_form" action="">
        <label for="name">User Name</label>
        <input type="text"><br>

        <label for="contact number">Contact No.</label>
        <input type="number"><br>

        <label for="Email">Email</label>
        <input type="email"><br>

        <label for="Address">Address</label>
        <input type="text"><br>

        <label for="image">User Image</label>
        <input class="file" type="file"><br>

        <label for="Password">Password</label>
        <input type="password"><br>

        <label for=" Confirm password">Confirm Password</label>
        <input type="password"><br>

        <button type="submit">Register</button><br>
        <label class="" for="question for account">Already have an account? <a href="userSignIn.php">LogIn</a></label>

    </form>

</div>
</body>
</html>