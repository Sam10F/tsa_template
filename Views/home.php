<section id="home-section">
    <h2>Titulo 1</h2>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
        ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
        dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
        deserunt mollit anim id est laborum.
    </p>

    
    
    <ul class="list-of-products">
    <? foreach ($this->data['products'] as  $product_info){ ?>
        <li>
            <a target="_blank" href="<?= $product_info['url'] ?>">
                <img class="product_img" src="<?= $product_info['image_url'] ?>">
                <h3><?= $product_info['name'] ?></h3>
                <p><?= $product_info['description'] ?></p>
            </a>
        </li>
    <? } ?>
    </ul>
</section>
