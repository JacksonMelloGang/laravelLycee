@extends("layout.app")
@section("content")
    <form name="aaaa" method='post'>
        @method('PUT')
        @csrf
        <label>Nom</label>
        <input type="text" name="nom" id="nom" value={{$name}}>
        <br>
        <label>Prénom</label>
        <input type="text" name="prenom" id="prenom">
        <br>
        <label>Age</label>
        <input type="text" name="age" id="age">
        <br>
        <label>Adresse</label>
        <input type="text" name="adresse" id="adresse">
        <br>
        <label>Code postal</label>
        <input type="text" name="codepostal" id="codepostal">
        <br>
        <label>Ville</label>
        <input type="text" name="ville" id="ville">
        <br>
        <label>Mail</label>
        <input type="text" name="mail" id="mail">
        <br>
        <label>Numéro de téléphone</label>
        <input type="text" name="numtel" id="numtel">

        <input type="submit" value="Envoyer" onclick="envoyer()">
    </form>
@endsection
