@extends('frontend')

@section('content')
    {{-- Hero Section --}}
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/bg/about-banner.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Privacy Policy</h1>
            </div>
        </div>
    </div>

    {{-- Privacy Policy Content --}}
    <div class="privacy-policy-area space">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-12">
                    <div class="privacy-content">
                        {{-- Last Updated --}}
                        <div class="policy-meta mb-40">
                            <p class="last-updated"><strong>Last Updated:</strong> August 11, 2025</p>
                        </div>

                        {{-- Introduction --}}
                        <div class="policy-section mb-50">
                            <h2 class="policy-section-title">Introduction</h2>
                            <p class="policy-text">
                                At Birinder Gill ("we," "our," or "us"), we are committed to protecting your privacy and ensuring the security of your personal information. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website, use our services, or engage with us in any capacity.
                            </p>
                            <p class="policy-text">
                                By accessing or using our services, you agree to the collection and use of information in accordance with this policy. If you disagree with any part of this policy, please do not use our services.
                            </p>
                        </div>

                        {{-- Information We Collect --}}
                        <div class="policy-section mb-50">
                            <h2 class="policy-section-title">Information We Collect</h2>
                            
                            <h3 class="policy-subsection-title">Personal Information</h3>
                            <p class="policy-text">We may collect the following types of personal information:</p>
                            <ul class="policy-list">
                                <li>Name and contact information (email address, phone number, mailing address)</li>
                                <li>Business information (company name, job title, industry)</li>
                                <li>Project requirements and specifications</li>
                                <li>Payment and billing information</li>
                                <li>Communication preferences</li>
                            </ul>

                            <h3 class="policy-subsection-title">Technical Information</h3>
                            <p class="policy-text">We automatically collect certain technical information when you visit our website:</p>
                            <ul class="policy-list">
                                <li>IP address and browser type</li>
                                <li>Device information and operating system</li>
                                <li>Pages visited and time spent on our website</li>
                                <li>Referring website and search terms used</li>
                                <li>Cookies and similar tracking technologies</li>
                            </ul>
                        </div>

                        {{-- How We Use Information --}}
                        <div class="policy-section mb-50">
                            <h2 class="policy-section-title">How We Use Your Information</h2>
                            <p class="policy-text">We use the collected information for the following purposes:</p>
                            <ul class="policy-list">
                                <li><strong>Service Delivery:</strong> To provide, maintain, and improve our web development, design, and digital marketing services</li>
                                <li><strong>Communication:</strong> To respond to inquiries, provide customer support, and send project updates</li>
                                <li><strong>Business Operations:</strong> To process payments, manage contracts, and maintain business records</li>
                                <li><strong>Marketing:</strong> To send promotional materials, newsletters, and updates about our services (with your consent)</li>
                                <li><strong>Legal Compliance:</strong> To comply with applicable laws, regulations, and legal processes</li>
                                <li><strong>Security:</strong> To protect our website, services, and users from fraud and security threats</li>
                            </ul>
                        </div>

                        {{-- Information Sharing --}}
                        <div class="policy-section mb-50">
                            <h2 class="policy-section-title">Information Sharing and Disclosure</h2>
                            <p class="policy-text">We do not sell, trade, or otherwise transfer your personal information to third parties except in the following circumstances:</p>
                            
                            <h3 class="policy-subsection-title">Service Providers</h3>
                            <p class="policy-text">We may share information with trusted third-party service providers who assist us in:</p>
                            <ul class="policy-list">
                                <li>Website hosting and maintenance</li>
                                <li>Payment processing</li>
                                <li>Email marketing services</li>
                                <li>Analytics and website optimization</li>
                                <li>Customer support tools</li>
                            </ul>

                            <h3 class="policy-subsection-title">Legal Requirements</h3>
                            <p class="policy-text">We may disclose your information when required by law or to:</p>
                            <ul class="policy-list">
                                <li>Comply with legal obligations or court orders</li>
                                <li>Protect our rights, property, or safety</li>
                                <li>Investigate potential violations of our terms of service</li>
                                <li>Prevent fraud or illegal activities</li>
                            </ul>
                        </div>

                        {{-- Data Security --}}
                        <div class="policy-section mb-50">
                            <h2 class="policy-section-title">Data Security</h2>
                            <p class="policy-text">
                                We implement appropriate technical and organizational measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. These measures include:
                            </p>
                            <ul class="policy-list">
                                <li>SSL encryption for data transmission</li>
                                <li>Secure servers and databases</li>
                                <li>Regular security audits and updates</li>
                                <li>Access controls and employee training</li>
                                <li>Incident response procedures</li>
                            </ul>
                            <p class="policy-text">
                                However, no method of transmission over the Internet or electronic storage is 100% secure. While we strive to protect your personal information, we cannot guarantee absolute security.
                            </p>
                        </div>

                        {{-- Your Rights --}}
                        <div class="policy-section mb-50">
                            <h2 class="policy-section-title">Your Rights and Choices</h2>
                            <p class="policy-text">You have the following rights regarding your personal information:</p>
                            <ul class="policy-list">
                                <li><strong>Access:</strong> Request access to the personal information we hold about you</li>
                                <li><strong>Correction:</strong> Request correction of inaccurate or incomplete information</li>
                                <li><strong>Deletion:</strong> Request deletion of your personal information (subject to legal requirements)</li>
                                <li><strong>Portability:</strong> Request a copy of your information in a portable format</li>
                                <li><strong>Opt-out:</strong> Unsubscribe from marketing communications at any time</li>
                                <li><strong>Restriction:</strong> Request restriction of processing in certain circumstances</li>
                            </ul>
                            <p class="policy-text">
                                To exercise these rights, please contact us using the information provided in the "Contact Us" section below.
                            </p>
                        </div>

                        {{-- Cookies --}}
                        <div class="policy-section mb-50">
                            <h2 class="policy-section-title">Cookies and Tracking Technologies</h2>
                            <p class="policy-text">
                                We use cookies and similar tracking technologies to enhance your browsing experience and analyze website usage. Cookies are small data files stored on your device that help us:
                            </p>
                            <ul class="policy-list">
                                <li>Remember your preferences and settings</li>
                                <li>Analyze website traffic and user behavior</li>
                                <li>Improve website functionality and performance</li>
                                <li>Provide personalized content and advertisements</li>
                            </ul>
                            <p class="policy-text">
                                You can control cookie settings through your browser preferences. However, disabling cookies may affect the functionality of our website.
                            </p>
                        </div>

                        {{-- Data Retention --}}
                        <div class="policy-section mb-50">
                            <h2 class="policy-section-title">Data Retention</h2>
                            <p class="policy-text">
                                We retain your personal information only for as long as necessary to fulfill the purposes outlined in this Privacy Policy, unless a longer retention period is required or permitted by law. The retention period depends on:
                            </p>
                            <ul class="policy-list">
                                <li>The nature of the information and why it was collected</li>
                                <li>Legal, regulatory, or business requirements</li>
                                <li>The duration of our business relationship</li>
                                <li>Whether you have requested deletion of your information</li>
                            </ul>
                        </div>

                        {{-- Third-Party Links --}}
                        <div class="policy-section mb-50">
                            <h2 class="policy-section-title">Third-Party Links</h2>
                            <p class="policy-text">
                                Our website may contain links to third-party websites or services. We are not responsible for the privacy practices or content of these external sites. We encourage you to review the privacy policies of any third-party websites you visit.
                            </p>
                        </div>

                        {{-- Changes to Policy --}}
                        <div class="policy-section mb-50">
                            <h2 class="policy-section-title">Changes to This Privacy Policy</h2>
                            <p class="policy-text">
                                We may update this Privacy Policy from time to time to reflect changes in our practices, technology, legal requirements, or other factors. We will notify you of any material changes by:
                            </p>
                            <ul class="policy-list">
                                <li>Posting the updated policy on our website</li>
                                <li>Updating the "Last Updated" date</li>
                                <li>Sending email notifications for significant changes</li>
                            </ul>
                            <p class="policy-text">
                                Your continued use of our services after any changes indicates your acceptance of the updated Privacy Policy.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
