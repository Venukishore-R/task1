<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Singup Page</title>

</head>

<script type="text/javascript">
    function valdation() {
        var pass1 = document.getElementById("upass").value;
        var passlen = pass1.length;
        var pass2 = document.getElementById("conpass").value;
        if (passlen >= 8) {
            if (pass1 == pass2) {
                return true;
            } else {
                alert("Your entered password and conform password are not macthing");
                return false;
            }
        } else {
            alert("You need to enter more then eight character length");
            return false;
        }
    }
</script>

<style>
body {
    background-image: url(./img.jpg);
    background-size: cover;
}

.heading {
    text-align: center;
}

.content1 {
    display: flex;
    float: right;
}

.content2 {
    display: flex;
    justify-content: center;
    margin-top: 175px;
}

form {
    border: 10px solid #075af433;
    background-color: rgb(65, 171, 164);
}

form div {
    padding: 10px;
}

.button {
    font-weight: bold;
    text-align: center;
    margin-left: 105px;
    background-color: #be2a2a;
}

.button:hover {
    background-color: #41ABA4
}

.button:active {
    background-color: #22f401;
    transform: translateY(4px);
}
</style>

<body>
    <div class="content2">
        <form method="post">
            <h3 class="heading">Enter Your details below</h3>
            <div>
                <label>UserName : </label> <input type="text" autocomplete="off"
                    placeholder="Enter the UserName" id="uname" name="uname">
            </div>
            <div>
                <label>Password : </label> <input type="password" autocomplete="off"
                    placeholder="Enter the Password" id="upass" name="upass">
            </div>
            <div>
                <label>Conform_Password : </label> <input type="password"
                    autocomplete="off" placeholder="Enter the Password" id="conpass"
                    name="conpass">
            </div>
            <div>
                <label>Email ID : </label> <input type="email" autocomplete="off"
                    placeholder="Enter your Emailid" id="email" name="email">
            </div>
            <div>
                <label>Gender : </label> <input type="radio" name="gender"
                    value="Male">Male <input type="radio" name="gender"
                    value="Female">Female
            </div>
            <div>
                <label>Number : </label> <input type="tel" name="mobile" id="mobile"
                    maxlength="10" autocomplete="off"
                    placeholder="Enter the Mobile Number">
            </div>
            <div>
                <label>Date of birth : </label> <input type="date" name="dob"
                    id="dob" placeholder="Enter your DOB">
            </div>
            <div>
                <button formaction="Register" class="button" type="submit"
                    onclick="return valdation()">Register</button>
            </div>
        </form>
    </div>
</body>

</html>