@extends('dashboard.layout')

@section('contentBody')

<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800 mt-5">Contact Information</h1>
    <a href="{{ route('admin.contactInfo.create') }}" class="btn btn-primary mb-4"><i class="fa fa-plus mr-2"></i>Add Contact Info</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Contact Information List</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Postal Address</th>
                            <th>Mobile</th>
                            <th>Fax</th>
                            <th>Support Email</th>
                            <th>Info Email</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($contactInfos as $contactInfo)
                            <tr>
                                <td>{{ $contactInfo->postal_address }}</td>
                                <td>{{ $contactInfo->mobile }}</td>
                                <td>{{ $contactInfo->fax }}</td>
                                <td>{{ $contactInfo->support_email }}</td>
                                <td>{{ $contactInfo->info_email }}</td>
                                <td>
                                    <!-- Edit Icon -->
                                    <a href="{{ route('admin.contactInfo.edit', $contactInfo->id) }}" class="btn btn-warning btn-sm">
                                        <i class="fa fa-edit"></i>
                                    </a>

                                    <!-- Delete Icon -->
                                    <form action="{{ route('admin.contactInfo.destroy', $contactInfo->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
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
