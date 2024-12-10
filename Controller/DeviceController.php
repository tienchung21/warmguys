<?php
    include_once("../../Model/connect.php");
    class device extends connect_database{
        public function selectalldevice($sql){
            $link = $this->connect();
            $ketqua = mysqli_query($link, $sql);
            $i = mysqli_num_rows($ketqua);
            if($i>0){
                echo '<table class="table m-0">
						<thead>
							<tr>
								<th>STT</th>
								<th>Tên thiết bị</th>
								<th>Loại thiết bị</th>
								<th>Tình trạng</th>
								<th>Hình ảnh</th>
                                <th>Tùy Chỉnh</th>
							</tr>
						</thead>';
                    $dem=1;
                    while($row = mysqli_fetch_array($ketqua)){
                        $idtb = $row['MaTB'];
                        $tenTB = $row['TenTB'];
                        $loaiTB = $row['LoaiTB'];
                        $tingtrang = $row['TinhTrangTB'];
                        $hinh = $row['Hinhanh'];
                        echo '
                            <tbody>
								<tr>
									<td style="padding-top: 18px;">'.$dem.'</td>
									<td style="padding-top: 18px;">'.$tenTB.'</td>
									<td style="padding-top: 18px;">'.$loaiTB.'</td>
									<td style="padding-top: 18px;">'.$tingtrang.'</td>
									<td>
	                                    <img src="./assets/img/device/'.$hinh.'" alt="" width="50px" height="50px">
                                    </td>
                                    <form action=""   method="post">
									    <td> 
                                            <a href="../../View/Admin/updateDevice.php?id='.$idtb.'" class="btn btn-outline-success h-100">Sửa</a>
                                            <button type="submit" value='.$idtb.'  name="nutXoa" class="btn btn-outline-danger">Xóa</button>
                                            <a href="../../View/Admin/formghinhan.php?id='.$idtb.'" class="btn btn-outline-success h-100">Ghi nhận tình trạng</a>
                                        </td>
                                    </form>
								</tr>
                            </tbody>';
                        $dem++;
                    }
                    echo '</table>';
            }else{
                echo 'Đang cập nhật dữ liệu';
            }
        }


        public function selectdsghinhan($sql){
            $link = $this->connect();
            $ketqua = mysqli_query($link, $sql);
            $i = mysqli_num_rows($ketqua);
            if($i>0){
                echo '<table class="table m-0">
						<thead>
							<tr>
								<th>STT</th>
								<th>Tên thiết bị</th>
								<th>Mô tả tình trạng</th>
								<th>Nhân viên ghi nhận</th>
								<th>Ngày ghi nhận</th>
								<th>Thời gian ghi nhận</th>
                                <th>Trạng thái</th>
							</tr>
						</thead>';
                    $dem=1;
                    while($row = mysqli_fetch_array($ketqua)){
                        $id = $row['ID'];
                        $idTB = $row['MaTB'];
                        $tenTB = $row['TenTB'];
                        $mota = $row['Motatinhtrang'];
                        $ngay = $row['Ngayghinhan'];
                        $gio = $row['Time'];
                        $tenNV = $row['TenNV'];
                        $trangthai = ($row['trangthai']!="Chưa bảo trì")?
                        ' <a href="" class="btn btn-outline-success h-100">Đã bảo trì</a>':
                            ' <a href="../../View/Admin/formBaotriTB.php?id='.$id.'&idTB='.$idTB.'" class="btn btn-outline-danger h-100">Chưa bảo trì</a>';
                        echo '
                            <tbody>
								<tr>
									<td style="padding-top: 18px;">'.$dem.'</td>
									<td style="padding-top: 18px;">'.$tenTB.'</td>
									<td style="padding-top: 18px;">'.$mota.'</td>
									<td style="padding-top: 18px;">'.$tenNV.'</td>
									<td style="padding-top: 18px;">'.$ngay.'</td>
									<td style="padding-top: 18px;">'.$gio.'</td>
                                    <td>
                                        '.$trangthai.'
                                    </td>
								</tr>
                            </tbody>';
                        $dem++;
                    }
                    echo '</table>';
            }else{
                echo 'Đang cập nhật dữ liệu';
            }
        }


        public function selectDsbaotri($sql) {
            $link = $this->connect();
            $result = mysqli_query($link, $sql);
        
            if (!$result) {
                die('Lỗi truy vấn SQL: ' . mysqli_error($link));
            }
        
         
            if (mysqli_num_rows($result) > 0) {
                echo '<table class="table m-0">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên thiết bị</th>
                                <th>Nhân viên bảo trì</th>
                                <th>Mô tả bảo trì</th>
                                <th>Ngày bảo trì</th>
                                <th>Giải pháp</th>
                                <th>Kết quả</th>
                            </tr>
                        </thead>';
        
                $dem = 1;
                while ($row = mysqli_fetch_array($result)) {
                    $tenTB = $row['TenTB'];
                    $motabaitri = $row['Motabaotri'];
                    $tennv = $row['TenNV'];
                    $giaiphap = $row['GiaiPhap'];
                    $ketqua_baotri = $row['KetQua']; 
                    $ngay = $row['Ngaybaotri'];
        
                    echo '
                        <tbody>
                            <tr>
                                <td style="padding-top: 18px;">' . $dem . '</td>
                                <td style="padding-top: 18px;">' . $tenTB . '</td>
                                <td style="padding-top: 18px;">' . $tennv . '</td>
                                <td style="padding-top: 18px;">' . $motabaitri . '</td>
                                <td style="padding-top: 18px;">' . $ngay . '</td>
                                <td style="padding-top: 18px;">' . $giaiphap . '</td>
                                <td style="padding-top: 18px;">' . $ketqua_baotri . '</td>
                            </tr>
                        </tbody>';
                    $dem++;
                }
                echo '</table>';
            } else {
                echo 'Đang cập nhật dữ liệu';
            }
        }
        
}
?>

