<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zangeres</title>
    <link rel="stylesheet" href="../../../public/css/style.css">
</head>

<body>
    <h3><?= $data['title']; ?></h3>
    <table border="1">
        <thead>
            <th>Naam</th>
            <th>Nettowaarde (Miljoen)</th>
            <th>Land</th>
            <th>Mobiel</th>
            <th>Leeftijd</th>
        </thead>
        <tbody> <?= $data['rows']; ?> </tbody>
    </table>
</body>

</html>