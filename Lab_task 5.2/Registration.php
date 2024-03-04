<html>
    <body>
    <table border="1" align="center">
                <tr>
                    <td colspan="3" align = "left"><img src="1.png"></td>
                    <td colspan="2" align = "right"><a href="PublicHome.php">Home |</a></td>
                    <td align = "right"><a href="Login.php">Login |</a></td>
                    <td align = "right"><a href="Registration.php">Registration |</a></td>
                    
                </tr>
                <tr>
                    <td colspan="9" align = "left">
                    <form method="get" action= "RegistrationBackend.php" enctype="">
                        <fieldset>
                            <legend>Registration</legend>
                            Name :<input type="text" name="name" value=""><br><hr>
                            Email :<input type="text" name="email" value=""><br><hr>
                            UserName :<input type="text" name="username" value=""><br><hr>
                            Password :<input type="text" name="" value="password"><br><hr>
                            Confirm Password :<input type="text" name="confirmpassword" value=""><br><hr>
                        <fieldset>
                            <legend> Gender</legend>
                            <input type="radio" name="gender" value = "Male">Male
                            <input type="radio" name="gender" value = "Female">Female
                            <input type="radio" name="gender" value = "Other">Other
                            <hr>
                        </fieldset>
                        <fieldset>
                            <legend> Date of Birth</legend>
                            <input type="date" name="date" value = "">Male
                            <hr>
                            <input type = "submit" name= "submit" value="Submit">
                            <input type="reset" name ="reset" value="Reset">
                                                        
                        </fieldset>
                    </fieldset>
                    </form>
                    </td>
                </tr>
                <tr>
                    <td colspan="9" align="center">
                        <h6>Copyright @ 2017</h6></br>
                    </td>
                </tr>
            </table>
    </body>
</html>