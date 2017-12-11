
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
                  <th>Tên hoa</th>
                  <th>Loại hoa</th>
                  <th>Giá</th>
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
                  <td>
                      <button type="button" class="btn btn-primary">Sửa</button>
                      <button type="button" onclick="deleteAjax({$hoa->MaHoa})" class="btn btn-danger">Xóa</button>
                  </td>
                </tr>
              {/foreach}
              </tbody>
            </table>
          </div>
        </div>
    <script src="public/js/ajax/ajax_delete_hoa.js"></script>
