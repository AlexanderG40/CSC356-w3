<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AG MARS Application</title>
    <!-- Added the css -->
    <link rel="stylesheet" href="w3.css">
    <!-- Added JS to display and validate the form -->
    <script>
        function validateForm(){
            event.preventDefault

            //var fullName = document.getElementById("fullName").value;
            var fullName = document.appForm.fullName.value;
            console.log("fullName = " + fullName);
            var rank = document.appForm.rank.value;

            var messageText = ""
            if(fullName == ""){
                messageText = "Please enter your full name.<br>";
            }

            if(rank == ""){
                messageText += "Please enter your rank.<br>";
            }

            document.getElementById("message").innerHTML = messageText;
        }
    </script>
</head>
<body>
    <!-- Title for our mars APP -->
    <header>
        <h1>AG MARS Application</h1>
    </header>
    <!-- Added the questions to the pilot user -->
    <main>
        <div id="message"></div>
        <form name="appForm" id="appForm" onsubmit="return validateForm();" action="w3app.php" 
        method="post">
        <label for="fullName">Enter Full Name:</label>
        <input type="text" id="fullName" name="fullName">
        <br>
        <label for="rank">Rank/Position:</label>
        <input type="text" id="rank" name="rank">
        <br>
        <label for="heights">Are you afraid of heights?</label>
        <input type="radio" name="heights" id="heights" value="yes">
        <label for="heightsYes">Yes</label>
        <input type="radio" name="heights" id="heights" value="no"><label for="heightsNo">No</label>
        <br>
        <label for="age">Age:</label>
        <input type="text" id="age" name="age">
        <br>
        <label for="pilotLic">What is the number of your pilot License?</label>
        <input type="text" id="pilotLic" name="pilotLic">
        <br>
        <label for="Mars">Why do you want to go to mars?</label>
        <input type="text" id="Mars" name="Mars">
        <br>
        <input type="submit" value="Submit">

    </form>
    </main>
</body>
</html>