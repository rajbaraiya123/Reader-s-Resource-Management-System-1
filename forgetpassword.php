
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
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
        .auto-style22 {
            height: 12px;
        }
        .auto-style23 {
            width: 210px;
        }
        .auto-style24 {
            width: 210px;
            height: 12px;
        }
        .auto-style29 {
            width: 292px;
            height: 172px;
        }
        .auto-style30 {
            width: 119px;
            height: 23px;
        }
        .auto-style31 {
            width: 210px;
            height: 23px;
        }
        .auto-style32 {
            height: 23px;
        }
    </style>
</head>
<body>
    <form method="POST" action="updatepass.php">
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
                <td class="auto-style14" style="font-size: x-large">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Forget Password</td>
                <td></td>
            </tr>
            <tr>
                <td class="auto-style12"></td>
                <td class="auto-style14"></td>
                <td></td>
            </tr>
            <tr>
                <td class="auto-style12">
                    <img alt="" class="auto-style29" src="images,,,.jpg" /></td>
                <td class="auto-style14">
                    <table class="auto-style8">
                        <tr>
                            <td class="auto-style16">&nbsp;</td>
                            <td class="auto-style23">&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="auto-style16">&nbsp;</td>
                            <td class="auto-style23">&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="auto-style16">&nbsp;</td>
                            <td class="auto-style23">&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="auto-style16">&nbsp;</td>
                            <td class="auto-style23">&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="auto-style16">&nbsp;</td>
                            <td class="auto-style23">Enter Your Registered Email</td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="text" name="email">
                            </td>
                        </tr>
                        <tr>
                            <td class="auto-style30"></td>
                            <td class="auto-style31"></td>
                            <td class="auto-style32"></td>
                        </tr>
                        <tr>
                            <td class="auto-style16">&nbsp;</td>
                            <td class="auto-style23">&nbsp;</td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </td>
                        </tr>
                        <tr>
                            <td class="auto-style16">&nbsp;</td>
                            <td class="auto-style23">&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="auto-style18"></td>
                            <td class="auto-style24"></td>
                            <td class="auto-style22"></td>
                        </tr>
                        <tr>
                            <td class="auto-style16">&nbsp;</td>
                            <td class="auto-style23">&nbsp;</td>
                            <td>
                                <input type="submit" Height="27px"  Width="80px" />
                            </td>
                        </tr>
                        <tr>
                            <td class="auto-style16">&nbsp;</td>
                            <td class="auto-style23">&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="auto-style16">&nbsp;</td>
                            <td class="auto-style23">&nbsp;</td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="auto-style16">&nbsp;</td>
                            <td class="auto-style23">&nbsp;</td>
                            <td><?php 
							if(isset($_REQUEST["ml"]))
							{
								echo"Email Not Exist";
							}
							?></td>
                        </tr>
                    </table>
                </td>
                <td>&nbsp;</td>
            </tr>
            </table>
    </form>
</body>
</html>
