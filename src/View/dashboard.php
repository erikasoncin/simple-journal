
<?php $this->layout('templates/layout', ['title' => 'Dashboard']) ?>


<?php foreach($articles as $article): ?>


    <div class="list-group">
        <div class="list-group-item">
            <h4 class="list-group-item-heading"><a href="/article/<?= $article['url']?>"><?= $article['Title'] ?></a></h4>
            <p class="list-group-item-text"><?= $article['Subheading'] ?></p>
            <button class="btn btn-success" onclick="window.location.href='/update/<?= $article['url']?>?id=<?= $article['Id'] ?>'">Update</button>
            <button class="btn btn-danger" onclick="window.location.href='/delete/<?= $article['url']?>?id=<?= $article['Id'] ?>'">Delete</button>
        </div>
    </div>


<?php endforeach; ?>
