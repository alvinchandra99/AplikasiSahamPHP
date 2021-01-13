<?php for ($i = 0; $i < 6;) : ?>
    <div class="row mb-2">
        <div class="col-md-6">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-primary"><?= $data[$i]['tipe']; ?></strong>
                    <h3 class="mb-0">

                        <a class="text-dark" href="<?= BASEURL; ?>news/detail/<?= $data[$i]['link']; ?>"><?= $data[$i]['judul']; ?></a>
                    </h3>
                    <div class="mb-1 text-muted"><?= $data[$i]['waktu']; ?></div>

                    <a href="<?= BASEURL; ?>news/detail/<?= $data[$i]['link']; ?>">Continue reading</a>
                </div>

                <img class="card-img-right flex-auto d-none d-md-block" src="<?= $data[$i]['poster']; ?>" style="width:200px;height:250px;" alt="Card image cap">
            </div>
        </div>
        <?php $i++; ?>
        <div class="col-md-6">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-success"><?= $data[$i]['tipe']; ?></strong>
                    <h3 class="mb-0">
                        <a class="text-dark" href="<?= BASEURL; ?>news/detail/<?= $data[$i]['link']; ?>"><?= $data[$i]['judul']; ?></a>
                    </h3>
                    <div class="mb-1 text-muted"><?= $data[$i]['waktu']; ?></div>
                    <!-- <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p> -->
                    <a href="<?= BASEURL; ?>news/detail/<?= $data[$i]['link']; ?>">Continue reading</a>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" src="<?= $data[$i]['poster']; ?>" style="width:200px;height:250px;" alt="Card image cap">
            </div>
        </div>
    </div>
    <?php $i++; ?>
<?php endfor; ?>