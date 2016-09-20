<?
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
    $APPLICATION->SetTitle("Контакты");


?><div class="tab_blocks_contact">
	<h1 class="internal_h1"><?$APPLICATION->ShowTitle(false);?></h1>
	<div class="data_contact">
		<div class="contact_adress line_contact">
 <span class="left_sp">Адрес:</span><span class="right_sp">
			<?//$APPLICATION->IncludeFile(SITE_DIR."/include/address.php",Array(),Array("MODE"=>"html"));?> <?$city = get_city_by_ip($_SERVER["REMOTE_ADDR"]);?> <?$city = iconv("UTF-8","CP1251",$city)?> <?if($city=="Москва" or $city=="Санкт-Петербург"){?> г. Москва, г. Москва, Серебряническая наб., 29, стр. 4 <?}else{?> г. Тула, ул. Демонстрации 38В, 3 этаж <?}?> </span><br>
		</div>
		<div class="left_data_contact">
			 <? /*$contact=CIBlockElement::GetList(
                array("SORT"=>"ASC"),
                array("IBLOCK_CODE"=>"WEBGK_CONTACTS"),
                false,
                false,
                Array("NAME", 'PREVIEW_TEXT')
                );
                while($ob = $contact->Fetch())
                {            
                //arshow($ob);

                ?>
                <div class="line_contact"><span class="left_sp"><?=$ob["NAME"]?>:</span><span class="right_sp"><?=$ob["PREVIEW_TEXT"]?></span></div><br>
            <?} */?>
			<div class="line_contact">
 <span class="left_sp">Телефон:</span><span class="right_sp">
				<?$city = get_city_by_ip($_SERVER["REMOTE_ADDR"]);?> <?$city = iconv("UTF-8","CP1251",$city)?> <?if($city=="Москва" or $city=="Санкт-Петербург"){?> <strong>(495) 215-20-29</strong>
				<?}else{?> <strong> (4872) 52-41-33</strong>
				<?}?> </span>
			</div>
 <br>
			<div class="line_contact">
 <span class="left_sp">Почта:</span><span class="right_sp"><a href="mailto:GK@WEBGK.RU">GK@WEBGK.RU</a></span>
			</div>
 <br>
			<div class="line_contact">
 <span class="left_sp">Отдел продаж:</span><span class="right_sp">
				<?$city = get_city_by_ip($_SERVER["REMOTE_ADDR"]);?> <?$city = iconv("UTF-8","CP1251",$city)?> <?if($city=="Москва" or $city=="Санкт-Петербург"){?> <strong>(495) 215-16-53</strong>
				<?}else{?> <strong>(4872) 52-41-33</strong>
				<?}?> </span>
			</div>
 <br>
			<div class="line_contact">
 <span class="left_sp">ICQ:</span><span class="right_sp">266-148-429</span>
			</div>
 <br>
			<div class="line_contact">
 <span class="left_sp">Skype:</span><span class="right_sp">webgk.ru</span>
			</div>
 <br>
		</div>
		<div class="right_data_contact">
 <span class="left_sp">Реквизиты:<br>
			 ООО «Лаборатория разработки приложений»<br>
 <span>
			<p>
				 <?$APPLICATION->IncludeFile(SITE_DIR."/include/rekvezity.php",Array(),Array("MODE"=>"html"));?>
			</p>
 </span></span>
		</div>
	</div>
	<div class="map_contact" id="map_contact">
	</div>
</div>
<!--<p>
	 Адрес: г. Тула, ул. Болдина, 69, 2 этаж
</p>
<p>
	 Телефон: (4872) 24-74-60<br>
	 Отдел продаж: (4872) 25-08-66<br>
	 ICQ: 266-148-429
</p>
<p>
	 E-mail: gk@webgk.ru<br>
	 Сайт: www.webgk.ru
</p>
<p>
	 Реквизиты:ООО «Лаборатория разработки приложений»<br>
	 ИНН - 7106062899<br>
	 КПП- 710601001<br>
	 ОГРН - 1047100783245<br>
	 Р/с - 40702810115000000980<br>
	 Филиал ОАО Банк ВТБ в г. Туле г.Тула<br>
	 к/с - 30101810900000000794<br>
	 БИК - 047003794
</p>--><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>