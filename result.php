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
        <li onclick="document.getElementById('add-events').style.display='block'">Enroll in Event</li>
        <li onclick="document.getElementById('result').style.display='block'">Result</li>
    </ul>
</div>
<section>
    <div class="container" style="margin-left:160px;">
         <h3 class="heading">Results</h3>
        <div class="card-wrapper">
        <form class="modal-content " action="#" method="POST">
        <br/>
        <div class="containers" style="padding:12px; background:white;">
            <table  class="table table-hover table-bordered auto-index " id="data_table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col"style="color:green;">Rank</th>
                    <th scope="col" style="color:green;">Team/Player</th>
                    <th scope="col"style="color:green;">Score</th>
                    <th style="color:green;" class="text-right">ACTIONS</th>
                </tr>
                </thead>
                <tbody>
                <tr id="row1">
                    <td></td>
                    <td id="team_row1">Civil 2016</td>
                    <td id="score_row1">20</td>
                    <td class="text-right" >
                        <i class="fas fa-edit" id="edit_button1"  onclick="edit_row('1')"></i>
                        <i class="fas fa-save" id="save_button1"  onclick="save_row('1')"></i>
                        <i class="fas fa-trash-alt" onclick="delete_row('1')"></i>
                    </td>
                </tr>
                <tr id="row2">
                    <td id="rank_row2"></td>
                    <td id="team_row2">Computer 2016</td>
                    <td id="score_row2">50</td>
                    <td class="text-right" >
                        <i class="fas fa-edit" id="edit_button2"  onclick="edit_row('2')"></i>
                        <i class="fas fa-save" id="save_button2"  onclick="save_row('2')"></i>
                        <i class="fas fa-trash-alt" onclick="delete_row('2')"></i>
                    </td>
                </tr>
                <tr>
                    <td id="new_rank"></td>
                    <td><input type="text" id="new_team"></td>
                    <td><input type="text" id="new_score"></td>
                    <td><i class="fas fa-plus"onclick="add_row();"></i></td>
                </tr>
                </tbody>
            </table>
        </div>
    </form>
        </div>
    </div> 
</section> 
      </body>
      </html>
     
