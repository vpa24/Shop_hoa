
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <div class="row">
            <div class="col col-6">
              <i class="fa fa-table"></i> Danh sách thông tin
            </div>
            <div class="col col-6">          
              <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#add" >Thêm thông tin mới</button>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Hình</th>
                  <th>Tên Thông Tin</th>
                  <th>Thời gian</th>
                  <th>Hành động</th>
                </tr>
              </thead>
              <tbody>
              {foreach $doc_thong_tin as $thong_tin}
                <tr id="delete{$thong_tin->id}">
                  <td width="175px" style="max-width: 175px; max-height: 200px;"><img src="../public/images/banner/{$thong_tin->Hinh}" class="img-fluid" alt="Responsive image"></td>
                  <td>{$thong_tin->TieuDe}</td>
                  <td>{$thong_tin->ThoiGian}</td>
                  <td>
                      <button type="button" class="btn btn-primary" onclick="getId({$thong_tin->id})" id="update{$thong_tin->id}" data-toggle="modal" data-target="#edit{$thong_tin->id}" >Sửa</button>
                      <button type="button" onclick="deleteAjax({$thong_tin->id})" class="btn btn-danger">Xóa</button>
                  </td>
                </tr>
                {* Modal edit *}
                <div class="modal fade" id="edit{$thong_tin->id}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document" style="max-width: 875px;">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Chi tiết {$thong_tin->TieuDe}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form method="POST" id="uploadForm{$thong_tin->id}" action="thong_tin.php" enctype="multipart/form-data">
                          <input type="hidden" name="id" value="{$thong_tin->id}">
                          <div class="form-group">
                            <label for="recipient-name" class="form-control-label">Tên slider:</label>
                            <input type="text" class="form-control" name="tieu_de" value="{$thong_tin->TieuDe}" autocomplete="off">
                          </div>
                          <div class="form-group">
                            <label for="recipient-name" class="form-control-label">Đường dẫn:</label>
                            <input type="text" class="form-control" name="duong_dan" value="{$thong_tin->DuongDan}" autocomplete="off">
                          </div>
                          <div class="form-group">
                            <label for="recipient-name" class="form-control-label">Hành động:</label>
                            <input type="text" class="form-control" name="hanh_dong" value="{$thong_tin->HanhDong}" autocomplete="off">
                          </div>
                          <div class="form-group">
                            <div class="row">
                              <div class="col col-3">
                                <div class="input-file-container">  
                                  <input class="input-file" type="file" name="hinh" id="file{$thong_tin->id}"/>
                                  <label tabindex="0" for="my-file" class="input-file-trigger">Tải lên ảnh mới</label>
                                </div>
                                <p class="file-return"></p>
                              </div>
                              <div class="col col-3">
                                  <img id="hienThi{$thong_tin->id}" class="img-fluid" src="../public/images/banner/{$thong_tin->Hinh}"/>
                              </div>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                            <button type="submit" class="btn btn-success" name="btn_update" id="checkUpdate{$thong_tin->id}">Cập nhật</button>
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
                <form method="POST" action="thong_tin.php" id="uploadForm" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="recipient-name" class="form-control-label">Tên thông tin:</label>
                    <input type="text" class="form-control" name="tieu_de" value="" autocomplete="off">
                  </div>
                  <div class="form-group">
                    <label for="recipient-name" class="form-control-label">Đường dẫn:</label>
                    <input type="text" class="form-control" name="duong_dan" value="" autocomplete="off">
                  </div>
                  <div class="form-group">
                    <label for="recipient-name" class="form-control-label">Hành động:</label>
                    <input type="text" class="form-control" name="hanh_dong" value="" autocomplete="off">
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
    <script src="public/js/ajax/ajax_delete_thong_tin.js"></script>
    <script src="public/js/input_file.js"></script>
    <script src="public/js/script_hien_thi_anh_add.js"></script>
    <script src="public/js/script_hien_thi_anh.js"></script>
    {if isset($smarty.session.thongBao)}
      <script>swal("{$smarty.session.thongBao}");</script>
    {/if}
    {if isset($smarty.session.thongBaoThanhCong)}
      <script>
          swal({
            title: "Thành công!",
            text: "{$smarty.session.thongBaoThanhCong}!",
            type: "success"
            }).then(function() {
                window.location = "thong_tin.php";
            });
      </script>
    {/if}
