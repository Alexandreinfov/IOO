<!DOCTYPE html>
<html>
    <head>
        <title>Formulário</title>
        <meta charset="utf-8">
        <style type="text/css">
            .msgerro{
                color: red;
                font-size:smaller;
            }
        </style>
    </head>
    <body>
        <h1>Formulário de Cadastro</h1>

        <form action="formulario.php" method="post" ">
            <p>
                <label>Nome</label>
                <input type="text"  name="nome" placeholder="Informe o nome"/>
            </p>
            <p>
                <label>E-mail</label>
                <input type="email"  name="email" placeholder="Informe o e-mail" " />
            </p>
            <p>
                <label>CPF</label>
                <input type="text"  name="cpf" placeholder="Informe o CPF" " />
            </p>
            <p>
                <label>Sexo</label>
                <select name="sexo" >
                    <option value="">Selecione o sexo</option>
                    <option value="Feminino">Feminino</option>
                    <option value="Masculino">Masculino</option>
                </select>    
            </p>
            <p>
                <label>Data Nascimento)</label>
                <input type="date"  name="data_nasc"/>
            </p>
            <input type="submit" value="cadastrar"/>
        </form>
        
    </body>
</html>


