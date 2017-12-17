
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Danh sách khách hàng</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Tên khách hàng</th>
                  <th>Phái</th>
                  <th>Email</th>
                  <th>Địa chỉ</th>
                  <th>Điện thoại</th>
                </tr>
              </thead>
              <tbody>
              {foreach $doc_khach_hang as $khach_hang}
                <tr>
                  <td>{$khach_hang->ten_khach_hang}</td>
                  <td>
                  {if $khach_hang->phai == 1}
                    Nam
                  {else}
                    Nữ
                  {/if}
                  </td>
                  <td>{$khach_hang->email}</td>
                  <td>{$khach_hang->dia_chi}</td>
                  <td>{$khach_hang->dien_thoai}</td>
                </tr>
              {/foreach}
              </tbody>
            </table>
          </div>
        </div>
      
