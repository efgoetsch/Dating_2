<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../styles/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/styles.css">

    <title>My Dating Site</title>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm">
            <form id="personalform" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <fieldset>
            <legend>Personal Information</legend><br>
            <label>First Name</label> <br>
            <input type="text" size="100" maxlength="100"
                   name="fName" id="fName"> <br><br>
            <label>Last Name</label> <br>
            <input type="text" size="100" maxlength="100"
                name="lName" id="lName"> <br><br>
            <label>Age</label> <br>
            <input type="text" size="100" maxlength="100"
                 name="age" id="age"> <br><br>
            <label>Gender</label> <br>
            <input type="radio" value="male" name="gender"
                id="male">&nbsp;&nbsp;Male &nbsp;&nbsp;&nbsp;
            <input type="radio" value="female" name="gender"
               id="female">&nbsp;&nbsp;Female <br><br>
            <label>Phone Number</label> <br>
            <input type="text" size="100" maxlength="100"
                   name="phone" id="phone">
        </fieldset>
        <button class="btn btn-primary btn-lg float-right">Next ></button>
    </form>
    </div>
        <div class="col-sm">
            <aside class="float-md-right"><strong>Note</strong>: All information entered is protected by our <span class="text-primary">privacy policy</span>.
                Profile information can only be viewed by others with your permission.</aside>
        </div>

</div>
</body>
</html>