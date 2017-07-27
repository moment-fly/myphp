//menu
$(document).ready(function(){
  
  $('li.mainlevel').mousemove(function(){
  $(this).find('ul').slideDown();//you can give it a speed
  });
  $('li.mainlevel').mouseleave(function(){
  $(this).find('ul').slideUp("fast");
  });
  
});

$(function(){
    $('.new_add').click(function(){
        if($(this).parent('span').parent('li').find('.new_content').css('display') == 'none'){
            $(this).parent('span').parent('li').find('.new_add').find('img').attr('src','images/index-new/new_cut.jpg')
        }else{
            $(this).parent('span').parent('li').find('.new_add').find('img').attr('src','images/index-new/new_add.jpg')
        }
        $(this).parent('span').parent('li').find('.new_content').slideToggle();
    });
    setTimeout("line_midt_show();",400);
    $('.con_middle').find('.post_midl').hide();
    $('.con_middle').find('.post_midl:lt(3)').fadeIn(1500);
    $(window).scroll(function (){
        var winScroll = $(window).scrollTop();
        if (winScroll > 378) {
            $('.con_middle').find('.post_midl').fadeIn(1500);
        }else if(winScroll > 63){
            $('.con_middle').find('.post_midl:lt(6)').fadeIn(1500);
        }
    });
    $('.post_midl').hover(function(){
        $(this).find('.boxcaption').prev('div').hide();
        $(this).find('.boxcaption').stop().animate({height:"72px",top:"-45px"},function(){
            $(this).prev('div').show();
        });
    },function(){
        $(this).find('.boxcaption').prev('div').hide();
        $(this).find('.boxcaption').stop().animate({height:"0px",top:"27"});
    });
    var init = function(){
        $('.pro_tenone_hover').css({overflow:'hidden',height:'200px'});
    }
    $('.pro_tenone').mouseover(function(){
        $('.one_click').fadeIn('slow');
    });
    $('.pro_tentwo').mouseover(function(){
        $('.two_click').fadeIn('slow');
    });
    $('.pro_tenthree').mouseover(function(){
        $('.three_click').fadeIn('slow');
    });
    $('.pro_tenfour').mouseover(function(){
        $('.four_click').fadeIn('slow');
    });
    $('.pro_tenfive').mouseover(function(){
        $('.five_click').fadeIn('slow');
    });
    $('.pro_tensix').mouseover(function(){
        $('.six_click').fadeIn('slow');
    });
    $('.pro_tenseven').mouseover(function(){
        $('.seven_click').fadeIn('slow');
    });
    $('.pro_teneight').mouseover(function(){
        $('.eight_click').fadeIn('slow');
    });
    $('.pro_tennine').mouseover(function(){
        $('.nine_click').fadeIn('slow');
    });
    $('.pro_tenten').mouseover(function(){
        $('.ten_click').fadeIn('slow');
    });
    $('.pro_tenone_hover').mouseleave(function(){
        $('.show_more').css('display','block');
        init();
        $(this).fadeOut();
    });

    $('.pro_listm').find('h2').click(function(){
        if($(this).next('ul').css('display') == 'none'){
            $(this).find('img').attr('src','images/index-new/product_bottomhover.png');
        }else{
            $(this).find('img').attr('src','images/index-new/product_bottom.png');
        }
        $(this).next('ul').slideToggle();

    });
    $('.pro_listm').mouseleave(function(){
        $(this).find('img').attr('src','images/index-new/product_bottom.png');
        $(this).find('ul').slideUp();
    });


    $('.Pack_right').height($('.Process_rightm0').height());
    $('.package_left').find('li').click(function(){
        $(this).addClass('package_one fullment_one').siblings().removeClass('package_one fullment_one');
        if($(this).index() == 1){
            $('.Pack_right').height($('.Process_rightm1').height());
            $('.Process_rightm1').stop().animate({top:'0px'},'slow');
            $('.Process_rightm0').stop().animate({top:'-791px'},'slow');
        }else{
            $('.Pack_right').height($('.Process_rightm0').height());
            $('.Process_rightm0').stop().animate({top:'0px'},'slow');
            $('.Process_rightm1').stop().animate({top:'1951px'},'slow');
        }

    });
    $('.Process_left').find('li').click(function(){
        var index_old = $('.Process_one').index('.Process_left li');
        $(this).removeClass('Process_onehover').addClass('Process_one').siblings().addClass('Process_onehover').removeClass('Process_one');
        var index = $(this).index();
        if(index == index_old){
            return false;
        }
        if(index > index_old){
            $('.Process_rightm').eq(index).stop().animate({top:'0px'},'slow');
            $('.Process_rightm').eq(index_old).stop().animate({top:'-500px'},'slow',function(){
                $('.Process_rightm').eq(index_old).css({top:'500px'})
            });
        }else{
            $('.Process_rightm').eq(index).css({top:'-500px'});
            $('.Process_rightm').eq(index).stop().animate({top:'0px'},'slow');
            $('.Process_rightm').eq(index_old).stop().animate({top:'500px'},'slow');
        }
    });
});
function show_more(){
    $('.show_more').css('display','none');
    $('.pro_tenone_hover').css({overflow:'visible',height:'auto'});
}
function line_midt_show(){
    $('.line_0l').css('display','block');
    $('.line_02').css('display','block');
    $('.line_03').css('display','block');
    $('.line_04').css('display','block');
    $('.line_05').css('display','block');
    $('.line_06').css('display','block');
    $('.line_07').css('display','block');
	$('.line_08').css('display','block');
	$('.line_09').css('display','block');
	$('.line_10').css('display','block');
	$('.line_11').css('display','block');
	$('.line_12').css('display','block');
    $('.line_0l').animate({top:"60px"},1500);
    $('.line_02').animate({top:"95px"},1500);
    $('.line_03').animate({top:"205px"},1500);
    $('.line_04').animate({top:"150px"},1500);
    $('.line_05').animate({top:"60px"},1500);
    $('.line_06').animate({top:"80px"},1500);
    $('.line_07').animate({top:"260px"},1500);
	$('.line_08').animate({top:"160px"},1500);
	$('.line_09').animate({top:"80px"},1500);
	$('.line_10').animate({top:"90px"},1500);
	$('.line_11').animate({top:"80px"},1500);
	$('.line_12').animate({top:"195px"},1500);
}