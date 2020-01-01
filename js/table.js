function edit_row(no)
            {
             document.getElementById("edit_button"+no).style.display="none";
             document.getElementById("save_button"+no).style.display="block";
                
            
             var team=document.getElementById("team_row"+no);
             var score=document.getElementById("score_row"+no);
             
                
             var team_data=team.innerHTML;
             var score_data=score.innerHTML;
            
             team.innerHTML="<input type='text' id='team_text"+no+"' value='"+team_data+"'>";
             score.innerHTML="<input type='text' id='score_text"+no+"' value='"+score_data+"'>";
            }
            
            function save_row(no)
            {
             var team_val=document.getElementById("team_text"+no).value;
             var score_val=document.getElementById("score_text"+no).value;

             document.getElementById("team_row"+no).innerHTML=team_val;
             document.getElementById("score_row"+no).innerHTML=score_val;
           
             document.getElementById("edit_button"+no).style.display="block";
             document.getElementById("save_button"+no).style.display="none";
            }
            
            function delete_row(no)
            {
             document.getElementById("row"+no+"").outerHTML="";
            }
            
            function add_row()
            {
             var new_team=document.getElementById("new_team").value;
             var new_score=document.getElementById("new_score").value;
             
                
             var table=document.getElementById("data_table");
             var table_len=(table.rows.length)-1;
             var row = table.insertRow(table_len).outerHTML="<tr id='row"+table_len+"'><td id='rank_row"+table_len+"'>"+"</td><td id='team_row"+table_len+"'>"+new_team+"</td><td id='score_row"+table_len+"'>"+new_score+"</td><td><i id='edit_button"+table_len+"'  class='fas fa-edit' onclick='edit_row("+table_len+")'> <i id='save_button"+table_len+"' class='fas fa-save' onclick='save_row("+table_len+")'> <i  class='fas fa-trash-alt' onclick='delete_row("+table_len+")'></td></tr>";
            
           
             document.getElementById("new_team").value="";
             document.getElementById("new_score").value="";
            }