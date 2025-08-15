@extends('frontend')

@section('content')
    {{-- Hero Section --}}
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/bg/about-banner.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Terms and Conditions</h1>
                <p class="breadcumb-text">Please read these terms carefully before using our services</p>
            </div>
        </div>
    </div>

    {{-- Terms and Conditions Content --}}
    <div class="terms-conditions-area space">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-12">
                    <div class="terms-content">
                        {{-- Last Updated --}}
                        <div class="policy-meta mb-40">
                            <p class="last-updated"><strong>Last Updated:</strong> August 11, 2025</p>
                        </div>

                        {{-- Introduction --}}
                        <div class="policy-section mb-50">
                            <h2 class="policy-section-title">1. Introduction and Acceptance</h2>
                            <p class="policy-text">
                                Welcome to Birinder Gill's website and services. These Terms and Conditions ("Terms") govern your use of our website, services, and any related communications or interactions with our business.
                            </p>
                            <p class="policy-text">
                                By accessing our website, engaging our services, or entering into any agreement with us, you acknowledge that you have read, understood, and agree to be bound by these Terms. If you do not agree with these Terms, please do not use our services.
                            </p>
                        </div>

                        {{-- Services Description --}}
                        <div class="policy-section mb-50">
                            <h2 class="policy-section-title">2. Services Description</h2>
                            <p class="policy-text">Birinder Gill provides the following professional services:</p>
                            <ul class="policy-list">
                                <li><strong>Web Development:</strong> Custom website development, e-commerce solutions, web applications, and CMS development</li>
                                <li><strong>Web Design:</strong> User interface design, user experience design, responsive design, and design system creation</li>
                                <li><strong>Digital Marketing:</strong> SEO optimization, social media marketing, content marketing, and online advertising</li>
                                <li><strong>Branding:</strong> Logo design, brand identity development, and brand strategy consultation</li>
                            </ul>
                            <p class="policy-text">
                                Service specifications, deliverables, timelines, and pricing will be detailed in separate project agreements or proposals.
                            </p>
                        </div>

                        {{-- Project Terms --}}
                        <div class="policy-section mb-50">
                            <h2 class="policy-section-title">3. Project Terms and Agreements</h2>
                            
                            <h3 class="policy-subsection-title">3.1 Project Proposals</h3>
                            <p class="policy-text">
                                All projects begin with a detailed proposal outlining scope, deliverables, timeline, and costs. Proposals are valid for 30 days unless otherwise specified.
                            </p>

                            <h3 class="policy-subsection-title">3.2 Project Acceptance</h3>
                            <p class="policy-text">
                                Projects commence upon signed agreement and receipt of initial payment. Changes to project scope require written approval and may affect timeline and costs.
                            </p>

                            <h3 class="policy-subsection-title">3.3 Client Responsibilities</h3>
                            <p class="policy-text">Clients are responsible for:</p>
                            <ul class="policy-list">
                                <li>Providing accurate project requirements and specifications</li>
                                <li>Supplying necessary content, images, and materials in a timely manner</li>
                                <li>Providing feedback and approvals within agreed timeframes</li>
                                <li>Ensuring all provided materials are legally owned or licensed</li>
                                <li>Making payments according to the agreed schedule</li>
                            </ul>
                        </div>

                        {{-- Payment Terms --}}
                        <div class="policy-section mb-50">
                            <h2 class="policy-section-title">4. Payment Terms</h2>
                            
                            <h3 class="policy-subsection-title">4.1 Payment Schedule</h3>
                            <p class="policy-text">Unless otherwise agreed:</p>
                            <ul class="policy-list">
                                <li>50% deposit required before project commencement</li>
                                <li>Remaining balance due upon project completion</li>
                                <li>Monthly retainer for ongoing services</li>
                                <li>Additional charges for scope changes or rush requests</li>
                            </ul>

                            <h3 class="policy-subsection-title">4.2 Late Payments</h3>
                            <p class="policy-text">
                                Invoices are due within 30 days of issue date. Late payments may incur a 1.5% monthly service charge and may result in project suspension or termination.
                            </p>

                            <h3 class="policy-subsection-title">4.3 Refund Policy</h3>
                            <p class="policy-text">
                                Refunds are considered on a case-by-case basis. Work completed to the point of termination is non-refundable. Deposit refunds may be available if project is cancelled before work begins.
                            </p>
                        </div>

                        {{-- Intellectual Property --}}
                        <div class="policy-section mb-50">
                            <h2 class="policy-section-title">5. Intellectual Property Rights</h2>
                            
                            <h3 class="policy-subsection-title">5.1 Client Content</h3>
                            <p class="policy-text">
                                Clients retain ownership of all content, trademarks, and materials provided to us. Clients grant us a license to use these materials solely for the purpose of delivering agreed services.
                            </p>

                            <h3 class="policy-subsection-title">5.2 Deliverables</h3>
                            <p class="policy-text">
                                Upon full payment, clients receive ownership rights to custom designs, code, and deliverables created specifically for their project. We retain the right to showcase work in our portfolio unless otherwise agreed.
                            </p>

                            <h3 class="policy-subsection-title">5.3 Third-Party Components</h3>
                            <p class="policy-text">
                                Some projects may include third-party components, plugins, or frameworks. These remain subject to their respective licenses and terms of use.
                            </p>
                        </div>

                        {{-- Warranties and Disclaimers --}}
                        <div class="policy-section mb-50">
                            <h2 class="policy-section-title">6. Warranties and Disclaimers</h2>
                            
                            <h3 class="policy-subsection-title">6.1 Service Warranty</h3>
                            <p class="policy-text">
                                We warrant that our services will be performed with professional skill and care. We provide a 30-day warranty on deliverables for defects in workmanship under normal use.
                            </p>

                            <h3 class="policy-subsection-title">6.2 Disclaimer</h3>
                            <p class="policy-text">
                                EXCEPT AS EXPRESSLY PROVIDED, ALL SERVICES ARE PROVIDED "AS IS" WITHOUT WARRANTIES OF ANY KIND. WE DISCLAIM ALL IMPLIED WARRANTIES INCLUDING MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, AND NON-INFRINGEMENT.
                            </p>

                            <h3 class="policy-subsection-title">6.3 Third-Party Services</h3>
                            <p class="policy-text">
                                We are not responsible for the performance, availability, or security of third-party services, hosting providers, or platforms integrated into client projects.
                            </p>
                        </div>

                        {{-- Limitation of Liability --}}
                        <div class="policy-section mb-50">
                            <h2 class="policy-section-title">7. Limitation of Liability</h2>
                            <p class="policy-text">
                                TO THE MAXIMUM EXTENT PERMITTED BY LAW, OUR TOTAL LIABILITY SHALL NOT EXCEED THE AMOUNT PAID BY CLIENT FOR THE SPECIFIC SERVICE GIVING RISE TO THE CLAIM.
                            </p>
                            <p class="policy-text">
                                WE SHALL NOT BE LIABLE FOR ANY INDIRECT, INCIDENTAL, SPECIAL, CONSEQUENTIAL, OR PUNITIVE DAMAGES, INCLUDING BUT NOT LIMITED TO LOSS OF PROFITS, DATA, OR BUSINESS OPPORTUNITIES.
                            </p>
                        </div>

                        {{-- Termination --}}
                        <div class="policy-section mb-50">
                            <h2 class="policy-section-title">8. Termination</h2>
                            
                            <h3 class="policy-subsection-title">8.1 Termination by Client</h3>
                            <p class="policy-text">
                                Clients may terminate projects with 7 days written notice. Client remains responsible for payment of all work completed and approved to the date of termination.
                            </p>

                            <h3 class="policy-subsection-title">8.2 Termination by Us</h3>
                            <p class="policy-text">We may terminate services immediately if:</p>
                            <ul class="policy-list">
                                <li>Client fails to make payments when due</li>
                                <li>Client breaches any material term of our agreement</li>
                                <li>Client requests illegal or unethical work</li>
                                <li>Client becomes abusive or disruptive to our team</li>
                            </ul>
                        </div>

                        {{-- Confidentiality --}}
                        <div class="policy-section mb-50">
                            <h2 class="policy-section-title">9. Confidentiality</h2>
                            <p class="policy-text">
                                We respect the confidentiality of client information and will not disclose proprietary or sensitive information to third parties without consent, except as required by law or necessary for service delivery.
                            </p>
                            <p class="policy-text">
                                Clients agree to keep confidential any proprietary methods, processes, or business information shared by us during the course of our engagement.
                            </p>
                        </div>

                        {{-- Force Majeure --}}
                        <div class="policy-section mb-50">
                            <h2 class="policy-section-title">10. Force Majeure</h2>
                            <p class="policy-text">
                                Neither party shall be liable for delays or failures in performance resulting from circumstances beyond their reasonable control, including but not limited to natural disasters, government actions, pandemic restrictions, or internet service disruptions.
                            </p>
                        </div>

                        {{-- Website Terms --}}
                        <div class="policy-section mb-50">
                            <h2 class="policy-section-title">11. Website Use Terms</h2>
                            
                            <h3 class="policy-subsection-title">11.1 Acceptable Use</h3>
                            <p class="policy-text">You agree not to:</p>
                            <ul class="policy-list">
                                <li>Use our website for any unlawful purpose</li>
                                <li>Attempt to gain unauthorized access to our systems</li>
                                <li>Interfere with website functionality or security</li>
                                <li>Copy, reproduce, or distribute website content without permission</li>
                                <li>Use automated systems to access or scrape our website</li>
                            </ul>

                            <h3 class="policy-subsection-title">11.2 User Content</h3>
                            <p class="policy-text">
                                Any content you submit through our website (forms, comments, etc.) grants us a license to use, modify, and display such content for business purposes.
                            </p>
                        </div>

                        {{-- Governing Law --}}
                        <div class="policy-section mb-50">
                            <h2 class="policy-section-title">12. Governing Law and Disputes</h2>
                            <p class="policy-text">
                                These Terms shall be governed by and construed in accordance with the laws of Punjab, India. Any disputes shall be resolved through binding arbitration or in the courts of Punjab, India.
                            </p>
                            <p class="policy-text">
                                We encourage clients to contact us directly to resolve any concerns before pursuing formal dispute resolution.
                            </p>
                        </div>

                        {{-- Modifications --}}
                        <div class="policy-section mb-50">
                            <h2 class="policy-section-title">13. Modifications to Terms</h2>
                            <p class="policy-text">
                                We reserve the right to modify these Terms at any time. Updated Terms will be posted on our website with a new "Last Updated" date. Continued use of our services after changes constitutes acceptance of the modified Terms.
                            </p>
                            <p class="policy-text">
                                For ongoing client relationships, material changes will be communicated directly and may require agreement to new terms.
                            </p>
                        </div>

                        {{-- Severability --}}
                        <div class="policy-section mb-50">
                            <h2 class="policy-section-title">14. Severability</h2>
                            <p class="policy-text">
                                If any provision of these Terms is found to be unenforceable or invalid, the remaining provisions shall continue in full force and effect. The invalid provision shall be replaced with a valid provision that most closely reflects the original intent.
                            </p>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
