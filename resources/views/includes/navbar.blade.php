<nav class="navbar has-shadow">
    <div class="container">
        <div class="navbar-brand">
            <b class="navbar-item">Inventory</b>
        </div>
        <div class="navbar-menu">
            <div class="navbar-start">
                <div class="navbar-item has-dropdown is-hoverable">
                    <p class="navbar-link {{ str_contains($page, 'product') ? 'is-active' : '' }}"><i class="fas fa-tag"></i>&nbsp;Products</p>
                    <div class="navbar-dropdown is-boxed">
                        <a class="navbar-item" href="{{ route('products.index') }}">
                            List
                        </a>
                        <a class="navbar-item" href="{{ route('products.create') }}">
                            Create
                        </a>
                    </div>
                </div>

                <div class="navbar-item has-dropdown is-hoverable">
                    <p class="navbar-link {{ str_contains($page, 'collection') ? 'is-active' : '' }}"><i class="fas fa-box"></i>&nbsp;Collections</p>
                    <div class="navbar-dropdown is-boxed">
                        <a class="navbar-item" href="{{ route('collections.index') }}">
                            List
                        </a>
                        <a class="navbar-item" href="{{ route('collections.create') }}">
                            Create
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<br>
