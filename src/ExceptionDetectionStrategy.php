<?php

declare(strict_types=1);

namespace YucaDoo\GrazeNeighborhoodsDiagnostic;

use Exception;
use Graze\TransientFaultHandler\DetectionStrategy\ExceptionDetectionStrategyInterface;
use Neighborhoods\ThrowableDiagnosticComponent\DiagnosedInterface;
use Neighborhoods\ThrowableDiagnosticComponent\ThrowableDiagnostic;

class ExceptionDetectionStrategy implements ExceptionDetectionStrategyInterface
{
    use ThrowableDiagnostic\Builder\Factory\AwareTrait;

    public function isExceptionTransient(Exception $exception)
    {
        try {
            $this->getThrowableDiagnosticBuilderFactory()
                ->create()
                ->build()
                ->diagnose($exception);
        } catch (DiagnosedInterface $diagnosed) {
            return $diagnosed->isTransient();
        }
        return false;
    }
}
