<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BladeTeste</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body style="padding: 0; margin: 0; box-sizing: border-box; width: 100vw; height: 100vh;">
<div id="conteudo"
    style="width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; flex-direction: column; background-color: #1b1e21">
    <x-header titulo="Minha Pagina"/>
    <div style="display: flex; flex-direction: column; padding: 2rem">
        @foreach($data as $nomes)
            <x-nomes :id="$nomes['nome']" :nomes="$nomes['nome']" :data="$nomes"/>
        @endforeach
    </div>
    <div style="display: flex; justify-content: center; align-items: center; width: 100%">
        <button id="botao"
            style="background-color: #29a729; padding: 0.5rem; width: 7rem; border-radius: 0.5rem; border: none; color: white; font-weight: bold; cursor: pointer">
            Matheus
        </button>
    </div>
</div>
</body>
<script>

    $(".item").on("click", function () {
        var id = $(this).attr("id");
        var nomes = $(this).attr("data");
        var data = $(this).attr("data")

        // Exemplo de como exibir no console para fins de teste:
        console.log("ID: " + id);
        console.log("Nomes: " + nomes);
        console.log("Data:" + data)

        // Adicione aqui a lógica para exibir o modal com as informações.
    });

    $("botao").on("click", async function () {
        $.ajax({
            url: "/api/Teste",
            method: "GET",
            dataType: "json",
            success: function (response) {

                const data = response.data;
                console.log(response)

                var novoElemento = $("<div>").html(
                    "<div style='position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); padding: 5rem; display: flex; justify-content: center; align-items: center; background-color: black'>"
                    + "<h1 style='color: white; font-weight: bold'> "
                    + data.Profissao +
                    "</h1>" +
                    " </div>"
                );
                $("body").append(novoElemento);
            },
            error: function (error) {console.log(error)}
        })
    })
</script>
</html>
