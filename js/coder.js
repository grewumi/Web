/*自适应textarea文本域高度*/
function setHeight(){
	var o = document.getElementsByClassName('coder'),i;
	for(i=0;i<o.length;i++)
		o[i].style.height=o[i].scrollHeight+'px';
	/* 测试代码
	var text = o[0].value;
	document.getElementById('content').textContent = text;
	*/	
}
/*获取随机数*/
function GetRandom(n){
	var GetRandomn = 1;
	return GetRandomn=Math.floor(Math.random()*n);//0-2
}
/*元素抖动*/
function dou(){	
	var shu = new Array();
	shu[0] = -1;
	shu[1] = 0;
	shu[2] = 1;
	var sj,temp;
	var o = document.getElementsByTagName('h3');
	sj = GetRandom('3');
	temp = 'rotate(' + shu[sj];	
	o[0].style.transform = temp + 'deg)';	
	setTimeout(ddou(),500);
}
function ddou(){
	setTimeout(dou(),100);
}
$(document).ready(function(){
	setHeight();
	('h3').onmouseover=setTimeout(dou(),500 );	
});


