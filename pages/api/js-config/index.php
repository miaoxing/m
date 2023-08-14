<?php

use Miaoxing\Plugin\BasePage;

return new class () extends BasePage {
    protected $controllerAuth = false;

    public function get()
    {
        return suc([
            'data' => [
                // TODO
                'theme' => (object) [],
            ],
        ]);
    }
};
