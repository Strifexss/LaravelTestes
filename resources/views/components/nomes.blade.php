@props([
    'nomes' => 'Matheus',
    'Mostrar' => false,
    'data'
])

<div class="item" id={{$id}}>
    <h1 style="color: red">
        {{ $nomes }}
        {{ $Mostrar ? "Matheus" : "Henrique" }}
    </h1>
    {{ $slot }}
</div>
