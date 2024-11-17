<section class="h-[80%] grid grid-cols-4 grid-rows-5">

    <?php
    foreach ($main_cells as $cell) {

        if ($cell["type"] == "empty") {  ?>

            <div class="col-span-1 h-full flex flex-col text-center justify-center items-center content-center"></div>
    <?php
        }

        if ($cell["type"] == "app") {
            $app = new App($cell["name"], $cell["icon"], $cell["iconAlt"], $cell["page"]);
            $app->get_app();
        }
    }
    ?>

</section>