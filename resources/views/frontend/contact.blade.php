@extends('layouts.frontend.frontend')
@section('content')
    <section class="rh_section rh_wrap rh_wrap--padding rh_wrap--topPadding">

        <div class="rh_page">


            <div class="rh_page__contact">


                <div class="rh_blog rh_blog__single">


                    <article id="post-155" class="rh_blog__post post-155 page type-page status-publish hentry">

                        <div class="rh_content entry-content">
                        </div>

                    </article>


                </div>

                <div class="rh_contact">

                    <div class="rh_contact__wrap">

                        <div class="rh_contact__form">
                            <section id="contact-form">
                                <form class="contact-form" method="post" action="http://modern.realhomes.io/wp-admin/admin-ajax.php" novalidate="novalidate">
                                    <p class="rh_contact__input rh_contact__input_text">
                                        <label for="name">Ad</label>
                                        <input type="text" name="name" id="name" class="required" placeholder="Adiniz" title="* Please provide your name" aria-required="true">
                                    </p>

                                    <p class="rh_contact__input rh_contact__input_text">
                                        <label for="email">Email</label>
                                        <input type="text" name="email" id="email" class="email required" placeholder="Email" title="* Please provide a valid email address" aria-required="true">
                                    </p>

                                    <p class="rh_contact__input rh_contact__input_text">
                                        <label for="number">Telefon</label>
                                        <input type="text" name="number" id="number" placeholder="Telefon">
                                    </p>

                                    <p class="rh_contact__input rh_contact__input_textarea">
                                        <label for="comment">Mesaj</label>
                                        <textarea cols="40" rows="6" name="message" id="comment" class="required" placeholder="Mesaj" title="* Please provide your message" aria-required="true"></textarea>
                                    </p>

                                    <div class="rh_contact__input rh_contact__input_recaptcha inspiry-recaptcha-wrapper clearfix">
                                        <div class="inspiry-google-recaptcha"></div>
                                    </div>

                                    <p class="rh_contact__input rh_contact__submit">
                                        <input type="submit" id="submit-button" value="Göndər" class="rh_btn rh_btn--primary" name="submit">
                                        <span id="ajax-loader"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32px" height="32px" viewBox="0 0 128 128" xml:space="preserve"><rect x="0" y="0" width="100%" height="100%" fill="#FFFFFF"></rect><g transform="rotate(251.025 64 64)"><path d="M75.4 126.63a11.43 11.43 0 0 1-2.1-22.65 40.9 40.9 0 0 0 30.5-30.6 11.4 11.4 0 1 1 22.27 4.87h.02a63.77 63.77 0 0 1-47.8 48.05v-.02a11.38 11.38 0 0 1-2.93.37z" fill="#1ea69a" fill-opacity="1"></path><animateTransform attributeName="transform" type="rotate" from="0 64 64" to="360 64 64" dur="1000ms" repeatCount="indefinite"></animateTransform></g></svg>
</span>
                                        <input type="hidden" name="action" value="send_message">
                                        <input type="hidden" name="nonce" value="63efef68a6">
                                    </p>

                                    <div id="error-container"></div>
                                    <div id="message-container"></div>
                                </form>
                            </section>
                        </div>
                        <!-- /.rh_contact__form -->


                        <div class="rh_contact__details">

                            <div class="rh_contact__item">
                                <div class="icon"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="18px" height="18px" viewBox="0 0 459 459" style="enable-background:new 0 0 459 459;" xml:space="preserve">
<g>
    <g>
        <path d="M91.8,198.9c35.7,71.4,96.9,130.05,168.3,168.3L316.2,311.1c7.649-7.649,17.85-10.199,25.5-5.1
			c28.05,10.2,58.649,15.3,91.8,15.3c15.3,0,25.5,10.2,25.5,25.5v86.7c0,15.3-10.2,25.5-25.5,25.5C193.8,459,0,265.2,0,25.5
			C0,10.2,10.2,0,25.5,0h89.25c15.3,0,25.5,10.2,25.5,25.5c0,30.6,5.1,61.2,15.3,91.8c2.55,7.65,0,17.85-5.1,25.5L91.8,198.9z"></path>
    </g>
</g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
</svg>
                                </div>
                                <p class="content">
                                    <span class="label">Telefon</span>(+994) 50 828 60 00									</p>
                            </div>



                            <div class="rh_contact__item">
                                <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 510 510">
                                        <path d="M459 51H51C22.95 51 0 73.95 0 102v306c0 28.05 22.95 51 51 51h408c28.05 0 51-22.95 51-51V102c0-28.05-22.95-51-51-51zm0 102L255 280.5 51 153v-51l204 127.5L459 102v51z"></path>
                                    </svg>
                                </div>
                                <p class="content">
                                    <span class="label">Email</span><a href="mailto:sales@yourwebsite.com">info@mrmax.az</a>
                                </p>
                            </div>

                            <div class="rh_contact__item">
                                <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 384 512"><path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path></svg></div>
                                <p class="content">
                                    <span class="label">Address</span>Əhməd Rəcəbli Adore Plaza										</p>
                            </div>

                        </div>							<!-- /.rh_contact__details -->
                        <!-- Map Container -->
                        <div class="rh_contact__map">
                            <!-- Works for Both Google Maps and Open Street Maps -->
                            <div id="map_canvas"></div>
                        </div>
                        <!-- /.rh_contact__map -->

                    </div>
                    <!-- /.rh_contact__wrap -->

                </div>
                <!-- /.rh_contact -->

            </div>
            <!-- /.rh_page__contact -->

        </div>
        <!-- /.rh_page -->


    </section>
@endsection