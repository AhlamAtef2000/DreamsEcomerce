@extends('frontend.layout')

@section('content')

<!-- Breadcrumb Section Start -->
<div class="section">
    <div class="breadcrumb-area bg-light">
        <div class="container-fluid">
            <div class="breadcrumb-content text-center">
                <h1 class="title">Favourites</h1>
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="active">Favourites</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Favourite Section Start -->
<div class="section section-margin">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="wishlist-table table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="pro-thumbnail">Image</th>
                                <th class="pro-title">Product</th>
                                <th class="pro-price">Price</th>
                                <th class="pro-stock">Stock Status</th>
                                <th class="pro-remove">Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($favourites as $fav)
                                @if ($fav) <!-- Check if $fav is not null -->
                                    <tr>
                                        <td class="pro-thumbnail">
                                            <a href="{{ route('user.single-product', $fav->id) }}">
                                                @if(isset($fav->images[0]))
                                                <img class="img-fluid" src="{{ asset('storage/'.$fav->images[0]->image_path) }}" alt="Product">
                                        @endif
                                            </a>

                                        </td>
                                        <td class="pro-title">
                                            <a href="{{ route('user.single-product', $fav->id) }}">
                                                {{ $fav->name }}
                                            </a>
                                        </td>
                                        <td class="pro-price"><span>JOD{{ $fav->price }}</span></td>
                                        <td class="pro-stock">
                                            <span>{{ $fav->stock > 0 ? 'In Stock' : 'Out of Stock' }}</span>
                                        </td>

                                        <td class="pro-remove">
                                            <form action="{{ route('user.favorites.destroy', $fav->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-link text-danger"><i class="pe-7s-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @else
                                    <tr>
                                        <td colspan="6" class="text-center">Product not found.</td>
                                    </tr>
                                @endif
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">No favourite products yet.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<style>
.img-fluid {
    /* max-width: 100%; */
    /* height: auto; */
    width: 141px !important;
    height: 141px !important;
}

</style>
