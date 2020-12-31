@extends('layouts.account')

@section('content')

<div class="card mb-4 shadow">
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-middle">
            <h1>Create Service</h1>
            <div id="buttons">
                <a href="{{ route('account.services.index') }}" class="btn btn-secondary">
                    <i class="fas fa-fw fa-angle-double-left mr-2"></i>Back
                </a>
            </div>
        </div>

        <form>

        </form>
    </div>
</div>

@endsection
