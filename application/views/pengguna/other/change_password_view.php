<div class="row">
    <form id="newpassword">
    <div class="col-xs-12">
        <input type="hidden" name="salt" id="salt" value="<?php echo $user['uacc_salt']?>">
        <input type="hidden" name="id" id="id" value="<?php echo $user['uacc_id']?>">
        <input class="form-control" type="password" name="news" id="news" placeholder="Password Baru">
        <span class="text-red" id="invalid-news"></span>
    </div>
    <br><br>
    <div class="col-xs-12">
        <input class="form-control" type="password" name="confirmnew" id="confirmnew" placeholder="Ulangi Password Baru">
        <span class="text-red" id="invalid-confirmnew"></span>
    </div>
    <div class="col-xs-12" style="padding-top:20px">
        <button class="btn bg-purple" data-dismiss="modal"> Batal</button>
        <button type="submit" id="block" class="btn bg-olive"><i class="zmdi zmdi-refresh-sync"></i> Simpan</button>
    </div>
    </form>
</div>

<script type="text/javascript">
    $("#block").click(function(){
        rule = {
            news:{
                required:true,
                minlength:5
            },
            confirmnew:{
                required:true,
                equalTo:news
            }
        };

        pesan = {};
        validater('#newpassword',rule,pesan,'POST','<?php echo base_url('pengguna/update_new_password')?>','json','#preview');
    })
</script>
