@extends('dashboard.layout')

@section('contentBody')

<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800 mt-5">Edit Contact Information</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Contact Info</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.contactInfo.update', $contactInfo->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="postal_address">Postal Address</label>
                    <input type="text" name="postal_address" id="postal_address" class="form-control" value="{{ $contactInfo->postal_address }}" required>
                </div>
                <div class="form-group">
                    <label for="mobile">Mobile</label>
                    <input type="text" name="mobile" id="mobile" class="form-control" value="{{ $contactInfo->mobile }}" required>
                </div>
                <div class="form-group">
                    <label for="fax">Fax</label>
                    <input type="text" name="fax" id="fax" class="form-control" value="{{ $contactInfo->fax }}">
                </div>
                <div class="form-group">
                    <label for="support_email">Support Email</label>
                    <input type="email" name="support_email" id="support_email" class="form-control" value="{{ $contactInfo->support_email }}" required>
                </div>
                <div class="form-group">
                    <label for="info_email">Info Email</label>
                    <input type="email" name="info_email" id="info_email" class="form-control" value="{{ $contactInfo->info_email }}" required>
                </div>

                <button type="submit" class="btn btn-primary mt-3">Update</button>
            </form>
        </div>
    </div>
</div>

@endsection
