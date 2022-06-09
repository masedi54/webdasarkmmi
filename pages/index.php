<!doctype html>
<html lang="en">

<head>
    <title>KMMI Web Design - Course 8</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="col-8" style="margin: auto; padding: 10px;">

        <div class="container">
                <form id="game-form">
                    <div class="mb-3 row">
                        <label for="guess" class="col-sm-1-12 col-form-label">Guess Number</label>
                        <div class="col-sm-1-12">
                            <input type="number" class="form-control" name="guess" id="guess-value" placeholder="">
                        </div>
                    </div>
                    <div class="card border-warning">
                        <div class="card-body">
                            <p class="card-text" id="hint-box">Guess the number!</p>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-sm-10" style="margin-top: 10px;">
                            <button type="submit" class="btn btn-primary">Play</button>
                        </div>
                    </div>
                </form>
        </div>

    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="app.js"></script>

</body>

</html>

