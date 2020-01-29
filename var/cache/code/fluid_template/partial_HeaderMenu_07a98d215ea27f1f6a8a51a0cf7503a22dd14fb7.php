<?php

class partial_HeaderMenu_07a98d215ea27f1f6a8a51a0cf7503a22dd14fb7 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) '';
}
public function hasLayout() {
return FALSE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
    2 => 'TYPO3\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
  'v' => 
  array (
    0 => 'FluidTYPO3\\Vhs\\ViewHelpers',
  ),
  'yourart' => 
  array (
    0 => 'Khas\\YourArt\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <div class="container">
            <ul class="navbar-nav d-flex justify-content-between ">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output7 = '';

$output7 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$output62 = '';

$output62 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
$output65 = '';

$output65 .= '
                            <li class="nav-item">
                                ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\LinkViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
$output77 = '';

$output77 .= '
                                    ';
$array78 = array (
);
$output77 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.linktext', $array78)]);

$output77 .= '
                                ';
return $output77;
};
$arguments66 = array();
$arguments66['additionalAttributes'] = NULL;
$arguments66['data'] = NULL;
$arguments66['class'] = NULL;
$arguments66['dir'] = NULL;
$arguments66['id'] = NULL;
$arguments66['lang'] = NULL;
$arguments66['style'] = NULL;
$arguments66['title'] = NULL;
$arguments66['accesskey'] = NULL;
$arguments66['tabindex'] = NULL;
$arguments66['onclick'] = NULL;
$arguments66['showAccessProtected'] = false;
$arguments66['classAccessProtected'] = 'protected';
$arguments66['classAccessGranted'] = 'access-granted';
$arguments66['useShortcutUid'] = NULL;
$arguments66['useShortcutTarget'] = NULL;
$arguments66['useShortcutData'] = false;
$arguments66['target'] = NULL;
$arguments66['rel'] = NULL;
$arguments66['pageUid'] = 0;
$arguments66['additionalParams'] = array (
);
$arguments66['pageType'] = 0;
$arguments66['noCache'] = false;
$arguments66['noCacheHash'] = false;
$arguments66['section'] = '';
$arguments66['linkAccessRestrictedPages'] = NULL;
$arguments66['absolute'] = false;
$arguments66['addQueryString'] = false;
$arguments66['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments66['titleFields'] = 'nav_title,title';
$arguments66['pageTitleAs'] = NULL;
$array68 = array (
);$arguments66['pageUid'] = $renderingContext->getVariableProvider()->getByPath('item.uid', $array68);
$output69 = '';

$output69 .= 'nav-link ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments70 = array();
$arguments70['then'] = NULL;
$arguments70['else'] = NULL;
$arguments70['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array72 = array();
$array73 = array (
);$array72['0'] = $renderingContext->getVariableProvider()->getByPath('key', $array73);
$array72['1'] = '==';
$array74 = array (
);$array72['2'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array74);

$expression75 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments70['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression75(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array72)
					),
					$renderingContext
				);
$arguments70['then'] = 'active';

$output69 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);
$arguments66['class'] = $output69;
$array76 = array (
);$arguments66['title'] = $renderingContext->getVariableProvider()->getByPath('item.linktext', $array76);

$output65 .= FluidTYPO3\Vhs\ViewHelpers\Page\LinkViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output65 .= '
                            </li>
                            ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
$output82 = '';

$output82 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
$output86 = '';

$output86 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
$output98 = '';
$array99 = array (
);
$output98 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('subItem.linktext', $array99)]);

$output98 .= '
                                    ';
