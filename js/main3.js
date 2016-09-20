var slider = {};

$(document).ready(function() {  
    /*****************************************/


    animate=0;  

    //портфолио (активный фильтр - категории)
    $(".header_filter a").click(function() {
        $(".header_filter a").removeClass("active");
        $(this).addClass("active");
        slider.filter();
    });
    //портфолио (активный фильтр - года)
    $(".filter a").click(function() {
        $(".filter a").removeClass("active");
        $(this).addClass("active");
        slider.filter();
    });
    //переключение страниц
    $(".slider_prev").click(function() {
      
        if (animate==0){
        if ($(this).hasClass("disabled") || $(this).hasClass("no_click")) return;
        if (slider.cur_page > 1) {
            slider.cur_page--;
            slider.on_page_prev();
        } else {
            $(this).addClass("disabled");
        }
        };
    });


    $(".slider_next").click(function() {
        if (animate==0){
            if ($(this).hasClass("disabled") || $(this).hasClass("no_click")) return;

            if (slider.page_count > slider.cur_page) {
                slider.cur_page++;
                slider.on_page_next();
            } else {
                $(this).addClass("disabled");
            } 
        };
    });
    if ($(".slider").length > 0)
        slider.init();

    width=$(".slider_wrapper").width();
    //alert(width);


});


$(window).resize(function() {
    if ($(".slider").length > 0)
        slider.init();
});

//начало
slider.init = function() {
    $(".slider").html(""); //очистить контейнер
    //параметры
    slider.container = $(".slider");
    slider.cur_page = 1; //тек страница
    slider.getGridSize(); //размер сетки (по разрешению опр, сколько эл на странице)
    slider.renderGrid();  //вывод сетки
    slider.width();
};
//применить фильтр
slider.filter = function() {

    var year = $(".filter a.active").attr("class").replace("active", "").replace(/ /g, "");
    var f = $(".header_filter .active").attr("class").replace("active", "").replace(/ /g, "");

    slider.cur_page = 1;
    slider.data = $(".slider div." + f + "." + year);

    slider.page_count = Math.ceil(slider.data.length / (slider.size.cols * slider.size.rows));


    var w = $(".slider_wrapper").width() / slider.page_count;
    if (w < $(".slider_wrapper").width()) w = $(".slider_wrapper").width();

    slider.pager();
    var w = $(".slider_wrapper").width() / slider.page_count;

    if (w < $(".slider_wrapper").width()) w = $(".slider_wrapper").width();
    $(".slider").css({"width": w, "left": 0}); 
    slider.data.find("a").addClass("animation").css('transform', 'scale(1)').show();

    //анимация
    var el = $(".slider").children().not("div." + f + "." + year).find("a");
    var callback = function() {
        $(".slider div." + f + "." + year/*  +":hidden"*/).show(500);
    };
    if (el.length > 0) {
        el.addClass("animation").css('transform', 'scale(0)').delay(500).fadeOut(1, function() {
            $(this).parent().hide();
            callback();
        });
    } else {
        callback();
    }   
    //slider.width();
};

slider.width = function(){
    slider.page_floor=Math.floor(slider.data.length / (slider.size.cols * slider.size.rows));
    var width= $(".slider_wrapper").css("width"); 
    if (slider.data.length>slider.size.cols * slider.size.rows){

        var width_ceil=(slider.size.cols*$(".item").width())*slider.page_floor;
        var cols_end=slider.data.length-(slider.page_floor*slider.size.cols*slider.size.rows);
        // alert(slider.data.length+" "+slider.page_floor+" "+slider.size.cols+" "+slider.size.rows);

        if(cols_end<slider.size.cols){
            width=width_ceil+cols_end*$(".item").width()+5*1;        
        }
        else{
            width=width_ceil+cols_end*$(".item").width()+5*1;
        }  
        // alert(slider.data.length+" "+slider.page_floor+" "+slider.size.cols+" "+slider.size.rows+" "+ width_ceil+ " " +width + " "+cols_end)     
    }  
    $(".slider").css("width", width);

}


//переход на страницу
slider.on_page_next = function() {

    if (animate==0){  
        animate=1;
        slider.pager();

        $(".slider").animate({"left": $(".slider").position().left - $(".slider_wrapper > div").width()}, 1000, function(){animate=0});
    }

};
//переход на страницу
slider.on_page_prev = function() {
    if (animate==0){  

        animate=1;
        slider.pager();
        $(".slider").animate({"left": $(".slider").position().left + $(".slider_wrapper > div").width()}, 1000, function(){animate=0});
    }

};

//количество строк и колонок (зав от разрешения экрана)
slider.getGridSize = function() {
    var cols, rows, w = $(window).width(), h = $(window).height() - 400;
    cols = Math.floor(w / 325);
    if (cols < 1) cols = 1;
    rows = Math.floor(h / 285);
    if (rows < 2) rows = 2;

    if (w === 2560) cols = 6;
    rows = (w <= 2560) ? 3 : rows;
    rows = (w <= 1920) ? 2 : rows;
    rows = (w <= 1366) ? 1 : rows;
    slider.size = {cols: cols, rows: rows};
    slider.container.css({width: "auto"/*325 * slider.size.cols*/, height: 285 * slider.size.rows - cols});
    slider.item_width = $(".slider").width() / slider.size.cols - 3;
    $(".slider_wrapper > div").css("width", slider.item_width * slider.size.cols);
    $(".item").css("width", slider.item_width);
    $(".item .top").css("width", slider.item_width - 50);
    slider.container.css({width: slider.item_width * slider.size.cols});

};

//сетка
slider.renderGrid = function() {
    var i, j, k, div;
    slider.cur_page = 1;
    slider.data = $(".slider_data a");
    slider.pager();

    for (k = 0; k < slider.page_count; k++)
        for (i = 0; i < slider.size.rows; i++)
            for (j = 0; j < slider.size.cols; j++) {
                div = $("<div />").addClass("item").addClass("to_render");
                slider.container.append(div);
    }


    slider.renderData();

};

//вывод работ без анимации
slider.renderData = function() {
    var item, i;
    item = $(".slider .to_render");
    for (i = 0; i < item.length; i++) {
        if (slider.data[i]) {
            $(item[i]).append('<span class="top"></span><span class="left"></span>').removeClass("empty").
            append($(slider.data[i]).clone()).addClass($(slider.data[i]).attr("class")).css("width", slider.item_width);
        }
    }
    var year = $(".filter a.active").attr("class").replace("active", "").replace(/ /g, "");
    var f = $(".header_filter .active").attr("class").replace("active", "").replace(/ /g, "");
    $(".slider").children().not("div." + f + "." + year).hide();
    $(".item .top").css("width", slider.item_width - 50);
};

slider.pager = function() {
    slider.page_count = Math.ceil(slider.data.length / (slider.size.cols * slider.size.rows));

    $(".slider_count .from").text(slider.cur_page);
    $(".slider_count .to").text(slider.page_count ? slider.page_count : 1);

    if (slider.cur_page > 1) $(".slider_prev").removeClass("disabled"); else $(".slider_prev").addClass("disabled");
    if (slider.page_count > slider.cur_page) $(".slider_next").removeClass("disabled"); else $(".slider_next").addClass("disabled");
    $(".item").css("width", slider.item_width);
    $(".item .top").css("width", slider.item_width - 50);
    slider.container.css("width", slider.page_count * $(".slider_wrapper").width());

    slider.width();
};





