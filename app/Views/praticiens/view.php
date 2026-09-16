<h1><?= esc($title) ?></h1>

<!-- Menu déroulant pour filtrer par spécialité -->
<div style="margin-bottom: 20px;">
    <label for="select-specialite"><strong>Changer de spécialité :</strong></label>
    <select id="select-specialite" onchange="window.location.href = this.value;">
        <option value="<?= site_url('praticiens/index') ?>">-- Toutes les spécialités --</option>
        
        <?php foreach ($specialites as $spec): ?>
            <option value="<?= site_url('praticiens/index?specialite=' . $spec['id_specialite']) ?>"
                <?= ($selected_spec_id == $spec['id_specialite']) ? 'selected' : '' ?>>
                <?= esc($spec['libelle']) ?>
            </option>
        <?php endforeach; ?>
    </select>
</div>

<!-- Tableau adapté à ta BDD -->
<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Spécialité</th>
            <th>N° RPPS</th>
            <th>Email</th>
            <th>Nouveau patient</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($praticiens)): ?>
            <?php foreach ($praticiens as $p): ?>
                <tr>
                    <td><?= esc($p['nom_praticien'] ?? '') ?></td>
                    <td><?= esc($p['prenom_praticien'] ?? '') ?></td>
                    <td><?= esc($p['libelle'] ?? 'Non renseignée') ?></td>
                    <td><?= esc($p['numero_RPPS'] ?? '-') ?></td>
                    <td><?= esc($p['mail_praticien'] ?? '-') ?></td>
                    <td><?= ($p['nouveau_patient'] == 1) ? 'Oui' : 'Non' ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="6">Aucun praticien trouvé.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>