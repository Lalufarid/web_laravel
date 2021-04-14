

<div class="form-group">
    <input type="file" name="thumbnail" id="thumbnail">
    @error('thumbnail')
        <div class="text-danger mt-2">
            {{$message}}
        </div>
    @enderror
</div>


<div class="form-group">
    <label for="title">Judul Artikel</label>
    <input type="title" name="title" value="{{old('title') ?? $artikel->title}}" id="title" class="form-control">
     @error('title')
        <div class="text-danger mt-2">
            {{$message}}
        </div>
    @enderror
</div>

<div class="form-group">
    <label for="body">Isi Artikel</label>
    <textarea rows="10" cols="50" name="body" id="body" class="form-control">{{old('body') ?? $artikel->body}}</textarea>
    @error('body')
        <div class="text-danger mt-2">
            {{$message}}
        </div>
     @enderror
</div>

<div class="form-group">
    <label for="link">Link Video</label>
    <input type="link" name="link" value="{{old('link') ?? $artikel->link}}" id="link" class="form-control">
     @error('link')
        <div class="text-danger mt-2">
            {{$message}}
        </div>
    @enderror
</div>
<div class="form-group">
    <label for="imageA">Gambar pendukung</label>
    <input type="file" name="imageA" id="imageA">
    @error('imageA')
        <div class="text-danger mt-2">
            {{$message}}
        </div>
    @enderror
</div>
<div class="form-group">
    <label for="imageB">Gambar pendukung</label>
    <input type="file" name="imageB" id="imageB">
    @error('imageB')
        <div class="text-danger mt-2">
            {{$message}}
        </div>
    @enderror
</div>
<button type="submit" class="btn btn-primary">{{$submit ?? 'Update'}}</button>

<!-- <script src="{{asset('ckeditor/ckeditor.js')}}"></script>

<script>
    CKEDITOR.replace('body',{
         language:'en-gb'});
</script>
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script> -->



