<?php
$toPlace = '';

if($Timage){
	$toPlace = '<img src="'.$Timage.'" width="20%" height="100%">';
}else{
	$anotherPosition = $i + 1;
	$toPlace = '<section class="placing-text"><p>' . $anotherPosition . '</p></section>';
}

echo('
<article class="user">

	'. $toPlace.'

	<section class="user-description">
	<p class="name">'. $cUsername .'</p>
	<p class="pontuation">Баллы: '. $cUserPoints .' pts</p>');
	
if($_SESSION['user'] == "admin"){
	echo "<form method='GET' action='obnull.php'>
		<input type='hidden' name='login' value='".$cUsername."' />
		<input type='submit' value='Обнулить'>
	</form>";
}


	echo('</section>
</article>
');

?>

