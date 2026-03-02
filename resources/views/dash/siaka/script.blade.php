<!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS Animation -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Custom JavaScript -->
    <script>
        // Initialize AOS
        AOS.init({
            duration: 600,
            once: true,
            offset: 100
        });

        // Sidebar Toggle
        const sidebar = document.getElementById('sidebar');
        const content = document.getElementById('content');
        const toggleBtn = document.getElementById('sidebarCollapse');

        toggleBtn.addEventListener('click', function() {
            sidebar.classList.toggle('collapsed');
            content.classList.toggle('expanded');

            // Mobile behavior
            if (window.innerWidth <= 992) {
                sidebar.classList.toggle('active');
            }

            // Change icon
            const icon = this.querySelector('i');
            icon.classList.toggle('bi-list');
            icon.classList.toggle('bi-x');
        });

        // Update time display
        function updateTime() {
            const now = new Date();
            const timeString = now.toLocaleTimeString('fr-FR', {
                hour: '2-digit',
                minute: '2-digit',
                hour12: false
            });

            document.getElementById('currentTime').textContent = timeString;

            // Update arrival time if not recorded
            if (!document.getElementById('arrivalTime').hasAttribute('data-recorded')) {
                document.getElementById('arrivalTime').textContent = timeString;
            }

            // Update departure time (arrival + 8.5 hours)
            if (!document.getElementById('departureTime').hasAttribute('data-recorded')) {
                const departureTime = new Date(now.getTime() + (8.5 * 60 * 60 * 1000));
                const departureString = departureTime.toLocaleTimeString('fr-FR', {
                    hour: '2-digit',
                    minute: '2-digit',
                    hour12: false
                });
                document.getElementById('departureTime').textContent = departureString;
            }
        }

        // Initialize time
        updateTime();
        setInterval(updateTime, 30000);

        // Record arrival
        document.getElementById('recordArrivalBtn').addEventListener('click', function() {
            const employeeSelect = document.getElementById('employeeSelect');
            if (!employeeSelect.value) {
                alert('Veuillez sélectionner un employé');
                return;
            }

            const time = document.getElementById('arrivalTime').textContent;
            document.getElementById('arrivalTime').setAttribute('data-recorded', 'true');

            // Success animation
            this.innerHTML = '<i class="bi bi-check-circle me-2"></i>Arrivée enregistrée';
            this.classList.add('btn-success', 'text-white');
            this.disabled = true;

            setTimeout(() => {
                this.innerHTML = '<i class="bi bi-box-arrow-in-down me-2"></i>Enregistrer l\'arrivée';
                this.classList.remove('btn-success', 'text-white');
                this.disabled = false;
                document.getElementById('arrivalTime').removeAttribute('data-recorded');
            }, 2000);
        });

        // Record departure
        document.getElementById('recordDepartureBtn').addEventListener('click', function() {
            const employeeSelect = document.getElementById('employeeSelect');
            if (!employeeSelect.value) {
                alert('Veuillez sélectionner un employé');
                return;
            }

            const time = document.getElementById('departureTime').textContent;
            document.getElementById('departureTime').setAttribute('data-recorded', 'true');

            // Success animation
            this.innerHTML = '<i class="bi bi-check-circle me-2"></i>Départ enregistré';
            this.classList.add('btn-warning', 'text-white');
            this.disabled = true;

            setTimeout(() => {
                this.innerHTML = '<i class="bi bi-box-arrow-up me-2"></i>Enregistrer le départ';
                this.classList.remove('btn-warning', 'text-white');
                this.disabled = false;
                document.getElementById('departureTime').removeAttribute('data-recorded');
            }, 2000);
        });

        // Add employee form
        document.getElementById('submitEmployeeForm').addEventListener('click', function() {
            const form = document.getElementById('addEmployeeForm');
            const firstName = document.getElementById('empFirstName').value;
            const lastName = document.getElementById('empLastName').value;
            const department = document.getElementById('empDepartment').value;

            if (!firstName || !lastName || !department) {
                alert('Veuillez remplir tous les champs obligatoires');
                return;
            }

            // Success message
            alert(`Employé ${firstName} ${lastName} ajouté avec succès !`);

            // Close modal
            const modal = bootstrap.Modal.getInstance(document.getElementById('addEmployeeModal'));
            modal.hide();

            // Reset form
            form.reset();
            document.getElementById('empStartDate').valueAsDate = new Date();
        });

        // Set default date for employee start
        document.getElementById('empStartDate').valueAsDate = new Date();

        // Navigation
        document.querySelectorAll('#sidebar a').forEach(link => {
            link.addEventListener('click', function(e) {
                if (this.getAttribute('href').startsWith('#')) {
                    e.preventDefault();

                    // Update active state
                    document.querySelectorAll('#sidebar a').forEach(item => {
                        item.classList.remove('active');
                    });
                    this.classList.add('active');

                    // Scroll to section
                    const targetId = this.getAttribute('href');
                    if (targetId !== '#') {
                        const targetElement = document.querySelector(targetId);
                        if (targetElement) {
                            window.scrollTo({
                                top: targetElement.offsetTop - 100,
                                behavior: 'smooth'
                            });
                        }
                    }
                }
            });
        });

        // Mobile sidebar handling
        function handleResize() {
            if (window.innerWidth <= 992) {
                sidebar.classList.add('collapsed');
                content.classList.add('expanded');
            }
        }

        window.addEventListener('resize', handleResize);
        handleResize();

        // Close sidebar when clicking outside on mobile
        document.addEventListener('click', function(e) {
            if (window.innerWidth <= 992 &&
                !sidebar.contains(e.target) &&
                !toggleBtn.contains(e.target) &&
                sidebar.classList.contains('active')) {
                sidebar.classList.remove('active');
            }
        });
    </script>
