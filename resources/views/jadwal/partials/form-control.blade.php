<div class="form-group">
    <label for="jadwal">Mata Pelajaran</label>
    <input type="jadwal" name="jadwal" value="{{old('jadwal') ?? $jadwal->jadwal}}" id="jadwal" class="form-control">
     @error('jadwal')
        <div class="text-danger mt-2">
            {{$message}}
        </div>
    @enderror
</div>
<div class="form-group">
    <input type="file" name="gambar" id="gambar">
    @error('gambar')
        <div class="text-danger mt-2">
            {{$message}}
        </div>
    @enderror
</div>
<button type="submit" class="btn btn-primary">{{$submit ?? 'Update'}}</button>