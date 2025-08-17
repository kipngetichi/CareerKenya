<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applied Jobs | Professional Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #4361ee;
            --primary-light: #4895ef;
            --secondary: #3f37c9;
            --success: #4cc9f0;
            --dark: #2b2d42;
            --light: #f8f9fa;
            --gray: #6c757d;
            --light-gray: #e9ecef;
            --border: #dee2e6;
            --card-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            --hover-shadow: 0 8px 25px rgba(67, 97, 238, 0.15);
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f5f7fb;
            color: #333;
            line-height: 1.6;
        }
        
        .content-wrapper {
            padding: 30px;
            max-width: 1400px;
            margin: 0 auto;
        }
        
        .section-header {
            margin-bottom: 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .section-title {
            font-size: 28px;
            font-weight: 700;
            color: var(--dark);
            position: relative;
            padding-bottom: 15px;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 70px;
            height: 4px;
            background: linear-gradient(90deg, var(--primary), var(--success));
            border-radius: 2px;
        }
        
        .stats-container {
            display: flex;
            gap: 20px;
            margin-bottom: 30px;
            flex-wrap: wrap;
        }
        
        .stat-card {
            background: white;
            border-radius: 12px;
            padding: 20px;
            flex: 1;
            min-width: 200px;
            box-shadow: var(--card-shadow);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--hover-shadow);
        }
        
        .stat-value {
            font-size: 32px;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 10px;
        }
        
        .stat-label {
            color: var(--gray);
            font-size: 16px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .dashboard-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: var(--card-shadow);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin-bottom: 30px;
        }
        
        .dashboard-card:hover {
            box-shadow: var(--hover-shadow);
        }
        
        .card-header {
            padding: 20px 25px;
            border-bottom: 1px solid var(--light-gray);
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: white;
        }
        
        .card-title {
            font-size: 20px;
            font-weight: 600;
            color: var(--dark);
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .card-actions {
            display: flex;
            gap: 15px;
        }
        
        .filter-btn {
            background: var(--light);
            border: none;
            padding: 8px 15px;
            border-radius: 6px;
            color: var(--gray);
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 6px;
            transition: all 0.3s ease;
        }
        
        .filter-btn:hover {
            background: var(--primary-light);
            color: white;
        }
        
        .table-responsive {
            overflow-x: auto;
        }
        
        .jobs-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            min-width: 800px;
        }
        
        .jobs-table thead th {
            background-color: #f8fafd;
            color: var(--gray);
            font-weight: 600;
            text-align: left;
            padding: 15px 25px;
            border-bottom: 1px solid var(--border);
        }
        
        .jobs-table tbody tr {
            transition: background-color 0.2s ease;
        }
        
        .jobs-table tbody tr:hover {
            background-color: #f8fafd;
        }
        
        .jobs-table tbody td {
            padding: 18px 25px;
            border-bottom: 1px solid var(--light-gray);
            color: var(--dark);
        }
        
        .job-link {
            color: var(--primary);
            text-decoration: none;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 10px;
            transition: color 0.3s ease;
        }
        
        .job-link:hover {
            color: var(--secondary);
            text-decoration: underline;
        }
        
        .company-info {
            display: flex;
            align-items: center;
            gap: 12px;
        }
        
        .company-logo {
            width: 40px;
            height: 40px;
            border-radius: 8px;
            background: var(--light);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            color: var(--primary);
            font-size: 18px;
        }
        
        .status-badge {
            display: inline-block;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 500;
        }
        
        .status-pending {
            background-color: #fff3cd;
            color: #856404;
        }
        
        .status-reviewing {
            background-color: #cce5ff;
            color: #004085;
        }
        
        .status-interview {
            background-color: #d4edda;
            color: #155724;
        }
        
        .status-rejected {
            background-color: #f8d7da;
            color: #721c24;
        }
        
        .status-hired {
            background-color: #d4edda;
            color: #155724;
        }
        
        .action-cell {
            display: flex;
            gap: 12px;
        }
        
        .action-btn {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--light);
            color: var(--gray);
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .action-btn:hover {
            background: var(--primary);
            color: white;
        }
        
        .empty-state {
            padding: 50px 20px;
            text-align: center;
            color: var(--gray);
        }
        
        .empty-icon {
            font-size: 60px;
            color: var(--light-gray);
            margin-bottom: 20px;
        }
        
        .empty-title {
            font-size: 22px;
            margin-bottom: 10px;
            color: var(--dark);
        }
        
        .empty-text {
            margin-bottom: 25px;
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .primary-btn {
            background: var(--primary);
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
        }
        
        .primary-btn:hover {
            background: var(--secondary);
            transform: translateY(-2px);
        }
        
        .pagination {
            display: flex;
            justify-content: flex-end;
            padding: 20px 25px;
            border-top: 1px solid var(--light-gray);
        }
        
        .page-btn {
            width: 36px;
            height: 36px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: white;
            border: 1px solid var(--border);
            color: var(--gray);
            cursor: pointer;
            margin: 0 3px;
            transition: all 0.3s ease;
        }
        
        .page-btn.active, .page-btn:hover {
            background: var(--primary);
            color: white;
            border-color: var(--primary);
        }
        
        @media (max-width: 768px) {
            .content-wrapper {
                padding: 20px 15px;
            }
            
            .section-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }
            
            .stats-container {
                flex-direction: column;
            }
            
            .card-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }
            
            .card-actions {
                width: 100%;
                justify-content: space-between;
            }
        }
    </style>
