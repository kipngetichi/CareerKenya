<!DOCTYPE html>
<html lang="en">
<head>
   
 <?php   
    $view = isset($_GET['view']) ? $_GET['view'] :"";  
	  $appl = New Applicants();
	  $applicant = $appl->single_applicant($_SESSION['APPLICANTID']); 
  ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applicant Profile | Professional Dashboard</title>
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
            --sidebar-bg: #1e293b;
            --sidebar-active: #3b82f6;
            --header-height: 70px;
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
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        
        .page-header {
            background: linear-gradient(120deg, var(--primary), var(--secondary));
            color: white;
            padding: 30px 0;
            text-align: center;
            margin-bottom: 30px;
        }
        
        .page-title {
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 10px;
        }
        
        .breadcrumb {
            display: flex;
            justify-content: center;
            list-style: none;
            padding: 0;
            font-size: 16px;
            color: rgba(255, 255, 255, 0.85);
        }
        
        .breadcrumb li:not(:last-child)::after {
            content: ">";
            margin: 0 10px;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
            flex: 1;
        }
        
        .dashboard-layout {
            display: flex;
            gap: 25px;
            margin-bottom: 40px;
        }
        
        /* Sidebar styling */
        .sidebar {
            flex: 0 0 280px;
            background: white;
            border-radius: 12px;
            box-shadow: var(--card-shadow);
            overflow: hidden;
            height: fit-content;
        }
        
        .profile-card {
            padding: 25px;
            text-align: center;
            border-bottom: 1px solid var(--light-gray);
        }
        
        .profile-image-container {
            width: 130px;
            height: 130px;
            margin: 0 auto 20px;
            border-radius: 50%;
            overflow: hidden;
            border: 5px solid var(--light);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            position: relative;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .profile-image-container:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 25px rgba(67, 97, 238, 0.3);
        }
        
        .profile-image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .profile-name {
            font-size: 22px;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 5px;
        }
        
        .profile-title {
            color: var(--gray);
            font-size: 16px;
            margin-bottom: 20px;
        }
        
        .edit-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 8px;
            font-size: 12px;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .profile-image-container:hover .edit-overlay {
            opacity: 1;
        }
        
        .profile-stats {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 15px;
        }
        
        .stat-item {
            text-align: center;
        }
        
        .stat-value {
            font-size: 18px;
            font-weight: 700;
            color: var(--primary);
        }
        
        .stat-label {
            font-size: 13px;
            color: var(--gray);
        }
        
        .sidebar-nav {
            padding: 15px 0;
        }
        
        .nav-item {
            display: flex;
            align-items: center;
            padding: 14px 25px;
            color: var(--gray);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            border-left: 4px solid transparent;
        }
        
        .nav-item:hover {
            background-color: #f5f8ff;
            color: var(--primary);
            border-left-color: var(--primary-light);
        }
        
        .nav-item.active {
            background-color: #f0f5ff;
            color: var(--primary);
            border-left-color: var(--primary);
            font-weight: 600;
        }
        
        .nav-item i {
            width: 24px;
            margin-right: 12px;
            font-size: 18px;
        }
        
        .badge {
            margin-left: auto;
            background: var(--primary);
            color: white;
            font-size: 12px;
            padding: 4px 8px;
            border-radius: 10px;
            min-width: 26px;
            text-align: center;
        }
        
        /* Main content styling */
        .main-content {
            flex: 1;
            background: white;
            border-radius: 12px;
            box-shadow: var(--card-shadow);
            overflow: hidden;
        }
        
        .content-header {
            padding: 20px 30px;
            border-bottom: 1px solid var(--light-gray);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .content-title {
            font-size: 22px;
            font-weight: 700;
            color: var(--dark);
            display: flex;
            align-items: center;
            gap: 12px;
        }
        
        .content-actions {
            display: flex;
            gap: 15px;
        }
        
        .action-btn {
            background: var(--light);
            border: none;
            padding: 10px 16px;
            border-radius: 8px;
            color: var(--gray);
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 6px;
            transition: all 0.3s ease;
            font-weight: 500;
        }
        
        .action-btn:hover {
            background: var(--primary-light);
            color: white;
        }
        
        .content-body {
            padding: 30px;
        }
        
        /* Modal styling */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            align-items: center;
            justify-content: center;
        }
        
        .modal-content {
            background-color: white;
            border-radius: 12px;
            width: 100%;
            max-width: 500px;
            overflow: hidden;
            box-shadow: 0 10px 50px rgba(0, 0, 0, 0.2);
        }
        
        .modal-header {
            padding: 20px 25px;
            background: var(--primary);
            color: white;
        }
        
        .modal-title {
            font-size: 20px;
            font-weight: 600;
        }
        
        .close {
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
            opacity: 0.8;
            transition: opacity 0.2s;
        }
        
        .close:hover {
            opacity: 1;
        }
        
        .modal-body {
            padding: 25px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid var(--border);
            border-radius: 8px;
            font-size: 16px;
            transition: border 0.3s;
        }
        
        .form-control:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(67, 97, 238, 0.1);
        }
        
        .modal-footer {
            padding: 15px 25px;
            background: var(--light);
            text-align: right;
            border-top: 1px solid var(--border);
        }
        
        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .btn-primary {
            background: var(--primary);
            color: white;
        }
        
        .btn-primary:hover {
            background: var(--secondary);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(67, 97, 238, 0.3);
        }
        
        .btn-default {
            background: var(--light);
            color: var(--gray);
            margin-right: 10px;
        }
        
        .btn-default:hover {
            background: #e2e6ea;
        }
        
        .footer {
            background: var(--dark);
            color: white;
            padding: 25px 0;
            text-align: center;
            margin-top: 40px;
        }
        
        .footer p {
            margin: 5px 0;
            color: rgba(255, 255, 255, 0.7);
        }
        
        /* Responsive design */
        @media (max-width: 992px) {
            .dashboard-layout {
                flex-direction: column;
            }
            
            .sidebar {
                flex: 1;
            }
        }
        
        @media (max-width: 768px) {
            .content-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }
            
            .content-actions {
                width: 100%;
                flex-wrap: wrap;
            }
            
            .action-btn {
                flex: 1;
                justify-content: center;
            }
            
            .content-body {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <!-- Page Header -->
    <header class="page-header">
        <div class="container">
            <h1 class="page-title">Applicant Profile</h1>
            <ul class="breadcrumb">
                <li>Dashboard</li>
                <li>Profile</li>
            </ul>
        </div>
    </header>

    <div class="container">
        <div class="dashboard-layout">
            <!-- Sidebar -->
            <aside class="sidebar">
                <div class="profile-card">
                    <div class="profile-image-container">
                        <img title="profile image"  data-target="#myModal"  data-toggle="modal"  src="<?php echo web_root.'applicant/'.$applicant->APPLICANTPHOTO; ?>">  

                        <div class="edit-overlay">Click to Change</div>
                    </div>
                    <h2 class="profile-name"> <?php echo $applicant->FNAME .' '.substr($applicant->MNAME, 1,2).'. '.$applicant->LNAME; ?> </h2>
                    <p class="profile-title">Senior Web Developer</p>
                    
                    <div class="profile-stats">
                        <div class="stat-item">
                            <div class="stat-value">24</div>
                            <div class="stat-label">Applications</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-value">8</div>
                            <div class="stat-label">Interviews</div>
                        </div>
                    </div>
                </div>
                
                <nav class="sidebar-nav">
                    <a href="#" class="nav-item active">
                        <i class="fas fa-briefcase"></i>
                        Applied Jobs
                    </a>
                    <a href="#" class="nav-item">
                        <i class="fas fa-user"></i>
                        Account Settings
                    </a>
                    <a href="#" class="nav-item">
                        <i class="fas fa-envelope"></i>
                        Messages
                        <span class="badge">5</span>
                    </a>
                    <a href="#" class="nav-item">
                        <i class="fas fa-bell"></i>
                        Notifications
                        <span class="badge">12</span>
                    </a>
                    <a href="#" class="nav-item">
                        <i class="fas fa-file-alt"></i>
                        My Resume
                    </a>
                    <a href="#" class="nav-item">
                        <i class="fas fa-cog"></i>
                        Preferences
                    </a>
                </nav>
            </aside>

            <!-- Main Content -->
            <main class="main-content">
                <div class="content-header">
                    <h2 class="content-title">
                        <i class="fas fa-briefcase text-primary"></i>
                        Applied Jobs
                    </h2>
                    <div class="content-actions">
                        <button class="action-btn">
                            <i class="fas fa-filter"></i> Filter
                        </button>
                        <button class="action-btn">
                            <i class="fas fa-sort"></i> Sort
                        </button>
                        <button class="action-btn">
                            <i class="fas fa-download"></i> Export
                        </button>
                    </div>
                </div>
                
                <div class="content-body">
                    <!-- Content will be loaded dynamically based on the view -->
                    <div style="min-height: 400px; display: flex; align-items: center; justify-content: center;">
                        <div style="text-align: center; max-width: 600px;">
                            <div style="font-size: 80px; color: #e0e7ff; margin-bottom: 20px;">
                                <i class="fas fa-briefcase"></i>
                            </div>
                            <h3 style="font-size: 24px; color: var(--dark); margin-bottom: 15px;">
                                Your Applied Jobs Will Appear Here
                            </h3>
                            <p style="color: var(--gray); margin-bottom: 25px;">
                                This section will display all the jobs you've applied for, including their current status, 
                                company information, and application dates. You can track your progress through the hiring process.
                            </p>
                            <button style="background: var(--primary); color: white; border: none; padding: 12px 30px; 
                                border-radius: 8px; font-size: 16px; font-weight: 500; cursor: pointer;">
                                <i class="fas fa-search"></i> Browse Jobs
                            </button>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>© 2023 Job Portal Application. All rights reserved.</p>
            <p>Designed with <i class="fas fa-heart" style="color: #ff4757;"></i> for job seekers</p>
        </div>
    </footer>

    <!-- Photo Upload Modal -->
    <div id="photoModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Update Profile Photo</h3>
                <span class="close">&times;</span>
            </div>
            <form>
                <div class="modal-body">
                    <div class="form-group">
                        <label style="display: block; margin-bottom: 8px; font-weight: 500;">Select an image</label>
                        <input type="file" class="form-control">
                    </div>
                    <div class="form-group">
                        <div style="text-align: center; padding: 20px; border: 2px dashed #e2e8f0; border-radius: 8px;">
                            <i class="fas fa-cloud-upload-alt" style="font-size: 50px; color: #cbd5e1; margin-bottom: 15px;"></i>
                            <p style="color: var(--gray);">Drag & drop your photo here</p>
                            <p style="color: #94a3b8; font-size: 14px;">JPG, PNG, GIF - Max 2MB</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default">Cancel</button>
                    <button type="submit" class="btn btn-primary">Upload Photo</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Modal functionality
        const modal = document.getElementById("photoModal");
        const btn = document.querySelector(".profile-image-container");
        const span = document.querySelector(".close");
        
        btn.onclick = function() {
            modal.style.display = "flex";
        }
        
        span.onclick = function() {
            modal.style.display = "none";
        }
        
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        
        // Sidebar navigation active state
        const navItems = document.querySelectorAll('.nav-item');
        navItems.forEach(item => {
            item.addEventListener('click', function(e) {
                e.preventDefault();
                navItems.forEach(i => i.classList.remove('active'));
                this.classList.add('active');
            });
        });
    </script>
</body>
</html>