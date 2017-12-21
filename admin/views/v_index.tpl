<div class="row">
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-primary o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fa fa-fw fa-comments"></i>
          </div>
          <div class="mr-5">{$dem_tin_tuc->dem} tin tức</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="tin_tuc.php">
          <span class="float-left">Xem chi tiết</span>
          <span class="float-right">
            <i class="fa fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-warning o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fa fa-fw fa-list"></i>
          </div>
          <div class="mr-5">{$dem_hoa->dem} sản phẩm đang bán</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="hoa.php">
          <span class="float-left">Xem chi tiết</span>
          <span class="float-right">
            <i class="fa fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-danger o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fa fa-fw fa-support"></i>
          </div>
          <div class="mr-5" style="font-size: 14px">12 đơn hàng chưa duyệt</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="#chua_duyet">
          <span class="float-left">Xem chi tiết</span>
          <span class="float-right">
            <i class="fa fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-success o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fa fa-fw fa-shopping-cart"></i>
          </div>
          <div class="mr-5">{$so_hoa_don_trong_ngay->count} đơn hàng ngày {$day}</div>
        </div>
      </div>
    </div>
  </div>
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-area-chart"></i>Số lượng bán theo ngày</div>
        <div class="card-body">
          <canvas id="myAreaChart" width="100%" height="30"></canvas>
        </div>
      </div>
      <div class="container">
        <div class="card mb-3" id="chua_duyet">
          <div class="card-header">
            <i class="fa fa-table"></i> Danh sách hóa đơn chưa xử lý</div>
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
                    <th>Hành động</th>
                  </tr>
                </thead>
                <tbody>
                  {foreach $doc_hoa_don as $hoa_don}
                  <tr id="delete{$hoa_don->ma_hoa_don}">
                    <td>
                      <a href="chi_tiet_hoa_don.php?ma_hoa_don={$hoa_don->ma_hoa_don}" title="Xem chi tiết đơn hàng" target="_blank">
                        {$hoa_don->ma_hoa_don}
                      </a>
                    </td>
                    <td>{$hoa_don->ten_khach_hang}</td>
                    <td>{$hoa_don->ngay_dat|date_format:'%d-%m-%Y'}</td>
                    <td>{number_format($hoa_don->tong_thanh_tien)} đ</td>
                    <td>{$hoa_don->trang_thai}</td>
                    <td>
                        <button type="button" onclick="updateAjax({$hoa_don->ma_hoa_don})" class="btn btn-success">Xử lý</button>
                        <button type="button" onclick="deleteAjax({$hoa_don->ma_hoa_don})" class="btn btn-danger">Xóa</button>
                    </td>
                  </tr>
                  {/foreach}

                </tbody>
              </table>
            </div>
          </div>
        </div>
      <!-- Example Bar Chart Card-->
      <div class="row">
        <div class="col-sm-8">  <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-bar-chart"></i>Doanh thu theo tuần</div>
            <div class="card-body">
                  <canvas id="myBarChart" width="100" height="50"></canvas>
        </div></div></div>
        <div class="col-sm-4"> <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-pie-chart"></i>Số lượng hoa theo loại</div>
          <div class="card-body">
            <canvas id="myCanvas" width="50%" height="50" ></canvas>
          </div>
        </div>
      </div>
    </div>
