<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel='stylesheet' href='style.css'>
    <title>Gerar PDF</title>
</head>
<body>
    <h1>PDF Gerado com PHP</h1>
    <?php
        // Caminho para a imagem
        $imagePath = 'image.png';
        // Converter a imagem para base64
        $imageData = base64_encode(file_get_contents($imagePath));
        // Criar o src com os dados da imagem em base64
        $imageSrc = 'data:image/png;base64,' . $imageData;
    ?>
    <img src="<?php echo $imageSrc; ?>" alt="Image">
</body>
</html>
