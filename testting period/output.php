<html>
                    <head>
                    <title>Display Output </title>
                    </head>
                    <body>
                     <br><br><br>
                    <center>
                    <h2> The following information was entered and accepted.</h2>
                    </center>
                    <table width="300" border="1" 
bgcolor="#EEFFEE" align="center" cellspacing=2 cellpadding=5>
                    <tr> 
                    <td>Full Name </td>
                    <td>
         <!-- //--- Prints the value of the name field-->
                    <h3><?php echo $_POST['name']; ?> </h3>
                    </td>
                    </tr>
                    <tr> 
                    <td>e-mail </td>
                    <td>
       <!--   Prints the value of the e-mail field-->
                    <h3><?php echo $_POST['email']; ?> </h3>
                    </td>
                    </tr>
                     <tr> 
                    <td>Address </td>
                    <td>
         <!-- //--- Prints the value of the address field-->
                    <h3><?php echo $_POST['address']; ?> </h3>
                    </td>
                    </tr>
                    <tr> 
                    <td>Date of Birth</td>
                    <td>
         <!-- //--- Prints the value of the Date of Birth field-->
                    <h3> <?php echo $_POST['birth_month']," ",
$birth_day,"  ",$birth_year; ?> </h3>
                    </td>
                    </tr>
                    <tr>
                    <td>
                    You prefer these books 
                    </td>
                    <td>
                    <h3>
          <?php
                    if ($_POST['fiction']) 
                    { 
                    echo "fiction <br>";
                    }
                    if ($_POST['action']) 
                    { 
                    echo "action <br>";
                    }
                    if ($thrillers) 
                    {
                    echo "thrillers <br>";
                    }
                    if ($horror) 
                    { 
                    echo "horror <br>";
                    }
                     if ($comedy) 
                    {
                    echo "comedy ";
                    }
                    ?>
                    </h3>
                    </td>
                    </tr>
                    <tr> 
                    <td height="21">You like : 
                       </td>
                    <td>
                    <h3>
          <?php
                     for ($i=0;$i<count($hobbies);$i++)
                    {
                    echo $hobbies[$i], "<br>";
                    }
          ?>
                    </h3>
                    </td>
          </tr>
          </table>
          </body>
          </html>