 <main>
        <section>
            <img width="200" src="<?= $poster_url ?>" alt="" style="border-radius: 16px">
        </section>
        <hgroup>
            <h2><?= $title;?></h2>
            <p>Fecha de estreno <?= $release_date;?></p>
            <p><?= $until_message; ?></p>
            <p>La siguiente película será: <?= $following_production["title"];?></p>
            <p>Que se estrenará el: <?= $following_production["release_date"];?></p>
        </hgroup>
    </main>