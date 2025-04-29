@extends('dashboard.layout')

@section('contentBody')
<div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800 mt-5">Coupons</h1>
    <a href="{{ route('admin.coupons.create') }}" class="btn btn-primary btn-icon-split mb-4 icon px-4 py-2">
        <i class="fa fa-plus mr-2"></i> Add New Coupon
    </a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Coupons List</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Code</th>
                            <th>Discount Type</th>
                            <th>Amount</th>
                            <th>From Date</th>
                            <th>To Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($coupons as $coupon)
                            <tr>
                                <td>{{ $coupon->code }}</td>
                                <td>{{ ($coupon->discount_type) }}</td>
                                <td>
                                    @if($coupon->discount_type == 'percentage')
                                        {{ $coupon->amount }}% <!-- عرض النسبة المئوية -->
                                    @else
                                        {{ number_format($coupon->amount, 2) }}  JOD <!-- عرض المبلغ الثابت -->
                                    @endif
                                </td>
                                <td>{{ $coupon->valid_from }}</td>
                                <td>{{ $coupon->valid_until }}</td>
                                <td class="text-center">
                                    <a href="{{ route('admin.coupons.edit', $coupon->id) }}" class="btn btn-sm btn-primary">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.coupons.destroy', $coupon->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection
