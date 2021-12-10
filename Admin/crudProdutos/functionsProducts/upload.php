<?php
function uploadFile($arrayFile)
{
    $imagemFile = $arrayFile;
    $tamanhoOriginal = (int) 0;
    $tamanhoKB = (int) 0;
    $extensao = (string) null;
    $tipoArquivo = (string) null;
    $nomeArquivo = (string) null;
    $nomeArquivoCript = (string) null;
    $arquivoTemp = (string) null;
    $imagem = (string) null;        
    
    if ($imagemFile['size'] > 0  && $imagemFile['type'] != "")
    {
        
        $tamanhoOriginal = $imagemFile['size']; 

        
        $tamanhoKB = $tamanhoOriginal/1024;
    
       
        $tipoArquivo = $imagemFile['type'];
  
        
        if($tamanhoKB <= TAMANHO_FILE)
        {   
            
            if(in_array($tipoArquivo, EXTENSOES_PERMITIDAS))
            {
                
                $nomeArquivo = pathinfo($imagemFile['name'], PATHINFO_FILENAME);
                
                $extensao = pathinfo($imagemFile['name'], PATHINFO_EXTENSION);

                $nomeArquivoCript = md5($nomeArquivo.uniqid(time()));

                
                $imagem = $nomeArquivoCript.".".$extensao;

                
                $arquivoTemp = $imagemFile['tmp_name'];

                if(move_uploaded_file($arquivoTemp, SRC.NOME_DIRETORIO_FILE.$imagem))
                    return $imagem;
                else
                    echo('ERRO, Não foi possivel fazer o upload do arquivo');

            }else
                echo('Ocorreu um erro devido ao tipo do arquivo');
            }else
                echo('Ocorreu um erro, devido ao tamanho do arquivo');
    }

}


?>