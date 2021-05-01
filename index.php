<html>

<head>
    <link rel="stylesheet" href="css/userList.css">
</head>

<body>
    <div class="jumbotron">
        <div class="user">
            <h1>Users of Grootan</h1>
        </div>
        <ul class="list-group">
            <?php
                $string = "https://grootanuserlist.free.beeceptor.com/users";
                $data = json_decode(file_get_contents($string),true);
                foreach($data as $val)
                {
                    echo "<div class='row'>
                            <div class='col-md-12 col-lg-6'>
                                <div class='member-card'>
                                    <div class='member-pic'><img class='member-pic rounded-circle' src='images/userAvatar.png'/></div>
                                        <div class='member-card-details'>
                                            <div class='member-name'>".$val['name']."</div>
                                        </div>
                                        <form action='userList.php' method='POST'>
                                        <input type='hidden' name='id' value='".$val['userid']."'>
                                        <div class='btn-fired'><button type='submit' class='btn'>View Details</button></div>
                                        </form>
                                </div>
                            </div>";
                }
            ?>
            <form action="signIn.php" method="POST">
                <div class="btn-fired" style="margin-left:1000px;"><button type="submit" class="btn">Logout</button>
                </div>
            </form>
        </ul>
    </div>
</body>

</html>