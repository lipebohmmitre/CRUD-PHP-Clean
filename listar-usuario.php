<h1>Listar Usuário</h1>

<?php

    $sql = "SELECT * FROM usuarios";

    $res = $mysql->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class='table table-hover table-striped table-bordered'>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>". "ID: ". $row->id ."</td>";
            print "<td>". "Nome: ". $row->nome ."</td>";
            print "<td>". "E-mail: ". $row->email ."</td>";
            print "<td>". "Data de Nascimento: ". $row->data_nasc ."</td>";
            print "<td>
                    <button class='btn btn-success' onclick=\"location.href='?page=editar&id=".$row->id."'\">Editar</button>
                    <button class='btn btn-danger' onclick=\"if(confirm('Deseja realmente excluir este usuário?')){ location.href='?page=salvar&acao=excluir&id=".$row->id."'; }else{false;}\">Excluir</button>
                </td>";
            print "</tr>";
        }
        print "</table>";
    }else{
        "print <p class='alert alert-danger'>Não Encontrados</p>";
    }

?>