return $output98;
};
$arguments87 = array();
$arguments87['additionalAttributes'] = NULL;
$arguments87['data'] = NULL;
$arguments87['class'] = NULL;
$arguments87['dir'] = NULL;
$arguments87['id'] = NULL;
$arguments87['lang'] = NULL;
$arguments87['style'] = NULL;
$arguments87['title'] = NULL;
$arguments87['accesskey'] = NULL;
$arguments87['tabindex'] = NULL;
$arguments87['onclick'] = NULL;
$arguments87['target'] = NULL;
$arguments87['rel'] = NULL;
$arguments87['pageUid'] = NULL;
$arguments87['pageType'] = NULL;
$arguments87['noCache'] = NULL;
$arguments87['noCacheHash'] = NULL;
$arguments87['section'] = NULL;
$arguments87['linkAccessRestrictedPages'] = NULL;
$arguments87['additionalParams'] = NULL;
$arguments87['absolute'] = NULL;
$arguments87['addQueryString'] = NULL;
$arguments87['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments87['addQueryStringMethod'] = NULL;
$output89 = '';

$output89 .= 'nav-link ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments90 = array();
$arguments90['then'] = NULL;
$arguments90['else'] = NULL;
$arguments90['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array92 = array();
$array93 = array (
);$array92['0'] = $renderingContext->getVariableProvider()->getByPath('key', $array93);
$array92['1'] = '==';
$array94 = array (
);$array92['2'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array94);

$expression95 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments90['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression95(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array92)
					),
					$renderingContext
				);
$arguments90['then'] = 'active';

$output89 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);
$arguments87['class'] = $output89;
$array96 = array (
);$arguments87['pageUid'] = $renderingContext->getVariableProvider()->getByPath('subItem.uid', $array96);
$array97 = array (
);$arguments87['title'] = $renderingContext->getVariableProvider()->getByPath('subItem.linktext', $array97);

$output86 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext);

$output86 .= '
                                ';
return $output86;
};
$arguments83 = array();
$arguments83['each'] = NULL;
$arguments83['as'] = NULL;
$arguments83['key'] = NULL;
$arguments83['reverse'] = false;
$arguments83['iteration'] = NULL;
$array85 = array (
);$arguments83['each'] = $renderingContext->getVariableProvider()->getByPath('menu', $array85);
$arguments83['as'] = 'subItem';

$output82 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext);

$output82 .= '
                            ';
return $output82;
};
$arguments79 = array();
$arguments79['additionalAttributes'] = NULL;
$arguments79['data'] = NULL;
$arguments79['class'] = NULL;
$arguments79['dir'] = NULL;
$arguments79['id'] = NULL;
$arguments79['lang'] = NULL;
$arguments79['style'] = NULL;
$arguments79['title'] = NULL;
$arguments79['accesskey'] = NULL;
$arguments79['tabindex'] = NULL;
$arguments79['onclick'] = NULL;
$arguments79['forceClosingTag'] = false;
$arguments79['hideIfEmpty'] = false;
$arguments79['contenteditable'] = NULL;
$arguments79['contextmenu'] = NULL;
$arguments79['draggable'] = NULL;
$arguments79['dropzone'] = NULL;
$arguments79['translate'] = NULL;
$arguments79['spellcheck'] = NULL;
$arguments79['hidden'] = NULL;
$arguments79['showAccessProtected'] = false;
$arguments79['classAccessProtected'] = 'protected';
$arguments79['classAccessGranted'] = 'access-granted';
$arguments79['useShortcutUid'] = NULL;
$arguments79['useShortcutTarget'] = NULL;
$arguments79['useShortcutData'] = false;
$arguments79['tagName'] = 'ul';
$arguments79['tagNameChildren'] = 'li';
$arguments79['entryLevel'] = 0;
$arguments79['levels'] = 1;
$arguments79['expandAll'] = false;
$arguments79['classFirst'] = '';
$arguments79['classLast'] = '';
$arguments79['classActive'] = 'active';
$arguments79['classCurrent'] = 'current';
$arguments79['classHasSubpages'] = 'sub';
$arguments79['substElementUid'] = false;
$arguments79['showHiddenInMenu'] = false;
$arguments79['showCurrent'] = true;
$arguments79['linkCurrent'] = true;
$arguments79['linkActive'] = true;
$arguments79['titleFields'] = 'nav_title,title';
$arguments79['includeAnchorTitle'] = true;
$arguments79['includeSpacers'] = false;
$arguments79['deferred'] = false;
$arguments79['as'] = 'menu';
$arguments79['rootLineAs'] = 'rootLine';
$arguments79['excludePages'] = '';
$arguments79['forceAbsoluteUrl'] = false;
$arguments79['doktypes'] = '';
$arguments79['divider'] = NULL;
$arguments79['pageUid'] = NULL;
$array81 = array (
);$arguments79['pageUid'] = $renderingContext->getVariableProvider()->getByPath('item.uid', $array81);

