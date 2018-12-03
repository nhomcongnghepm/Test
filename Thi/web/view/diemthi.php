<link rel="stylesheet" href="../assets/style.css" type="text/css" media="screen" charset="utf-8">
<link rel="stylesheet" href="../assets/chinhsuadethi.css" type="text/css" media="screen" charset="utf-8">
<div style="margin:20px 70px 10px; font-size:14px;">
    <hr size="1" color="#cadadd" style="margin:15px auto;" />
    <form action="?menu=diemthi" method="post" class="">
        <br><table width="600" border="0"  cellpadding="0" cellspacing="0" background="../assets/image/body.png">
            <tr>
                <td bgcolor="#CCCCCC"  height="38px"colspan="3" align="center" class="style1">Duyệt đề thi</td>
            </tr>
            <tr>
                <td align="right" class="style1"><div align="center">Mời bạn hãy chọn học kỳ cần xem điểm <span style="color:#ff0000;font-size:22px">* </span>
                        <select class="form-control" name="hockyselect" id="chonhocky">
                            <option value="1">Học kỳ 1</option>
                            <option value="2">Học kỳ 2</option>
                        </select>                    </div></td>
            <tr/>
            <tr>
                <td colspan="3" style="padding: 10px 0px 10px 0px" align="center"><label>
                        <input type="submit" name="ok" id="ok" value="Xem điểm " />
                    </label>
            </tr>
        </table>
        <td colspan="3" style="padding: 10px 0px 10px 0px" align="center">
            <?php include '../controler/diemthi.php';?></td>
    </form>
</div>