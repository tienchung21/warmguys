<?php
    include("../../Model/connect.php");
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
									<td class="d-flexfv">
                                        <a href="" class="btn btn-outline-success">Sửa</a>
                                        <form action="" method="post">
                                            <a href="device.php?idtb=<?php echo '.$idtb.'; ?>" name="Xóa" class="btn btn-outline-danger">Xóa</a>
                                        </form>
                                        
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
    }
?>