$output65 .= FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);

$output65 .= '
                        ';
return $output65;
};
$arguments63 = array();

$output62 .= '';

$output62 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
$output102 = '';

$output102 .= '
                            <li class="nav-item">
                                ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\LinkViewHelper
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
$output114 = '';

$output114 .= '
                                    ';
$array115 = array (
);
$output114 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.linktext', $array115)]);

$output114 .= '
                                ';
return $output114;
};
$arguments103 = array();
$arguments103['additionalAttributes'] = NULL;
$arguments103['data'] = NULL;
$arguments103['class'] = NULL;
$arguments103['dir'] = NULL;
$arguments103['id'] = NULL;
$arguments103['lang'] = NULL;
$arguments103['style'] = NULL;
$arguments103['title'] = NULL;
$arguments103['accesskey'] = NULL;
$arguments103['tabindex'] = NULL;
$arguments103['onclick'] = NULL;
$arguments103['showAccessProtected'] = false;
$arguments103['classAccessProtected'] = 'protected';
$arguments103['classAccessGranted'] = 'access-granted';
$arguments103['useShortcutUid'] = NULL;
$arguments103['useShortcutTarget'] = NULL;
$arguments103['useShortcutData'] = false;
$arguments103['target'] = NULL;
$arguments103['rel'] = NULL;
$arguments103['pageUid'] = 0;
$arguments103['additionalParams'] = array (
);
$arguments103['pageType'] = 0;
$arguments103['noCache'] = false;
$arguments103['noCacheHash'] = false;
$arguments103['section'] = '';
$arguments103['linkAccessRestrictedPages'] = NULL;
$arguments103['absolute'] = false;
$arguments103['addQueryString'] = false;
$arguments103['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments103['titleFields'] = 'nav_title,title';
$arguments103['pageTitleAs'] = NULL;
$array105 = array (
);$arguments103['pageUid'] = $renderingContext->getVariableProvider()->getByPath('item.uid', $array105);
$output106 = '';

$output106 .= 'nav-link ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments107 = array();
$arguments107['then'] = NULL;
$arguments107['else'] = NULL;
$arguments107['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array109 = array();
$array110 = array (
);$array109['0'] = $renderingContext->getVariableProvider()->getByPath('key', $array110);
$array109['1'] = '==';
$array111 = array (
);$array109['2'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array111);

$expression112 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments107['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression112(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array109)
					),
					$renderingContext
				);
$arguments107['then'] = 'active';

$output106 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);
$arguments103['class'] = $output106;
$array113 = array (
);$arguments103['title'] = $renderingContext->getVariableProvider()->getByPath('item.linktext', $array113);

$output102 .= FluidTYPO3\Vhs\ViewHelpers\Page\LinkViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext);

$output102 .= '
                            </li>
                        ';
return $output102;
};
$arguments100 = array();
$arguments100['if'] = NULL;

$output62 .= '';

$output62 .= '
                    ';
return $output62;
};
$arguments8 = array();
$arguments8['then'] = NULL;
$arguments8['else'] = NULL;
$arguments8['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array59 = array();
$array60 = array (
);$array59['0'] = $renderingContext->getVariableProvider()->getByPath('item.hasSubPages', $array60);

$expression61 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments8['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression61(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array59)
					),
					$renderingContext
				);
