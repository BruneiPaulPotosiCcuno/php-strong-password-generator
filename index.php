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
          <span class="text-muted">Nessun Parametro valido inserito</span>
        </div>
        <div class="input p-3 d-flex justify-content-between align-items-center">
          <label class="me-3 mb-0">Lunghezza della password:</label>
          <input type="text" class="form-control">
        </div>
        <div class="mt-3">
          <button type="button" class="btn btn-primary">Genera Password</button>
          <button type="button" class="btn btn-outline-secondary">Pulisci</button>
        </div>
      </main>
    </div>
  </main>
</body>
</html>