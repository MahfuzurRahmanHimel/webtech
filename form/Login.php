<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
    </head>
   
    <body>
        <form action="logUser.php" method="POST">    
                <table>        
               
                   <?php
                          if(!empty($_GET['message'])) {
                                $message = $_GET['message'];
                              echo "<tr><td colspan='2' style='color:red'> *".$message."</td></tr>";
                            }

                           if(!empty($_GET["data"]))
                           {
                                   $data = $_GET["data"];
			                    echo "<tr><td colspan='2' style='color:red'> *".$data."</td></tr>";
                               }

                    ?>
                       
                    <tr>
                        <td>User Name</td>
                        <td><input type="text" placeholder="Your Name" name="uname"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password"placeholder="Password" name="password"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" name="login" value="Log In"></td>
                    </tr>
                   
                </table>
            
        </form>
    </body>
</html>