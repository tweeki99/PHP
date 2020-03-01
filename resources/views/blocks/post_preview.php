<div class="card " style="width: 18rem;">

    <h4 style="margin-bottom: 0px" class="mb-2 ml-4"><?= $post['title'] ?? '' ?></h4>

    <div class="mb-2 ml-4">
        <?= mb_strimwidth($post['content'], 0, $max = 100, '...') ?>
    </div>

    <a href="/post?id=<?= $post['id']  ?>" class="btn btn-primary ">Open ...</a>

</div>