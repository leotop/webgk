<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
    $APPLICATION->SetTitle("�������");?>
<h1 class="internal_h1"><?$APPLICATION->ShowTitle();?></h1>

<div id="head_tech">


    <div class="left_head_tech">
        <img src="/i/tech/head.png">
    </div>


    <div class="centr_head_tech">
        <img src="/i/tech/quest.png">
        <span>��� �� ������ ������������ �������</span>
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
            <input placeholder="�������� �����������" id="tech_input" type="text" class="name_firm tech_input" name="firm_name">
            <input placeholder="���������� �������" id="tech_input" type="text" class="contact_phone tech_input" name="phone">
            <input placeholder="���������� ����" id="tech_input" type="text" class="contact_face tech_input" name="contact_face">
            <input placeholder="����������� �����" id="tech_input" type="text" class="email_tech tech_input" name="mail">

            <div class="order_now order_tech">
                <a href="#" onclick="want_site_tech();" onclick="$(this).parent().submit();yaCounter26381235.reachGoal('ORDER2'); return true;">��������� ������</a>
            </div>   
        </form>
        <h5 id="form_tech">���������� ��������� ��� ����!</h5>
    </div>
    <?\Bitrix\Main\Page\Frame::getInstance()->finishDynamicWithID("techForm","����� �������� �����")?>

</div>


















<!--<h3>��� �� ������ ������������ �������</h3>
<p>
</p>
<ul>
	<li>������ �������� � ����</li>
	<li>�������������� ������� � ����� ��������� �����</li>
	<li>���������� ����������� ������� � ���� ������� �����������</li>
	<li>���������� ������� ����������� �� ��������� 1�-�������</li>
	<li>����������� ������������� � ����������� ������������� ������ �����</li>
</ul>
<p>
</p>
<p>
	 ����� � ���� �� ���������� ����� ��������������, �� ������������ �������� - �� �������� ������� � ������������� ������ ��������� �������� �������. �� �������� �� ����� ���� �������, ������������ ��������� �������� �������, �������� ����� ������� �������.
</p>
<p>
	 �� ��� ����� ������� - �� ������������ ���� �������� � ������ ��� ����������� ��� ����, ����� ��������� ����� ������������� ����� ���� � �������� ����� �������������.
</p>
<p>
	 ����� ��� ���? ������ ������: ��� ������ ������ ����� ������������ ������������, ��������������� ��� ����� �����������, ��� � ��������� ����� ��������.
</p>
<h4>1. �������������� ������� � ����� ��������� �����</h4>
<p>
	 �������������� - ��� �������� ������ �����. � ��� ������ ����� ���������� �������������� ���������� ��������� � ������� ������ �������.������ ������� �� ����� �������������� �� ����� �������� ������ �����. ��� ����� �������� �� ��� �������� ����������, ������� � ���������������� ��� ��������� ���������.�� ������� �� ��� ������� ���� � ������� ����� ��������,&nbsp;� ������ � ���, ��� �� ���&nbsp;������ ������ �� ����� �����.���� ���� - �� ��������� ������ ������������ ����� � ��������� ������ ������� ������� ������� ������.���������&nbsp; ����������� �������������� &nbsp;��������&nbsp; � ����������� �������. �� ���������� ��������� - ��� ������ ��������� � ������ ��������� ����, ��� ���������� ������ ������� �� ����� � �������� ���� ��������� ������.<br>
 <a href="http://prototip.webgk.net/nippon//">���������� �������� ��������� �������</a><br>
 <a href="/upload/gkk.jpg">������� ��</a><br>
 <br>
</p>
 <a href="">
<h4>2. ���������� ����������� ������� � ���� ������� �����������<br>
 </h4>
<p>
	 ������ - ��� ���� �����. ����� ���������� ��������� ���� "�� ������". �� ������� �� ���������� "�������������� �������", �� �������� ����������� ��������� � ����������, ����������� �������. �� ��������� � ��������� � ���������� ����� ��������, �� ������ ������� ��������:" ������ web-������� - �������� ������������� � �������� ����������".
</p>
<h4>3. ���������� ������� ����������� �� ��������� 1�-�������<br>
 </h4>
<p>
	 ����������� ���� �������� �������� � ��� �� ������ � ����������������� � ���� ��������. ��� �������, ����������� ���, ������, ���������� 24 ���� � ����� 7 ���� � ������.<br>
 <br>
	 �� ������������� ����� �� ���� �1�-�������, ����������� ������� ������� ������-���������� ��� ����� �����: �� �����-������� �� �������� ��������-�������� ��� �������.<br>
 <br>
	 ������� ����������� ������ ����������������� ������������, �� � ������������ ����� �������, ��� ��� ��� ��� ���������� �����.
</p>
<h4>4. ����������� ������������� � ����������� ������������� ������ �����<br>
 <br>
 <br>
 <br>
 </h4>
 <br> 
 </a> -->
 
 
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>