
<html>
<head>
    <title></title>
    <style type="text/css">
	 .auto-style1 {
            width: 100%;
            border-collapse: collapse;
            border-style: solid;
            border-width: 3px;
        }
        .auto-style3 {
            width: 176px;
            height: 116px;
        }
        .auto-style4 {
            width: 219px;
        }
        .auto-style6 {
            font-size: xx-large;
            height: 96px;
        }
        .auto-style7 {
            font-family: "Yu Gothic UI";
            border-left-color: #A0A0A0;
            border-right-color: #C0C0C0;
            border-top-color: #A0A0A0;
            border-bottom-color: #C0C0C0;
            padding: 1px;
        }
        .auto-style8 {
            width: 100%;
            border: 3px solid #808080;
        }
        .auto-style10 {
            width: 219px;
            height: 96px;
        }
        .auto-style11 {
            height: 96px;
        }
        .auto-style12 {
            width: 333px;
        }
        .auto-style14 {
            width: 573px;
        }
        .auto-style16 {
            width: 119px;
        }
        .auto-style18 {
            width: 119px;
            height: 12px;
        }
        .auto-style21 {
            width: 133px;
            height: 39px;
        }
        .auto-style22 {
            height: 12px;
        }
        .auto-style23 {
            width: 129px;
        }
        .auto-style24 {
            width: 129px;
            height: 12px;
        }
        .auto-style25 {
            font-family: "Poor Richard";
            border-left-color: #A0A0A0;
            border-right-color: #C0C0C0;
            border-top-color: #A0A0A0;
            border-bottom-color: #C0C0C0;
            padding: 2px;
        }
        .auto-style26 {
            width: 333px;
            height: 25px;
        }
        .auto-style27 {
            width: 573px;
            height: 25px;
        }
        .auto-style28 {
            height: 25px;
        }
       </style>
</head>
<body>
    
    <div>
    
        <table class="auto-style1">
            <tr>
                <td class="auto-style10">
                    <img alt="" class="auto-style3" src="images1.jpg" /></td>
                <td class="auto-style6">&nbsp;&nbsp;&nbsp;&nbsp; <span class="auto-style7">Reader's&nbsp;&nbsp; Resource&nbsp;&nbsp; Management</span></td>
                <td class="auto-style11"></td>
            </tr>
            <tr>
                <td class="auto-style4">&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
        </table>
    
    </div>
        <table cellpadding="2" class="auto-style8">
            <tr>
                <td class="auto-style12">&nbsp;</td>
                <td class="auto-style14">&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td class="auto-style12">&nbsp;</td>
                <td class="auto-style14" style="font-size: x-large">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="auto-style25">&nbsp;&nbsp; Login</span></td>
                <td></td>
            </tr>
            <tr>
                <td class="auto-style12"></td>
                <td class="auto-style14"></td>
                <td></td>
            </tr>
            <tr>
                <td class="auto-style12">&nbsp;</td>
                <td class="auto-style14">
                    <table class="auto-style8">
                        <tr>
                            <td class="auto-style16">&nbsp;</td>
                            <td class="auto-style23">&nbsp;</td>
                            <td>
							
							</td>
                        </tr>
                        <tr>
                            <td class="auto-style16">&nbsp;</td>
                            <td class="auto-style23">&nbsp;</td>
                            <td><?php 
							if(isset($_REQUEST["reg"]))
							{
								echo"Registration Completed";
							}
							?><?php 
							if(isset($_REQUEST["md"]))
							{
								echo"Password Sucessfully Send On Your Email";
							}
							if(isset($_REQUEST["err"]))
							{
								echo"Invalid UserName Or Password";
							}
							if(isset($_REQUEST["re"]))
							{
								echo"Login Needed First";
							}
							if(isset($_REQUEST["ans"]))
							{
								echo"Your Profile Sucessfully Updated Please Login ";
							}
							if(isset($_REQUEST["mr"]))
							{
								echo"Session is Expire Please Login Again ";
							}
							?>
							</td>
                        </tr>
                        <tr>
                            <td class="auto-style16">&nbsp;</td>
                            <td class="auto-style23">&nbsp;</td>
                            <td>
						</td>
                        </tr>
                        <tr>
                            <td class="auto-style16">&nbsp;</td>
                            <td class="auto-style23">&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
						<form method="POST" action="loginpro.php" >
                        <tr>
                            <td class="auto-style16">&nbsp;</td>
                            <td class="auto-style23">UserName</td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="text" name="username" required>
                            </td>
                        </tr>
                        <tr>
                            <td class="auto-style16">&nbsp;</td>
                            <td class="auto-style23">&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="auto-style16">&nbsp;</td>
                            <td class="auto-style23">Password</td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="password" name="password" required>
                            </td>
                        </tr>
                        <tr>
                            <td class="auto-style16">&nbsp;</td>
                            <td class="auto-style23">&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="auto-style18"></td>
                            <td class="auto-style24">
							</td>
                        </tr>
						
                        <tr>
                            <td class="auto-style16">&nbsp;</td>
                            <td class="auto-style23">&nbsp;</td>
                            <td>&nbsp;&nbsp;&nbsp;                                <input type="submit"></td>
                        </tr>
						  <tr>
                            <td class="auto-style18"></td>
                            <td class="auto-style24">
							</td>
                        </tr>
                        <tr>
                            <td class="auto-style16">&nbsp;</td>
                            <td class="auto-style23">
						
							
							</td>
                            <td><?php 
							
							
							?></td>
                        </tr>  <tr>
                            <td class="auto-style18"></td>
                            <td class="auto-style24">
							</td>
                        </tr>  <tr>
                            <td class="auto-style18"></td>
                            <td class="auto-style24">
							</td>
                        </tr>
						  <tr>
                            <td class="auto-style18"></td>
                            <td class="auto-style24">
							</td>
                        </tr>
                        <tr>
                            <td class="auto-style16">&nbsp;</td>
                            <td class="auto-style23"><a href="forgetpassword.php">Forget Password</a></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; New User ? <a href="registration.php">Join Now</a></td>
                        </tr>
                        <tr>
                            <td class="auto-style16"><a href="adminlogin.php">Admin Login</a></td>
							
                            <td class="auto-style23">&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                    </table>
                </td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td class="auto-style12">&nbsp;</td>
                <td class="auto-style14">&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td class="auto-style12">&nbsp;</td>
                <td class="auto-style14">&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
        </table>
    </form>
</body>
</html>
