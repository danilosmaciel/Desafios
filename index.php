<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafios</title>
</head>
<body>
    <div>
        <form action="./src/script.php" method="post">
            <select name="desafios" id="desafios">
                <?php for($i = 1; $i <=5 ; $i++){
                    echo '<option value="'.$i.'">Desafio '.$i.'</option>';
                } ?>

            </select>
            <input type="text" name="texto" id="texto" placeholder="insira o texto" required>
            <input type="submit" value="enviar">
        </form>
    </div>
 
<script>
    let desafiosSelect = document.querySelector('#desafios');
    let texto = document.querySelector('#texto');
        desafiosSelect.addEventListener('change', () => {
            texto.value = "";
    });
</script>

</body>

</html>