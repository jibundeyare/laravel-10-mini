@extends('base')

@section('title', 'Accueil')

@section('content')
<h1>Accueil</h1>
<p>
    Vous êtes sur la page d'accueil.
</p>

<h2>{{ $article11->titre }}</h2>
<p>{{ $article11->texte }}</p>
<ul>
    @foreach ($article11Images as $image)
    <li>
        <img src="{{ asset('images/'.$image->fichier) }}" alt="{{ $image->titre}}">
    </li>
    @endforeach
</ul>
@endsection
