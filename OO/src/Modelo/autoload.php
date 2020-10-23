<?php 

//PSR 4


spl_autoload_register(function(string $nomeCompletoDaClase){
	
	$caminhoDoArquivo = str_replace('Alura\\Banco','src',$nomeCompletoDaClase);
	$caminhoDoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoDoArquivo);
	$caminhoDoArquivo .= '.php';
	
	if(file_exists($caminhoDoArquivo)){
		require_once $caminhoDoArquivo;
	}
});
