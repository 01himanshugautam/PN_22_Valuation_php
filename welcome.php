<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login.php");
    exit;
}


?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Welcome - <?php $_SESSION['username'] ?></title>
    <link rel="stylesheet" href="static/css/welcome.css">
</head>

<body>
    <?php require '_nav.php' ?>
    Welcome - <?php echo $_SESSION['username'] ?>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div>
                <span>BANK NAME:</span>
                <input type="text" placeholder="">
            </div>
            <div>
                <span>Date of Inspection:</span>
                <input type="text" class="form-control" placeholder=""> / <input type="text" class="form-control"
                    placeholder="">/2021.
            </div>

        </div>
        <div class="row d-flex justify-content-center">
            <div>
                <span> NAME:</span> <input type="text" placeholder="">
            </div>
            <div>
                <span>S/o W/o</span> <input type="text" placeholder="">
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div>
                <span> NAME:</span> <input type="text" placeholder="">
            </div>
            <div>
                <span>S/o W/o</span> <input type="text" placeholder="">
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div>
                <span>AT:</span> <input type="text" placeholder="">
            </div>

        </div>
        <div class="row d-flex justify-content-center">
            <div>
                <span> NEAR:</span> <input type="text" placeholder="">
            </div>

        </div>
        <div class="row d-flex justify-content-center">
            <div>
                <span> PO:</span> <input type="text" placeholder="">
            </div>
            <div>
                <span>PS:</span> <input type="text" placeholder="">
            </div>
            <div>
                <span>WARD NO:</span> <input type="text" placeholder="">
            </div>
            <div>
                <span>DIST:</span> <input type="text" placeholder="">
            </div>

        </div>
        <div class="row d-flex justify-content-center">
            <div>
                <span>PIN:</span> <input type="text" placeholder="">
            </div>
            <div>
                <span>(BIHAR). MOB:</span> <input type="text" placeholder="">
            </div>

        </div>
        <div class="row d-flex justify-content-center">
            <div>
                <span>APARTMENT NAME</span> <input type="text" placeholder="">
            </div>
            <div>
                <span>FLAT NO:</span> <input type="text" placeholder="">
            </div>
            <div>
                <span> ON </span><input type="text" placeholder=""> <span>FLOOR</span>
            </div>


        </div>
        <div class="row d-flex justify-content-center">
            TWO REF: 1. <input type="text" placeholder=""> 2. <input type="text" placeholder="">
        </div>
        <div class="row d-flex justify-content-center">
            DETAILS: PROPERTY TYPE:- RESIDENTIAL / COMMERCIAL / INDUSTRIAL / AGRICULTURE TYPE OF AREA:- URBAN / SEMI
            URBAN / RURAL / AGRICULTURE / Village Panchayat /Municipal
        </div>
        <div class="row d-flex justify-content-center">
            <div>
                <span> DEED NO:</span> <input type="text" placeholder="">
            </div>
            <div>
                <span> DATED:</span> <input type="text" placeholder="">
            </div>
            <div>
                <span>AGREEMENT / BATWARA DATED:</span>
                <input type="text" placeholder="">
            </div>

        </div>
        <div class="row d-flex justify-content-center">
            <div>
                <span> RR NO:</span> <input type="text" placeholder="">
            </div>
            <div>
                <span>DATED:</span> <input type="text" placeholder="">
            </div>
            <div>
                <span>MR NO </span><input type="text" placeholder="">
            </div>

        </div>
        <div class="row d-flex justify-content-center">
            <div>
                <span> DATED:</span> <input type="text" placeholder="">
            </div>
            <div>
                <span>LPC NO:</span> <input type="text" placeholder="">
            </div>
            <div>
                <span>DATED:</span>
                <input type="text" placeholder="">
            </div>

        </div>
        <div class="row d-flex justify-content-center">
            <div>
                <span>KHATA NO:</span> <input type="text" placeholder="">
            </div>
            <div>
                <span>PLOT NO:</span> <input type="text" placeholder="">
            </div>
            <div>
                <span>JAMABANDI NO:</span> <input type="text" placeholder="">
            </div>
            <div>
                <span>WARD NO:</span> <input type="text" placeholder="">
            </div>
            <div>
                <span>THANA NO</span> <input type="text" placeholder="">
            </div>


        </div>
        <div class="row d-flex justify-content-center">
            <div>
                <span> HOLDING NO:</span> <input type="text" placeholder="">
            </div>
            <div>
                <span>TAUZI NO:</span> <input type="text" placeholder="">
            </div>
            <div>
                <span>MAUZA:</span> <input type="text" placeholder="">
            </div>
            <div>
                <span> ANCHAL:</span> <input type="text" placeholder="">
            </div>

        </div>
        <div class="row d-flex justify-content-center">
            <div>
                <span> TOTAL PLOT AREA IN SQ FT:</span> <input type="text" placeholder="">
            </div>
            <div>
                <span> IN KATHA:</span>
                <input type="text" placeholder="">
            </div>
            <div>
                <span>IN DECIMAL:</span> <input type="text" placeholder=""><span> (@ SQFT/KATHA)</span>
            </div>

        </div>
        <div class="row d-flex justify-content-center">
            <span>SIZE OF PLOT: N-</span> <input type="text" placeholder=""> <span>S-</span> <input type="text"
                placeholder=""> <span>E-</span> <input type="text" placeholder=""> <span>W-</span> <input type="text"
                placeholder="">
        </div>
        <div class="row d-flex justify-content-center">
            <span>Basement-</span> <input type="text" placeholder=""><span>Ground Floor-</span> <input type="text"
                placeholder="">
        </div>
        <div class="row d-flex justify-content-center">
            <span> 1st Floor-</span> <input type="text" placeholder=""> <span>2nd Floor-</span> <input type="text"
                placeholder="">
        </div>
        <div class="row d-flex justify-content-center">
            <span>3rd floor-</span> <input type="text" placeholder=""> <span>4th Floor-</span> <input type="text"
                placeholder="">
        </div>
        <div class="row d-flex justify-content-center">
            <span>5th Floor-</span> <input type="text" placeholder="">
        </div>
        <div class="row d-flex justify-content-center">
            <span>RAIL: </span><input type="text" placeholder="">, <span>SCHOOL:</span>
            <input type="text" placeholder=""> <span>BUS:</span> <input type="text" placeholder="">,<span>
                HOSPITAL:</span> <input type="text" placeholder="">
        </div>
        <div class="row d-flex justify-content-center">
            <span> MAP PLAN CASE NO:</span> <input type="text" placeholder=""><span> DATED:-</span> <input type="text"
                placeholder="">
        </div>
        <div class="row d-flex justify-content-center">
            <span>PASSING AUTHORITY:</span> <input type="text" placeholder="">
        </div>
        <div class="row d-flex justify-content-center">
            <span>MAP DRAWN BY:</span> <input type="text" placeholder=""> <span>LIC NO.</span> <input type="text"
                placeholder="">
        </div>


    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>