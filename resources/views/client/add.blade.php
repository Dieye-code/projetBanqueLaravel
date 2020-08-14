@extends('header')

@section('content')

    @if (isset($success) && $success == 0)

        <script src="js/notyf.min.js"></script>
        <script>
            var t = new Notyf({
                duration: 2000,
                position: {
                    x: 'right',
                    y: 'top',
                }
            });
            t.error("Echec d'ajout du Client");
            setTimeout(() => {
                t.dismissAll();
            }, 2000);

        </script>

    @endif

   

@endsection
