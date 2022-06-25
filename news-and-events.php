<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="src/styles/news-and-eventsstyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wdth@75&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6819c2fba3.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    
    <script type="text/javascript">
        
    </script>
</head>
<body>
    <?php
        require_once 'header.php';
    ?>
    <!-- <div class="head-dropdown_menu">
        <div class="head-dropdown__menu__container">
            
        </div>
    </div> -->
    <div class="head-slider" style="background: linear-gradient(87.11deg, #24335B 15.4%, rgba(0, 67, 115, 0.84) 95.76%);">
        <div class="head-slider__container">
            <div class="head-slider__container_title">
                <h1 class="slider_title">News and Events</h1>
            </div>
            <div class="head-slider__logo">
                <img src="src/images/INTERPOL_Logo.svg" alt="" class="slider__logo">
            </div>
        </div>
    </div>
    <div class="main-slider__bottom_text">
        <div class="bottom-text__container">
            <p>The latest news and events from our global activities.</p>
        </div>
    </div>
    <div class="main">
        <div class="main-container">
            <div class="main-news_table">
                <div class="filter">
                    <button class="button button_type_news selected" data-filter="news">News</button>
                    <button class="button button_type_events" data-filter="events">Events</button>
                </div>
                <div id="news" class="table news_table news">
                    <div class="news-table__container">
                        
                        <div class="table-block news">
                            <div class="table-image"><img src="src/images/News-images/News-image-2.jpg"></div>
                            <div class="table-content">
                                <h1 class="title">INTERPOL supports New Zealand-led international operation into online child sexual abuse material</h1>
                                <p class="date">4 March 2022</p>
                            </div>
                        </div>
                        <div class="table-block news">
                            <div class="table-image"><img src="src/images/News-images/News-image-3.jpg"></div>
                            <div class="table-content">
                                <h1 class="title">Pharmaceutical crime: first INTERPOL-AFRIPOL front-line operation sees arrests and seizures across Africa</h1>
                                <p class="date">2 March 2022</p>
                            </div>
                        </div>
                        <div class="table-block news">
                            <div class="table-image"><img src="src/images/News-images/News-image-4.jpg"></div>
                            <div class="table-content">
                                <h1 class="title">South America: Two missing teens rescued in same week through INTERPOL coordination</h1>
                                <p class="date">28 January 2022</p>
                            </div>
                        </div>
                        <div class="table-block news">
                            <div class="table-image"><img src="src/images/News-images/News-image-5.png"></div>
                            <div class="table-content">
                                <h1 class="title">Asia: Thousands of firearms destroyed following counter-terrorism operation</h1>
                                <p class="date">20 December 2021</p>
                            </div>
                        </div>
                        <div class="table-block news">
                            <div class="table-image"><img src="src/images/News-images/News-image-1.png"></div>
                            <div class="table-content">
                                <h1 class="title">Depleting fish stocks fueling transnational crime</h1>
                                <p class="date">15 December 2021</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="events" class="table events_table events hide">
                    <div class="events-table__container">
                        <div class="table-block events">
                            <div class="table-image"><img src="src/images/Events-images/Events-image-1.jpg"></div>
                            <div class="table-content">
                                <h1 class="title">INTERPOL World 2019</h1>
                                <p class="date">2 July 2019</p>
                            </div>
                        </div>
                        <div class="table-block events">
                            <div class="table-image"><img src="src/images/Events-images/Events-image-2.jpg"></div>
                            <div class="table-content">
                                <h1 class="title">47th INTERPOL European Regional Conference</h1>
                                <p class="date">29 May 2019</p>
                            </div>
                        </div>
                        <div class="table-block events">
                            <div class="table-image"><img src="src/images/Events-images/Events-image-3.jpg"></div>
                            <div class="table-content">
                                <h1 class="title">International Law Enforcement Intellectual Property Crime Conference</h1>
                                <p class="date">22 October 2019</p>
                            </div>
                        </div>
                        <div class="table-block events">
                            <div class="table-image"><img src="src/images/Events-images/Events-image-4.jpg"></div>
                            <div class="table-content">
                                <h1 class="title">88th INTERPOL General Assembly</h1>
                                <p class="date">15 October 2019</p>
                            </div>
                        </div>
                        <div class="table-block events">
                            <div class="table-image"><img src="src/images/Events-images/Events-image-5.jpg"></div>
                            <div class="table-content">
                                <h1 class="title">86th INTERPOL General Assembly</h1>
                                <p class="date">27 September 2017</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="foot">
        <div class="foot-container">
            <div class="foot-container__block">
                <div class="foot-block__container_1">
                    <div class="Connect-with-us">
                        <h1>Related documents</h1>
                        <div class="Connect-with-us__block">
                            <div class="Connect-with-us__block_1">
                                <a href="#" class="link change-color"><p>Constitution Of The ICPO-INTERPOL</p></a>
                            </div>
                            <div class="Connect-with-us__block_2">
                                <p>729.2 KB</p>
                                <ul>
                                    <a href="#" class="link link_download change-color link_red">EN</a>
                                    <a href="#" class="link link_download change-color link_blue">FR</a>
                                    <a href="#" class="link link_download change-color link_yellow">ES</a>
                                    <a href="#" class="link link_download change-color link_green">AR</a>
                                </ul>
                            </div>
                        </div>
                        <div class="Connect-with-us__block">
                            <div class="Connect-with-us__block_1">
                                <a href="#" class="link change-color"><p>Annual Report</p></a>
                            </div>
                            <div class="Connect-with-us__block_2">
                                <p>3.14 MB</p>
                                <ul>
                                    <a href="#" class="link link_download change-color link_red">EN</a>
                                    <a href="#" class="link link_download change-color link_blue">FR</a>
                                    <a href="#" class="link link_download change-color link_yellow">ES</a>
                                    <a href="#" class="link link_download change-color link_green">AR</a>
                                </ul>
                            </div>
                        </div>
                        <div class="Connect-with-us__block">
                            <div class="Connect-with-us__block_1">
                                <a href="#" class="link change-color"><p>INTERPOL: an overview</p></a>
                            </div>
                            <div class="Connect-with-us__block_2">
                                <p>731.03 KB</p>
                                <ul>
                                    <a href="#" class="link link_download link_red">EN</a>
                                    <a href="#" class="link link_download link_blue">FR</a>
                                    <a href="#" class="link link_download link_yellow">ES</a>
                                    <a href="#" class="link link_download link_green">AR</a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="foot-container__block_4">
                <div class="foot-block__container_4">
                    <div class="foot-block_image" style="padding-bottom: 10px">
                        <img src="src/images/INTERPOL_Logo.svg">
                    </div>
                </div>
            </div>
            <div class="foot-container__block_2">
                <div class="foot-block__container_2">
                    <div class="foot-block">
                        <div class="foot-block_image">
                            <img src="src/images/INTERPOL_Logo.svg">
                        </div>
                    </div>
                    <div class="foot-block">
                        <h3>Connect with us</h3>
                        <a href="#" class="link foot_link">
                            Contact INTERPOL
                        </a>
                        <a href="#" class="link">
                            Careers
                        </a>
                        <a href="#" class="link">
                            Procurement
                        </a>
                        <a href="#" class="link">
                            About the CCF
                        </a>
                    </div>
                    <div class="foot-block">
                        <h3>Resources</h3>
                        <a href="#" class="link">
                            News and Events
                        </a>
                        <a href="#" class="link">
                            information for journalists
                        </a>
                        <a href="#" class="link">
                            Multimedia
                        </a>
                        <a href="#" class="link">
                            Documents
                        </a>
                    </div>
                    <div class="foot-block">
                        <h3>Policies</h3>
                        <a href="#" class="link">
                            Cookie policy
                        </a>
                        <a href="#" class="link">
                            Privacy policy
                        </a>
                        <a href="#" class="link">
                            Terms of use
                        </a>
                        <a href="#" class="link">
                            Name and logo
                        </a>
                    </div>
                    <div class="foot-block">
                        <h3>Social Media</h3>
                        <div class="foot-block__image_links">
                            <div class="foot-block__image_link">
                                <a href="#"><img src="src/images/Icons/FB_icon-icons.com_65484.svg" alt=""></a>
                            </div>
                            <div class="foot-block__image_link">
                                <a href="#"><img src="src/images/Icons/TWITTER_icon-icons.com_65486.svg" alt=""></a>
                            </div>
                            <div class="foot-block__image_link">
                                <a href="#"><img src="src/images/Icons/instagram_icon_125245.svg" alt=""></a>
                            </div>
                            <div class="foot-block__image_link">
                                <a href="#"><img src="src/images/Icons/LINKEDIN_icon-icons.com_65488.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="foot-container__block_3">
               <div class="foot-block__container_3">
                    <a href="#" class="link">
                        site map
                    </a>
                    <p>
                        INTERPOL 2022. ALL RIGHTS RESERVED
                    </p>
                </div> 
            </div>
        </div>
    </div>
    <script src="src/scripts/news-and-eventsScript.js"></script>
</body>
</html>