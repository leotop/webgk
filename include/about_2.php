<?global $ELEMENTS;
    global $n;
    //arshow($ELEMENTS[$n]["FOTO"]);

    //shuffle($ELEMENTS[$n]["FOTO"]);
    $foto_a=CIBlockElement::GetList(
        array("SORT"=>"ASC"),
        array("IBLOCK_CODE"=>"Photo_Gallery", "ID"=>$ELEMENTS[$n]["FOTO"]),
        false,
        false,
        Array("NAME",'PREVIEW_PICTURE','DETAIL_PICTURE')
    ); 
    $foto_a1=array();?>  
    <div class="picture_about">
    <?$a=1;
    while($ob=$foto_a->Fetch()){
           
        $pic_p=CFile::GetPath($ob['PREVIEW_PICTURE']);    
        $pic_d=CFile::GetPath($ob['DETAIL_PICTURE']);  
       // arshow($value_a); 
    ?>      
    <div class="picture_div gallery_picture<?=$a?>" >
        <a href="<?=$pic_d?>" class="gallery" rel="gallery">
        <img src="<?=$pic_p?>">
        </a>
    </div>
    
    
    <?$a++;} ?>
   </div>      
     



<!--<div class="gallery_picture2">
<a href=""><img src="/i/photo_4.png"></a>
</div>
<div class="gallery_picture3">
<a href=""><img src="/i/photo_3.png"></a>
</div>
<div class="gallery_picture4">
<a href=""><img src="/i/photo_2.png"></a>
</div>
<div class="gallery_picture5">
<a href=""><img src="/i/photo_9.png"></a>
</div>
<div class="gallery_picture6">
<a href=""><img src="/i/photo_8.png"></a>
</div>
<div class="gallery_picture7">
<a href=""><img src="/i/photo_7.png"></a>
</div>
<div class="gallery_picture8">
<a href=""><img src="/i/photo_6.png"></a>
</div>
<div class="gallery_picture9">
<a href=""><img src="/i/photo_10.png"></a>
</div>
</div>-->