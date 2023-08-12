
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('assets/css/formulario.css') }}">
    <title>Contato</title>
</head>

<body>

    <section class="card">

        <form action="/form-enviar" method="post">
            @csrf

            <h2> FORMULARIO</h2>
            <div class="card-formulario">

                <div class="card-inputs">
                    <label>NOME</label>
                    <input type="text" name="nome" id="nome" placeholder="Nome">
                    <label>EMAIL</label>
                    <input type="email" name="email" id="email" placeholder="Email">
                    <label>NUMERO</label>
                    <input type="number" name="numero" id="numero" placeholder="Numero">
                    <label>ESCOLHA</label>
                    <select name="seletor" id="seletor">
                        <option>nenhum</option>
                        <option>carro</option>
                        <option>moto</option>
                        <option>moto </option>
                    </select>
                </div>


                <div class="caixa-texto">
                    <label>DEIXE UM COMENTARIO</label>

                    <textarea name="comentario" id="comentario">
                    </textarea>

                </div>


            </div>
            <div class="botao-notificao">


                <div class="card-notificaoes">
                    <label>deseja recbeer notificacões ?</label>
                    <input type="checkbox" name="escolha" id="escolha"> sim
                    <input type="checkbox" name="escolha" id="escolha"> não
                </div>

                <input class="botao-form" type="submit">
            </div>
        </form>

    </section>



</body>

</html>
