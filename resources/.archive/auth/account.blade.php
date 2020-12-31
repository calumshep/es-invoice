@extends('layouts.account')

@section('content')

<div class="card shadow mb-4">
    <div class="card-body">
        <form action="" method="post">
            @csrf
            @method('patch')

            <div class="d-flex justify-content-between align-items-center">
                <h3 class="card-title">Account Settings</h3>
                <div id="editButton">
                    <button class="btn btn-primary" onclick="editAccount()" type="button">
                        <i class="fas fa-fw fa-edit mr-2"></i>Edit
                    </button>
                </div>

                <div class="d-none" id="editingFunctions">
                    <button class="btn btn-danger" id="cancelButton" onclick="readAccount()" type="button">
                        <i class="fas fa-fw fa-times mr-2"></i>Cancel
                    </button>

                    <button class="btn btn-success" id="saveButton" onclick="readAccount()" type="submit">
                        <i class="fas fa-fw fa-save mr-2"></i>Save
                    </button>
                </div>
            </div>

            <div class="card-body">
                <div class="mb-3">
                    <label>Name</label>
                    <input type="text" id="name" name="name" class="form-control" value="{{ Auth::user()->name }}" disabled>
                </div>

                <div class="mb-3">
                    <label>Email</label>
                    <input type="text" id="email" name="email" class="form-control" value="{{ Auth::user()->email }}" disabled>
                </div>

                <div>
                    <label>
                        <span id="role-info" data-toggle="tooltip" data-placement="right" title="Please note that this does not change any functionality, but shows you recommendations based on your most frequent use.">
                            Role<i class="fas fa-info-circle ml-2"></i>
                        </span>
                    </label>

                    <select
                    id="role"
                    name="role"
                    class="form-select"
                    disabled>
                        <option value="customer">Edge Snowsport Customer</option>
                        <option value="competitor">Competitor/Competitor(s) Parent</option>
                        <option value="marketplace">Marketplace User/Seller</option>
                        <option value="coach">Ski Coach/Instructor</option>
                    </select>

                    <small class="form-text text-muted">
                        Select which role best describes your use of Edge
                        Snowsport.
                    </small>
                </div>
            </div>
        </form>
    </div>
</div>

<!--
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
-->

@endsection

@push('scripts')

<script>
    function editAccount()
    {
        document.getElementById('editButton').className = 'd-none';
        document.getElementById('editingFunctions').className = '';
        document.getElementById('name').removeAttribute('disabled');
        document.getElementById('email').removeAttribute('disabled');
        document.getElementById('role').removeAttribute('disabled');
    }

    function readAccount()
    {
        document.getElementById('editButton').className = '';
        document.getElementById('editingFunctions').className = 'd-none';
        document.getElementById('name').setAttribute('disabled', 'true');
        document.getElementById('email').setAttribute('disabled', 'true');
        document.getElementById('role').setAttribute('disabled', 'true');
    }
</script>

@endpush
