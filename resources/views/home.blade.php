@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Notifications</div>

                    <div class="card-body">
                        @foreach($notifications as $notification)
                            @include('notifications/types/'.camelToSnake($notification->type),compact('notification'))
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
