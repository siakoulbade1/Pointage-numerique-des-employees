 <div class="modal fade" id="addEmployeeModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Ajouter un nouvel employé</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="addEmployeeForm">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="empFirstName" class="form-label">Prénom</label>
                                <input type="text" class="form-control" id="empFirstName" placeholder="Prénom" required>
                            </div>
                            <div class="col-md-6">
                                <label for="empLastName" class="form-label">Nom</label>
                                <input type="text" class="form-control" id="empLastName" placeholder="Nom" required>
                            </div>
                            <div class="col-md-6">
                                <label for="empEmail" class="form-label">Email professionnel</label>
                                <input type="email" class="form-control" id="empEmail" placeholder="email@entreprise.com" required>
                            </div>
                            <div class="col-md-6">
                                <label for="empPhone" class="form-label">Téléphone</label>
                                <input type="tel" class="form-control" id="empPhone" placeholder="+33 1 23 45 67 89">
                            </div>
                            <div class="col-md-6">
                                <label for="empDepartment" class="form-label">Département</label>
                                <select class="form-select" id="empDepartment" required>
                                    <option value="">Sélectionner...</option>
                                    <option value="IT">Informatique</option>
                                    <option value="HR">Ressources Humaines</option>
                                    <option value="Finance">Finance</option>
                                    <option value="Marketing">Marketing</option>
                                    <option value="Sales">Ventes</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="empPosition" class="form-label">Poste</label>
                                <input type="text" class="form-control" id="empPosition" placeholder="Ex: Développeur Full-Stack" required>
                            </div>
                            <div class="col-md-6">
                                <label for="empStartDate" class="form-label">Date d'embauche</label>
                                <input type="date" class="form-control" id="empStartDate" required>
                            </div>
                            <div class="col-md-6">
                                <label for="empStatus" class="form-label">Statut</label>
                                <select class="form-select" id="empStatus" required>
                                    <option value="active">Actif</option>
                                    <option value="probation">Période d'essai</option>
                                    <option value="intern">Stagiaire</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline" data-bs-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-primary" id="submitEmployeeForm">
                        <i class="bi bi-plus-lg me-2"></i>
                        Ajouter l'employé
                    </button>
                </div>
            </div>
        </div>
    </div>
