<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login.php");
    exit;
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Get Data Form</title>
    <link rel="stylesheet" href="static/css/style.css">
    <style>
    .container-fluid{
        margin-top: 30px;
    }
    table{
        margin-top: 40px;
    }
    </style>
   
</head>

<body>
    <?php require '_nav.php' ?>
    <?php echo $_SESSION['username'] ?>
    <div class="container form-floating mt-10 pt-3 mb-3 p-3">
        <div><h2 style="margin-left: 35%;">TECHNICAL VALUATION FORMAT</h2></div>
        <form style="margin-top: 45px;" action="output.php">
           
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-1 ">
                        <p>BANK NAME:</p>
                    </div>
                    <div class="col-sm-5 ">
                        <input style="border: none; border-radius: 0; border-bottom: 2px solid black;" type="text" class="form-control" placeholder="">
                    </div>
                    <div class="col-sm-2 ">
                        <p>Date of Inspection:</p>
                    </div>
                    <div class="col-sm-2 ">
                        <input style="border: none; border-radius: 0; border-bottom: 2px solid black;" type="text" class="form-control" placeholder="">
                    </div>
                    <div class="col-sm-1 ">
                        <p>/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/2021.</p>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-1 ">
                        <p>NAME:</p>
                    </div>
                    <div class="col-sm-5 ">
                        <input style="border: none; border-radius: 0; border-bottom: 2px solid black;" type="text" class="form-control" placeholder="">
                    </div>
                    <div class="col-sm-1 ">
                        <p>s/o W/o:</p>
                    </div>
                    <div class="col-sm-5 ">
                        <input style="border: none; border-radius: 0; border-bottom: 2px solid black;" type="text" class="form-control" placeholder="">
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-1 ">
                        <p>NAME:</p>
                    </div>
                    <div class="col-sm-5 ">
                        <input style="border: none; border-radius: 0; border-bottom: 2px solid black;" type="text" class="form-control" placeholder="">
                    </div>
                    <div class="col-sm-1 ">
                        <p>s/o W/o:</p>
                    </div>
                    <div class="col-sm-5 ">
                        <input style="border: none; border-radius: 0; border-bottom: 2px solid black;" type="text" class="form-control" placeholder="">
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-1 ">
                        <p>AT:</p>
                    </div>
                    <div class="col-sm-11 ">
                        <input style="border: none; border-radius: 0; border-bottom: 2px solid black;" type="text" class="form-control" placeholder="">
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-1 ">
                        <p>NEAR:</p>
                    </div>
                    <div class="col-sm-11 ">
                        <input style="border: none; border-radius: 0; border-bottom: 2px solid black;" type="text" class="form-control" placeholder="">
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-1">
                        <p>PO:</p>
                    </div>
                    <div class="col-sm-3 ">
                        <input style="border: none; border-radius: 0; border-bottom: 2px solid black;"  type="text" class="form-control" placeholder="">
                    </div>
                    <div class="col-sm-1 ">
                        <p>PS:</p>
                    </div>
                    <div class="col-sm-2 ">
                        <input style="border: none; border-radius: 0; border-bottom: 2px solid black;" type="text" class="form-control" placeholder="">
                    </div>
                    <div class="col-sm-1">
                        <p>WARD NO:</p>
                    </div>
                    <div class="col-sm-1 ">
                        <input style="border: none; border-radius: 0; border-bottom: 2px solid black;"  type="text" class="form-control" placeholder="">
                    </div>
                    <div class="col-sm-1 ">
                        <p>DIST:</p>
                    </div>
                    <div class="col-sm-2 ">
                        <input style="border: none; border-radius: 0; border-bottom: 2px solid black;" type="text" class="form-control" placeholder="">
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-1">
                        <p>PIN:</p>
                    </div>
                    <div class="col-sm-5">
                        <input style="border: none; border-radius: 0; border-bottom: 2px solid black;" type="text" class="form-control" placeholder="">
                    </div>
                    <div class="col-sm-1 ">
                        <p>MOB:</p>
                    </div>
                    <div class="col-sm-3">
                        <input style="border: none; border-radius: 0; border-bottom: 2px solid black;" type="text" class="form-control" placeholder="">
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-2">
                        <p>APARTMENT NAME:</p>
                    </div>
                    <div class="col-sm-3 ">
                        <input style="border: none; border-radius: 0; border-bottom: 2px solid black;" type="text" class="form-control" placeholder="">
                    </div>
                    <div class="col-sm-1">
                        <p>FLAT NO:</p>
                    </div>
                    <div class="col-sm-2">
                        <input style="border: none; border-radius: 0; border-bottom: 2px solid black;" type="text" class="form-control" placeholder="">
                    </div>
                    <div class="col-sm-1">
                        <p>NO:</p>
                    </div>
                    <div class="col-sm-1">
                        <input style="border: none; border-radius: 0; border-bottom: 2px solid black;"  type="text" class="form-control" placeholder="">
                    </div>
                    <div class="col-sm-1">
                        <p>FLOOR:</p>
                    </div>
                    <div class="col-sm-1">
                        <input style="border: none; border-radius: 0; border-bottom: 2px solid black;" type="text" class="form-control" placeholder="">
                    </div>
                    
                </div>
                
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-2">
                        <p>TWO REF: 1.</p>
                    </div>
                    <div class="col-sm-3 ">
                        <input style="border: none; border-radius: 0; border-bottom: 2px solid black;" type="text" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2">
                        <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2.</p>
                    </div>
                    <div class="col-sm-3 ">
                        <input style="border: none; border-radius: 0; border-bottom: 2px solid black;" type="text" class="form-control" placeholder="">
                    </div>  
                </div>
            </div>
            <P style="margin-top: 25px;"><span style="font-weight: 700;">DETAIL</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; PROPERTY TYPE :- RESIDENTAL/ COMMERCIAL/ INDUSTRIAL/ AGRICULTURE <br> <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TYPE OF AREA:- URBAN/ SEMI URBAN/ RURAL/ AGRICULTURE/ Village Panchayat/ Municipal</P>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-1">
                        <p>DEED NO:</p>
                    </div>
                    <div class="col-sm-3 ">
                        <input style="border: none; border-radius: 0; border-bottom: 2px solid black;" type="text" class="form-control" placeholder="">
                    </div>
                    <div class="col-sm-1">
                        <p>DATED:</p>
                    </div>
                    <div class="col-sm-2">
                        <input style="border: none; border-radius: 0; border-bottom: 2px solid black;" type="text" class="form-control" placeholder="">
                    </div>

                    <div class="col-sm-3">
                        <p>AGREEMENT / BATWARA DATED:</p>
                    </div>
                    <div class="col-sm-2">
                        <input style="border: none; border-radius: 0; border-bottom: 2px solid black;" type="text" class="form-control" placeholder="">
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-1">
                        <p>RR NO:</p>
                    </div>
                    <div class="col-sm-5 ">
                        <input style="border: none; border-radius: 0; border-bottom: 2px solid black;" type="text" class="form-control" placeholder="">
                    </div>
                    <div class="col-sm-1">
                        <p>DATED:</p>
                    </div>
                    <div class="col-sm-2">
                        <input style="border: none; border-radius: 0; border-bottom: 2px solid black;" type="text" class="form-control" placeholder="">
                    </div>

                    <div class="col-sm-1">
                        <p>MR NO:</p>
                    </div>
                    <div class="col-sm-2">
                        <input style="border: none; border-radius: 0; border-bottom: 2px solid black;" type="text" class="form-control" placeholder="">
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-1">
                        <p>DATED:</p>
                    </div>
                    <div class="col-sm-2 ">
                        <input style="border: none; border-radius: 0; border-bottom: 2px solid black;" type="text" class="form-control" placeholder="">
                    </div>
                    <div class="col-sm-1">
                        <p>LPC NO:</p>
                    </div>
                    <div class="col-sm-2">
                        <input style="border: none; border-radius: 0; border-bottom: 2px solid black;" type="text" class="form-control" placeholder="">
                    </div>
                    <div class="col-sm-1">
                        <p>DATED:</p>
                    </div>
                    <div class="col-sm-2">
                        <input style="border: none; border-radius: 0; border-bottom: 2px solid black;"  type="text" class="form-control" placeholder="">
                    </div>
                  
                </div>
                
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-1">
                        <p>KHATA NO:</p>
                    </div>
                    <div class="col-sm-2 ">
                        <input style="border: none; border-radius: 0; border-bottom: 2px solid black;" type="text" class="form-control" placeholder="">
                    </div>
                    <div class="col-sm-1">
                        <p>PLOT NO:</p>
                    </div>
                    <div class="col-sm-2">
                        <input style="border: none; border-radius: 0; border-bottom: 2px solid black;" type="text" class="form-control" placeholder="">
                    </div>
                    <div class="col-sm-1">
                        <p>JAMABANDI NO:</p>
                    </div>
                    <div class="col-sm-1">
                        <input style="border: none; border-radius: 0; border-bottom: 2px solid black;"  type="text" class="form-control" placeholder="">
                    </div>
                    <div class="col-sm-1">
                        <p>WARD NO:</p>
                    </div>
                    <div class="col-sm-1">
                        <input style="border: none; border-radius: 0; border-bottom: 2px solid black;" type="text" class="form-control" placeholder="">
                    </div>
                    <div class="col-sm-1">
                        <p>THANA NO:</p>
                    </div>
                    <div class="col-sm-1">
                        <input style="border: none; border-radius: 0; border-bottom: 2px solid black;" type="text" class="form-control" placeholder="">
                    </div>
                    
                </div>
                
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-1">
                        <p>HOLDING NO:</p>
                    </div>
                    <div class="col-sm-2 ">
                        <input style="border: none; border-radius: 0; border-bottom: 2px solid black;" type="text" class="form-control" placeholder="">
                    </div>
                    <div class="col-sm-1">
                        <p>TAUZI NO:</p>
                    </div>
                    <div class="col-sm-1">
                        <input style="border: none; border-radius: 0; border-bottom: 2px solid black;" type="text" class="form-control" placeholder="">
                    </div>
                    <div class="col-sm-1">
                        <p>MAUZA:</p>
                    </div>
                    <div class="col-sm-4">
                        <input style="border: none; border-radius: 0; border-bottom: 2px solid black;"  type="text" class="form-control" placeholder="">
                    </div>
                    <div class="col-sm-1">
                        <p>ANCHAL:</p>
                    </div>
                    <div class="col-sm-1">
                        <input style="border: none; border-radius: 0; border-bottom: 2px solid black;" type="text" class="form-control" placeholder="">
                    </div>
                    
                </div>
                
            </div>

            <div class="container-fluid">
                <div class="row">
                   
                    <div class="col-sm-2">
                        <p>TOTAL PLOT AREA  SQ FT:</p>
                    </div>
                    <div class="col-sm-2">
                        <input style="border: none; border-radius: 0; border-bottom: 2px solid black;" type="text" class="form-control" placeholder="">
                    </div>
                    <div class="col-sm-1">
                        <p>IN KHATA:</p>
                    </div>
                    <div class="col-sm-1">
                        <input style="border: none; border-radius: 0; border-bottom: 2px solid black;"  type="text" class="form-control" placeholder="">
                    </div>
                    <div class="col-sm-1">
                        <p>IN DECIMAL:</p>
                    </div>
                    <div class="col-sm-1">
                        <input style="border: none; border-radius: 0; border-bottom: 2px solid black;" type="text" class="form-control" placeholder="">
                       
                    </div>
                    <div class="col-sm-1">
                        <p>(@&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SQFT/KATHA)</p>
                    </div>
                    
                    
                </div>
                
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-1">
                        
                        <p>SIZE OF PLOT : N-</p>
                    </div>
                    <div class="col-sm-2 ">
                        <input style="border: none; border-radius: 0; border-bottom: 2px solid black;" type="text" class="form-control" placeholder="">
                    </div>
                    <div class="col-sm-1">
                        <p>S-</p>
                    </div>
                    <div class="col-sm-1">
                        <input style="border: none; border-radius: 0; border-bottom: 2px solid black;" type="text" class="form-control" placeholder="">
                    </div>
                    <div class="col-sm-1">
                        <p>E-</p>
                    </div>
                    <div class="col-sm-1">
                        <input style="border: none; border-radius: 0; border-bottom: 2px solid black;"  type="text" class="form-control" placeholder="">
                    </div>
                    <div class="col-sm-1">
                        <p>W-</p>
                    </div>
                    <div class="col-sm-1">
                        <input style="border: none; border-radius: 0; border-bottom: 2px solid black;" type="text" class="form-control" placeholder="">
                    </div>
                    
                </div>
                
            </div>

            <!-- TABLE START-->
            <table class="t1" style=" width: 100%; padding-right: 1200px; border: 2px solid black; border-collapse: collapse;" cellspacing="0" cellpadding="0">
                <tbody>
                <tr>
                <td class="td1" style="border: 2px solid black; " valign="top">&nbsp;</td>
                <td class="td2" style="border: 2px solid black;" valign="top">
                <p class="p3" style="text-align: center;"><strong>&nbsp; AS PER DEED /<span class="Apple-converted-space">&nbsp;</span></strong></p>
                </td>
                <td class="td3" style="border: 2px solid black;" valign="top">
                <p class="p4" style="text-align: center;"><strong>&nbsp; AS PER ACTUAL</strong></p>
                </td>
                </tr>
                <tr>
                <td class="td1" style="border: 2px solid black;" valign="top">
                <p class="p3" style="text-align:center;"><strong>NORTH</strong></p>
                </td>
                <td class="td2" style="border: 2px solid black;" valign="top">
                <p class="p2">&nbsp;</p>
                </td>
                <td class="td3" style="border: 2px solid black;" valign="top">
                <p class="p2">&nbsp;</p>
                </td>
                </tr>
                <tr>
                <td class="td1" style="border: 2px solid black;" valign="top">
                <p  class="p3"  style="text-align:center;" ><strong>SOUTH</strong></p>
                </td>
                <td class="td2" style="border: 2px solid black;" valign="top">
                <p class="p2">&nbsp;</p>
                </td>
                <td class="td3" style="border: 2px solid black;width: 168px;" valign="top">
                <p class="p2">&nbsp;</p>
                </td>
                </tr>
                <tr>
                <td class="td4" style="border: 2px solid black;width: 75.2756px;" valign="top">
                <p class="p3" style="text-align:center;" ><strong>EAST</strong></p>
                </td>
                <td class="td5" style="border: 2px solid black;width: 169.724px;" valign="top">
                <p class="p2">&nbsp;</p>
                </td>
                <td class="td6" style="border: 2px solid black;width: 168px;" valign="top">
                <p class="p2">&nbsp;</p>
                </td>
                </tr>
                <tr>
                <td class="td1" style="border: 2px solid black;width: 75.2756px;" valign="top">
                <p class="p3" style="text-align:center;" ><strong>WEST</strong></p>
                </td>
                <td class="td2" style="border: 2px solid black;width: 169.724px;" valign="top">
                <p class="p2">&nbsp;</p>
                </td>
                <td class="td3" style="border: 2px solid black;width: 168px;" valign="top">
                <p class="p5">&nbsp;</p>
                </td>
                </tr>
                </tbody>
                </table>
                <div class="container-fluid">
            <div class="row">
                <div class="col-sm-1">
                    <p style="font-weight: 700;">Basement: </p>
                </div>
                <div class="col-sm-5 ">
                    <input style="border: none; border-radius: 0; border-bottom: 2px solid black;" type="text" class="form-control" placeholder="">
                </div>
                <div class="col-sm-1 ">
                    <p style="font-weight: 700;">Ground Floor:</p>
                </div>
            

                <div class="col-sm-5 ">
                    <input style="border: none; border-radius: 0; border-bottom: 2px solid black;" type="text" class="form-control" placeholder="">
                </div>
            </div>
            </div>
            <div class="container-fluid">
            <div class="row">
                <div class="col-sm-1 ">
                    <p style="font-weight: 700;">1st floor:</p>
                </div>
                <div class="col-sm-5 ">
                    <input style="border: none; border-radius: 0; border-bottom: 2px solid black;" type="text" class="form-control" placeholder="">
                </div>
                <div class="col-sm-1 ">
                    <p style="font-weight: 700;">2nd floor:</p>
                </div>
                <div class="col-sm-5 ">
                    <input style="border: none; border-radius: 0; border-bottom: 2px solid black;" type="text" class="form-control" placeholder="">
                </div>
            </div>
            </div>
            <div class="container-fluid">
            <div class="row">
                <div class="col-sm-1 ">
                    <p style="font-weight: 700;">3rd floor:</p>
                </div>
                <div class="col-sm-5 ">
                    <input style="border: none; border-radius: 0; border-bottom: 2px solid black;" type="text" class="form-control" placeholder="">
                </div>
                <div class="col-sm-1 ">
                    <p style="font-weight: 700;">4th floor:</p>
                </div>
                <div class="col-sm-5 ">
                    <input style="border: none; border-radius: 0; border-bottom: 2px solid black;" type="text" class="form-control" placeholder="">
                </div>
            </div>
            </div>
            <div class="container-fluid">
            <div class="row">
                <div class="col-sm-1 ">
                    <p style="font-weight: 700;">5th floor:</p>
                </div>
                <div class="col-sm-11 ">
                    <input style="border: none; border-radius: 0; border-bottom: 2px solid black;" type="text" class="form-control" placeholder="">
                </div>

            </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-1">
                        <p>RAIL:</p>
                    </div>
                    <div class="col-sm-3 ">
                        <input style="border: none; border-radius: 0; border-bottom: 2px solid black;" type="text" class="form-control" placeholder="">
                    </div>
                    <div class="col-sm-1">
                        <p>SCHOOL:</p>
                    </div>
                    <div class="col-sm-2">
                        <input style="border: none; border-radius: 0; border-bottom: 2px solid black;" type="text" class="form-control" placeholder="">
                    </div>
                    <div class="col-sm-1">
                        <p>BUS:</p>
                    </div>
                    <div class="col-sm-1">
                        <input style="border: none; border-radius: 0; border-bottom: 2px solid black;" type="text" class="form-control" placeholder="">
                    </div>
                    <div class="col-sm-1">
                        <p>HOSPITAL:</p>
                    </div>
                    <div class="col-sm-2">
                        <input style="border: none; border-radius: 0; border-bottom: 2px solid black;" type="text" class="form-control" placeholder="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2 ">
                    <p>MAP PLAN CASE NO:</p>
                </div>
                <div class="col-sm-4 ">
                    <input style="border: none; border-radius: 0; border-bottom: 2px solid black;" type="text" class="form-control" placeholder="">
                </div>
                <div class="col-sm-1 ">
                    <p>DATED:</p>
                </div>
                <div class="col-sm-5 ">
                    <input style="border: none; border-radius: 0; border-bottom: 2px solid black;" type="text" class="form-control" placeholder="">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2 ">
                    <p>PASSING AUTHORITY:</p>
                </div>
                <div class="col-sm-10 ">
                    <input style="border: none; border-radius: 0; border-bottom: 2px solid black;" type="text" class="form-control" placeholder="">
                </div>

            </div>
            <div class="row">
                <div class="col-sm-2 ">
                    <p>MAP DRAWN BY:</p>
                </div>
                <div class="col-sm-4 ">
                    <input style="border: none; border-radius: 0; border-bottom: 2px solid black;" type="text" class="form-control" placeholder="">
                </div>
                <div class="col-sm-1 ">
                    <p>LIC NO:</p>
                </div>
                <div class="col-sm-5 ">
                    <input  style="border: none; border-radius: 0; border-bottom: 2px solid black;" type="text" class="form-control" placeholder="">
                </div>
            </div>
            
            <BR>
                <span style="font-weight: 700;">NOTE:</span>
    </div>
    <button style="margin-left: 90%; margin-bottom: 200px; margin-top: 150px;" type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
</body>

</html>