<?php
if (isset($this->data['form'])) {
	$valorForm = $this->data['form'];
	// var_dump($this->data);	
}

if (isset($this->data['form'][0])) {
	$valorForm = $this->data['form'][0];
}

$id = '';
if (isset($valorForm['id'])) {
	$id = $valorForm['id'];
}
if ((!empty($valorForm['banner_background']) and (file_exists("app/str/assets/images/banner/" . $valorForm['banner_background'])))) {
	$background = $valorForm['banner_background'];
} else {
	$background = "imgexemple.png";
}
if ((!empty($valorForm['banner_image']) and (file_exists("app/str/assets/images/banner/" . $valorForm['banner_image'])))) {
	$banner_image = $valorForm['banner_image'];
} else {
	$banner_image = "";
}

if (!empty($valorForm['banner_title'])) {
	$banner_title = $valorForm['banner_title'];
} else {
	$banner_title = "";
}

if (!empty($valorForm['banner_text'])) {
	$banner_text = $valorForm['banner_text'];
} else {
	$banner_text = "";
}
// var_dump($banner_text);

?>
<div class="content">
	<div class="wrapper">
		<div class="row">
			<div class="banner-container">


			</div>
		</div>

	</div>
</div>