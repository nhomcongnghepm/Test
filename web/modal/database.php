<?php
	error_reporting(0);
	class database{
		// Khai báo các biến dưới dạng private
    private $hostname = 'localhost',
            $username = 'root',
            $password = '',
            $dbname = 'thitracnghiem';
 
    // Khai báo các biến kết nối toàn cục
    public $cn = NULL;
    public $rs = NULL;
 
    // Hàm kết nối
    public function connect()
    {
        // Kết nối
        $this->cn = mysqli_connect($this->hostname, $this->username,$this->password,$this->dbname);
		$this->cn->query("SET NAMES UTF8");
    }
 
    // Hàm ngắt kết nối
    public function close(){
        // Nếu đã kết nối
        if ($this->cn){
            // Ngắt kết nối
            mysqli_close($this->cn);
        }
    }
 
    // Hàm truy vấn
    public function query($sql = null) 
    {       
        // Nếu đã kết nối
        if ($this->cn){
            // Truy vấn
            $sql=mysqli_query($this->cn, $sql);
            return $sql;
        }
    }
 
    // Hàm đếm hàng
    public function num_rows($sql = null) 
    {
        // Nếu đã kết nối
        if ($this->cn)
        {
            $row = mysqli_num_rows($sql);
            return $row;
        }
    }
	
	public function lay_rows($sql=null)
	{
		 if ($this->cn)
        {
            $row = mysqli_fetch_array($sql);
            return $row;
        }
	}	
 	public function row($sql=null)
	{
		 if ($this->cn)
            {
                $row = mysqli_fetch_row($sql);
                return $row;
            }
	}
    // Hàm lấy dữ liệu
    public function fetch_assoc($sql = null, $type)
    {
        // Nếu đã kết nối
        if ($this->cn)
        {
            // Nếu tham số type = 0
            if ($type == 0)
            {
                while ($row = mysqli_fetch_assoc($sql))
                {
                    $data[] = $row;
                }
                return $data;
            }
            // Nếu tham số type = 1
            else if ($type == 1)
            {
                $data = mysqli_fetch_assoc($sql);
                return $data;
            }       
        }
    }
 
    // Hàm xử lý chuỗi dữ liệu truy vấn
    public function real_escape_string($string) {
        // Nếu đã kết nối
        if ($this->cn)
        {
            // Xử lý chuỗi dữ liệu truy vấn
            $string = mysqli_real_escape_string($this->cn, $string);
        }
        // Ngược lại chưa kết nối
        else
        {
            $string = $string;
        }
        return $string;
    }
        // Hàm lấy ID vừa insert
        public function insert_id() {
            // Nếu đã kết nối
            if ($this->cn)
            {
                // Lấy ID vừa insert
                return mysqli_insert_id($this->cn);
            }
        }

    // Hàm lấy ID vừa insert
    public function duyetdethi($made,$b) {
        // Nếu đã kết nối
        if ($this->cn)
        {
            $sql="UPDATE tbl_dethi SET trangthai='$b' WHERE made='$made'";
            return $sql;
        }
    }
	public function chinhsuacauhoi($ma_ch){
        if ($this->cn) {
            $sql = "SELECT * FROM tbl_cauhoi WHERE ma_ch='$ma_ch'";
            return $sql;
        }
    }
	public function dangnhap($username){
		if ($this->cn)
		{
			$sql= "SELECT user, password, quyen FROM user WHERE user='$username'" ;
			return $sql;
		}
	}
	
	public function usergiaovien($username){
		if ($this->cn)
		{
			$sql="SELECT user FROM giaovien WHERE user='$username'";
			return $sql;
		}
	}

	public function useradmin($username){
            if ($this->cn)
            {
                $sql="SELECT user FROM user WHERE user='$username'";
                return $sql;
            }
    }

    public function userhocsinh($username){
            if ($this->cn)
            {
                $sql="SELECT user FROM sinhvien WHERE user='$username'";
                return $sql;
            }
    }

	public function emailgiaovien($email){
		if ($this->cn)
		{
			$sql="SELECT email FROM giaovien WHERE email='$email'";
			return $sql;
		}
	}

	public function emailhocsinh($email){
            if ($this->cn)
            {
                $sql="SELECT email FROM sinhvien WHERE email='$email'";
                return $sql;
            }
    }

	public function emailadmin($email){
            if ($this->cn)
            {
                $sql="SELECT email FROM user WHERE email='$email'";
                return $sql;
            }
    }
	
	public function hienthigiaovien(){
		if ($this->cn)
		{
			$sql="SELECT * FROM giaovien";
			return $sql;
		}
	}
        public function showgiaovien($i,$d){
            if ($this->cn)
            {
                $sql="SELECT * FROM giaovien LIMIT $i,$d";
                return $sql;
            }
        }
	public function hienthihocsinh(){
		if ($this->cn)
		{
			$sql="SELECT * FROM sinhvien";
			return $sql;
		}
	}
        public function showhocsinh($i,$d){
            if ($this->cn)
            {
                $sql="SELECT * FROM sinhvien LIMIT $i,$d";
                return $sql;
            }
        }

	public function hienthicauhoi(){
            if ($this->cn)
            {
                $sql="SELECT * FROM tbl_cauhoi";
                return $sql;
            }
    }
    public function showcauhoidethi($i,$d,$linhvuc){
            if ($this->cn)
            {
                    $sql = "SELECT * FROM tbl_cauhoi,tbl_dethi WHERE tbl_dethi.made=tbl_cauhoi.made and tbl_dethi.linhvuc='$linhvuc' LIMIT $i,$d";
                    return $sql;
            }
    }
    public function showcauhoi_dethi($made,$i,$d){
            if ($this->cn)
            {
                $sql="SELECT * FROM tbl_cauhoi,tbl_dethi WHERE tbl_dethi.made=tbl_cauhoi.made&&tbl_cauhoi.made=$made LIMIT $i,$d";
                return $sql;
            }
    }
    public function hienthidethi($linhvuc){
        if ($this->cn)
        {
            $sql="SELECT * FROM tbl_dethi where linhvuc='$linhvuc'";
            return $sql;
        }
    }
        public function showdethi($i,$d,$linhvuc){
            if ($this->cn)
            {
                $sql="SELECT * FROM tbl_dethi where linhvuc='$linhvuc' LIMIT $i,$d";
                return $sql;
            }
        }

    public function hienthiuser(){
            if ($this->cn)
            {
                $sql="SELECT * FROM user";
                return $sql;
            }
    }
        public function showuser($i,$d){
            if ($this->cn)
            {
                $sql="SELECT * FROM user LIMIT $i,$d";
                return $sql;
            }
        }
        public function showdiem($i,$d,$hocky){
            if ($this->cn)
            {
                $sql="SELECT * FROM diemthi,tbl_dethi where diemthi.made=tbl_dethi.made and diemthi.hocky=$hocky LIMIT $i,$d";
                return $sql;
            }
        }
	public function laydethi($made){
            if ($this->cn)
            {
                $sql="SELECT * FROM tbl_dethi WHERE made='$made'";
                return $sql;
            }
    }

    public function laythongtinsinhvien($id){
            if ($this->cn)
            {
                $sql="SELECT * FROM sinhvien WHERE id='$id'";
                return $sql;
            }
    }

	public function laythongtingiaovien($id){
		if ($this->cn)
		{
			$sql="SELECT * FROM giaovien WHERE id_gv='$id'";
			return $sql;
		}
	}
        public function laythongtin_giaovien($u){
            if ($this->cn)
            {
                $sql="SELECT * FROM giaovien WHERE user='$u'";
                return $sql;
            }
        }
        public function laythongtin_hocsinh($u){
            if ($this->cn)
            {
                $sql="SELECT * FROM sinhvien WHERE user='$u'";
                return $sql;
            }
        }
	public function laythongtinuser($u){
        if ($this->cn)
        {
            $sql= "SELECT * FROM user WHERE user='$u'" ;
            return $sql;
        }
    }
    public function laythongtinpdt($id){
        if ($this->cn)
        {
            $sql= "SELECT * FROM user WHERE id='$id'" ;
            return $sql;
        }
    }
    public function kiemtraketquathi($id)
    {
        if($this->cn)
        {
            $sql="SELECT * FROM diemthi,tbl_dethi where id='$id'";
            return $sql;
        }
    }
    public function doimatkhau($u,$new_pw){
            if ($this->cn)
            {
                $sql="UPDATE user SET password='$new_pw' WHERE user='$u'";
                return $sql;
            }
    }
        public function doimatkhauhocsinh($u,$new_pw){
            if ($this->cn)
            {
                $sql="UPDATE sinhvien SET password='$new_pw' WHERE user='$u'";
                return $sql;
            }
        }
        public function doimatkhaugiaovien($u,$new_pw){
            if ($this->cn)
            {
                $sql="UPDATE giaovien SET password='$new_pw' WHERE user='$u'";
                return $sql;
            }
        }
        public function capnhatthongtin($ho,$ten,$email,$birthdate,$gender,$u){
            if ($this->cn)
            {
                $sql= "UPDATE user SET ho='$ho', ten='$ten', email='$email', birthdate='$birthdate', Gioitinh='$gender' where user='$u'";
                return $sql;
            }
        }
        public function luutacgia($u){
            if ($this->cn)
            {
                $sql= "SELECT * FROM user where user='$u'";
                return $sql;
            }
        }

	public function capnhatgiaovien($ho,$ten,$email,$birthdate,$gender,$bomon,$quyen,$id){
		if ($this->cn)
		{
			 $sql="UPDATE giaovien SET `ho` ='".$ho."',`ten` ='".$ten."',`email` ='".$email."',`birthdate` ='".$birthdate."',`Gioitinh` ='".$gender."',`bomon` ='".$bomon."',`quyen` ='".$quyen."' where id_gv='".$id."'";
			 return $sql;
		}
	}
        public function doithongtingiaovien($ho,$ten,$email,$birthdate,$gender,$u){
            if ($this->cn)
            {
                $sql="UPDATE giaovien SET `ho` ='".$ho."',`ten` ='".$ten."',`email` ='".$email."',`birthdate` ='".$birthdate."',`Gioitinh` ='".$gender."' where user='$u'";
                return $sql;
            }
        }

        public function doithongtinhocsinh($ho,$ten,$email,$birthdate,$gender,$u){
            if ($this->cn)
            {
                $sql="UPDATE hocsinh SET `ho` ='".$ho."',`ten` ='".$ten."',`email` ='".$email."',`birthdate` ='".$birthdate."',`Gioitinh` ='".$gender."' where user='$u'";
                return $sql;
            }
        }

	public function capnhathocsinh($ho,$ten,$email,$birthdate,$gender,$lop,$id){
            if ($this->cn)
            {
                $sql="UPDATE sinhvien SET `ho` ='".$ho."',`ten` ='".$ten."',`email` ='".$email."',`birthdate` ='".$birthdate."',`Gioitinh` ='".$gender."',`tenlop` ='".$lop."'where id='".$id."'";
                return $sql;
            }
    }

	public function capnhatcauhoi($idch,$noidung,$lc1,$lc2,$lc3,$lc4,$dapan){
            if ($this->cn)
            {
                $sql="UPDATE  tbl_cauhoi SET `ma_ch` =  '".$idch."',`noidung` ='".$noidung."',`lc1` ='".$lc1."',`lc2` ='".$lc2."',`lc3` ='".$lc3."',`lc4` ='".$lc4."',`dapan` ='".$dapan."'where ma_ch='".$idch."'";
                return $sql;
            }
        }
	
	public function capnhatuser($ho,$ten,$email,$birthdate,$gender,$quyen,$id){
		if ($this->cn)
		{
			$sql="UPDATE user SET `ho` ='".$ho."',`ten` ='".$ten."',`email` ='".$email."',`birthdate` ='".$birthdate."',`Gioitinh` ='".$gender."',`quyen` ='".$quyen."'where id='".$id."'";
			return $sql;
		}
	}

	public function capnhatdethi($tende,$ngaythi,$hocky,$idmade,$date,$dotthi){
            if ($this->cn)
            {
                $sql="UPDATE tbl_dethi SET `tende` ='".$tende."',`ngaythi` ='".$ngaythi."',`hocky` ='".$hocky."',`ngaydang` ='".$date."', `dotthi` ='".$dotthi."'where made='".$idmade."'";
                return $sql;
            }
    }

	public function themgiaovien($ho,$ten,$username,$pass_signup,$email,$birthdate,$gender,$bomon,$quyen){
		if ($this->cn)
		{
			$sql = "INSERT INTO giaovien VALUE 	('','{$ho}','{$ten}','{$username}','{$pass_signup}','{$email}','{$birthdate}','{$gender}','{$bomon}','{$quyen}')";			
			return $sql;
		}
	}

	public function themdethi($ngaythi,$hocky,$day,$tacgia,$tende,$trangthai,$dotthi,$linhvuc){
            if ($this->cn)
            {
                $sql="INSERT INTO tbl_dethi VALUE ('','$tende','$ngaythi','$hocky','$tacgia','$day','$trangthai','$dotthi','$linhvuc')";
                return $sql;
            }
    }
    public function hienthide_duyet()
    {
        if($this->cn)
        {
            $tv3= "SELECT * FROM  tbl_dethi where trangthai='Đã duyệt'";
            return $tv3;
        }
    }
    public function laynoidungcauhoi()
    {
        if($this->cn)
        {
            $sql= "SELECT * FROM tbl_dethi,tbl_cauhoi where tbl_dethi.made=tbl_cauhoi.made and tbl_dethi.made='".$_POST['monselect']."' and tbl_dethi.hocky='".$_POST['hockyselect']."' and tbl_dethi.ngaythi='".$_POST['ngaythi']."'and dotthi='".$_POST['dotthi']."' LIMIT 0,10";
            return $sql;
        }
    }
    public function laynoidungcauhoi_sau($cau)
    {
        if($this->cn)
        {
            $sql= "SELECT * FROM tbl_dethi,tbl_cauhoi where tbl_dethi.made=tbl_cauhoi.made and tbl_dethi.made='".$_POST['monselect']."' and tbl_dethi.hocky='".$_POST['hockyselect']."' and tbl_dethi.ngaythi='".$_POST['ngaythi']."' and dotthi='".$_POST['dotthi']."' LIMIT ".$cau.",10";
            return $sql;
        }
    }
    public function themid_diemthi($id)
    {
        if($this->cn)
        {
            $sql="INSERT INTO diemthi(id) VALUE ($id)";
            return $sql;
        }
    }
	public function themuser($id,$ho,$ten,$username,$email,$pass_signup,$birthdate,$gender,$quyen){
		if ($this->cn)
		{
			$sql = "INSERT INTO user VALUE 	('$id','{$ho}','{$ten}','{$username}','{$email}','{$pass_signup}','{$birthdate}','{$gender}','{$quyen}')";;
			return $sql;
		}
	}

	public function themhocsinh($ho,$ten,$username,$email,$pass_signup,$birthdate,$gender,$lop,$a){
            if ($this->cn)
            {
                $sql="INSERT INTO sinhvien VALUE ('','{$ho}','{$ten}','{$username}','{$pass_signup}','{$email}','{$birthdate}','{$gender}','$lop','$a')";
                return $sql;
            }
    }

	public function themcauhoi1(){
            if ($this->cn)
            {
                $sql="INSERT INTO tbl_cauhoi(noidung, lc1, lc2, lc3, lc4, dapan, made) VALUES ('$_POST[noidung]','$_POST[lc1]','$_POST[lc2]','$_POST[lc3]','$_POST[lc4]','$_POST[lc1]','$_POST[made]')";
                return $sql;
            }
    }

    public function themcauhoi2(){
            if ($this->cn)
            {
                $sql="INSERT INTO tbl_cauhoi(noidung, lc1, lc2, lc3, lc4, dapan, made) VALUES ('$_POST[noidung]','$_POST[lc1]','$_POST[lc2]','$_POST[lc3]','$_POST[lc4]','$_POST[lc2]','$_POST[made]')";
                return $sql;
            }
    }

    public function themcauhoi3(){
            if ($this->cn)
            {
                $sql="INSERT INTO tbl_cauhoi(noidung, lc1, lc2, lc3, lc4, dapan, made) VALUES ('$_POST[noidung]','$_POST[lc1]','$_POST[lc2]','$_POST[lc3]','$_POST[lc4]','$_POST[lc3]','$_POST[made]')";
                return $sql;
            }
    }

    public function themcauhoi4(){
            if ($this->cn)
            {
                $sql="INSERT INTO tbl_cauhoi(noidung, lc1, lc2, lc3, lc4, dapan, made) VALUES ('$_POST[noidung]','$_POST[lc1]','$_POST[lc2]','$_POST[lc3]','$_POST[lc4]','$_POST[lc4]','$_POST[made]')";
                return $sql;
            }
    }

    public function giaovien_delete($id_gv){
        $delete= "delete from giaovien where id_gv in(";
        foreach($id_gv as $key=>$value)
        {
            $delete.="'".$value."',";
        }
        $delete .= "'')";
        echo $delete;
        return $delete;
    }
    public function  user_delete($id){
        $delete = "delete from user where id in(";
        foreach($id as $key=>$value)
        {
            $delete.="'".$value."',";
        }
        $delete .= "'')";
        echo $delete;
        return $delete;
    }
    public function hocsinh_delete($id){
        $delete = "delete from sinhvien where id in(";
        foreach($id as $key=>$value)
        {
            $delete.="'".$value."',";
        }
        $delete .= "'')";
        echo $delete;
        return $delete;
    }
    public function dethi_delete($made){
        $delete= "delete from tbl_dethi where made in(";
        foreach($made as $key=>$value)
        {
            $delete.="'".$value."',";
        }
        $delete .= "'')";
        return $delete;
    }
    public function cauhoi_delete($ma_ch){
        $delete = "delete from tbl_cauhoi where ma_ch in(";
        foreach($ma_ch as $key=>$value)
        {
            $delete.="'".$value."',";
            //echo $value;
        }
        $delete .= "'')";
        return $delete;
    }
}
?>