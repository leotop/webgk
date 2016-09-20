<?require_once($_SERVER['DOCUMENT_ROOT']."/bitrix/modules/main/include/prolog_before.php");?>
<?if(CModule::IncludeModule("iblock"))?>

<? $res1=CIBlockElement::GetList( 
        array(""),
        array("ID"=>$_POST["id_type"]),
        false,
        false,
        array("NAME", "PROPERTY_SALARY","PROPERTY_JOB_DESCRIPTION","PROPERTY_REQUIREMENTS","PROPERTY_TERMS")                 
    );   
    $el=$res1->Fetch();
    
    /*$res2=CIBlockElement::GetList(
        array(""),
        array("IBLOCK_CODE"=>"WEBGK_JOB","!ID"=>$_POST["id_type"]),
        false,
        false,
        array("NAME", "PROPERTY_SALARY","PROPERTY_JOB_DESCRIPTION","PROPERTY_REQUIREMENTS","PROPERTY_TERMS")           
    ); 
    $Elements=array();
    while($arElem=$res2->Fetch()){
    $Elements[]=$arElem;
    };
    array_unshift($Elements, $el);
    foreach ($Elements as $arItem):*/ ?>  
    
     <div class="job_block1" id="job_slider">
        
        <h2><?=$el["NAME"]?></h2> 
        <h3><?=$el["PROPERTY_SALARY_VALUE"]?></h3>
        
        <div class="job_problem">
        <h4>Задачи</h4>
            <?=$el["PROPERTY_REQUIREMENTS_VALUE"]["TEXT"]?>
                          
        </div> 
        <div class="job_description">
        <h4>Описание</h4>
            <?=$el["PROPERTY_JOB_DESCRIPTION_VALUE"]["TEXT"]?>      
        </div>
        <div class="job_conditions">
        <h4>Условия</h4>
             <?=$el["PROPERTY_TERMS_VALUE"]["TEXT"]?>         
        </div>      
           

        </div>
   
   
   <? /*endforeach  */  

?>