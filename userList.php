<?php
$id=$_POST['id'];
$string = "https://grootanuserlist.free.beeceptor.com/userid=".$id;
$data = json_decode(file_get_contents($string),true);
?>
<html>

<head>
    <link rel="stylesheet" href="css/users.css" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="http://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="page-header" style="margin-top: 5px;">
        <h3 style="color:black; margin-left:10px;" class="pull-left">
            User Details
        </h3>
        <div class="pull-right">
            <div class="btn-group">
                <button style="color:white; margin-right:10px; margin-top: 15px;" class="btn btn-primary"
                    onclick="window.location.href='index.php'">Back</button>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="container">
        <h1>User Details</h1>
        <div class="sub-container">
            <div class="teams">
                <img src="images/userAvatar.png" alt="">
                <div class="name">ID : <?php echo $data['userid']; ?></div>
                <div class="name">Name : <?php echo $data['name']; ?></div>
                <div class="name"> DOB :</b> <?php echo $data['dob']; ?></div>
                <div class="name">Age :</b> <?php echo $data['age']; ?></div>
                <div class="name">Address :<br></b>
                    <?php echo $data['more']['address_line1'].', '.$data['more']['address_line2'].', '.$data['more']['address_line3']; ?>
                </div>

                <div class="name">Phone number: </b> <?php echo $data['more']['phone']; ?></div>

                <?php
						if($id==1)
						{
						echo "<form action='userList.php' method='POST'>
					            <input type='hidden' name='id' value=".($id+1)."><button type='submit' class='btn btn-primary'>Next</i></button>
					          </form>";
						}
						else
						{
							echo "<form action='userList.php' method='POST'>
					                <input type='hidden' name='id' value=".($id-1)."><button type='submit' class='button'>Previous</button>
					              </form><br>";
					        echo "<form action='userList.php' method='POST'>
					                <input type='hidden' name='id' value=".($id+1)."><button type='submit' class='button'>Next</button>
					              </form>";
						}
				?>

            </div>
        </div>
    </div>
</body>

</html>