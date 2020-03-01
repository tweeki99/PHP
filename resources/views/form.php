<?php view('blocks.head', [
    'title' => $title ?? ''
]); ?>

<h1>Create new post</h1>

<form action="/<?= $action ?? 'create' ?>" method="post">

    <?php if($post['id'] ?? false): ?>
        <input type="hidden" name="id" value="<?= $post['id'] ?>">
    <?php endif ?>

    <div>
        <input name="title" type="text" placeholder="Zagolovok..." value="<?= $post['title'] ?? '' ?>">

    </div>
    <div>
        <textarea name="content" placeholder="Text..."><?= $post['content'] ?? '' ?></textarea>
    </div>

    <button type="submit">Save</button>
</form>

<?php view('blocks.footer') ?>