@extends('layouts.account')

@section('content')

<div class="card mb-4 shadow">
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-middle">
            <h1>Services</h1>
            <div id="buttons">
                <a href="{{ route('account.services.create') }}" class="btn btn-success">
                    <i class="fas fa-fw fa-plus mr-2"></i>New Service
                </a>
            </div>
        </div>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Type</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                @forelse($services as $service)
                    <tr>
                        <td class="align-middle">{{ $service->name }}</td>
                        <td class="align-middle">£{{ $service->price }}</td>
                        <td class="align-middle">
                            @if($service->other === 0)
                                Equipment Service
                            @else
                                Other
                            @endif
                        </td>
                        <td class="text-right">
                            <a href="{{ route('account.services.show', $service) }}" class="btn btn-primary btn-sm">
                                View<i class="fas fa-fw fa-angle-double-right ml-2"></i>
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">
                            No services yet
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection
