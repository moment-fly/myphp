/**
 **		公用滚动方法 
 **     支持定时自动轮播、前后轮播、单独点击轮播
 **/
$(function(){
	
	$('.jobs_left').css('top',$('.jobs_left').height());
	$('.jobs_left').eq(0).css('top','0px');
	$(".about_jobsleft li").bind('click',function(){
		var T = $(this);
		if(T.attr("id")=="jobs_li") return false;
		J2ROLLING_ANIMATION.st({
			findObject : T,	//当前点击对象 默认写
			main : $(".right_sign"),	//滚动目标容器窗口对象
			pagSource : $(".jobs_left li"),	//切换按钮对象
			className : "jobs_li",		//选中的样式
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
					_list = M.find('.jobs_left'),
					p2n = 1;
					_prevDown.attr('id','');
					_prevDown.find('a').attr('id','');
				if(O){
					if(_thisIndex==-1) _thisIndex=_list.size()-1;
					if(_thisIndex==_list.size()) _thisIndex=0;
					P.eq(_thisIndex).attr('id',C);
				}else{
					T.attr('id',C);
					T.find('a').attr('id','jobs_radio');	
				}
				if(T.attr("id")=="prev" || _thisIndex<_prevIndex) p2n = false;
				if((T.attr("id")=="next" || _thisIndex>_prevIndex)&&T.attr("id")!="prev") p2n = true;
				
				!p2n ? _list.eq(_thisIndex).css("top",-M.height()) : '';
				
				_list.eq(_prevIndex).animate({top:p2n ? -M.height() : M.height()},S,function(){
					$(this).css('top',$(this).height());
					J2Time = true;
				});
				_list.eq(_thisIndex).animate({top:"0px"},S);
		},
		start : function(){
			$(".about_jobsleft li,.jobs_left").mouseover(function(){
				window.clearInterval(J2SETTIME);																			   
			}).mouseout(function(){
				J2ROLLING_ANIMATION.time();
			});
		},
		time : function(){
			J2SETTIME = window.setInterval(function(){
				//小按钮位置
				var num = $(".about_jobsleft li[id='jobs_li']").index(),
					//轮播内容对象集合
					_list = $(".jobs_left");
					console.log($(".about_jobsleft li[id='jobs_li']"));
				_list.eq(num).animate({"top":-$(".jobs_left").height()},"slow",function(){
					$(this).css('top',$(this).height());
					$('.about_jobsleft li').attr('id','').eq(num).attr('id','jobs_li');
					$(".about_jobsleft li").find('a').attr('id','');
					$(".about_jobsleft li").eq(num).find('a').attr('id','jobs_radio');
				});	
				
				num++;
				console.log($(".about_jobsleft li[id='jobs_li']"));
				if(num==_list.size()){
					num=0;
				}
				_list.eq(num).animate({"top":"0px"},"slow");		
			},2000);
		}
	};
	$(".scroll_left,.scroll_right").click(function(){
		//$(this).blur();				  
	});
	
	//J2ROLLING_ANIMATION.init();	//是否开启自动轮播
})