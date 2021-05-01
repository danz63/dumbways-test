<?php view('template/header', $data); ?>
<div class="container">
    <div class="row mt-5">
        <div class="col">
            <div class="d-flex justify-content-between">
                <?php foreach ($data['books'] as $book) : ?>
                    <div class="card w-25 p-2 bg-dark text-white">
                        <img src="<?= url('img/' . $book['img']) ?>" class="card-img-top" alt="Book potos">
                        <div class="card-body">
                            <p class="card-text"><?= $book['name']; ?></p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<?php view('template/footer'); ?>