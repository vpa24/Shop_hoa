{* Modal edit *}
<div class="modal fade" id="sua{$hoa->MaHoa}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <form method="POST" id="uploadForm{$hoa->MaHoa}" action="sua_sl_hoa.php">
          <input type="hidden" name="ma_hoa" value="{$hoa->MaHoa}">
         
          <div class="form-group">
            <label for="recipient-name" class="form-control-label">Số lượng:</label>
            <input type="text" class="form-control" name="sl" value="{$hoa->SoLuongSP}" autocomplete="off">
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
{* end modal edit *}
