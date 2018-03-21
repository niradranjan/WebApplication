<?php
      	
      	include ('Connection.php');
    	
        
        print"<table border size=1><tr><th>Id</th>
        <th>Matches_Played</th>
        <th>Runs_Scored</th>
        <th>Balls_Faced</th>
        </tr>";
        
        $query = "SELECT * FROM batsman";
		$result = $conn->query($sql);
        //$query="select * from batsman";
        //$result=mysql_query($query);
        //echo ($result);
        while($row=mysql_fetch_array($result))
        {
            $Id=$row["batsman_id"];
            $Matches_Played=$row["matches_played"];
            $Runs_Scored=$row["runs_scored"];
            $Balls_Faced=$row["balls_faced"];
            echo"<tr><td>$Id</td>
            <td>$Matches_Played</td>
            <td>$Runs_Scored</td>
            <td>$Balls_Faced</td>
            </tr>";
        }
        echo"</table>";
       
     $conn->close();
      	?>