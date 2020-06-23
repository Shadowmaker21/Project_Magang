<?php $this->load->view('admin/includes/head_view')?>
            <section id="content">
                <div class="container">
                	<div class="card">
	                    <div class="card-header">
	                        <h3 id="title-card"><i class="zmdi zmdi-accounts zmdi-hc-fw"></i> Sikap</h3>
	                         <?php if(!empty($message)) echo $message; ?>
	                    </div>
	                    <div class="card-body card-padding" id="place">
	                    	<div id="pesan" class="row">
	                    		<?php if($waktu->status_input != 2){?>
		                    		<div class="col-sm-12">
		                    			<table class="table table-bordered">
		                    				<thead>
		                    					<tr class="success c-white">
		                    					<th colspan="2"><center><i class="zmdi zmdi-time-interval zmdi-hc-fw"></i> Jadwal Input SIKAP</center></th>
		                    					</tr>
		                    				</thead>
		                    				<thead>
		                    					<th><i class="zmdi zmdi-alarm-plus zmdi-hc-fw"></i> Ditambahkan Pada</th>
		                    					<th><?php echo $waktu->tanggal_ditambahkan ?></th>
		                    				</thead>
		                    				<thead>
		                    					<th><i class="zmdi zmdi-calendar-check zmdi-hc-fw"></i> Dimulai Pada</th>
		                    					<th><?php echo $waktu->waktu_mulai ?></th>
		                    				</thead>
		                    				<thead>
		                    					<th><i class="zmdi zmdi-timer-off zmdi-hc-fw"></i> Selesai Pada Pada</th>
		                    					<th><?php echo $waktu->waktu_selesai ?></th>
		                    				</thead>
		                    				<thead>
		                    					<th><i class="zmdi zmdi-info-outline zmdi-hc-fw"></i> Status</th>
		                    					
		                    						<?php $status = $waktu->status_input; 
		                    							if($status == 0){
		                    								echo "<th class='warning'>Belum Dimulai</th>";
		                    							} else if($status == 1){
		                    								echo "<th class='success'>Sedang Berlangsung</th>";
		                    							} else {
		                    								echo "<th>Sudah Selesai</th>";
		                    							}
		                    						?>
		                    					
		                    				</thead>
		                    			</table>
		                    			<div style="padding-left:15px">
		                    				<h5 style="padding-top:10px;padding-bottom:10px;font-family:ft10">Jika Ada Perubahan Maka Isilah Jadwal Baru Di bawah:</h5>
			                    			<div class="panel-group" role="tablist" aria-multiselectable="true">
				                                <div class="panel panel-collapse">
				                                    <div class="panel-heading" role="tab" id="headingOne">
				                                        <h4 class="panel-title">
				                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
				                                                EDIT JADWAL DIATAS
				                                            </a>
				                                        </h4>
				                                    </div>
				                                    <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;">
				                                        <div class="panel-body">
				                                           <div class="col-sm-12">
													            <div class="col-sm-6">
								                                    <div class="fg-line">
								                                        <label class="green" for="privilege"><i class="zmdi zmdi-collection-item-1 zmdi-hc-fw"></i> TANGGAL MULAI (*)</label>
								                                        <input placeholder="Waktu Mulai" class="form-control date-pickerstart" type="text" id="tanggalmulai" name="tanggalmulai" value=""/>
								                                    </div>
								                                <div id="invalid-tanggalmulai" class="help-block"></div>
								                                </div>
								                                <div class="col-sm-6">
								                                    <div class="fg-line">
								                                        <label class="green" for="privilege"><i class="zmdi zmdi-collection-item-2 zmdi-hc-fw"></i> TANGGAL SELESAI (*)</label>
								                                        <input placeholder="Waktu Selesai" class="form-control date-pickerend" type="text" id="tanggalselesai" name="tanggalselesai" value=""/>
								                                    </div>
								                                <div id="invalid-tanggalselesai" class="help-block"></div>
								                                </div>
												        	</div>
												        	<br>
												        	<div class="col-sm-12" style="padding-top:40px">
												        		<div class="col-sm-6"></div>
												        		<div class="col-sm-6">
								                                    <div class="fg-line">
								                                        <button type="submit" id="tambah" name="tambah" value="tambah" class="btn btn-success waves-effect"><i class="zmdi zmdi-alarm zmdi-hc-fw"></i> Tetapkan</button>
								                                    </div>
								                                </div>
												        	</div>
				                                        </div>
				                                    </div>
				                                </div>
	                            			</div>
		                    			</div>
		                    		</div>
	                    		<?php } else { ?>
	                    		<div class="col-sm-12">
	                    			<blockquote class="m-b-25" style="border-left:5px solid red">
	                    				<h4 style="font-family:ft11;"><i class="zmdi zmdi-alarm-off zmdi-hc-fw"></i> Status Sikap Sebelumnya </h4>
	                    				<h5 style="font-family:ft10;"> Status Input dibuka pada :</h5>
	                    				<h4 style="font-family:ft10;"> <?php echo $waktu->waktu_mulai ?></h4>
                            		</blockquote>
	                    			
	                    			<hr>
						            <blockquote class="m-b-25"  style="border-left:5px solid green">
	                    				<h4 style="font-family:ft11;"><i class="zmdi zmdi-alarm zmdi-hc-fw"></i> Tetapkan Waktu Input </h4>
	                    				<h5 style="font-family:ft10;"> Tetapkan Waktu Input Data :</h5>
						            	<h5 style="font-family:ft10;"> Ketentuan Pengisian : *) wajib di isi. </h5>
                            		</blockquote>
						            
						            <br>
						            <div class="col-sm-6">
	                                    <div class="fg-line">
	                                        <label class="green" for="privilege"><i class="zmdi zmdi-collection-item-1 zmdi-hc-fw"></i> WAKTU MULAI (*)</label>
	                                        <input placeholder="Waktu Mulai" class="form-control date-pickerstart" type="text" id="tanggalmulai" name="tanggalmulai" value=""/>
	                                    </div>
	                                <div id="invalid-tanggalmulai" class="help-block"></div>
	                                </div>
	                                <div class="col-sm-6">
	                                    <div class="fg-line">
	                                        <label class="green" for="privilege"><i class="zmdi zmdi-collection-item-2 zmdi-hc-fw"></i> WAKTU SELESAI (*)</label>
	                                        <input placeholder="Waktu Selesai" class="form-control date-pickerend" type="text" id="tanggalselesai" name="tanggalselesai" value=""/>
	                                    </div>
	                                <div id="invalid-tanggalselesai" class="help-block"></div>
	                                </div>
					        	</div>
					        	<br>
					        	<div class="col-sm-12" style="padding-top:40px">
					        		<div class="col-sm-6"></div>
					        		<div class="col-sm-6">
	                                    <div class="fg-line">
	                                        <button type="submit" id="tambah" name="tambah" value="tambah" class="btn btn-primary waves-effect"><i class="zmdi zmdi-alarm zmdi-hc-fw"></i> Tetapkan</button>
	                                    </div>
	                                </div>
					        	</div>
					        	<?php } ?>
	                    	</div>
	                   	</div>
	               	</div>
                </div>
            </section>
        </section>

