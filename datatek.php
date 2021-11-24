html> 
    <head>
         <title>SAFESQUID</title>
          <style>
           body{ background-image: linear-gradient(black, #6c5ce7, #81ecec); } 
           table { border-collapse: collapse; width: 85%; color: #588c7e; font-family: monospace; font-size: 25px; text-align: left; border: 1px black solid; align:center; margin-right:auto; margin-left:auto; margin-top:15%; }
            th { background-color: #588c7e; color: white; border: 1px black solid; } 
            tr{ background-color: #f2f2f2; border: 1px black solid; color: black; }
             td{ border: 1px black solid; } 
             </style>
              </head>

               <body> 
                   <table>
                        <tr> 
                            <th>sr.no</th>
                             <th>name</th>
                              <th>email</th>
                               <th>date and time</th>
                             </tr>
                             <?php
 $conn=mysqli_connect("localhost","root","","datatek");
if($conn->connect_error)
{
    die("Connection failed: ".$conn->connect_error);
}
$sql="SELECT * FROM safesquid";$result=$conn->query($sql);
if($result->num_rows>0)
{
    while($row=$result->fetch_assoc())
    {
        echo "<tr>\n
        <td>".$row["sr.no"]."</td>\n                     
           <td>".$row["name"]."</td>\n                      
             <td>".$row["email"]."</td>\n                        
             <td>".$row["date and time"]."</td>\n</tr>";
            }
            echo "</table>";
        }
            else{echo "0 results";
            }
            $conn->close();
            ?>
            </table>
        </body>
    </html>