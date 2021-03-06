<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="stylesheet" href="{{ elixir('css/public.css') }}">
        <!-- #GOOGLE FONT -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
                // 'assetsImage' => asset(''),
            ]); ?>
        </script>
    </head>
    <body ng-app='app' ng-strict-di class='ng-cloak'>
        <div ui-view></div>
        <script src="{{ elixir('js/public.js') }}"></script>
        <script>
            angular.module('app').run(['toastr', function(toastr) {
                var wasPasswordReset = '{{ session("status")  }}';
                if (wasPasswordReset) {
                    toastr.success(wasPasswordReset, 'Cambio exitoso de contraseña');
                }
            }]);
        </script>
    </body>
</html>
