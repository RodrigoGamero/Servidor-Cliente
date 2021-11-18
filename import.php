<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/botonera.css">
    <title>Document</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Página principal</a></li>
            <li><a href="create.php">Nuevo elemento</a></li>
            <li><a href="list.php">Lista elementos</a></li>
            <li><a class="active" href="import.php">Importar elementos</a></li>
        </ul>
    </nav>
    <form enctype="multipart/form-data">
      <input type="file" name="dataToImport" accept=".csv" required/>
      <input type="submit" value="Upload"/>
    </form>
</body>
</html>