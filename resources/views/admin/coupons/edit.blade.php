@extends('dashboard.layout')

@section('contentBody')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800 mt-5">Edit Coupon</h1>
    <a href="{{ route('admin.coupons.index') }}" class="btn btn-secondary mb-4">
        <i class="fa fa-arrow-left"></i> Back to Coupons
    </a>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Coupon</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.coupons.update', $coupon->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="code">Coupon Code</label>
                    <input type="text" name="code" class="form-control" value="{{ $coupon->code }}" required>
                </div>

                <div class="form-group">
                    <label for="discount_type">Discount Type</label>
                    <select name="discount_type" class="form-control" required>
                        <option value="fixed" {{ $coupon->discount_type == 'fixed' ? 'selected' : '' }}>Fixed Amount</option>
                        <option value="percentage" {{ $coupon->discount_type == 'percentage' ? 'selected' : '' }}>Percentage</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="amount">Amount</label>
                    <input type="number" name="amount" class="form-control" value="{{ $coupon->amount }}" required min="0.01" step="0.01">
                </div>

                <div class="form-group">
                    <label for="valid_until">From Date</label>
                    <input type="date" name="valid_until" value="{{ $coupon->valid_until }}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="valid_from">To Date</label>
                    <input type="date" name="valid_from" value="{{ $coupon->valid_from }}"   class="form-control" >
                </div>

                <button type="submit" class="btn btn-success">Update Coupon</button>
            </form>
        </div>
    </div>
</div>
@endsection
