<!-- Contruction de la vue sous forme d'un tableau contenant les informations du ou des patients 
    
    view.php reçoit deux variables issues du contrôleur patients.php

        $patients (tableau associatif contenant autant ligne que de patients dans la BDD)

-->

<h1><?= $title?></h1>

<table border=1>
    <tr>
        <th>Nom</th>
        <th>Prénom</th>

    </tr>

    <?php foreach ($patients as $patient): ?>
        <tr>
            <td><?= esc($patient['nom_patient']) ?></td>
            <td><?= esc($patient['prenom_patient']) ?></td>

        </tr>
    <?php endforeach; ?>


</table>



