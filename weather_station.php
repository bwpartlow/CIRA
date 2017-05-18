<?php
require_once 'rss_php.php';

$file = 'http://weather.cira.colostate.edu/wview/wxrss.xml';
$file_headers = @get_headers($file);
if($file_headers[0] == 'HTTP/1.1 404 Not Found') {
    $exists = false;
    echo "The CIRA Weather Station is currently down.";
}
else {
    $exists = true;
$rss = new rss_php;
//$rss->load('weather_station/wxrss.xml');
$rss->load('http://weather.cira.colostate.edu/wview/wxrss.xml');

$items = $rss->getItems();
foreach($items as $index => $item) {
 $wx_data = $item['content:encoded'];
}

 $chtml = "";

 $tmp_pos1 = strpos($wx_data, "<temp>");
 $tmp_pos2 = strpos($wx_data, "</temp>");
 $tmp_size = $tmp_pos2 - ($tmp_pos1+6);
 $temp = substr($wx_data, ($tmp_pos1+6), $tmp_size);
 $tmpu_pos1 = strpos($wx_data, "<tempunit>");
 $tmpu_pos2 = strpos($wx_data, "</tempunit>");
 $tmpu_size = $tmpu_pos2 - ($tmpu_pos1+10);
 $tempunit = substr($wx_data, ($tmpu_pos1+10), $tmpu_size);

 $hum_pos1 = strpos($wx_data, "<humidity>");
 $hum_pos2 = strpos($wx_data, "</humidity>");
 $hum_size = $hum_pos2 - ($hum_pos1+10);
 $humidity = substr($wx_data, ($hum_pos1+10), $hum_size);
 $humu_pos1 = strpos($wx_data, "<humidityunit>");
 $humu_pos2 = strpos($wx_data, "</humidityunit>");
 $humu_size = $humu_pos2 - ($humu_pos1+14);
 $humidityunit = substr($wx_data, ($humu_pos1+14), $humu_size);

 $dew_pos1 = strpos($wx_data, "<dewpoint>");
 $dew_pos2 = strpos($wx_data, "</dewpoint>");
 $dew_size = $dew_pos2 - ($dew_pos1+10);
 $dewpoint = substr($wx_data, ($dew_pos1+10), $dew_size);
 $dewu_pos1 = strpos($wx_data, "<dewpointunit>");
 $dewu_pos2 = strpos($wx_data, "</dewpointunit>");
 $dewu_size = $dewu_pos2 - ($dewu_pos1+14);
 $dewpointunit = substr($wx_data, ($dewu_pos1+14), $dewu_size);

 $bar_pos1 = strpos($wx_data, "<barometer>");
 $bar_pos2 = strpos($wx_data, "</barometer>");
 $bar_size = $bar_pos2 - ($bar_pos1+11);
 $barometer = substr($wx_data, ($bar_pos1+11), $bar_size);
 $baru_pos1 = strpos($wx_data, "<barometerunit>");
 $baru_pos2 = strpos($wx_data, "</barometerunit>");
 $baru_size = $baru_pos2 - ($baru_pos1+15);
 $barometerunit = substr($wx_data, ($baru_pos1+15), $baru_size);

 $pre_pos1 = strpos($wx_data, "<precip>");
 $pre_pos2 = strpos($wx_data, "</precip>");
 $pre_size = $pre_pos2 - ($pre_pos1+8);
 $precip = substr($wx_data, ($pre_pos1+8), $pre_size);
 $preu_pos1 = strpos($wx_data, "<precipunit>");
 $preu_pos2 = strpos($wx_data, "</precipunit>");
 $preu_size = $preu_pos2 - ($preu_pos1+12);
 $precipunit = substr($wx_data, ($preu_pos1+12), $preu_size);

 $wind_pos1 = strpos($wx_data, "<winddir>");
 $wind_pos2 = strpos($wx_data, "</winddir>");
 $wind_size = $wind_pos2 - ($wind_pos1+9);
 $winddir = substr($wx_data, ($wind_pos1+9), $wind_size);
 $wins_pos1 = strpos($wx_data, "<windspeed>");
 $wins_pos2 = strpos($wx_data, "</windspeed>");
 $wins_size = $wins_pos2 - ($wins_pos1+11);
 $windspeed = substr($wx_data, ($wins_pos1+11), $wins_size);

 $winu_pos1 = strpos($wx_data, "<windunit>");
 $winu_pos2 = strpos($wx_data, "</windunit>");
 $winu_size = $winu_pos2 - ($winu_pos1+10);
 $windunit = substr($wx_data, ($winu_pos1+10), $winu_size);

 $chtml = "<div style=\"display:flex;\">";
  $chtml .= "<div style=\"margin:0 auto;\">";
   $chtml .= "<div style=\"text-align:center\">Temp:</div>";
   $chtml .= "<!--[if IE]><div style=\"text-align:center;font-weight:bold;position:relative;\">$temp{$tempunit}</div><![endif]-->";
   $chtml .= "<!--[if !IE]><!--><div style=\"text-align:center;font-weight:bold;position:relative;\">$temp{$tempunit}</div><!--<![endif]-->";
  $chtml .= "</div>";
  $chtml .= "<div style=\"margin:0 auto;\">";
   $chtml .= "<div style=\"text-align:center\">Dew Point:</div>";
   $chtml .= "<!--[if IE]><div style=\"text-align:center;font-weight:bold;position:relative;\">$dewpoint{$dewpointunit}</div><![endif]-->";
   $chtml .= "<!--[if !IE]><!--><div style=\"text-align:center;font-weight:bold;position:relative;\">$dewpoint{$dewpointunit}</div><!--<![endif]-->";
  $chtml .= "</div>";
  $chtml .= "<div style=\"margin:0 auto;\">";
   $chtml .= "<div style=\"text-align:center\">Relative Humidity:</div>";
   $chtml .= "<!--[if IE]><div style=\"text-align:center;font-weight:bold;position:relative;\">$humidity{$humidityunit}</div><![endif]-->";
   $chtml .= "<!--[if !IE]><!--><div style=\"text-align:center;font-weight:bold;position:relative;\">$humidity{$humidityunit}</div><!--<![endif]-->";
  $chtml .= "</div>";
  $chtml .= "<div style=\"margin:0 auto;\">";
   $chtml .= "<div style=\"text-align:center\">Wind:</div>";
   $chtml .= "<!--[if IE]><div style=\"text-align:center;font-weight:bold;position:relative;\">$windspeed{$windunit} ($winddir)</div><![endif]-->";
   $chtml .= "<!--[if !IE]><!--><div style=\"text-align:center;font-weight:bold;position:relative;\">$windspeed{$windunit} ($winddir)</div><!--<![endif]-->";
  $chtml .= "</div>";
  $chtml .= "<div style=\"margin:0 auto;\">";
   $chtml .= "<div style=\"text-align:center\">Precip:</div>";
   $chtml .= "<!--[if IE]><div style=\"text-align:center;font-weight:bold;position:relative;\">$precip{$precipunit}</div><![endif]-->";
   $chtml .= "<!--[if !IE]><!--><div style=\"text-align:center;font-weight:bold;position:relative;\">$precip{$precipunit}</div><!--<![endif]-->";
  $chtml .= "</div>";
  $chtml .= "<div style=\"margin:0 auto;\">";
   $chtml .= "<div style=\"text-align:center\">Barometer:</div>";
   $chtml .= "<!--[if IE]><div style=\"text-align:center;font-weight:bold;position:relative;\">$barometer{$barometerunit}</div><![endif]-->";
   $chtml .= "<!--[if !IE]><!--><div style=\"text-align:center;font-weight:bold;position:relative;\">$barometer{$barometerunit}</div><!--<![endif]-->";
  $chtml .= "</div>";
 $chtml .= "</div>";

 echo "$chtml";
}

?>