$arguments8['__thenClosure'] = function() use ($renderingContext, $self) {
$output10 = '';

$output10 .= '
                            <li class="nav-item">
                                ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\LinkViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$output22 = '';

$output22 .= '
                                    ';
$array23 = array (
);
$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.linktext', $array23)]);

$output22 .= '
                                ';
return $output22;
};
$arguments11 = array();
$arguments11['additionalAttributes'] = NULL;
$arguments11['data'] = NULL;
$arguments11['class'] = NULL;
$arguments11['dir'] = NULL;
$arguments11['id'] = NULL;
$arguments11['lang'] = NULL;
$arguments11['style'] = NULL;
$arguments11['title'] = NULL;
$arguments11['accesskey'] = NULL;
$arguments11['tabindex'] = NULL;
$arguments11['onclick'] = NULL;
$arguments11['showAccessProtected'] = false;
$arguments11['classAccessProtected'] = 'protected';
$arguments11['classAccessGranted'] = 'access-granted';
$arguments11['useShortcutUid'] = NULL;
$arguments11['useShortcutTarget'] = NULL;
$arguments11['useShortcutData'] = false;
$arguments11['target'] = NULL;
$arguments11['rel'] = NULL;
$arguments11['pageUid'] = 0;
$arguments11['additionalParams'] = array (
);
$arguments11['pageType'] = 0;
$arguments11['noCache'] = false;
$arguments11['noCacheHash'] = false;
$arguments11['section'] = '';
$arguments11['linkAccessRestrictedPages'] = NULL;
$arguments11['absolute'] = false;
$arguments11['addQueryString'] = false;
$arguments11['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments11['titleFields'] = 'nav_title,title';
$arguments11['pageTitleAs'] = NULL;
$array13 = array (
);$arguments11['pageUid'] = $renderingContext->getVariableProvider()->getByPath('item.uid', $array13);
$output14 = '';

$output14 .= 'nav-link ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments15 = array();
$arguments15['then'] = NULL;
$arguments15['else'] = NULL;
$arguments15['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array17 = array();
$array18 = array (
);$array17['0'] = $renderingContext->getVariableProvider()->getByPath('key', $array18);
$array17['1'] = '==';
$array19 = array (
);$array17['2'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array19);

$expression20 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments15['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression20(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array17)
					),
					$renderingContext
				);
$arguments15['then'] = 'active';

$output14 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);
$arguments11['class'] = $output14;
$array21 = array (
);$arguments11['title'] = $renderingContext->getVariableProvider()->getByPath('item.linktext', $array21);

$output10 .= FluidTYPO3\Vhs\ViewHelpers\Page\LinkViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output10 .= '
                            </li>
                            ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$output27 = '';

$output27 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$output31 = '';

$output31 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
$output43 = '';
$array44 = array (
);
$output43 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('subItem.linktext', $array44)]);

$output43 .= '
                                    ';
return $output43;
};
$arguments32 = array();
$arguments32['additionalAttributes'] = NULL;
$arguments32['data'] = NULL;
$arguments32['class'] = NULL;
$arguments32['dir'] = NULL;
$arguments32['id'] = NULL;
$arguments32['lang'] = NULL;
$arguments32['style'] = NULL;
$arguments32['title'] = NULL;
$arguments32['accesskey'] = NULL;
$arguments32['tabindex'] = NULL;
$arguments32['onclick'] = NULL;
$arguments32['target'] = NULL;
$arguments32['rel'] = NULL;
$arguments32['pageUid'] = NULL;
$arguments32['pageType'] = NULL;
$arguments32['noCache'] = NULL;
$arguments32['noCacheHash'] = NULL;
$arguments32['section'] = NULL;
$arguments32['linkAccessRestrictedPages'] = NULL;
$arguments32['additionalParams'] = NULL;
$arguments32['absolute'] = NULL;
$arguments32['addQueryString'] = NULL;
$arguments32['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments32['addQueryStringMethod'] = NULL;
$output34 = '';

$output34 .= 'nav-link ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments35 = array();
$arguments35['then'] = NULL;
$arguments35['else'] = NULL;
$arguments35['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array37 = array();
$array38 = array (
);$array37['0'] = $renderingContext->getVariableProvider()->getByPath('key', $array38);
$array37['1'] = '==';
$array39 = array (
);$array37['2'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array39);

$expression40 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments35['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression40(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array37)
					),
					$renderingContext
				);
$arguments35['then'] = 'active';

$output34 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);
$arguments32['class'] = $output34;
$array41 = array (
);$arguments32['pageUid'] = $renderingContext->getVariableProvider()->getByPath('subItem.uid', $array41);
$array42 = array (
);$arguments32['title'] = $renderingContext->getVariableProvider()->getByPath('subItem.linktext', $array42);

$output31 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output31 .= '
                                ';
return $output31;
};
$arguments28 = array();
$arguments28['each'] = NULL;
$arguments28['as'] = NULL;
$arguments28['key'] = NULL;
$arguments28['reverse'] = false;
$arguments28['iteration'] = NULL;
$array30 = array (
);$arguments28['each'] = $renderingContext->getVariableProvider()->getByPath('menu', $array30);
$arguments28['as'] = 'subItem';

