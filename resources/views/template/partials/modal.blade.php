<!-- Logout Modal -->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
      <form action="/logout" method="post">
        @csrf
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary" href="login.html">Logout</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- /Logout Modal -->

<!-- Modal Berita -->
<div class="modal fade" id="beritaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <form action="" method="post">
      @csrf
      <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" id="user_id">
      <div class="modal-content">
        <div class="modal-header">
          <div class="modal-title">
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
        </div>
        <div class="modal-body">
          <div class="form-group row">
            <label for="judul" class="col-sm-2 col-form-label">Judul</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="judul" name="judul">
            </div>
          </div>
          <div class="form-group row">
            <label for="kontenBerita" class="col-sm-2 col-form-label">Konten</label>
            <div class="col-sm-10">
              <textarea name="konten" id="kontenBerita" cols="30" rows="10"></textarea>
            </div>
          </div>
          <div class="form-group row">
            <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
            <div class="col-sm-10">
              <select class="custom-select" name="kategori" id="kategori">
                <option selected>Silahkan Pilih Kategori</option>
                @foreach($kategori as $row)
                <option value="{{ $row->id }}">{{ $row->nama }}</option>
                @endforeach
              </select>
            </div>
          </div>
          <!-- <div class="form-group row">
            <label for="kontenBerita" class="col-sm-2 col-form-label">Foto</label>
            <div class="custom-file col-sm-10">
              <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
              <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            </div>
          </div> -->
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button type="submit" id="addBerita" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </form>
  </div>
</div>