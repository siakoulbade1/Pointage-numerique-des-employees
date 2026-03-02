<!DOCTYPE html>
<html lang="fr">
@include('dash.siaka.head')
<body>
    <!-- Sidebar -->
    @include('dash.siaka.sidebar')

    <!-- Main Content -->
    <div id="content">
        <!-- Header -->
       @include('dash.siaka.header')

        <!-- Page Content -->
        <main class="container-fluid p-4" id="dashboard">
            <!-- Quick Stats -->
            @include('dash.siaka.statistique')
            <!-- Main Dashboard -->

        </main>

        <div class="dashboard-section mb-4" data-aos="fade-up" data-aos-delay="150">
                        <div class="section-header">
                            <h3>
                                <i class="bi bi-calendar-day"></i>
                                Aujourd'hui
                            </h3>
                            <span class="badge bg-primary rounded-pill">128/142</span>
                        </div>
                        <div class="section-body">
                            <!-- Progress Stats -->
                            <div class="mb-4">
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="fw-600">Présents</span>
                                    <span class="fw-600 text-success">90.1%</span>
                                </div>
                                <div class="progress" style="height: 8px; border-radius: 4px;">
                                    <div class="progress-bar bg-success" style="width: 90.1%"></div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="fw-600">En retard</span>
                                    <span class="fw-600 text-warning">8.5%</span>
                                </div>
                                <div class="progress" style="height: 8px; border-radius: 4px;">
                                    <div class="progress-bar bg-warning" style="width: 8.5%"></div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="fw-600">Absents</span>
                                    <span class="fw-600 text-danger">1.4%</span>
                                </div>
                                <div class="progress" style="height: 8px; border-radius: 4px;">
                                    <div class="progress-bar bg-danger" style="width: 1.4%"></div>
                                </div>
                            </div>

                            <!-- Quick List -->
                            <h6 class="mb-3">Dernières présences</h6>
                            <div class="list-group list-group-flush">
                                <div class="list-group-item px-0 d-flex align-items-center">
                                    <div class="employee-avatar me-3" style="width: 40px; height: 40px; font-size: 16px;">MA</div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-0">Marie Allard</h6>
                                        <small class="text-muted">Arrivée: 08:45</small>
                                    </div>
                                    <span class="employee-status status-present" style="font-size: 12px; padding: 4px 8px;">
                                        Présent
                                    </span>
                                </div>

                                <div class="list-group-item px-0 d-flex align-items-center">
                                    <div class="employee-avatar me-3" style="width: 40px; height: 40px; font-size: 16px; background: linear-gradient(135deg, #f97316, #fb923c);">JP</div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-0">Jean Petit</h6>
                                        <small class="text-muted">Arrivée: 09:30</small>
                                    </div>
                                    <span class="employee-status status-late" style="font-size: 12px; padding: 4px 8px;">
                                        Retard
                                    </span>
                                </div>

                                <div class="list-group-item px-0 d-flex align-items-center">
                                    <div class="employee-avatar me-3" style="width: 40px; height: 40px; font-size: 16px; background: linear-gradient(135deg, #10b981, #34d399);">SD</div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-0">Sophie Dubois</h6>
                                        <small class="text-muted">Arrivée: 08:30</small>
                                    </div>
                                    <span class="employee-status status-present" style="font-size: 12px; padding: 4px 8px;">
                                        Présent
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
    </div>


    <!-- Add Employee Modal -->
   @include('dash.siaka.modal_ajouter_emp')
    @include('dash.siaka.script')

</body>
</html>
