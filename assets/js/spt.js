$(document).ready(function(){
    // $('#kategori').change(function(){
        
    // });

    var base_url = window.location.origin + "/spt2019";

    $('#jenisSPPD').change(function(){
        if ($(this).val() === '1') {
            $('#provinsi').attr('style',  'display:none');
            $('#kota').attr('style',  'display:block');

            html = '';
            html = "<option value='362' selected>"+"Kota Samarinda"+"</option>";
            $('#pilih_kota').html(html);
        }

        if ($(this).val() === '2') {
            $('#kota').attr('style',  'display:block');
            $('#provinsi').attr('style',  'display:none');

            var id= 23;
            $.ajax({
                url : base_url + "/spt_apbd/get_dalam_prov",
                method : "POST",
                data : {id: id},
                async : false,
                dataType : 'json',
                success: function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<option value=' +data[i].id +'>'+data[i].namaKota+'</option>';
                    }
                    $('#pilih_kota').html(html);
                    // console.log('work');                     
                }
            });


           
        }

        if ($(this).val() === '3') {
            $('#kota').attr('style',  'display:block');
            $('#provinsi').attr('style',  'display:none');

            var id= 11;
            $.ajax({
                url : base_url+ "/spt_apbd/get_jabodetabek",
                method : "POST",
                data : {id: id},
                async : false,
                dataType : 'json',
                success: function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<option value=' +data[i].id +'>'+data[i].namaKota+'</option>';
                    }
                    $('#pilih_kota').html(html);
                    // console.log('work');                     
                }
            });
        }

        if ($(this).val() === '4') {
            $('#provinsi').attr('style',  'display:block');
            $('#kota').attr('style',  'display:block');


            $('#pilih_prov').change(function(){
                var id= $('#pilih_prov').val();
                $.ajax({
                    url : base_url+ "/spt_apbd/get_dalam_prov",
                    method : "POST",
                    data : {id: id},
                    async : false,
                    dataType : 'json',
                    success: function(data){
                        var html = '';
                        var i;
                        for(i=0; i<data.length; i++){
                            html += '<option value=' +data[i].id +'>'+data[i].namaKota+'</option>';
                        }
                        $('#pilih_kota').html(html);
                        // console.log('work');                     
                    }
                });

            });
            
        }
        
    });


});