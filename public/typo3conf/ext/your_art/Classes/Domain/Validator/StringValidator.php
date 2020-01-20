<?php

namespace Khas\YourArt\Domain\Validator;

use TYPO3\CMS\Extbase\Validation\Validator\AbstractValidator;

class StringValidator extends AbstractValidator
{
    protected function isValid($value)
    {
        $stringLength = mb_strlen($value, 'utf-8');
        $isValid = true;
        if ($stringLength < $this->options['minimum']) {
            $isValid = false;
        }
        if ($stringLength > $this->options['maximum']) {
            $isValid = false;
        }
        if ($isValid === false){
            $this->addError('The name is short .', 1221563773);
        }

    }
}