 $(function(){


    //onclick gambar buku
    $("#gambarbuk").click(function(){
        $("#file").click();
    });

    //Ketika gambar dipilih
    $("#file").change(function(){
        setImage(this,"#gambarbuk");
		})
	})

		// Read Image
		function setImage(input,target) {

			if (input.files && input.files[0]) {
				var reader = new FileReader();

				// Mengganti src dari object img#coverbuku
				reader.onload = function(e) {
					$(target).attr('src', e.target.result);
				}

				reader.readAsDataURL(input.files[0]);
			}
		}

  //PILIH BUKU
  function add_buku(kodebuku, judul){
    var no = $(".buku-item").length+1;
    var content = '<tr class="buku-item '+kodebuku+'">';
    content += '<td>'+no+'</td>';
    content += '<td>'+kodebuku+'</td>';
    content += '<td>'+judul+'</td>';
    content += '<td>';
    content += '<button type="button" class="btn btn-flat btn-xs btn-danger" kode="'+kodebuku+'" onclick="remove_buku(this)">X</button>';
		content += '<input type="hidden" value="'+kodebuku+'" name="kodebuku[]">';
    content += '<input type="hidden" value="'+judul+'" name="judul[]">';
    content += '</td>';
    content += '</tr>';

    $("#lsBuku").append(content);
  }

//HAPUS PILIH BUKU
function remove_buku(obj){
  var cls = $(obj).attr("kode");
  $("."+cls).remove();
}


//VALIDASI
  $( "#frmBuku" ).validate( {
	rules: {
		kode: "required",
		judul: "required",
		tempat: {
			required: true,
			minlength: 2
		},
		tahun: {
			required: true,
			minlength: 3
		},
		halaman: {
			required: true,
			minlength: 2,

		},
		edisi: {
			required: true,
			minlength: 2
		},
		isbn: "required"
	},
	messages: {
		kode: "Kode buku tidak boleh kosong",
		lastname1: "Masukkan judul buku",
		tempat: {
			required: "Tempat wajib diisi",
			minlength: "Minimal 2 karakter"
		},
		tahun: {
			required: "Tahun tidak boleh kosong",
			minlength: "Your year must be at least 3 characters long"
		},
		halaman: {
			required: "Halaman wajib diisi",
			minlength: "Your page must be at least 2 characters long",

		},
		edisi: {
			required: "Edisi tidk boleh kosong",
			minlength: "Minimal 2 karakter"
		},
		isbn: "ISBN tidak boleh kosong"
	},
	errorElement: "em",
	errorPlacement: function ( error, element ) {
		// Add the `help-block` class to the error element
		error.addClass( "help-block" );

		// Add `has-feedback` class to the parent div.form-group
		// in order to add icons to inputs
		element.parents( ".col-sm-10" ).addClass( "has-feedback" );

		if ( element.prop( "type" ) === "checkbox" ) {
			error.insertAfter( element.parent( "label" ) );
		} else {
			error.insertAfter( element );
		}

		// Add the span element, if doesn't exists, and apply the icon classes to it.
		if ( !element.next( "span" )[ 0 ] ) {
			//$( "<span class='glyphicon glyphicon-remove form-control-feedback'></span>" ).insertAfter( element );
		}
	},
	success: function ( label, element ) {
		// Add the span element, if doesn't exists, and apply the icon classes to it.
		if ( !$( element ).next( "span" )[ 0 ] ) {
			//$( "<span class='glyphicon glyphicon-ok form-control-feedback'></span>" ).insertAfter( $( element ) );
		}
	},
	highlight: function ( element, errorClass, validClass ) {
		$( element ).parents( ".col-sm-10" ).addClass( "has-error" ).removeClass( "has-success" );
		//$( element ).next( "span" ).addClass( "glyphicon-remove" ).removeClass( "glyphicon-ok" );
	},
	unhighlight: function ( element, errorClass, validClass ) {
		$( element ).parents( ".col-sm-10" ).addClass( "has-success" ).removeClass( "has-error" );
		//$( element ).next( "span" ).addClass( "glyphicon-ok" ).removeClass( "glyphicon-remove" );
	}
} );

//--------ALERT-------------//
$('.listKategori_delete').click(function(){
  var kd_kategori = $(this).attr('kd_kategori');
  swal({
    title: "Yakin mau dihapus ?",
    text: "Data terhapus tidak bisa kembali !!",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  })
  .then((willDelete) => {
    if(willDelete) {
      window.location = "kategori/"+kd_kategori+"/delete";
      swal("Jeng-jeng! Data berhasil dihapus!", {
        icon: "success",
      });
    } else {
      swal("Data tidak jadi dihapus!");
    }
  });
});

$('.anggota_delete').click(function(){
  var no_anggota = $(this).attr('no_anggota');
  swal({
    title: "Yakin mau dihapus ?",
    text: "Data terhapus tidak bisa kembali !!",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  })
  .then((willDelete) => {
    if(willDelete) {
      window.location = "anggota/"+no_anggota+"/delete";
    } else {
      swal("Data tidak jadi dihapus!");
    }
  });
});

$('.penerbit_delete').click(function(){
  var kd_penerbit = $(this).attr('kd_penerbit');
  swal({
    title: "Yakin mau dihapus ?",
    text: "Data terhapus tidak bisa kembali !!",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  })
  .then((willDelete) => {
    if(willDelete) {
      window.location = "penerbit/delete/"+kd_penerbit+"";
    } else {
      swal("Data tidak jadi dihapus!");
    }
  });
});

$('.pengarang_delete').click(function(){
  var kd_pengarang = $(this).attr('kd_pengarang');
  swal({
    title: "Yakin mau dihapus ?",
    text: "Data terhapus tidak bisa kembali !!",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  })
  .then((willDelete) => {
    if(willDelete) {
      window.location = "pengarang/delete/"+kd_pengarang+"";
    } else {
      swal("Data tidak jadi dihapus!");
    }
  });
});

$('.user_delete').click(function(){
  var user_id = $(this).attr('user_id');
  swal({
    title: "Yakin mau dihapus ?",
    text: "Data terhapus tidak bisa kembali !!",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  })
  .then((willDelete) => {
    if(willDelete) {
      window.location = "user/delete/"+user_id+"";
    } else {
      swal("Data tidak jadi dihapus!");
    }
  });
});
