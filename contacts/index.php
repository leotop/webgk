<?
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
    $APPLICATION->SetTitle("��������");


?><div class="tab_blocks_contact">
	<h1 class="internal_h1"><?$APPLICATION->ShowTitle(false);?></h1>
	<div class="data_contact">
		<div class="contact_adress line_contact">
 <span class="left_sp">�����:</span><span class="right_sp">
			<?//$APPLICATION->IncludeFile(SITE_DIR."/include/address.php",Array(),Array("MODE"=>"html"));?> <?$city = get_city_by_ip($_SERVER["REMOTE_ADDR"]);?> <?$city = iconv("UTF-8","CP1251",$city)?> <?if($city=="������" or $city=="�����-���������"){?> �. ������, �. ������, ��������������� ���., 29, ���. 4 <?}else{?> �. ����, ��. ������������ 38�, 3 ���� <?}?> </span><br>
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
 <span class="left_sp">�������:</span><span class="right_sp">
				<?$city = get_city_by_ip($_SERVER["REMOTE_ADDR"]);?> <?$city = iconv("UTF-8","CP1251",$city)?> <?if($city=="������" or $city=="�����-���������"){?> <strong>(495) 215-20-29</strong>
				<?}else{?> <strong> (4872) 52-41-33</strong>
				<?}?> </span>
			</div>
 <br>
			<div class="line_contact">
 <span class="left_sp">�����:</span><span class="right_sp"><a href="mailto:GK@WEBGK.RU">GK@WEBGK.RU</a></span>
			</div>
 <br>
			<div class="line_contact">
 <span class="left_sp">����� ������:</span><span class="right_sp">
				<?$city = get_city_by_ip($_SERVER["REMOTE_ADDR"]);?> <?$city = iconv("UTF-8","CP1251",$city)?> <?if($city=="������" or $city=="�����-���������"){?> <strong>(495) 215-16-53</strong>
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
 <span class="left_sp">���������:<br>
			 ��� ������������ ���������� ����������<br>
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
	 �����: �. ����, ��. �������, 69, 2 ����
</p>
<p>
	 �������: (4872) 24-74-60<br>
	 ����� ������: (4872) 25-08-66<br>
	 ICQ: 266-148-429
</p>
<p>
	 E-mail: gk@webgk.ru<br>
	 ����: www.webgk.ru
</p>
<p>
	 ���������:��� ������������ ���������� ����������<br>
	 ��� - 7106062899<br>
	 ���- 710601001<br>
	 ���� - 1047100783245<br>
	 �/� - 40702810115000000980<br>
	 ������ ��� ���� ��� � �. ���� �.����<br>
	 �/� - 30101810900000000794<br>
	 ��� - 047003794
</p>--><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>