</head>
<body>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Section Header -->
        <div class="section-header">
            <h1 class="section-title">Applied Jobs</h1>
            <div class="header-actions">
                <button class="primary-btn">
                    <i class="fas fa-download"></i> Export Report
                </button>
            </div>
        </div>
        
        <!-- Stats Summary -->
        <div class="stats-container">
            <div class="stat-card">
                <div class="stat-value">24</div>
                <div class="stat-label">
                    <i class="fas fa-briefcase"></i> Total Applications
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-value">8</div>
                <div class="stat-label">
                    <i class="fas fa-comments"></i> Under Review
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-value">4</div>
                <div class="stat-label">
                    <i class="fas fa-calendar-check"></i> Interviews
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-value">3</div>
                <div class="stat-label">
                    <i class="fas fa-trophy"></i> Offers Received
                </div>
            </div>
        </div>
        
        <!-- Main content -->
        <section class="content">
            <div class="dashboard-card">
                <div class="card-header">
                    <h2 class="card-title">
                        <i class="fas fa-file-contract"></i> Your Job Applications
                    </h2>
                    <div class="card-actions">
                        <button class="filter-btn">
                            <i class="fas fa-filter"></i> Filter
                        </button>
                        <button class="filter-btn">
                            <i class="fas fa-sort"></i> Sort
                        </button>
                        <button class="filter-btn">
                            <i class="fas fa-search"></i> Search
                        </button>
                    </div>
                </div>
                
                <div class="table-responsive">
                    <table class="jobs-table">
                        <thead>
                            <tr>
                                <th>Job Title</th>
                                <th>Company</th>
                                <th>Location</th>
                                <th>Date Applied</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Application 1 -->
                            <tr>
                                <td>
                                    <a href="#" class="job-link">
                                        <i class="fas fa-laptop-code"></i> Senior Frontend Developer
                                    </a>
                                </td>
                                <td>
                                    <div class="company-info">
                                        <div class="company-logo">TC</div>
                                        <span>TechCorp Inc.</span>
                                    </div>
                                </td>
                                <td>San Francisco, CA</td>
                                <td>Jun 12, 2023</td>
                                <td>
                                    <span class="status-badge status-interview">Interview Scheduled</span>
                                </td>
                                <td class="action-cell">
                                    <button class="action-btn">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="action-btn">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                </td>
                            </tr>
                            
                            <!-- Application 2 -->
                            <tr>
                                <td>
                                    <a href="#" class="job-link">
                                        <i class="fas fa-database"></i> Data Science Manager
                                    </a>
                                </td>
                                <td>
                                    <div class="company-info">
                                        <div class="company-logo">DA</div>
                                        <span>DataAnalytics Co.</span>
                                    </div>
                                </td>
                                <td>New York, NY</td>
                                <td>Jun 8, 2023</td>
                                <td>
                                    <span class="status-badge status-reviewing">Under Review</span>
                                </td>
                                <td class="action-cell">
                                    <button class="action-btn">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="action-btn">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                </td>
                            </tr>
                            
                            <!-- Application 3 -->
                            <tr>
                                <td>
                                    <a href="#" class="job-link">
                                        <i class="fas fa-mobile-alt"></i> Mobile App Developer
                                    </a>
                                </td>
                                <td>
                                    <div class="company-info">
                                        <div class="company-logo">IA</div>
                                        <span>InnovateApps</span>
                                    </div>
                                </td>
                                <td>Austin, TX</td>
                                <td>Jun 5, 2023</td>
                                <td>
                                    <span class="status-badge status-hired">Offer Received</span>
                                </td>
                                <td class="action-cell">
                                    <button class="action-btn">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="action-btn">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                </td>
                            </tr>
                            
                            <!-- Application 4 -->
                            <tr>
                                <td>
                                    <a href="#" class="job-link">
                                        <i class="fas fa-shield-alt"></i> Security Engineer
                                    </a>
                                </td>
                                <td>
                                    <div class="company-info">
                                        <div class="company-logo">SC</div>
                                        <span>SecureCloud Ltd.</span>
                                    </div>
                                </td>
                                <td>Boston, MA</td>
                                <td>Jun 1, 2023</td>
                                <td>
                                    <span class="status-badge status-rejected">Not Selected</span>
                                </td>
                                <td class="action-cell">
                                    <button class="action-btn">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="action-btn">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                </td>
                            </tr>
                            
                            <!-- Application 5 -->
                            <tr>
                                <td>
                                    <a href="#" class="job-link">
                                        <i class="fas fa-cloud"></i> DevOps Specialist
                                    </a>
                                </td>
                                <td>
                                    <div class="company-info">
                                        <div class="company-logo">CC</div>
                                        <span>CloudConnect</span>
                                    </div>
                                </td>
                                <td>Seattle, WA</td>
                                <td>May 28, 2023</td>
                                <td>
                                    <span class="status-badge status-pending">Application Sent</span>
                                </td>
                                <td class="action-cell">
                                    <button class="action-btn">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="action-btn">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <div class="pagination">
                    <button class="page-btn"><i class="fas fa-chevron-left"></i></button>
                    <button class="page-btn active">1</button>
                    <button class="page-btn">2</button>
                    <button class="page-btn">3</button>
                    <button class="page-btn"><i class="fas fa-ellipsis-h"></i></button>
                    <button class="page-btn">5</button>
                    <button class="page-btn"><i class="fas fa-chevron-right"></i></button>
                </div>
            </div>
        </section>
    </div>

    <script>
        // Basic interactivity for demonstration
        document.addEventListener('DOMContentLoaded', function() {
            // Add hover effects to table rows
            const tableRows = document.querySelectorAll('.jobs-table tbody tr');
            tableRows.forEach(row => {
                row.addEventListener('mouseenter', function() {
                    this.style.backgroundColor = '#f5f9ff';
                });
                
                row.addEventListener('mouseleave', function() {
                    this.style.backgroundColor = '';
                });
            });
            
            // Status badge tooltips
            const statusBadges = document.querySelectorAll('.status-badge');
            statusBadges.forEach(badge => {
                badge.addEventListener('mouseover', function() {
                    this.style.transform = 'scale(1.05)';
                });
                
                badge.addEventListener('mouseout', function() {
                    this.style.transform = '';
                });
            });
        });
    </script>
</body>
</html>