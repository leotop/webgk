<?require_once($_SERVER['DOCUMENT_ROOT']."/bitrix/modules/main/include/prolog_before.php");?>
<?   
    $block_id=CIBlock::GetList(
        array(""),
        array("CODE"=>"WANT_WORK")                 
    );
    $block = $block_id->Fetch();       

    
     $_POST["contact_face"]=iconv('UTF-8','CP1251',$_POST["contact_face"]);
     $_POST["phone"]=iconv('UTF-8','CP1251',$_POST["phone"]);
     $_POST["mail"]=iconv('UTF-8','CP1251',$_POST["mail"]);
       
    
    If ($_POST["contact_face"] && $_POST["phone"] && $_POST["mail"]) {
        $data=array("WPHONE"=>$_POST["phone"],
        "WMAIL"=>$_POST["mail"],
        );
        $el = new CIBlockElement;
        $arLoadProductArray = Array(
            //"MODIFIED_BY"    => $USER->GetID(), // элемент изменен текущим пользователем
            "IBLOCK_SECTION_ID" => false,          // элемент лежит в корне раздела
            "IBLOCK_ID"      => $block["ID"],
            "PROPERTY_VALUES" => $data,
            "NAME"    =>      $_POST["contact_face"],           

        );  

        if($PRODUCT_ID = $el->Add($arLoadProductArray))
            echo "Ваша заявка добавлена, ожидайте звонка";
        else
            echo "Error: ".$el->LAST_ERROR;  
        
    }; 
?>