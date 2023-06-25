<!-- Bootstrap core JavaScript-->
<script src="/sb/vendor/jquery/jquery.min.js"></script>
<script src="/sb/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="/sb/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="/sb/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="/sb/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<!-- Custom scripts for all pages-->
<script src="/sb/js/sb-admin-2.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    // Summernote plugin
    $('#kontenBerita').summernote();
    // Datatable
    $('#dataTable').DataTable({
      processing: true,
      serverside: true,
      ajax: "{{ url('bAjax') }}",
      columns: [{
        data: 'DT_RowIndex',
        name: 'DT_RowIndex',
        orderable: false,
        searchable: false
      }, {
        data: 'foto',
        name: 'Foto'
      }, {
        data: 'judul',
        name: 'Judul'
      }, {
        data: 'user.username',
        name: 'Post By'
      }, {
        data: "kategori.nama",
        name: 'Kategori'
      }, {
        data: 'created_at',
        name: 'Tgl dibuat'
      }, {
        data: 'status',
        name: 'Status'
      }, {
        data: 'aksi',
        name: 'Aksi'
      }]
    });

    // GLOBAL SETUP 
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    function simpanBerita() {
      if (id == '') {
        var var_url = 'dashboard/berita';
        var var_type = 'POST';
      } else {
        var var_url = 'dashboard/berita/' + id;
        var var_type = 'PUT';
      }
      $.ajax({
        url: var_url,
        type: var_type,
        data: {
          user_id: $('#user_id'),
          judul: $('#judul').val(),
          konten: $('#konten').val(),
          kategori: $('#kategori').val(),
        },
        success: function(response) {
          if (response.errors) {
            console.log(response.errors);
            toastr.danger("Oops! ");
          } else {
            toastr.success("Nice");
          }
          $('#dataTable').DataTable().ajax.reload();
        }
      })
    }

    // Tambah Berita
    $('#berita').on('click', function() {
      $('#beritaModal').modal('show');
      $('#addBerita').click(function() {
        simpanBerita();
      });
    });

    // Edit Berita
    $('body').on('click', '.tombol-edit', function(e) {
      var id = $(this).data('id');
      $.ajax({
        url: '/dashboard/berita/' + id + '/edit',
        type: 'GET',
        success: function(response) {
          $('#beritaModal').modal('show');
          $('#judul').val(response.result.judul);
          $('#kontenBerita').append(response.result.konten);
          $('#kategori').val(response.result.kategori_id);
          console.log(response.result);
          $('.tombol-simpan').click(function() {
            simpanBerita(id);
          });
        }
      });
    });

    $('#exampleModal').on('hidden.modal', function() {
      $('#judul').val('')
      $('#konten').val('');
      $('#kategori').val('');
    })
  });



  toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": false,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
  }
</script>
<!-- Notice -->
@if(session()->has('success'))
<script>
  toastr.success("Nice! {{ session('success') }}");
</script>
@endif