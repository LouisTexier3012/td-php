<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire pour obtenir les Passagers</title>
</head>
<body>
<h1>Formulaire pour obtenir les Passagers d'un Trajet</h1>

<form action="testGetPassagers.php" method="GET">
    <label for="identifiantTrajet">Identifiant du Trajet :</label>
    <input type="text" id="identifiantTrajet" name="idTrajet" required>
    <button type="submit">Obtenir les Passagers</button>
</form>
</body>
</html>
