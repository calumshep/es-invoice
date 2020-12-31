@extends('layouts.auth')

@section('content')
<div class="d-flex justify-content-between align-items-center">
    <h1>Edit Event</h1>
    <p id="buttons">
        <button type="submit" class="btn btn-success">
            <i class="fas fa-fw fa-save mr-2"></i>Save
        </button>
        <a href="{{ url('/account/events/'.$event->id) }}" class="btn btn-secondary">
            <i class="fas fa-fw fa-times mr-2"></i>Cancel
        </a>
    </p>
</div>

<form action="/account/events/{{ $event->id }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')

    <div class="form-row">
        <div class="form-group col-md-6">
            <label>Title</label>
            <input type="text" class="form-control" name="title" required value="{{ $event->title }}">
        </div>

        <div class="form-group col-md-6">
            <label>Image</label>
            <input type="file" class="form-control-file" name="image">
            <small class="text-muted form-text">
                Choose a new file only if you wish to add or change to a new image!
            </small>
        </div>
    </div>

    <div class="form-group">
        <label>Description</label>
        <textarea class="form-control" name="description" required>{{ $event->description }}</textarea>
    </div>

    <div class="form-row">
        <div class="col-md-6">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Start Date</label>
                    <input type="date" class="form-control" name="dateStart" required value="{{ $event->dateStart }}">
                </div>

                <div class="form-group col-md-6">
                    <label>Start Time (hh:mm)</label>
                    <div class="input-group">
                        <select class="custom-select" name="timeStartHour">
                            @for($hour = 0; $hour <= 24; $hour++)
                                <option
                                value="{{ $hour }}"
                                @if(date_format(new DateTime($event->timeStart), 'G') == $hour)
                                    selected
                                @endif>
                                    {{ $hour }}
                                </option>
                            @endfor
                        </select>

                        <select class="custom-select" name="timeStartMinute">
                            @for($minute = 0; $minute <= 60; $minute++)
                                <option
                                value="{{ $minute }}"
                                @if( (int) date_format(new DateTime($event->timeStart), 'i') == $minute)
                                    selected
                                @endif>
                                    {{ $minute }}
                                </option>
                            @endfor
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>End Date</label>
                    <input type="date" class="form-control" name="dateEnd" required value="{{ $event->dateEnd }}">
                </div>

                <div class="form-group col-md-6">
                    <label>End Time (hh:mm)</label><div class="input-group">
                        <select class="custom-select" name="timeEndHour">
                            @for($hour = 0; $hour <= 24; $hour++)
                                <option
                                value="{{ $hour }}"
                                @if(date_format(new DateTime($event->timeEnd), 'G') == $hour)
                                    selected
                                @endif>
                                    {{ $hour }}
                                </option>
                            @endfor
                        </select>

                        <select class="custom-select" name="timeEndMinute">
                            @for($minute = 0; $minute <= 60; $minute++)
                                <option
                                value="{{ $minute }}"
                                @if( (int) date_format(new DateTime($event->timeEnd), 'i') == $minute)
                                    selected
                                @endif>
                                    {{ $minute }}
                                </option>
                            @endfor
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label>Venue Name</label>
            <input type="text" class="form-control" name="venue" required value="{{ $event->venue }}">
        </div>
        <div class="form-group col-md-6">
            <label>Venue URL</label>
            <input type="url" class="form-control" name="venueUrl" value="{{ $event->venueUrl }}">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label>Organiser Name</label>
            <input type="text" class="form-control" name="organiser" required value="{{ $event->organiser }}">
        </div>
        <div class="form-group col-md-6">
            <label>Organiser URL</label>
            <input type="url" class="form-control" name="organiserUrl" value="{{ $event->organiserUrl }}">
        </div>
    </div>

    <p class="text-muted">
        You must be, or have explicit permission from, the event organiser to
        create and manage an event through Edge Snowsport. Violation of this
        may result in termination of your account with no refund of any costs
        incurred!
    </p>
</form>
@endsection
