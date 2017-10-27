<?php
function meme($atas, $bawah, $gambar)
	{
	  	$headerText = str_replace(' ','-',$atas);
    		$footerText = str_replace(' ','-',$bawah);
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_VERBOSE, 1);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_FAILONERROR, 0);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_URL, "https://memegen.link/custom/".$headerText."/".$footerText.".jpg?alt=".$gambar);
		$returned =  curl_exec($ch);
		return($returned);
	}
$a = meme('JNCK', 'Media', 'http://i0.kym-cdn.com/entries/icons/mobile/000/005/180/YaoMingMeme.jpg');
file_put_contents('meme'.time().'.jpg', $a);
?>
