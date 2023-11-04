<h1>Create page</h1>
<div>
    <form method="POST" action="{{ route('admin.pages.store') }}" enctype="multipart/form-data">
        @csrf
        <div>
            <span>Title: </span><input name="title" type="text" value="{{ old('title') }}">
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <br>
        <div>
            <span>Content: </span><textarea name="content" type="text">{{ old('content') }}</textarea>
            @error('content')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <br>
        <div>
            <span>Image: </span><input name="image" type="file" value="{{ old('image') }}" accept="image/png, image/jpeg">
            @error('image')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <br>
        <div>
            <span>Url: </span><input name="url" type="text" value="{{ old('url') }}">
        </div>
        <br>
        <div>
            <span>h1: </span><input name="h1" type="text" value="{{ old('h1') }}">
            @error('h1')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <br>
        <div>
            <span>Meta title: </span><input name="meta_title" type="text" value="{{ old('meta_title') }}">
            @error('meta_title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <br>
        <div>
            <span>Meta description: </span><input name="meta_description" type="text" value="{{ old('meta_description') }}">
            @error('meta_description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <br>
        <button>Create post</button>
    </form>
</div>