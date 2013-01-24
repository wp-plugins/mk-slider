<?php
global $wpdb;
$table_name = $wpdb->prefix . "mk_slider";

if(isset($_POST['btn_update']))
{
	$img1 = $_POST['img1'];
	$img2 = $_POST['img2'];
	$img3 = $_POST['img3'];
	$img4 = $_POST['img4'];
	
	$wpdb->query("UPDATE $table_name SET image_1 = '$img1', image_2 = '$img2', image_3 = '$img3', image_4 = '$img4'"); 
	
}
?>

<div class="form_wrap">
<h2>MK Slider Settings</h2>
<small>You can set the path of the images on this page. Those images will appear on the slider.</small><br>
<small> Add &lt;?php if(function_exists('mk_slider')){mk_slider();} ?&gt; in your theme file where you want to add the slider</small><br>
<small>For best results use images of size 889X256 </small>
<?php 
$myrows = $wpdb->get_results( "SELECT * FROM ".$table_name );
?>


<form name="red_form" id="red_form" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
<table cellpadding="5" cellspacing="5">
<tr>
<td>Image 1 URL: </td>
<td><input type="text" name="img1" value="<?php echo $myrows[0]->image_1; ?>" size="100" /></td>
</tr>

<tr>
<td>Image 2 URL: </td>
<td><input type="text" name="img2" value="<?php echo $myrows[0]->image_2; ?>" size="100" /></td>
</tr>

<tr>
<td>Image 3 URL: </td>
<td><input type="text" name="img3" value="<?php echo $myrows[0]->image_3; ?>" size="100" /></td>
</tr>

<tr>
<td>Image 4 URL: </td>
<td><input type="text" name="img4" value="<?php echo $myrows[0]->image_4; ?>" size="100" /></td>
</tr>

<tr>
<td></td>
<td><input type="submit" name="btn_update" value="Update Paths" /></td>
</tr>
</table>
</form>

<script type="text/javascript">
  cleanValidator.init({
    formId: 'red_form,
    inputColors: ['#EDEDED', '#FFFFFF'],
    errorColors: ['#FFFF99', '#CF3339'],
    isRequired: ['pay','lessthan22','between22_41', 'above41'],
    isNumeric: ['pay','lessthan22','between22_41', 'above41'] });
</script>
</div>
	