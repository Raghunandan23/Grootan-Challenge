<html>

<head>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/forms.css">
</head>

<body>
    <form class="form-signin" method="post" action="signIn.php">
        <p class="text-center">
            <img src="https://i.ibb.co/FhJ1BSx/undraw-Mobile-application-mr4r.png" height="180" width="224" />
        </p>

        <div class="input-group-login box-input">
            <div class="input-group-prepend-login">
                <span class="input-group-text fa-icon">
                    <i class="fas fa-user"></i>
                </span>
            </div>
            <input type="text" class="border-0-login form-control-login input-border-none" placeholder="Username" />
        </div>
        <br />

        <div class="input-group-login box-input">
            <div class="input-group-prepend-login">
                <span class="input-group-text fa-icon">
                    <i class="fas fa-envelope"></i>
                </span>
            </div>
            <input type="email" class="border-0-login form-control-login input-border-none" placeholder="Email" />
        </div>
        <br />

        <div class="input-group-login box-input">
            <div class="input-group-prepend-login">
                <span class="input-group-text fa-icon">
                    <i class="fas fa-lock"></i>
                </span>
            </div>
            <input type="password" class="border-0-login form-control-login input-border-none" placeholder="Password"
                aria-label="Username" />
        </div>
        <br />

        <div class="input-group-login box-input">
            <div class="input-group-prepend-login">
                <span class="input-group-text fa-icon">
                    <i class="fas fa-lock"></i>
                </span>
            </div>
            <input type="password" class="border-0-login form-control-login input-border-none"
                placeholder="Confirm Password" aria-label="Username" />
        </div>
        <br />

        <p class="text-center">
            <button class="button-signup fa-color-signup">
                <strong>SIGNUP</strong>
            </button>
        </p>
        <p class="text-center">Already have an Account? <a href="signIn.php">Sign In</a></p>
    </form>
</body>

</html>