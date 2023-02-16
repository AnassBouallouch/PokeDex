<?php $title = 'index'; ?>

<?php include 'resources/templates/header.php'; ?>

<header>
    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <h1 class="d-flex justify-content-center">
                <img src="https://raw.githubusercontent.com/PokeAPI/media/master/logo/pokeapi_256.png" alt="Pokedex" class="img-responsive w-25">
            </h1>
            <button class="btn btn-primary btn-lg d-flex mx-auto mt-3" type="button">Meer info</button>
        </div>
    </div>
</header>

<div class="container">
    <div class="row">
    <?php foreach($pokemons as $pokemon): ?>
        <div class="col-md-3 text-center">
            <div class="card" style="width: 18rem;">
                <img src="<?= $pokemon['picture'] ?>" class="card-img-top w-75 mx-auto" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $pokemon['name'] ?></h5>
                    <div class="card-text">
                        <?php foreach($pokemon['types'] as $type): ?>
                            <span class="badge bg-<?= $type ?>"><?= $type ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    </div>
</div>

<footer class="mt-5">

</footer>

<?php include 'resources/templates/footer.php'; ?>
