
(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TZC8F8');

function want_site() {      

    if ($("#form1 .site1").val()!==""){
        var firm_name=$("#form1 .site1").val();
    }
    else{
        $("#form1 .site1").css("background","red"); 
         $("#form1 .site1").attr("rel","N");  
    }

    if ($("#form1 .site2").val()!==""){

        var contact_face=$("#form1 .site2").val();
        
    }
    else{
        $("#form1 .site2").css("background","red");  
        $("#form1 .site2").attr("rel","N")   
    }

    if ($("#form1 .site3").val()!==""){

        var  phone=$("#form1 .site3").val();
    }
    else{
        $("#form1 .site3").css("background","red");  
        $("#form1 .site3").attr("rel","N")   
    }

    var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;

    if(pattern.test($("#form1 .site4").val())){
        var mail=$("#form1 .site4").val();
        
    }
    else{
        $("#form1 .site4").css("background","red");
        $("#form1 .site4").attr("rel","N")     
    }             

    var aplicat_type=$("#form1 .site5").val();

    if (firm_name && phone  && mail) { $.post('/ajax/add_want_site.php', { firm_name: firm_name, contact_face: contact_face,  phone: phone, mail: mail, aplicat_type: aplicat_type,    
        }, function(data) { 
            dataLayer.push({'event': 'want_site'}); 
            $("#form1").css("display","none");
            $(".s_hidden").css("display","none");
            $(".accepted").css("display","block");

        })   

    }   

}



function want_site_tech() {      
    if ($("#form3 .name_firm").val()!==""){ 
        var firm_name=$("#form3 .name_firm").val();
    }
    else {
        $("#form3 .name_firm").css("background-color","red");
    }

    if ($("#form3 .contact_face").val()!==""){
        var contact_face=$("#form3 .contact_face").val();
    }
    else {
        $("#form3 .contact_face").css("background-color","red");
    }
    if ($("#form3 .contact_phone").val()!==""){
        var phone=$("#form3 .contact_phone").val();
    }
    else{
        $("#form3 .contact_phone").css("background-color","red");
    }

    var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
    if(pattern.test($("#form3 .email_tech").val())){
        var mail=$("#form3 .email_tech").val();
    }
    else{
        // var mail="";
        $("#form3 .email_tech").css("background-color","red");
    }  
    /* if (firm_name=="" || phone=="" || mail=="") {
    $("#form_tech").css("visibility","visible");

    // $(".form_error").html("Заполните все поля!");  

    }*/

    if (firm_name && phone && contact_face) { $.post('/ajax/add_want_site.php', { firm_name: firm_name, contact_face: contact_face,  phone: phone, mail: mail    
        }, function(data) {
            dataLayer.push({'event': 'zayavka'});
            $("#form_tech").css("color","green");
            $("#form_tech").css("visibility","visible");   
            $("#form_tech").text("Ваша заявка принята!");
            $("#form_tech").css("background-color","#171B1E"); 
            $("#form_tech").css("color","#fff"); 
            $('#form3')[0].reset();


        })   

    }   

}

function want_work() {     
   
    if ($("#form2 .work1").val()!==""){
    var contact_face=$("#form2 .work1").val();
    }
    else {
     $("#form2 .work1").css("background","red");
     $("#form2 .work1").attr("rel","N");     
    }
    if ($("#form2 .work2").val()!==""){
     var phone=$("#form2 .work2").val();
    }
    else{
       $("#form2 .work2").css("background","red");
       $("#form2 .work2").attr("rel","N");   
    }

    var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
    if(pattern.test($("#form2 .work3").val())){
        var mail=$("#form2 .work3").val();
    }
    else{
        $("#form2 .work3").css("background","red");
        $("#form2 .work3").attr("rel","N"); 
    }   
   
    if (name && phone && mail) { $.post('/ajax/add_want_work.php', { contact_face: contact_face,  phone: phone, mail: mail     
        }, function(data) { 
            $("#form2").css("display","none");
            $(".w_hidden").css("display","none");
            $(".want_work_quote").css("display","none");
            $(".about_vacancy_index").css("display","none");
            $(".accepted").css("display","block");

        })   

    }   

}

function want_solution() {      
    var solut_type=$("#form_solutions #input_hid").val();
    var name=$("#form_solutions #solution2").val();
    var phone=$("#form_solutions #solution3").val();
    var question=$("#form_solutions #solution4").val();
    var scope=$("#form_solutions #select_white").val();
    //alert(solut_type+"--"+name+"--"+phone+"--"+question+"--"+scope);   
    if (scope=="" || phone=="" || solut_type=="" || name=="") {
        $("#error_text").css("display","block");
        $("#error_text").html("Пожалуйста заполните все поля!"); 


    }
    else { $.post('/ajax/add_site_solutions.php', { solut_type: solut_type, name: name, phone: phone, phone: phone, question:question, scope:scope       
        }, function(data) { 
            dataLayer.push({'event': 'gotovoe_reshenie'});
            $("#error_text").css("display","block");
            $("#error_text").css("color","green");
            $("#error_text").html("Спасибо, ваша заявка принята!"); 

            //alert(data);
            /* $("#form2").css("display","none");
            $(".w_hidden").css("display","none");
            $(".want_work_quote").css("display","none");
            $(".about_vacancy_index").css("display","none");
            $(".accepted").css("display","block");  */

        })   

    }   

}





//функции для списков в готовых решениях

function get_click1(e) {
    $(e).siblings(".select_hid").toggle();
    if ($(e).siblings(".select_hid").css("display")=="block"){
        $(".select_hid").css("display","none");
        $(e).siblings(".select_hid").css("display","block");
    }  
}

function get_click2(e) {

    $(e).parent().siblings(".select_vis").html($(e).html());
    if ($(e).parent().css("display")=="block"){
        $(e).parent().toggle();
    }

    $(e).parent().siblings(".input_hidden").val($(e).html()); 
    if ($(e).parent().attr("id")!="select_hid"){      

        get_solutions();    
    } 
}




function get_solutions(){
    var id_el=$("#input_hid").val(); 
    $.post('/ajax/display_site.php', { id_el: id_el },
        function (data){
            $("#select_hid").html(data);
            $("#select_hid > p:first-child").click();
    })  
}


$(function(){
    $("#form1 input").focus(function(){
        
        if($(this).attr("rel")=="N"){
        $(this).css("background","#f2f2f2");
        };
    })
    
    $("#form2 input").focus(function(){
        
        if($(this).attr("rel")=="N"){
        $(this).css("background","#f2f2f2");
        };
    })

    /*$("#exit_port a").click(function(){
    $(".port_header").css("display","none");  
    $("#exit_port").css("display","none");  
    });  */



    $("#error_text").css("display","none"); 

    $(".picture_div").each(function(){
        var a=$(this).css("width");
        $(this).find("img").css("width",a);
        if (parseInt($(this).find("img").css("height"))<parseInt($(this).css("height"))){
            var b=$(this).css("height");  
            $(this).find("img").css("height",b);
            $(this).find("img").css("width","auto");
        }

    })   

    //get_solutions();   

    var body_height=parseInt($("body").css("height"));
    $(".solution_poppup").css("height",body_height*0.6+"px");
    // grayscale.prepare( $('.img_event_block') );  

    /* $('.img_event_block').hover(function(){
    grayscale.reset($(this));
    }, function(){
    grayscale($(this));
    });   */   
})



//слайдер события
function slider_event(a) { 
    if (a=="next" && parseInt($(".slider_events").css("left"))==0){   

        $(".slider_events").animate({left: "-100%"}, 1000);
        $(".slider_event_next").css("background-position","left");
        $(".slider_prev_event").css("background-position","right");  
    }
    else if (a=="prev" && parseInt($(".slider_events").css("left"))!==0) {  

        $(".slider_events").animate({left: "0"}, 1000);
        $(".slider_prev_event").css("background-position","left");
        $(".slider_event_next").css("background-position","right");
    } 
} 



//всплывающее окно для готовых решений


//открытие формы при клике по готовым решениям
function click_solution() {                                                         
    s=0;
    $(".info_li").click(function(){
        $("#exit_solut").css("display","block"),
        $(".solution_poppup").css("display","block"),
        $(".tab_blocks").css("opacity","0"),
        $(".solution_poppup").css("top",parseInt($("#tittle_solution").offset().top)-parseInt($(".jspPane").css("top"))),
        $(".solution_block1 div").css("line-height",$(".solution_block1 div").css("height")),
        $("#tittle_solution").css("opacity","0");

        var id_type=$(this).attr('rel');
        $(".slider_solution").css("left","0");
        $.post('/ajax/display_site_poppup.php', { id_type: id_type      
            }, function(data) { 
                $(".solution_block1").html(data);
                $(".tab_blocks").css("display","none");
                $("#tittle_solution").css("display","none");

                solution_evolution();
                button_position();



        });


    });


};
//закрытие формы готовые решения
function click_solution_exit(){
    $("#exit_solut a").click(function(){
        $("#exit_solut").css("display","none"),
        $(".solution_poppup").css("display","none"),
        $(".tab_blocks").css("opacity","1"),
        $("#tittle_solution").css("opacity","1"),
        $(".tab_blocks").css("display","block");
        $("#tittle_solution").css("display","block");
        $(".solution_block1").html("");

    });

}



//изменение количества элементов при уменьшении размеров окна готовые решения
function resize_solution(){
    //alert($(".solution_block1 div").css("height"));
    var body_height=parseInt($("body").css("height"));
    $(".solution_poppup").css("height",body_height*0.6+"px");
    $(".solution_block1 div").css("line-height",$(".solution_block1 div").css("height"));

    if(parseInt($("body").css("width"))<1830){
        $(".solution_block1 div").css("width","32%");
        $(".solution_block1 div").css("margin-left","2%");
        $('.solution_block1 div:nth-child(3n+1)').css("margin-left","0");  

    };

    if(parseInt($("body").css("width"))>1830){
        $(".solution_block1 div").css("width","23%");
        $(".solution_block1 div").css("margin-left","2.5%");
        $('.solution_block1 div:nth-child(4n+1)').css("margin-left","0");   
    };

    if(parseInt($("body").css("width"))<1300){
        $(".solution_block1 div").css("width","47%");
        $(".solution_block1 div").css("margin-left","6%");
        $('.solution_block1 div:nth-child(2n+1)').css("margin-left","0");   
    };

    slider_width();

}
//Функция которая считает и пересчитывает количество элементов на странице
function solution_evolution(){
    var ellements= [];
    var num=0;
    var countSpan = $('.solution_block1 div').length - 1; // считаем количество div'ов в одном родителе
    // alert(countSpan);
    var spansData = []; // массив для данных из div одного родителя
    $('.solution_block1 div').each(function(){ // перебираем все родительские елементы
        var oneDiv = $(this);

        // перебираем все span'ы одного родителя
        var dataSpan =$(this).html(); // получаем данные из одного span'а
        ellements[num] = dataSpan; // записываем в массив данные
        num++;

    });


    if(parseInt($("body").css("width"))>1830){
        a=32; 
    }
    if(parseInt($("body").css("width"))<1830 && parseInt($("body").css("width"))>=1300){
        a=24;   
    }

    if(parseInt($("body").css("width"))<1300){
        a=16; 
    }
    var html="";


    for (i=0;i<=countSpan;i++){
        if (i==0){
            html+="<div class='solution_block1'>";  
        } 

        html+="<div>"+ellements[i]+"</div>"; 

        if((i*1+1*1)%a==0 && i!=countSpan){
            html+="</div><div class='solution_block1'>";
        }
        if(i==countSpan){
            html+="</div>"; 
        }
    }


    $(".slider_solution").html(html); 
    resize_solution();

}

//считает ширину окна слайдера

function slider_width(){
    var x=$(".solution_block1").length;
    $(".slider_solution").css("width",100*x+"%");
    $(".solution_block1").css("width", Math.floor(parseInt($(".slider_solution").css("width"))/x)+"px");

}


//слайдер готовые решения


function slider_solut(a) {
    var n=$(".solution_block1").length-1;

    if (a=="next" ){

        if (s<n){
            s++;
            $(".slider_solution").animate({left: -s*100+"%"}, 1000);     
        }   
    }              
    else if (a=="prev") {

        if (s>0){
            s--;
            $(".slider_solution").animate({left: -s*100+"%"}, 1000);

        }   
    }   
    button_position();   
} 
//позиция кнопок в зависимости от положения слайдера
function button_position(){
    var n=$(".solution_block1").length-1;
    $(".slider_solut_next").css("background-position","right");
    $(".slider_solut_event").css("background-position","right");

    if (s==0){
        $(".slider_solut_event").css("background-position","left");   
    }
    if (s==n){ 
        $(".slider_solut_next").css("background-position","left");
    } 

    if (n==0){
        $(".slider_solut_next").css("background-position","left");
        $(".slider_solut_event").css("background-position","left"); 
    }
}
//функция выполняющаяся при resize окна  
$(window).resize(function() {
    s=0;
    $(".slider_solut_next").css("background-position","right");
    $(".slider_solut_event").css("background-position","left"); 
    $(".slider_solution").css("left","0");

    if ($(".solution_poppup").css("display")=="block"){

        solution_evolution();     
    }  
    check_class();  
}); 

$(function(){
    resize_solution();    
    s=0;    
    click_solution(); 
    click_solution_exit(); 

    check_class(); 
});  

//функция для того что бы при включении режима редактирования в разделе события, все элементы новостей отображалались на экране
function check_class() {
    var body_height=parseInt($("body").css("height"));
    if ($(".events_content").parent().attr("class")!="internal_tabs_event") {

        $(".events_content").parent().css("height", body_height+"px"); 
    }

}

function hide_scroll(){   

    if($(".jspDrag").css("opacity")!==0){
        $(".jspDrag").animate({opacity: 0}, 1000);
    }


}



// Для полей в готовых решениях
$(function(){


    focus_blur_tech();     


    pod_int=0;

    $("body").scroll(function(){
        if ($(".jspDrag").css("opacity")!==1){
            $(".jspDrag").css("opacity","1");

        } 
        if (pod_int!==0){
            clearInterval(pod_int);
        }   
        pod_int = setInterval(hide_scroll, 3000);     

    }) 

    $("body").mousemove(function(){     
        $(".jspDrag").css("opacity","1");                       
        if (pod_int!==0){
            clearInterval(pod_int);
        }
        pod_int = setInterval(hide_scroll, 3000); 


        //alert(dates);
        //setTimeout(hide_scroll(), 3000);

    });


})



//функция для изменения цвета поля в разделе процесс в зависимости от фокуса
function focus_blur_tech(){    

    $(".tech_input").blur(function(){
        $(this).attr("placeholder",""+$(this).attr('rel')+"");
        if ($(this).val()!=""){
            $(this).css({'background-color' : '#fff', 'color' : '#030f15'})

        }
        else {
            $(this).css({'background-color' : '#171B1E', 'color' : '#fff'})

        }
    })    
    $(".tech_input").focus(function(){
        $(this).css({'background-color' : '#6cc22b', 'color' : '#030f15'});


        $(this).attr("rel",""+$(this).attr('placeholder')+"");
        $(this).attr("placeholder",""); 


    })    

}


