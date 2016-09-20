<?include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');
$sapi_type = php_sapi_name();
if ($sapi_type=="cgi") 
   header("Status: 404");
else 
   header("HTTP/1.1 404 Not Found");
@define("ERROR_404","Y");

//Тут уже подключение верней части шаблона и присваивание заголовка
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("404 - HTTP not found");
//Код страницы?>
<div id="404_error" style=" width: 100%;
      height:100%;
      background-image: url(/i/404_webgk.png);
      background-repeat: no-repeat;
      background-position: center center;
      text-align:center;
      position: relative;
      ">       
    <a href="/"><div style="position:absolute;
    background-image: url(/i/404_main.png);
      background-repeat: no-repeat;
      background-position: center center;  
      width: 150px;
      height: 90px;
      margin: auto;
      left: 0;
      right: 0;
      bottom: 100px;
                
    
    "></div></a>
    
      </div>