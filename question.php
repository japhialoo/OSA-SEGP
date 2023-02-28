<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Comfortaa" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<body class="background2">
    <br>
    <h1 class="heading2">
        Questionnaire
    </h1>
    <br>
    <br>
    <form action="/" method="POST">
        <center>
        <div class="questions">
            <div class="radio-group">
                <br>
                1. Please select your tonsil size.
                <br>
                <input type="radio" id="TS0" name="TS" value="0">
                <label for="TS0"><img src="TS/TonsilSize0.png"></label>
                <input type="radio" id="TS1" name="TS" value="1">
                <label for="TS1"><img src="TS/TonsilSize1.png"></label>
                <input type="radio" id="TS2" name="TS" value="2">
                <label for="TS2"><img src="TS/TonsilSize2.png"></label>
                <input type="radio" id="TS3" name="TS" value="3">
                <label for="TS3"><img src="TS/TonsilSize3.png"></label>
                <input type="radio" id="TS4" name="TS" value="4">
                <label for="TS4"><img src="TS/TonsilSize4.png"></label>
                <br>
                <br>
                <br>
                2. Please select your Mallampati Score 
                <br>
                <input type="radio" id="MP1" name="MP" value="1">
                <label for="MP1"><img src="MP/MP1.png" class="images"></label>
                <input type="radio" id="MP2" name="MP" value="2">
                <label for="MP2"><img src="MP/MP2.png" class="images"></label>
                <input type="radio" id="MP3" name="MP" value="3">
                <label for="MP3"><img src="MP/MP3.png" class="images"></label>
                <input type="radio" id="MP4" name="MP" value="4">
                <label for="MP2"><img src="MP/MP4.png" class="images"></label>
                <br>
                <br>
                <br>
                3. Eppworth Sleepiness Scale score
                <br>
                <div class="scale">
                    How likely are you to doze off in the following situations?
                    <input type="radio" id="EP1" name="EP1" value="0">
                    <label for="EP1"><pre class="tab">No Chance</pre></label>
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                </div>
            </div>
        </div>
        <input type="submit" value="Submit">
        </center>
    </form>





</body>

</html>