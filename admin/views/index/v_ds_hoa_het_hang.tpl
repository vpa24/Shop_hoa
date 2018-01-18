 <div class="card-header">
    <i class="fa fa-table"></i> Danh sách hoa hết hàng</div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
    <tr>
      <th>Hình</th>
      <th>Tên hoa</th>
      <th>Số Lượng</th>
      <th>Hành động</th>
    </tr>
  </thead>
  <tbody>
  {foreach $dshoa as $hoa}
    <tr id="delete{$hoa->MaHoa}">
      <td width="75px" ><img src="../public/images/hoa/{$hoa->Hinh}" class="img-fluid" alt="Responsive image"></td>
      <td>{$hoa->TenHoa}</td>
      <td>{$hoa->SoLuongSP}</td>
      <td>
          <button type="button" class="btn btn-primary" onclick="getId({$hoa->MaHoa})" id="update{$hoa->MaHoa}" data-toggle="modal" data-target="#sua{$hoa->MaHoa}" >Sửa</button>
      </td>
    </tr>
    {include file="views/index/v_modal_sua_sl_hoa.tpl"}
          {/foreach}

        </tbody>
      </table>
    </div>
  </div>
