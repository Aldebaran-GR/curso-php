<main>
    <!-- <pre style="font-size: 8px; color: red; overflow: scroll; height: 250px;">
        <//?php var_dump($data); ?>
    </pre> -->

    <section>
        <img 
            src="<?= $poster_url ?>" width="300" alt="Imagen de la película <?= $title?>"
            style="border-radius: 10px; box-shadow: 0 0 16px rgba(96, 5, 243, 0.5);"
        >
    </section>

    <hgroup>
        <h3><?= $data["title"]; ?> <?= $until_message; ?></h3>
        <p>Fecha de estreno: <?= $release_date; ?> </p>
        <p>La siguiente es: <?= $following_production;?> </p>
    </hgroup>
</main>