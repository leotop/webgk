<?
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
    $APPLICATION->SetTitle("����� ��� ������ ����������");
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
        <h2 class="w_hidden">���� ��������</h2>
        <div class="want_work_quote">
            ���� ����� ��������� �������,
            <br>
            � �������� ������.
            <br>
            ��� ��������� ����������, ������� ����� ������ ���� ������,
            <br>
            ��� ������ �������� ����� ����������.
            <br>
        </div>
        <div class="about_vacancy_index">
            � ��������� � ��������� ������ ����� �������� <a href="http://webgk.ru/about/#JOB_ABOUT" target="_blank">�����</a>
        </div>
        <form class="site-form" action="/" id="form2">
            <input type="text" placeholder="���������� ����" name="contact_face" class="work1">
            <br>
            <input type="text" placeholder="�������" name="phone" class="work2">
            <br>
            <input type="text" placeholder="E-mail" name="mail" class="work3">
            <br>
            <input type="button"  value="���������" onclick="want_work();" onclick="$(this).parent().submit();yaCounter26381235.reachGoal('ORDER11'); return true;">
        </form>
        
        <h3 class="accepted">�������, ���� ������ �������!</h3>
    </div>
        </div>

   <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?> 