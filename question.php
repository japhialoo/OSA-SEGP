<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Comfortaa" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="background2">
    <nav class="navbar navbar-expand-lg bg-body-tertiary position-sticky">
        <div class="container-fluid">
            <a class="navbarLinks" href="MainPage.php">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="navbarLinks" href="about.php">Learn More &#8594;</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br>
    <h1 class="heading2">
        Questionnaire
    </h1>
    <br>
    <br>
    <form action="result.php" method="POST" id="myForm">
        <center>
            <div class="questions">
                <div class="radio-group">
                    <br>
                    1. Please select your tonsil size.
                    <br>
                    <input type="radio" id="TS0" name="TS" value="0" required>
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
                    <input type="radio" id="MP1" name="MP" value="1" required>
                    <label for="MP1"><img src="MP/MP1.png" class="images"></label>
                    <input type="radio" id="MP2" name="MP" value="2">
                    <label for="MP2"><img src="MP/MP2.png" class="images"></label>
                    <input type="radio" id="MP3" name="MP" value="3">
                    <label for="MP3"><img src="MP/MP3.png" class="images"></label>
                    <input type="radio" id="MP4" name="MP" value="4">
                    <label for="MP4"><img src="MP/MP4.png" class="images"></label>
                    <br>
                    <br>
                    <br>
                    3. Eppworth Sleepiness Scale score
                    <br>
                    <div class="scale">
                        <table class="table table-bordered border-dark">
                            <tr>
                                <td>How likely are you to doze off in the following situations?</td>
                                <td>No Chance</td>
                                <td>Slight Chance</td>
                                <td>Moderate Chane</td>
                                <td>High Chance</td>
                            </tr>
                            <tr>
                                <td>Sitting and reading</td>
                                <td><input type="radio" class="chb" id="EP1n" name="EP1" value="0" required></td>
                                <td><input type="radio" class="chb" id="EP1s" name="EP1" value="1"></td>
                                <td><input type="radio" class="chb" id="EP1m" name="EP1" value="2"></td>
                                <td><input type="radio" class="chb" id="EP1h" name="EP1" value="3"></td>
                            </tr>
                            <tr>
                                <td>Watching television</td>
                                <td><input type="radio" class="chb" id="EP2n" name="EP2" value="0" required></td>
                                <td><input type="radio" class="chb" id="EP2s" name="EP2" value="1"></td>
                                <td><input type="radio" class="chb" id="EP2m" name="EP2" value="2"></td>
                                <td><input type="radio" class="chb" id="EP2h" name="EP2" value="3"></td>
                            </tr>
                            <tr>
                                <td>Sitting inactive, in a public space</td>
                                <td><input type="radio" class="chb" id="EP3n" name="EP3" value="0" required></td>
                                <td><input type="radio" class="chb" id="EP3s" name="EP3" value="1"></td>
                                <td><input type="radio" class="chb" id="EP3m" name="EP3" value="2"></td>
                                <td><input type="radio" class="chb" id="EP3h" name="EP3" value="3"></td>
                            </tr>
                            <tr>
                                <td>Lying down to rest in the afternoon when circumstances permit</td>
                                <td><input type="radio" class="chb" id="EP4n" name="EP4" value="0" required></td>
                                <td><input type="radio" class="chb" id="EP4s" name="EP4" value="1"></td>
                                <td><input type="radio" class="chb" id="EP4m" name="EP4" value="2"></td>
                                <td><input type="radio" class="chb" id="EP4h" name="EP4" value="3"></td>
                            </tr>
                            <tr>
                                <td>Sitting and talking to someone</td>
                                <td><input type="radio" class="chb" id="EP5n" name="EP5" value="0" required></td>
                                <td><input type="radio" class="chb" id="EP5s" name="EP5" value="1"></td>
                                <td><input type="radio" class="chb" id="EP5m" name="EP5" value="2"></td>
                                <td><input type="radio" class="chb" id="EP5h" name="EP5" value="3"></td>
                            </tr>
                            <tr>
                                <td>Sitting quietly after a lunch without alcohol</td>
                                <td><input type="radio" class="chb" id="EP6n" name="EP6" value="0" required></td>
                                <td><input type="radio" class="chb" id="EP6s" name="EP6" value="1"></td>
                                <td><input type="radio" class="chb" id="EP6m" name="EP6" value="2"></td>
                                <td><input type="radio" class="chb" id="EP6h" name="EP6" value="3"></td>
                            </tr>
                            <tr>
                                <td>As a passenger in a car for an hour without a break</td>
                                <td><input type="radio" class="chb" id="EP7n" name="EP7" value="0" required></td>
                                <td><input type="radio" class="chb" id="EP7s" name="EP7" value="1"></td>
                                <td><input type="radio" class="chb" id="EP7m" name="EP7" value="2"></td>
                                <td><input type="radio" class="chb" id="EP7h" name="EP7" value="3"></td>
                            </tr>
                            <tr>
                                <td>In a car, while stopped for a few minutes in traffic</td>
                                <td><input type="radio" class="chb" id="EP8n" name="EP8" value="0" required></td>
                                <td><input type="radio" class="chb" id="EP8s" name="EP8" value="1"></td>
                                <td><input type="radio" class="chb" id="EP8m" name="EP8" value="2"></td>
                                <td><input type="radio" class="chb" id="EP8h" name="EP8" value="3"></td>
                            </tr>
                        </table>
                        <div class="questions">
                            <br>
                            <br>
                            <label for="NC" class="form-label" required>4. Neck Circumference :</label>
                            <style>
                                input[type=number] {
                                    border: 2px solid black
                                }
                            </style>
                            <input type="number" step="any" class="form-control" id="NC" name="NC" placeholder="cm" required>

                            <br>
                            <br>
                            <label for="W" class="form-label">5. Weight :</label>
                            <input type="number" step="any" class="form-control" id="W" name="W" placeholder="kg" required>

                            <br>
                            <br>
                            <label for="H" class="form-label">6. Height :</label>
                            <input type="number" step="any" class="form-control" id="H" name="H" placeholder="m" required>

                        </div>
                        <div class="questions">
                            <br>
                            <br>

                            7. Were you ever diagnose with any of the following conditions? :

                            <input type="hidden" name="PPW" value="0">
                            <input type="hidden" name="RN" value="0">
                            <input type="hidden" name="MN" value="0">

                            <br>
                            <br>
                            <div class="scale">
                                <input type="checkbox" id="PPW" name="PPW" value="1">
                                <label for="PPW">Post Posterior Webbing</label>

                                <input type="checkbox" id="RN" name="RN" value="1">
                                <label for="RN">Retrognathia</label>

                                <input type="checkbox" id="MN" name="MN" value="1">
                                <label for="MN">Micrognathia</label>

                            </div>
                        </div>

                        <br><br><br>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <br><br><br><br><br><br>
        </center>
    </form>



    <script src="script.js"></script>

</body>

</html>