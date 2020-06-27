<!-- Logout form -->
<form action="index.php" method="post">
    <nav class="container">
        <div class="row content-justify-center">
            <div class="col-8">
                <p>Welcome: <?=$_SESSION['firstname']?> <?=$_SESSION['lastname'] ?></p>
                <input class="btn btn-primary" type="submit" name="logout" value="Logout">
            </div>
        </div>
    </nav>
</form>