@extends('header')

@section('content')

    @if (isset($success) && $success == 1)

        <script src="js/notyf.min.js"></script>
        <script>
            var t = new Notyf({
                duration: 2000,
                position: {
                    x: 'right',
                    y: 'top',
                }
            });
            t.success("Compte Bien Ajoute");
            setTimeout(() => {
                t.dismissAll();
            }, 2000);

        </script>

    @endif

    <div class="card col-md-8 offset-md-2 mt-5">
        <div class="card-header bg-primary text-white">Liste des Comptes</div>
        <div class="card-body">
            <table class="table table-striped table-bordered">
                <tr>
                    <th>Id</th>
                    <th>Numero</th>
                    <th>Cles Rib</th>
                    <th>Solde</th>
                    <th>Client</th>
                </tr>
                @foreach ($comptes  as $compte)
                    <tr>
                        <td>{{ $compte->id }}</td>
                        <td>{{ $compte->numero }}</td>
                        <td>{{ $compte->cleRib }}</td>
                        <td>{{ $compte->solde }}</td>
                        <td>{{ $compte->prenom }} {{ $compte->nom }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection