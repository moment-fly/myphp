
	function hz6d$(id)
	{
		return document.getElementById(id) ? document.getElementById(id) : null;
	}
	
	var hz6d_referer = '&referer=' + window.encodeURIComponent(window.location.href); //当前访问页面
	var kf_success=1; var kftype=2;
	var powered_by_53kf_url = 'http://www.53kf.com/53kfkefu.html?yx_from=53KF02',
			powered_by_53kf_txt = 'Powered by 53KF';
	function hz6d_createScript(id, url){
		var oldS=hz6d$(id);
		if(oldS!=null) oldS.parentNode.removeChild(oldS);
		var t=document.createElement('script');
		t.src = url;
		t.type = 'text/javascript';
		t.id = id;
		document.getElementsByTagName('head')[0].appendChild(t);
	}
	
	(function(window, undefined) {
		// window.open 方法重写 
		// 支持ie/ff/chrome/safari/opera 
		var _open = window.open;
		window.open = function(sURL, sName, sFeatures, bReplace) {
			if (sURL == undefined) {
				sURL = ''
			}
			if (sName == undefined) {
				sName = ""
			}
			if (sFeatures == undefined) {
				sFeatures = ""
			}
			if (bReplace == undefined) {
				bReplace = false
			}
			if (/webCompany.php|webClientMin.php/.test(sURL)) {
				sURL += '&timeStamp=' + new Date().getTime();
			} else if ('' != '') {
				var _zdyurl = '';
				if (sURL.indexOf(_zdyurl) > -1) {
					sURL += '&timeStamp=' + new Date().getTime();
				}
			}
			sURL = sURL.replace('&referer={hz6d_referer}',hz6d_referer);
			var win = _open(sURL, sName, sFeatures, bReplace);
			return win;
		}
	})(window);
	// 获取cookie值 
	function hz6d_getCookie(name)
	{
		var offset = document.cookie.indexOf(name + "=");
		if (offset != -1)
		{
			offset += name.length + 1;
			var end = document.cookie.indexOf(";", offset);
			if (end == -1)
			{
				end = document.cookie.length;
			}
			return unescape(document.cookie.substring(offset, end));
		}
		else
		{
			return "";
		}
	}

	function hz6d_setCookie(name,value,expires,path,domain,secure)
	{
		var argv = arguments;
		var argc = arguments.length;
		var expires = (argc > 2) ? argv[2] : null;
		var path = (argc > 3) ? argv[3] : '/';
		var domain = (argc > 4) ? argv[4] : null;
		var secure = (argc > 5) ? argv[5] : false;
		document.cookie = name + "=" + escape (value) +
		((expires == null) ? "" : ("; expires=" + expires.toGMTString())) +
		((path == null) ? "" : ("; path=" + path)) +
		((domain == null) ? "" : ("; domain=" + domain)) +
		((secure == true) ? "; secure" : "");
	}
	// 获取访问的入口来源页面:搜索引擎/外部链接/直接输入  
	var hz6d_from_page = hz6d_getCookie("53kf_70742861_keyword");
	var kf_70742861_keyword_ok = hz6d_getCookie("kf_70742861_keyword_ok");
	if (kf_70742861_keyword_ok != 1)
	{
		hz6d_from_page = document.referrer;
	}
	hz6d_setCookie("53kf_70742861_keyword",hz6d_from_page);
	hz6d_setCookie("kf_70742861_keyword_ok",1);
	hz6d_from_page = "&keyword=" + escape(hz6d_from_page);
	
	function hz6d_html_replace(html)
	{
		var pattern = /{hz6d_keyword}/gim;
		var str = hz6d_from_page + "&tfrom=1";
		var hz6d_html = html.replace(pattern, str);
		return hz6d_html;
	}

	// has defined <!DOCTYPE... > 

	function hasdoctype()
  {
		if (document.compatMode == "BackCompat")
		{
			ret = false;
		}
		else
		{
			ret = true;
		}
		return ret;
	}

	function detectBrowser()
	{
		var ret = "ie6"; // default
		var user_agent = navigator.userAgent;
		if (user_agent.indexOf("compatible") > -1)
		{
			if (user_agent.indexOf("MSIE 6.0") > -1)
			{
				ret = "ie6";
			}
			else if (user_agent.indexOf("MSIE 7.0") > -1)
			{
				ret = "ie7";
			}
			else if (user_agent.indexOf("MSIE 8.0") > -1)
			{
				ret = "ie8";
			}
			if (user_agent.indexOf("360") > -1)
			{
				ret = "360";
			}
		}
		else if (user_agent.indexOf("Gecko") > -1)
		{
			ret = "firefox";
		}
		if ("" == "TheWorld")
		{
			ret = "TheWorld";
		}
		return ret;
	}
	// 间距小于步进，则移动间距的距离 

	function smoothMove(start, end)
	{
		var step = Math.abs(end - start);
		var forword = end - start;
		if (step > 2)
		{
			step = Math.ceil(step * 0.2) * (forword / Math.abs(forword));
		}
		else
		{
			step = step * (forword / Math.abs(forword));
		}
		posi = start + step;
		if (step > 0)
		{
			if (posi > end) posi = end;
		}
		else
		{
			if (posi < end) posi = end;
		}
		return posi;
	}
	
	var hasdoctype = hasdoctype();
	var browser = detectBrowser();
	// 点击图标设置变量 

	function setIsinvited()
	{
		try
		{
			onliner_zdfq = 2;
			if (acc_autotype == 3)
			{
				document.cookie = "onliner_zdfq70742861=" + onliner_zdfq;
			}
		}
		catch (e)
		{}
	}
	var onliner_zdfq = hz6d_getCookie("onliner_zdfq70742861"); // onliner_zdfq: 0.初始值 2.点击接受 3.点击拒绝 
	if (onliner_zdfq == "")
	{
		onliner_zdfq = 0;
		document.cookie = "onliner_zdfq70742861=" + onliner_zdfq;
	}
	var hz6d_kf_type = 1;
	var hz6d_pos_model = 1;
	var hz6d_hidden = 0;
	var hz6d_close_icon = 0;
	// 加载ivt.php，即中间的接受邀请层 
	if (!hz6d$("ivt_script"))
		document.write("<scr"+"ipt src='http://www22.53kf.com/kf_ivt.php?arg=sfcservice&test_do=&style=1&isonline=1&kfonline=1&lang=zh-cn&resize=yes&charset=gbk&kflist=on&kf=0659,0694,0832,881,0573,899,sz18,sz22,hw03,sz10,0766,0986,sz01,sz15,sz03,sz05,sz06,sz07,sz08,sz09,sz13,sz02,gz03,gz04,gz05,gz06,gz07,gz02,gz09,gz01,sh01,hz03,hz02,hz01,sh05,sh02&zdkf_type=1"+ hz6d_referer + hz6d_from_page + "&lytype=0&tpl_name=crystal_blue&tpl_width=703&tpl_height=473' type='text/javascript' id='ivt_script'></scr"+"ipt>");kftype=1;				function _createIconDivMain()
				{
					if (hz6d$(this.config["iconDiv"]) == null)
					{
						var id = this.config["id"];
						setTimeout('kf_icons[' + id + '].createIconDivMain()', 500);
						return;
					}
					if (hz6d$(this.config["iconDiv"]).innerHTML.indexOf('.gif') != -1 || hz6d$(this.config["iconDiv"]).innerHTML.indexOf('.jpg') != -1 || hz6d$(this.config["iconDiv"]).innerHTML.indexOf('.swf') != -1) return;
					var html = "";
					html += "<iframe style='position:absolute;z-index:7998;width:0px;height:0px;top:0px;left:0px;' frameborder='0' ></iframe>";
					var kflist = "<div style=\"width:260px;font-size: 12px;color:#000;\"><table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" ><tr><td width=\"25\" height=\"27\" background=\"http://www22.53kf.com/img/kflist/new_blue/new_tb.gif\">&nbsp;</td><td valign=\"top\" background=\"http://www22.53kf.com/img/kflist/new_blue/new_bg2.gif\" style=\"padding-left: 4px;padding-top: 7px; \"><div style=\"font-size: 12px; color:#fff; width:191px;white-space: nowrap;text-align: left;overflow:hidden;\" title=\"&#19994;&#21153;&#21672;&#35810;\"><b>&#19994;&#21153;&#21672;&#35810;</b></div></td><td width=\"32\"valign=\"top\"background=\"http://www22.53kf.com/img/kflist/new_blue/new_bg3.gif\"></td></tr></table><div style=\"border: 1px solid #5779BC;background-color:#FFF;background: url(http://www22.53kf.com/img/kflist/new_blue/new_zbg.gif) center top repeat-y;padding: 2px;\"><table width=\"254\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"margin-bottom: 2px;\" ><tr onclick=\"hishow('523fd4ca4383ad30cd00080b','img/kflist/new_blue/new_')\"><td height=\"22\" align=\"left\" valign=\"top\" background=\"http://www22.53kf.com/img/kflist/new_blue/new_bg.gif\" style=\"cursor: pointer;\"><div style=\"float: left;height: 22px;width: 19px;text-align: left;\"><img src=\"http://www22.53kf.com/img/kflist/new_blue/new_arrow2.gif\" width=\"14\" height=\"22\" id=\"arrow523fd4ca4383ad30cd00080b\" /></div><div style=\"float: left;width:228px;padding-top: 4px;font-size: 12px;line-height: 14px;color:#06354D;white-space: nowrap;overflow: hidden;\" title=\"&#26410;&#21457;&#21253;&#35065;&#26597;&#35810;(before shipment)[0]\">&#26410;&#21457;&#21253;&#35065;&#26597;&#35810;(before shipment)[0]</div><div style=\"float: right;height: 22px;width: 6px;\"><img src=\"http://www22.53kf.com/img/kflist/new_blue/new_youbg.gif\"></div></td></tr><tr id=\"hsdiv523fd4ca4383ad30cd00080b\" style=\"display:none\"><td align=\"center\"><table width=\"246\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"margin-bottom: 4px;\"></table></td></tr></table><table width=\"254\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"margin-bottom: 2px;\" ><tr onclick=\"hishow('523fd4d34383ad305d00081d','img/kflist/new_blue/new_')\"><td height=\"22\" align=\"left\" valign=\"top\" background=\"http://www22.53kf.com/img/kflist/new_blue/new_bg.gif\" style=\"cursor: pointer;\"><div style=\"float: left;height: 22px;width: 19px;text-align: left;\"><img src=\"http://www22.53kf.com/img/kflist/new_blue/new_arrow2.gif\" width=\"14\" height=\"22\" id=\"arrow523fd4d34383ad305d00081d\" /></div><div style=\"float: left;width:228px;padding-top: 4px;font-size: 12px;line-height: 14px;color:#06354D;white-space: nowrap;overflow: hidden;\" title=\"&#24050;&#21457;&#21253;&#35065;&#26597;&#35810;(after shipment)[2]\">&#24050;&#21457;&#21253;&#35065;&#26597;&#35810;(after shipment)[2]</div><div style=\"float: right;height: 22px;width: 6px;\"><img src=\"http://www22.53kf.com/img/kflist/new_blue/new_youbg.gif\"></div></td></tr><tr id=\"hsdiv523fd4d34383ad305d00081d\" style=\"display:none\"><td align=\"center\"><table width=\"246\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"margin-bottom: 4px;\"><tr onclick='setIsinvited();window.open(\"http://www22.53kf.com/webCompany.php?arg=sfcservice&style=1&language=zh-cn&charset=gbk&lytype=0&referer={hz6d_referer}{hz6d_keyword}&tpl=crystal_blue&kf=881&zdkf_type=1&kflist=off\",\"_blank\",\"height=473,width=703,top=200,left=200,status=yes,toolbar=no,menubar=no,resizable=yes,scrollbars=no,location=no,titlebar=no\");return false;'><td height=\"24\" style=\"background-image: url(http://www22.53kf.com/img/kflist/new_blue/new_bgx.gif);background-repeat: repeat-x;background-position: right 22px;\"><div style=\"width:214px;float: left;line-height: 14px;padding-top: 3px;color:#4267B0;font-size: 12px;cursor: pointer;text-align: left;white-space: nowrap;overflow: hidden;\" title=\"Rachel (CS 881)\">Rachel (CS 881)</div><div style=\"width: 30px;float: right;line-height: 14px;padding-top: 3px;color:#DB0000;font-size: 12px;cursor: pointer;text-align: right;\"><span style=\"color:#FF6000;\">&#21672;&#35810;</span></div></td></tr><tr onclick='setIsinvited();window.open(\"http://www22.53kf.com/webCompany.php?arg=sfcservice&style=1&language=zh-cn&charset=gbk&lytype=0&referer={hz6d_referer}{hz6d_keyword}&tpl=crystal_blue&kf=0573&zdkf_type=1&kflist=off\",\"_blank\",\"height=473,width=703,top=200,left=200,status=yes,toolbar=no,menubar=no,resizable=yes,scrollbars=no,location=no,titlebar=no\");return false;'><td height=\"24\" style=\"background-image: url(http://www22.53kf.com/img/kflist/new_blue/new_bgx.gif);background-repeat: repeat-x;background-position: right 22px;\"><div style=\"width:214px;float: left;line-height: 14px;padding-top: 3px;color:#4267B0;font-size: 12px;cursor: pointer;text-align: left;white-space: nowrap;overflow: hidden;\" title=\"Cinta (CS 573)\">Cinta (CS 573)</div><div style=\"width: 30px;float: right;line-height: 14px;padding-top: 3px;color:#DB0000;font-size: 12px;cursor: pointer;text-align: right;\"><span style=\"color:#FF6000;\">&#21672;&#35810;</span></div></td></tr></table></td></tr></table><table width=\"254\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"margin-bottom: 2px;\" ><tr onclick=\"hishow('5359d5c44383ad39f7000005','img/kflist/new_blue/new_')\"><td height=\"22\" align=\"left\" valign=\"top\" background=\"http://www22.53kf.com/img/kflist/new_blue/new_bg.gif\" style=\"cursor: pointer;\"><div style=\"float: left;height: 22px;width: 19px;text-align: left;\"><img src=\"http://www22.53kf.com/img/kflist/new_blue/new_arrow2.gif\" width=\"14\" height=\"22\" id=\"arrow5359d5c44383ad39f7000005\" /></div><div style=\"float: left;width:228px;padding-top: 4px;font-size: 12px;line-height: 14px;color:#06354D;white-space: nowrap;overflow: hidden;\" title=\"&#28145;&#22323;&#12289;&#28207;&#28595;&#21488;&#21450;&#28023;&#22806;&#22320;&#21306;&#23458;&#25143;[3]\">&#28145;&#22323;&#12289;&#28207;&#28595;&#21488;&#21450;&#28023;&#22806;&#22320;&#21306;&#23458;&#25143;[3]</div><div style=\"float: right;height: 22px;width: 6px;\"><img src=\"http://www22.53kf.com/img/kflist/new_blue/new_youbg.gif\"></div></td></tr><tr id=\"hsdiv5359d5c44383ad39f7000005\" style=\"display:none\"><td align=\"center\"><table width=\"246\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"margin-bottom: 4px;\"><tr onclick='setIsinvited();window.open(\"http://www22.53kf.com/webCompany.php?arg=sfcservice&style=1&language=zh-cn&charset=gbk&lytype=0&referer={hz6d_referer}{hz6d_keyword}&tpl=crystal_blue&kf=sz10&zdkf_type=1&kflist=off\",\"_blank\",\"height=473,width=703,top=200,left=200,status=yes,toolbar=no,menubar=no,resizable=yes,scrollbars=no,location=no,titlebar=no\");return false;'><td height=\"24\" style=\"background-image: url(http://www22.53kf.com/img/kflist/new_blue/new_bgx.gif);background-repeat: repeat-x;background-position: right 22px;\"><div style=\"width:214px;float: left;line-height: 14px;padding-top: 3px;color:#4267B0;font-size: 12px;cursor: pointer;text-align: left;white-space: nowrap;overflow: hidden;\" title=\"&#28145;&#22323;&#38144;&#21806;10\">&#28145;&#22323;&#38144;&#21806;10</div><div style=\"width: 30px;float: right;line-height: 14px;padding-top: 3px;color:#DB0000;font-size: 12px;cursor: pointer;text-align: right;\"><span style=\"color:#FF6000;\">&#21672;&#35810;</span></div></td></tr><tr onclick='setIsinvited();window.open(\"http://www22.53kf.com/webCompany.php?arg=sfcservice&style=1&language=zh-cn&charset=gbk&lytype=0&referer={hz6d_referer}{hz6d_keyword}&tpl=crystal_blue&kf=sz22&zdkf_type=1&kflist=off\",\"_blank\",\"height=473,width=703,top=200,left=200,status=yes,toolbar=no,menubar=no,resizable=yes,scrollbars=no,location=no,titlebar=no\");return false;'><td height=\"24\" style=\"background-image: url(http://www22.53kf.com/img/kflist/new_blue/new_bgx.gif);background-repeat: repeat-x;background-position: right 22px;\"><div style=\"width:214px;float: left;line-height: 14px;padding-top: 3px;color:#4267B0;font-size: 12px;cursor: pointer;text-align: left;white-space: nowrap;overflow: hidden;\" title=\"&#28145;&#22323;&#38144;&#21806;12\">&#28145;&#22323;&#38144;&#21806;12</div><div style=\"width: 30px;float: right;line-height: 14px;padding-top: 3px;color:#DB0000;font-size: 12px;cursor: pointer;text-align: right;\"><span style=\"color:#FF6000;\">&#21672;&#35810;</span></div></td></tr><tr onclick='setIsinvited();window.open(\"http://www22.53kf.com/webCompany.php?arg=sfcservice&style=1&language=zh-cn&charset=gbk&lytype=0&referer={hz6d_referer}{hz6d_keyword}&tpl=crystal_blue&kf=0986&zdkf_type=1&kflist=off\",\"_blank\",\"height=473,width=703,top=200,left=200,status=yes,toolbar=no,menubar=no,resizable=yes,scrollbars=no,location=no,titlebar=no\");return false;'><td height=\"24\" style=\"background-image: url(http://www22.53kf.com/img/kflist/new_blue/new_bgx.gif);background-repeat: repeat-x;background-position: right 22px;\"><div style=\"width:214px;float: left;line-height: 14px;padding-top: 3px;color:#4267B0;font-size: 12px;cursor: pointer;text-align: left;white-space: nowrap;overflow: hidden;\" title=\"&#40857;&#23703;&#38144;&#21806;01\">&#40857;&#23703;&#38144;&#21806;01</div><div style=\"width: 30px;float: right;line-height: 14px;padding-top: 3px;color:#DB0000;font-size: 12px;cursor: pointer;text-align: right;\"><span style=\"color:#FF6000;\">&#21672;&#35810;</span></div></td></tr></table></td></tr></table><table width=\"254\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"margin-bottom: 2px;\" ><tr onclick=\"hishow('5359d5e04383ad3a0e000002','img/kflist/new_blue/new_')\"><td height=\"22\" align=\"left\" valign=\"top\" background=\"http://www22.53kf.com/img/kflist/new_blue/new_bg.gif\" style=\"cursor: pointer;\"><div style=\"float: left;height: 22px;width: 19px;text-align: left;\"><img src=\"http://www22.53kf.com/img/kflist/new_blue/new_arrow2.gif\" width=\"14\" height=\"22\" id=\"arrow5359d5e04383ad3a0e000002\" /></div><div style=\"float: left;width:228px;padding-top: 4px;font-size: 12px;line-height: 14px;color:#06354D;white-space: nowrap;overflow: hidden;\" title=\"&#24191;&#19996;&#30465;(&#38500;&#28145;&#22323;)&#12289;&#21326;&#21335;&#21450;&#35199;&#21335;&#22320;&#21306;&#23458;&#25143;[2]\">&#24191;&#19996;&#30465;(&#38500;&#28145;&#22323;)&#12289;&#21326;&#21335;&#21450;&#35199;&#21335;&#22320;&#21306;&#23458;&#25143;[2]</div><div style=\"float: right;height: 22px;width: 6px;\"><img src=\"http://www22.53kf.com/img/kflist/new_blue/new_youbg.gif\"></div></td></tr><tr id=\"hsdiv5359d5e04383ad3a0e000002\" style=\"display:none\"><td align=\"center\"><table width=\"246\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"margin-bottom: 4px;\"><tr onclick='setIsinvited();window.open(\"http://www22.53kf.com/webCompany.php?arg=sfcservice&style=1&language=zh-cn&charset=gbk&lytype=0&referer={hz6d_referer}{hz6d_keyword}&tpl=crystal_blue&kf=gz03&zdkf_type=1&kflist=off\",\"_blank\",\"height=473,width=703,top=200,left=200,status=yes,toolbar=no,menubar=no,resizable=yes,scrollbars=no,location=no,titlebar=no\");return false;'><td height=\"24\" style=\"background-image: url(http://www22.53kf.com/img/kflist/new_blue/new_bgx.gif);background-repeat: repeat-x;background-position: right 22px;\"><div style=\"width:214px;float: left;line-height: 14px;padding-top: 3px;color:#4267B0;font-size: 12px;cursor: pointer;text-align: left;white-space: nowrap;overflow: hidden;\" title=\"&#24191;&#24030;&#38144;&#21806;03\">&#24191;&#24030;&#38144;&#21806;03</div><div style=\"width: 30px;float: right;line-height: 14px;padding-top: 3px;color:#DB0000;font-size: 12px;cursor: pointer;text-align: right;\"><span style=\"color:#FF6000;\">&#21672;&#35810;</span></div></td></tr><tr onclick='setIsinvited();window.open(\"http://www22.53kf.com/webCompany.php?arg=sfcservice&style=1&language=zh-cn&charset=gbk&lytype=0&referer={hz6d_referer}{hz6d_keyword}&tpl=crystal_blue&kf=gz09&zdkf_type=1&kflist=off\",\"_blank\",\"height=473,width=703,top=200,left=200,status=yes,toolbar=no,menubar=no,resizable=yes,scrollbars=no,location=no,titlebar=no\");return false;'><td height=\"24\" style=\"background-image: url(http://www22.53kf.com/img/kflist/new_blue/new_bgx.gif);background-repeat: repeat-x;background-position: right 22px;\"><div style=\"width:214px;float: left;line-height: 14px;padding-top: 3px;color:#4267B0;font-size: 12px;cursor: pointer;text-align: left;white-space: nowrap;overflow: hidden;\" title=\"&#24191;&#24030;&#38144;&#21806;09\">&#24191;&#24030;&#38144;&#21806;09</div><div style=\"width: 30px;float: right;line-height: 14px;padding-top: 3px;color:#DB0000;font-size: 12px;cursor: pointer;text-align: right;\"><span style=\"color:#FF6000;\">&#21672;&#35810;</span></div></td></tr></table></td></tr></table><table width=\"254\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"margin-bottom: 2px;\" ><tr onclick=\"hishow('5359d5f14383ad3a0e000003','img/kflist/new_blue/new_')\"><td height=\"22\" align=\"left\" valign=\"top\" background=\"http://www22.53kf.com/img/kflist/new_blue/new_bg.gif\" style=\"cursor: pointer;\"><div style=\"float: left;height: 22px;width: 19px;text-align: left;\"><img src=\"http://www22.53kf.com/img/kflist/new_blue/new_arrow2.gif\" width=\"14\" height=\"22\" id=\"arrow5359d5f14383ad3a0e000003\" /></div><div style=\"float: left;width:228px;padding-top: 4px;font-size: 12px;line-height: 14px;color:#06354D;white-space: nowrap;overflow: hidden;\" title=\"&#21326;&#19996;&#12289;&#21326;&#20013;&#21450;&#21271;&#26041;&#22320;&#21306;&#23458;&#25143;[2]\">&#21326;&#19996;&#12289;&#21326;&#20013;&#21450;&#21271;&#26041;&#22320;&#21306;&#23458;&#25143;[2]</div><div style=\"float: right;height: 22px;width: 6px;\"><img src=\"http://www22.53kf.com/img/kflist/new_blue/new_youbg.gif\"></div></td></tr><tr id=\"hsdiv5359d5f14383ad3a0e000003\" style=\"display:none\"><td align=\"center\"><table width=\"246\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"margin-bottom: 4px;\"><tr onclick='setIsinvited();window.open(\"http://www22.53kf.com/webCompany.php?arg=sfcservice&style=1&language=zh-cn&charset=gbk&lytype=0&referer={hz6d_referer}{hz6d_keyword}&tpl=crystal_blue&kf=sh01&zdkf_type=1&kflist=off\",\"_blank\",\"height=473,width=703,top=200,left=200,status=yes,toolbar=no,menubar=no,resizable=yes,scrollbars=no,location=no,titlebar=no\");return false;'><td height=\"24\" style=\"background-image: url(http://www22.53kf.com/img/kflist/new_blue/new_bgx.gif);background-repeat: repeat-x;background-position: right 22px;\"><div style=\"width:214px;float: left;line-height: 14px;padding-top: 3px;color:#4267B0;font-size: 12px;cursor: pointer;text-align: left;white-space: nowrap;overflow: hidden;\" title=\"&#19978;&#28023;&#38144;&#21806;01\">&#19978;&#28023;&#38144;&#21806;01</div><div style=\"width: 30px;float: right;line-height: 14px;padding-top: 3px;color:#DB0000;font-size: 12px;cursor: pointer;text-align: right;\"><span style=\"color:#FF6000;\">&#21672;&#35810;</span></div></td></tr><tr onclick='setIsinvited();window.open(\"http://www22.53kf.com/webCompany.php?arg=sfcservice&style=1&language=zh-cn&charset=gbk&lytype=0&referer={hz6d_referer}{hz6d_keyword}&tpl=crystal_blue&kf=sh05&zdkf_type=1&kflist=off\",\"_blank\",\"height=473,width=703,top=200,left=200,status=yes,toolbar=no,menubar=no,resizable=yes,scrollbars=no,location=no,titlebar=no\");return false;'><td height=\"24\" style=\"background-image: url(http://www22.53kf.com/img/kflist/new_blue/new_bgx.gif);background-repeat: repeat-x;background-position: right 22px;\"><div style=\"width:214px;float: left;line-height: 14px;padding-top: 3px;color:#4267B0;font-size: 12px;cursor: pointer;text-align: left;white-space: nowrap;overflow: hidden;\" title=\"&#19978;&#28023;&#38144;&#21806;05\">&#19978;&#28023;&#38144;&#21806;05</div><div style=\"width: 30px;float: right;line-height: 14px;padding-top: 3px;color:#DB0000;font-size: 12px;cursor: pointer;text-align: right;\"><span style=\"color:#FF6000;\">&#21672;&#35810;</span></div></td></tr></table></td></tr></table><div style=\"width:254px;height:3px;background: url(http://www22.53kf.com/img/kflist/new_blue/new_bgdibu.gif) repeat-x left bottom;\"><img src=\"http://www22.53kf.com/img/kflist/new_blue/new_spacer.gif\" /></div><div id=\"hz6d_bottom_logo\" style=\"width:254px;height:24px;line-height:24px;text-indent:20px;font-family:arial;overflow:hidden; background:url(http://www22.53kf.com/img/kflist/logo_2.gif) 5px 5px no-repeat;color:#7CC5DE;\">53KF&#23458;&#26381;&#31995;&#32479;</div></div><table style='line-height:0;font-size:0' width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\"><tr><td width=\"5\" height=\"2\"><img src=\"http://www22.53kf.com/img/kflist/new_blue/new_1.gif\" width=\"5\" height=\"2\" style=\"vertical-align:auto;\"></td><td background=\"http://www22.53kf.com/img/kflist/new_blue/new_2.gif\"><img src=\"http://www22.53kf.com/img/kflist/spacer.gif\" style=\"vertical-align:auto;\"></td><td width=\"5\"><img src=\"http://www22.53kf.com/img/kflist/new_blue/new_3.gif\" width=\"5\" height=\"2\" style=\"vertical-align:auto;\"></td></tr></table></div>";
					kflist = hz6d_html_replace(kflist);
					html += "<div id='" + this.config["iconDivMain"] + "' style='z-index:7999;display:" + this.display + ";left: " + this.left + "px; top: " + this.top + "px;width:" + this.config["width"] + "px;height:auto; overflow:hidden;POSITION: absolute;'>" + this.closeIcon() + kflist + "</div>";
					this.iconDivMain = html;
					hz6d$(this.config["iconDiv"]).innerHTML = this.iconDivMain;
					this.iconDivMain = hz6d$(this.config["iconDivMain"]);
					set_hz6d_bottom_logo();
				}	function set_hz6d_bottom_logo() {
		try {
			if ('server' != "oem")
			{
				hz6d$("hz6d_bottom_logo").style.textAlign = 'right';
				hz6d$("hz6d_bottom_logo").style.textIndent = '0px';
				if("new_blue" == 'pink' || "new_blue" == 'yellow2'  || "new_blue" == 'blue2')
				{
					hz6d$("hz6d_bottom_logo").style.lineHeight = hz6d$("hz6d_bottom_logo").parentNode.offsetHeight + 'px';
					hz6d$("hz6d_bottom_logo").style.position = 'relative';
					hz6d$("hz6d_bottom_logo").style.top = '6px';
				}
				hz6d$("hz6d_bottom_logo").style.backgroundImage = '';
				if ("1" == true) {
					hz6d$("hz6d_bottom_logo").innerHTML  = '<a style="text-decoration:none;color:#999;display:inline-block;margin-right:8px;font-size:11px;;font-family: Microsoft YaHei;font-size:10px;-webkit-text-size-adjust:none" onmouseout="this.style.textDecoration=\'none\'" onmouseover="this.style.textDecoration=\'underline\'" target="_blank" href="' + powered_by_53kf_url + '">' + powered_by_53kf_txt + '</a>';
				}
				else {
					hz6d$("hz6d_bottom_logo").innerHTML  = '<a style="text-decoration:none;color:#999;display:inline-block;margin-right:8px;font-size:11px;;font-family: Microsoft YaHei;font-size:10px;-webkit-text-size-adjust:none" onmouseout="this.style.textDecoration=\'none\'" onmouseover="this.style.textDecoration=\'underline\'" target="_blank" href="' + powered_by_53kf_url + '">' + hz6d$("hz6d_bottom_logo").innerHTML + '</a>';
				}
				hz6d$("hz6d_bottom_logo").style.display = '';
			}
		} catch(e) {
			setTimeout(set_hz6d_bottom_logo,100);
		}
	}		if (typeof(kf_icons) == "undefined")
		{
			var kf_icons = new Array();

			function hishow(id, img_url)
			{
				var divname = "hsdiv" + id;
				if (hz6d$(divname).style.display == "none")
				{
					hz6d$(divname).style.display = "block";
					hz6d$("arrow" + id).src = "http://www22.53kf.com/" + img_url + "arrow1.gif";
				}
				else
				{
					hz6d$(divname).style.display = "none";
					hz6d$("arrow" + id).src = "http://www22.53kf.com/" + img_url + "arrow2.gif";
				}
			}

			function kfIcon()
			{
				this.config = new Array();
				this.left = -200; // 图标需要到达的 left 
				this.top = 0;
				this.width = 0; // 图标宽度 
				this.height = 0; // 图标宽度 
				this.offsetLeft = 0; // 距离左侧宽度，包括滚动过的距离 
				this.offsetTop = 0; //距离顶部宽度，包括滚动过的距离 
				this.scrolledX = 0; //图标水平滚动条滚动过的距离 
				this.scrolledY = 0;
				this.issmooth = false; //是否平滑移动 
				this.loopmillisecond = 10; //图标循环定位的毫秒，数值越大越慢，对CPU影响越小 
				this.Xstep = 4; //水平步进基数,数字越大越平滑，也越慢 
				this.Ystep = 4;
				this.pageW = 0; //页面总宽度 
				this.pageH = 0;
				this.display = ""; //是否显示图标,值 "none"|"" 
				this.iconDiv = null;
				this.iconDivMain = null;
				this.autoScrollTimer = null;
				this.init = _init;
				this.autoScroll = scroll;
				this.createIconDivMain = _createIconDivMain; // 
				this.setParameter = _setParameter; //在 createIconDivMain 中调用 
				this.wopen = _wopen; //同上 
				this.closeIcon = _closeIcon; //同上 
				this.hidden = _hidden; //同上 
        this.getClickUrl = _getClickUrl; // 获取点击的url 
			};

			function scroll()
			{
				//this.createIconDivMain();
				//if(hz6d$("Xstep"))
				//this.Xstep=hz6d$("Xstep").value;
				//if(hz6d$("Ystep"))
				//this.Ystep=hz6d$("Ystep").value;
				//alert("scroll");
				try
				{
					this.offsetLeft = this.iconDivMain.offsetLeft;
					this.width = parseInt(this.iconDivMain.style.width.replace("px", ""));
					this.height = parseInt(this.iconDivMain.style.height.replace("px", ""));
				}
				catch (e)
				{
					//this.iconDivMain=hz6d$(this.config["iconDivMain"]);
					return;
				}

				this.scrollbarW = 20; // scrollbar width in ie6,ie7,ie8 = 20px
				this.scrollbarH = 20; // scrollbar width in ie6,ie7,ie8 = 20px
				this.scrolledY = Math.max(document.body.scrollTop, document.documentElement.scrollTop);
				this.scrolledX = Math.max(document.body.scrollLeft, document.documentElement.scrollLeft);
				if (browser == "ie6")
				{
					this.pageH = document.documentElement.offsetHeight;
					this.pageW = document.documentElement.offsetWidth + 3;
				}
				else if (browser == "ie7")
				{
					this.pageH = document.documentElement.offsetHeight;
					if (hasdoctype) this.pageW = document.documentElement.offsetWidth + 21;
					else this.pageW = document.documentElement.offsetWidth;
				}
				else if (browser == "ie8")
				{
					this.pageH = document.documentElement.offsetHeight;
					this.pageW = document.documentElement.offsetWidth;
				}
				else if (browser == "firefox")
				{
					this.pageH = window.innerHeight;
					// 21=17+4
					// 17 for document.documentElement.clientWidth in firefox 3
					// 4 for document.documentElement.scrollLeft in firefox 3 differently from ie6,ie7
					this.pageW = document.documentElement.clientWidth + 21;
				}
				else
				{
					this.pageH = document.documentElement.offsetHeight;
					this.pageW = document.documentElement.offsetWidth;
				}

				if (this.config["v_showmodel"] == 1)
				{
					if (this.top != (this.scrolledY + this.pageH))
					{
						var iconDivHeight = this.scrolledY + this.config["offsetH"] - this.offsetTop;
						iconDivHeight = (iconDivHeight > 0 ? 1 : -1) * Math.ceil(Math.abs(iconDivHeight));
						this.top = this.offsetTop + iconDivHeight;
					}
				}
				else
				{
					if (this.top != (this.scrolledY + this.pageH - this.height - this.config["offsetH"] - this.scrollbarH))
					{
						var iconDivHeight = this.scrolledY + this.pageH - this.height - this.config["offsetH"] - this.scrollbarH - this.offsetTop;
						iconDivHeight = (iconDivHeight > 0 ? 1 : -1) * Math.ceil(Math.abs(iconDivHeight));
						this.top = this.offsetTop + iconDivHeight;
					}
				}

				if (this.config["showmodel"] == 1)
				{
					if (this.left != (this.scrolledX + this.pageW))
					{
						var iconDivWidth = this.scrolledX + this.config["offsetW"] - this.offsetLeft;
						iconDivWidth = (iconDivWidth > 0 ? 1 : -1) * Math.ceil(Math.abs(iconDivWidth));
						this.left = this.offsetLeft + iconDivWidth;
					}
				}
				else
				{
					if (this.left != (this.scrolledX + this.pageW - this.width - this.config["offsetW"] - this.scrollbarW))
					{
						var iconDivWidth = this.scrolledX + this.pageW - this.width - this.config["offsetW"] - this.scrollbarW - this.offsetLeft;
						iconDivWidth = (iconDivWidth > 0 ? 1 : -1) * Math.ceil(Math.abs(iconDivWidth));
						this.left = this.offsetLeft + iconDivWidth;
					}
				}

				//set kf_icon postiotn
				//超出窗口边界，直接移动到窗口边界再平滑移动 
				var left = parseInt(this.iconDivMain.style.left.replace("px", ""));
				var top = parseInt(this.iconDivMain.style.top.replace("px", ""));

				if (this.issmooth == true)
				{
					if (left != this.left)
					{
						if (left < (this.scrolledX - this.width)) left = this.scrolledX - this.width;
						if (left > this.scrolledX + this.pageW) left = this.scrolledX + this.pageW;
						left = smoothMove(left, this.left);
					}
					if (top != this.top)
					{
						if (top < (this.scrolledY - this.height)) top = this.scrolledY - this.height;
						if (top > this.scrolledY + this.pageH) top = this.scrolledY + this.pageH;
						top = smoothMove(top, this.top);
					}
				}
				else if (this.issmooth == false)
				{
					left = this.left;
					top = this.top;
					this.issmooth = true;
				}

				this.iconDivMain.style.left = left + "px";
				this.iconDivMain.style.top = top + "px";
			};

			function _wopen(com)
			{
				if (this.config["is_zdyurl"] == 1) window.open(this.config["zdyurl"], "_blank", "height=" + 473 + ",width=" + 703 + ",top=200,left=200,status=yes,toolbar=no,menubar=no,resizable=yes,scrollbars=no,location=no,titlebar=no");
				else window.open(this.config["server_path"] + "/webCompany.php?arg=" + this.config["arg"] + com, "_blank", "height=" + 473 + ",width=" + 703 + ",top=200,left=200,status=yes,toolbar=no,menubar=no,resizable=yes,scrollbars=no,location=no,titlebar=no");
			};

			function _setParameter()
			{
				var params = "";
				params += this.config["style_id"];
				params += this.config["language"];
				params += this.config["onurl"];
				params += this.config["lytype"];
				params += this.config["lyurl"];
				params += this.config["copartner"];
				params += this.config["username"];
				params += this.config["userinfo"];
				params += this.config["charset"];
				params += this.config["introurl"];
				params += this.config["kf"];
				params += this.config["referer"];
				params += this.config["keyword"];
				params += this.config["tfrom"];
				params += this.config["company_tpl"];
				params += this.config["brief"];
				params += this.config["logo"];
				params += this.config["question"];
				return params;
			};
      
      function _getClickUrl()
      {
        var _click_str = '';
        if (this.config["record_url"] != "" && this.config["isonline"] == 0)
        {
           _click_str += 'window.open(\'' + this.config["record_url"] + '\',\'_blank\')';
        }
        else
        {
          _click_str += 'setIsinvited();';
          if (this.config["is_zdyurl"] == 1)
          {
            _click_str += 'window.open(\'' + this.config["zdyurl"] + '\', \'_blank\', \'height=473,width=703,top=200,left=200,status=yes,toolbar=no,menubar=no,resizable=yes,scrollbars=no,location=no,titlebar=no\')';
          }
          else
          {
            _click_str += 'window.open(\'' + this.config["server_path"] + '/webCompany.php?arg=' + this.config["arg"] + this.setParameter() + '\', \'_blank\', \'height=473,width=703,top=200,left=200,status=yes,toolbar=no,menubar=no,resizable=yes,scrollbars=no,location=no,titlebar=no\')';
          }
        }
        return _click_str;
      }

			function _hidden()
			{
				hz6d_close_icon = 1;
				this.display = "none";
				hz6d$(this.config["iconDivMain"]).style.display = "none";
				try
				{
					clearInterval(kf_icons[this.config["kf_icon_id"]].autoScrollTimer);
				}
				catch (e)
				{}
			};

			function _closeIcon()
			{
				var str_onmove = "";
				if (1 == 1 && ('new_blue' == "new_blue" || 'new_blue' == "new_red" || 'new_blue' == "new_yellow" || 'new_blue' == "new_green"))
				{
					str_onmove = "onmousemove='this.style.backgroundImage=\"url(http://www22.53kf.com/img/kflist/list_close_move.gif)\"' onmouseout='this.style.backgroundImage=\"url(http://www22.53kf.com/img/kflist/new_blue_close.gif)\"'";
				}
				if (1 == 1 || 70742861 == 600603 || 70742861 == 61393572 || 70742861 == 1413303 || 70742861 == 61389920 || 70742861 == 61420906 || 70742861 == 61578368)
				{
					if (1 == 1)
					{
						//return "<img onclick='kf_icons["+this.config["id"]+"].hidden()' style='position:absolute; right:5px;top:0px; cursor:pointer;' src='http://www22.53kf.com/img/kflist/new_blue_close.gif' "+str_onmove+" />";
						if ('new_blue' == "new_blue" || 'new_blue' == "new_red" || 'new_blue' == "new_yellow" || 'new_blue' == "new_green")
						{
							var str_wh = "width:27px;height:16px;";
						}
						else if ('new_blue' == "blue")
						{
							var str_wh = "width:11px;height:11px;";
						}
						else if ('new_blue' == "blue2")
						{
							var str_wh = "width:14px;height:14px;";
						}
						else if ('new_blue' == "yellow")
						{
							var str_wh = "width:14px;height:14px;";
						}
						else if ('new_blue' == "yellow2")
						{
							var str_wh = "width:14px;height:13px;";
						}
						else if ('new_blue' == "black")
						{
							var str_wh = "width:14px;height:14px;";
						}
						else if ('new_blue' == "pink")
						{
							var str_wh = "width:18px;height:18px;";
						}
						else
						{
							var str_wh = "width:11px;height:11px;";
						}
						return "<div onclick='kf_icons[" + this.config["id"] + "].hidden()' style='" + str_wh + "background:url(\"http://www22.53kf.com/img/kflist/new_blue_close.gif\") no-repeat;position:absolute;right:5px;top:0px;cursor:pointer;' " + str_onmove + " ></div>";
					}
					//return "<img onclick='kf_icons["+this.config["id"]+"].hidden()' style='position:absolute; right:5px;top:0px; cursor:pointer;' src='http://www22.53kf.com/img/kflist/new_blue_close.gif' />";
					return "<div onclick='kf_icons[" + this.config["id"] + "].hidden()' style='width:11px;height:11px;background:url(\"http://www22.53kf.com/img/kflist/new_blue_close.gif\") no-repeat;position:absolute;right:5px;top:0px;cursor:pointer;' ></div>";
				}
				return "";
			};

			function _init()
			{
				document.write('<div id="' + this.config["iconDiv"] + '" ></div>');
				this.iconDiv = hz6d$(this.config["iconDiv"]);
				this.createIconDivMain();
			};
		}

		if (typeof(kf_icon_id) == "undefined") kf_icon_id = 1;
		else kf_icon_id++;
		kf_icons[kf_icon_id] = new kfIcon();
		kf_icons[kf_icon_id].config["id"] = kf_icon_id;
		kf_icons[kf_icon_id].config["arg"] = "sfcservice";
		//kf_icons[kf_icon_id].config["logo_id"]="1087";
		kf_icons[kf_icon_id].config["style_id"] = "&style=1";
		kf_icons[kf_icon_id].config["isonline"] = "1";
    kf_icons[kf_icon_id].config["zdytb_on_arrs"] = [];
    kf_icons[kf_icon_id].config["zdytb_off_arrs"] = [];
    if (1 == 2)kf_icons[kf_icon_id].config["zdytb_on_arrs"] = init_zdytb_arr();
    if (1 == 2)kf_icons[kf_icon_id].config["zdytb_off_arrs"] = init_zdytb_arr();
		kf_icons[kf_icon_id].config["img_on"] = "http://www22.53kf.com/img/kflogo/v5_2.gif";
		kf_icons[kf_icon_id].config["img_off"] = "http://www22.53kf.com/img/kflogo/v5_2_off.gif";
		kf_icons[kf_icon_id].config["height"] = "116";
		kf_icons[kf_icon_id].config["width"] = "260";
		kf_icons[kf_icon_id].config["auto_hidden_img"] = "";
		kf_icons[kf_icon_id].config["hidden_img_height"] = "";
		kf_icons[kf_icon_id].config["hidden_img_width"] = "";
		kf_icons[kf_icon_id].config["showmodel"] = parseInt("2");
		kf_icons[kf_icon_id].config["offsetW"] = parseInt("10");
		kf_icons[kf_icon_id].config["v_showmodel"] = parseInt("1");
		kf_icons[kf_icon_id].config["offsetH"] = parseInt("240");
		kf_icons[kf_icon_id].config["language"] = "&language=zh-cn";
		kf_icons[kf_icon_id].config["username"] = "";
		kf_icons[kf_icon_id].config["userinfo"] = "";
		kf_icons[kf_icon_id].config["charset"] = "&charset=gbk";
		kf_icons[kf_icon_id].config["introurl"] = "";
		kf_icons[kf_icon_id].config["onurl"] = "";
		kf_icons[kf_icon_id].config["lytype"] = "&lytype=0";
		kf_icons[kf_icon_id].config["lyurl"] = "";
		kf_icons[kf_icon_id].config["copartner"] = "";
		kf_icons[kf_icon_id].config["kf"] = "&kflist=on&kf=0659,0694,0832,881,0573,899,sz18,sz22,hw03,sz10,0766,0986,sz01,sz15,sz03,sz05,sz06,sz07,sz08,sz09,sz13,sz02,gz03,gz04,gz05,gz06,gz07,gz02,gz09,gz01,sh01,hz03,hz02,hz01,sh05,sh02&zdkf_type=1";
		kf_icons[kf_icon_id].config["referer"] = hz6d_referer;
		kf_icons[kf_icon_id].config["keyword"] = hz6d_from_page;
		kf_icons[kf_icon_id].config["tfrom"] = "&tfrom=1";
		kf_icons[kf_icon_id].config["record_url"] = "";
		var hz6d_zdyurl = "?arg=sfcservice&style=1&kflist=on&kf=0659,0694,0832,881,0573,899,sz18,sz22,hw03,sz10,0766,0986,sz01,sz15,sz03,sz05,sz06,sz07,sz08,sz09,sz13,sz02,gz03,gz04,gz05,gz06,gz07,gz02,gz09,gz01,sh01,hz03,hz02,hz01,sh05,sh02&zdkf_type=1&language=zh-cn&charset=gbk&lytype=0&referer={hz6d_referer}{hz6d_keyword}&tpl=crystal_blue";
		hz6d_zdyurl = hz6d_html_replace(hz6d_zdyurl);
		kf_icons[kf_icon_id].config["zdyurl"] = hz6d_zdyurl;
		kf_icons[kf_icon_id].config["is_zdyurl"] = "0";
		kf_icons[kf_icon_id].config["path"] = "http://chat.53kf.com";
		kf_icons[kf_icon_id].config["server_path"] = "http://www22.53kf.com";
		kf_icons[kf_icon_id].config["company_tpl"] = "&tpl=crystal_blue";
		kf_icons[kf_icon_id].config["brief"] = "";
		kf_icons[kf_icon_id].config["logo"] = "";
		kf_icons[kf_icon_id].config["iconDivMain"] = "iconDivMain" + kf_icon_id;
		kf_icons[kf_icon_id].config["iconDiv"] = "iconDiv" + kf_icon_id;
		kf_icons[kf_icon_id].config["question"] = "";
		kf_icons[kf_icon_id].init();
		kf_icons[kf_icon_id].autoScrollTimer = window.setInterval("kf_icons[" + kf_icon_id + "].autoScroll()", kf_icons[kf_icon_id].loopmillisecond);	if (!hz6d$("stat_script"))
		document.write("<scr"+"ipt src='http://www22.53kf.com/stat.php?com_id=70742861" + hz6d_referer + hz6d_from_page + "' type='text/javascript' id='stat_script'></scr"+"ipt>");