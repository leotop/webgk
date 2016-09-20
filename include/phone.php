<?$city = get_city_by_ip($_SERVER["REMOTE_ADDR"]);?>

                <?$city = iconv("UTF-8","CP1251",$city)?>
                <?if($city=="Москва" or $city=="Санкт-Петербург"){?>
                    <p><strong>(495) 215-20-29</strong></p>
                    <?}else{?>
                    <p><strong> (4872) 52-41-33</strong></p>
                    
<?}?>