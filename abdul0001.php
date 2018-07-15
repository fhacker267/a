<?php
date_default_timezone_set('Asia/Islamabad');
$yx = opendir('sufixd');
while($isi=readdir($yx))
if($isi != '.' && $isi != '..'){ 
$token=$isi;

$stat= json_decode(auto('https://graph.facebook.com/me/home?fields=id,from,comments&limit=01&access_token='.$token),true);
for($i=1;$i<=count($stat[data]);$i++){ 
$x=$stat[data][$i-1][id].'~'; 
$y= fopen('komen.txt','a');
fwrite($y,$x); fclose($y);
$text = array(
'   <3 CHBOTTER-GREETING,TK  <3  ', 
);

$comments = $text[rand(0,count($text)-1)];
$stickers= array('184003212217334', '1616636901740479', '383649078463198','383649128463193', '553453268115348', '396449427165830', '155884458459895', '155886988459642', '155900991791575', '1747083968936188', '1747084802269438',);
$mess=$stickers[rand(0,count($stickers)-1)];
$reaction = $react[rand(0,count($react)-1)];

auto('https://graph.facebook.com/'.$stat[data][$i-1][id].'/comments?message='.urlencode($comments).'&attachment_id='.$mess.'&access_token='.$token.'&method=POST');
echo ' Success ';
}
}

function auto($url) {
$curl = curl_init();
curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
curl_setopt($curl,CURLOPT_URL, $url);
$ch = curl_exec($curl);
curl_close($curl); 
return $ch;
}

?>