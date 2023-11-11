<div>
    <h2>Menu</h2>
    <nav>
        <ul>
            <li>
                <a href="{{ route('admin.pages.index') }}">all pages</a>
                <ul>
                    <li>
                        <a href="{{ route('admin.pages.create') }}">Create page</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ route('admin.trashes.index') }}">trash pages</a>
            </li>
        </ul>
    </nav>
</div>