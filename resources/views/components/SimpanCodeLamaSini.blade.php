<?php if ($books == NULL) {?>
    <div class="alert alert-warning
            text-center p-5"
    role="alert">
    <img src="img/empty.png"
        width="100">
    <br>
    There is no book in the database
</div>
<?php } else {?>
<div class="pdf-list d-flex flex-wrap" style="width: 80%;">
    <?php foreach ($books as $book) {?>
        <div class="card m-1 book-card" style="width: 18rem;" data-id="<?=$book['id']?>">
        <img src="uploads/cover/<?=$book['cover']?>"
            class="card-img-top" style="height: 400px; object-fit:fill; border-radius:5px">
        <div class="card-body">
            <h5 class="card-title">
                <?=$book['title']?>
            </h5>
            <p class="card-text">
                <b>By:
                <?php foreach ($authors as $author) {
                    if ($author['id'] == $book['author_id']) {
                        echo $author['name'];
                        break;
                    }

                }?>
                <br></b>

                <b>Category:
                <?php foreach ($categories as $category) {
                    if ($category['id'] == $book['category_id']) {
                        echo $category['name'];
                        break;
                    }
                }?>
                <br></b>

                <b>Type:
                <?php foreach ($types as $type) {
                    if ($type['id'] == $book['type_id']) {
                        echo $type['name'];
                        break;
                    }
                }?>
                <br></b>
                <?=substr($book['description'], 0, 100) . "...";?>
            </p>
            <?php if (isset($_SESSION['user_id'])) {?>
                <a href="detail.php?id=<?=$book['id']?>"
                class="btn btn-success">Detail Book</a>
                <?php }?>
        </div>
    </div>

    <!-- Popup Element -->
    <div class="book-popup" id="popup-<?=$book['id']?>">
        <div class="popup-content">
            {{-- <h4><?=$book['title']?></h4>
            <p><?=$book['description']?></p> --}}
        </div>
    </div>

    <?php }?>
</div>
<?php }?>

<div class="col-lg-2 ms-auto">

    <div class="category" style="width: 200px;">
        <!-- List of types -->
        <div class="list-group" style="width: 200px;">
            <?php if ($types == NULL) {
                // do nothing
            } else {?>
            <a href="#" class="list-group-item list-group-item-action active">
                Type
            </a>
            <?php foreach ($types as $type) {?>

            <a href="type.php?id=<?=$type['id']?>"
                class="list-group-item list-group-item-action">
                <?=$type['name']?></a>
            <?php }}?>
        </div>

        <!-- List of categories -->
        <div class="list-group mt-5" style="width: 200px;">
            <?php if ($categories == NULL) {
                // do nothing
            } else {?>
            <a href="#"
            class="list-group-item list-group-item-action active">Category</a>
            <?php foreach ($categories as $category) {?>

            <a href="category.php?id=<?=$category['id']?>"
                class="list-group-item list-group-item-action">
                <?=$category['name']?></a>
            <?php }}?>
        </div>

        <!-- List of authors -->
        <div class="list-group mt-5" style="width: 200px;">
            <?php if ($authors == NULL) {
                // do nothing
            } else {?>
            <a href="#"
            class="list-group-item list-group-item-action active">Author</a>
            <?php foreach ($authors as $author) {?>

            <a href="author.php?id=<?=$author['id']?>"
                class="list-group-item list-group-item-action">
                <?=$author['name']?></a>
            <?php }}?>
        </div>

    </div>
</div>






<?php if (isset($_SESSION['user_id']) && isset($_SESSION['user_email'])) {?>
    <a class="nav-link text-light rounded fw-bolder"
    href="/logout">Logout</a>
<?php } else {?>
<a class="nav-link text-light rounded fw-bolder"
    href="/signUp">SignUp</a>
<?php }?>

<?php if (isset($_SESSION['user_id']) && isset($_SESSION['user_email'])) {?>
    <a class="nav-link text-light rounded fw-bolder"
    href="/profile">Profile</a>
<?php } else {?>
<a class="nav-link text-light rounded fw-bolder"
    href="/loginCustomer">Login</a>
<?php }?>