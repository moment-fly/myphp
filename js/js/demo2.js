//函数


//函数的基本结构
//function 函数名(0个或者多个参数){
//	//运算机制
//}

//xx:本质上就是变量   
//函数名就是一个指针
//return  1，后面跟的值就是函数的返回值  2，停止当前函数继续运行
function lee(xx){
	return xx+"吧";
}


var jack  = lee;


function lee(xx){
	return xx+"手";
}
//alert(jack("我是手机"));

function  dd(){
	j = j+10;
	return ;
	return "leee";
}


//alert(dd());




//arguments:他是把传过来的参数进行整合，然后以数组的形式展示出来

//function ee(){
//	return arguments;
//}
//
//console.log(ee("lee","jack","kkk","ddd","懂伐魏时"));

//加法运算   方法
function plus(){
	var  j = 0;
	for(var i = 0;i<arguments.length;i++){
//		j = j+arguments[0]       //j = 0+1
//		j = j+arguments[1]       //j = 1+2
//		j = j+arguments[2]		// j = 3+3
//		j = j+arguments[3]      // j = 6+4

         j+=arguments[i];//j= j+arguments[i]
	}
	
	return j;
}


console.log(plus(1,2,3,4,5)); 




//递归函数     1*2*3*4*5

function digui(num){
	if(num <=1){
		return 1;
	}else{
		return   num*digui(num-1)    //4*digui(3)    
		                             //4*3*digui(2)
		                             //4*3*2*1
	}
}

console.log(digui(4));

