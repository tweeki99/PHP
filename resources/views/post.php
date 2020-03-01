<?php view('blocks.head', [
    'title' => $post['title'] ?? ''
]); ?>

<div class="container d-flex justify-content-around">
<div class="card" style="width: 18rem;">
<h1 class="mb-2 ml-4"><?= $post['title'] ?? '' ?></h1>
<p class="mb-2 ml-4"><?= $post['content'] ?? '' ?></p>
<p style="color: gray" class="mb-2 ml-4"><?= $post['created_at'] ?? '' ?></p><div>
        <div class="d-flex justify-content-between">
<a href="/update?id=<?= $post['id'] ?? 0 ?> " class="btn btn-primary ml-4 mb-2">Update</a>
<a href="/delete?id=<?= $post['id'] ?? 0 ?> " class="btn btn-primary mr-4 mb-2">Delete</a>
        </div>
</div>
</div>

<?php view('blocks.footer');?>