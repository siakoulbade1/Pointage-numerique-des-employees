<div class="modal fade" id="addEmployeeModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ajouter un nouvel employé</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <form id="addEmployeeForm" method="POST" action="{{ route('employees.store') }}">
                    @csrf

                    <div class="row g-3">

                        <div class="col-md-6">
                            <label class="form-label">Matricule</label>
                            <input type="text" name="matricule" class="form-control" placeholder="Ex: M0152" required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Prénom</label>
                            <input type="text" name="prenom" class="form-control" placeholder="Prénom" required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Nom</label>
                            <input type="text" name="nom" class="form-control" placeholder="Nom" required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Fonction</label>
                            <input type="text" name="fonction" class="form-control" placeholder="Ex: Développeur Full-Stack" required>
                        </div>

                        

                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-outline" data-bs-dismiss="modal">
                    Annuler
                </button>

                <button type="submit" form="addEmployeeForm" class="btn btn-primary">
                    <i class="bi bi-plus-lg me-2"></i>
                    Ajouter l'employé
                </button>
            </div>
        </div>
    </div>
</div>
