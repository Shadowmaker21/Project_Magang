<div class="row">
<div class="col-md-2 col-xs-12">
<div class="col-md-12 col-xs-12">
<div class="bord">
<h5><i class="fa fa-cog"></i> Setting</h5>
<hr>
<div class="pad5">
<button type="button" onclick="confirm_akses()" class="btn bg-orange"><i class="fa fa-refresh"></i> Ubah Akses</button>
</div>
<div class="pad5">
<button type="button" onclick="refresh_akses()" class="btn bg-blue"><i class="fa fa-refresh"></i> Refresh</button>
</div>
</div>
</div>
</div>
<div class="col-md-10 col-xs-12">
<div id="jadwalaksesview"></div>
</div>
</div>
<script type="text/javascript">
  load_akses_view();
  $('#jadwalaksesview').slimScroll({
      height: '350px',
      railVisible: true,
      alwaysVisible: true
  	});
</script>
