@props([
    'title',
    'descriprion'
])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <meta name="description" content="{{ $descriprion }}">
    <meta property="og:url" content="https://<?=$_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']?>">
    <meta property="og:title" content="{{ $title }}">
    <meta property="og:description" content="{{ $descriprion }}">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset('storage/image/my_contacts.png') }}">
    <link type="image/x-icon" href="{{ asset('storage/image/favicon.ico') }}" rel="shortcut icon">
    <link type="image/png" sizes="16x16" rel="icon" href="{{ asset('storage/image/favicons/favicon-16x16.png') }}">
    <link type="image/png" sizes="32x32" rel="icon" href="{{ asset('storage/image/favicons/favicon-32x32.png') }}">
    <link type="image/png" sizes="64x64" rel="icon" href="{{ asset('storage/image/favicons/favicon-64x64.png') }}">
    <link type="image/png" sizes="120x120" rel="icon" href="{{ asset('storage/image/favicons/favicon-120x120.png') }}">
    <link type="image/png" sizes="128x128" rel="icon" href="{{ asset('storage/image/favicons/favicon-128x128.png') }}">
    <link type="image/png" sizes="256x256" rel="icon" href="{{ asset('storage/image/favicons/favicon-256x256.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.scss'])
</head>
<body>
    <header>
        <div class="container">
            <div class="header">
                <!-- <div class="header_logo">
                    <img src="images/logo.png">
                </div> -->
                <div class="header_nav">
                    <nav>
                        <ul class="header_nav__list">
                            <li class="header_item"><a href="/">Главная</a></li>
                            <li class="header_item"><a href="/#services">Услуги</a></li>
                            <li class="header_item"><a href="/#awards">Награды</a></li>
                            <li class="header_item"><a href="/#contacts">Контакты</a></li>
                            <li class="header_item"><a href="/#reviews">Отзывы</a></li>
                            <li class="header_item"><a href="diploms.php">Документы</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="header_phone">
                    <a class="header_phone__link" href="tel:89028561949"><img src="{{ asset('storage/image/icon_phone.png') }}" loading="lazy"><span>8 (902) 856-19-49</span></a>
                </div>
                <div class="header_messengers">
                    <a class="header_messengers__link" href="https://vk.com/id535356576"><img src="{{ asset('storage/image/icon_vk.png') }}" loading="lazy"></a>
                </div>
                <div class="header_btn">
                    <a class="header_btn__link open_modal">Записаться</a>
                </div>
                <div class="header_burger">
                    <img src="{{ asset('storage/image/icon_burger.png') }}">
                </div>
            </div>
        </div>
    </header>
    {{ $slot }}
    <footer>
        footer
        <footer>
        <div class="container">
            <div class="footer">
                <div class="footer_nav">
                    <nav>
                        <ul class="footer_nav__list">
                            <li><a href="/endocrine.php">Эндокринная хирургия</a></li>
                            <li><a href="/oncology.php">Онкология</a></li>
                            <li><a href="/treatment.php">Лечение</a></li>
                            <li><a href="/surgery.php">Общая хирургия</a></li>
                            <li><a href="/phlebology.php">Флебология</a></li>
                            <li><a href="/prophylaxis.php">Профилактика</a></li>
                        </ul>
                    </nav>
                    <div class="footer_nav__blocks">
                        <div class="metrics_item">
                            <a href="http://webmaster-kirov.ru/" target="_blank"><img src="{{ asset('storage/image/webmaster.jpg') }}" alt="" loading="lazy"></a>
                        </div>
                        <div class="metrics_item__small">
                            <!-- Top.Mail.Ru counter -->
                            <script type="text/javascript">
                            var _tmr = window._tmr || (window._tmr = []);
                            _tmr.push({id: "3283298", type: "pageView", start: (new Date()).getTime()});
                            (function (d, w, id) {
                            if (d.getElementById(id)) return;
                            var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
                            ts.src = "https://top-fwz1.mail.ru/js/code.js";
                            var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
                            if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
                            })(document, window, "tmr-code");
                            </script>
                            <noscript><div><img src="https://top-fwz1.mail.ru/counter?id=3283298;js=na" style="position:absolute;left:-9999px;" alt="Top.Mail.Ru" /></div></noscript>
                            <!-- /Top.Mail.Ru counter -->
                            <!-- Top.Mail.Ru logo -->
                            <a href="https://top-fwz1.mail.ru/jump?from=3283298">
                            <img src="https://top-fwz1.mail.ru/counter?id=3283298;t=456;l=1" height="31" width="88" alt="Top.Mail.Ru" style="border:0;" /></a>
                            <!-- /Top.Mail.Ru logo -->
                        </div>
                        <div class="metrics_item__small">
                            <!-- Top100 (Kraken) Widget -->
                            <span id="top100_widget"></span>
                            <!-- END Top100 (Kraken) Widget -->

                            <!-- Top100 (Kraken) Counter -->
                            <script>
                                (function (w, d, c) {
                                (w[c] = w[c] || []).push(function() {
                                    var options = {
                                        project: 7711944,
                                        element: 'top100_widget',
                                    };
                                    try {
                                        w.top100Counter = new top100(options);
                                    } catch(e) { }
                                });
                                var n = d.getElementsByTagName("script")[0],
                                s = d.createElement("script"),
                                f = function () { n.parentNode.insertBefore(s, n); };
                                s.type = "text/javascript";
                                s.async = true;
                                s.src =
                                (d.location.protocol == "https:" ? "https:" : "http:") +
                                "//st.top100.ru/top100/top100.js";

                                if (w.opera == "[object Opera]") {
                                d.addEventListener("DOMContentLoaded", f, false);
                            } else { f(); }
                            })(window, document, "_top100q");
                            </script>
                            <noscript>
                            <img src="//counter.rambler.ru/top100.cnt?pid=7711944" alt="Топ-100" />
                            </noscript>
                            <!-- END Top100 (Kraken) Counter -->
                        </div>
                    </div>
                    <div class="footer_metrics">
                        <div>
                            <!-- Google tag (gtag.js) -->
                            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-138206605-70"></script>
                            <script>
                            window.dataLayer = window.dataLayer || [];
                            function gtag(){dataLayer.push(arguments);}
                            gtag('js', new Date());

                            gtag('config', 'UA-138206605-70');
                            </script>
                        </div>
                        <div>
                            <!-- Yandex.Metrika counter -->
                            <script type="text/javascript" >
                            (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
                            m[i].l=1*new Date();
                            for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
                            k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
                            (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

                            ym(92263188, "init", {
                                    clickmap:true,
                                    trackLinks:true,
                                    accurateTrackBounce:true,
                                    webvisor:true,
                                    trackHash:true
                            });
                            </script>
                            <noscript><div><img src="https://mc.yandex.ru/watch/92263188" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
                            <!-- /Yandex.Metrika counter -->
                        </div>
                    </div>
                </div>
                <div class="footer_contacts">
                    <ul class="footer_contacts__list">
                        <li><a href="tel:89821820182"><img src="{{ asset('storage/image/icon_phone.png') }}" loading="lazy"><span>8 (982) 182-0-182</span></a></li>
                        <li><a><img src="{{ asset('storage/image/icon_item.png') }}" loading="lazy"><span>Ханты-Мансийск,
                            Патриса Лумумбы, 82</span></a></li>
                        <li><a href="mailto:simanovv@rambler.ru"><img src="{{ asset('storage/image/icon_envelope.png') }}" loading="lazy"><span>simanovv@rambler.ru</span></a></li>
                        <li><a class="footer_contacts__vk" href="https://vk.com/id535356576"><img src="{{ asset('storage/image/icon_vk.png') }}"></a></li>
                        <li><p><img src="{{ asset('storage/image/icon_time.png') }}" loading="lazy"><span>Пн-Сб 8:00-17:00</span></p></li>
                        <li><a class="footer_contacts__link open_modal">Записаться</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- <section class="metrics">
        <div class="container">
            <div class="metrics_content">
                <div class="metrics_item">
                    <a href="http://webmaster-kirov.ru/" target="_blank"><img src="images/webmaster.jpg" alt=""></a>
                </div>
            </div>
        </div>
    </section> -->

    <div class="modal">
        <div class="modal_content">
            <img class="modal_close" src="{{ asset('storage/image/icon_close.png') }}">
            <h2 class="modal_title">Записаться</h2>
            <p class="modal_underTitle">Оставьте Ваше имя и телефон и я свяжусь с вами в ближайшее время</p>
            <form method="POST" class="form_5">
                <input class="modal_project_name" type="hidden" name="project_name" value="Заявка с сайта владимир-симанов.рф с формы 'Записаться'">
                <input type="hidden" name="admin_email" value="site-simanov@rambler.ru">
                <input class="modal_form_subject" type="hidden" name="form_subject" value="Заявка с сайта владимир-симанов.рф с формы 'Записаться'">
                <div class="modal_content__block">
                    <p>Ваше имя</p>
                    <input type="text" name="fio" placeholder="Иван">
                </div>
                <div class="modal_content__block">
                    <p>Ваш телефон</p>
                    <input type="text"  name="tel" placeholder="+79999999999" required>
                </div>
                <div class="modal_content__block">
                    <p>Выбрать клинику</p>
                    <select name="klinika">
                        <option selected value="medrakurs_sever">«МедракурсСевер» (г.Ханты-Мансийск)</option>
                        <option value="medik_laf">«МедикЛаф» (г.Нягань)</option>
                    </select>
                </div>
                <p class="modal_text">Отправляя форму, вы даете свое согласие на обработку персональных данных</p>
                <button class="contacts_form__btn" type="submit">Записаться</button>
            </form>
            <div class="modal_alarm">
                Вы также можете записаться на приём в удобном для Вас Медицинском центре по следующим телефонам:
                <br>
                <span>«МедракурсСевер»</span>, ул. ПатрисаЛумумбы, д. 82. 
                <a href="tel:89821820182">8 (982) 182-0-182</a>
                или
                <span>«МедикЛаф»</span>, 3 мкр-он. Д. 23
                <a href="tel:89821377911">8 (982) 13-77-911</a>
            </div>
            <!-- <img class="modal_logo" src="images/logo.png"> -->
        </div>
    </div>

    <div class="modalreview">
        <div class="modalreview_content">
            <img class="modalreview_close" src="{{ asset('storage/image/icon_close.png') }}">
            <h2 class="modalreview_title">Оставить отзыв</h2>
            <p class="modalreview_underTitle">Оставьте Ваш отзыв и мы разместим его на сайте</p>
            <form method="POST" class="form_6">
                <input class="modalreview_project_name" type="hidden" name="project_name" value="Отзыв на сайте владимир-симанов.рф с формы 'Оставить отзыв'">
                <input type="hidden" name="admin_email" value="site-simanov@rambler.ru">
                <input class="modalreview_form_subject" type="hidden" name="form_subject" value="Отзыв на сайте владимир-симанов.рф с формы 'Оставить отзыв'">
                <div class="modalreview_content__block">
                    <p>Ваш отзыв</p>
                    <textarea type="text"  name="otzyv" placeholder=""></textarea>
                </div>
                <div class="modalreview_content__block">
                    <p>Ваше имя</p>
                    <input type="text" name="fio" placeholder="Иван">
                </div>
                <p class="modalreview_text">Отправляя форму, вы даете свое согласие на обработку персональных данных</p>
                <button class="contacts_form__btn" type="submit">Отправить</button>
            </form>
            <!-- <img class="modalreview_logo" src="images/logo.png"> -->
        </div>
    </div>

    <div class="mobil">
        <div class="mobil_content">
            <img class="mobil_close" src="{{ asset('storage/image/icon_close.png') }}">
            <h2 class="mobil_title">Меню</h2>
            <nav class="mobil_nav">
                <ul class="mobil_list">
                    <li>
                        <a href="/">Главная</a>
                    </li>
                    <li>
                        <a href="/#services">Услуги</a>
                    </li>
                    <li>
                        <a href="/#awards">Награды</a>
                    </li>
                    <li>
                        <a href="/#contacts">Контакты</a>
                    </li>
                    <li>
                        <a href="/#reviews">Отзывы</a>
                    </li>
                    <li>
                        <a href="diploms.php">Документы</a>
                    </li>
                </ul>
            </nav>
            <ul class="mobil_links">
                <li><a class="mobile_phone" href="tel:89523117744"><img src="{{ asset('storage/image/icon_phone.png') }}"><span>8 (952) 311 77-44</span></a></li>
                <li><a class="mobil_mail" href="mailto:simanovv@rambler.ru"><img src="{{ asset('storage/image/icon_envelope.png') }}"><span>simanovv@rambler.ru</span></a></li>
                <li><a><img src="{{ asset('storage/image/icon_item.png') }}"><span>Ханты-Мансийск, Патриса Лумумбы, 82</span></a></li>
            </ul>
            <!-- <img class="mobil_logo" src="images/logo.png"> -->
        </div>
    </div>
    @vite(['resources/js/app.js'])
</body>
</html>