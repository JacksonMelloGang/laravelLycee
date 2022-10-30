@props(['client'])

<div class="container bg-gray-50 border border-gray-200 rounded p-6 my-3">
    <ul class="list-group-item flex my-2">
        <li class="list-group-item flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
            Nom: <a href="/client/{{$client->id}}">{{$client->clientNom}}</a>
        </li>
        <li class="list-group-item flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
            Prenom: <a href="#">{{$client->clientprenom}}</a>
        </li>
        <li class="list-group-item flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
            Adresse: <a href="#">{{$client->clientAdresse}}</a>
        </li>
        <li class="list-group-item flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
            Ville: <a href="#">{{$client->clientCodePostal}}, {{$client->clientVille}}</a>
        </li>
        <li class="list-group-item flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
            Téléphone: <a href="#">{{$client->clientTelephone}}</a>
        </li>
        <li class="list-group-item flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
            Email: <a href="#">{{$client->clientEmail}}</a>
        </li>
        <li class="list-group-item flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
            Date de Naissance: <a href="#">{{$client->clientDateNaissance}}</a>
        </li>
    </ul>
</div>
