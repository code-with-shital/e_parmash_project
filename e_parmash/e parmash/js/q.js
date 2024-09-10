(function($){
    if("undefined"==typeof jQuery)
        throw new Error("Best QSystems  Framework requires JQuery to run. Please install any version ~ Benson Karue ")
    $.fn.dialog = function( action ) {

    	var target = this;
        if ( action === "open") {
            this.fadeIn();
            return this.each(function(){
            	$(".dialog-content", this).addClass("animated zoomIn");
				$(".dialog-content", this).removeClass("zoomOut");
            });
        }


        if ( action === "close" ) {
			this.fadeOut();
            return this.each(function(){
            	$(".dialog-content", this).removeClass("zoomIn");
				$(".dialog-content", this).addClass("animated zoomOut");
            });
        }


        if(action == "show"){
        	return this.show();
        }



        if(action == "hide"){
        	return this.hide();
        }

    };



    $.fn.sideBar = function( action ) {

    	var target = this;
        if ( action === "open") {
            this.fadeIn();
            return this.each(function(){
            	$(".side-bar-content", this).addClass("animated slideInRight");
				$(".side-bar-content", this).removeClass("slideOutRight");
            });
        }


        if ( action === "close" ) {
			this.fadeOut();
            return this.each(function(){
            	$(".dialog-content", this).removeClass("slideInRight");
				$(".dialog-content", this).addClass("animated slideOutRight");
            });
        }


        if(action == "show"){
        	return this.show();
        }



        if(action == "hide"){
        	return this.hide();
        }

    };





    $.fn.niceSound = function(){
    	return this.each(function(){
    		var audio = $(this)[0];
    		audio.play();
    	});
    };





}(jQuery));

function appendUsefulStuffsToDom(){

    $("body").on("click","#error .close", function(){
    	$("#error").fadeOut();
    });
     $("body").on("click","#success .close", function(){
    	$("#success").fadeOut();
    });
      $("body").on("click","#error .close", function(){
    	$("#loading").fadeOut();
    });

}

function resizeWindow(){

	$(window).resize(function(){
		var systemWidth = $(this).width();
		if(systemWidth <= 750){
			$("ul.nav li.dropdown ul.dropdown-menu").removeClass("drop-them-all");
		}
	});
}

function loadMobile(){
	var systemWidth = $(window).width();
		if(systemWidth <= 750){
			$("ul.nav li.dropdown ul.dropdown-menu").removeClass("drop-them-all");
	}
}

function openSideBar(){
	$("body").on("click","[data-open='side-bar']",function(event){
		var target = $(this).attr("q-target");
		$(target).fadeIn("slow");

		$(target+" .side-bar-content").addClass("animated slideInRight");
		$(target+" .side-bar-content").removeClass("slideOutRight");
		event.preventDefault();
	});
}

