<?php 
function randomString($length)
{
    $str        = "";
    $characters = '1234567890';
    $max        = strlen($characters) - 1;
    for ($i = 0; $i < $length; $i++) {
        $rand = mt_rand(0, $max);
        $str .= $characters[$rand];
    }
    return $str;
}
function dly($length)
{
    $str        = "";
    $characters = '123456789';
    $max        = strlen($characters) - 1;
    for ($i = 0; $i < $length; $i++) {
        $rand = mt_rand(0, $max);
        $str .= $characters[$rand];
    }
    return $str;
}
function pwd($length)
{
    $str        = "";
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $max        = strlen($characters) - 1;
    for ($i = 0; $i < $length; $i++) {
        $rand = mt_rand(0, $max);
        $str .= $characters[$rand];
    }
    return $str;
}
function curl( $data){
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, 'https://luckyshop.app/?/mobile/user/manage');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array("Cookie: PHPSESSID=95tj567m3qna4vub4tcqg66a45",
    	"Host: luckyshop.app",
    	'Sec-Ch-Ua: "(Not(A:Brand";v="8", "Chromium";v="99"',
    	'X-Requested-With: XMLHttpRequest',
    	'Origin: https://luckyshop.app',
    	'Referer: https://luckyshop.app/?/mobile/user/register'));
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    $output = curl_exec($ch); 
    curl_close($ch);      
    return($output);
}

			print_r(" NOMER 		  STATUS 		Delay");echo "\n\r";
while (true) {
		$nomer = randomString(9);
		$data = 'type=register&mobile=81'.$nomer.'&password='.pwd(10).'&invite=84470';
		$send = curl($data);
		$send = json_decode($send, TRUE);
			echo "\n\r";
			$dly = dly(1);
			print_r(" 081{$nomer} 	".$send['msg']." 	{$dly}0");
			sleep($dly."0");
}
?>