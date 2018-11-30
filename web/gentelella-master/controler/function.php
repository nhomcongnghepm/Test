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
	for ($i = 1990; $i<=$namhientaij['year'];$i++)
{
	echo '<option value="'.$i.'">'.$i,'</option>';
}
}
?>
<?php function quyen()
{
    for ($i = 1; $i <= 2; $i++) {
        echo '<option value="' . $i . '">' . $i, '</option>';
    }
}
?>

<?php function rand_string($length)
    {
        $chars = "0123456789";
        $size = strlen($chars);
        $str = substr(str_shuffle($chars), 0, $length);
        for ($i = 0; $i < $length; $i++) {
            $str .= $chars[rand(0, $size - 1)];
        }
        return $str;
    }
    ?>