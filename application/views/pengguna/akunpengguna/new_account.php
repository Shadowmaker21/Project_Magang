	            	<form id="newuser">
						<div class="row">
							<div class="col-xs-6">
                                <div class="form-group">
									<div class="input-group">
						                <span class="input-group-addon"><i class="fa fa-users"></i></span>
						                <select class="form-control" name="grup" id="grup">
						                	<option value="">Pilih Grup</option>
						                	<?php foreach($grup as $data){ ?>
						                		<option value="<?php echo $data->ugrp_id ?>"><?php echo $data->ugrp_name ?></option>
						                	<?php } ?>
						                </select>
						            </div>
						            <span class="text-red" id="invalid-grup"></span>
						        </div>
						        <div class="form-group" id="bidang">
									<div class="input-group">
						                <span class="input-group-addon"><i class="fa fa-users"></i></span>
						                <select class="form-control" name="sotk" id="sotk">
						                	<option value="">Pilih Bidang</option>
						                	<?php foreach($sotk as $data){ ?>
						                		<option value="<?php echo $data->id ?>"><?php echo ucwords(strtolower($data->bidang)) ?></option>
						                	<?php } ?>
						                </select>
						            </div>
						            <span class="text-red" id="invalid-sotk"></span>
						        </div>
							</div>
							<div class="col-xs-6">
								<div class="form-group">
									<div class="input-group">
						                <span class="input-group-addon"><i class="fa fa-users"></i></span>
						                <input type="text" class="form-control" id="nama1" name="nama1" placeholder="Username">
						            </div>
						            	
								</div>
								<div class="form-group">
									<div class="input-group">
						                <span class="input-group-addon"><i class="fa fa-key"></i></span>
						                <input type="hidden" name="password" id="password" class="form-control" placeholder="Password" value="polke">
						                <input type="text" class="form-control" placeholder="Password" disabled="disabled" value="polke">
						            </div>
								</div>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-xs-12">
								<div class="form-group">
									<button class="btn bg-teal" data-dismiss="modal"> Batal</button>
									<button type="submit" id="save" class="btn btn-lg bg-olive"><i class="zmdi zmdi-refresh-sync"></i> Simpan</button>
								</div>
							</div>
						</div>
					</form>

<script type="text/javascript">
$(document).ready(function() {  
	is_check('is_username','POST','<?php echo base_url('pengguna/is_username')?>');
	$("#save").click(function(){
		rule = {
			grup:'required',
			bidang:'required',
			nama1:{
				required:true,
				is_username:true
			}
		};

		pesan = {
			grup:'Isian grup tidak boleh kosong',
			bidang:'Isian bidang tidak boleh kosong',
			nama1:{
				required : 'Isian username tidak boleh kosong',
				is_username : 'Username tersebut sudah ada dalam database'
			}
		};
		validater('#newuser',rule,pesan,'POST','<?php echo base_url('pengguna/store_new_account')?>','json','#preview',31);
	});
	$("#bidang").hide();
	$("#grup").on('change',function() {
	   	if($(this).val() == 7){	  
	        setTimeout(function() {
	        	$("#bidang").show('slideUp');
	        }, 750 );
	    } else {
	        setTimeout(function() {
	        	$("#bidang").hide('slideUp');
	    	}, 750 );
		}
	});
});

</script>
