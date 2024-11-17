<section class="h-[12%] grid grid-cols-4 grid-rows-1 bg-transparent">
    <?php
    foreach ($bottom_cells as $cell) {
        if ($cell["type"] == "app") {
            $app = new App($cell["name"], $cell["icon"], $cell["iconAlt"], $cell["page"]);
            $app->get_app();
        }
    }
    ?>
</section>