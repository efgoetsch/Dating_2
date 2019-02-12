<!--
        Ellen Goetsch
        2/10/19
        profile.php
-->
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
        <div class="col-6">
            <form id="profileform" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <fieldset>
                    <legend>Profile</legend><br>
                    <label>Email</label> <br>
                    <input type="text" size="60" maxlength="60"
                           name="email" id="email"> <br><br>
                    <label>State</label> <br>
                    <select name="state" id="state">
                        <option>Alabama</option>
                        <option>Alaska</option>
                        <option>Arizona</option>
                        <option>Arkansas</option>
                        <option>California</option>
                        <option>Colorado</option>
                        <option>Connecticut</option>
                        <option>Delaware</option>
                        <option>Florida</option>
                        <option>Georgia</option>
                        <option>Hawaii</option>
                        <option>Idaho</option>
                        <option>Illinois</option>
                        <option>Indiana</option>
                        <option>Iowa</option>
                        <option>Kansas</option>
                        <option>Kentucky</option>
                        <option>Louisiana</option>
                        <option>Maine</option>
                        <option>Maryland</option>
                        <option>Massachusetts</option>
                        <option>Michigan</option>
                        <option>Minnesota</option>
                        <option>Mississippi</option>
                        <option>Missouri</option>
                        <option>Montana</option>
                        <option>Nebraska</option>
                        <option>Nevada</option>
                        <option>New Hampshire</option>
                        <option>New Jersey</option>
                        <option>New Mexico</option>
                        <option>New York</option>
                        <option>North Carolina</option>
                        <option>North Dakota</option>
                        <option>Ohio</option>
                        <option>Oklahoma</option>
                        <option>Oregon</option>
                        <option>Pennsylvania</option>
                        <option>Rhode Island</option>
                        <option>South Carolina</option>
                        <option>South Dakota</option>
                        <option>Tennessee</option>
                        <option>Texas</option>
                        <option>Utah</option>
                        <option>Vermont</option>
                        <option>Virginia</option>
                        <option>Washington</option>
                        <option>West Virginia</option>
                        <option>Wisconsin</option>
                        <option>Wyoming</option>
                    </select>
                        <br><br>
                    <label>Seeking</label> <br>
                    <input type="radio" value="men" name="seeking"
                           id="men">&nbsp;&nbsp;Men &nbsp;&nbsp;&nbsp;
                    <input type="radio" value="women" name="seeking"
                           id="women">&nbsp;&nbsp;Women <br><br>
                </fieldset>
            </div>

                <div class="col-6">

                    <fieldset>
                    <label>Biography</label> <br>
                    <textarea rows="10" cols="50"
                              name="biography" id="biography"></textarea>
                </fieldset>
                        <button class="btn btn-primary btn-lg">Next ></button>
                </div>
            </form>
    </div>
</body>
</html>