<?php
include('connect.php');
// video, titulo, categoria, academico, curso, periodo,descricao
$video = filter_input(INPUT_POST, 'video');
$titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING);
$categoria = filter_input(INPUT_POST, 'categoria', FILTER_SANITIZE_STRING);
$academico = filter_input(INPUT_POST, 'academico', FILTER_SANITIZE_STRING);
$curso = filter_input(INPUT_POST, 'curso', FILTER_SANITIZE_STRING);
$periodo = filter_input(INPUT_POST, 'periodo', FILTER_SANITIZE_STRING);
$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);

if(!$video || !$titulo || !$categoria || !$academico || !$curso || !$periodo || !$descricao){
    echo "* Campo de preenchimento obrigatório!";
} else {
    if(str_contains($video, 'iframe')) {
        echo "video$video, $titulo, $categoria, $academico, $curso, $periodo, $curso, $periodo, $descricao";
        $qinsert = mysqli_query($query, "insert into mural (video, titulo, categoria, academico, curso, periodo, descricao) VALUES ('$video', '$titulo', '$categoria', '$academico', '$curso', '$periodo', '$descricao')");
    
        if($qinsert){
            header('Location: ../index.php?msg=Cadastro realizado com sucesso!');
            exit();
        } else {
            header('Location: ../index.php?msg=Não foi possível realizar o cadastro, favor tente mais tarde!');
            exit();
        }
    } else {
        header("Location: ../index.php?msg=O link do vídeo é incompatível, favor copiar o iframe!");
        exit();
    }
}    



