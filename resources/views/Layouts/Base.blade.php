<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>platform</title>
    <link rel="stylesheet" href="{{ asset('style/css/bootstrap.min.css') }}">
     <link rel="stylesheet" href="{{ asset('style/css/Style.css') }}">
    <link rel="stylesheet" href="{{ asset('style/css/card.css') }}" />
    <link rel="stylesheet" href="{{ asset('style/css/formAjoutProf.css') }}" />
    <link rel="stylesheet" href="{{ asset('style/css/listemanager.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
</head>

<body>

    @yield('content')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('style/js/dashboard.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#barreRecherche").on("input", function() {
                var valeurRecherche = $(this).val().toLowerCase();
                $("table tbody tr").each(function() {
                    var texteLigne = $(this).text().toLowerCase();
                    if (texteLigne.indexOf(valeurRecherche) === -1) {
                        $(this).hide();
                    } else {
                        $(this).show();
                    }
                });
            });
        });
    </script>
</body>

</html>
