<?php

namespace Pterodactyl\Http\Controllers\Base;

use Illuminate\View\View;
use Illuminate\View\Factory as ViewFactory;
use Pterodactyl\Http\Controllers\Controller;
use Pterodactyl\Contracts\Repository\ServerRepositoryInterface;
use Pterodactyl\BlueprintFramework\Libraries\ExtensionLibrary\Client\BlueprintClientLibrary;

class IndexController extends Controller
{
    /**
     * IndexController constructor.
     */
    public function __construct(
        protected ServerRepositoryInterface $repository,
        protected ViewFactory $view,
        private BlueprintClientLibrary $blueprint
    ) {
    }

    /**
     * Returns listing of user's servers.
     */
    public function index(): View
    {
        return $this->view->make('templates/base.core', [
          'blueprint' => $this->blueprint,
        ]);
    }
}
