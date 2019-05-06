<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@lang('failedlogins::failedlogins.overview_failed_logins')</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1>@lang('failedlogins::failedlogins.overview_failed_logins')</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>@lang('failedlogins::failedlogins.userid')</th>
            <th>@lang('failedlogins::failedlogins.email')</th>
            <th>@lang('failedlogins::failedlogins.ip_address')</th>
            <th>@lang('failedlogins::failedlogins.date')</th>
        </tr>
        </thead>
        <tbody>

        @forelse($failedlogins as $entry)
            <tr>
                <td>{{$entry->user_id}}</td>
                <td>{{$entry->email_address}}</td>
                <td>{{$entry->ip_address}}</td>
                <td>{{$entry->created_at}}</td>
            </tr>
        @empty
            <tr>
                <td>@lang('failedlogins::failedlogins.nothingfound')</td>
            </tr>
        @endforelse
        </tbody>
    </table>
</div>
</body>
</html>