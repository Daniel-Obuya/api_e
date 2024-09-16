<?php

class signup {
    public function sign(){
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            max-width: 400px;
            margin auto;
            padding: 20px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2 class="my-4">Sign-Up Form</h2>
        <form action="insert.php" method="POST" class="needs-validation" novalidate>
        <div class="mb-3">
        <label for="username" class="form-label">Full name</label>
        <input type="text" class="form-control" id="fullname" name="fullname" required>
        <div class="invalid-feedback"> Please enter your full name.</div>
</div>
<div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
                <div class="invalid-feedback">Please enter a valid email.</div>
            </div>
           
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
                <div class="invalid-feedback">Please enter a password.</div>
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
                <div class="invalid-feedback">Please enter a valid username.</div>
            </div>


            <div class="form-group">
    <label class="form-label">Gender</label>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" id="male" name="gender" value="Male" required>
        <label class="form-check-label" for="male">Male</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" id="female" name="gender" value="Female" required>
        <label class="form-check-label" for="female">Female</label>
    </div>
    <div class="invalid-feedback">Please select your gender.</div>
<div class="mb-3">
                <label for="role" class="form-label">Role</label>
                <select class="form-select" id="role" name="role" required>
                    <option value="">Choose...</option>
                    <option value="Admin">Admin</option>
                    <option value="User">User</option>
                    <option value="Manager">Manager</option>
                </select>
                <div class="invalid-feedback">Please select your role.</div>
            </div>

            <button type="submit" class="btn btn-primary">Sign Up</button>
        </form>
</div>
    
</body>
</html>
<?php
    }
}
