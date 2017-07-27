//alert("我要睡觉");
//总结：对象包含：对象object   函数（方法）function     数组array    数字number   字符串string   布尔值boolean

//对象的话      只要出现{} 那他就是一个对象

//对象里面的动作叫做方法

//如何鉴别是一个数组      []  数组是一个特殊的对象

var jack = {
	kinds:"dog"
}

var person  = {
	name:"王八蛋",
	age:18,
	hobby:["吃",'喝',"睡"],
	cat:jack,
	isHandsome:false,
	think:function(){
		alert("我需要思考");
	}
}

//alert(person["name"]);





//数组是特殊的对象   []  有一定规则排序的集群
var  school = ["lee","jack","tom","fdfd"];
//alert(school[0]);
//计算当前的数组长度  length
//alert(school.length);  //4
//school[0]
//school[1]
//school[2]
//school[3]
//for (var i = 0;i<school.length;i++) {
//	alert(school[i]);
//}

//结尾处增加一个学生
 school.push("lijialin");
 
 //结尾处减少一个学生
  school.pop();
  school.pop();
  
  //在开头增加一个学生
  school.unshift("hellen");
  //在开头减少一个学生
  school.shift();
  
  
  //在任意位置增加   任意位置增加减少
  school.splice(0,2,"fffff","dhjhdjs","dhdsajdhj");
//alert(school);  //  



//数组的转换  字符串    
//join(),toString()
//alert(typeof school.toString());//"lee","jack","tom"  string   利用 typeof来进行检测

alert(school.join(" "))




