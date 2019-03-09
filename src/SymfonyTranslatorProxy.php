<?php declare(strict_types=1);
/**
 * Validation.
 *
 * @copyright Copyright (c) 2016 Starweb AB
 * @license   BSD 3-Clause
 */

namespace Starlit\Validation;

use Symfony\Contracts\Translation\TranslatorInterface as SymfonyTranslatorInterface;

class SymfonyTranslatorProxy implements ValidatorTranslatorInterface
{
    /**
     * @var SymfonyTranslatorInterface
     */
    protected $symfonyTranslator;

    /**
     * @param SymfonyTranslatorInterface $symfonyTranslator
     */
    public function __construct(SymfonyTranslatorInterface  $symfonyTranslator)
    {
        $this->symfonyTranslator = $symfonyTranslator;
    }
    
    /**
     * {@inheritdoc}
     */
    public function trans(string $id, array $parameters = []): string
    {
        return $this->symfonyTranslator->trans($id, $parameters);
    }
}
