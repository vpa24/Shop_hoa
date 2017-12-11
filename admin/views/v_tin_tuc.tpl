
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Danh sách hoa</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Hình</th>
                  <th>Tên tin tức</th>
                  <th>Nội dung</th>
                  <th>Hành động</th>
                </tr>
              </thead>
              <tbody>
                {foreach $doc_tin_tuc as $tin_tuc}
                <tr id="delete{$tin_tuc->MaTT}">
                  <td width="75px" ><img src="../public/images/tin_tuc/{$tin_tuc->Hinh}" class="img-fluid" alt="Responsive image"></td>
                  <td>{$tin_tuc->TenTT}</td>
                  <td width="300px">
                    <span>
                        <p class="hidden-text">{$tin_tuc->NoiDung}</p>
                    </span>
                </td>
                  <td>
                      <button type="button" class="btn btn-primary">Sửa</button>
                      <button type="button" onclick="deleteAjax({$tin_tuc->MaTT})" class="btn btn-danger">Xóa</button>
                  </td>
                </tr>
                {/foreach}
              </tbody>
            </table>
          </div>
        </div>
            <script src="public/js/ajax/ajax_delete_tin_tuc.js"></script>

