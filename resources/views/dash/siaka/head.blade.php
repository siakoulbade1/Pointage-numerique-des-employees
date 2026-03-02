<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HR Executive | Gestion Intelligente des Employés</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        :root {
            --primary: #4f46e5;
            --primary-dark: #4338ca;
            --primary-light: #818cf8;
            --secondary: #ec4899;
            --success: #10b981;
            --warning: #f59e0b;
            --danger: #ef4444;
            --dark: #1e293b;
            --light: #f8fafc;
            --gray-100: #f1f5f9;
            --gray-200: #e2e8f0;
            --gray-300: #cbd5e1;
            --gray-400: #94a3b8;
            --gray-500: #64748b;
            --gray-600: #475569;
            --sidebar-width: 280px;
            --sidebar-collapsed: 80px;
            --header-height: 72px;
            --border-radius: 16px;
            --shadow-sm: 0 1px 2px 0 rgb(0 0 0 / 0.05);
            --shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1);
            --shadow-md: 0 10px 15px -3px rgb(0 0 0 / 0.1);
            --shadow-lg: 0 20px 25px -5px rgb(0 0 0 / 0.1);
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, sans-serif;
            background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
            color: var(--gray-600);
            overflow-x: hidden;
            font-weight: 400;
            line-height: 1.6;
        }

        h1, h2, h3, h4, h5, h6 {
            font-weight: 700;
            color: var(--dark);
            letter-spacing: -0.025em;
        }

        /* Sidebar - Design Premium */
        #sidebar {
            width: var(--sidebar-width);
            background: linear-gradient(180deg, var(--dark) 0%, #0f172a 100%);
            color: white;
            position: fixed;
            height: 100vh;
            transition: var(--transition);
            z-index: 1050;
            overflow-y: auto;
            box-shadow: var(--shadow-lg);
            border-right: none;
            padding-bottom: 100px;
        }

        #sidebar.collapsed {
            width: var(--sidebar-collapsed);
        }

        #sidebar.collapsed .sidebar-header h3,
        #sidebar.collapsed .sidebar-header .tagline,
        #sidebar.collapsed .nav-link span,
        #sidebar.collapsed .badge {
            opacity: 0;
            width: 0;
            display: none;
        }

        .sidebar-header {
            padding: 28px 24px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            display: flex;
            align-items: center;
            gap: 16px;
            height: var(--header-height);
        }

        .sidebar-header .logo {
            width: 48px;
            height: 48px;
            border-radius: 14px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 8px 32px rgba(79, 70, 229, 0.4);
            flex-shrink: 0;
        }

        .sidebar-header .logo i {
            font-size: 24px;
        }

        .sidebar-header h3 {
            font-size: 20px;
            font-weight: 800;
            color: white;
            margin-bottom: 4px;
            white-space: nowrap;
        }

        .sidebar-header .tagline {
            font-size: 12px;
            color: rgba(255, 255, 255, 0.6);
            font-weight: 500;
            letter-spacing: 0.5px;
        }

        .nav-section {
            padding: 24px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        }

        .nav-section:last-child {
            border-bottom: none;
        }

        .nav-section-title {
            padding: 0 24px 12px;
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: rgba(255, 255, 255, 0.4);
            font-weight: 600;
        }

        #sidebar ul.components {
            list-style: none;
            padding: 0;
        }

        #sidebar ul li {
            position: relative;
        }

        #sidebar ul li a {
            display: flex;
            align-items: center;
            padding: 14px 24px;
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: var(--transition);
            font-weight: 500;
            position: relative;
            overflow: hidden;
            white-space: nowrap;
        }

        #sidebar ul li a::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 4px;
            background: linear-gradient(to bottom, var(--primary), var(--secondary));
            transform: translateX(-100%);
            transition: var(--transition);
            border-radius: 0 2px 2px 0;
        }

        #sidebar ul li a:hover {
            color: white;
            background: rgba(255, 255, 255, 0.05);
            padding-left: 32px;
        }

        #sidebar ul li a.active {
            color: white;
            background: rgba(255, 255, 255, 0.08);
            padding-left: 32px;
        }

        #sidebar ul li a.active::before {
            transform: translateX(0);
        }

        #sidebar ul li a i {
            font-size: 18px;
            width: 24px;
            text-align: center;
            margin-right: 16px;
            flex-shrink: 0;
        }

        #sidebar ul li a .badge {
            margin-left: auto;
            background: linear-gradient(135deg, var(--secondary), #db2777);
            font-size: 11px;
            padding: 4px 8px;
            font-weight: 600;
            border-radius: 20px;
            box-shadow: 0 4px 12px rgba(236, 72, 153, 0.3);
        }

        .sidebar-footer {
            position: fixed;
            bottom: 0;
            width: var(--sidebar-width);
            padding: 20px;
            background: rgba(15, 23, 42, 0.95);
            backdrop-filter: blur(10px);
            border-top: 1px solid rgba(255, 255, 255, 0.08);
            transition: var(--transition);
        }

        #sidebar.collapsed .sidebar-footer {
            width: var(--sidebar-collapsed);
            padding: 20px 10px;
        }

        .user-profile {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .user-profile .avatar {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            background: linear-gradient(135deg, #f97316, #fb923c);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 16px;
            flex-shrink: 0;
            box-shadow: 0 8px 24px rgba(249, 115, 22, 0.3);
        }

        .user-info {
            overflow: hidden;
        }

        .user-info h6 {
            font-size: 14px;
            color: white;
            margin-bottom: 2px;
            white-space: nowrap;
        }

        .user-info small {
            font-size: 12px;
            color: rgba(255, 255, 255, 0.6);
            white-space: nowrap;
        }

        /* Main Content */
        #content {
            margin-left: var(--sidebar-width);
            transition: var(--transition);
            min-height: 100vh;
        }

        #content.expanded {
            margin-left: var(--sidebar-collapsed);
        }

        /* Header */
        .main-header {
            height: var(--header-height);
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(226, 232, 240, 0.6);
            position: sticky;
            top: 0;
            z-index: 1000;
            display: flex;
            align-items: center;
            padding: 0 32px;
        }

        #sidebarCollapse {
            background: transparent;
            border: none;
            color: var(--primary);
            font-size: 24px;
            width: 44px;
            height: 44px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
            margin-right: 16px;
        }

        #sidebarCollapse:hover {
            background: rgba(79, 70, 229, 0.1);
            transform: rotate(90deg);
        }

        .page-title h1 {
            font-size: 28px;
            font-weight: 800;
            color: var(--dark);
            margin-bottom: 4px;
            letter-spacing: -0.5px;
        }

        .page-title p {
            color: var(--gray-500);
            font-size: 14px;
            font-weight: 500;
        }

        .header-actions {
            margin-left: auto;
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .header-action-btn {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: white;
            color: var(--gray-500);
            border: 1px solid var(--gray-200);
            transition: var(--transition);
            position: relative;
        }

        .header-action-btn:hover {
            background: var(--primary);
            color: white;
            border-color: var(--primary);
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(79, 70, 229, 0.3);
        }

        .notification-badge {
            position: absolute;
            top: -4px;
            right: -4px;
            width: 20px;
            height: 20px;
            background: linear-gradient(135deg, var(--secondary), #db2777);
            border-radius: 50%;
            color: white;
            font-size: 11px;
            font-weight: 700;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 2px solid white;
        }

        .user-menu .avatar {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            background: linear-gradient(135deg, var(--primary), var(--primary-light));
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            cursor: pointer;
            transition: var(--transition);
            box-shadow: 0 8px 24px rgba(79, 70, 229, 0.3);
            border: 2px solid white;
        }

        .user-menu .avatar:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 32px rgba(79, 70, 229, 0.4);
        }

        /* Stats Cards */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 24px;
            margin-bottom: 32px;
        }

        .stat-card {
            background: white;
            border-radius: var(--border-radius);
            padding: 28px;
            transition: var(--transition);
            border: 1px solid var(--gray-200);
            position: relative;
            overflow: hidden;
        }

        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(to right, var(--primary), var(--secondary));
        }

        .stat-card:hover {
            transform: translateY(-6px);
            box-shadow: var(--shadow-lg);
            border-color: transparent;
        }

        .stat-icon {
            width: 56px;
            height: 56px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            margin-bottom: 20px;
            color: white;
            box-shadow: var(--shadow-md);
        }

        .stat-icon.primary {
            background: linear-gradient(135deg, var(--primary), var(--primary-light));
        }

        .stat-icon.success {
            background: linear-gradient(135deg, var(--success), #34d399);
        }

        .stat-icon.warning {
            background: linear-gradient(135deg, var(--warning), #fbbf24);
        }

        .stat-icon.danger {
            background: linear-gradient(135deg, var(--danger), #f87171);
        }

        .stat-value {
            font-size: 32px;
            font-weight: 800;
            color: var(--dark);
            margin-bottom: 4px;
            line-height: 1;
        }

        .stat-label {
            font-size: 14px;
            color: var(--gray-500);
            font-weight: 500;
            margin-bottom: 12px;
        }

        .stat-change {
            font-size: 13px;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 4px;
        }

        .stat-change.positive {
            color: var(--success);
        }

        .stat-change.negative {
            color: var(--danger);
        }

        /* Dashboard Sections */
        .dashboard-section {
            background: white;
            border-radius: var(--border-radius);
            border: 1px solid var(--gray-200);
            margin-bottom: 32px;
            overflow: hidden;
        }

        .section-header {
            padding: 24px 32px;
            border-bottom: 1px solid var(--gray-200);
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: white;
        }

        .section-header h3 {
            font-size: 20px;
            font-weight: 700;
            color: var(--dark);
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .section-header h3 i {
            color: var(--primary);
            font-size: 22px;
        }

        .section-tools {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .section-body {
            padding: 32px;
        }

        /* Employee Cards */
        .employee-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 24px;
        }

        .employee-card {
            background: white;
            border-radius: var(--border-radius);
            border: 1px solid var(--gray-200);
            padding: 24px;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .employee-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-lg);
            border-color: var(--primary-light);
        }

        .employee-avatar {
            width: 56px;
            height: 56px;
            border-radius: 14px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 700;
            font-size: 20px;
            flex-shrink: 0;
            box-shadow: 0 8px 24px rgba(79, 70, 229, 0.3);
        }

        .employee-info {
            flex: 1;
        }

        .employee-info h4 {
            font-size: 16px;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 4px;
        }

        .employee-info p {
            font-size: 14px;
            color: var(--gray-500);
            margin-bottom: 8px;
        }

        .employee-status {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            font-size: 13px;
            font-weight: 600;
            padding: 6px 12px;
            border-radius: 20px;
        }

        .status-present {
            background: rgba(16, 185, 129, 0.1);
            color: var(--success);
        }

        .status-late {
            background: rgba(245, 158, 11, 0.1);
            color: var(--warning);
        }

        .status-absent {
            background: rgba(239, 68, 68, 0.1);
            color: var(--danger);
        }

        /* Attendance Widget */
        .attendance-widget {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            border-radius: var(--border-radius);
            padding: 32px;
            position: relative;
            overflow: hidden;
        }

        .attendance-widget::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -20%;
            width: 300px;
            height: 300px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
        }

        .attendance-time {
            font-size: 56px;
            font-weight: 800;
            text-align: center;
            margin: 24px 0;
            letter-spacing: -2px;
            position: relative;
            z-index: 1;
            text-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        /* Table Styling */
        .table-container {
            background: white;
            border-radius: var(--border-radius);
            border: 1px solid var(--gray-200);
            overflow: hidden;
        }

        .table {
            margin: 0;
        }

        .table thead th {
            background: var(--gray-100);
            border-bottom: 2px solid var(--gray-200);
            padding: 20px 24px;
            font-weight: 700;
            color: var(--dark);
            text-transform: uppercase;
            font-size: 13px;
            letter-spacing: 0.5px;
        }

        .table tbody td {
            padding: 20px 24px;
            vertical-align: middle;
            border-bottom: 1px solid var(--gray-200);
            font-weight: 500;
        }

        .table tbody tr:last-child td {
            border-bottom: none;
        }

        .table tbody tr:hover {
            background: var(--gray-100);
        }

        /* Buttons */
        .btn {
            border-radius: 12px;
            padding: 12px 24px;
            font-weight: 600;
            font-size: 14px;
            transition: var(--transition);
            border: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: white;
            box-shadow: 0 8px 24px rgba(79, 70, 229, 0.3);
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, var(--primary-dark), #3730a3);
            transform: translateY(-2px);
            box-shadow: 0 12px 32px rgba(79, 70, 229, 0.4);
            color: white;
        }

        .btn-outline {
            background: transparent;
            border: 2px solid var(--gray-300);
            color: var(--gray-600);
        }

        .btn-outline:hover {
            background: var(--primary);
            border-color: var(--primary);
            color: white;
            transform: translateY(-2px);
        }

        /* Form Controls */
        .form-control, .form-select {
            border-radius: 12px;
            border: 2px solid var(--gray-200);
            padding: 12px 16px;
            font-size: 14px;
            font-weight: 500;
            transition: var(--transition);
        }

        .form-control:focus, .form-select:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 4px rgba(79, 70, 229, 0.1);
        }

        /* Responsive */
        @media (max-width: 1200px) {
            .employee-grid {
                grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            }
        }

        @media (max-width: 992px) {
            #sidebar {
                transform: translateX(-100%);
                box-shadow: none;
            }

            #sidebar.active {
                transform: translateX(0);
                box-shadow: var(--shadow-lg);
            }

            #content {
                margin-left: 0;
            }

            #content.expanded {
                margin-left: 0;
            }

            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .stats-grid {
                grid-template-columns: 1fr;
            }

            .employee-grid {
                grid-template-columns: 1fr;
            }

            .section-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 16px;
            }

            .section-tools {
                width: 100%;
                justify-content: space-between;
            }
        }

        /* Animations */
        [data-aos] {
            pointer-events: none;
        }

        [data-aos].aos-animate {
            pointer-events: auto;
        }

        /* Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }

        ::-webkit-scrollbar-track {
            background: var(--gray-100);
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(to bottom, var(--primary), var(--secondary));
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(to bottom, var(--primary-dark), #db2777);
        }
    </style>
</head>
