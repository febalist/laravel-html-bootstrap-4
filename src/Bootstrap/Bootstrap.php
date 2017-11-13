<?php

namespace MarvinLabs\Html\Bootstrap;

use MarvinLabs\Html\Bootstrap\Traits\BuildsForms;
use MarvinLabs\Html\Bootstrap\Traits\BuildsSimpleComponents;
use MarvinLabs\Html\Bootstrap\Traits\BuildsStylesAndScripts;
use Spatie\Html\Html;

/**
 * Class Bootstrap
 * @package MarvinLabs\Html\Bootstrap
 *
 *          Extend Spatie's HTML builder in order to automatically inject what Bootstrap likes and some other libraries
 *          too
 */
class Bootstrap
{

    use BuildsStylesAndScripts, BuildsForms, BuildsSimpleComponents;

    /** @var \Spatie\Html\Html */
    protected $html;

    /**
     * Bootstrap constructor.
     *
     * @param \Spatie\Html\Html $html
     */
    public function __construct(Html $html)
    {
        $this->html = $html;
    }

}