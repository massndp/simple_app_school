<div class="form-group">
    <label for="kode">Kode</label>
    <input type="text" class="form-control" name="kode" required value="{{isset($mapel) ? $mapel->kode : old('kode')}}">
</div>
<div class="form-group">
    <label for="nama">Nama Lengkap</label>
    <input type="text" class="form-control" name="nama" required value="{{isset($mapel) ? $mapel->nama : old('nama')}}">
</div>
<button class="btn btn-primary" type="submit">
   <i class="fa fa-save"></i> Simpan
</button>
<button class="btn btn-warning" type="reset">
   <i class="fa fa-undo"></i> Reset
</button>