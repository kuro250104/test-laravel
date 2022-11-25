<nav>
    <ul>
        <li>
            <a href="{{ route('book.index') }}" title="Liste des livres">Liste des livres</a>
        </li>
        <li>
            <a href = "{{ route('book.create') }}" title="Ajouter un livre">Ajouter un livre</a>
        </li>
    </ul>
    <ul>
        <li>
            <a href="{{ route('author.index') }}" title="Liste des auteurs">Liste des auteurs</a>
        </li>
        <li>
            <a href = "{{ route('author.create') }}" title="Ajouter un auteur">Ajouter un auteur</a>
        </li>
    </ul>
    <ul>
        <li>
            <a href="{{ route('genre.index') }}" title="Liste des genres">Liste des genres</a>
        </li>
        <li>
            <a href = "{{ route('genre.create') }}" title="Ajouter un genres">Ajouter un genres</a>
        </li>
    </ul>
</nav>