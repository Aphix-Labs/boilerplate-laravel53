<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
		@if (App::environment('local')) {
			<link rel="stylesheet" href="css/admin.css">
		@else
			<link rel="stylesheet" href="{{ elixir('css/admin.css') }}">
		@endif
        <!-- #GOOGLE FONT -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>
    </head>
    <body ng-app='app' ng-strict-di class='smart-style-2 ng-cloak'>
        <div ui-view></div>
        @if (App::environment('local')) {
            <script src="js/admin.js"></script>
        @else
            <script src="{{ elixir('js/admin.js') }}"></script>
        @endif
    </body>
</html>
