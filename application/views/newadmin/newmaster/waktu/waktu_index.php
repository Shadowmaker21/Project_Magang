<div class="row">
<div class="col-md-2 col-xs-12">
<div class="col-md-12 col-xs-12">
<div class="bord">
<h5><i class="fa fa-cog"></i> Setting</h5>
<hr>
<div class="pad5">
<button type="button" onclick="add_jadwal()" class="btn bg-green"><i class="fa fa-plus-square-o"></i> Buat</button>
</div>
<div class="pad5">
<button type="button" onclick="confirm_jadwal()" class="btn bg-red"><i class="fa fa-trash-o"></i> Hapus</button>
</div>
<div class="pad5">
<button type="button" onclick="refresh_jadwal()" class="btn bg-blue"><i class="fa fa-refresh"></i> Refresh</button>
</div>
</div>
</div>
</div>
<div class="col-md-10 col-xs-12">
<div id="jadwalinputview"></div>
</div>
</div>
<script type="text/javascript">
  load_jadwal_view();
  $('#jadwalinputview').slimScroll({
      height: '350px',
      railVisible: true,
      alwaysVisible: true
  	});
</script>
