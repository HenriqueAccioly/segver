<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aula Git</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Arquivo a ser persistido no repositório Git</h1>

        <div>
            <h3>Exemplos de soluções para proteção SQL Injection em PHP</h3>
            <div>
                <p><strong><em>Addslashes</em></strong> - <em>Adiciona</em> barras invertidas a uma string</p>
                <code>
                    <span style="color: blue">string</span> 
                    addslashes (<span style="color: blue">string</span>
                    <em>$query</em>)
                </code>
                <p><br>Retorna uma <em>string com barras invertidas</em> com os 
                caracteres que precisam ser convertidos para string
                <br><strong>ex.:</strong> Sant'anna
                <br><strong>convertido:</strong> Sant'\anna'</p>
            </div>
            <div>
                <p><strong>preg_replace</strong> - <em>Realiza</em> uma pesquisa por uma expressão regular e a substitui</p>
                <code>
                    <strong>$login</strong> = 
                    preg_replace(<span style="color: blue">'/[^[:alpha:]_]/'</span>, '', 
                    <strong>$login</strong>);
                </code>
                <p><br><strong><em>[:alpha:]</em></strong> - é a mesma coisa que [a-zA-Z], 
                <br>portanto não são permitidos símbolos nem o (_), evitando aquele comando clássico utilizado nos 
                <br>logins como: or ‘ 1=’1 além de todos outros possíveis utilizando caracteres especiais e números.
                <p><br><strong><em>[:alnum:]</em></strong> - Deixando apenas letras e números na variável
                <br>limpa os caracteres especiais deixando apenas as letras e números.</p>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>