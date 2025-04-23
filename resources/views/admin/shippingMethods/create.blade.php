@extends('dashboard.layout')

@section('contentBody')
<div class="container">
    <h2>Create Shipping Method</h2>

    <form action="{{ route('admin.shippingMethods.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Shipping Method Name</label>
            <select name="name" id="name" class="form-control" required>
                <option value="standard">Standard</option>
                <option value="express">Express</option>
                <option value="overnight">Overnight</option>
            </select>
        </div>



        <div class="form-group">
            <label for="price">Shipping Cost</label>
            <input type="number" name="price" id="price" class="form-control" step="0.01" required>
        </div>

        <div class="form-group">
            <label for="country_id">Country</label>
            <select name="country_id" id="country_id" class="form-control" required>
                @foreach($countries as $country)
                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
