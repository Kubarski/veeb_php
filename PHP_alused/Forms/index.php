<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vormitöötlus</title>
    <!--<link rel="stylesheet" href="css/style.css">-->
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">-->
    <!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"-->
    <!--crossorigin="anonymous">-->
</head>
<body>
<div >
    <div >
        <div >
            <h2>Ruumalate arvutamine</h2>
            <hr>
            <form method="get" action="vormi_tootlus.php">
                <h3>Kera</h3>
                <div>
                    <div>
                        <label class="sr-only" for="inlineFormInput1">Kera</label>
                        <input type="text" class="form-control mb-2" id="inlineFormInput1" placeholder="kera raadius" name="keraRaadius">
                    </div>
                </div>
                <h3>Silinder</h3>
                <div>
                    <div>
                        <label class="sr-only" for="inlineFormInput2_1">Silinder</label>
                        <input type="text" class="form-control mb-2" id="inlineFormInput2_1" placeholder="silindri raadius" name="silindriRaadius">
                    </div>
                    <div class="col-auto">
                        <label class="sr-only" for="inlineFormInput2_2">Silinder</label>
                        <input type="text" class="form-control mb-2" id="inlineFormInput2_2" placeholder="silindri kõrgus" name="silindriKorgus">
                    </div>
                </div>
                <h3>Koonus</h3>
                <div>
                    <div>
                        <label class="sr-only" for="inlineFormInput3_1">Koonus</label>
                        <input type="text" class="form-control mb-2" id="inlineFormInput3_1" placeholder="koonuse raadius" name="koonuseRaadius">
                    </div>
                    <div>
                        <label class="sr-only" for="inlineFormInput3_2">Silinder</label>
                        <input type="text" class="form-control mb-2" id="inlineFormInput3_2" placeholder="koonuse kõrgus" name="koonuseKorgus">
                    </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-info mb-2">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>