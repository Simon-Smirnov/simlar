
<x-layout.admin title="pages" description="pages">
    <div class="container">
        <div class="row">
            <div class="col-3">
                <x-admin.menu/>
            </div>
            <div class="col-9">
                <h1>All pages</h1>
                <div>
                    <ul>
                        @foreach($pages as $page)
                            <li>
                                <div>{{ $page->title }}</div>
                                <div><a href="{{ route('admin.pages.show', $page->id)  }}">Show more</a></div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-layout.admin>
