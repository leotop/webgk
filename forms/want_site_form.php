<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("����� ��� ������ �����");
?>

        <div id="want_site_form">
            <div class="want_site_form_inner">
                <h2 class="s_hidden">���� ����</h2>
                <form class="site-form" action="/" id="form1">
                <input type="text" placeholder="�������� �����"  name="firm_name" class="site1">
                <br>
                <input type="text" placeholder="���������� ����" name="contact_face" class="site2">
                <br>
                <input type="text" placeholder="�������" name="phone" class="site3">
                <br>
                <input type="text" placeholder="E-mail" name="mail" class="site4">
                
                <input type="hidden" name="aplicat_type" class="site5" value="<?=htmlspecialcharsbx($_GET["TYPE"])?>">
                <br>
                <input type="button" value="���������" onclick="want_site()">
                </form>
                <h3 class="accepted">�������, ���� ������ �������!</h3>
            </div>
        </div>

 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>   