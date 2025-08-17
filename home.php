<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CareerConnect - Professional Job Portal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #2962ff;
            --secondary: #00c853;
            --accent: #ff6d00;
            --dark: #1a237e;
            --light: #f5f7ff;
            --gray: #f0f2f5;
            --text: #333333;
            --text-light: #666666;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            color: var(--text);
            background-color: #ffffff;
            line-height: 1.6;
        }
        
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }
        
        section {
            padding: 60px 0;
        }
        
        .section-header {
            text-align: center;
            margin-bottom: 40px;
        }
        
        .section-title {
            font-size: 2.2rem;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }
        
        .section-title:after {
            content: '';
            position: absolute;
            width: 70px;
            height: 4px;
            background: var(--accent);
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 2px;
        }
        
        .section-subtitle {
            font-size: 1.1rem;
            color: var(--text-light);
            max-width: 700px;
            margin: 0 auto;
        }
        
        .btn {
            display: inline-block;
            padding: 12px 28px;
            border-radius: 4px;
            font-weight: 600;
            text-align: center;
            text-decoration: none;
            transition: all 0.3s ease;
            cursor: pointer;
            border: none;
            font-size: 1rem;
        }
        
        .btn-primary {
            background: var(--primary);
            color: white;
            box-shadow: 0 4px 12px rgba(41, 98, 255, 0.3);
        }
        
        .btn-primary:hover {
            background: #0039cb;
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(41, 98, 255, 0.4);
        }
        
        .btn-accent {
            background: var(--accent);
            color: white;
            box-shadow: 0 4px 12px rgba(255, 109, 0, 0.3);
        }
        
        .btn-accent:hover {
            background: #e65100;
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(255, 109, 0, 0.4);
        }
        
        /* Hero Slider */
        #banner {
            position: relative;
            overflow: hidden;
            border-radius: 0 0 12px 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            margin-bottom: 60px;
        }
        
        .slider-container {
            position: relative;
            height: 500px;
            overflow: hidden;
            border-radius: 0 0 12px 12px;
        }
        
        .slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 1s ease-in-out;
            background-size: cover;
            background-position: center;
        }
        
        .slide.active {
            opacity: 1;
        }
        
        .slide-content {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background: linear-gradient(transparent, rgba(0, 0, 0, 0.8));
            color: white;
            padding: 30px;
            padding-top: 80px;
        }
        
        .slide-content h3 {
            font-size: 2.5rem;
            margin-bottom: 15px;
            font-weight: 700;
            max-width: 800px;
        }
        
        .slide-content p {
            font-size: 1.2rem;
            margin-bottom: 20px;
            max-width: 700px;
        }
        
        .slide-indicators {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            z-index: 10;
        }
        
        .indicator {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.5);
            margin: 0 6px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .indicator.active {
            background: white;
            transform: scale(1.2);
        }
        
        /* Call to Action */
        #call-to-action {
            background: linear-gradient(135deg, var(--primary), var(--dark));
            color: white;
            padding: 40px 0;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(41, 98, 255, 0.2);
            margin-bottom: 60px;
        }
        
        .cta-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }
        
        .cta-text {
            flex: 1;
            min-width: 300px;
            padding-right: 20px;
        }
        
        .cta-text h3 {
            font-size: 1.8rem;
            margin-bottom: 15px;
            font-weight: 600;
        }
        
        .cta-text ul {
            list-style: none;
            margin: 20px 0;
        }
        
        .cta-text ul li {
            margin-bottom: 12px;
            position: relative;
            padding-left: 25px;
        }
        
        .cta-text ul li:before {
            content: "✓";
            position: absolute;
            left: 0;
            color: var(--secondary);
            font-weight: bold;
        }
        
        .cta-highlight {
            color: #ffd600;
            font-weight: 700;
            font-size: 1.1em;
        }
        
        .cta-button {
            flex-shrink: 0;
        }
        
        /* Search Section */
        .search-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
            padding: 30px;
            margin-bottom: 40px;
        }
        
        .card-header {
            text-align: center;
            padding-bottom: 20px;
            margin-bottom: 25px;
            border-bottom: 2px solid var(--gray);
        }
        
        .card-title {
            font-size: 1.8rem;
            color: var(--primary);
            font-weight: 700;
            margin: 0;
        }
        
        .search-form {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        
        .form-group {
            flex: 1;
            min-width: 250px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--text);
        }
        
        .form-control {
            width: 100%;
            padding: 14px 16px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }
        
        .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(41, 98, 255, 0.2);
            outline: none;
        }
        
        .form-submit {
            width: 100%;
            text-align: center;
            margin-top: 20px;
        }
        
        /* Stats Section */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 25px;
            margin-bottom: 60px;
        }
        
        .stat-card {
            background: white;
            border-radius: 12px;
            padding: 30px 20px;
            text-align: center;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .stat-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.1);
        }
        
        .stat-card:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
        }
        
        .stat-card:nth-child(1):before { background: var(--primary); }
        .stat-card:nth-child(2):before { background: var(--secondary); }
        .stat-card:nth-child(3):before { background: var(--accent); }
        .stat-card:nth-child(4):before { background: #ab47bc; }
        
        .stat-icon {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: var(--primary);
        }
        
        .stat-card:nth-child(2) .stat-icon { color: var(--secondary); }
        .stat-card:nth-child(3) .stat-icon { color: var(--accent); }
        .stat-card:nth-child(4) .stat-icon { color: #ab47bc; }
        
        .stat-value {
            font-size: 2.2rem;
            font-weight: 700;
            margin-bottom: 5px;
            color: var(--dark);
        }
        
        .stat-label {
            font-size: 1rem;
            color: var(--text-light);
        }
        
        /* Job Listings */
        .job-listings {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .job-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
        }
        
        .job-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.12);
        }
        
        .job-header {
            padding: 25px;
            border-bottom: 1px solid var(--gray);
        }
        
        .job-title {
            font-size: 1.4rem;
            font-weight: 600;
            margin-bottom: 10px;
            color: var(--dark);
        }
        
        .job-company {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }
        
        .company-logo {
            width: 40px;
            height: 40px;
            border-radius: 8px;
            background: var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 12px;
            color: white;
            font-weight: 600;
            font-size: 1.2rem;
        }
        
        .company-name {
            font-weight: 500;
            font-size: 1.1rem;
            color: var(--text);
        }
        
        .job-details {
            padding: 25px;
        }
        
        .detail-item {
            display: flex;
            margin-bottom: 12px;
            font-size: 0.95rem;
        }
        
        .detail-label {
            font-weight: 500;
            color: var(--text-light);
            min-width: 100px;
        }
        
        .job-actions {
            padding: 20px 25px;
            background: var(--light);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .job-link {
            color: var(--primary);
            font-weight: 600;
            text-decoration: none;
            display: flex;
            align-items: center;
        }
        
        .job-link i {
            margin-left: 5px;
            transition: transform 0.3s ease;
        }
        
        .job-link:hover i {
            transform: translateX(5px);
        }
        
        /* Testimonials */
        .testimonials-section {
            background: var(--light);
            padding: 80px 0;
        }
        
        .testimonial-card {
            background: white;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            margin: 15px;
            position: relative;
        }
        
        .testimonial-card:before {
            content: '"';
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 5rem;
            color: var(--primary);
            opacity: 0.1;
            font-family: serif;
            line-height: 1;
        }
        
        .testimonial-text {
            font-size: 1.1rem;
            font-style: italic;
            color: var(--text);
            margin-bottom: 25px;
            position: relative;
            z-index: 1;
        }
        
        .testimonial-author {
            display: flex;
            align-items: center;
        }
        
        .author-avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 600;
            font-size: 1.5rem;
            margin-right: 15px;
        }
        
        .author-info h4 {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 5px;
            color: var(--dark);
        }
        
        .author-info p {
            color: var(--text-light);
            margin: 0;
        }
        
        /* FAQ Section */
        .faq-section {
            background: white;
        }
        
        .faq-container {
            max-width: 900px;
            margin: 0 auto;
        }
        
        .faq-item {
            margin-bottom: 20px;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 3px 15px rgba(0, 0, 0, 0.05);
        }
        
        .faq-question {
            background: var(--light);
            padding: 20px 25px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: all 0.3s ease;
        }
        
        .faq-question:hover {
            background: #e8ebff;
        }
        
        .faq-question i {
            transition: transform 0.3s ease;
        }
        
        .faq-question.active i {
            transform: rotate(180deg);
        }
        
        .faq-answer {
            padding: 0 25px;
            max-height: 0;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        
        .faq-question.active + .faq-answer {
            padding: 25px;
            max-height: 500px;
        }
        
        /* Footer */
        .footer {
            background: var(--dark);
            color: white;
            padding: 60px 0 30px;
        }
        
        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }
        
        .footer-column h3 {
            font-size: 1.4rem;
            margin-bottom: 25px;
            position: relative;
            padding-bottom: 10px;
        }
        
        .footer-column h3:after {
            content: '';
            position: absolute;
            width: 40px;
            height: 3px;
            background: var(--accent);
            bottom: 0;
            left: 0;
            border-radius: 2px;
        }
        
        .footer-links {
            list-style: none;
        }
        
        .footer-links li {
            margin-bottom: 12px;
        }
        
        .footer-links a {
            color: #bbbbbb;
            text-decoration: none;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
        }
        
        .footer-links a i {
            margin-right: 10px;
            font-size: 0.9rem;
        }
        
        .footer-links a:hover {
            color: white;
            transform: translateX(5px);
        }
        
        .copyright {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: #bbbbbb;
            font-size: 0.95rem;
        }
        
        /* Responsive Design */
        @media (max-width: 992px) {
            .slide-content h3 {
                font-size: 2rem;
            }
            
            .slide-content p {
                font-size: 1rem;
            }
        }
        
        @media (max-width: 768px) {
            .cta-content {
                flex-direction: column;
                text-align: center;
            }
            
            .cta-text {
                padding-right: 0;
                margin-bottom: 25px;
            }
            
            .cta-text ul li {
                text-align: left;
            }
            
            .slide-content {
                padding: 20px;
                padding-top: 60px;
            }
            
            .section-title {
                font-size: 1.8rem;
            }
        }
        
        @media (max-width: 576px) {
            section {
                padding: 40px 0;
            }
            
            .slide-content h3 {
                font-size: 1.6rem;
            }
            
            .stat-value {
                font-size: 1.8rem;
            }
        }
    </style>
