<?php

namespace Facade\Ignition\Views\Engines;

use Exception;
use Facade\Ignition\Exceptions\ViewException;
use Facade\Ignition\Views\Concerns\CollectsViewExceptions;

class PhpEngine extends \Illuminate\View\Engines\PhpEngine
{
    use CollectsViewExceptions;

    /**
     * Get the evaluated contents of the view.
     *
     * @param string $path
     * @param array $data
     * @return string
     */
    public function get($path, array $data = [])
    {
        $this->collectViewData($path, $data);

        return parent::get($path, $data);
    }

    /**
     * Handle a view exception.
     *
     * @param \Exception $baseException
     * @param int $obLevel
     *
     * @return void
     *
     * @throws \Exception
     */
    protected function handleViewException(Exception $baseException, $obLevel)
    {
        $exception = new ViewException($baseException->getMessage(), 0, 1, $baseException->getFile(), $baseException->getLine(), $baseException);

        $exception->setView($this->getCompiledViewName($baseException->getFile()));
        $exception->setViewData($this->getCompiledViewData($baseException->getFile()));

        parent::handleViewException($exception, $obLevel);
    }
}
