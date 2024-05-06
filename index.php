<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Generatore di Password Sicure</title>
</head>
<body>
    <main>
        <div class="text-center">
            <main class="container">
                <div class="text-center titles">
                    <h1 class="display-4">Strong Password Generator</h1>
                    <p class="lead">Genera una password sicura</p>
                </div>
                <div class="result mb-3 p-3">
                    <?php
                    include 'functions.php';

                    $passwordLength = isset($_GET['lunghezza']) ? intval($_GET['lunghezza']) : 0;
                    if ($passwordLength > 0) {
                        $password = generatePassword($passwordLength);
                        echo "<span>La tua password è: $password</span>";
                    } else {
                        echo "<span class='text-muted'>Nessun Parametro valido inserito</span>";
                    }
                    ?>
                </div>
                <form action="index.php" method="get">
                    <div class="input p-3 d-flex justify-content-between align-items-center">
                        <label class="me-3 mb-0">Lunghezza della password:</label>
                        <input type="text" name="lunghezza" class="form-control" value="<?php echo isset($_GET['lunghezza']) ? $_GET['lunghezza'] : ''; ?>">
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">Genera Password</button>
                    </div>
                </form>
            </main>
        </div>
    </main>
</body>
</html>