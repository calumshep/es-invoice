@extends('layouts.auth')

@section('content')
<div class="d-flex justify-content-between align-items-center">
    <h1>View Event</h1>
    <p id="buttons">
        <a href="{{ url('/account/events/'.$event->id.'/edit') }}" class="btn btn-primary">
            <i class="fas fa-fw fa-pencil-alt mr-2"></i>Edit
        </a>
        <a href="{{ url('/account/events') }}" class="btn btn-secondary">
            <i class="fas fa-fw fa-angle-double-left mr-2"></i>Back
        </a>
    </p>
</div>


<div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" readonly value="{{ $event->title }}">
</div>

<img src="/storage/{{ $event->image }}" class="img-fluid img-thumbnail" alt="{{ $event->title }}">

<div class="form-group">
    <label>Description</label>
    <textarea class="form-control" readonly>{{ trim($event->description) }}</textarea>
</div>

<div class="form-row">
    <div class="col-md-6">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Start Date</label>
                <input type="date" class="form-control" readonly value="{{ $event->dateStart }}">
            </div>
            @if($event->timeStart)
                <div class="form-group col-md-6">
                    <label>Start Time (hh:mm)</label>
                    <input type="text" class="form-control" readonly value="{{ $event->timeStart }}">
                </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-row">
            @endif
            <div class="form-group col-md-6">
                <label>End Date</label>
                <input type="date" class="form-control" readonly value="{{ $event->dateEnd }}">
            </div>
            @if($event->timeEnd)
                <div class="form-group col-md-6">
                    <label>End Time (hh:mm)</label>
                    <input type="text" class="form-control" readonly value="{{ $event->timeEnd }}">
                </div>
            @endif
        </div>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label>Venue Name</label>
        <input type="text" class="form-control" readonly value="{{ $event->venue }}">
    </div>
    @if($event->venueUrl)
        <div class="form-group col-md-6">
            <label>
                Venue URL &middot;
                <a href="{{ $event->venueUrl }}" target="_blank">
                    Link Preview<i class="fas fa-xs fa-external-link-alt ml-2"></i>
                </a>
            </label>
            <input type="url" class="form-control-plaintext" readonly value="{{ $event->venueUrl }}">
        </div>
    @endif
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label>Organiser Name</label>
        <input type="text" class="form-control" readonly value="{{ $event->organiser }}">
    </div>
    @if($event->organiserUrl)
        <div class="form-group col-md-6">
            <label>
                Organiser URL &middot;
                <a href="{{ $event->organiserUrl }}" target="_blank">
                    Link Preview<i class="fas fa-xs fa-external-link-alt ml-2"></i>
                </a>
            </label>
            <input type="url" class="form-control-plaintext" readonly value="{{ $event->organiserUrl }}">
        </div>
    @endif
</div>

@endsection
