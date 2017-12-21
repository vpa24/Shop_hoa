<div class="card mb-3">
  <div class="card-header">
    <i class="fa fa-table"></i>Thống kê sản phẩm</div>
    <div class="card-body ">
      <table class="table">
      	<thead>
      		<tr>
      			<th>Ngày bắt đầu&nbsp;
              <input type="text" class="span2" value="{$smarty.now|date_format:"%m-%d-%Y"}" data-date-format="mm/dd/yyyy" id="dp2">
      			</th>
      			<th>Ngày kết thúc&nbsp;
      			 <input type="text" class="span2" value="{$smarty.now|date_format:"%m-%d-%Y"}" data-date-format="mm/dd/yyyy" id="dp3">
      			</th>
      		</tr>
      	</thead>
      	<tbody>
          <tr>
            <button type="button" class="btn btn-primary" onclick="">  Bắt đầu tìm</button>
          </tr>
      	</tbody>
      </table>
      <section id="section-linetriangle-1">
        <div class="card mb-3">
          <div class="card-body">
              <canvas id="myBarChartTheoTuan"></canvas>
          </div>
        </div>
</section>
</div>
</div>
