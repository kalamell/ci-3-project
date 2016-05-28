<?php $this->load->view('header');?>

<h1>SHOW PRODUCT INDEX</h1>

<p>name : <?=$name;?></p>
<p>surname : <?=$surname;?></p>

<?php
foreach($items as $item) {
	echo $item.' ';
}
?>