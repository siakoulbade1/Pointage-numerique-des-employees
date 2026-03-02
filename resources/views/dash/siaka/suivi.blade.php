<div class="dashboard-section" data-aos="fade-up" data-aos-delay="200" id="attendance">
                        <div class="section-header">
                            <h3>
                                <i class="bi bi-clock-history"></i>
                                Suivi des présences
                            </h3>
                            <div class="section-tools">
                                <select class="form-select" style="min-width: 160px;">
                                    <option>Aujourd'hui</option>
                                    <option>Cette semaine</option>
                                    <option>Ce mois</option>
                                </select>
                            </div>
                        </div>
                        <div class="section-body">
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="attendance-widget">
                                        <h5 class="text-center mb-3">Heure d'arrivée</h5>
                                        <div class="attendance-time" id="arrivalTime">08:45</div>
                                        <div class="d-grid">
                                            <button class="btn btn-light" id="recordArrivalBtn">
                                                <i class="bi bi-box-arrow-in-down me-2"></i>
                                                Enregistrer l'arrivée
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <div class="attendance-widget" style="background: linear-gradient(135deg, #f97316, #fb923c);">
                                        <h5 class="text-center mb-3">Heure de départ</h5>
                                        <div class="attendance-time" id="departureTime">17:30</div>
                                        <div class="d-grid">
                                            <button class="btn btn-light" id="recordDepartureBtn">
                                                <i class="bi bi-box-arrow-up me-2"></i>
                                                Enregistrer le départ
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="employeeSelect" class="form-label">Sélectionner l'employé</label>
                                <select class="form-select" id="employeeSelect">
                                    <option value="">-- Choisir un employé --</option>
                                    <option value="1">Marie Allard (Responsable RH)</option>
                                    <option value="2">Jean Petit (Développeur Senior)</option>
                                    <option value="3">Sophie Dubois (Chef de Projet)</option>
                                    <option value="4">Thomas Martin (Analyste Financier)</option>
                                </select>
                            </div>

                            <div class="alert alert-light border" style="border-radius: 12px;">
                                <div class="d-flex align-items-center">
                                    <div class="me-3">
                                        <i class="bi bi-info-circle-fill text-primary" style="font-size: 24px;"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-1">Heure actuelle du système</h6>
                                        <div id="currentTime" class="h4 mb-0">09:15</div>
                                        <small class="text-muted">Cliquez sur les boutons pour enregistrer les heures</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
