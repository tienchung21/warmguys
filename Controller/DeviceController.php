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
    }
?>

