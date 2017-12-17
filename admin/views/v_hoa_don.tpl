
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Danh sách hóa đơn</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Mã đơn hàng</th>
                  <th>Khách hàng</th>
                  <th>Ngày đặt</th>
                  <th>Tổng tiền</th>
                  <th>Trạng thái</th>
                </tr>
              </thead>
              <tbody>
                {foreach $doc_hoa_don as $hoa_don}
                <tr>
                  <td>
                     <a href="chi_tiet_hoa_don.php?ma_hoa_don={$hoa_don->ma_hoa_don}" title="Xem chi tiết đơn hàng">
                       {$hoa_don->ma_hoa_don}
                     </a>
                   </td>
                  <td>{$hoa_don->ten_khach_hang}</td>
                  <td>{$hoa_don->ngay_dat|date_format:'%d-%m-%Y'}</td>
                  <td>{number_format($hoa_don->tong_thanh_tien)} đ</td>
                  <td>
                    <select name="ds[]">
                      <option value="1"
                            {if $hoa_don->trang_thai==1}
                                selected
                            {/if}>Chưa thanh toán</option>
                      <option value="2"
                            {if $hoa_don->trang_thai==2}
                              selected
                            {/if}>Đã thanh toán</option>
                      <option value="3"
                            {if $hoa_don->trang_thai==3}
                              selected
                            {/if}>Hủy đơn hàng</option>
                    </select>
                  </td>
                </tr>
                {/foreach}

              </tbody>
            </table>
          </div>
        </div>
