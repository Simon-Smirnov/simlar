<x-layout.admin title="Page №{{ $page->id }}" description="Page №{{ $page->id }}">
    <div class="container">
        <div class="row">
            <div class="col-3">
                <x-admin.menu/>
            </div>
            <div class="col-9">
                <h1>Page - {{ $page->title }} #{{ $page->id }}</h1>
                <div>
                    <div>Content: {{ $page->content }}</div>
                    <div>URL: {{ $page->url }}</div>
                    <div>URL: {{ $page->url }}</div>
                    <div>Image: <img src="{{ asset('storage/pages/' . $page->image) }}"></div>
                    <div>Meta-title: {{ $page->meta_title }}</div>
                    <div>Meta-Description: {{ $page->meta_description }}</div>
                    <div>
                        <a href="{{ route('admin.pages.edit', $page->id) }}">Edit page</a>
                    </div>
                    <div>
                        <form method="POST" action="{{ route('admin.pages.destroy', $page->id) }}">
                            @csrf
                            @method('DELETE')    
                            <button>Delete page</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</x-layout.admin>