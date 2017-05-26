<h2><?php echo $title; ?></h2>

<?php foreach ($dvd as $dvd_item): ?>

        <h3><?php echo $dvd_item['auteur']; ?></h3>
        <div class="main">
                <?php echo $dvd_item['titre']; ?>
        </div>

<?php endforeach; ?>