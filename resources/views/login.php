<!-- Login Form -->
<form action="index.php" method="post">
<section class="container">

    <div class="row content-justify-center">
        <!-- Title -->
        <div class="col-8">
            <h2>Login</h2>
            <p>Welcome</p>
        </div>

        <!-- Control Email -->
        <div class="form-group col-8">
            <label for="email">Email address</label>
            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <!-- Control Password -->
        <div class="form-group col-8">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password" aria-describedby="passwordHelp">
            <small id="passwordHelp" class="form-text text-muted">Write a valid password</small>
        </div>

        <!-- Buttons -->
        <div class="form-group col-8">
<!--            <p>Add message via Session here</p>-->
            <input class="btn btn-primary" type="submit" name="login" value="Login">
        </div>

        <!-- Links to another views, Forgot password add new user  -->
<!--        <div class="col-8">
            <ul>
                <li><a href="#" title="Forgot your password?">Forgot your password?</a></li>
                <li><a href="#" title="I'm a new user">I'm a new user</a></li>
            </ul>
        </div>-->
    </div>

</section>
</form>