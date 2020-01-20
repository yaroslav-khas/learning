<?php

namespace Khas\YourArt\ViewHelpers\Powermail;

use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

class CreateRowTagsViewHelper extends AbstractViewHelper
{
    /**
     * @var bool
     */
    protected $escapeOutput = false;
    /**
     * @var array
     */
    static protected $variableProvider;
    /**
     * @var string
     */
    static protected $lastFieldLayout;
    /**
     * @var bool
     */
    static protected $row = false;


    /**
     * @return void
     */
    public function initializeArguments()
    {
        $this->registerArgument('iteration', 'array', 'Field iteration array', true);
        $this->registerArgument('tagName', 'string', 'Tag to render');
        $this->registerArgument('class', 'string', 'CSS class');
        $this->registerArgument('additionalAttributes', 'array', 'Any attributes to render');
    }

    /**
     * @return string
     */
    public function render()
    {
        return self::renderStatic(
            $this->arguments,
            $this->buildRenderChildrenClosure(),
            $this->renderingContext
        );
    }

    /**
     * @param array $arguments
     * @param \Closure $renderChildrenClosure
     * @param RenderingContextInterface $renderingContext
     * @return string
     */
    public static function renderStatic(
        array $arguments,
        \Closure $renderChildrenClosure,
        RenderingContextInterface $renderingContext
    )
    {
        static::$variableProvider = $renderingContext->getVariableProvider()->getAll();
        $content = '';
        $arguments['columns'] = 2;
        if ((int)$arguments['columns'] > 0) {
            if (static::$variableProvider['field']->getCss() === 'default' && static::$row) {
                static::$row = false;
                $content .= self::getEndingTag($arguments);
                $content .= self::getBeginningTag($arguments);
                $content .= $renderChildrenClosure();
                $content .= self::getEndingTag($arguments);
            } else {
                $content .= self::getBeginningTag($arguments);
                $content .= $renderChildrenClosure();
                $content .= self::getEndingTag($arguments);
            }

        } else {
            $content .= $renderChildrenClosure();
        }
        return $content;
    }

    /**
     * @param array $arguments
     * @return string
     */
    public static function getBeginningTag(array $arguments)
    {

        $content = '';
        if (self::shouldAddBeginningTag($arguments)) {
            $content = '<' . self::getTagName($arguments) . self::getAttributes($arguments) . '>';
        }
        return $content;
    }

    /**
     * @param array $arguments
     * @return string
     */
    public static function getEndingTag(array $arguments)
    {

        $content = '';
        if (self::shouldAddEndingTag($arguments)) {
            $content = '</' . self::getTagName($arguments) . '>';
        }
        return $content;
    }

    /**
     * @param array $arguments
     * @return string
     */
    protected static function getTagName(array $arguments)
    {
        $tagName = 'div';
        if (!empty($arguments['tagName'])) {
            $tagName = $arguments['tagName'];
        }
        return $tagName;
    }

    /**
     * @param array $arguments
     * @return string
     */
    protected static function getAttributes(array $arguments)
    {
        $attributes = '';
        if (!empty($arguments['additionalAttributes'])) {
            foreach ($arguments['additionalAttributes'] as $key => $value) {
                $attributes .= ' ' . $key . '="' . $value . '"';
            }
        }
        if (!empty($arguments['class'])) {
            $attributes .= ' class="' . $arguments['class'] . '"';
        }
        return $attributes;
    }

    /**
     * @param array $arguments
     * @return bool
     */
    protected static function shouldAddBeginningTag(array $arguments)
    {
        if (static::$variableProvider['field']->getCss() === 'default') {
            return true;
        }
        if (static::$variableProvider['field']->getCss() === 'form2cols') {
            if (!static::$row) {
                return true;
            }
        }
    }

    /**
     * @param array $arguments
     * @return bool
     */
    protected static function shouldAddEndingTag(array $arguments)
    {

        if (static::$variableProvider['field']->getCss() === 'default') {
            return true;
        }
        if (static::$variableProvider['field']->getCss() === 'form2cols') {
            if (static::$row) {
                static::$row = false;
                return true;
            } else {
                static::$row = true;
            }
        }
        if ($arguments['iteration']['isLast'] === true) {
            static::$row = false;
            return true;
        }
    }
}