function openDialog(){

	$("body").on("click","[data-open='dialog']",function(event){
		var target = $(this).attr("q-target");
		$(target).fadeIn("slow");

		$(target+" .dialog-content").addClass("animated bounceInRight");
		$(target+" .dialog-content").removeClass("fadeOutLeftBig");
		event.preventDefault();
	});


	$("body").on("click","[data-dismiss=dialog]",function(event){
		if(event.target != this){
			return;
		}
		var  closeId = $(this).attr("data-close");


		$(closeId+" .dialog-content").removeClass("bounceInRight");
		$(closeId+" .dialog-content").addClass("animated fadeOutLeftBig");
		$(closeId).fadeOut("slow");
		return false;
	});


	$("body").on("click","[data-zoom-in='dialog']",function(event){
		var target = $(this).attr("q-target");
		$(target).fadeIn("slow");

		$(target+" .dialog-content").addClass("animated zoomIn").removeClass("zoomOut")
		event.preventDefault();
	});


	$("body").on("click","[data-zoom-out='dialog']",function(event){
		if(event.target != this){
			return;
		}
		var  closeId = $(this).attr("data-close");


		$(closeId+" .dialog-content").addClass("animated zoomOut").removeClass("zoomIn")
		$(closeId).fadeOut("slow");
		return false;
	});


$("body").on("click","[data-dismiss='side-bar']",function(event){
		if(event.target != this){
			return;
		}
		var  closeId = $(this).attr("data-close");


		$(closeId+" .side-bar-content").addClass("animated slideOutRight").removeClass("slideInRight")
		$(closeId).fadeOut("slow");
		return false;
	});




	$(window).resize(function(){
		var widthDim = $(this).width();

		if(widthDim > 1038){

			$(".dialog-content").css({"left":"30%"});
			$(".loading-data").css("left","37%");
			$(".band-connection").css("left","30%");
		}

		if(widthDim >= 850 && widthDim <= 1038){
			$(".dialog-content").css({"left":"20%"});
			$(".loading-data").css({"left":"37%"});
			$(".band-connection").css({"left":"30%"});
		}

		if(widthDim >= 760 && widthDim <= 849){
			$(".dialog-content").css({"left":"10%"});
			$(".loading-data").css({"left":"37%"});
			$(".band-connection").css({"left":"30%"});
		}

		if(widthDim < 660){
			$(".dialog-content").css({"left":"5%","width":"88%"});
			$(".loading-data").css({"left":"5%","min-width":"88%"});
			$(".band-connection").css({"left":"5%","width":"88%"});
			$(".loading-data").css({"font-size":"16px"});
			$(".band-connection").css({"font-size":"16px"});
		}

		if(widthDim > 660){
			$(".dialog-content").css({"width":"550px"});
			$(".band-connection").css({"width":"550px"});
			$(".loading-data").css({"font-size":"21px"});
			$(".band-connection").css({"font-size":"21px"});
			$(".loading-data").css({"min-width":"300px","max-width":"400px"});
		}

	});



	var dim = $(window).width();
		if(dim > 1038){
			$(".dialog-content").css({"left":"30%"});
			$(".loading-data").css("left","37%");
			$(".band-connection").css("left","30%");
			$(".system-title").html("Murang'a University Classes Management Stystem (MCMS)");
			$(".right").css("right","24%");

		}

		if(dim >= 850 && dim <= 1038){
			$(".dialog-content").css({"left":"20%"});
			$(".loading-data").css({"left":"37%"});
			$(".band-connection").css({"left":"30%"});

		}

		if(dim >= 760 && dim <= 849){
			$(".dialog-content").css({"left":"10%"});
			$(".loading-data").css({"left":"37%"});
			$(".band-connection").css({"left":"30%"});
		}

		if(dim < 660){
			$(".dialog-content").css({"left":"5%","width":"88%"});
			$(".loading-data").css({"left":"5%","min-width":"88%"});
			$(".band-connection").css({"left":"5%","width":"88%"});
			$(".loading-data").css({"font-size":"16px"});
			$(".band-connection").css({"font-size":"16px"});
		}

		if(dim > 660){
			$(".dialog-content").css({"width":"550px"});
			$(".band-connection").css({"width":"550px"});
			$(".band-connection").css({"font-size":"21px"});
			$(".loading-data").css({"min-width":"300px","max-width":"400px"});
		}

}

function showAlert(){
	$("body").on("click","[data-open='alert']", function(){
		var destiny = $(this).attr("q-target");

		$(destiny).fadeIn("slow");
		$("[data-role='alert']").fadeIn();
		$("[data-show='alert']").removeClass("zoomOutDown");
		$("[data-show='alert']").addClass("animated zoomIn");
	});


	$(".negative").click(function(){
		$("[data-role='alert']").fadeOut();

		$("[data-show='alert']").fadeOut();
		$("[data-show='alert']").removeClass("zoomIn");
		$("[data-show='alert']").addClass("animated zoomOutDown");
	});
}
function closeBandConnectionError(){
	$('[data-dismiss="connection"]').click(function(event){
		if(event.target != this){
			return;
		}
        $(".band-connection").removeClass("lightSpeedIn");
        $(".band-connection").addClass("animated bounceOutDown");

        $("[data-role='ajax_error']").fadeOut();
        $("[data-show='connection-error']").fadeOut("slow");

	});
}
function dialogFooter(){
	$(".dialog-footer").attr("align","right");
}

