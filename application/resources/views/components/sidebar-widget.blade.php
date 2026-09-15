<!-- Start sidebar widget content -->
<div class="xs-sidebar-group info-group info-sidebar">
    <div class="xs-overlay xs-bg-black"></div>
    <div class="xs-sidebar-widget">
        <div class="sidebar-widget-container">
            <div class="widget-heading">
                <a href="#" class="close-side-widget">X</a>
            </div>
            <div class="sidebar-textwidget">
                <div class="sidebar-info-contents">
                    <div class="content-inner">
                        <div class="logo">
                            <a href="{{ route('index') }}"><img src="{{ asset('assets/images/resources/logo-2.png') }}"
                                    alt="" /></a>
                        </div>
                        <div class="content-box">
                            <h4>About Us</h4>
                            <div class="inner-text">
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                                    roots in a piece of classical Latin literature from 45 BC, making it over
                                    2000 years old.
                                </p>
                            </div>
                        </div>

                        <div class="form-inner">
                            <h4>Get a free quote</h4>
                            <form action="{{ route('contact.send') }}" method="POST" class="contact-form-validated">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="Name" >
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Email" >
                                </div>
                                <div class="form-group">
                                    <textarea name="message" placeholder="Message..." ></textarea>
                                </div>
                                <div class="form-group message-btn">
                                    <button class="thm-btn" data-text="Submit Now +" type="submit"
                                        data-loading-text="Please wait...">
                                        <span class="fas fa-arrow-right"></span>
                                        Submit Now
                                    </button>
                                </div>
                                <div class="result"></div>
                            </form>
                        </div>

                        <div class="sidebar-contact-info">
                            <h4>Contact Info</h4>
                            <ul class="list-unstyled">
                                <li>
                                    <span class="icon-pin"></span> 88 broklyn street, New York
                                </li>
                                <li>
                                    <span class="icon-phone-call"></span>
                                    <a href="tel:123456789">+1 555-9990-153</a>
                                </li>
                                <li>
                                    <span class="icon-email"></span>
                                    <a href="mailto:info@example.com">info@example.com</a>
                                </li>
                            </ul>
                        </div>
                        <div class="thm-social-link1">
                            <ul class="social-box list-unstyled">
                                <li>
                                    <a href="https://www.facebook.com/share/1JyNuEhQbp/" target="_blank" rel="noopener noreferrer" style="display:flex;align-items:center;justify-content:center;line-height:0;"><i class="icon-facebook-app-symbol" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.tiktok.com/@home.medical7" target="_blank" rel="noopener noreferrer" aria-label="TikTok" style="display:flex;align-items:center;justify-content:center;line-height:0;">
                                        <svg viewBox="0 0 64 64" width="27" height="27" aria-hidden="true" focusable="false" style="display:block;fill:currentColor;vertical-align:middle;transform:translateY(1px);transform-origin:center;">
                                            <path d="M39.5 9.5c1.9 2.9 4.7 5 8.1 6.2v6.4c-2.8-.4-5.4-1.7-7.4-3.8v16.5c0 7.3-5.9 13.2-13.2 13.2S11 42 11 34.8 16.9 21.6 24.2 21.6c1.8 0 3.5.3 5 .9v6.5a11 11 0 0 0-5-1.4c-4.7 0-8.4 3.8-8.4 8.4 0 4.7 3.8 8.4 8.4 8.4 4.6 0 8.3-3.6 8.4-8.2V9.5h5.5Z"/>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End sidebar widget content -->
