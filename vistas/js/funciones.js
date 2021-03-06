$(document).ready(function(){

	$('ul.nav li.dropdown').hover(function() {
	  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
	}, function() {
	  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
	});
	
	$("#btn_nosotros").click(function(){
	    var posicionIndex1 = $('#nosotros').offset().top;
	    $('html, body').animate({scrollTop: posicionIndex1}, 1000);
	    // $('#fixedLogoNav img').attr('src', "svg/logo.svg");

	    $(".btn-toggle").css("background", "rgba(0, 0, 0, 0.8)");
	    
	});
	$("#btn_servicio").click(function(){
	    var posicionIndex2 = $('#seccion_servicios').offset().top;
	    $('html, body').animate({scrollTop: posicionIndex2}, 1000);
	    // $('#fixedLogoNav img').attr('src', "svg/logo.svg");

	    $(".btn-toggle").css("background", "rgba(0, 0, 0, 0.8)");
	    
	});

	$(".boton_subir_inicio").click(function(){
	    var posicionIndex3 = $('#carousel-slider').offset().top;
	    $('html, body').animate({scrollTop: posicionIndex3}, 1000);
	    // $('#fixedLogoNav img').attr('src', "svg/logo.svg");

	    $(".btn-toggle").css("background", "#fff");
	    
	});

	$(".contador_facebook").hover(function(){

	    $(".contador_facebook").css("transform", "rotate(0deg)");
	});




	/***Scroll fijo***/
	function ScrollHandler(pageId) { 
	    var page = $('#' + pageId);
	    var pageStart = page.offset().top;
	    var pageJump = false;

	    function scrollToPage() {
	        pageJump = true;
	        $('html, body').animate({ 
	            scrollTop: pageStart 
	        }, {
	            duration: 1000,
	            complete: function() {
	            pageJump = false;
	            }
	        });

	        //console.log(pageId+" "+page.offset().top);
	        switch(pageId){
	            case 'carousel-slider':
	                // $('#fixedLogoNav img').attr('src', "svg/logo.svg");
	                // $("#fixedBtn-menuIndex img").attr("src", "svg/navicon.svg");
	                $(".btn-toggle").css("background", "#16171900");
	                
	            break;

	            case 'nosotros':
	                // $('#fixedLogoNav img').attr('src', "svg/logo_bcagro_color.svg");

	                // $("#fixedBtn-menuIndex img").attr("src", "img/navicon_menu.svg");
	               $(".btn-toggle").css("background", "rgba(0, 0, 0, 0.8)");
	               

	            break;

	            case 'seccion_servicios':
	                // $('#fixedLogoNav img').attr('src', "svg/logo_bcagro_color.svg");

	               $(".btn-toggle").css("background", "rgba(0, 0, 0, 0.8)");

	            break;

	            case 'alianzas_comerciales':
	                // $('#fixedLogoNav img').attr('src', "svg/logo.svg");
	                // if(screen.width > 576  && screen.width <= 767){
	                //     $('#fixedLogoNav img').attr('src', "svg/logo_bcagro_color.svg");
	                // }
	                // if(screen.width >992){
	                //     $('#fixedLogoNav img').attr('src', "svg/logo_bcagro_color.svg");

	                    $("#fixedBtn-menuIndex img").attr("src", "svg/navicon.svg");
	                    $(".btn-menuText").css("color", "white");
	                    $("#inicio").css("color", "#fff");
	                    $("#quienes_somos").css("color", "#fff");
	                    $("#calidad").css("color", "#fff");
	                    $("#productos").css("color", "#78d3fb");
	                    $("#contacto").css("color", "#fff");
	                     $(".btn_open_menu_responsive").css("color", "#fff");
	                // }
	            break;

	            case 'nuestros_clientes':
	                $("#fixedBtn-menuIndex img").attr("src", "svg/navicon.svg");
	                $(".btn-menuText").css("color", "305480");
	                $("#inicio").css("color", "#305480");
	                $("#quienes_somos").css("color", "#305480");
	                $("#calidad").css("color", "#305480");
	                $("#productos").css("color", "#305480");
	                $("#contacto").css("color", "#78d3fb");
	                $(".btn_open_menu_responsive").css("color", "#305480");
	                if(screen.width >= 576){
	                    $("#fixedBtn-menuIndex img").attr("src","img/navicon_menu.svg");
	                    $(".btn-menuText").css("color", "#305480");
	                    $(".btn_open_menu_responsive").css("color", "#305480");
	                }
	            break;

	            case 'footerIndex':
	                $("#fixedBtn-menuIndex img").attr("src", "svg/navicon.svg");
	                $(".btn-menuText").css("color", "305480");
	                $(".btn_open_menu_responsive").css("color", "#fff");
	            break;
	        }
	        if($(this).scrollTop() > 50)  /*height in pixels when the navbar becomes non opaque*/ 
		    {
		        $('.btn-toggl').addClass('opaque');
			    } else {
			        $('.btn-toggl').removeClass('opaque');
			    }
		    }

	    window.addEventListener('wheel', function(event) {
	       var viewStart = $(window).scrollTop();
	            if (!pageJump)  {   
	                var pageHeight = page.height();
	                var pageStopPortion = pageHeight / 2;
	                var viewHeight = $(window).height();

	                var viewEnd = viewStart + viewHeight;
	                var pageStartPart = viewEnd - pageStart;
	                var pageEndPart = (pageStart + pageHeight) - viewStart;
	                  
	                var canJumpDown = pageStartPart >= 0; 
	                var stopJumpDown = pageStartPart > pageStopPortion; 
	          
	                var canJumpUp = pageEndPart >= 0; 
	                var stopJumpUp = pageEndPart > pageStopPortion; 

	                var scrollingForward = event.deltaY > 0;
	                if (  ( scrollingForward && canJumpDown && !stopJumpDown) 
	                || (!scrollingForward && canJumpUp   && !stopJumpUp)) {
	                    event.preventDefault();
	                    scrollToPage();
	                } 
	            }else {
	                event.preventDefault();
	            }    
	    });
	}

	new ScrollHandler('nosotros'); 
	new ScrollHandler('carousel-slider');
	new ScrollHandler('seccion_servicios');
	new ScrollHandler('alianzas_comerciales');
	new ScrollHandler('nuestros_clientes');
	new ScrollHandler('footerIndex');


});



