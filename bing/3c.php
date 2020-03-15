<?php
$str = file_get_contents('http://cn.bing.com/HPImageArchive.aspx?idx=2&n=1');   // 从bing获取数据
 
if(preg_match('/<copyright>([^<]+)<\/copyright>/isU', $str, $matches)) { // 正则匹配抓取图片url
    $imgcopyright=$matches[1];
} else {  // 如果由于某些原因，没抓取到图片地址
	$imgcopyright="欸,出了点小问题";
}
 
echo 'document.write("'.htmlspecialchars($imgcopyright).'");';