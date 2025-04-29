<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.dashboard') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin Panel</div>
    </a>

    <hr class="sidebar-divider my-0">

    <!-- Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <hr class="sidebar-divider">

    <!-- Products Management -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.products.index') }}">
            <i class="fas fa-fw fa-box"></i>
            <span>Products</span>
        </a>
    </li>

    <!-- Categories Management -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.categories.index') }}">
            <i class="fas fa-fw fa-tags"></i>
            <span>Categories</span>
        </a>
    </li>



    <!-- Orders Management -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.orders.index') }}">
            <i class="fas fa-fw fa-shopping-cart"></i>
            <span>Orders</span>
        </a>
    </li>


    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.accessories.index') }}">
            <i class="fas fa-fw fa-gem"></i>
            <span>Accessories</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.reviews.index') }}">
            <i class="fas fa-fw fa-star"></i>
            <span>Review</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.user.index') }}">
            <i class="fas fa-fw fa-users"></i> <!-- Icon for users -->
            <span>User</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.features.index') }}">
            <i class="fas fa-cogs"></i> <!-- Represents settings/features -->
            <span>Features</span>
        </a>
    </li>


    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.colors.index') }}">
            <i class="fas fa-palette"></i> <!-- Represents color -->
            <span>Colors</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.sizes.index') }}">
            <i class="fas fa-ruler-vertical"></i> <!-- Represents size -->
            <span>Sizes</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.materials.index') }}">
            <i class="fas fa-cogs"></i> <!-- Represents material (gear icon could imply customization or settings) -->
            <span>Materials</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.statuses.index') }}">
            <i class="fas fa-tag"></i> <!-- Represents status (tag icon for categorization) -->
            <span>Status</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.contactInfo.index') }}">
            <i class="fas fa-info-circle"></i> <!-- Icon representing contact info -->
            <span>Contact Info</span>
        </a>
    </li>



    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.coupons.index') }}">
            <i class="fas fa-tag"></i> <!-- Icon representing coupons -->
            <span>Coupons</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.countries.index') }}">
            <i class="fas fa-globe-americas"></i> <!-- Icon representing countries (globe) -->
            <span>Country</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.shippingMethods.index') }}">
            <i class="fas fa-shipping-fast"></i> <!-- Icon representing shipping methods (truck) -->
            <span>Shipping Methods</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.contacts.index') }}">
            <i class="fas fa-phone-alt"></i> <!-- Icon representing contact (phone) -->
            <span>Contact</span>
        </a>
    </li>
    


</ul>
