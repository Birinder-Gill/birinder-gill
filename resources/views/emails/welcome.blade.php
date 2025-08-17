<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Birinder Gill</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #0A0C00;
            background-color: #F3F5F6;
        }
        
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        
        .email-header {
            background: #0A0C00;
            padding: 40px 30px;
            text-align: center;
            color: white;
        }
        
        .logo-container {
            margin-bottom: 15px;
        }
        
        .logo {
            max-width: 200px;
            height: auto;
        }
        
        .logo-text {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 10px;
            color: white;
        }
        
        .header-subtitle {
            font-size: 16px;
            opacity: 0.9;
            margin-bottom: 0;
        }
        
        .email-content {
            padding: 40px 30px;
        }
        
        .greeting {
            font-size: 24px;
            font-weight: 600;
            color: #0A0C00;
            margin-bottom: 20px;
        }
        
        .message-text {
            font-size: 16px;
            line-height: 1.7;
            color: #0A0C00;
            margin-bottom: 25px;
        }
        
        .highlight-box {
            background: linear-gradient(135deg, #1a529f 0%, #deebfd 100%);
            color: #0A0C00;
            padding: 20px;
            border-radius: 8px;
            margin: 25px 0;
            text-align: center;
        }
        
        .highlight-box h3 {
            color: #1a529f;
            margin-bottom: 10px;
        }
        
        .cta-button {
            display: inline-block;
            background: #1a529f;
            color: white;
            padding: 15px 30px;
            text-decoration: none;
            border-radius: 6px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
            margin: 10px 5px;
        }
        
        .cta-button:hover {
            background: #144080;
            transform: translateY(-2px);
        }
        
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin: 30px 0;
        }
        
        .service-card {
            background: #ffffff;
            border: 1px solid #deebfd;
            border-radius: 12px;
            padding: 25px 20px;
            text-align: center;
            transition: all 0.3s ease;
            box-shadow: 0 2px 10px rgba(26, 82, 159, 0.1);
        }
        
        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(26, 82, 159, 0.15);
            border-color: #1a529f;
        }
        
        .service-icon {
            width: 60px;
            height: 60px;
            background: #deebfd;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            transition: all 0.3s ease;
        }
        
        .service-card:hover .service-icon {
            background: #1a529f;
            transform: scale(1.05);
        }
        
        .service-icon i {
            font-size: 24px;
            color: #1a529f;
            transition: color 0.3s ease;
        }
        
        .service-card:hover .service-icon i {
            color: white;
        }
        
        .service-title {
            font-size: 16px;
            font-weight: 600;
            color: #0A0C00;
            margin-bottom: 10px;
        }
        
        .service-description {
            font-size: 14px;
            color: #0A0C00;
            line-height: 1.5;
        }
        
        .contact-info {
            background: #F3F5F6;
            border-left: 4px solid #1a529f;
            padding: 20px;
            border-radius: 0 8px 8px 0;
            margin: 25px 0;
        }
        
        .contact-info h4 {
            color: #0A0C00;
            margin-bottom: 15px;
        }
        
        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            font-size: 14px;
        }
        
        .contact-item i {
            width: 20px;
            margin-right: 10px;
            color: #1a529f;
        }
        
        .contact-item a {
            color: #1a529f;
            text-decoration: none;
        }
        
        .contact-item a:hover {
            text-decoration: underline;
        }
        
        .email-footer {
            background: #0A0C00;
            color: white;
            padding: 30px;
            text-align: center;
        }
        
        .social-links {
            margin: 20px 0;
        }
        
        .social-links a {
            display: inline-block;
            width: 40px;
            height: 40px;
            background: #1a529f;
            color: white;
            text-decoration: none;
            border-radius: 50%;
            line-height: 40px;
            margin: 0 5px;
            transition: all 0.3s ease;
        }
        
        .social-links a:hover {
            background: #deebfd;
            color: #1a529f;
            transform: translateY(-2px);
        }
        
        .footer-text {
            font-size: 14px;
            opacity: 0.8;
            margin-bottom: 10px;
        }
        
        .divider {
            height: 1px;
            background: linear-gradient(90deg, transparent, #deebfd, #1a529f, #deebfd, transparent);
            margin: 30px 0;
        }
        
        /* Responsive Design */
        @media only screen and (max-width: 600px) {
            .email-container {
                margin: 0;
                box-shadow: none;
            }
            
            .email-header,
            .email-content,
            .email-footer {
                padding: 25px 20px;
            }
            
            .services-grid {
                grid-template-columns: 1fr;
            }
            
            .greeting {
                font-size: 20px;
            }
            
            .cta-button {
                display: block;
                text-align: center;
                margin: 10px 0;
            }
        }
    </style>
</head>
<body>
    <div class="email-container">
        <!-- Header -->
        <div class="email-header">
            <div class="logo-container">
                <img src="https://birindergill.com/assets/img/logo-dark.svg" alt="Birinder Gill Logo" class="logo">
            </div>
        </div>
        
        <!-- Main Content -->
        <div class="email-content">
            <h1 class="greeting">Welcome to Our Community!</h1>
            
            <div class="message-text">
                Thank you for getting in touch with us! We will contact you within 24 hours to discuss your project requirements.
            </div>
            
            <div class="contact-info">
                <h4>Get in Touch</h4>
                <div class="contact-item">
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:birindergill53@gmail.com">birindergill53@gmail.com</a>
                </div>
                <div class="contact-item">
                    <i class="fas fa-phone"></i>
                    <a href="tel:+917009154010">+91 70091 54010</a>
                </div>
                <div class="contact-item">
                    <i class="fas fa-globe"></i>
                    <a href="https://birindergill.com">birindergill.com</a>
                </div>
                <div class="contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Punjab, India</span>
                </div>
            </div>
            
            <div class="message-text" style="margin-top: 30px;">
                Thank you for your interest in working with us. We look forward to creating something amazing together!
            </div>
            
            <p style="margin-top: 25px; color: #0A0C00; font-size: 14px;">
                Best regards,<br>
                <strong>Birinder Gill</strong><br>
                <em>Full Stack Developer & UI/UX Designer</em>
            </p>
        </div>
        
        <!-- Footer -->
        <div class="email-footer">
            <div class="social-links">
                <a href="https://www.linkedin.com/in/birinder-gill" title="LinkedIn">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a href="https://github.com/birindergill" title="GitHub">
                    <i class="fab fa-github"></i>
                </a>
                <a href="https://twitter.com/birindergill" title="Twitter">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="https://instagram.com/birindergill" title="Instagram">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
            
            <p class="footer-text">© 2025 Birinder Gill. All rights reserved.</p>
            <p class="footer-text">
                <i class="fas fa-envelope"></i> birindergill53@gmail.com | 
                <i class="fas fa-phone"></i> +91 70091 54010 | 
                <i class="fas fa-globe"></i> birindergill.com
            </p>
        </div>
    </div>
</body>
</html>
