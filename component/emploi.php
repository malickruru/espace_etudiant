<?php function emploi($titre,$description,$entreprise,$date){
?>

<div class="emploi">
        <h1>
            <?php echo $titre ?>
        </h1>
        <p>
            Nom de l'entreprise: 
            <?php echo $entreprise?>
            <?php echo $date?>
        </p>
        <p>
            <?php echo $description ?>
        </p>
</div>

<?php } ?>