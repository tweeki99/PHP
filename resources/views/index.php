<?php view('blocks.head', [
    'title' => $title ?? ''
]); ?>

<div class=" container">
<div class="card-deck">
<?php foreach($posts ?? [] as $post){
    view('blocks.post_preview', [
        'post' => $post
    ]);
} ?>
</div>
</div>

<?php view('blocks.footer');