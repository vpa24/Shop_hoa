<script src="public/js/jquery.js"></script>
<script src="public/js/bootstrap.js"></script>
<script src="public/js/slider.js"></script>
<script src="public/js/custom.js"></script>
<script src="public/js/ajax/ajax_tim_kiem.js"></script>
<script src="public/js/ajax/ajax_tim_kiem-mobile.js"></script>
<script src="public/js/gio_hang.js"></script>
<script src="public/js/ajax/xoa_gio_hang.js"></script>
<script src="public/js/jquery.gotop.js"></script>
<script src="public/js/slider/bxslider.min.js"></script>
<script src="public/js/slider/script.slider.js"></script>
<script src="public/js/chat.js"></script>
<script type="text/javascript">
      $("#giam").click(function(){
        var sl=$(".value").val();
        sl--;
        $(".value").val(sl);
        if(sl<=1)
          $(".value").val(1);
      });
      $("#tang").click(function(){
          var sl=$(".value").val();
          sl++;
          $(".value").val(sl);
          if(sl>=10)
            $(".value").val(10);

      });
</script>
<script type="text/javascript">
  {if isset($giohang)}
    {foreach $hoa as $sp}
      $("#tang_{$sp->MaHoa}").click(function(){
        var sl=$("#qty_{$sp->MaHoa}").val();
        sl++;
        $("#qty_{$sp->MaHoa}").val(sl);
      });
    $("#giam_{$sp->MaHoa}").click(function(){
      var sl=$("#qty_{$sp->MaHoa}").val();
      sl--;
      $("#qty_{$sp->MaHoa}").val(sl);
      if(sl<=1)
        $("#qty_{$sp->MaHoa}").val(1);
      });
    {/foreach}
  {/if}
</script>
<script type="text/javascript">
  $('#gotop').gotop({
    background: '#FF3366',
    bottom : '100px',
    mobileOnly: false
  });
</script>

	<script>
  {if isset($smarty.session.success)}
	swal({
	title: "Đặt hàng thành công!",
	text: "{$smarty.session.success}!",
	type: "success"
	}).then(function() {
		window.location="check_hoa_don.php?dien_thoai={$smarty.session.dien_thoai}";
	});
  {/if}
	</script>
