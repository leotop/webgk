<!DOCTYPE html>
<html>
    <head>
        <title>WebGK</title>
        <link rel="shortcut icon" href="/i/favicon.ico" type="image/x-icon">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700&subset=latin,cyrillic-ext,cyrillic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:300,400,700&subset=latin,cyrillic-ext,latin-ext,cyrillic' rel='stylesheet' type='text/css'>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1251"/>
        <link href="/css/styles.css" type="text/css" rel="stylesheet" />

        <script type="text/javascript" src="/js/jquery-1.9.0.js"></script>
        <script type="text/javascript" src="/js/jquery-ui-1.10.0.custom.js"></script>

        <!--пользовательские скрипты-->
        <script type="text/javascript" src="/js/main.js"></script>

        <script>
            boxes_per_page = Math.floor($(window).width() / 320);

            function rrrr() {

                var inner_box_width = $('.portfolio_border_box').css('width');

                inner_box_width = inner_box_width.split('px')[0];

                $('.jjjjjjj').css('-webkit-transform', 'scale(0)').delay(1000).fadeOut(1);
                $('.jjjjjjj + div').css("-webkit-animation-name", "movement");

            };

            function eeeeeee() {

                $('.portfolio_border_box').each(function() {

                    if ($(this).index() % 2 != 0 && $(this).css('display') == 'none' && $(this).hasClass('jjjjjjj')) {
                        $(this).nextAll('div.portfolio_border_box:nth-child(2n+2)').each(function() {

                            $(this).css('left', parseInt($(this).css('left')) - $('.portfolio_border_box').width() + 'px');
                        })
                        $(this).removeClass('jjjjjjj');
                    }
                })
            };

            function eeeeeee1() {

                $('.portfolio_border_box').each(function() {

                    if ($(this).index() % 2 == 0 && $(this).css('display') == 'none' && $(this).hasClass('jjjjjjj')) {
                        $(this).nextAll('div.portfolio_border_box:nth-child(2n+1)').each(function() {

                            $(this).css('left', parseInt($(this).css('left')) - $('.portfolio_border_box').width() + 'px');
                        })
                        $(this).removeClass('jjjjjjj');
                    }
                })
            };

            function rrrr1() {

                $('.jjjjjjj').fadeIn(1).delay(1).css('-webkit-transform', 'scale(1)');
                $('.jjjjjjj + div').css("-webkit-animation-name", "movement1");
            };

            function portfolio_arrows() {
                $('.portfolio_navigation_arrow div').click(function() {

                    var available_space = parseInt($(window).width());
                    var left_position = $('.portfolio_inner').css('margin-left');
                    left_position = parseInt(left_position.split('px')[0]);

                    var margin_left = $('.portfolio_box_inner').css('margin-left');

                    margin_left = parseInt(margin_left.split('px')[0]);

                    console.log(available_space);
                    console.log(left_position);

                    var inner_box_width = $('.portfolio_border_box').css('width');

                    inner_box_width = inner_box_width.split('px')[0];

                    switch($(this).index()) {
                        case 0:
                            $(".portfolio_inner").animate({
                                marginLeft : left_position - inner_box_width * boxes_per_page + 'px'
                            }, 1500);
                            break;
                        case 1:
                            $(".portfolio_inner").animate({
                                marginLeft : left_position + inner_box_width * boxes_per_page + 'px'
                            }, 1500);
                            break;
                    }
                })
            }


            $(document).ready(function() {

                console.log($('.portfolio_border_box').index());

                var window_width = $(window).width();

                var available_space = $('.portfolio_wrapper').css('width');

                available_space = available_space.split('px')[0];

                var all_elements = $(".portfolio_inner > div").size();

                if ($(window).height() >= 935) {

                    var one_line_width = all_elements / 2;
                    $('.portfolio_inner').css('height', '500px');

                    var elements_for_counter = Math.ceil(one_line_width);

                } else {
                    var one_line_width = all_elements;
                    $('.portfolio_inner').css('height', '250px');
                }

                switch(boxes_per_page) {
                    case 6:
                        $('.portfolio_border_box').css('width', 320 + 'px');
                        break;
                    case 5:
                        $('.portfolio_border_box').css('width', window_width / 5 + 11 + 'px');
                        break;
                    case 4:
                        $('.portfolio_border_box').css('width', window_width / 4 + 11 + 'px');
                        break;
                    case 3:
                        $('.portfolio_border_box').css('width', window_width / 3 + 13 + 'px');
                        break;
                }

                var margin_left = $('.portfolio_box_inner').css('margin-left');

                margin_left = margin_left.split('px')[0];

                var inner_box_width = $('.portfolio_border_box').css('width');

                inner_box_width = inner_box_width.split('px')[0];

                $('.portfolio_inner').css('width', inner_box_width * one_line_width + one_line_width + 2 + 'px').css('margin-left', '-' + margin_left + 'px');

                if ($(window).height() >= 935) {
                    var margin_value = $('.portfolio_border_box').css('width');
                    margin_value = margin_value.split('px')[0];

                    var q = 0;

                    for (var i = 0; i <= all_elements; i++) {

                        if (i != 0 && i % 2 != 0) {
                            $('.portfolio_border_box').eq(i).css('left', (margin_value * q ) - margin_left + 'px').css('top', '260px');
                            q++;
                        } else {
                            $('.portfolio_border_box').eq(i).css('left', (margin_value * q) - margin_left + 'px');
                        }

                    }
                }

                setTimeout(rrrr, 2000);

                setInterval(eeeeeee, 500);

                setInterval(eeeeeee1, 500);

                portfolio_arrows();
            })
        </script>

    </head>
    <body class="inner_bg">

        <!--Верхнее меню-->
        <div id="top_menu">
            <div class="menu_container">
                <ul>
                    <li class="active">
                        <a href="">портфолио</a>
                    </li>
                    <li>
                        <a href="">услуги</a>
                    </li>
                    <li >
                        <a href="">мероприятия</a>
                    </li>
                    <li>
                        <a href="">1с-битрикс</a>
                    </li>
                    <li>
                        <a href="">контакты</a>
                    </li>
                    <li >
                        о компании
                    </li>
                    <li class="menu_last_cell">
                        (4872) 24-34-60
                    </li>
                </ul>
            </div>
        </div>
        <!--//Верхнее меню-->
        <div class="top_navigation">
            <a href="/">
            <div class="logo inner_logo">
                <span id="sp1" style="color:#fff"></span>
                <br>
                <span id="sp2" style="color:#fff"></span>
            </div> </a>

        </div>

        <div class="portfolio_wrapper">
            <div class="portfolio_inner">
                <div  class="portfolio_border_box jjjjjjj">
                    <div class="portfolio_box_inner">
                        <div><img src="/i/port_1.jpg" alt="" />
                        </div>
                        <p>
                            <a href="">Товары для животных Zooline</a>
                        </p>
                        <p>
                            интернет магазин
                        </p>
                        <h4>21.05.13</h4>

                    </div>
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                </div>
                <div class="portfolio_border_box ">
                    <div class="portfolio_box_inner">
                        <div><img src="/i/port_2.jpg" alt="" />
                        </div>
                        <p>
                            <a href="">Мастерская восточного массажа</a>
                        </p>
                        <p>
                            корпоративный сайт
                        </p>
                        <h4>21.05.13</h4>
                    </div>
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                </div>
                <div  class="portfolio_border_box ">
                    <div class="portfolio_box_inner">
                        <div><img src="/i/port_3.jpg" alt="" />
                        </div>
                        <p>
                            <a href="">Поставщик спец.техники Lonking</a>
                        </p>
                        <p>
                            корпоративный сайт
                        </p>
                        <h4>21.05.13</h4>
                    </div>
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                </div>
                <div class="portfolio_border_box ">
                    <div class="portfolio_box_inner">
                        <div><img src="/i/port_4.jpg" alt="" />
                        </div>
                        <p>
                            <a href="">Поставщик спец.техники Lonking</a>
                        </p>
                        <p>
                            интернет магазин
                        </p>
                        <h4>21.05.13</h4>
                    </div>
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                </div>
                <div class="portfolio_border_box ">
                    <div class="portfolio_box_inner">
                        <div><img src="/i/port_5.jpg" alt="" />
                        </div>
                        <p>
                            <a href="">Товары для детей Таня-Ваня</a>
                        </p>
                        <p>
                            корпоративный сайт
                        </p>
                        <h4>21.05.13</h4>
                    </div>
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                </div>
                <div class="portfolio_border_box jjjjjjj">
                    <div class="portfolio_box_inner">
                        <div><img src="/i/port_6.jpg" alt="" />
                        </div>
                        <p>
                            <a href="">Салон красоты Винтаж</a>
                        </p>
                        <p>
                            корпоративный сайт
                        </p>
                        <h4>21.05.13</h4>
                    </div>
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                </div>
                <div  class="portfolio_border_box ">
                    <div class="portfolio_box_inner">
                        <div><img src="/i/port_7.jpg" alt="" />
                        </div>
                        <p>
                            <a href="">Фирменный стиль студии WeGK</a>
                        </p>
                        <p>
                            графический дизайн
                        </p>
                        <h4>21.05.13</h4>
                    </div>
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                </div>
                <div class="portfolio_border_box ">
                    <div class="portfolio_box_inner">
                        <div><img src="/i/port_8.jpg" alt="" />
                        </div>
                        <p>
                            <a href="">Заглушка для сайта Тутанхамон</a>
                        </p>
                        <p>
                            промо-сайт
                        </p>
                        <h4>21.05.13</h4>
                    </div>
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                </div>
                <div class="portfolio_border_box jjjjjjj">
                    <div class="portfolio_box_inner">
                        <div><img src="/i/port_9.jpg" alt="" />
                        </div>
                        <p>
                            <a href="">Центр лизинговых решений</a>
                        </p>
                        <p>
                            корпоративный сайт
                        </p>
                        <h4>21.05.13</h4>
                    </div>
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                </div>
                <div class="portfolio_border_box">
                    <div class="portfolio_box_inner">
                        <div><img src="/i/port_10.jpg" alt="" />
                        </div>
                        <p>
                            <a href="">Продюсерский центр Имена про</a>
                        </p>
                        <p>
                            интернет магазин
                        </p>
                        <h4>21.05.13</h4>
                    </div>
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                </div>
                <div class="portfolio_border_box jjjjjjj">
                    <div class="portfolio_box_inner">
                        <div><img src="/i/port_11.jpg" alt="" />
                        </div>
                        <p>
                            <a href="">Коллегия юристов Фемида групп</a>
                        </p>
                        <p>
                            корпоративный сайт
                        </p>
                        <h4>21.05.13</h4>
                    </div>
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                </div>
                <div class="portfolio_border_box">
                    <div class="portfolio_box_inner">
                        <div><img src="/i/port_12.jpg" alt="" />
                        </div>
                        <p>
                            <a href="">Предприятие Иприм-энергия</a>
                        </p>
                        <p>
                            корпоративный сайт
                        </p>
                        <h4>21.05.13</h4>
                    </div>
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                </div>

                <!--Вторая часть-->

                <div class="portfolio_border_box">
                    <div class="portfolio_box_inner">
                        <div><img src="/i/port_1.jpg" alt="" />
                        </div>
                        <p>
                            <a href="">Товары для животных Zooline</a>
                        </p>
                        <p>
                            интернет магазин
                        </p>
                        <h4>21.05.13</h4>

                    </div>
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                </div>
                <div class="portfolio_border_box">
                    <div class="portfolio_box_inner">
                        <div><img src="/i/port_2.jpg" alt="" />
                        </div>
                        <p>
                            <a href="">Мастерская восточного массажа</a>
                        </p>
                        <p>
                            корпоративный сайт
                        </p>
                        <h4>21.05.13</h4>
                    </div>
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                </div>
                <div class="portfolio_border_box">
                    <div class="portfolio_box_inner">
                        <div><img src="/i/port_3.jpg" alt="" />
                        </div>
                        <p>
                            <a href="">Поставщик спец.техники Lonking</a>
                        </p>
                        <p>
                            корпоративный сайт
                        </p>
                        <h4>21.05.13</h4>
                    </div>
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                </div>
                <div class="portfolio_border_box ">
                    <div class="portfolio_box_inner">
                        <div><img src="/i/port_4.jpg" alt="" />
                        </div>
                        <p>
                            <a href="">Поставщик спец.техники Lonking</a>
                        </p>
                        <p>
                            интернет магазин
                        </p>
                        <h4>21.05.13</h4>
                    </div>
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                </div>
                <div class="portfolio_border_box">
                    <div class="portfolio_box_inner">
                        <div><img src="/i/port_5.jpg" alt="" />
                        </div>
                        <p>
                            <a href="">Товары для детей Таня-Ваня</a>
                        </p>
                        <p>
                            корпоративный сайт
                        </p>
                        <h4>21.05.13</h4>
                    </div>
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                </div>
                <div class="portfolio_border_box">
                    <div class="portfolio_box_inner">
                        <div><img src="/i/port_6.jpg" alt="" />
                        </div>
                        <p>
                            <a href="">Салон красоты Винтаж</a>
                        </p>
                        <p>
                            корпоративный сайт
                        </p>
                        <h4>21.05.13</h4>
                    </div>
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                </div>
                <div class="portfolio_border_box">
                    <div class="portfolio_box_inner">
                        <div><img src="/i/port_7.jpg" alt="" />
                        </div>
                        <p>
                            <a href="">Фирменный стиль студии WeGK</a>
                        </p>
                        <p>
                            графический дизайн
                        </p>
                        <h4>21.05.13</h4>
                    </div>
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                </div>
                <div class="portfolio_border_box">
                    <div class="portfolio_box_inner">
                        <div><img src="/i/port_8.jpg" alt="" />
                        </div>
                        <p>
                            <a href="">Заглушка для сайта Тутанхамон</a>
                        </p>
                        <p>
                            промо-сайт
                        </p>
                        <h4>21.05.13</h4>
                    </div>
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                </div>
                <div class="portfolio_border_box">
                    <div class="portfolio_box_inner">
                        <div><img src="/i/port_9.jpg" alt="" />
                        </div>
                        <p>
                            <a href="">Центр лизинговых решений</a>
                        </p>
                        <p>
                            корпоративный сайт
                        </p>
                        <h4>21.05.13</h4>
                    </div>
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                </div>
                <div class="portfolio_border_box">
                    <div class="portfolio_box_inner">
                        <div><img src="/i/port_10.jpg" alt="" />
                        </div>
                        <p>
                            <a href="">Продюсерский центр Имена про</a>
                        </p>
                        <p>
                            интернет магазин
                        </p>
                        <h4>21.05.13</h4>
                    </div>
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                </div>
                <div class="portfolio_border_box">
                    <div class="portfolio_box_inner">
                        <div><img src="/i/port_11.jpg" alt="" />
                        </div>
                        <p>
                            <a href="">Коллегия юристов Фемида групп</a>
                        </p>
                        <p>
                            корпоративный сайт
                        </p>
                        <h4>21.05.13</h4>
                    </div>
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                </div>
                <div class="portfolio_border_box">
                    <div class="portfolio_box_inner">
                        <div><img src="/i/port_12.jpg" alt="" />
                        </div>
                        <p>
                            <a href="">Предприятие Иприм-энергия</a>
                        </p>
                        <p>
                            корпоративный сайт
                        </p>
                        <h4>21.05.13</h4>
                    </div>
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                    <img src="/i/portfolio_angle.png">
                </div>

            </div>

        </div>

        <div class="portfolio_navigation_arrow">
            <div></div>
            <div></div>
        </div>
        <!--Нижнее меню-->
        <div id="foot_menu">
            <div class="menu_container">
                <ul>

                    <li>
                        2008-<?=date("Y"); ?>
                        веб-студия webgk
                    </li>

                    <li class="menu_last_cell">
                        г. Тула, ул. Болдина 69, 2 этаж
                    </li>

                </ul>
            </div>
        </div>
        <!--//Нижнее меню-->
    </body>
</html>