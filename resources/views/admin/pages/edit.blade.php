<x-layout.admin title="create page" description="create page">
    <div class="container">
        <h1>Edit page</h1>
        <div>
            <x-form method="put" action="{{ route('admin.pages.update', $page->id) }}" enctype="multipart/form-data">
                @bind($page)
                    @include('components.admin.form')
                    <div>
                        <x-form-input type="file" name="image" label="Image:" />
                    </div>
                    <br>
                @endbind
                <button>Edit page</button>
            </x-form>
        </div>
    </div>
</x-layout.admin>