<?php $this->load->view('admin/includes/footer_view')?>       
<script type="text/javascript">
$(function(){   
	var d = new Date();
	var startdate = d.getFullYear()+'-'+(d.getMonth()+1)+'-'+d.getDate()+' '+d.getHours()+':'+d.getMinutes()+':'+d.getSeconds();
	var mulai = $(".date-pickerstart").datetimepicker({
        viewMode: 'years',
        format: 'YYYY-MM-D H:mm:ss',
        minDate: startdate
    }).on('dp.change', function(ev){
      var curr_date = new Date($('.date-pickerstart').val());
      curr_date.setMinutes(curr_date.getMinutes() + 10);
      var next_date = curr_date.getFullYear()+'-'+
                      ('0' + (curr_date.getMonth() + 1)).slice(-2)+'-'+
                      ('0' + curr_date.getDate()).slice(-2)+' '+
                      ('0' + curr_date.getHours()).slice(-2)+':'+
                      ('0' + curr_date.getMinutes()).slice(-2)+':'+
                      ('0' + curr_date.getSeconds()).slice(-2);
      $('.date-pickerend').val(next_date);
      secondDate.datetimepicker('update');
      secondDate.datetimepicker('minDate', next_date);
    });
   	var secondDate = $(".date-pickerend").datetimepicker({
        viewMode: 'years',
        format: 'YYYY-MM-D H:mm:ss',
        minDate : mulai
    });
    $("#tambah").click(function(){
    	var mulai = $('.date-pickerstart').val();
    	var selesai = $('.date-pickerend').val();
    	$.ajax({
	      type:"POST",
	      url :"<?php echo base_url('admin/savetime')?>",
	      data:{
	        mulai:mulai,
	        selesai:selesai
	      },
	      dataType:"html",
	      beforeSend:function(){
	        $("#place").html('Proses..');
	      },
	      success:function(data){
	        $("#place").html("Berhasil Menetapkan Waktu..");
	        setTimeout(function(){
              window.location.href="<?php echo base_url('admin/sikap')?>";
            }, 3000);
	      },
	      error:function(){
	        $("#place").html('error');
	      }
	    })
    })
});
</script>