$(document).ready(function() {
    //Page tab creation of sites
                                     

    var href=window.location.href;   
    // alert(href); 
    var id=href.split('#');
    //alert(id[1]);
    var href=id[0].split('/');
   // alert(href[3]);
    tabs_click();
    //alert(id[0]);
    if (href[3]=="services" || href[3]=="about"){
 
        if (id[1]===undefined){ 
        
            var url=window.location;
            var code=$(".tabs li:first-child").attr("rel");
            location.replace(url+"#"+code);
            $(".tabs li:first-child").click();

        }   
        else{
            $(".tab_content>li").hide();
            $(".tabs li").each(function(){
                if ($(this).attr("rel")==id[1]){
                    $(this).addClass("active");
                    $(".swipe_zone").addClass("bg_tab");
                    var index=$(this).index();
                    $(".tab_content>li").eq(index).fadeIn();
                }
            });  

            /*$(".tab_content>li").hide();
            $(".tabs li:first-child").addClass("active");
            $(".swipe_zone").addClass("bg_tab");
            $(".tab_content>li:first-child").fadeIn(); */ 
        } 


    }; 

    /* var countLi=$('ul.tabs li').size();


    var a=0;
    var i;  
    for (i=1; i==countLi; i++) {

    $("ul.tabs>li #tab").click(function() {
    $(".tabs>li").removeClass("active");
    $(".swipe_zone").addClass("bg_tab");
    $(this).addClass("active");
    $(".tab_content>li").hide();
    $(".tab_content>li #tab".i).fadeIn('slow');
    a=a+"+*"; 
    return false;  
    });

    }; */    


});

function tabs_click(){
    $("ul.tabs>li").click(function() {    
        var index=$(this).index();    
        $(".tabs>li").removeClass("active");
        $(".swipe_zone").addClass("bg_tab");
        $(this).addClass("active");
        $(".tab_content>li").hide();
        $(".tab_content>li:eq("+index+")").fadeIn('slow');

    })
}


function getCookie(name) {  
  var matches = document.cookie.match(new RegExp(   
    "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"    
  ));    
  return matches ? decodeURIComponent(matches[1]) : undefined;

}



function setCookie(name, value, options) {   
  options = options || {};    
  var expires = options.expires;  
  if (typeof expires == "number" && expires) {        
    var d = new Date();  
    d.setTime(d.getTime() + expires*1000);    
    expires = options.expires = d;          
  }       
  if (expires && expires.toUTCString) {      
    options.expires = expires.toUTCString();     
  }  
  value = encodeURIComponent(value);   
  var updatedCookie = name + "=" + value;    
  for(var propName in options) {    
    updatedCookie += "; " + propName;    
    var propValue = options[propName];   
    if (propValue !== true) {      
      updatedCookie += "=" + propValue;   
     }       
  }      
  document.cookie = updatedCookie;

}
