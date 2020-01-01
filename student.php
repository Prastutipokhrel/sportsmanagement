<html> 
<title>Games Student</title>
<link rel="stylesheet" href="fontawesome/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet"href="css/event.css">
<link rel="stylesheet"href="css/explore.css">
<script type="text/javascript" src="js/icon.js"></script>
<script type="text/javascript" src="js/table.js"></script>
<script type="text/javascript" src="js/modal.js"></script>
<body style="background:linear-gradient(to bottom,rgba(0,0,0,.8),rgba(0,0,0,.5)),url(img/field.jpg) center no-repeat;
            background-size: cover;
            overflow-x:hidden;">
<header>
        <div class="menu-toggle" id="hamburger">
            <i class="fas fa-bars"></i>
        </div>
        <div class="overlay"></div>
        <div class="container" style="max-width: 120rem;
	width: 90%;
	margin: 0 auto;">
            <nav>
                <h1 class="brand"><a href="index.html">Cosmos<span>Sports</span>Club</a></h1>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Events</a></li>
                    <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
                </ul>
            </nav>
        </div>
</header>
<!--left navbar -->
<div id="sidebar">
    <ul>
        <li >Welome User!</li>
    </ul>
</div>
   <section>
        <div class="container" style="margin-left:160px;">
          <h3 class="heading">Select Events</h3>
          <div class="card-wrapper">
            <div class="card">
              <img src="img/sport.jpg" alt="card-background" class="card-img">
              <img src="img/football.jpg" alt="game image" class="game-img">
              <h1>Football</h1>
              <a href="enroll.php" class="btn">Enroll</a>
            </div>

            <div class="card">
                <img src="img/sport.jpg" alt="card-background" class="card-img">
                <img src="img/ball.jpg" alt="game image" class="game-img">
                <h1>Basketball</h1>
                <p class="job-title">Admin</p>
                <a href="enroll.php" class="btn">Enroll</a>
              </div>

              <div class="card">
                  <img src="img/sport.jpg" alt="card-background" class="card-img">
                  <img src="img/cricket.jpg" alt="game image" class="game-img">
                  <h1>Cricket</h1>
                  <a href="enroll.php" class="btn">Enroll</a>
              </div>
          </div>
        </div> 
        </div> 
      </section> 

      <!--Participating Events pop up-->
 <div id="add-events" class="modal">
    <form class="modal-content " action="process.php" method="POST">
        <div class="imgcontainer">
            <span onclick="document.getElementById('add-events').style.display='none'" class="close" title="Close">&times;</span>
            <h2 style="text-align:center;">ENROLLING IN EVENTS</h2>
        </div>

        <div class="container">
            <div>
                <input class="form-group" type="text" id="match"name="match" placeholder=" Student Name/Team Leader" >
            </div>
            <div>
                <input  class="form-group" type="text"  id="location" name="location"placeholder="Class&Batch">
            </div>
            <button type="submit" class="submit" name="submit">Submit</button>
        </div>
    </form>
</div>
      </body>
      </html>
     