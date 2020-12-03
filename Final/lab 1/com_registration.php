<?php
    include_once "../../php_codes/complainant_registration_validation.php";
?>
<html>
    <head>
        <title>complainant Registration</title>
        <link rel="stylesheet" type="text/css" href="../../css/complainant_reg.css">
    </head>
    <body>
        <center>
            <form  action="" method="POST">
                <table>
                    <tr >
                        <td><img src="../../assets/justicelogo.png"; width="380" height="480"></td>
                        <td align="right" id="registration-box-style">
                            <center><h4 style="color:Green;">Register as complainant</h4></center>
                            <label for="profile">Profile Picture: </label><input type="file" name="reg_pp" accept="image/*"><span style="color:red;">*<?php echo $err_reg_pp;?></span><br><br>
                            <label for="fullname">Full Name: </label><input type="text" name="reg_fullname" placeholder="Full Name" value="<?php echo $reg_fullname; ?>"><span style="color:red;">*<?php echo $err_reg_fullname;?></span><br><br>
                            <label for="username">User Name: </label><input type="text" name="reg_username" placeholder="User Name" value="<?php echo $reg_username; ?>"><span style="color:red;">*<?php echo $err_reg_username;?></span><br><br>
                            <label for="email">Email: </label><input type="text" name="reg_email" placeholder="Email" value="<?php echo $reg_email; ?>"><span style="color:red;">*<?php echo $err_reg_email;?></span><br><br>
                            <label for="phone">Phone: </label><input type="number" name="reg_phone" placeholder="Phone Number" value="<?php echo $reg_phone; ?>"><span style="color:red;">*<?php echo $err_reg_phone;?></span><br><br>
                            <label for="password">Password: </label><input type="password" name="reg_pass" placeholder="Password"><span style="color:red;">*<?php echo $err_reg_pass;?></span><br><br>
                            <label for="confirm_password">Confirm Password: </label><input type="password" name="reg_cpass" placeholder="Confirm Password"><span style="color:red;">*<?php echo $err_reg_cpass;?></span><br><br>
                            <label for="nid">NID: </label><input type="number" name="reg_nid" placeholder="NID" value="<?php echo $reg_nid; ?>"><span style="color:red;">*<?php echo $err_reg_nid;?></span><br><br>
                            <label for="birthday">Birthday: </label><input type="date" name="reg_dob"><span style="color:red;">*<?php echo $err_reg_dob;?></span><br><br>
                            <label for="gender">Gender: </label><input type="radio" name="reg_gender" value="Male"> Male
                            <input type="radio" name="gender" value="Female"> Female<span style="color:red;">*<?php echo $err_reg_gender;?></span><br><br>
                            <label for ="address">City: </label><input type="text" name="city" placeholder="City"><span style="color:red;">*<?php echo $err_reg_city;?></span><br><br>
                            <label for ="address">State:<input type="text" name="state" placeholder="State"><span style="color:red;">*<?php echo $err_reg_state;?></span><br><br>
                            <label for ="address">Zip/Postal:<input type="text" name="zip" placeholder="postal/Zip-Code"><span style="color:red;">*<?php echo $err_reg_zip;?></span><br><br>
                            <a href="../../pages/landing.php"><u>Already registered!go to login</u></a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" class="button" name="reg_button"value="Register"><br><br>
                        </td>

                    </tr>
                </table>
            </form>
        </center>
    </body>
</html>
