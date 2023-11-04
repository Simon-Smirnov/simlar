<h1>Edit page</h1>
<div>
    <form method="POST" action="{{ route('admin.pages.update', $page->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <span>Title: </span><input name="title" type="text" value="{{ old('title') ?? $page->title }} ">
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <br>
        <div>
            <span>Content: </span><textarea name="content" type="text">{{ old('content') ?? $page->content }}</textarea>
            @error('content')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <br>
        <div>
            <span>Image: </span><input name="image" type="file" value="{{ old('image') ?? $page->image }}" accept="image/png, image/jpeg">
            @error('image')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <br>
        <div>
            <span>Url: </span><input name="url" type="text" value="{{ old('url') ?? $page->url }}">
        </div>
        <br>
        <div>
            <span>h1: </span><input name="h1" type="text" value="{{ old('h1') ?? $page->h1 }}">
            @error('h1')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <br>
        <div>
            <span>Meta title: </span><input name="meta_title" type="text" value="{{ old('meta_title') ?? $page->meta_title }}">
            @error('meta_title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <br>
        <div>
            <span>Meta description: </span><input name="meta_description" type="text" value="{{ old('meta_description') ?? $page->meta_description }}">
            @error('meta_description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <br>
        <button>Edit page</button>
    </form>
</div>