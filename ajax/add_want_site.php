<?require_once($_SERVER['DOCUMENT_ROOT']."/bitrix/modules/main/include/prolog_before.php");?>

<?   
    $block_id=CIBlock::GetList(
        array(""),
        array("CODE"=>"WANT_SITE")                 
    );
    $block = $block_id->Fetch();       

    
     $_POST["contact_face"]=iconv('UTF-8','CP1251',$_POST["contact_face"]);
     $_POST["firm_name"]=iconv('UTF-8','CP1251',$_POST["firm_name"]);
     $_POST["phone"]=iconv('UTF-8','CP1251',$_POST["phone"]);
     $_POST["mail"]=iconv('UTF-8','CP1251',$_POST["mail"]);
     $_POST["aplicat_type"]=iconv('UTF-8','CP1251',$_POST["aplicat_type"]);
     $message = $_POST["contact_face"].' '.$_POST["firm_name"].' '.$_POST["phone"].' '.$_POST["mail"].' '.$_POST["aplicat_type"]; 
    
    If ($_POST["firm_name"] && $_POST["contact_face"] && $_POST["phone"] && $_POST["mail"]) {
        $data=array("FIRM_NAME"=>$_POST["firm_name"],
        "SPHONE"=>$_POST["phone"],
        "SEMAIL"=>$_POST["mail"],
        "APPLICAT_TYPE"=>$_POST["aplicat_type"]
        );
        $el = new CIBlockElement;
        $arLoadProductArray = Array(
            //"MODIFIED_BY"    => $USER->GetID(), // ������� ������� ������� �������������
            "IBLOCK_SECTION_ID" => false,          // ������� ����� � ����� �������
            "IBLOCK_ID"      => $block["ID"],
            "PROPERTY_VALUES" => $data,
            "NAME"    =>      $_POST["contact_face"],           

        );  
        mail('me@webgk.ru','������ webgk.ru',$message);

       // arshow($arLoadProductArray);
        if($PRODUCT_ID = $el->Add($arLoadProductArray))
            echo "���� ������ ���������, �������� ������";
        else
            echo "Error: ".$el->LAST_ERROR;  
        
    }; 
?>