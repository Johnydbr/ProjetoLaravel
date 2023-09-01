
@extends('layout.main')

@section('content')
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
                    <input id="telefone" type="text" name="numero" placeholder="Numero">
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

        
    <script type="text/javascript">
        let telefone = document.getElementById('telefone')
        $(telefone).ready(function(){ $('#telefone').mask("(00) 0000-0000");})
 
    </script>



@endsection