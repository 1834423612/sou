var txtUrl = "hotokoto/all.txt";        // 一言文本本件(TXT)位置
window.onload = function(){
	getQuotesTxt( 'hotokoto', txtUrl);       // 获取一言
	window.setInterval( "getQuotesTxt( 'hotokoto', txtUrl)", 30000);    // 加个定时器自动刷新
}

// Text 文本文件中随机获取一行
function getQuotesTxt( id, url) {
	var i = 0,
		resultTxt = "",
		resultArr = [];
		
	if( !url ) { return "error"}
	x = fetch(url)
	.then(function(response) {
		return response.text();
	})
	.then(function(text) {
		resultArr = text.toString().split(/[\n]/);          
		i = Math.floor( Math.random()*resultArr.length );
		resultTxt = resultArr[i];                         
		document.getElementById( id ).innerHTML = resultTxt;
	});
}