<?require_once($_SERVER['DOCUMENT_ROOT']."/bitrix/modules/main/include/prolog_before.php");?>

<? 
    $block_id=CIBlock::GetList(
        array(""),
        array("CODE"=>"APPLICATION_SOLUTION")                 
    );
    $block = $block_id->Fetch();
    
    

    $_POST["solut_type"]=iconv('UTF-8','CP1251',$_POST["solut_type"]);
    $_POST["name"]=iconv('UTF-8','CP1251',$_POST["name"]);
    $_POST["phone"]=iconv('UTF-8','CP1251',$_POST["phone"]);
    $_POST["question"]=iconv('UTF-8','CP1251',$_POST["question"]);
    $_POST["scope"]=iconv('UTF-8','CP1251',$_POST["scope"]);
    
    
    $solution_type=CIBlockElement::GetList(
      array(),
      array("ID"=>$_POST["solut_type"]),
      false,
      false,
      array()
    ); 
    
    $type_solution = $solution_type->Fetch();
     
    
    $solut_type =  $_POST["solut_type"];
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $question = $_POST["question"];

    If ($_POST["solut_type"] && $_POST["name"] && $_POST["phone"]){ 


        $data=array(
            "SOLUTION_PHONE"=>$_POST["phone"],
            "SOLUTION_QUESTION"=>$_POST["question"],
            "SOLUTION_TYPE"=>$_POST["solut_type"],
            "SOLUTION_SCOPE"=>$_POST["scope"]
        );

        $el = new CIBlockElement;
        $arLoadProductArray = Array(
            //"MODIFIED_BY"    => $USER->GetID(), // элемент изменен текущим пользователем
            "IBLOCK_SECTION_ID" => false,          // элемент лежит в корне раздела
            "IBLOCK_ID"      => $block["ID"],
            "PROPERTY_VALUES" => $data,
            "NAME"    =>     $_POST["name"],           

        );  


        // arshow($arLoadProductArray);
        if($PRODUCT_ID = $el->Add($arLoadProductArray)){
            echo "Ваша заявка добавлена, ожидайте звонка";


        $theme = "Заказ готового решения с webgk.ru";
        $mail_text = "<b></b><br>
        ==============================================<br>
        <b>Имя:</b> $name<br>
        <b>Телефон:</b> $phone<br>
        <b>Тип решения:</b> $solut_type<br>
        <b>Вопрос:</b> $question <br>
        <b>E-mail:</b> $scope <br>
        ==============================================<br>    
        ";

        ////////////////////////////

        $to = 'gk@webgk.ru';
         //$to = 'dauiurdfkiek@dropmail.me';
        //отправляем письмо о регистрации администратору и зарегистрировавшемуся
        $mail = mail($to,$theme,$mail_text, "From: gk@webgk.ru\r\n"."Content-type: text/html; charset=windows-1251\r\n"); 
        }
        else  {
            echo "Error: ".$el->LAST_ERROR;  

       }}; 

?>