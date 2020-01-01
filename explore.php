<?php
    include('process.php')
?>
<html>
<link rel="stylesheet" href="fontawesome/css/all.css">
<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="css/explore.css">
<link rel="stylesheet" href="css/modal.css">
<link rel="stylesheet" href="css/table.css">
<script type="text/javascript" src="js/table.js"></script>
<script type="text/javascript" src="js/modal.js"></script>
<script type="text/javascript" src="js/icon.js"></script>
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
                    <li><a href="startup.php">Home</a></li>
                    <li><a href="event.php">Events</a></li>
                    <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
               
                </ul>
            </nav>
        </div>
</header>
<div id="sidebar">
    <div class="toggle-btn" onclick="toggleSidebar()">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <ul>
        <li onclick="document.getElementById('add-events').style.display='block'">Add Event</li>
        <li  onclick="document.getElementById('update').style.display='block'">Update</li>
        <li onclick="document.getElementById('result').style.display='block'">Result</li>
    </ul>
</div>
<!--Adding Events pop up-->
<div id="add-events" class="modal">
    <form class="modal-content " action="process.php" method="POST">
        <div class="imgcontainer">
            <span onclick="document.getElementById('add-events').style.display='none'" class="close" title="Close">&times;</span>
            <h2 style="text-align:center;">ADD EVENTS</h2>
        </div>

        <div class="container">
            <div>
                <input class="form-group" type="text" id="match"name="match" placeholder=" Match Between:" >
            </div>
            <div>
                <input  class="form-group" type="text"  id="location" name="location"placeholder="Location:">
            </div>
            <div >
                <input class="form-group" type="date" id="date" name="date">
            </div>
            <div>
                <input class="form-group" type="time"  id="time" name="time" >
            </div>

            <button type="submit" class="submit" name="submit">Submit</button>
        </div>
    </form>
</div>
<!--Updating Scores-->
<div id="update" class="modal">
    <form class="modal-content " action="#" method="POST">
        <div class="imgcontainer">
            <span onclick="document.getElementById('update').style.display='none'" class="close" title="Close">&times;</span>
            <h2 style="text-align:center;">DISPLAYING RESULTS</h2>
        </div>
        <br/>
        <div class="container" style="padding:12px;">
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
    </body>
</html>