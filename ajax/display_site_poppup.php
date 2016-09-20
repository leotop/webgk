<?require_once($_SERVER['DOCUMENT_ROOT']."/bitrix/modules/main/include/prolog_before.php");?>
<?if(CModule::IncludeModule("iblock"))?>

<?$block_id=CIBlockElement::GetList(
        array(""),
        array("IBLOCK_ID"=>14 ,"PROPERTY_TYPE_SOLUTIONS"=> $_POST["id_type"]),
        false,
        false,
        array("NAME", "ID","PROPERTY_SOLUTION_LINK")                 
    );
    
    while($block = $block_id->Fetch()){
        echo "<div><a href='".$block["PROPERTY_SOLUTION_LINK_VALUE"]."'>".$block["NAME"]."</div>";
        $quant++;
    };  
    
    
     
    ?>