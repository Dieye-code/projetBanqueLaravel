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
            t.error("Echec d'ajout de la Compte");
            setTimeout(() => {
                t.dismissAll();
            }, 2000);

        </script>
    @endif

    <div class="container col-md-6 offset-md-3 my-5">
        <div class="card">
            <div class="card-header bg-primary text-white">Ajout d'un Compte Client</div>
            <div class="card-body">
                <form action="/Compte" method="post">
                    @csrf
                    <div class="form-group">
                        <label class="control-label">Numero</label>
                        <input type="text" class="form-control" name="numero" id="numero">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Cles Rib</label>
                        <input type="text" class="form-control" name="clesRib" id="clesrib">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Solde</label>
                        <input type="number" class="form-control" name="solde" id="solde">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Client</label>
                        <select name="idClient" id="idClient" class="form-control">
                            @foreach ($clients as $client)
                                <option value="{{ $client->id }}">{{ $client->prenom }} {{ $client->nom }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Ajouter" name="ajouter" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
