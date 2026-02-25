<!DOCTYPE html>
<html>
<head>
    <title>Liste des étudiants</title>
</head>
<body>
    <h1>Liste des étudiants</h1>
    
    <p>Hôte: mysql-gestionetudiants.mysql.database.azure.com</p>
    <p>Base: gestionetudiants</p>
    <p>Utilisateur: bouchantoufimane</p>
    <p>Environnement: <?= getenv('ENV') ?: 'Production' ?></p>
    
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>N° Inscription</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Adresse</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Alami</td>
            <td>Youssef</td>
            <td>Casablanca</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Bennani</td>
            <td>Sara</td>
            <td>Rabat</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Tazi</td>
            <td>Omar</td>
            <td>Fes</td>
        </tr>
    </table>
    
    <p>Date: <?= date('d/m/Y H:i:s') ?></p>
</body>
</html>
