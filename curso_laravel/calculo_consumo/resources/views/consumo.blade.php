<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" >
        <title>Calculo de Consumo de Combustível</title>
    </head>
    <body>
        <main>
            <div class="painel">
                <h2>Instruções</h2>
                <div class="conteudo-painel">
                    <p>Esta aplicação tem como finalidade demonstrar os valores que serão gastos com combustível durante uma viagem, com base no consumo do seu veículo, e com a distância determinada por você!</p>
                    <p>Os combustíveis disponíveis para este cálculo são:</p>
                    <ul>
                        <li><b>Gasolina - R$ 4,80</b></li>
                    </ul>
                </div>
            </div>

            <div class="painel">
                <h2>Cálculo do valor (R$) do consumo</h2>
                <div class="conteudo-painel">
                    <form action="{{ url('/gasto') }}" method="get">
                        <label for="distancia">Distância em Km a ser percorrida</label>
                        <input type="number" name="distancia" id="distancia" class="campoTexto" required>
                        <label for="autonomia">Consumo de combustível do veículo (Km/L)</label>
                        <input type="number" class="campoTexto" name="autonomia" required/>

                        <button class="botao" type="submit">Calcular</button>
                    </form>
                </div>
            </div>
        </main>
    </body>
</html>