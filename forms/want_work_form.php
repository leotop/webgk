<?
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
    $APPLICATION->SetTitle("Форма для нового сотрудника");
?>

<style>
   .fancybox-close {
    background: url("/i/close_fancy_arrow.png") no-repeat scroll 0 0 rgba(0, 0, 0, 0);
    cursor: pointer;
    height: 25px;
    position: absolute;
    right: -5%;
    top: 5%!important;
    width: 25px;
    z-index: 2147483647;
}
   </style>


<div id="want_work_form">
    <div class="want_site_form_inner">
        <h2 class="w_hidden">Хочу работать</h2>
        <div class="want_work_quote">
            Меня зовут Елатонцев Николай,
            <br>
            я директор студии.
            <br>
            Нам требуется сотрудники, которые будут делать чуть больше,
            <br>
            чем просто перечень своих требований.
            <br>
        </div>
        <div class="about_vacancy_index">
            О вакансиях и принципах работы можно почитать <a href="http://webgk.ru/about/#JOB_ABOUT" target="_blank">здесь</a>
        </div>
        <form class="site-form" action="/" id="form2">
            <input type="text" placeholder="Контактное лицо" name="contact_face" class="work1">
            <br>
            <input type="text" placeholder="Телефон" name="phone" class="work2">
            <br>
            <input type="text" placeholder="E-mail" name="mail" class="work3">
            <br>
            <input type="button"  value="Отправить" onclick="want_work();" onclick="$(this).parent().submit();yaCounter26381235.reachGoal('ORDER11'); return true;">
        </form>
        
        <h3 class="accepted">Спасибо, ваша заявка принята!</h3>
    </div>
        </div>

   <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?> 