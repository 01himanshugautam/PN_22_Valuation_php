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
</head>

<body>
    <?php require '_nav.php' ?>
    Welcome - <?php echo $_SESSION['username'] ?>
    <div class="container form-floating mt-10 pt-3 mb-3 p-3">

        <form action="">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-1 ">
                        <p>NAME:</p>
                    </div>
                    <div class="col-sm-5 ">
                        <input type="text" class="form-control" placeholder="">
                    </div>
                    <div class="col-sm-1 ">
                        <p>s/o W/o:</p>
                    </div>
                    <div class="col-sm-5 ">
                        <input type="text" class="form-control" placeholder="">
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-1 ">
                        <p>NAME:</p>
                    </div>
                    <div class="col-sm-5 ">
                        <input type="text" class="form-control" placeholder="">
                    </div>
                    <div class="col-sm-1 ">
                        <p>s/o W/o:</p>
                    </div>
                    <div class="col-sm-5 ">
                        <input type="text" class="form-control" placeholder="">
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-1 ">
                        <p>AT:</p>
                    </div>
                    <div class="col-sm-11 ">
                        <input type="text" class="form-control" placeholder="">
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-1 ">
                        <p>NEAR:</p>
                    </div>
                    <div class="col-sm-11 ">
                        <input type="text" class="form-control" placeholder="">
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-1">
                        <p>PO:</p>
                    </div>
                    <div class="col-sm-3 ">
                        <input type="text" class="form-control" placeholder="">
                    </div>
                    <div class="col-sm-1 ">
                        <p>PS:</p>
                    </div>
                    <div class="col-sm-2 ">
                        <input type="text" class="form-control" placeholder="">
                    </div>
                    <div class="col-sm-1">
                        <p>WARD NO:</p>
                    </div>
                    <div class="col-sm-1 ">
                        <input type="text" class="form-control" placeholder="">
                    </div>
                    <div class="col-sm-1 ">
                        <p>DIST:</p>
                    </div>
                    <div class="col-sm-2 ">
                        <input type="text" class="form-control" placeholder="">
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-1">
                        <p>PIN:</p>
                    </div>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" placeholder="">
                    </div>
                    <div class="col-sm-1 ">
                        <p>MOB:</p>
                    </div>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" placeholder="">
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-2">
                        <p>APARTMENT NAME:</p>
                    </div>
                    <div class="col-sm-3 ">
                        <input type="text" class="form-control" placeholder="">
                    </div>
                    <div class="col-sm-1">
                        <p>FLAT NO:</p>
                    </div>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" placeholder="">
                    </div>
                    <div class="col-sm-1">
                        <p>NO:</p>
                    </div>
                    <div class="col-sm-1">
                        <input type="text" class="form-control" placeholder="">
                    </div>
                    <div class="col-sm-1">
                        <p>FLOOR:</p>
                    </div>
                    <div class="col-sm-1">
                        <input type="text" class="form-control" placeholder="">
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-1">
                        <p>DEED NO:</p>
                    </div>
                    <div class="col-sm-3 ">
                        <input type="text" class="form-control" placeholder="">
                    </div>
                    <div class="col-sm-1">
                        <p>DATED:</p>
                    </div>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" placeholder="">
                    </div>

                    <div class="col-sm-3">
                        <p>AGREEMENT / BATWARA DATED:</p>
                    </div>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" placeholder="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-1 ">
                    <p> RR NO:</p>
                </div>
                <div class="col-sm-5 ">
                    <input type="text" class="form-control" placeholder="">
                </div>
                <div class="col-sm-1 ">
                    <p>LIC NO:</p>
                </div>
                <div class="col-sm-5 ">
                    <input type="text" class="form-control" placeholder="">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-1">
                    <p>Basement: </p>
                </div>
                <div class="col-sm-5 ">
                    <input type="text" class="form-control" placeholder="">
                </div>
                <div class="col-sm-1 ">
                    <p>Ground Floor:</p>
                </div>
                <div class="col-sm-5 ">
                    <input type="text" class="form-control" placeholder="">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-1 ">
                    <p>1st floor:</p>
                </div>
                <div class="col-sm-5 ">
                    <input type="text" class="form-control" placeholder="">
                </div>
                <div class="col-sm-1 ">
                    <p>2nd floor:</p>
                </div>
                <div class="col-sm-5 ">
                    <input type="text" class="form-control" placeholder="">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-1 ">
                    <p>3rd floor:</p>
                </div>
                <div class="col-sm-5 ">
                    <input type="text" class="form-control" placeholder="">
                </div>
                <div class="col-sm-1 ">
                    <p>4th floor:</p>
                </div>
                <div class="col-sm-5 ">
                    <input type="text" class="form-control" placeholder="">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-1 ">
                    <p>5th floor:</p>
                </div>
                <div class="col-sm-11 ">
                    <input type="text" class="form-control" placeholder="">
                </div>

            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-1">
                        <p>RAIL:</p>
                    </div>
                    <div class="col-sm-3 ">
                        <input type="text" class="form-control" placeholder="">
                    </div>
                    <div class="col-sm-1">
                        <p>SCHOOL:</p>
                    </div>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" placeholder="">
                    </div>
                    <div class="col-sm-1">
                        <p>BUS:</p>
                    </div>
                    <div class="col-sm-1">
                        <input type="text" class="form-control" placeholder="">
                    </div>
                    <div class="col-sm-1">
                        <p>HOSPITAL:</p>
                    </div>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" placeholder="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2 ">
                    <p>MAP PLAN CASE NO:</p>
                </div>
                <div class="col-sm-4 ">
                    <input type="text" class="form-control" placeholder="">
                </div>
                <div class="col-sm-1 ">
                    <p>DATED:</p>
                </div>
                <div class="col-sm-5 ">
                    <input type="text" class="form-control" placeholder="">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2 ">
                    <p>PASSING AUTHORITY:</p>
                </div>
                <div class="col-sm-10 ">
                    <input type="text" class="form-control" placeholder="">
                </div>

            </div>
            <div class="row">
                <div class="col-sm-2 ">
                    <p>MAP DRAWN BY:</p>
                </div>
                <div class="col-sm-4 ">
                    <input type="text" class="form-control" placeholder="">
                </div>
                <div class="col-sm-1 ">
                    <p>LIC NO:</p>
                </div>
                <div class="col-sm-5 ">
                    <input type="text" class="form-control" placeholder="">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <BR>RR NO:__________________________________________________ DATED:________________ MR NO___________________
            DATED:_________________ LPC NO:_________________________ DATED:________________ KHATA NO:______________ PLOT
            NO:____________________ JAMABANDI
            NO:_________ WARD NO:____ THANA NO:______ HOLDING NO:________ . TAUZI NO:_______
            MAUZA:___________________________________ ANCHAL:_________________ TOTAL PLOT AREA IN SQ
            FT:__________________ IN KATHA:____________ IN DECIMAL:________ (@ SQFT/KATHA)
            SIZE OF PLOT: N- ________ S- _________ E- ________ W-_________ BOUNDARY OF THE PROPERTY
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
</body>

</html>