$output27 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output27 .= '
                            ';
return $output27;
};
$arguments24 = array();
$arguments24['additionalAttributes'] = NULL;
$arguments24['data'] = NULL;
$arguments24['class'] = NULL;
$arguments24['dir'] = NULL;
$arguments24['id'] = NULL;
$arguments24['lang'] = NULL;
$arguments24['style'] = NULL;
$arguments24['title'] = NULL;
$arguments24['accesskey'] = NULL;
$arguments24['tabindex'] = NULL;
$arguments24['onclick'] = NULL;
$arguments24['forceClosingTag'] = false;
$arguments24['hideIfEmpty'] = false;
$arguments24['contenteditable'] = NULL;
$arguments24['contextmenu'] = NULL;
$arguments24['draggable'] = NULL;
$arguments24['dropzone'] = NULL;
$arguments24['translate'] = NULL;
$arguments24['spellcheck'] = NULL;
$arguments24['hidden'] = NULL;
$arguments24['showAccessProtected'] = false;
$arguments24['classAccessProtected'] = 'protected';
$arguments24['classAccessGranted'] = 'access-granted';
$arguments24['useShortcutUid'] = NULL;
$arguments24['useShortcutTarget'] = NULL;
$arguments24['useShortcutData'] = false;
$arguments24['tagName'] = 'ul';
$arguments24['tagNameChildren'] = 'li';
$arguments24['entryLevel'] = 0;
$arguments24['levels'] = 1;
$arguments24['expandAll'] = false;
$arguments24['classFirst'] = '';
$arguments24['classLast'] = '';
$arguments24['classActive'] = 'active';
$arguments24['classCurrent'] = 'current';
$arguments24['classHasSubpages'] = 'sub';
$arguments24['substElementUid'] = false;
$arguments24['showHiddenInMenu'] = false;
$arguments24['showCurrent'] = true;
$arguments24['linkCurrent'] = true;
$arguments24['linkActive'] = true;
$arguments24['titleFields'] = 'nav_title,title';
$arguments24['includeAnchorTitle'] = true;
$arguments24['includeSpacers'] = false;
$arguments24['deferred'] = false;
$arguments24['as'] = 'menu';
$arguments24['rootLineAs'] = 'rootLine';
$arguments24['excludePages'] = '';
$arguments24['forceAbsoluteUrl'] = false;
$arguments24['doktypes'] = '';
$arguments24['divider'] = NULL;
$arguments24['pageUid'] = NULL;
$array26 = array (
);$arguments24['pageUid'] = $renderingContext->getVariableProvider()->getByPath('item.uid', $array26);

$output10 .= FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output10 .= '
                        ';
return $output10;
};
$arguments8['__elseClosures'][] = function() use ($renderingContext, $self) {
$output45 = '';

$output45 .= '
                            <li class="nav-item">
                                ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\LinkViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
$output57 = '';

$output57 .= '
                                    ';
$array58 = array (
);
$output57 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.linktext', $array58)]);

$output57 .= '
                                ';
return $output57;
};
$arguments46 = array();
$arguments46['additionalAttributes'] = NULL;
$arguments46['data'] = NULL;
$arguments46['class'] = NULL;
$arguments46['dir'] = NULL;
$arguments46['id'] = NULL;
$arguments46['lang'] = NULL;
$arguments46['style'] = NULL;
$arguments46['title'] = NULL;
$arguments46['accesskey'] = NULL;
$arguments46['tabindex'] = NULL;
$arguments46['onclick'] = NULL;
$arguments46['showAccessProtected'] = false;
$arguments46['classAccessProtected'] = 'protected';
$arguments46['classAccessGranted'] = 'access-granted';
$arguments46['useShortcutUid'] = NULL;
$arguments46['useShortcutTarget'] = NULL;
$arguments46['useShortcutData'] = false;
$arguments46['target'] = NULL;
$arguments46['rel'] = NULL;
$arguments46['pageUid'] = 0;
$arguments46['additionalParams'] = array (
);
$arguments46['pageType'] = 0;
$arguments46['noCache'] = false;
$arguments46['noCacheHash'] = false;
$arguments46['section'] = '';
$arguments46['linkAccessRestrictedPages'] = NULL;
$arguments46['absolute'] = false;
$arguments46['addQueryString'] = false;
$arguments46['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments46['titleFields'] = 'nav_title,title';
$arguments46['pageTitleAs'] = NULL;
$array48 = array (
);$arguments46['pageUid'] = $renderingContext->getVariableProvider()->getByPath('item.uid', $array48);
$output49 = '';

$output49 .= 'nav-link ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments50 = array();
$arguments50['then'] = NULL;
$arguments50['else'] = NULL;
$arguments50['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array52 = array();
$array53 = array (
);$array52['0'] = $renderingContext->getVariableProvider()->getByPath('key', $array53);
$array52['1'] = '==';
$array54 = array (
);$array52['2'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array54);

$expression55 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments50['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression55(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array52)
					),
					$renderingContext
				);
$arguments50['then'] = 'active';

$output49 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext);
$arguments46['class'] = $output49;
$array56 = array (
);$arguments46['title'] = $renderingContext->getVariableProvider()->getByPath('item.linktext', $array56);

