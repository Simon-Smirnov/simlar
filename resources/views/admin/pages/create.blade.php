<x-layout.admin title="create page" description="create page">
    <div class="container">
        <h1>Create page</h1>
        <div>
            <x-form method="POST" action="{{ route('admin.pages.store') }}" enctype="multipart/form-data">
                @include('components.admin.form')
                <div>
                    <x-form-input type="file" name="image" label="Image:" />
                </div>
                <br>
                <button>Create post</button>
            </x-form>
        </div>
    </div>
</x-layout.admin>