function errorInterface(){
    $("[data-target='errors']").click(function(){
        var contents = $(this).attr("data-content");
        var id = $(this).attr("q-target");
        var toolkit = $(this).attr("toolkit");

        $(id+" .error-content").html(contents);
        if(toolkit == "true"){
            fakeLoader(id);
        }

    });
}
function fakeLoader(idTarget){
    $(idTarget+" .waiting-toolkit").show();
    $(idTarget+" .toolkit").hide();
    var time = 0;
    function fake(){
        var id = setTimeout(fake, 1000);
        if(time == 5){
            clearTimeout(id);
            $(idTarget+" .toolkit").slideDown("slow");
            $(idTarget+" .waiting-toolkit").hide();
        }
        time ++;
    }
    fake();
}


function clickSound(){
    $(".sound-active").click(function(){
        var audio = $("#click-audio")[0];
        audio.play();
    });
}



function showSearchFrag(){
	$("body").on("click","[data-open='search']", function(){
		var idToOpen = $(this).attr("q-target");
		$(idToOpen).fadeIn("slow");
		$(idToOpen+" .search-content").addClass("animated fadeInUpBig");
		$(idToOpen+" .search-content").removeClass("fadeOutRightBig");

		return false;
	});

	$("body").on("click","[data-dismiss='search']", function(event){
		if(event.target != this){
			return;
		}

		var closeId = $(this).attr("data-close");
		$(closeId+" .search-content").removeClass("fadeInDownBig");
		$(closeId+" .search-content").addClass("animated fadeOutRightBig");
		$(closeId).fadeOut("slow");


	});
}




function openMenuThemAll(){
    $("body").on("click","[data-open='mobile-menu']",function(){
        var id = $(this).attr("q-target");
        $(id).fadeIn("slow");
        $(id+" .mobile-menu-content").addClass("animated fadeInRightBig").removeClass("fadeOutRightBig");

    });

    $("body").on("click","[data-dismiss='mobile-menu']",function(e){
        if(e.target != this){
            return;
        }
        var id = $(this).attr("data-close");
        $(id).fadeOut("slow");
        $(id+" .mobile-menu-content").removeClass("fadeInRightBig").addClass("animated fadeOutRightBig");

    });
}


function notificationManager(){
	$("body").on("click","[data-dismiss='notification']",function(event){
		if(event.target != this){
			return;
		}

		var closeId = $(this).attr("data-close");
		$(closeId).fadeOut("slow");
		$(closeId+" .notification-content").addClass("animated slideOutRight").removeClass("slideInLeft");
	});


	$("body").on("click",".notification-manager", function(event){
		if(event.target != this){
			return;
		}
		var attentionAudio = $("#attention")[0];
		attentionAudio.play();
		var time = 0;
		function realTime(){
			var id = setTimeout(realTime, 1000);
			$(".notification-manager .notification-content").addClass("animated wobble infinite").removeClass("slideInLeft");
			if(time == 1){
				$(".notification-manager .notification-content").removeClass("wobble infinite");
				clearTimeout(id);
			}
			time ++;
		}
		realTime();
	});

	$("body").on("click",'[data-open="notification"]', function(){
		var id = $(this).attr("q-target");
		$(id).fadeIn("slow");
		$(id+" .notification-content").addClass("animated slideInLeft").removeClass("slideOutRight");
	});


}

function chatIdicator(){
	$("body").on("click","[data-open='chat-idicator']", function(event){
		if(event.target != this){
			return;
		}
		var id = $(this).attr("q-target");
		$(id).show("slow");
	});

	$("body").on("click","[data-finish='chat-idicator']", function(event){
		if(event.target != this){
			return;
		}

		var id = $(this).attr("data-end");
		$(id).hide("slow");
	});
}

function overFlowDialog(){
	var time = 0;
	function realTime(){
		setTimeout(realTime, 1000);
		if(time == 1){

			if($("[data-show='dialog']").is(":visible")){
				$("[data-show='dialog']").css("overflow-y", "scroll");
				time = 0;
			} else {
				$("[data-show='dialog']").css("overflow-y", "hidden");
				time = 0;
			}
		}

		time ++;
	}
	realTime();
}

function openAllDialogTypes(){
	var time = 0;
	function realTime(){
		setTimeout(realTime, 0);
		if(time = 1){
			if($("[data-show='dialog']").is(":visible") || $("[data-show='mobile-menu']").is(":visible") || $("[data-show='side-bar']").is(":visible") ){
				$("body").addClass("open-customs");
			} else {
				$("body").removeClass("open-customs");
			}
			time = 0;
		}
		time ++;
	}
	realTime();
}

