<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription Moina Vacances</title>
   <link href="https://github.com/ekoueth/mwuna_vacances/blob/main/Style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <h1>Inscription Moina Vacances</h1>
    <form method="POST" action="traitement.php" name="formulaire">
        <table>
            <tr>
                <td>Nom:</td>
                <td><input type="text" name="nom" size="20"></td>
            </tr>
            <tr>
                <td>Prénom:</td>
                <td><input type="text" name="prenom" size="20"></td>
            </tr>
            <tr>
                <td>Date de naissance:</td>
                <td><input type="date" name="datedenaissance" size="8"></td>
            </tr>
            <tr>
                <td>Nom du tuteur:</td>
                <td><input type="text" name="nomdututeur" size="20"></td>
            </tr>
            <tr>
                <td>Prénom du tuteur:</td>
                <td><input type="text" name="prenomdututeur" size="20"></td>
            </tr>
            <tr>
                <td>Numéro de téléphone du tuteur:</td>
                <td><input type="text" name="numteldututeur" size="10"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email" size="20"></td>
            </tr>
            <tr>
                <td>Destination choisie:</td>
                <td>
                    <label for="destination1">
                        <input type="radio" id="congo" name="destination" value="congo"> congo
                    </label>
                    <br>
                    <label for="destination2">
                        <input type="radio" id="senegal" name="destination" value="senegal"> senegal
                    </label>
                </td>
            </tr>
            <tr>
            <tr>
                <td colspan="2"><input type="submit" value="Valider"> validation de mon choix </td>
            </tr>
        </table>
    </form>
</body>
</html>
