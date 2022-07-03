<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Loja de varejo - Cadastro de fornecedor</title>
</head>
<body>
    <nav class="bg-black p-4">
      <ul>
        <li class="inline text-white">
            <a href="../../index.html">Home</a>
        </li>
        <li class="inline text-white">
            <a href="form_add_product.php">Novo produto</a>
        </li>
      </ul>
    </nav>
    <form action="../Controller/Provider.php" method="POST">
        <fieldset class="p-4 m-5 border border-black">
            <legend>Dados do fornecedor</legend>
            <section class="columns-3">
            <article>
                    <label for="providername">Nome</label>
                    <input type="text" name="providername" id="providername" class="border border-black">
                </article>
                <article>
                    <label for="cnpj">CNPJ</label>
                    <input type="text" id="cnpj" name="cnpj" class= "border border-black">
                </article>
                <article>
                    <label for="phone">Telefone</label>
                    <input type="text" id="phone" name="phone" class="border border-black">
                </article>
            </section>
        </fieldset>
        <fieldset class="p-4 m-5 border border-black">
            <legend>Endereço do fornecedor</legend>
            <section class="columns-3">
                <article>
                    <label for="provideraddress">Rua</label>
                    <input type="text" id="provideraddress" name="provideraddress" class="border border-black">
                </article>
                <article>
                    <label for="house_number">Número</label>
                    <input type="text" id="house_number" name="house_number" class="border border-black">
                </article>
                <article>
                    <label for="neighborhood">Bairro</label>
                    <input type="text" id="neighborhood" name="neighborhood" class="border border-black">
                </article>
            </section>
            <section class="mt-4 columns-3"> 
                <article>
                    <label for="complement">Complemento</label>
                    <input type="text" id="complement" name="complement" class="border border-black">
                </article>
                <article>
                    <label for="zipcode">CEP</label>
                    <input type="text" id="zipcode" name="zipcode" class="border border-black">
                </article>
                <article>
                    <label for="city">Cidade</label>
                    <input type="text" id="city" name="city" class="border border-black">
                </article>
            </section>
        </fieldset>
        <article class="flex justify-center mt-4">
                <button type="submit" class="p-4 text-white bg-black rounded">Cadastrar</button>
        </article>
    </form>
    
</body>
</html>