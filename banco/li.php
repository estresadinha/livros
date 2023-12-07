<?php
 
echo "<h2> Livraria </h2>";
 
 
 
function InserirLivros ($nome_livro, $data_lancamento, $editora){
  // $conexao chama o nosso banco de dados para o php
  $conexao =  new PDO ("mysql:host=localhost;dbname=tb_livros", "root", "");
 
  $Livros = " INSERT INTO  pedidos (nome_usuario, cpf, nome_livro) value (:nome_usuario, :cpf, :nome_livro)";
 
  $preparacao = $conexao->prepare($Livros);
  $preparacao->bindParam(":nome_usuario", $nome_usuario);
  $preparacao->bindParam(":cpf", $cpf);
  $preparacao->bindParam(":nome_livro", $nome_livro);
 
  $preparacao->execute();
 
}
 
 
InserirLivros ("manu", "111-111-111-11", "pequeno princepe");
 
 
?>