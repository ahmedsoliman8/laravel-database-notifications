@component('notifications/notification')
    {{$notification->data->author->name}} (   {{$notification->data->author->id}}) posted a comment
@endcomponent
