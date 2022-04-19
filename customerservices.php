<?php include('navbar/header.php');?>
    <div class="customer-banner">
        <div class="customer-banner-heading">
            <span class="customer-banner-heading-span">Customer </span>
            <span class="customer-banner-heading-span-bold">Service</span>
        </div>
    </div>
    <div class="customer-section-first">
        <div class="customer-section-head">
            <p class="customer-section-heading">FAQ</p>
            <div class="customer-section-line"></div>
            <div class="customer-section-first-faq">
                <div class="faq-toggletag">
                    <button class="tabbutton1 tabbutton-active" onclick="activefaqTab('tagglebutton-one','content1');"
                        id="tagglebutton-one">SimpleSite subscriptions and
                        Payment</button>
                    <button class="tabbutton1 " onclick="activefaqTab('tagglebutton-two','content2')"
                        id="tagglebutton-two">General
                        use of SimpleSite</button>
                </div>
                <div class="simpletoggle-content">
                    <div class="simpletoggle-subscription" id="content1">
                        <div class="faq">

                            <label for="checkbox1">
                                
                                <p class="faq-heading" id="faq-Handing" onclick="faqanswer('faq-Answer-one')">
                                    <span><img src="img/down arrow.png" alt="down aroow" class="arrow-icon"></span>
                                    How much does a simpleSite subscription cost and what feature are included?
                                </p>
                                <p class="faq-text" id="faq-Answer-one">Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Voluptas
                                    dolorum veritatis, inventore iste beatae repudiandae? Reprehenderit recusandae
                                    asperiores ipsum voluptatem voluptate consequatur praesentium aspernatur deserunt
                                    illo.
                                    Harum dolores provident deserunt.</p>

                            </label>
                        </div>
                        <div class="faq">

                            <label for="checkbox2">
                                
                                <div class="faq-heading" onclick="faqanswer('faq-answer-two')">
                                    <span><img src="img/down arrow.png" alt="down aroow" class="arrow-icon"></span> How can
                                    i get my Domain name?</div>
                                <div class="faq-text" id="faq-answer-two">
                                    <p class="faq-paragraph" >At SimpleSite it’s easy to get your own
                                        domain name for your
                                        website.
                                        When you purchase a subscription you can choose your own domain name, e.g.,
                                        www.yourname.com instead of yourname.SimpleSite.com. In addition, you can
                                        register
                                        up to
                                        five custom email addresses, for example info@yourname.com.

                                    <p class="faq-paragraph">upgrade and get your own domain name please click on the link
                                        below.
                                    </p>
                                    <p class="faq-paragraph"><a href="https://www.simplesite.com/pages/service-login.aspx"
                                            class="href-none">Get
                                            own
                                            domain</a> </p>
                                </div>

                            </label>
                        </div>
                        <div class="faq">

                            <label for="checkbox3">
                                
                                <div class="faq-heading" onclick="faqanswer('faq-answer-three')">
                                    <span><img src="img/down arrow.png" alt="down aroow" class="arrow-icon"></span> I
                                    have received the simpleSite gift
                                    certificate.How do
                                    i redeem it?
                                </div>
                                <div class="faq-text" id="faq-answer-three">
                                    <p class="faq-paragraph">If you have received a SimpleSite gift certificate and want to
                                        use
                                        it to make a SimpleSite PRO website, click this link to follow the instructions:
                                    </p>
                                    <p class="faq-paragraph"> <a
                                            href="https://www.simplesite.com/pages/gift-certificate.aspx"
                                            class="href-none">Click here to redeem your SimpleSite gift certificate.</a>
                                    </p>
                                </div>
                            </label>
                        </div>
                        <div class="faq">

                            <label for="checkbox4">
                                
                                <div class="faq-heading" onclick="faqanswer('faq-answer-four')">
                                    <span><img src="img/down arrow.png" alt="down aroow"
                                            class="arrow-icon"></span> Can I renew a current Subscription with get a
                                    certificate</div>
                                <div class="faq-text" id="faq-answer-four">
                                    <p class="faq-paragraph">
                                        Yes, but only if the SimpleSite gift certificate you received has that option
                                        listed. If
                                        it
                                        does,
                                        <span class="faq-paragraph"> <a
                                                href="https://www.simplesite.com/pages/service-login.aspx?loginintobskey=usergiftrenew"
                                                class="href-none">you can redeem it here</a> </span>
                                    </p>
                                </div>
                            </label>
                        </div>
                        <div class="faq">

                            <label for="checkbox5">
                                
                                <div class="faq-heading" onclick="faqanswer('faq-answer-five')">
                                    <span><img src="img/down arrow.png" alt="down aroow"
                                            class="arrow-icon"></span> How can I pay for and renew my Subscription</div>
                                <div class="faq-text" id="faq-answer-five">
                                    <p class="faq-paragraph">
                                        <span class="faq-paragraph"> <a
                                                href="https://www.simplesite.com/pages/service-login.aspx?ReturnUrl=%2fbuilder%2fpages%2fsubsinfo.aspx%3floginintobskey%3dsubsinfo&loginintobskey=subsinfo"
                                                class="href-none">Click here to go to the SimpleSite subscription
                                                renewal
                                                page.</a> </span>
                                    </p>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="simpletoggle-general" id="content2">
                        <div class="faq">
                            
                            <label for="content2-checkbox1">
                                
                                <p class="faq-heading" onclick="faqanswer('faq-Answer2-one')">
                                    <span><img src="img/down arrow.png" alt="down aroow" class="arrow-icon"></span>
                                    I forgot my passwordwhat should i do?
                                </p>
                                <div class="faq-text" id="faq-Answer2-one">
                                    <p class="faq-paragraph">To reset your password <a
                                            href="https://www.simplesite.com/pages/service-login.aspx"
                                            class="href-none">Visit our login page,</a> our login page, click on "Have
                                        you
                                        forgotten your password?", and enter the required information. Then, we will
                                        send a
                                        password reset link to your registered email address. Please remember to check
                                        your
                                        spam/promotions folders in case our email ends there.</p>

                                    <p class="faq-paragraph"> If you do not receive the password reset link, or still have
                                        problems logging in
                                        to
                                        your website's editor, please contact our customer service team at
                                        <a href="https://www.simplesite.com/pages/service-login.aspx"
                                            class="href-none">customerservice@simplesite.com,</a> and provide your
                                        website's address. We kindly
                                        ask
                                        you to contact us from the email address used to register your website.
                                    </p>
                                </div>

                            </label>
                        </div>
                        <div class="faq">
                           
                            <label for="content2-checkbox2">
                                
                                <div class="faq-heading" onclick="faqanswer('faq-Answer2-two')">
                                    <span><img src="img/down arrow.png" alt="down aroow"
                                            class="arrow-icon"></span> Can I change the name of my Simplesite website?
                                </div>
                                <div class="faq-text" id="faq-Answer2-two">
                                    <p class="faq-paragraph">Yes, you can!</p>
                                    <p class="faq-text">If you have a basic free subscription, your website's address is
                                        based on your username, and you can modify it via the "Account" section of your
                                        website's editor by changing your "website name". Keep in mind that this will
                                        change your username as well.</p>

                                    <p class="faq-paragraph">If your website has a domain name, and you wish to change it,
                                        please contact our customer service team at customerservice@simplesite.com, and
                                        provide your website's address. We kindly ask you to contact us from the email
                                        address used to register your website.
                                    </p>
                                </div>

                            </label>
                        </div>
                        <div class="faq">
                            
                            <label for="content2-checkbox3">
                                
                                <div class="faq-heading" onclick="faqanswer('faq-Answer2-three')">
                                    <span><img src="img/down arrow.png" alt="down aroow"
                                            class="arrow-icon"></span> Can i change the size of my image?
                                </div>
                                <div class="faq-text" id="faq-Answer2-three">
                                    <p class="faq-paragraph">No, the size of your images is automatically set by the webpage
                                        template you chose.
                                    </p>
                                </div>
                            </label>
                        </div>
                        <div class="faq">
                            
                            <label for="content2-checkbox4">
                                
                                <div class="faq-heading" onclick="faqanswer('faq-Answer2-four')">
                                    <span><img src="img/down arrow.png" alt="down aroow"
                                            class="arrow-icon"></span> Can I use my SimpleSite website as commercial
                                    purposes? </div>
                                <div class="faq-text" id="faq-Answer2-four">
                                    <p class="faq-paragraph">
                                        You can use your SimpleSite for commercial purposes, as long as the content of
                                        your pages complies with our general Terms & Conditions. You can make use of our
                                        E-commerce subscription to sell products and services on your website. Please
                                        note we do not permit website owners to resell their website or domain names to
                                        others.
                                    </p>
                                </div>
                            </label>
                        </div>
                        <div class="faq">
                            
                            <label for="content2-checkbox5">
                                
                                <div class="faq-heading" onclick="faqanswer('faq-Answer2-five')" >
                                    <span><img src="img/down arrow.png" alt="down aroow"
                                            class="arrow-icon"></span> Can anyone see my Simplesite?</div>
                                <div class="faq-text" id="faq-Answer2-five">
                                    <p class="faq-paragraph">
                                        Yes. Please note there is NO password protection option for your website. This
                                        means that everyone who knows the URL of your website can visit it. We recommend
                                        you always consider carefully what you publish on your website. Avoid publishing
                                        anything online that is confidential, offensive or unsuitable for public
                                        viewing. Search engines such as Google and Bing will also be able to index your
                                        website.
                                    </p>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="customer-section-second">
        <div class="customer-section-head">
            <p class="customer-section-heading">CUSTOMER SERVICE</p>
        </div>
        <div class="customer-section-line"></div>
        <div class="customer-section-email">
            <p class="Email-paragraph">
                Email:
                <span>
                    <a href="mailto:customerservice@simplesite.com" class="href-none"><strong>customerservice@simplesite.com</strong></a>
                </span>
            </p>
            <p class="customer-section-email-paragraph">We try to respond to all requests within two business days.
                <br>Please describe your issue and include the name of your website to make it easier for us to help
                you.
            </p>
            <p class="customer-section-email-footer-section"><strong><span>SimpleSite.com</span></strong><br>
                <span>Toldbodgade 31, 3.tv</span><br>
                <span>1253 Copenhagen K.</span><br>
                <span>Denmark</span><br>
                VAT Reg No: <span>DK27 97 24 54</span><br>
                Owned by SimpleSite ApS VAT Reg No DK10079861
            </p>
        </div>
    </div>
    <?php include('footer/footer.php');?>
    
