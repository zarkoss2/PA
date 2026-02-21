<?php
include './include/header-admin.php';
?>

<div class="page-title">Gestion des abonnements</div>

<div class="row mb-4">
    <div class="col">
        <div class="btn-group" role="group">
            <button class="btn btn-sm btn-outline-primary">Tous</button>
            <button class="btn btn-sm btn-outline-primary">Actifs</button>
            <button class="btn btn-sm btn-outline-primary">Suspendus</button>
            <button class="btn btn-sm btn-outline-primary">Résiliés</button>
        </div>
    </div>
    <div class="col text-end">
        <button class="btn btn-sm btn-success">+ Nouvelle formule</button>
    </div>
</div>

<div class="row mb-4">
    <div class="col-md-4">
        <div class="stat-card primary">
            <div class="stat-label">Abonnements actifs</div>
            <div class="stat-value">234</div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="stat-card warning">
            <div class="stat-label">Suspendus</div>
            <div class="stat-value">12</div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="stat-card success">
            <div class="stat-label">Revenus mensuels</div>
            <div class="stat-value">5,850€</div>
        </div>
    </div>
</div>

<div class="admin-card">
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Formule</th>
                    <th>Acronyme</th>
                    <th>Prix/mois</th>
                    <th>Avantages</th>
                    <th>Abonnés</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Essai</strong></td>
                    <td><span class="badge bg-light text-dark">FREE</span></td>
                    <td>Gratuit</td>
                    <td>
                        <small>
                            <i class="bi bi-check-circle-fill" style="color: #10b981;"></i> 5 prestations<br>
                            <i class="bi bi-check-circle-fill" style="color: #10b981;"></i> Forum
                        </small>
                    </td>
                    <td>156</td>
                    <td><span class="badge bg-success">Actif</span></td>
                    <td>
                        <button class="btn btn-sm btn-outline-secondary"><i class="bi bi-pencil"></i></button>
                    </td>
                </tr>
                <tr>
                    <td><strong>Actif</strong></td>
                    <td><span class="badge" style="background-color: #4f46e5;">ACTIVE</span></td>
                    <td>29,99€</td>
                    <td>
                        <small>
                            <i class="bi bi-check-circle-fill" style="color: #10b981;"></i> Accès complet<br>
                            <i class="bi bi-check-circle-fill" style="color: #10b981;"></i> Support prioritaire
                        </small>
                    </td>
                    <td>78</td>
                    <td><span class="badge bg-success">Actif</span></td>
                    <td>
                        <button class="btn btn-sm btn-outline-secondary"><i class="bi bi-pencil"></i></button>
                    </td>
                </tr>
                <tr>
                    <td><strong>Premium</strong></td>
                    <td><span class="badge" style="background-color: #f59e0b;">PREMIUM</span></td>
                    <td>49,99€</td>
                    <td>
                        <small>
                            <i class="bi bi-check-circle-fill" style="color: #10b981;"></i> Tout Actif +<br>
                            <i class="bi bi-check-circle-fill" style="color: #10b981;"></i> Coaching personnalisé
                        </small>
                    </td>
                    <td>89</td>
                    <td><span class="badge bg-success">Actif</span></td>
                    <td>
                        <button class="btn btn-sm btn-outline-secondary"><i class="bi bi-pencil"></i></button>
                    </td>
                </tr>
                <tr>
                    <td><strong>VIP</strong></td>
                    <td><span class="badge" style="background-color: #d926d1;">VIP</span></td>
                    <td>79,99€</td>
                    <td>
                        <small>
                            <i class="bi bi-check-circle-fill" style="color: #10b981;"></i> Tout Premium +<br>
                            <i class="bi bi-check-circle-fill" style="color: #10b981;"></i> Concierge 24/7
                        </small>
                    </td>
                    <td>11</td>
                    <td><span class="badge bg-success">Actif</span></td>
                    <td>
                        <button class="btn btn-sm btn-outline-secondary"><i class="bi bi-pencil"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php
include './include/footer-admin.php';
?>
