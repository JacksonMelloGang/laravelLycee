@props('facture')

<div class="container bg-gray-50 border border-gray-200 rounded p-6 my-3">
    <ul class="list-group-item flex my-2">
        <li class="list-group-item flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
            Numero facture: <a href="#">{{$facture->id}}</a>
        </li>
        <li class="list-group-item flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
            Client n°: <a href="/client/{{$facture->factureClient}}">{{$facture->factureClient}}</a>
        </li>
        <li class="list-group-item flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
            Produit n°: <a href="/produit/{{$facture->factureProduit}}">{{$facture->factureProduit}}</a>
        </li>
        <li class="list-group-item flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
            Qte: <a href="#">{{$facture->Qte}}</a>
        </li>
    </ul>
</div>

