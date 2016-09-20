<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
    $APPLICATION->SetTitle("О компании");?>
                                                   
    <?$about=CIBlockElement::GetList(
        array("SORT"=>"ASC"),
        array("IBLOCK_CODE"=>"ABOUT", "ACTIVE"=>"Y"),
        false,
        false,
        Array("NAME","ID", 'DETAIL_TEXT', 'DETAIL_PICTURE', "PROPERTY_DATE_COMPANY", "PROPERTY_FOTO_SITE","CODE")
    );
    $ELEMENTS=array();
    global $ELEMENTS;
    $FOTO=array();
    while($ob = $about->Fetch())
    {  

        $FOTO[$ob["ID"]][]=$ob["PROPERTY_FOTO_SITE_VALUE"];
        $ob["FOTO"]=$FOTO[$ob["ID"]];
        $ELEMENTS[$ob["ID"]]=$ob;        

    }  


    /* $res = CIBlockElement::GetByID($ELEMENTS["FOTO"]);
    if($ar_res = $res->GetNext())
    arshow($ar_res);*/



    $foto_a=CIBlockElement::GetList(
        array("SORT"=>"ASC"),
        array("IBLOCK_CODE"=>"Photo_Gallery", "ID"=>$ELEMENTS["FOTO"]),
        false,
        false,
        Array("NAME",'PREVIEW_PICTURE','DETAIL_PICTURE')
    );   
    while($ob1 = $foto_a->Fetch()){
        $foto_a1=$ob1;  
    }           


    //arshow($ELEMENTS); 


    //arshow($foto_a1);


?>  


<ul class="tabs">

    <? $a=1;
        $value=array(); 
        foreach ($ELEMENTS as $value) {?>     
        <li rel=<?=$value["CODE"]?>><a href="/about/#<?=$value["CODE"]?>"><?=$a.". ".$value["NAME"]?></a></li>
        <?$a++;
          }?>      
</ul>

<ul class="tab_content">

    <?$b=1;
        global $n;
        foreach ($ELEMENTS as $id=>$value) {
            $sec=CFile::GetPath($value['DETAIL_PICTURE']);

            if ($b==1){
                // $col="style='background-color: #030F15; min-height: 730px;'";    
            }
            else {
                $col="";   
            }
        ?> 

        <li>
            <h2 class="tab_content_title">О компании</h2>
            <!-- left_tab block -->
            <div class="tab_blocks">

                <?/*if ($b==1){        вместо картинки на первом слайде отображается мини-галерея с фотографиями из другого инфоблока
                    $n=$id;
                    $APPLICATION->IncludeFile(SITE_DIR."/include/about_2.php",Array(),Array("MODE"=>"html"));}
                else {?> <?}*/?>
                <div class="left_tab_blocks">
                    <img src="<?=$sec?>" alt="">
                </div>

                <!--<img src="<?=$sec?>" alt="img-01" style="">-->

                <div class="right_tab_blocks">
                    <!-- tab title -->
                    <h1 class="tab_title"><?=$value['NAME']?></h1>
                    <!-- End tab title -->
                    <!-- tab price -->
                    <div class="tab_price">
                        <?=$value["PROPERTY_DATE_COMPANY_VALUE"]?>
                    </div>

                    <div class="tab_text">
                        <?=$value['DETAIL_TEXT']?>                 

                    </div>

                    <?if ($b==1) {
                            $APPLICATION->IncludeFile(SITE_DIR."/include/about_1.php",Array(),Array("MODE"=>"html"));}
                        if ($value["CODE"]=="JOB_ABOUT"){?>    

                        <div class="work_company_bottom">
                            <span>Наши вакансии: </span>
                            <?$res=CIBlockElement::GetList(
                                    Array("SORT"=>"ASC"),
                                    Array("IBLOCK_CODE"=>"WEBGK_JOB", "ACTIVE"=>"Y"),
                                    false,
                                    false,
                                    Array("NAME","ID")
                                );
                                if ($res->SelectedRowsCount()>0){
                                while($ob=$res->Fetch()){?>
                                <span class="vakancy" rel="<?=$ob["ID"]?>"><?=$ob["NAME"]?></span>
                                <?}}
                                else{ ?>
                                   <span class="not_vakancy">В данный момент вакансий нет</span> 
                               <?}?>
                        </div>
                        <?}    
                    ?>
                    <!-- End tab text -->
                    <!-- tab list -->                  


                </div>
            </div>
            <!-- End left_tab block -->
        </li>
        <?
            $b++;}
      
                       
            ?>
    </ul>       
                

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>