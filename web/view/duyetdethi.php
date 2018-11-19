<link rel="stylesheet" href="../assets/style.css" type="text/css" media="screen" charset="utf-8">
<link rel="stylesheet" href="../assets/chinhsuadethi.css" type="text/css" media="screen" charset="utf-8">
<div style="margin:20px 70px 10px; font-size:14px;">
<hr size="1" color="#cadadd" style="margin:15px auto;" />
<form action="?menu=duyetdethi" method="post" class="">
    <br><table width="600" border="0"  cellpadding="0" cellspacing="0" background="../assets/image/body.png">
        <tr>
            <td bgcolor="#CCCCCC"  height="38px"colspan="3" align="center" class="style1">Duyệt đề thi</td>
        </tr>
        <tr>
            <td align="right" class="style1"><div align="center">Mời bạn hãy chọn đề cần duyệt <span style="color:red;font-size:22px">* </span>
                    <?php include '../controler/laymade.php'; ?>
            </div></td>
        <tr/>
        <tr>
            <td colspan="3" style="padding: 10px 0px 10px 0px" align="center"><label>
                    <input type="submit" name="ok" id="ok" value="Xem đề thi " />
                </label>
            </tr>
    </table>
<td colspan="3" style="padding: 10px 0px 10px 0px" align="center">
    <?php include '../controler/duyetdethi.php';?></td>
</form>
</div>