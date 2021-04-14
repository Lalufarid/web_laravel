<div class="form-group">
    <input type="file" name="thumbnail" id="thumbnail">
    @error('thumbnail')
        <div class="text-danger mt-2">
            {{$message}}
        </div>
    @enderror
</div>

<div class="form-group">
    <label for="name">Nama Guru</label>
    <input type="name" name="name" value="{{old('name') ?? $guru->name}}" id="name" class="form-control">
     @error('name')
        <div class="text-danger mt-2">
            {{$message}}
        </div>
    @enderror
</div>
<div class="form-group">
    <label for="alamat">Alamat Guru</label>
    <textarea type="alamat" name="alamat" id="alamat" class="form-control">{{old('alamat') ?? $guru->alamat}}</textarea>
    @error('alamat')
        <div class="text-danger mt-2">
            {{$message}}
        </div>
     @enderror
</div>
<div class="form-group">
    <label for="mapel">Mata Pelajaran</label>
    <input type="mapel" name="mapel" value="{{old('mapel') ?? $guru->mapel}}" id="mapel" class="form-control">
     @error('mapel')
        <div class="text-danger mt-2">
            {{$message}}
        </div>
    @enderror
</div>
<button type="submit" class="btn btn-primary">{{$submit ?? 'Update'}}</button>