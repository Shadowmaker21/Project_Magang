<form role="form" id="addjadwal">
<div class="row">
  <div class="col-md-12 col-xs-12">
    <div class="form-group">
      <label>Jadwal yang akan dilaksanakan</label>
      <input class="form-control" type="text" name="range" id="range" placeholder="Jadwal">
      <span class="text-red" id="invalid-range"></span>
    </div>
  </div>
  <div class="col-md-12 col-xs-12">
      <label>Data apa saja yang akan dibuka aksesnya ?</label>
  </div>
</div>
<div class="form-group">
  <label for="inputEmail3" class="thick col-sm-2 control-label"></label>
    <div class="col-sm-5">
    	<div class="col-sm-12">
    		<div class="checkbox">
          <div class="pad5">
            <input type="checkbox" name="rpjmd" id="rpjmd" value="1"/>
              <i class="input-helper"></i>
              RPJMD
          </div>
        </div>
        <div class="checkbox">
          <div class="pad5">
            <input type="checkbox" name="renstra" id="renstra" value="1"/>
              <i class="input-helper"></i>
              RENSTRA
          </div>
        </div>
      	<div class="checkbox">
          <div class="pad5">
            <input type="checkbox" name="iku" id="iku" value="1"/>
              <i class="input-helper"></i>
              IKU
          </div>
        </div>
      	<div class="checkbox">
          <div class="pad5">
            <input type="checkbox" name="pk" id="pk" value="1"/>
              <i class="input-helper"></i>
              PK
          </div>
        </div>
    	</div>
    </div>
    <div class="col-sm-5">
    	<div class="checkbox">
          <div class="pad5">
            <input type="checkbox" name="rkt" id="rkt" value="1"/>
              <i class="input-helper"></i>
              RKT
          </div>
        </div>
      <div class="checkbox">
        <div class="pad5">
          <input type="checkbox" name="monev" id="monev" value="1"/>
            <i class="input-helper"></i>
            MONEV
        </div>
      </div>
      <div class="checkbox">
        <div class="pad5">
          <input type="checkbox" name="lkjip" id="lkjip" value="1"/>
            <i class="input-helper"></i>
            LKjIP
        </div>
      </div>
      <div class="checkbox">
        <div class="pad5">
          <input type="checkbox" name="akunta" id="akunta" value="1"/>
            <i class="input-helper"></i>
            AKUNTABILITAS KEUANGAN
        </div>
      </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
      <div class="form-group">
        <button class="btn bg-purple" data-dismiss="modal"> Batal</button>
        <button type="submit" id="block" class="btn bg-olive"><i class="zmdi zmdi-refresh-sync"></i> Simpan</button>
      </div>
    </div>
  </div>
</form>
<script type="text/javascript">
	$('input[name="range"]').daterangepicker({
    timePicker: true,
    timePickerIncrement: 1,
    timePickerSeconds:true,
    timePicker24Hour:true,
    locale: {
      format: 'YYYY-MM-DD HH:mm:ss'
    }
  });
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
  $(document).ready(function() {  
    $("#block").click(function(){
      rule = {
        nama:'required'
      };

      pesan = {
      };
      validater('#addjadwal',rule,pesan,'POST','<?php echo base_url('admin/simpan_waktu')?>','json','#preview',3);
    });
  });
</script>