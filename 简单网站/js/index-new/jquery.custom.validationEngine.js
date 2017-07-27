$.newRules = {};
$.validationEngineLanguage = {
    allRules:{
        "required":{
            "regex":"none",
            "alertText":"* 必须",
            "alertTextCheckboxMultiple":"* 请至少选择一个选项",
            "alertTextCheckboxe":"* 必须"},
        "length":{
            "regex":"none",
            "alertText":"*Between ",
            "alertText2":" and ",
            "alertText3": " characters allowed"},
        "maxCheckbox":{
            "regex":"none",
            "alertText":"* Checks allowed Exceeded"},
        "minCheckbox":{
            "regex":"none",
            "alertText":"* 请选择 ",
            "alertText2":" options"},
        "confirm":{
            "regex":"none",
            "alertText":"* 两值不相等"},
        "telephone":{
            "regex":"/^[0-9\-\(\)\/\ ]+$/",
            "alertText":"* 不是一个电话号码"},
        "email":{
            "regex":"/^[a-zA-Z0-9_\.-]+\@([a-zA-Z0-9-]+\.)+[a-zA-Z]{2,4}$/",
            "alertText":"* 错误的电子邮箱地址"},
        "date":{
             "regex":"/^[0-9]{4}\-\[0-9]{1,2}\-\[0-9]{1,2}$/",
             "alertText":"* 不是一个正确的日期, 必须是 YYYY-MM-DD 的形式"},
        "onlyNumber":{
            "regex":"/^[0-9\ ]+$/",
            "alertText":"* 只能是数字"},
        "noSpecialCaracters":{
            "regex":"/^[0-9a-zA-Z]+$/",
            "alertText":"* 不允许有特殊字符"},
        "ajaxUser":{
            "file":"validateUser.php",
            "extraData":"name=eric",
            "alertTextOk":"* This user is available",
            "alertTextLoad":"* Loading, please wait",
            "alertText":"* This user is already taken"},
        "ajaxName":{
            "file":"validateUser.php",
            "alertText":"* This name is already taken",
            "alertTextOk":"* This name is available",
            "alertTextLoad":"* Loading, please wait"},
        "onlyLetter":{
            "regex":"/^[a-zA-Z\ \']+$/",
            "alertText":"* 只能输入字母"},
		"onlyReal":{
			"regex":"/^[1-9]d*.d*|^[1-9]d*|^0.[0-9]*[1-9]d*$/",
			"alertText":"* 只能是小数或整数"
			},
        "noCharacter":{
                "regex":"/^[0-9a-zA-Z@#\(\)\ -_]+$/",
                "alertText":"* 不能有中文"}

  }
}
$(function(){
    $.extend($.validationEngineLanguage.allRules, $.newRules);
});