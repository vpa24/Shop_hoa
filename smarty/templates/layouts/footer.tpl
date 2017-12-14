<footer>
    <div class="container">
        <div class="col-sm-5 text-left">
            © Bản quyền thuộc về Shop Hoa Online
        </div>
        <div class="col-sm-7 text-right">
            Điện hoa hiện đại 137 Nguyễn Chí Thanh | Email: nct@gmail.com | Hotline: 0165.453.3100
        </div>
    </div>
</footer>
        <script src="public/js/jquery.js"></script>
        <script src="public/js/bootstrap.js"></script>
        <script src="public/js/chat.js"></script>
        <script src="public/js/slider.js"></script>
        <script src="public/js/slider/bxslider.min.js"></script>
        <script src="public/js/slider/script.slider.js"></script>
        <script src="public/js/jquery.elevatezoom.js"></script>
        <script src="public/js/jquery.elevateZoom-3.0.8.min.js"></script>
        <script src="public/js/imagezoom.js"></script>
        <script src="public/js/custom.js"></script>
        <script src="public/js/gio_hang.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
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
            	});
    });
  </script>
  <script>
  $("#zoom_08").elevateZoom({
  			zoomWindowFadeIn: 800,
  			zoomWindowFadeOut: 800,
  			lensFadeIn: 800,
  			lensFadeOut: 800
  });
  </script>
  <script type="text/javascript">
$(document).ready(function(){
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

});
</script>
<script type="text/javascript">
  jQuery(document).ready(function () {
    jQuery(".zvwqfjykbn").magicproduct({
      selector : ".zvwqfjykbn", // Selector product grid
    });
  });
</script>
<script type="text/javascript">
jQuery(document).ready(function () {
  jQuery(".vmqhdvpnqm").magicproduct({
    selector : ".vmqhdvpnqm", // Selector product grid
  });
});
</script>
    </body>
</html>
