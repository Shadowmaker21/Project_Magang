<form class="form-horizontal" id="waktu" method="post" action="<?php current_url()?>">
<div class="form-group">
    <label for="inputEmail3" class="thick col-sm-2 control-label">Jadwal Baru</label>
    <div class="col-sm-9">
        <input type="text" name="range" id="range" class="form-control">
    </div>
</div>
<div class="form-group">
    <div class="col-sm-2"></div>
    <div class="col-sm-10">Data apa saja yang akan di buka aksesnya ?</div>
</div>
<div class="form-group">
    <label for="inputEmail3" class="thick col-sm-2 control-label"></label>
    <div class="col-sm-5">
    	<div class="col-sm-12">
    		<div class="checkbox">
          		<div class="col-sm-12">
            		<input type="checkbox" name="renstra" id="renstra" value="1"/>
              		<i class="input-helper"></i>
              		RENSTRA [SKPD] & RPJMD [PROVINSI]
          		</div>
        	</div>
        	<div class="checkbox">
          		<div class="col-sm-12">
            		<input type="checkbox" name="iku" id="iku" value="1"/>
              		<i class="input-helper"></i>
              		IKU
          		</div>
        	</div>
        	<div class="checkbox">
          		<div class="col-sm-12">
            		<input type="checkbox" name="pk" id="pk" value="1"/>
              		<i class="input-helper"></i>
              		PK
          		</div>
        	</div>
          <div class="checkbox">
              <div class="col-sm-12">
                <input type="checkbox" name="rkt" id="rkt" value="1"/>
                  <i class="input-helper"></i>
                  RKT
              </div>
          </div>
    	</div>
    </div>
    <div class="col-sm-5">
    	<div class="checkbox">
          	<div class="col-sm-12">
            	<input type="checkbox" name="monev" id="monev" value="1"/>
              	<i class="input-helper"></i>
             	MONEV
          	</div>
        </div>
        <div class="checkbox">
        	<div class="col-sm-12">
           		<input type="checkbox" name="lkjip" id="lkjip" value="1"/>
              	<i class="input-helper"></i>
              	LKjIP
          	</div>
       	</div>
        <div class="checkbox">
         	<div class="col-sm-12">
            	<input type="checkbox" name="akunta" id="akunta" value="1"/>
              	<i class="input-helper"></i>
              	AKUNTABILITAS KEUANGAN
          	</div>
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
</script>