</head>
<body>
    <!-- Hero Banner -->
    <section id="banner">
        <div class="slider-container">
            <div class="slide active" style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80');">
                <div class="slide-content">
                    <h3>Professional Resume Writing Services</h3>
                    <p>Get a standout resume tailored to your career goals and industry standards</p>
                    <div class="cta-highlight">
                        KENYA: @ksh 1,500 | UGANDA: @Ugx 40,350 | TANZANIA: @Tsh 26,500
                    </div>
                    <p><strong>Delivered within one hour after payment</strong></p>
                </div>
            </div>
            <div class="slide" style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80');">
                <div class="slide-content">
                    <h3>Find Your Dream Job Today</h3>
                    <p>We connect you to thousands of job opportunities across East Africa and beyond</p>
                    <a href="#" class="btn btn-accent">Browse Jobs</a>
                </div>
            </div>
            <div class="slide" style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80');">
                <div class="slide-content">
                    <h3>International Career Opportunities</h3>
                    <p>Discover exciting positions with global companies looking for your skills</p>
                    <a href="#" class="btn btn-accent">Explore Abroad</a>
                </div>
            </div>
            <div class="slide-indicators">
                <div class="indicator active"></div>
                <div class="indicator"></div>
                <div class="indicator"></div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section id="call-to-action">
        <div class="container">
            <div class="cta-content">
                <div class="cta-text">
                    <h3>Professional Resume Writing</h3>
                    <p>Our expert writers create resumes that get noticed by employers and pass ATS systems:</p>
                    <ul>
                        <li>Customized for your industry and career level</li>
                        <li>Keyword optimized for applicant tracking systems</li>
                        <li>Professional formatting and design</li>
                        <li>Unlimited revisions until you're satisfied</li>
                    </ul>
                    <div class="cta-highlight">
                        KENYA: @ksh 1,500 | UGANDA: @Ugx 40,350 | TANZANIA: @Tsh 26,500
                    </div>
                    <p><strong>Delivered within one hour after payment</strong></p>
                </div>
                <div class="cta-button">
                    <a href="#" class="btn btn-accent">Order Now</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Job Search -->
    <section>
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Find Your Next Opportunity</h2>
                <p class="section-subtitle">Discover thousands of job listings from top companies in Kenya and beyond</p>
            </div>
            
            <div class="search-card">
                <div class="card-header">
                    <h3 class="card-title">Job Search</h3>
                </div>
                <form action="index.php?q=result&searchfor=advancesearch" method="POST">
                    <div class="search-form">
                        <div class="form-group">
                            <label for="search">Keywords</label>
                            <input type="text" class="form-control" id="search" name="SEARCH" placeholder="Job title, skills, or company">
                        </div>
                        <div class="form-group">
                            <label for="company">Company</label>
                            <select class="form-control" id="company" name="COMPANY">
                                <option value="">All Companies</option>
                                <option>Safaricom PLC</option>
                                <option>KCB Group</option>
                                <option>Nairobi Hospital</option>
                                <option>Equity Bank</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="category">Job Function</label>
                            <select class="form-control" id="category" name="CATEGORY">
                                <option value="">All Functions</option>
                                <option>Information Technology</option>
                                <option>Finance & Accounting</option>
                                <option>Healthcare</option>
                                <option>Engineering</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-submit">
                        <button type="submit" name="search" class="btn btn-primary">Search Jobs</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section>
        <div class="container">
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <div class="stat-value">8,250+</div>
                    <div class="stat-label">Job Listings</div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <div class="stat-value">1,200+</div>
                    <div class="stat-label">Companies</div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="stat-value">95,000+</div>
                    <div class="stat-label">Active Candidates</div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <div class="stat-value">15,000+</div>
                    <div class="stat-label">Resumes Created</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Job Listings -->
    <section style="background-color: #f9fafc;">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Featured Job Opportunities</h2>
                <p class="section-subtitle">Hand-picked opportunities from top employers in Kenya</p>
            </div>
            
            <div class="job-listings">
                <div class="job-card">
                    <div class="job-header">
                        <h3 class="job-title">Senior Software Engineer</h3>
                        <div class="job-company">
                            <div class="company-logo">S</div>
                            <div class="company-name">Safaricom PLC</div>
                        </div>
                        <div class="job-meta">
                            <span class="badge">Full-time</span>
                            <span class="badge">Nairobi</span>
                        </div>
                    </div>
                    <div class="job-details">
                        <div class="detail-item">
                            <span class="detail-label">Experience:</span>
                            <span>5+ years</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Salary:</span>
                            <span>Ksh 250,000 - 350,000</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Posted:</span>
                            <span>2 days ago</span>
                        </div>
                    </div>
                    <div class="job-actions">
                        <a href="#" class="job-link">View Details <i class="fas fa-arrow-right"></i></a>
                        <button class="btn btn-primary">Apply Now</button>
                    </div>
                </div>
                
                <div class="job-card">
                    <div class="job-header">
                        <h3 class="job-title">Marketing Manager</h3>
                        <div class="job-company">
                            <div class="company-logo">K</div>
                            <div class="company-name">KCB Group</div>
                        </div>
                        <div class="job-meta">
                            <span class="badge">Full-time</span>
                            <span class="badge">Mombasa</span>
                        </div>
                    </div>
                    <div class="job-details">
                        <div class="detail-item">
                            <span class="detail-label">Experience:</span>
                            <span>7+ years</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Salary:</span>
                            <span>Ksh 300,000 - 450,000</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Posted:</span>
                            <span>1 day ago</span>
                        </div>
                    </div>
                    <div class="job-actions">
                        <a href="#" class="job-link">View Details <i class="fas fa-arrow-right"></i></a>
                        <button class="btn btn-primary">Apply Now</button>
                    </div>
                </div>
                
                <div class="job-card">
                    <div class="job-header">
                        <h3 class="job-title">Registered Nurse</h3>
                        <div class="job-company">
                            <div class="company-logo">N</div>
                            <div class="company-name">Nairobi Hospital</div>
                        </div>
                        <div class="job-meta">
                            <span class="badge">Full-time</span>
                            <span class="badge">Nairobi</span>
                        </div>
                    </div>
                    <div class="job-details">
                        <div class="detail-item">
                            <span class="detail-label">Experience:</span>
                            <span>3+ years</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Salary:</span>
                            <span>Ksh 120,000 - 180,000</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Posted:</span>
                            <span>3 days ago</span>
                        </div>
                    </div>
                    <div class="job-actions">
                        <a href="#" class="job-link">View Details <i class="fas fa-arrow-right"></i></a>
                        <button class="btn btn-primary">Apply Now</button>
                    </div>
                </div>
            </div>
            
            <div style="text-align: center; margin-top: 40px;">
                <a href="#" class="btn btn-accent">Browse All Jobs</a>
            </div>
        </div>
    </section>

    <!-- International Jobs -->
    <section>
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Global Career Opportunities</h2>
                <p class="section-subtitle">Explore international positions and work abroad programs</p>
            </div>
            
            <div class="job-listings">
                <div class="job-card">
                    <div class="job-header">
                        <h3 class="job-title">IT Project Manager</h3>
                        <div class="job-company">
                            <div class="company-logo">T</div>
                            <div class="company-name">TechGlobal Inc.</div>
                        </div>
                        <div class="job-meta">
                            <span class="badge">Remote</span>
                            <span class="badge">USA</span>
                        </div>
                    </div>
                    <div class="job-details">
                        <div class="detail-item">
                            <span class="detail-label">Experience:</span>
                            <span>8+ years</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Salary:</span>
                            <span>$80,000 - $120,000</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Visa Sponsorship:</span>
                            <span>Available</span>
                        </div>
                    </div>
                    <div class="job-actions">
                        <a href="#" class="job-link">View Details <i class="fas fa-arrow-right"></i></a>
                        <button class="btn btn-primary">Apply Now</button>
                    </div>
                </div>
                
                <div class="job-card">
                    <div class="job-header">
                        <h3 class="job-title">Au Pair Program</h3>
                        <div class="job-company">
                            <div class="company-logo">C</div>
                            <div class="company-name">Cultural Exchange</div>
                        </div>
                        <div class="job-meta">
                            <span class="badge">Contract</span>
                            <span class="badge">Germany</span>
                        </div>
                    </div>
                    <div class="job-details">
                        <div class="detail-item">
                            <span class="detail-label">Age:</span>
                            <span>18-30 years</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Stipend:</span>
                            <span>€800/month</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Benefits:</span>
                            <span>Accommodation + Travel</span>
                        </div>
                    </div>
                    <div class="job-actions">
                        <a href="#" class="job-link">View Details <i class="fas fa-arrow-right"></i></a>
                        <button class="btn btn-primary">Apply Now</button>
                    </div>
                </div>
                
                <div class="job-card">
                    <div class="job-header">
                        <h3 class="job-title">Engineering Supervisor</h3>
                        <div class="job-company">
                            <div class="company-logo">D</div>
                            <div class="company-name">Dubai Constructions</div>
                        </div>
                        <div class="job-meta">
                            <span class="badge">Full-time</span>
                            <span class="badge">UAE</span>
                        </div>
                    </div>
                    <div class="job-details">
                        <div class="detail-item">
                            <span class="detail-label">Experience:</span>
                            <span>10+ years</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Salary:</span>
                            <span>AED 25,000 - 35,000</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Relocation:</span>
                            <span>Provided</span>
                        </div>
                    </div>
                    <div class="job-actions">
                        <a href="#" class="job-link">View Details <i class="fas fa-arrow-right"></i></a>
                        <button class="btn btn-primary">Apply Now</button>
                    </div>
                </div>
            </div>
            
            <div class="search-card" style="margin-top: 40px;">
                <div class="card-header">
                    <h3 class="card-title">International Application Assistance</h3>
                </div>
                <div style="padding: 20px; text-align: center;">
                    <p>We provide complete application support for international positions including documentation, interview prep, and visa assistance.</p>
                    <p style="margin: 20px 0; font-weight: 600; color: var(--accent);">Flat fee: Ksh 2,000 per country application</p>
                    <a href="#" class="btn btn-accent">Get Application Support</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Success Stories</h2>
                <p class="section-subtitle">Hear from people who found opportunities through our platform</p>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
                <div class="testimonial-card">
                    <p class="testimonial-text">CareerConnect helped me create a professional resume that got me noticed. I landed a job at a top tech company with a 40% salary increase just two weeks after using their service!</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">J</div>
                        <div class="author-info">
                            <h4>James Mwangi</h4>
                            <p>Software Developer at Safaricom</p>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <p class="testimonial-text">The international job assistance was worth every penny. They handled all the paperwork and interview prep. I'm now working in Germany with a great family as an au pair!</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">S</div>
                        <div class="author-info">
                            <h4>Sarah Kamau</h4>
                            <p>Au Pair in Berlin, Germany</p>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <p class="testimonial-text">I found my current position through CareerConnect. The job search tools are excellent, and their resume service helped me stand out from hundreds of applicants.</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">D</div>
                        <div class="author-info">
                            <h4>David Ochieng</h4>
                            <p>Marketing Manager at KCB Group</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Frequently Asked Questions</h2>
            </div>
            
            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        How quickly will I receive my resume after payment?
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        We guarantee delivery of your professionally crafted resume within one hour after payment confirmation. Our team works efficiently to ensure you get your resume when you need it.
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        Do you offer resume services for specific industries?
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        Yes, our writers specialize in various industries including IT, healthcare, finance, engineering, education, and more. We match you with a writer who understands your specific field.
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        What does the international job application service include?
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        Our Ksh 2,000 service includes: application form completion, document preparation, interview coaching specific to the country, visa application guidance, and pre-departure orientation.
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        How often are new jobs added to the platform?
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        We add new opportunities daily. On average, 150-200 new positions are listed each day from employers across East Africa and international companies hiring in the region.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-column">
                    <h3>CareerConnect</h3>
                    <p style="color: #bbbbbb; margin-bottom: 20px;">Your pathway to career success in East Africa and beyond.</p>
                    <div style="display: flex; gap: 15px; margin-top: 20px;">
                        <a href="#" style="color: white; font-size: 1.2rem;"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" style="color: white; font-size: 1.2rem;"><i class="fab fa-twitter"></i></a>
                        <a href="#" style="color: white; font-size: 1.2rem;"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" style="color: white; font-size: 1.2rem;"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                
                <div class="footer-column">
                    <h3>Services</h3>
                    <ul class="footer-links">
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Resume Writing</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Job Search</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Career Counseling</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> International Applications</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Interview Preparation</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Kenya Jobs</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Uganda Jobs</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Tanzania Jobs</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Remote Jobs</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> International Jobs</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3>Contact Us</h3>
                    <ul class="footer-links">
                        <li><a href="#"><i class="fas fa-map-marker-alt"></i> Nairobi, Kenya</a></li>
                        <li><a href="#"><i class="fas fa-phone"></i> +254 700 123 456</a></li>
                        <li><a href="#"><i class="fas fa-envelope"></i> info@careerconnect.com</a></li>
                        <li><a href="#"><i class="fas fa-clock"></i> Mon-Fri: 8AM - 6PM</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="copyright">
                &copy; 2023 CareerConnect. All Rights Reserved.
            </div>
        </div>
    </footer>

    <script>
        // Slider functionality
        document.addEventListener('DOMContentLoaded', function() {
            const slides = document.querySelectorAll('.slide');
            const indicators = document.querySelectorAll('.indicator');
            let currentSlide = 0;
            
            function showSlide(n) {
                slides.forEach(slide => slide.classList.remove('active'));
                indicators.forEach(indicator => indicator.classList.remove('active'));
                
                slides[n].classList.add('active');
                indicators[n].classList.add('active');
                currentSlide = n;
            }
            
            // Auto slide
            function nextSlide() {
                let next = currentSlide + 1;
                if (next >= slides.length) next = 0;
                showSlide(next);
            }
            
            // Set up indicators
            indicators.forEach((indicator, index) => {
                indicator.addEventListener('click', () => showSlide(index));
            });
            
            // Auto slide every 5 seconds
            setInterval(nextSlide, 5000);
            
            // FAQ functionality
            const faqQuestions = document.querySelectorAll('.faq-question');
            
            faqQuestions.forEach(question => {
                question.addEventListener('click', () => {
                    question.classList.toggle('active');
                });
            });
        });
    </script>
</body>
</html>