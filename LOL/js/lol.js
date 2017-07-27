$(function(){
	$(".top").hover(function(){
		$(".hove").show();
	},function(){
		$(".hove").hide();
	})
	$(".hove").hover(function(){
		$(".hove").show();
	},function(){
		$(".hove").hide();
	})
	$(".lun").append($(".lun").html())
	var len = $(".lun img").length;
	var wid = $(".out").width();
	$(".lun").width(len*wid);
	$(".lun").css("left",-len/2*wid);
	time = setInterval(function(){ 
		li = parseInt($('.lun').css('left'))-wid; 
		$('.lun').animate({"left":li},500,function(){
			if(li == (1-len)*wid){
				$('.lun').css("left",(1-len/2)*wid);
			}
		});
		var num = parseInt($('.lun').css('left'))
		if(-num/wid == len-1 || -num/wid == len/2-1){
			$(".la1").css("background", "#36AB87");
			$(".la2").css("background", "#efefef");
			$(".la3").css("background", "#efefef");
			$(".la4").css("background", "#efefef");
			$(".la5").css("background", "#efefef");
			$(".la6").css("background", "#efefef");	
		}
		if(num/wid == -len/2){
			$(".la2").css("background", "#36AB87");
			$(".la1").css("background", "#efefef");
			$(".la3").css("background", "#efefef");
			$(".la4").css("background", "#efefef");
			$(".la5").css("background", "#efefef");
			$(".la6").css("background", "#efefef");	
		}
		if(num/wid == -len/2-1){
			$(".la3").css("background", "#36AB87");
			$(".la1").css("background", "#efefef");
			$(".la2").css("background", "#efefef");
			$(".la4").css("background", "#efefef");
			$(".la5").css("background", "#efefef");
			$(".la6").css("background", "#efefef");	
		}
		if(num/wid == -len/2-2){
			$(".la4").css("background", "#36AB87");
			$(".la1").css("background", "#efefef");
			$(".la2").css("background", "#efefef");
			$(".la3").css("background", "#efefef");
			$(".la5").css("background", "#efefef");
			$(".la6").css("background", "#efefef");	
		}
		if(num/wid == -len/2-3){
			$(".la5").css("background", "#36AB87");
			$(".la1").css("background", "#efefef");
			$(".la2").css("background", "#efefef");
			$(".la4").css("background", "#efefef");
			$(".la3").css("background", "#efefef");
			$(".la6").css("background", "#efefef");	
		}
	},2000)
	$(".bigl").hover(function(){
		clearInterval(time);
		},function(){
			time = setInterval(function(){
				li = parseInt($('.lun').css('left'))-wid; 
				$('.lun').animate({"left":li},500,function(){
					if(li == (1-len)*wid){
						$('.lun').css("left",(1-len/2)*wid);
					}
				});
				var num = parseInt($('.lun').css('left'))
		if(-num/wid == len-1 || -num/wid == len/2-1){
			$(".la1").css("background", "#36AB87");
			$(".la2").css("background", "#efefef");
			$(".la3").css("background", "#efefef");
			$(".la4").css("background", "#efefef");
			$(".la5").css("background", "#efefef");
			$(".la6").css("background", "#efefef");	
		}
		if(num/wid == -len/2 || -num/wid == 0){
			$(".la2").css("background", "#36AB87");
			$(".la1").css("background", "#efefef");
			$(".la3").css("background", "#efefef");
			$(".la4").css("background", "#efefef");
			$(".la5").css("background", "#efefef");
			$(".la6").css("background", "#efefef");	
		}
		if(num/wid == -len/2-1 || -num/wid == 1){
			$(".la3").css("background", "#36AB87");
			$(".la1").css("background", "#efefef");
			$(".la2").css("background", "#efefef");
			$(".la4").css("background", "#efefef");
			$(".la5").css("background", "#efefef");
			$(".la6").css("background", "#efefef");	
		}
		if(num/wid == -len/2-2 || -num/wid == 2){
			$(".la4").css("background", "#36AB87");
			$(".la1").css("background", "#efefef");
			$(".la2").css("background", "#efefef");
			$(".la3").css("background", "#efefef");
			$(".la5").css("background", "#efefef");
			$(".la6").css("background", "#efefef");	
		}
		if(num/wid == -len/2-3 || -num/wid == 3){
			$(".la5").css("background", "#36AB87");
			$(".la1").css("background", "#efefef");
			$(".la2").css("background", "#efefef");
			$(".la4").css("background", "#efefef");
			$(".la3").css("background", "#efefef");
			$(".la6").css("background", "#efefef");	
		}
			},2000)
	})
	$(".la1").hover(function(){
		$('.lun').css("left",0)
		$(".la1").css("background", "#36AB87");
		$(".la2").css("background", "#efefef");
		$(".la3").css("background", "#efefef");
		$(".la4").css("background", "#efefef");
		$(".la5").css("background", "#efefef");	
	})
	$(".la2").hover(function(){
		$('.lun').css("left",-780)
		$(".la2").css("background", "#36AB87");
		$(".la1").css("background", "#efefef");
		$(".la3").css("background", "#efefef");
		$(".la4").css("background", "#efefef");
		$(".la5").css("background", "#efefef");
	})
	$(".la3").hover(function(){
		$('.lun').css("left",-780*2)
		$(".la3").css("background", "#36AB87");
		$(".la1").css("background", "#efefef");
		$(".la2").css("background", "#efefef");
		$(".la4").css("background", "#efefef");
		$(".la5").css("background", "#efefef");
	})
	$(".la4").hover(function(){
		$('.lun').css("left",-780*3)
		$(".la4").css("background", "#36AB87");
		$(".la1").css("background", "#efefef");
		$(".la2").css("background", "#efefef");
		$(".la3").css("background", "#efefef");
		$(".la5").css("background", "#efefef");
	})
	$(".la5").hover(function(){
		$('.lun').css("left",-780*4)
		$(".la5").css("background", "#36AB87");
		$(".la1").css("background", "#efefef");
		$(".la2").css("background", "#efefef");
		$(".la4").css("background", "#efefef");
		$(".la3").css("background", "#efefef");
	})
	$(".tabp1").hover(function(){
		$(".tabp1").css("border-color","#00ab88")
		$(".tab1").show()
		$(".tabp2").css("border-color","#666")
		$(".tabp3").css("border-color","#666")
		$(".tabp4").css("border-color","#666")
		$(".tabp5").css("border-color","#666")
		$(".tabp6").css("border-color","#666")
		$(".tab2").hide()
		$(".tab3").hide()
		$(".tab4").hide()
		$(".tab5").hide()
		$(".tab6").hide()
	})
	$(".tabp2").hover(function(){
		$(".tabp2").css("border-color","#00ab88")
		$(".tabp1").css("border-color","#666")
		$(".tabp3").css("border-color","#666")
		$(".tabp4").css("border-color","#666")
		$(".tabp5").css("border-color","#666")
		$(".tabp6").css("border-color","#666")
		$(".tab2").show()	
		$(".tab1").hide()
		$(".tab3").hide()
		$(".tab4").hide()
		$(".tab5").hide()
		$(".tab6").hide()
	})
	$(".tabp3").hover(function(){
		$(".tabp3").css("border-color","#00ab88")
		$(".tabp2").css("border-color","#666")
		$(".tabp1").css("border-color","#666")
		$(".tabp4").css("border-color","#666")
		$(".tabp5").css("border-color","#666")
		$(".tabp6").css("border-color","#666")
		$(".tab3").show()	
		$(".tab1").hide()
		$(".tab2").hide()
		$(".tab4").hide()
		$(".tab5").hide()
		$(".tab6").hide()
	})
	$(".tabp4").hover(function(){
		$(".tabp4").css("border-color","#00ab88")
		$(".tabp2").css("border-color","#666")
		$(".tabp3").css("border-color","#666")
		$(".tabp1").css("border-color","#666")
		$(".tabp5").css("border-color","#666")
		$(".tabp6").css("border-color","#666")
		$(".tab4").show()	
		$(".tab1").hide()
		$(".tab3").hide()
		$(".tab2").hide()
		$(".tab5").hide()
		$(".tab6").hide()
	})
	$(".tabp5").hover(function(){
		$(".tabp5").css("border-color","#00ab88")
		$(".tabp2").css("border-color","#666")
		$(".tabp3").css("border-color","#666")
		$(".tabp4").css("border-color","#666")
		$(".tabp1").css("border-color","#666")
		$(".tabp6").css("border-color","#666")
		$(".tab5").show()	
		$(".tab1").hide()
		$(".tab3").hide()
		$(".tab4").hide()
		$(".tab2").hide()
		$(".tab6").hide()
	})
	$(".tabp6").hover(function(){
		$(".tabp6").css("border-color","#00ab88")
		$(".tabp2").css("border-color","#666")
		$(".tabp3").css("border-color","#666")
		$(".tabp4").css("border-color","#666")
		$(".tabp5").css("border-color","#666")
		$(".tabp1").css("border-color","#666")
		$(".tab6").show()	
		$(".tab1").hide()
		$(".tab3").hide()
		$(".tab4").hide()
		$(".tab5").hide()
		$(".tab2").hide()
	})
	$(".tab1").hover(function(){
		$(".tab1").show()	
	})
	$(".bp p").hover(function(){
		$(".bp p").eq($(this).index()).css("border-color","#00ab88").siblings().css("border-color","#ebecec");

		$(".tabf").eq($(this).index()).css("display","block").siblings(".tabf").css("display","none");
	})
	$(".ri1 a").hover(function(){
		$(".ri1 a").eq($(this).index()).css("border-color","#00ab88").siblings().css("border-color","#ebecec");

		$(".tabla").eq($(this).index()).css("display","block").siblings(".tabla").css("display","none");
	})
	$(".xiong p").hover(function(){
		$(".xiong p").eq($(this).index()).css("border-color","#00ab88").siblings().css("border-color","#ebecec");
		
		$(".ying").eq($(this).index()).css("display","block").siblings(".ying").css("display","none");
	})
})