@props(['produit'])

<div class="container bg-gray-50 border border-gray-200 rounded p-6 my-3">
    <ul class="list-group-item flex my-2">
        <li class="list-group-item flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
            Nom: <a href="#">{{$produit->produitNom}}</a>
        </li>
        <li class="list-group-item flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
            Description: <a href="#">{{$produit->produitDescription}}</a>
        </li>
        <li class="list-group-item flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
            Prix: <a href="#">{{$produit->produitPrix}}</a>
        </li>
    </ul>
</div>
