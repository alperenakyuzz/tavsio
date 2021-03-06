<div class="topbar transparent stick">
    <div class="logo">
        <a title="" href="{{ route('index') }}"><img src="{{ asset('frontend/images/logo_main.png') }}" alt="Tavsio Logo" width="120px;"></a>
        <!--<a class="menu-small blue-bg" href="#" title="">
            <i class="fa fa-bars fa-2x ml-4"></i>
        </a>-->
    </div>
    <div class="top-area">
        <div class="main-menu">
            <span>
                <a href="#" title="Help" data-ripple=""> <i class="fa fa-question"></i></a>
            </span>
            <div class="dropdowns helps">
                <span>Quick Help</span>
                <form method="post">
                    <input type="text" placeholder="How can we help you?">
                </form>
                <span>Help with this page</span>
                <ul class="help-drop">
                    <li><a href="forum.html" title=""><i class="fa fa-book"></i>Community & Forum</a></li>
                    <li><a href="faq.html" title=""><i class="fa fa-question-circle-o"></i>FAQs</a></li>
                    <li><a href="career.html" title=""><i class="fa fa-building-o"></i>Carrers</a></li>
                    <li><a href="privacy.html" title=""><i class="fa fa-pencil-square-o"></i>Terms & Policy</a></li>
                    <li><a href="#" title=""><i class="fa fa-map-marker"></i>Contact</a></li>
                    <li><a href="#" title=""><i class="fa fa-exclamation-triangle"></i>Report a Problem</a></li>
                </ul>
            </div>
        </div>

        <ul class="header-links-area">
            <li class="new-button-li"><a href="" title="Yeni Gönderi"><i class="fa fa-plus-circle color-red"></i></a></li>
        </ul>

        <div class="top-search">
            <form method="post" class="">
                <input type="text" placeholder="Ürün, İnceleme, #etiket vb. arayınız..">
                <button data-ripple><i class="fa fa-search"></i></button>
            </form>
        </div>
        <ul class="header-links-area">
            <li><a href="{{ url('/') }}" title="Home"><i class="fa fa-home"></i></a></li>
        </ul>
        <div class="page-name">
            <span>@yield('title')</span>
        </div>
        <div class="header-links-ext">
            <span><a href="{{ url('forum') }}"><i class="fa fa-lightbulb-o"></i> Tavsiye İste</a></span>
        </div>
        <div class="user-img">
            @if(Auth::check())
                <h5>{{ Auth::user()->username }}</h5>
                <img src="{{ asset('uploads/profiles/'.Auth::user()->username) }}" alt="">
                <span class="status f-online"></span>
                <div class="user-setting">
                    <ul class="log-out">
                        <li><a href="{{ url('hesabim') }}" title=""><i class="ti-user"></i> Profili görüntüle</a></li>
                        <li><a href="{{ url('hesabim/duzenle') }}" title=""><i class="ti-pencil-alt"></i>Profili düzenle</a></li>
                        <li><a href="{{ url('hesabim/ayarlar') }}" title=""><i class="ti-settings"></i>Hesap ayarları</a></li>
                        <li><a href="{{ route('logout') }}" title=""><i class="ti-power-off"></i>Çıkış yap</a></li>
                    </ul>
                </div>
            @else
                <h5><a href="{{ route('login') }}">Oturum Aç</a></h5>
            @endif
        </div>
    </div>
    <nav>
        <ul class="nav-list">
            <li><a class="" href="#" title=""><i class="fa fa-home"></i> Home Pages</a>
                <ul>
                    <li><a href="index.html" title="">Pitnik Default</a></li>
                    <li><a href="company-landing.html" title="">Company Landing</a></li>
                    <li><a href="pitrest.html" title="">Pitrest</a></li>
                    <li><a href="redpit.html" title="">Redpit</a></li>
                    <li><a href="redpit-category.html" title="">Redpit Category</a></li>
                    <li><a href="soundnik.html" title="">Soundnik</a></li>
                    <li><a href="soundnik-detail.html" title="">Soundnik Single</a></li>
                    <li><a href="career.html" title="">Pitjob</a></li>
                    <li><a href="shop.html" title="">Shop</a></li>
                    <li><a href="classified.html" title="">Classified</a></li>
                    <li><a href="pitpoint.html" title="">PitPoint</a></li>
                    <li><a href="pittube.html" title="">Pittube</a></li>
                    <li><a href="chat-messenger.html" title="">Messenger</a></li>
                </ul>
            </li>
            <li><a class="" href="#" title=""><i class="fa fa-film"></i> Pittube</a>
                <ul>
                    <li><a href="pittube.html" title="">Pittube</a></li>
                    <li><a href="pittube-detail.html" title="">Pittube single</a></li>
                    <li><a href="pittube-category.html" title="">Pittube Category</a></li>
                    <li><a href="pittube-channel.html" title="">Pittube Channel</a></li>
                    <li><a href="pittube-search-result.html" title="">Pittube Search Result</a></li>
                </ul>
            </li>
            <li><a class="" href="#" title=""><i class="fa fa-female"></i> PitPoint</a>
                <ul>
                    <li><a href="pitpoint.html" title="">PitPoint</a></li>
                    <li><a href="pitpoint-detail.html" title="">Pitpoint Detail</a></li>
                    <li><a href="pitpoint-list.html" title="">Pitpoint List style</a></li>
                    <li><a href="pitpoint-without-baner.html" title="">Pitpoint without Banner</a></li>
                    <li><a href="pitpoint-search-result.html" title="">Pitpoint Search</a></li>
                </ul>
            </li>
            <li><a class="" href="#" title=""><i class="fa fa-graduation-cap"></i> Pitjob</a>
                <ul>
                    <li><a href="career.html" title="">Pitjob</a></li>
                    <li><a href="career-detail.html" title="">Pitjob Detail</a></li>
                    <li><a href="career-search-result.html" title="">Job seach page</a></li>
                    <li><a href="social-post-detail.html" title="">Social Post Detail</a></li>
                </ul>
            </li>
            <li><a class="" href="#" title=""><i class="fa fa-repeat"></i> Timeline</a>
                <ul>
                    <li><a href="timeline.html" title="">Timeline</a></li>
                    <li><a href="timeline-photos.html" title="">Timeline Photos</a></li>
                    <li><a href="timeline-videos.html" title="">Timeline Videos</a></li>
                    <li><a href="timeline-groups.html" title="">Timeline Groups</a></li>
                    <li><a href="timeline-friends.html" title="">Timeline Friends</a></li>
                    <li><a href="timeline-friends2.html" title="">Timeline Friends-2</a></li>
                    <li><a href="about.html" title="">Timeline About</a></li>
                    <li><a href="blog-posts.html" title="">Timeline Blog</a></li>
                    <li><a href="friends-birthday.html" title="">Friends' Birthday</a></li>
                    <li><a href="newsfeed.html" title="">Newsfeed</a></li>
                    <li><a href="search-result.html" title="">Search Result</a></li>
                </ul>
            </li>
            <li><a class="" href="#" title=""><i class="fa fa-heart"></i> Favourit Page</a>
                <ul>
                    <li><a href="fav-page.html" title="">Favourit Page</a></li>
                    <li><a href="fav-favers.html" title="">Fav Page Likers</a></li>
                    <li><a href="fav-events.html" title="">Fav Events</a></li>
                    <li><a href="fav-event-invitations.html" title="">Fav Event Invitations</a></li>
                    <li><a href="event-calendar.html" title="">Event Calendar</a></li>
                    <li><a href="fav-page-create.html" title="">Create New Page</a></li>
                    <li><a href="price-plans.html" title="">Price Plan</a></li>
                </ul>
            </li>
            <li><a class="" href="#" title=""><i class="fa fa-forumbee"></i> Forum</a>
                <ul>
                    <li><a href="forum.html" title="">Forum</a></li>
                    <li><a href="forum-create-topic.html" title="">Forum Create Topic</a></li>
                    <li><a href="forum-open-topic.html" title="">Forum Open Topic</a></li>
                    <li><a href="forums-category.html" title="">Forum Category</a></li>
                </ul>
            </li>
            <li><a class="" href="#" title=""><i class="fa fa-star-o"></i> Featured</a>
                <ul>
                    <li><a href="chat-messenger.html" title="">Messenger (Chatting)</a></li>
                    <li><a href="notifications.html" title="">Notifications</a></li>
                    <li><a href="badges.html" title="">Badges</a></li>
                    <li><a href="faq.html" title="">Faq's</a></li>
                    <li><a href="contribution.html" title="">Contriburion Page</a></li>
                    <li><a href="manage-page.html" title="">Manage Page</a></li>
                    <li><a href="weather-forecast.html" title="">weather-forecast</a></li>
                    <li><a href="statistics.html" title="">Statics/Analytics</a></li>
                    <li><a href="shop-cart.html" title="">Shop Cart</a></li>
                </ul>
            </li>
            <li><a class="" href="#" title=""><i class="fa fa-gears"></i> Account Setting</a>
                <ul>
                    <li><a href="setting.html" title="">Setting</a></li>
                    <li><a href="privacy.html" title="">Privacy</a></li>
                    <li><a href="support-and-help.html" title="">Support & Help</a></li>
                    <li><a href="support-and-help-detail.html" title="">Support Detail</a></li>
                    <li><a href="support-and-help-search-result.html" title="">Support Search</a></li>
                </ul>
            </li>
            <li><a class="" href="#" title=""><i class="fa fa-lock"></i> Authentication</a>
                <ul>
                    <li><a href="login.html" title="">Login Page</a></li>
                    <li><a href="register.html" title="">Register Page</a></li>
                    <li><a href="logout.html" title="">Logout Page</a></li>
                    <li><a href="coming-soon.html" title="">Coming Soon</a></li>
                    <li><a href="error-404.html" title="">Error 404</a></li>
                    <li><a href="error-404-2.html" title="">Error 404-2</a></li>
                    <li><a href="error-500.html" title="">Error 500</a></li>
                </ul>
            </li>
            <li><a class="" href="#" title=""><i class="fa fa-wrench"></i> Tools</a>
                <ul>
                    <li><a href="typography.html" title="">Typography</a></li>
                    <li><a href="popup-modals.html" title="">Popups/Modals</a></li>
                    <li><a href="post-versions.html" title="">Post Versions</a></li>
                    <li><a href="sliders.html" title="">Sliders / Carousel</a></li>
                    <li><a href="google-map.html" title="">Google Maps</a></li>
                    <li><a href="widgets.html" title="">Widgets</a></li>
                </ul>
            </li>
        </ul>

    </nav><!-- nav menu -->
</div><!-- topbar -->

