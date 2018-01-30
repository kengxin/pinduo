// 使页面支持rem的JS配置文件

// 以iphone 6页面为标准
var clientWidth = 375;		/* 标准视口宽度 */
var fontSize = 20;			/* 标准HTML元素大小 */

// 当前设备下的视口宽度
window.onload = function(){
	// 获取html元素
	var html = document.documentElement;

	// 当前设备可视窗口宽度
	var nowClientWidth = html.clientWidth;

	// 计算出当前设备下html元素的font-size
	var newFontSize = nowClientWidth*fontSize/clientWidth;

	console.log(newFontSize);

	// 设置html元素的fontSize
	html.style.fontSize = newFontSize+'px';
}