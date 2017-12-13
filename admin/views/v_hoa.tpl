
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <div class="row">
            <div class="col col-6">
              <i class="fa fa-table"></i> Danh sách hoa
            </div>
            <div class="col col-6">          
              <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#add" >Thêm hoa mới</button>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Hình</th>
                  <th>Tên hoa</th>
                  <th>Loại hoa</th>
                  <th>Giá</th>
                  <th>Thời gian</th>
                  <th>Hành động</th>
                </tr>
              </thead>
              <tbody>
              {foreach $doc_hoa as $hoa}
                <tr id="delete{$hoa->MaHoa}">
                  <td width="75px" ><img src="../public/images/hoa/{$hoa->Hinh}" class="img-fluid" alt="Responsive image"></td>
                  <td>{$hoa->TenHoa}</td>
                  <td><a href="hoa.php?loai_hoa={$hoa->MaLoai}">{$hoa->TenLoai}</a></td>
                  <td>{number_format($hoa->Gia)} đ</td>
                  <td>{$hoa->ThoiGian}</td>
                  <td>
                      <button type="button" class="btn btn-primary" onclick="getId({$hoa->MaHoa})" id="update{$hoa->MaHoa}" data-toggle="modal" data-target="#edit{$hoa->MaHoa}" >Sửa</button>
                      <button type="button" onclick="deleteAjax({$hoa->MaHoa})" class="btn btn-danger">Xóa</button>
                  </td>
                </tr>
                {* Modal edit *}
                <div class="modal fade" id="edit{$hoa->MaHoa}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document" style="max-width: 875px;">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Chi tiết {$hoa->TenHoa}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form method="POST" id="uploadForm{$hoa->MaHoa}" action="hoa.php" enctype="multipart/form-data">
                          <input type="hidden" name="ma_hoa" value="{$hoa->MaHoa}">
                          <div class="form-group">
                            <label for="recipient-name" class="form-control-label">Loại hoa:</label>
                            <select class="form-control" name="loai_hoa">
                                <option value="{$hoa->MaLoai}">{$hoa->TenLoai}</option>
                                {foreach $doc_loai_hoa as $loai_hoa}
                                  <option value="{$loai_hoa->MaLoai}">{$loai_hoa->TenLoai}</option>
                                {/foreach}
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="recipient-name" class="form-control-label">Tên hoa:</label>
                            <input type="text" class="form-control" name="ten_hoa" value="{$hoa->TenHoa}" autocomplete="off">
                          </div>
                          <div class="form-group">
                            <label for="recipient-name" class="form-control-label">Giá:</label>
                            <input type="number" class="form-control" name="gia" value="{$hoa->Gia}" autocomplete="off">
                          </div>
                          <div class="form-group">
                            <label for="recipient-name" class="form-control-label">Thành phần:</label>
                            <textarea class="form-control" type="text" name="thanh_phan">{$hoa->ThanhPhan}</textarea>  
                          </div>
                          <div class="form-group">
                            <label for="recipient-name" class="form-control-label">Nội dung:</label>
                            <textarea class="form-control" type="text" name="noi_dung">{$hoa->NoiDung}</textarea>  
                          </div>
                          <div class="form-group">
                            <div class="row">
                              <div class="col col-3">
                                <div class="input-file-container">  
                                  <input class="input-file" type="file" name="hinh" id="file{$hoa->MaHoa}"/>
                                  <label tabindex="0" for="my-file" class="input-file-trigger">Tải lên ảnh mới</label>
                                </div>
                                <p class="file-return"></p>
                              </div>
                              <div class="col col-3">
                                  <img id="hienThi{$hoa->MaHoa}" class="img-fluid" src="../public/images/hoa/{$hoa->Hinh}"/>
                              </div>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                            <button type="submit" class="btn btn-success" name="btn_update" id="checkUpdate{$hoa->MaHoa}">Cập nhật</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                {* end modal edit *}
              {/foreach}
              </tbody>
            </table>
          </div>
        </div>
        {* Modal add *}
        <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document" style="max-width: 875px;">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thêm sản phẩm mới</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="POST" action="hoa.php" id="uploadForm" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="recipient-name" class="form-control-label">Loại hoa:</label>
                    <select class="form-control" name="loai_hoa">
                        <option value="" disabled>Chọn loại tin tức</option>
                        {foreach $doc_loai_hoa as $loai_hoa}
                          <option value="{$loai_hoa->MaLoai}">{$loai_hoa->TenLoai}</option>
                        {/foreach}
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="recipient-name" class="form-control-label">Tên hoa:</label>
                    <input type="text" class="form-control" name="ten_hoa" value="" autocomplete="off" maxlength="50" required>
                  </div>
                  <div class="form-group">
                    <label for="recipient-name" class="form-control-label">Giá:</label>
                    <input type="number" class="form-control" name="gia" value="" autocomplete="off" required>
                  </div>
                  <div class="form-group">
                    <label for="recipient-name" class="form-control-label">Thành phần:</label>
                    <textarea class="form-control" type="text" name="thanh_phan" maxlength="50"></textarea>  
                  </div>
                  <div class="form-group">
                    <label for="recipient-name" class="form-control-label">Nội dung:</label>
                    <textarea class="form-control" type="text" name="noi_dung"></textarea>  
                  </div>
                  <div class="form-group">
                      <div class="row">
                        <div class="col col-3">
                          <div class="input-file-container">  
                            <input class="input-file" id="file" name="hinh" type="file" required>
                            <label tabindex="0" for="my-file" class="input-file-trigger">Tải lên ảnh mới</label>
                          </div>
                          <p class="file-return"></p>
                        </div>
                        <div class="col col-3">
                            <img id="hienThi" class="img-fluid" src=""/>
                        </div>
                      </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-success" name="btn_add">Thêm</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        {* end modal add *}
    <script src="public/js/ajax/ajax_delete_hoa.js"></script>
    <script src="public/js/input_file.js"></script>
    <script src="public/js/script_hien_thi_anh_add.js"></script>
    <script src="public/js/script_hien_thi_anh.js"></script>