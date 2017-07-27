/**
 **		公用滚动方法 
 **     支持定时自动轮播、前后轮播、单独点击轮播
 **/
$(function(){
	$('.con_midm').css('left',$('.con_midm').width());
    $('.scroll_left').hover(function(){
        $(this).find('img').attr('src','images/index-new/express_lefthover.png')
    },function(){
        $(this).find('img').attr('src','images/index-new/express_left.png')
    });
    $('.scroll_right').hover(function(){
        $(this).find('img').attr('src','images/index-new/express_righthover.png')
    },function(){
        $(this).find('img').attr('src','images/index-new/express_right.png')
    });
	$('.con_midm').eq(0).css('left','0px');
	$(".con_midt li,.scroll div").bind('click',function(){
		var T = $(this);
		if(T.attr("id")=="express_radio") return false;
		J2ROLLING_ANIMATION.st({
			findObject : T,	//当前点击对象 默认写
			main : $(".flexslider"),	//滚动目标容器窗口对象
			pagSource : $(".con_midt li"),	//切换按钮对象
			className : "express_radio",		//选中的样式
			duration : "slow",		//滚动速度 和jquery速度一致
			on : $(this)[0].tagName=="DIV" ? true : false		//用于判断是否开启无限滚动 or 来回切换
		});
		return false;
	});
	
	var J2SETTIME="", J2Time=true,J2ROLLING_ANIMATION = {
		init : function(){
			this.start();
			this.time();	
		},
		st : function(o){
			if(J2Time){
				this.animate(o.findObject,o.main,o.className,o.duration,o.pagSource,o.on);
				J2Time = false;
			}
		},
		animate : function(T,M,C,S,P,O){
				var _prevDown = O ? P.parent().find("*[id='"+C+"']") : T.parent().find(T[0].tagName+"[id='"+C+"']"),	
					_prevIndex = _prevDown.index(),
					_thisIndex = O ? (T.attr("id")=="next" ? _prevIndex+1 : _prevIndex-1) : T.index(),
					_list = M.find('.con_midm'),
					p2n = 1;
				_prevDown.attr('id','');
				if(O){
					if(_thisIndex==-1) _thisIndex=_list.size()-1;
					if(_thisIndex==_list.size()) _thisIndex=0;
					P.eq(_thisIndex).attr('id',C);
				}else{
					T.attr('id',C);
				}
				if(T.attr("id")=="prev" || _thisIndex<_prevIndex) p2n = false;
				if((T.attr("id")=="next" || _thisIndex>_prevIndex)&&T.attr("id")!="prev") p2n = true;
				
				!p2n ? _list.eq(_thisIndex).css("left",-M.width()) : '';
				
				_list.eq(_prevIndex).animate({left:p2n ? -M.width() : M.width()},S,function(){
					$(this).css('left',$(this).width());
					//$(this).removeAttr("style");
					/*
					if(p2n){
						$(this).css("display",'none');
						$(this).parent().children().eq(_thisIndex).css("display",'block');
						$(this).parent().children().eq(_thisIndex+1).css("display",'block');
					}else{
						$(this).css("display",'none');
						$(this).parent().children().eq(_thisIndex).css("display",'block');
					}*/
					J2Time = true;
				});
				_list.eq(_thisIndex).animate({left:"0px"},S);
		},
		start : function(){
			$(".con_midt li,.con_midm").mouseover(function(){
				window.clearInterval(J2SETTIME);																			   
			}).mouseout(function(){
				J2ROLLING_ANIMATION.time();
			});
		},
		time : function(){
			J2SETTIME = window.setInterval(function(){
				//小按钮位置
				var num = $(".con_midt li[id='express_radio']").index(),
					//轮播内容对象集合
					_list = $(".con_midm");
				_list.eq(num).animate({"left":-$(".con_midm").width()},"slow",function(){
					//$(this).removeAttr("style");	
					$(this).css('left',$(this).width());
					$(".con_midt li").attr('id','').eq(num).attr('id','express_radio');
					//$(this).css("display",'none');
					//$(this).parent().children().eq(num).css("display",'block');
				});	
				num++;
				if(num==_list.size()){
					num=0;
				}
				_list.eq(num).animate({"left":"0px"},"slow");		
			},4000);
		}
	};
	$(".scroll_left,.scroll_right").click(function(){
		$(this).blur();				  
	});
	
	J2ROLLING_ANIMATION.init();	//是否开启自动轮播
})