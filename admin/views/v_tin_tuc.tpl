
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <div class="row">
            <div class="col col-6">
              <i class="fa fa-table"></i> Danh sách tin tức
            </div>
            <div class="col col-6">          
              <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#add" >Thêm tin tức</button>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Hình</th>
                  <th>Tên tin tức</th>
                  <th>Hành động</th>
                </tr>
              </thead>
              <tbody>
                {foreach $doc_tin_tuc as $tin_tuc}
                <tr id="delete{$tin_tuc->MaTT}">
                  <td width="75px" ><img src="../public/images/tin_tuc/{$tin_tuc->Hinh}" class="img-fluid" alt="Responsive image"></td>
                  <td>{$tin_tuc->TenTT}</td>
                  <td>
                      <button type="button" class="btn btn-primary" onclick="getId({$tin_tuc->MaTT})" id="update{$tin_tuc->MaTT}" data-toggle="modal" data-target="#edit{$tin_tuc->MaTT}" >Sửa</button>
                      <button type="button" onclick="deleteAjax({$tin_tuc->MaTT})" class="btn btn-danger">Xóa</button>
                  </td>
                </tr>
                {* Modal edit *}
                <div class="modal fade" id="edit{$tin_tuc->MaTT}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document" style="max-width: 875px;">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Chi tiết {$tin_tuc->TenTT}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form method="POST" id="uploadForm{$tin_tuc->MaTT}" action="tin_tuc.php" enctype="multipart/form-data">
                          <input type="hidden" name="ma_tt" value="{$tin_tuc->MaTT}">
                          <div class="form-group">
                            <label for="recipient-name" class="form-control-label">Loại tin:</label>
                            <select class="form-control" name="loai_tin">
                                <option value="{$tin_tuc->MaLoaiTin}">{$tin_tuc->TenLoaiTin}</option>
                                {foreach $doc_loai_tin as $loai_tin}
                                  <option value="{$loai_tin->MaLoaiTin}">{$loai_tin->TenLoaiTin}</option>
                                {/foreach}
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="recipient-name" class="form-control-label">Tên tin tức:</label>
                            <input type="text" class="form-control" name="ten_tt" value="{$tin_tuc->TenTT}" autocomplete="off">
                          </div>
                          <div class="form-group">
                            <label for="recipient-name" class="form-control-label">Nội dung:</label>
                            <textarea class="ckeditor form-control" type="text" name="noi_dung" maxlength="500">{$tin_tuc->NoiDung}</textarea>  
                          </div>
                          <div class="form-group">
                              <div class="row">
                                <div class="col col-3">
                                  <div class="input-file-container">  
                                    <input class="input-file" id="file{$tin_tuc->MaTT}" name="hinh" type="file">
                                    <label tabindex="0" for="my-file" class="input-file-trigger">Tải lên ảnh mới</label>
                                  </div>
                                  <p class="file-return"></p>
                                </div>
                                <div class="col col-3">
                                    <img id="hienThi{$tin_tuc->MaTT}" class="img-fluid" src="../public/images/tin_tuc/{$tin_tuc->Hinh}"/>
                                </div>
                              </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                            <button type="submit" class="btn btn-success" name="btn_update" id="checkUpdate{$tin_tuc->MaTT}">Cập nhật</button>
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
                <h5 class="modal-title" id="exampleModalLabel">Thêm tin tức mới</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="POST" action="tin_tuc.php" id="uploadForm" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="recipient-name" class="form-control-label">Loại tin:</label>
                    <select class="form-control" name="loai_tin">
                        <option value="" disabled>Chọn loại tin tức</option>
                        {foreach $doc_loai_tin as $loai_tin}
                          <option value="{$loai_tin->MaLoaiTin}">{$loai_tin->TenLoaiTin}</option>
                        {/foreach}
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="recipient-name" class="form-control-label">Tên tin tức:</label>
                    <input type="text" class="form-control" name="ten_tt" value="" autocomplete="off" maxlength="100" required>
                  </div>
                  <div class="form-group">
                    <label for="recipient-name" class="form-control-label">Nội dung:</label>
                    <textarea class="ckeditor form-control" type="text" name="noi_dung" required></textarea>  
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
            <script src="public/js/ajax/ajax_delete_tin_tuc.js"></script>
            <script src="public/js/input_file.js"></script>
            <script src="public/js/script_hien_thi_anh_add.js"></script>
            <script src="public/js/script_hien_thi_anh.js"></script>
