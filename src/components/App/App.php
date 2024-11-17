<?php

class App
{
    public $name;
    public $icon;
    public $iconAlt;
    public $page;

    function __construct($name, $icon, $iconAlt, $page)
    {
        $this->name = $name;
        $this->icon = $icon;
        $this->iconAlt = $iconAlt;
        $this->page = $page;
    }

    function get_appIcon()
    {
        return $this->icon;
    }

    function get_pageUrl()
    {
        return $this->page;
    }

    function get_app()
    {
?>
        <a href="<?php echo $this->page ?>" class="cursor-default">
            <div class="col-span-1 h-full flex flex-col text-center justify-center items-center content-center p-2">

                <img class="rounded-2xl cursor-pointer transition-all hover:scale-110 hover:-translate-y-2" src="<?php echo $this->icon ?>" alt="<?php echo $this->iconAlt ?>" srcset="">
                <h1 class="text-xs text-white"><?php echo $this->name ?></h1>

            </div>
        </a>
<?php
    }
}
