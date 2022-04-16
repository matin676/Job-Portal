<!DOCTYPE html>
<html lang="en">
<?php include 'config.php' ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="career.css">
    <title>Career</title>
<style>
    .jobs {
    display: flex;
    margin: 40px;
    flex-wrap: wrap !important;
}

.jobs .jobs_container {
    border: 2px solid skyblue;
    width: 29%;
    margin: 18px;
    height: auto;
    border-radius: 15px;
    background-color: powderblue;
    box-shadow: 10px 10px 8px #888888;
}
</style>

</head>

<body>
    <div class="container">
        <div class="main">
            <h1>Your Dream <br><span>Job Is Waiting</span></h1>
        </div>
    </div>

    <div class="jobs">
        <?php
        $sql = "SELECT cname,position,CTC,skills from jobs";
        $result = mysqli_query($conn, $sql);
        if ($result->num_rows > 0) {
            while ($rows = $result->fetch_assoc()) {
                echo '
            <div class="jobs_container">
                <h1 style="text-align: centre;">' . $rows['cname'] . '</h1>
                <h2 style="text-align: centre;">' . $rows['position'] . '</h2>
                <p style="color: black;"><b>Skills Required:</b>' . $rows['skills'] . '</p>
                <p style="color:black;"><b>CTC:</b>' . $rows['CTC'] . '</p>
                <div class="wrapper">
                    <a href="#modalbox">Apply Now</a>
                </div>
            </div>';
            }
        }
        ?>
        <div id="modalbox" class="modal">
            <div class="modalcontent">
                <h2>Apply For Job</h2>
                <hr>
                <div class="form_container">
                    <form method="POST">
                        <label for="InputName" class="formlabel">Name: </label>
                        <input type="text" class="formcontrol" id="InputName" name="name">

                        <label for="InputApplyingFor" class="formlabel">Applying For: </label>
                        <input type="text" class="formcontrol" id="InputApplyingFor" name="apply">

                        <label for="InputQualification" class="formlabel">Qualification: </label>
                        <input type="text" class="formcontrol" id="InputQualification" name="qual">

                        <label for="InputYearPassout" class="formlabel">Year Passout: </label>
                        <input type="text" class="formcontrol" id="InputYearPassout" name="year"><br>

                        <button type="submit" name="applynow">Apply</button>

                    </form>
                </div>
                <a href="#" class="modalclose">&times;</a>
            </div>
        </div>

    </div>

</body>

</html>