function passwords(){
	$("body").on("click","[data-show='password']", function(){
		var targetId = $(this).attr("q-show");
		$(targetId).attr("type","text");
		$("[q-hide='"+targetId+"']").fadeIn();
		$(this).hide();
	});

	$("body").on("click","[data-hide='password']", function(){
		var targetId = $(this).attr("q-hide");
		$(targetId).attr("type","password");
		$("[q-show='"+targetId+"']").fadeIn();
		$(this).hide();
	});
}

function tabs(){

	$("body").on("click", "[data-open='tab']", function(){
		$(this).removeAttr("inactive");
		var id = $(this).attr("q-target");
		$("[active]").removeAttr("active").attr("inactive","inactive");
		$(this).attr("active","active");
		$(".active-tab").removeClass("active-tab").addClass("in-active-tab").hide();
		$(id).addClass("active-tab").removeClass("in-active-tab").hide().fadeIn();
		return false;
	});

	function tabMobile(){
		var systemWidth = $(window).width();

		if(systemWidth < 938){
			$("[inactive]").hide();
			$('[data-open="mobile-tab"]').fadeIn('slow');
		} else {
			$("[inactive]").fadeIn('slow');
			$('[data-open="mobile-tab"]').fadeOut('slow');
		}

		$(window).resize(function(){
			var width = $(window).width();

			if(width < 938){
				$("[inactive]").hide();
				$('[data-open="mobile-tab"]').fadeIn('slow');
			} else {
				$("[inactive]").fadeIn('slow');
				$('[data-open="mobile-tab"]').fadeOut('slow');
			}
		});

		$("body").on("click","[data-open='mobile-tab']", function(event){

			event.preventDefault();
		});
	}
	tabMobile();
}

function createTextarea(){

	$(".text-area").attr("contentEditable", "true");
	var holder = $(".text-area").attr("data-holder");
	$(".text-area").html("<span class='holder'>"+holder+"</span>");


	$("body").on("focus",".text-area", function(){
		$("span.holder").remove();
	});

	$("body").on("focusout",".text-area", function(){
		var textData = $(this).text();
		if(textData  == ""){
			var holderData = $(this).attr("data-holder");
			$(".text-area").html("<span class='holder'>"+holderData+"</span>");
		}
	});
}

function inputHints(){
	$("body").on("focus", "input",function(){
		var id = $(this).attr("id");
		$("[data-hint='"+id+"']").fadeIn().addClass("animated bounceIn");

	});

	$("body").on("focusout", "input", function(){
		var id = $(this).attr("id");
		$("[data-hint='"+id+"']").hide().removeClass("bounceIn");

	});
}

function selectWidget(){
	$("body").on("focus", "[data-input='select']", function(){
		var id = $(this).attr("id");
		$("[data-select='"+id+"']").fadeIn("slow").addClass("animated bounceIn").removeClass("bounceOut");
	});
	$("body").on("click","[data-select] li", function(){
		var text = $(this).html();
		if(text == "Null"){
			$("[data-input='select']").val("");
			return;
		}
		var  id = $(this).attr("parent");
		$("#"+id).val(text);
	});
	$("body").on("focusout", "[data-input='select']", function(){
		var id = $(this).attr("id");

		$("[data-select='"+id+"']").fadeOut("fast").addClass("animated bounceOut").removeClass("bounceIn");
	});



	$("body").on("keypress", "[data-input='select']", function(event){
		event.preventDefault();
	});
}

function checkJavaScriptEnabled(){
}


function clickMobileMenuButton(){
    $("body").on("click", "[data-role='mobile-menu']", function(){
        var mobileHtml = $("[data-model='mobile']").html();
        $(".menu-them-all ul").html(mobileHtml);
    });
}

$(document).ready(function(){
	resizeWindow();
	loadMobile();
	openDialog();
	showAlert();
	closeBandConnectionError();
	dialogFooter();
    errorInterface();

    clickSound();
    showSearchFrag();
    openMenuThemAll();
    notificationManager();
    chatIdicator();
    openAllDialogTypes();
    passwords();
    tabs();
    createTextarea();
    inputHints();
    selectWidget();
    checkJavaScriptEnabled();
    appendUsefulStuffsToDom();
    clickMobileMenuButton();
    openSideBar();
    overFlowDialog();
});
