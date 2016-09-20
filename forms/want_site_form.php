<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Форма для заказа сайта");
?>

        <div id="want_site_form">
            <div class="want_site_form_inner">
                <h2 class="s_hidden">Хочу сайт</h2>
                <form class="site-form" action="/" id="form1">
                <input type="text" placeholder="Название фирмы"  name="firm_name" class="site1">
                <br>
                <input type="text" placeholder="Контактное лицо" name="contact_face" class="site2">
                <br>
                <input type="text" placeholder="Телефон" name="phone" class="site3">
                <br>
                <input type="text" placeholder="E-mail" name="mail" class="site4">
                
                <input type="hidden" name="aplicat_type" class="site5" value="<?=htmlspecialcharsbx($_GET["TYPE"])?>">
                <br>
                <input type="button" value="Отправить" onclick="want_site()">
                </form>
                <h3 class="accepted">Спасибо, ваша заявка принята!</h3>
            </div>
        </div>

 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>   