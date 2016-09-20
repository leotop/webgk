$(function(){
click_job();
click_job_exit();    
 var body_height=parseInt($("body").css("height"));
 //$(".job_poppup").css("height",body_height*0.65+"px"); 
 // $(".job_block1 p").css("line-height",$(".job_block1 p").css("height"));  
                  
})


//Открытие слайдера вакансий
function click_job() {   
     $(".vakancy").click(function(){
        $("#exit_job").css("display","block"),
        $(".job_poppup").css("display","block"),
        $(".our_services_tabs").css("opacity","0"),
        $(".job_poppup").css("top",parseInt($(".our_services_tabs").offset().top)-parseInt($(".jspPane").css("top")))
        
           
        var id_type=$(this).attr('rel');
        $(".slider_job").css("left","0");
        $(".our_services_tabs").css("display","none");
        //$(".job_block1 div").css("line-height",$(".job_block1 div").css("height")); 
                
        $.post('/ajax/display_job_poppup.php', { id_type: id_type      
            }, function(data) { 
                //alert(data);
                $(".slider_job > div:first-child").html(data);
                slider_width_about();
                /* $(".tab_blocks").css("display","none");
                $("#tittle_solution").css("display","none"); */    

        });     
    })
}

//Закрытие слайдера вакансий

function click_job_exit(){
    $("#exit_job a").click(function(){
        $("#exit_job").css("display","none"),
        $(".job_poppup").css("display","none"),
        $(".our_services_tabs").css("opacity","1"),
        $(".our_services_tabs").css("display","block"),
        $(".slider_job > div:first-child").html("");
         $(".job_solution").css("left","0");
    });

}

//Переключение слайдера
/*function slider_job(a) {
    var n=$(".job_block1").length-1;   
    if (a=="next" ){

        if (s<n){
            s++;
            $(".slider_job").animate({left: -s*100+"%"}, 1000);     
        }   
    }              
    else if (a=="prev") {

        if (s>0){
            s--;
            $(".slider_job").animate({left: -s*100+"%"}, 1000);       
        }   
    }   
   button_position_about();   
}   */

/*function button_position_about(){
    var n=$(".job_block1").length-1;
    $(".slider_job_next").css("background-position","right");
    $(".slider_job_event").css("background-position","right");

    if (s==0){
        $(".slider_job_event").css("background-position","left");   
    }
    if (s==n){ 
        $(".slider_job_next").css("background-position","left");
    } 
   
    if (n==0){
        $(".slider_job_next").css("background-position","left");
        $(".slider_job_event").css("background-position","left"); 
    }
} */

 /*function slider_width_about(){
    var x=$(".job_block1").length;
    $(".slider_job").css("width",100*x+"%");
    $(".job_block1").css("width", Math.floor(parseInt($(".slider_job").css("width"))/x)+"px");

}  */


$(window).resize(function() {   
 var body_height=parseInt($("body").css("height"));
    //$(".job_poppup").css("height",body_height*0.65+"px");
     //$(".job_block1 div").css("line-height",$(".job_block1 div").css("height"));
    //$(".job_block1 p").css("line-height",$(".job_block1 p").css("height"));  
   
    
    
})