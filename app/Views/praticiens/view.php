<!-- Contruction de la vue sous forme d'un tableau contenant les informations du ou des patients 
    
    view.php reçoit deux variables issues du contrôleur patients.php

        $patients (tableau associatif contenant autant ligne que de patients dans la BDD)

-->

<h1><?= $title?></h1>

<table border=1>
    <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Spécialité</th>

    </tr>

    <?php foreach ($praticiens as $praticien): ?>
        <tr>
            <td><?= esc($praticien['nom_praticien']) ?></td>
            <td><?= esc($praticien['prenom_praticien']) ?></td>
            <td><?= esc($praticien['libelle']) ?></td>

        </tr>
    <?php endforeach; ?>


</table>


