<nav id="sidebar">
        <div class="sidebar-header">
            <div class="logo">
                <i class="bi bi-building"></i>
            </div>
            <div>
                <h3>HR Executive</h3>
                <div class="tagline">Gestion Intelligente RH</div>
            </div>
        </div>

        <div class="nav-section">
            <div class="nav-section-title">PRINCIPAL</div>
            <ul class="components">
                <li>
                    <a href="#dashboard" class="active">
                        <i class="bi bi-speedometer2"></i>
                        <span>Tableau de bord</span>
                    </a>
                </li>

            </ul>
        </div>

        <div class="nav-section">
            <div class="nav-section-title">GESTION</div>
            <ul class="components">
                <li>
                    <a href="{{ route('employee') }}">
                        <i class="bi bi-people"></i>
                        <span>Employés</span>
                    </a>
                </li>
                <li>
                    <a href="#attendance">
                        <i class="bi bi-clock-history"></i>
                        <span>Présences</span>
                    </a>
                </li>
                <li>
                    <a href="#schedule">
                        <i class="bi bi-calendar-week"></i>
                        <span>Planning</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="nav-section">
            <div class="nav-section-title">OUTILS</div>
            <ul class="components">
                <li>
                    <a href="#reports">
                        <i class="bi bi-file-earmark-text"></i>
                        <span>Rapports</span>
                    </a>
                </li>
                <li>
                    <a href="#settings">
                        <i class="bi bi-gear"></i>
                        <span>Paramètres</span>
                    </a>
                </li>
                <li>
                    <a href="#help">
                        <i class="bi bi-question-circle"></i>
                        <span>Aide</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="sidebar-footer">
            <div class="user-profile">
                <div class="avatar">SD</div>
                <div class="user-info">
                    <h6>Sarah Dubois</h6>
                    <small>Directrice RH</small>
                </div>
            </div>
        </div>
    </nav>
