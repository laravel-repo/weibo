<?php

namespace Facade\Ignition\Solutions;

use Facade\IgnitionContracts\Solution;

class SuggestCorrectVariableNameSolution implements Solution
{
    /** @var string */
    private $variableName;

    /** @var string */
    private $viewFile;

    public function __construct($variableName = null, $viewFile = null, $suggested = null)
    {
        $this->variableName = $variableName;
        $this->viewFile = $viewFile;
        $this->suggested = $suggested;
    }

    public function getSolutionTitle(): string
    {
        return 'Possible typo $' . $this->variableName;
    }

    public function getDocumentationLinks(): array
    {
        return [];
    }

    public function getSolutionDescription(): string
    {
        $path = str_replace(base_path() . '/', '', $this->viewFile);

        return "Did you mean `$$this->suggested`?";
    }

    public function isRunnable(): bool
    {
        return false;
    }
}
