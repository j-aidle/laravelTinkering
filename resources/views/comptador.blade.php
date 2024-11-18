<div>
    <h1>Comptador: {{ $comptador }}</h1>
    <form action="/incrementar" method="POST">
        @csrf
        <button type="submit">Incrementar</button>
    </form>
    <form action="/decrementar" method="POST">
        @csrf
        <button type="submit">Decrementar</button>
    </form>
    <form action="/reset" method="POST">
        @csrf
        <button type="submit">Reset</button>
    </form>
</div>
