<?php 
    if( session_status() != 2 ) {
        session_start();
    }

    $logged_in = False;
    if (isset($_SESSION["handle"])){
        // echo $_SESSION["handle"];
        $logged_in = True;

    } else {
        // echo "Username is not set.";
        $logged_in = False;
    }
?>

<!DOCTYPE html>
<html lang="en-us">
<head> <!-- Meta Data -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="main.css">
  <title>BeanzCroc</title>
  <!-- add links to fonts here -->
</head>
<body>
  <header> <!-- Header bar at top -->
    <a href="home.php"> <!-- "Logo" and link back to the home page -->
      <h1>BeanzCroc</h1>
    </a>
        <nav> <!-- Navigation buttons -->
      <ul>
        <li class="navButtons">
          <a 
          <?php 
            if (!$logged_in){
                echo "hidden ";
            }
          ?>
          href="settings.php">Settings</a>
        </li>

        <?php 
            if ($logged_in == False){
                echo "<li class='navButtons'>
                    <a href='registerAccount.php'>Register</a></li>";

                echo "<li class='navButtons'>
                    <a href='loginPage.php'>Login</a></li>";
            } else {
                echo "<li class='navButtons'>
                    <a href='userProfile.php'>".$_SESSION["handle"]."</a></li>";

                echo "<li class='navButtons'>
                    <a href='clear_session.php'>Logout</a></li>";
            }             
        ?>

        <li class="navButtons">
          <a href="home.php">Home</a>
        </li>
      </ul> 
    </nav>
  </header>

  <!-- Starts body for Likes Page -->
  <div>
    <h5 id="likesBeanzTitle">Beanz Title Here</h3>
    <h2 id="likesTitle" class="colTitle">Likes</h2>
      
    <div id="likesCol" class="nameListCol">
        
      <!-- One Likes Entry -->
      <div class="nameListEntry">
        <p id="nameListP">LikesName</p>
      </div>

    </div>
  </div>
    
</body>
</html>