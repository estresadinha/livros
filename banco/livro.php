<?php
 
echo "<h2> Livraria </h2>";
 
 
 
function InserirLivros ($nome_do_livro, $data_lancamento, $editora){
  // $conexao chama o nosso banco de dados para o php
  $conexao =  new PDO ("mysql:host=localhost;dbname=tb_livros", "root", "");
 
  $Livros = " INSERT INTO  cadastro_usuario (nome_do_usuario, cpf, telefone) value (:nome_do_usuario, :cpf, :telefone)";
 
  $preparacao = $conexao->prepare($Livros);
  $preparacao->bindParam(":nome_do_usuario", $nome_do_usuario);
  $preparacao->bindParam(":cpf", $cpf);
  $preparacao->bindParam(":telefone", $telefone);
 
  $preparacao->execute();
 
}
 
 
InserirLivros ("manu", "111-111-111-11", "1999190-0617");
 
 
?>

