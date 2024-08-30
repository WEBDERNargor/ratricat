<?php
namespace App\core;
use Jenssegers\Blade\Blade;

class CustomBlade extends Blade
{
    protected $defaultScript;

    public function __construct($views, $cache, $defaultScript)
    {
        parent::__construct($views, $cache);
        $this->defaultScript = $defaultScript;
    }

    public function render($view, array $data = [],$mergeData = []) :string
    {
        // เรียกใช้ parent render
        $output = parent::render($view, $data,$mergeData);

        // แทรก default script หลังจาก </body>
        return str_replace('</body>', $this->defaultScript . '</body>', $output);
    }
}

