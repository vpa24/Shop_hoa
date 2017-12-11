
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Danh sách hoa</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Tên loại hoa</th>
                  <th>Hành động</th>
                </tr>
              </thead>
              <tbody>
              {foreach $doc_loai_hoa as $loai_hoa}
                <tr id="delete{$loai_hoa->MaLoai}">
                  <td><a href="hoa.php?loai_hoa={$loai_hoa->MaLoai}">{$loai_hoa->TenLoai}</a></td>
                  <td>
                    <button type="button" class="btn btn-primary" id="update{$loai_hoa->MaLoai}" data-toggle="modal" data-target="#edit{$loai_hoa->MaLoai}" >Sửa</button>
                    <button type="button" onclick="deleteAjax({$loai_hoa->MaLoai})" class="btn btn-danger">Xóa</button>
                  </td>
                </tr>
                <div class="modal fade" id="edit{$loai_hoa->MaLoai}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Chi tiết {$loai_hoa->TenLoai}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form method="POST" action="loai_hoa.php">
                          <input type="hidden" name="ma_loai" >
                          <div class="form-group">
                            <label for="recipient-name" class="form-control-label">Tên loại hoa:</label>
                            <input type="text" class="form-control ten_loai" name="ten_loai" value="{$loai_hoa->TenLoai}">
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                            <button type="submit" class="btn btn-success" name="btn_update">Cập nhật</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              {/foreach}
              </tbody>
            </table>
          </div>
        </div>
        <script src="public/js/ajax/ajax_delete_loai_hoa.js"></script>

