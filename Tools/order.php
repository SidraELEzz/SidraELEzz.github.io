<html>
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <script src="https://kit.fontawesome.com/55db5a83a3.js" crossorigin="anonymous"></script>
      <style>
         .icon-btn {
         height: 58px;
         width: 58px;
         font-size: 25px;
         margin-left: 10px;
         margin-right: 10px;
         }
      </style>
   </head>
   <body>
     <?php
error_reporting(0);
echo "
<br>        
<br>           
<center><h1>ORDER FOLLOWERS INSTAUP  <span></span></h1></center>        
<br>          
<center><p>BY - SidraELEzz <span></span></p></center>
<br>
";

if(isset($_GET['submit'])){
	$uidx=$_GET['userid'];
    $uid=$_GET['target'];
    $order=$_GET['order'];
 
    
  
function Sidra($length){
	$str="";
	for($a=0;$a<$length;$a++){
		$str.=mt_rand(0,9);
}
	return $str;
}

$x1 = Sidra(2);
    
$x2 = Sidra(2);
    
$x3 = Sidra(2);
   
$x4 = Sidra(2);
    
$IP = $x1.'.'.$x2.'.'. $x3.'.'.$x4;
    
$us = substr(str_shuffle('0987654321mnbvcxzasdfghjklpoiuytrewq'),1,16);
    
$ua = substr(str_shuffle('0987654321mnbvcxzasdfghjklpoiuytrewq'),1,40);
    
$name = substr(str_shuffle('0987654321mnbvcxzasdfghjklpoiuytrewq'),1,7);
    
$tiame=time();


$access=md5('45:8D:2E:5C:3A:B4:02:2D:B5:DD:3B:E0:98:4F:14:90:CB:5F:B5:45'.$uid);


$headers=[

'market: Bazaar',

'access: '.$access,

'lng: en',

'api_key: ABCXYZ123TEST',

"Nagent: null/02:00:00:00:00:00/'.$tiame.'/$us/null/$ua",

'cnt: unknown',

'version: 51',

'pkg: f2c6d7a5b030a1542f7eb589d5013340',

'aid: '.$ua,

'Content-Type: application/x-www-form-urlencoded',

'Host: instaup.marsapi.com',

'Connection: Keep-Alive',

'Accept-Encoding: gzip',

'User-Agent: okhttp/3.12.1',

'X-Forwarded-For: '.$IP.''];

$url="https://instaup.marsapi.com/get_likes/order/follow";

$idx=$uid+3423;

$d=$idx.'ig';

$lV='3rFz>|)VHl-w+5I0';


$key='#p0yJmVK/@($nX?#';

$enc_data = base64_encode(openssl_encrypt($d,"AES-128-CBC",$key,OPENSSL_RAW_DATA,$lV));

$token=md5($enc_data.':M3JGej58KVZIbC13KzVJMA==');


$data='gift=0&order_count='.$order.'&user_id='.$uid.'&tokenV2='.$token.'&start_value=1700&media_url=%7B%22media_url%22%3A%22https%3A%5C%2F%5C%2Finstagram.fccu3-1.fna.fbcdn.net%5C%2Fv%5C%2Ft51.2885-15%5C%2Fe35%5C%2Fs150x150%5C%2F264420143_435496831548995_8076441957316773167_n.jpg%3F_nc_ht%3Dinstagram.fccu3-1.fna.fbcdn.net%26_nc_cat%3D111%26_nc_ohc%3DvWrY6qsKOOAAX9ZgJLH%26edm%3DAPU89FABAAAA%26ccb%3D7-4%26oh%3D00_AT_GHVnpr10j1bCs8Dx5unohvTyp_1DgOtu8It7P_Nmpfw%26oe%3D61B616B1%26_nc_sid%3D86f79a%22%2C%22user_name%22%3A%22'.$fname.'%22%7D&order_id='.$uidx;


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
$response= curl_exec ($ch);
curl_close ($ch);
  



echo "<div class='success'><center>
<font color='blue'><hr>$response<hr></font></center></div>";



	    }
	
	if(!isset($_GET['submit']))
	{
	?>
	<section>
		<div class="container p-5 ">
			<form action="" method="get">
				<div class="mb-3">
					<label class="form-label">Target </label>
					<input type='text' name='target' class="form-control" required>
					<div  class="form-text">Enter pk Instagram Target</div>
					
				</div>
				<div class="mb-3">
					<label class="form-label">user-id</label>
					<input type='text' name='userid' class="form-control" required>
					<div  class="form-text">Enter Your user-id</div>
					
				</div>
				<div class="mb-3">
					<label class="form-label">Send Followers </label>
					<input type='text' name='order' class="form-control" required>
					<div  class="form-text">Enter order  Send Followers</div>
					
				
					
				</div>
				<button type="submit" name='submit' value='submit' class="btn btn-primary">Submit</button>
				
			</form>
			
		</div>
		
	</section>
	<?php
	}
	?>
	<section>
		<div class="container p-2 text-center">
			<button onclick="location.href='http://t.me/Sidra'" class="btn btn-primary rounded-circle icon-btn"><i class="fa fa-telegram"></i></button>
			<button onclick="location.href='https://www.instagram.com/SidraELEzz'" class="btn btn-primary rounded-circle icon-btn"><i class="fa fa-instagram"></i></button>
			<button onclick="location.href='https://m.facebook.com/Sidra-ELEzz-118462356860246/?_rdr'" class="btn btn-primary rounded-circle icon-btn"><i class="fa fa-facebook"></i></button>
			<p class="text-muted p-5">copyright © SidraELEzz 2022</p>
			
		</div>
		
	</section>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	
  </body>
  
</html>
