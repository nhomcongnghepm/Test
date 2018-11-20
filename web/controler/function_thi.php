<?php function day(){
for ($i = 1; $i<=31;$i++)
{
	echo '<option value="'.$i.'">'.$i,'</option>';
}
}
?>

<?php function thang(){

for ($i = 1; $i<=12;$i++)
{
	echo '<option value="'.$i.'">'.$i,'</option>';
}
}
?>

<?php function nam() {
	$namhientaij=getdate();
	for ($i = 2018; $i<=2019;$i++)
{
	echo '<option value="'.$i.'">'.$i,'</option>';
}
}
?>
<?php function gio() {
	for ($i = 0; $i<=23;$i++)
{
	echo '<option value="'.$i.'">'.$i,'</option>';
}
}
?>
<?php function phut() {
		for ($i = 0; $i<=59;$i++)
{
	echo '<option value="'.$i.'">'.$i,'</option>';
}
}
?>
<?php function giay() {
	$namhientaij=getdate();
	for ($i = 0; $i<=59;$i++)
{
	echo '<option value="'.$i.'">'.$i,'</option>';
}
}
?>


