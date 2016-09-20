<?require_once($_SERVER['DOCUMENT_ROOT']."/bitrix/modules/main/include/prolog_before.php");?>

<?$block_id=CIBlockElement::GetList(
        array(""),
        array("IBLOCK_ID"=>14 ,"PROPERTY_TYPE_SOLUTIONS"=> $_POST["id_el"]),
        false,
        false,
        array("NAME", "ID")                 
    );
    while($block = $block_id->Fetch()){
        echo "<p rel='".$block["ID"]."' onclick='get_click2(this)'>".$block["NAME"]."</p>";
    };  
    
    
    ?>