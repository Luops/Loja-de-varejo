<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de varejo - Cadastro de produtos</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<nav class="p-4 bg-black">
      <ul>
        <li class="inline text-white">
            <a href="../../index.html">Home</a>
        </li>
        <li class="inline text-white">
            <a href="form_add_provider.php">Novo Fornecedor</a>
        </li>
      </ul>
    </nav>
    <form action="../controller/Product.php" method="POST">
        <fieldset class="p-4 m-5 border border-black-200">
            <legend>Dados do produto</legend>
            <section class="mx-2 mt-4 columns-3">
                <article>
                    <label for="barCode">Código de barras</label>
                    <input type="number" id="barCode" name="barCode" class="border border-black" required>
                </article>
                <article>
                    <label for="name">Nome do produto</label>
                    <input type="text" id="name" name="name" class="border border-black" required minlength="5">
                </article>
                <article>
                    <label for="cost">Preço de custo</label>
                    <input type="text" id="cost" name="cost" class="border border-black" required min="1" max="1000">
                </article>
            </section>
            <section class="mt-4 columns-2">
                <article>
                    <label for="quantity">Quantidade em estoque</label>
                    <input type="number" id="quantity" name="quantity" class="border border-black" required min="1" max="1000">
                </article>
                <article>
                    <label for="provider">Fornecedor</label>
                    <select name="provider" id="provider">
                        <option value="1">Fornecedor 1</option>
                        <option value="2">Fornecedor 2</option>
                        <option value="3">Fornecedor 4</option>
                    </select>
                </article>
            </section>
            <article class="flex justify-center mt-4">
                <button type="submit" class="p-4 text-white bg-black rounded">Cadastrar</button>
            </article>
        </fieldset>
    </form>
</body>
</html>