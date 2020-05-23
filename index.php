<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
        $name=$email=$pass='';
    ?>
    <header class="header">
        <img src="css/logo.png" class="logo">
        <div>
            <h1>Hogwarts</h1>
            <h4>School of witchcraft and wizardary</h4>
        </div>
    </header>
    <main>
        <div class="description">
            <div class="text">
                <img src="css/hogwarts-7932.png" alt="">
                <div id="text2">
                    <h1 class="pH1">Another year at Hogwarts</h1>
                    <p>
                        Application are invited for the admission in next year at Hogwarts School of witchcraft and
                        wizardary
                        till 7th June 2020.
                        To convert yourself into a great witch or wizard and enjoy and learn games like Quidditch Hurry!
                        and
                        fill the form.
                    </p>
                </div>
                <img src="css/owl.png" alt="">
                Send Your E-OWL
            </div>

        </div>

        </div>
        <div class="form_container">
            <h2>Registration Form</h2>
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                <div class="form_group">
                    <input placeholder="Full Name" type="text" name="Name" id="name" required>
                    <label class="label" for="name">Full Name</label>

                </div>

                <div class="form_group">
                    <input placeholder="Email" type="email" name="email" id="email" required>
                    <label class="label" for="email">Email</label>
                </div>

                <div class="form_group">
                    <input placeholder="Password" type="password" name="password" id="pass" required>
                    <label class="label" for="pass">Password</label>
                </div>

                <div class="form_group">
                    <input class="cpass" placeholder="Confirm Password" type="password" name="password" id="Cpass"
                        required>
                    <label class="label" for="Cpass"> Confirm Password</label>
                </div>

                <!-- <div class="form_group-2">
                    <label for="DOB">DOB</label>
                    <input type="date">
                </div> -->
                <button type="submit" class="btn">Continue &rarr;</button>
            </form>

        </div>
    </main>



    <!-- ----------------------------------------- PHP ---------------------------------------- -->
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $name = $_REQUEST['Name'];
        $email = $_REQUEST['email'];
        $pass = $_REQUEST['password'];
        
        echo "<div id=\"text1\"><h1 class=\"pH1\">Welcome To Hogwarts</h1><h2 class=\"pH1\">";
        echo $name;
        echo "</h2><p><h3>Your Username is :&nbsp </h3>";
        echo $email;
        echo "<br><h3>Your Password is :&nbsp;</h3>";
        echo $pass;
        echo "</p></div>\n";
      }
?>

</body>

</html>