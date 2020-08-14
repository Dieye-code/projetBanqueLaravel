@extends('header')

@section('content')

    @if(isset($success) && $success == 1)

        <script src="js/notyf.min.js"></script>
        <script>
            var t = new Notyf({
                duration : 2000 , 
                position : { 
                    x : 'right' , 
                    y : 'top' , 
                }
            });
            t.success("Client Ajoute avec success");
            setTimeout(()=>{
                t.dismissAll();
            },2000);
        </script>

    @endif

<div class="container">
    
    <div class="card">
            <div class="card-header text-white bg-dark mt-5">Liste des Clients</div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <tr>
                    <th>Id</th>
                    <th>Prenom</th>
                    <th>Nom</th>
                    <th>Adresse</th>
                    <th>Telephone</th>
                </tr>

                @foreach ($clients as $client)

                    <tr>
                        <td>{{$client->id}}</td>
                        <td>{{$client->prenom}}</td>
                        <td>{{$client->nom}}</td>
                        <td>{{$client->adresse}}</td>
                        <td>{{$client->telephone}}</td>
                    </tr>

                @endforeach

            </table>
        </div>
    </div>

</div>


@endsection
