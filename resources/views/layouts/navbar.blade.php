<p id="nav">
    
    
    @can('isAdmin')
    <span>|</span><a href="{{ route('admin') }}"  title="Home Admin">Home Admin</a>
    <span>|</span><a href="{{ route('show.blogs.admin') }}" title="Visualizza tutti i blog">Blog</a>
    <span>|</span><a href="{{ route('create.user') }}" title="Crea un nuovo utente">New User</a>
    <span>|</span><a href="{{ route('show.users') }}" title="Mostra elenco utenti">User</a>
    <span>|</span><a href="{{ route('info') }}"title="Informazioni sul sito">Info</a>
    <span>|</span><a href="{{ route('search.users.index') }}" title="cerca utenti registrati">Cerca</a>
    @endcan
    @can('isUser')
    <span>|</span><a href="{{ route('user') }}" title="Il Tuo Blog">Blog</a>
    <span>|</span><a href="{{ route('user.followers') }}" title="Lista dei tuoi seguaci">Follower</a>
    <span>|</span><a href="{{ route('user.mypost') }}" title="Mostra i tuoi post">My Post</a>
    <span>|</span><a href="{{ route('search.users.index') }}" title="cerca utenti registrati">Cerca</a>
    @endcan
    @can('isStaff')
    <span>|</span><a href="{{ route('staff') }}"  title="Home Staff">Home Staff</a>
    <span>|</span><a href="{{ route('show.blogs') }}"  title="Visualizza tutti i blog">Blog</a>
    <span>|</span><a href="{{ route('search.users.index') }}"  title="cerca utenti registrati">Cerca</a>
    @endcan
    @auth
    <span>|</span><a href="" title="Esci dal sito"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    @endauth    
    @guest
    <span>|</span><a href="{{ asset('relazione corso di tecnologie web 2019.pdf') }}" title="Documentazione">Documentazione</a>
    <span>|</span><a href="{{ route('home') }}" title="Home">Home</a>
    <span>|</span><a href="mailto:info@acme.it" title="Mandaci un messaggio">Contattaci</a>
    <span>|</span><a id="cerca-guest" title="cerca utenti registrati">Cerca</a>
    <span>|</span><a href="{{ route('login') }}" title="Accedi all'area riservata del sito">Accedi</a>
    @endguest
</p>