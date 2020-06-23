function modal_ajax(data,types,ur,dtype,place,is){
  $(".besar").addClass('modalbesar');
  judul = data['judul']+' '+data['name'];
  isi = '<div id="preview">'+
        '</div>';
  button = '<p class="pull-right">'+
      '<button class="btn bg-purple" data-dismiss="modal"> Batal</button> '+
      '<a href="#"><button type="submit" id="block" class="btn bg-olive"><i class="zmdi zmdi-refresh-sync"></i> Simpan</button></a>'+
      '</p>';
  $(".modal-title").html(judul);
  $("#isi").html(isi);
  if(is == 1){
    $("#tombol").html(button);
  } 
  $('.besar').modal();
  datas = data;
  show_ajax_function(types,ur,datas,dtype,place); 
}

function formselect(types,ur,datas,dtype,place){
  $.ajax({
    type:types,
    url :ur,
    data:datas,
    dataType:dtype,
    beforeSend:function(){
      $(place).html('Memulai');
    },
    success:function(data){
      $(place).html(data);
    },
    error:function(data){
      console.log(data);
    }
  });
}

function show_ajax_function(types,ur,datas,dtype,place){
  $.ajax({
    type:types,
    url :ur,
    data:datas,
    dataType:dtype,
    beforeSend:function(){
      $(place).html('Memulai');
    },
    success:function(data){
      $(place).html(data);
    },
    error:function(data){
      console.log(data);
    }
  });
}

function submit_ajax_function(types,ur,datas,dtype,place,jns){
  $.ajax({
    type:types,
    url :ur,
    data:datas,
    dataType:dtype,
    beforeSend:function(){
      $(place).html('<div id="previewmessage">Memulai Proses..</div>');
    },
    success:function(data){
      $(".modal").modal('hide');
      notify(data['jenis'],data['message']);
      if(jns == 1){
        refreshs();
      } else if(jns == 2){
        refreshbulan();
      } else if(jns == 3){
        refreshtahun();
      } else if(jns == 4){
        refreshkode();
      } else if(jns == 5){
        refreshjk();
      } else if(jns == 6){
        refreshbpjs();
      } else if(jns == 7){
        refreshju();
      } else if(jns == 8) {
        refreshklui1();
      } else if(jns == 9){
        refreshklui2();
      } else if(jns == 10){
        refreshklui3();
      } else if(jns == 11){
        refreshklui4();
      } else if(jns == 12){
        refreshklui5();
      } else {
        refreshs();
      }
    },
    error:function(data){
      console.log(data);
    }
  });
}
function show_ajax(type,ur,datas=false,dtype,place){
  $.ajax({
      type:type,
      url :ur,
      data:datas,
      dataType:dtype,
      success:function(data){
        $(place).html(data);
      },
      error:function(data){
        console.log(data);
      }
  });
}

function is_check(nama,types,ur){
  $.validator.addMethod(nama, function(value, element){
    var response='';
    $.ajax({
      type: types,
      url: ur,
      data:"nama="+value,
      async:false,
      success:function(data){
        response = data;
      }
    });
    if(response == 1){
      return "Nama sudah ada";
    } else {
      return false;
    }
   }, "Nama sudah ada");

}

function validater(namaform,rule,pesan,types,ur,dtype,place,jns){
  $.validator.setDefaults({
    errorPlacement: function(error, element) {
      error.appendTo('#invalid-' + element.attr('id'));
    }
  });

  $validator = $(namaform).validate({
    rules: rule,
    messages: pesan,
    submitHandler: function(form){
      var datas = $(namaform).serialize();
      submit_ajax_function(types,ur,datas,dtype,place,jns);
    }
  });
}
