<x-layout.admin title="trash" description="trash">
    <div class="container">
        <h1>Trash</h1>
        <div class="row">
            @foreach($trash as $t)
                <div class="col-3">
                    <h3>{{ $t->title }}</h3>
                    <x-form method="put" action="{{ route('admin.trashes.restore', $t->id) }}">
                        <x-form-input type="hidden" name="title" value="{{ $t->title }}" />
                        <x-form-input type="hidden" name="id" value="{{ $t->id }}" />
                        <button>Restore page</button>
                    </x-form>
                </div>
            @endforeach
        </div>
    </div>
</x-layout.admin>