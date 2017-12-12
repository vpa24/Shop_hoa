{if count($giohang)==0}
	<div class="canh_giua">
			<h2 class="giohang_rong">Rất tiếc bạn chưa mua hàng....!</h2>
	</div>
{else}
<form method="post">
	<div class="check-out">
    <div class="container">
    	<div class="bs-example4" data-example-id="simple-responsive-table">
        <div class="table-responsive">
					<div class="canh_giua">
							<h2 class="giohang_rong">Giỏ hàng của bạn</h2>
					</div>

        	<table class="table-heading simpleCart_shelfItem">
	    		  <tr>
		    			<th>Sản Phẩm</th>
		    			<th>Đơn giá</th>
		    			<th class="sl_gh">Số lượng </th>
		    			<th>Tổng</th>
		          <th>Xóa</th>
	    		  </tr>
						{$tongtt=0}
						  {foreach $giohang as $gh}
						  	{foreach $hoa as $sp}
						  		{if $gh@key==$sp->MaHoa}
						  			 {$tongtt =$tongtt+ $gh*$sp->Gia}
						 <tr class="cart-header">
               <td><h4 class="ten_sp"><a href="san-pham/{makeURL($sp->TenHoa)}-{$sp->MaHoa}.html">{$sp->TenHoa}</a></h4></td>
							 <td>{number_format($sp->Gia)} đ</td>
							 <td>
									<div class="quantity td_sl">
	   								<div class="quantity-select">
											<div class="entry value-minus" id="giam_{$sp->MaHoa}">&nbsp;</div>
											<div class="so_luong"><input type="text" class="entry value item_quantity_" id="qty_{$sp->MaHoa}" name="sl[]" value="{$gh}" ></div>
			    						<div class="entry value-plus active" id="tang_{$sp->MaHoa}">&nbsp;</div>
			    					</div>
			    				</div>
								</td>
								<td>{number_format($sp->Gia*$gh)} đ</td>
								<td>
									<div class="close1"><a href="xoagiohang.php?id={$sp->MaHoa}">x</a></div>
								</td>
							</tr>
									{/if}
								{/foreach}
							{/foreach}
						</table>
					</div>
				</div>
				<div class="tong_cong">
        	<h3>Tổng cộng: <span class="tong_tien">{$smarty.session.tongtt=$tongtt}{number_format($tongtt)} đ</span></h3>
    	</div>
			<div class="produced">
    	 	<input type="submit" value="Cập nhập giỏ hàng" name="btnCapnhat" class="one" />
    	</div>
			<div class="produced">
				<a href="khach_hang.php"><input type="button" value="Tiến hành đặt hàng" class="one" /></a>
    	</div>
		</div>
 </div>
</form>
{/if}
