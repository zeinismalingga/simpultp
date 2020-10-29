$(document).ready(function(){

   var base_url = window.location.origin + "/simpultp";

    $('#pilih_komoditas').change(function(){
        var id= $('#pilih_komoditas').val();
        $.ajax({
            url : base_url+ "/sertifikasi_apbd/get_varietas",
            method : "POST",
            data : {id: id},
            async : false,
            dataType : 'json',
            success: function(data){
                var html = '';
                var i;
                for(i=0; i<data.length; i++){
                    html += '<option value=' +data[i].id_varietas +'>'+data[i].nama_varietas+'</option>';
                }
                $('#pilih_varietas').html(html);                   
            }
        });

    });

    $('#pilih_kota').change(function(){
        var id= $('#pilih_kota').val();
        $.ajax({
            url : base_url+ "/sertifikasi_apbd/get_kecamatan",
            method : "POST",
            data : {id: id},
            async : false,
            dataType : 'json',
            success: function(data){
                var html = '';
                var i;
                for(i=0; i<data.length; i++){
                    html += '<option value=' +data[i].id_kecamatan +'>'+data[i].nama_kecamatan+'</option>';
                }
                $('#pilih_kecamatan').html(html);                   
            }
        });

    });
   


});