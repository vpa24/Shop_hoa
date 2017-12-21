<div class="container">
	{include file="views/khach_hang/v_thanh_danh_muc.tpl" }
	{include file="views/khach_hang/v_thong_tin.tpl" }
	{include file="views/khach_hang/v_thong_tin_don_hang.tpl" }
</div>
{if isset($smarty.session.success)}
	<script>
	swal({
	title: "Đặt hàng thành công!",
	text: "{$smarty.session.success}!",
	type: "success"
	}).then(function() {
		window.location="check_hoa_don.php?dien_thoai={$smarty.session.dien_thoai}";
	});
	</script>
{/if}