$output45 .= FluidTYPO3\Vhs\ViewHelpers\Page\LinkViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);

$output45 .= '
                            </li>
                        ';
return $output45;
};

$output7 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output7 .= '
                ';
return $output7;
};
$arguments4 = array();
$arguments4['each'] = NULL;
$arguments4['as'] = NULL;
$arguments4['key'] = NULL;
$arguments4['reverse'] = false;
$arguments4['iteration'] = NULL;
$array6 = array (
);$arguments4['each'] = $renderingContext->getVariableProvider()->getByPath('menu', $array6);
$arguments4['as'] = 'item';
$arguments4['iteration'] = 'iter';
$arguments4['key'] = 'key';

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
            </ul>
        </div>
    </nav>
';
return $output3;
};
$arguments1 = array();
$arguments1['additionalAttributes'] = NULL;
$arguments1['data'] = NULL;
$arguments1['class'] = NULL;
$arguments1['dir'] = NULL;
$arguments1['id'] = NULL;
$arguments1['lang'] = NULL;
$arguments1['style'] = NULL;
$arguments1['title'] = NULL;
$arguments1['accesskey'] = NULL;
$arguments1['tabindex'] = NULL;
$arguments1['onclick'] = NULL;
$arguments1['forceClosingTag'] = false;
$arguments1['hideIfEmpty'] = false;
$arguments1['contenteditable'] = NULL;
$arguments1['contextmenu'] = NULL;
$arguments1['draggable'] = NULL;
$arguments1['dropzone'] = NULL;
$arguments1['translate'] = NULL;
$arguments1['spellcheck'] = NULL;
$arguments1['hidden'] = NULL;
$arguments1['showAccessProtected'] = false;
$arguments1['classAccessProtected'] = 'protected';
$arguments1['classAccessGranted'] = 'access-granted';
$arguments1['useShortcutUid'] = NULL;
$arguments1['useShortcutTarget'] = NULL;
$arguments1['useShortcutData'] = false;
$arguments1['tagName'] = 'ul';
$arguments1['tagNameChildren'] = 'li';
$arguments1['entryLevel'] = 0;
$arguments1['levels'] = 1;
$arguments1['expandAll'] = false;
$arguments1['classFirst'] = '';
$arguments1['classLast'] = '';
$arguments1['classActive'] = 'active';
$arguments1['classCurrent'] = 'current';
$arguments1['classHasSubpages'] = 'sub';
$arguments1['substElementUid'] = false;
$arguments1['showHiddenInMenu'] = false;
$arguments1['showCurrent'] = true;
$arguments1['linkCurrent'] = true;
$arguments1['linkActive'] = true;
$arguments1['titleFields'] = 'nav_title,title';
$arguments1['includeAnchorTitle'] = true;
$arguments1['includeSpacers'] = false;
$arguments1['deferred'] = false;
$arguments1['as'] = 'menu';
$arguments1['rootLineAs'] = 'rootLine';
$arguments1['excludePages'] = '';
$arguments1['forceAbsoluteUrl'] = false;
$arguments1['doktypes'] = '';
$arguments1['divider'] = NULL;
$arguments1['pageUid'] = NULL;

$output0 .= FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';

return $output0;
}


}
#