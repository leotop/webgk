<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
    $APPLICATION->SetTitle("Процесс");?>
<h1 class="internal_h1"><?$APPLICATION->ShowTitle();?></h1>

<div id="head_tech">


    <div class="left_head_tech">
        <img src="/i/tech/head.png">
    </div>


    <div class="centr_head_tech">
        <img src="/i/tech/quest.png">
        <span>как мы делаем качественные проекты</span>
    </div>

    <div class="right_head_tech">
        <ul>
            <?$APPLICATION->IncludeFile(SITE_DIR."/include/tech/tech_list.php",Array(),Array("MODE"=>"html"));?>

        </ul>
        <?$APPLICATION->IncludeFile(SITE_DIR."/include/tech/tech_list_bottom.php",Array(),Array("MODE"=>"html"));?>


    </div>   

</div>

<div class="tech_center_text">
    <?$APPLICATION->IncludeFile(SITE_DIR."/include/tech/tech_middle.php",Array(),Array("MODE"=>"html"));?>  
</div>


<div class="tech_footer_text">
    <?  $arFilter = array ("IBLOCK_CODE" => "IBLOCK_TECH");
        $arSelectFields = Array("NAME","PREVIEW_TEXT","PREVIEW_PICTURE", "DETAIL_TEXT");
        $res = CIBlockElement::GetList( Array("SORT"=>"ASC"),$arFilter,false,array(),$arSelectFields);
        $a=1;
        while($ob = $res->Fetch()){
            //arshow($ob);   
        ?>

        <div class="block_tech_footer">

            <div class="tech_img">
                <?$tech_pic=CFile::GetPath($ob["PREVIEW_PICTURE"]);?>

                <img src="<?=$tech_pic?>">

            </div>

            <div class="tech_bottom_text">
                <span id="white_color"><?=$a."."?></span>
                <h3><?=$ob["NAME"]?></h3>


                <p id="white_color">
                    <?=$ob["PREVIEW_TEXT"]?> 
                </p>

                <?=$ob["DETAIL_TEXT"]?> 

            </div>

        </div>



        <?$a++;
            /*if ($a==2){
            break;
            }; */
    }?>

</div>

<div class="tech_center_text">
    <?$APPLICATION->IncludeFile(SITE_DIR."/include/tech/tech_footer1.php",Array(),Array("MODE"=>"html"));?>  
</div>

<div class="footer_tech_form">

    <p>              
        <?$APPLICATION->IncludeFile(SITE_DIR."/include/tech/tech_bottom.php",Array(),Array("MODE"=>"html"));?>  
    </p>
    
    <?\Bitrix\Main\Page\Frame::getInstance()->startDynamicWithID("techForm")?>
    <div class="tech_input_div">
        <form id="form3">
            <input placeholder="Название организации" id="tech_input" type="text" class="name_firm tech_input" name="firm_name">
            <input placeholder="Контактный телефон" id="tech_input" type="text" class="contact_phone tech_input" name="phone">
            <input placeholder="Контактное лицо" id="tech_input" type="text" class="contact_face tech_input" name="contact_face">
            <input placeholder="Электронная почта" id="tech_input" type="text" class="email_tech tech_input" name="mail">

            <div class="order_now order_tech">
                <a href="#" onclick="want_site_tech();" onclick="$(this).parent().submit();yaCounter26381235.reachGoal('ORDER2'); return true;">Отправить заявку</a>
            </div>   
        </form>
        <h5 id="form_tech">Пожалуйста заполните все поля!</h5>
    </div>
    <?\Bitrix\Main\Page\Frame::getInstance()->finishDynamicWithID("techForm","Форма обратной связи")?>

</div>


















<!--<h3>Как мы делаем качественные проекты</h3>
<p>
</p>
<ul>
	<li>Начать работать с нами</li>
	<li>Проектирование страниц и общей структуры сайта</li>
	<li>Разработка уникального дизайна и всех рабочих интерфейсов</li>
	<li>Реализация мощного функционала на платформе 1С-Битрикс</li>
	<li>Техническое сопровождение и обеспечение бесперебойной работы сайта</li>
</ul>
<p>
</p>
<p>
	 Рядом с вами на протяжении всего сотрудничества, от согласования договора - до передачи проекта в сопровождение всегда находится менеджер проекта. Он отвечает на любые Ваши вопросы, подсказывает наилучшие варианты решения, уточняет любые спорные моменты.
</p>
<p>
	 Но что самое главное - он представляет Ваши интересы и делает все необходимое для того, чтобы исключить любые недопонимания между Вами и командой наших разработчиков.
</p>
<p>
	 Зачем все это? Задача проста: Ваш проект должен стать качественным инструментом, соответствующим как Вашим требованиям, так и ожиданиям Ваших клиентов.
</p>
<h4>1. Проектирование страниц и общей структуры сайта</h4>
<p>
	 Проектирование - это создание основы сайта. И для любого сайта правильное проектирование определяет настоящее и будущее вашего проекта.Именно поэтому на этапе проектирования мы будем говорить больше всего. Нам важно получить от вас максимум информации, изучить и проанализировать все доступные материалы.Мы смотрим на ваш будущий сайт с позиции ваших клиентов,&nbsp;и думаем о том, что бы они&nbsp;хотели видеть на вашем сайте.Цель одна - на основании нашего многолетнего опыта и тонкостей вашего бизнеса сделать хороший проект.Формально&nbsp; результатом проектирования &nbsp;является&nbsp; и техническое задание. Но фактически результат - это четкая структура и полное понимание того, что посетитель должен увидеть на сайте и описание всех сценариев работы.<br>
 <a href="http://prototip.webgk.net/nippon//">Посмотреть прототип реального проекта</a><br>
 <a href="/upload/gkk.jpg">Скачать ТЗ</a><br>
 <br>
</p>
 <a href="">
<h4>2. Разработка уникального дизайна и всех рабочих интерфейсов<br>
 </h4>
<p>
	 Дизайн - это лицо сайта. Любой посетитель встречает сайт "по одежке". Мы никогда не занимаемся "раскрашиванием страниц", мы передаем необходимую атмосферу и настроение, расставляем акценты. Мы относимся с уважением к пожеланиям наших клиентов, но помним главный постулат:" Задача web-дизайна - создание качественного и удобного интерфейса".
</p>
<h4>3. Реализация мощного функционала на платформе 1С-Битрикс<br>
 </h4>
<p>
	 Современный сайт успешной компании — это не просто её представительство в сети Интернет. Это витрина, выставочный зал, сервис, работающий 24 часа в сутки 7 дней в неделю.<br>
 <br>
	 Мы разрабатываем сайты на базе «1С-Битрикс», позволяющей создать удобный бизнес-инструмент для любых целей: от сайта-визитки до крупного интернет-магазина или портала.<br>
 <br>
	 Обладая собственным штатом сертифицированных специалистов, мы с уверенностью можем заявить, что для нас нет нерешаемых задач.
</p>
<h4>4. Техническое сопровождение и обеспечение бесперебойной работы сайта<br>
 <br>
 <br>
 <br>
 </h4>
 <br> 
 </a> -->
 
 
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>