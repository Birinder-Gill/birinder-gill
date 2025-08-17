<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Contact Message - Birinder Gill</title>
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
            background: #1a529f;
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
            filter: brightness(0) invert(1);
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

        .contact-details {
            background: #F3F5F6;
            border-left: 4px solid #1a529f;
            padding: 25px;
            border-radius: 0 8px 8px 0;
            margin: 25px 0;
        }

        .contact-details h4 {
            color: #0A0C00;
            margin-bottom: 20px;
            font-size: 18px;
        }

        .contact-field {
            display: flex;
            margin-bottom: 15px;
            padding: 10px 0;
            border-bottom: 1px solid #deebfd;
        }

        .contact-field:last-child {
            border-bottom: none;
        }

        .field-label {
            font-weight: 600;
            color: #1a529f;
            min-width: 80px;
            margin-right: 15px;
        }

        .field-value {
            color: #0A0C00;
            flex: 1;
            word-break: break-word;
        }

        .message-field {
            margin-top: 15px;
        }

        .message-field .field-label {
            display: block;
            margin-bottom: 10px;
        }

        .message-content {
            background: #ffffff;
            border: 1px solid #deebfd;
            border-radius: 6px;
            padding: 15px;
            color: #0A0C00;
            line-height: 1.6;
            font-style: italic;
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

            .greeting {
                font-size: 20px;
            }

            .contact-field {
                flex-direction: column;
            }

            .field-label {
                min-width: auto;
                margin-bottom: 5px;
            }
        }
    </style>
</head>

<body>
    <div class="email-container">
        <!-- Header -->
        <div class="email-header">
            <div class="logo-container">
                <img src="https://birindergill.com/assets/img/logo.svg" alt="Birinder Gill Logo" class="logo">
            </div>
        </div>

        <!-- Main Content -->
        <div class="email-content">
            <h1 class="greeting">New Contact Message Received</h1>

            <div class="message-text">
                You have received a new contact message through your website. Here are the details:
            </div>

            <div class="contact-details">
                <h4><i class="fas fa-user-circle" style="margin-right: 10px; color: #1a529f;"></i>Contact Information
                </h4>

                <div class="contact-field">
                    <div class="field-label">Name:</div>
                    <div class="field-value">{{ $contact->name }}</div>
                </div>

                <div class="contact-field">
                    <div class="field-label">Email:</div>
                    <div class="field-value">
                        <a href="mailto:{{ $contact->email }}" style="color: #1a529f; text-decoration: none;">
                            {{ $contact->email }}
                        </a>
                    </div>
                </div>

                @if ($contact->phone)
                    <div class="contact-field">
                        <div class="field-label">Phone:</div>
                        <div class="field-value">
                            <a href="tel:{{ $contact->phone }}" style="color: #1a529f; text-decoration: none;">
                                {{ $contact->phone }}
                            </a>
                        </div>
                    </div>
                @endif

                @if ($contact->subject)
                    <div class="contact-field">
                        <div class="field-label">Subject:</div>
                        <div class="field-value">{{ $contact->subject }}</div>
                    </div>
                @endif

                @if ($contact->website)
                    <div class="contact-field">
                        <div class="field-label">Website:</div>
                        <div class="field-value">
                            <a href="{{ $contact->website }}" target="_blank"
                                style="color: #1a529f; text-decoration: none;">
                                {{ $contact->website }}
                            </a>
                        </div>
                    </div>
                @endif

                <div class="message-field">
                    <div class="field-label">Message:</div>
                    <div class="message-content">
                        {{ $contact->message }}
                    </div>
                </div>
            </div>

            <p style="margin-top: 25px; color: #0A0C00; font-size: 14px;">
                <strong>Contact received on:</strong> {{ now()->format('F j, Y \a\t g:i A') }}<br>
                <strong>Website:</strong> birindergill.com
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
