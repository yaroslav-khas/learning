<?php

class ViewHelpers_Widget_Paginate_action_index_4087fda03b78efdc5fdd60d5aa8a4be7b4254ed8 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
  'v' => 
  array (
    0 => 'FluidTYPO3\\Vhs\\ViewHelpers',
  ),
  'n' => 
  array (
    0 => 'GeorgRinger\\News\\ViewHelpers',
  ),
));
}

/**
 * section paginator
 */
public function section_31b8d545b1939b065e8931304bab52b99d8b4567(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output12 = '';

$output12 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$output18 = '';

$output18 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
$output44 = '';

$output44 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
$output47 = '';

$output47 .= '
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\HeaderDataViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
$output50 = '';

$output50 .= '<link rel="prev" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments53 = array();
$arguments53['useCacheHash'] = false;
$arguments53['addQueryStringMethod'] = NULL;
$arguments53['action'] = NULL;
$arguments53['arguments'] = array (
);
$arguments53['section'] = '';
$arguments53['format'] = '';
$arguments53['ajax'] = false;
// Rendering Boolean node
// Rendering Array
$array55 = array();
$array55['0'] = 1;

$expression56 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments53['useCacheHash'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression56(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array55)
					),
					$renderingContext
				);
// Rendering Array
$array57 = array();
$array58 = array (
);$array57['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.previousPage', $array58);
$arguments53['arguments'] = $array57;
return TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);
};
$arguments51 = array();
$arguments51['value'] = NULL;
$arguments51['keepQuotes'] = false;
$arguments51['encoding'] = NULL;
$arguments51['doubleEncode'] = true;
$renderChildrenClosure52 = ($arguments51['value'] !== null) ? function() use ($arguments51) { return $arguments51['value']; } : $renderChildrenClosure52;
$output50 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output50 .= '" />';
return $output50;
};
$arguments48 = array();

$output47 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\HeaderDataViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext)]);

$output47 .= '
					';
return $output47;
};
$arguments45 = array();

$output44 .= '';

$output44 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
$output61 = '';

$output61 .= '
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\HeaderDataViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
$output64 = '';

$output64 .= '<link rel="prev" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments67 = array();
$arguments67['useCacheHash'] = false;
$arguments67['addQueryStringMethod'] = NULL;
$arguments67['action'] = NULL;
$arguments67['arguments'] = array (
);
$arguments67['section'] = '';
$arguments67['format'] = '';
$arguments67['ajax'] = false;
return TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);
};
$arguments65 = array();
$arguments65['value'] = NULL;
$arguments65['keepQuotes'] = false;
$arguments65['encoding'] = NULL;
$arguments65['doubleEncode'] = true;
$renderChildrenClosure66 = ($arguments65['value'] !== null) ? function() use ($arguments65) { return $arguments65['value']; } : $renderChildrenClosure66;
$output64 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext);

$output64 .= '" />';
return $output64;
};
$arguments62 = array();

$output61 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\HeaderDataViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext)]);

$output61 .= '
					';
return $output61;
};
$arguments59 = array();
$arguments59['if'] = NULL;

$output44 .= '';

$output44 .= '
				';
return $output44;
};
$arguments19 = array();
$arguments19['then'] = NULL;
$arguments19['else'] = NULL;
$arguments19['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array41 = array();
$array42 = array (
);$array41['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.previousPage', $array42);
$array41['1'] = ' > 1';

$expression43 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments19['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression43(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array41)
					),
					$renderingContext
				);
$arguments19['__thenClosure'] = function() use ($renderingContext, $self) {
$output21 = '';

$output21 .= '
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\HeaderDataViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
$output24 = '';

$output24 .= '<link rel="prev" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments27 = array();
$arguments27['useCacheHash'] = false;
$arguments27['addQueryStringMethod'] = NULL;
$arguments27['action'] = NULL;
$arguments27['arguments'] = array (
);
$arguments27['section'] = '';
$arguments27['format'] = '';
$arguments27['ajax'] = false;
// Rendering Boolean node
// Rendering Array
$array29 = array();
$array29['0'] = 1;

$expression30 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments27['useCacheHash'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression30(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array29)
					),
					$renderingContext
				);
// Rendering Array
$array31 = array();
$array32 = array (
);$array31['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.previousPage', $array32);
$arguments27['arguments'] = $array31;
return TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);
};
$arguments25 = array();
$arguments25['value'] = NULL;
$arguments25['keepQuotes'] = false;
$arguments25['encoding'] = NULL;
$arguments25['doubleEncode'] = true;
$renderChildrenClosure26 = ($arguments25['value'] !== null) ? function() use ($arguments25) { return $arguments25['value']; } : $renderChildrenClosure26;
$output24 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output24 .= '" />';
return $output24;
};
$arguments22 = array();

$output21 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\HeaderDataViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext)]);

$output21 .= '
					';
return $output21;
};
$arguments19['__elseClosures'][] = function() use ($renderingContext, $self) {
$output33 = '';

$output33 .= '
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\HeaderDataViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
$output36 = '';

$output36 .= '<link rel="prev" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments39 = array();
$arguments39['useCacheHash'] = false;
$arguments39['addQueryStringMethod'] = NULL;
$arguments39['action'] = NULL;
$arguments39['arguments'] = array (
);
$arguments39['section'] = '';
$arguments39['format'] = '';
$arguments39['ajax'] = false;
return TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);
};
$arguments37 = array();
$arguments37['value'] = NULL;
$arguments37['keepQuotes'] = false;
$arguments37['encoding'] = NULL;
$arguments37['doubleEncode'] = true;
$renderChildrenClosure38 = ($arguments37['value'] !== null) ? function() use ($arguments37) { return $arguments37['value']; } : $renderChildrenClosure38;
$output36 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output36 .= '" />';
return $output36;
};
$arguments34 = array();

$output33 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\HeaderDataViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext)]);

$output33 .= '
					';
return $output33;
};

$output18 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output18 .= '
			';
return $output18;
};
$arguments13 = array();
$arguments13['then'] = NULL;
$arguments13['else'] = NULL;
$arguments13['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array15 = array();
$array16 = array (
);$array15['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.previousPage', $array16);

$expression17 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments13['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression17(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array15)
					),
					$renderingContext
				);
$arguments13['__thenClosure'] = $renderChildrenClosure14;

$output12 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output12 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
$output74 = '';

$output74 .= '
				';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\HeaderDataViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
$output77 = '';

$output77 .= '<link rel="next" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments80 = array();
$arguments80['useCacheHash'] = false;
$arguments80['addQueryStringMethod'] = NULL;
$arguments80['action'] = NULL;
$arguments80['arguments'] = array (
);
$arguments80['section'] = '';
$arguments80['format'] = '';
$arguments80['ajax'] = false;
// Rendering Boolean node
// Rendering Array
$array82 = array();
$array82['0'] = 1;

$expression83 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments80['useCacheHash'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression83(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array82)
					),
					$renderingContext
				);
// Rendering Array
$array84 = array();
$array85 = array (
);$array84['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.nextPage', $array85);
$arguments80['arguments'] = $array84;
return TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext);
};
$arguments78 = array();
$arguments78['value'] = NULL;
$arguments78['keepQuotes'] = false;
$arguments78['encoding'] = NULL;
$arguments78['doubleEncode'] = true;
$renderChildrenClosure79 = ($arguments78['value'] !== null) ? function() use ($arguments78) { return $arguments78['value']; } : $renderChildrenClosure79;
$output77 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext);

$output77 .= '" />';
return $output77;
};
$arguments75 = array();

$output74 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\HeaderDataViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext)]);

$output74 .= '
			';
return $output74;
};
$arguments69 = array();
$arguments69['then'] = NULL;
$arguments69['else'] = NULL;
$arguments69['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array71 = array();
$array72 = array (
);$array71['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.nextPage', $array72);

$expression73 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments69['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression73(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array71)
					),
					$renderingContext
				);
$arguments69['__thenClosure'] = $renderChildrenClosure70;

$output12 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);

$output12 .= '
		';
return $output12;
};
$arguments7 = array();
$arguments7['then'] = NULL;
$arguments7['else'] = NULL;
$arguments7['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array9 = array();
$array10 = array (
);$array9['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.prevNextHeaderTags', $array10);

$expression11 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments7['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression11(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array9)
					),
					$renderingContext
				);
$arguments7['__thenClosure'] = $renderChildrenClosure8;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '

		<div class="page-navigation">
			<p>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments86 = array();
$arguments86['key'] = NULL;
$arguments86['id'] = NULL;
$arguments86['default'] = NULL;
$arguments86['arguments'] = NULL;
$arguments86['extensionName'] = NULL;
$arguments86['languageKey'] = NULL;
$arguments86['alternativeLanguageKeys'] = NULL;
$arguments86['key'] = 'paginate_overall';
// Rendering Array
$array88 = array();
$array89 = array (
);$array88['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.current', $array89);
$array90 = array (
);$array88['1'] = $renderingContext->getVariableProvider()->getByPath('pagination.numberOfPages', $array90);
$arguments86['arguments'] = $array88;

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext)]);

$output6 .= '
			</p>
			<ul class="f3-widget-paginator">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
$output96 = '';

$output96 .= '
					<li class="previous">
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
$output118 = '';

$output118 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure120 = function() use ($renderingContext, $self) {
$output121 = '';

$output121 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
$output128 = '';

$output128 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments129 = array();
$arguments129['key'] = NULL;
$arguments129['id'] = NULL;
$arguments129['default'] = NULL;
$arguments129['arguments'] = NULL;
$arguments129['extensionName'] = NULL;
$arguments129['languageKey'] = NULL;
$arguments129['alternativeLanguageKeys'] = NULL;
$arguments129['key'] = 'paginate_previous';

$output128 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments129, $renderChildrenClosure130, $renderingContext)]);

$output128 .= '
								';
return $output128;
};
$arguments122 = array();
$arguments122['additionalAttributes'] = NULL;
$arguments122['data'] = NULL;
$arguments122['class'] = NULL;
$arguments122['dir'] = NULL;
$arguments122['id'] = NULL;
$arguments122['lang'] = NULL;
$arguments122['style'] = NULL;
$arguments122['title'] = NULL;
$arguments122['accesskey'] = NULL;
$arguments122['tabindex'] = NULL;
$arguments122['onclick'] = NULL;
$arguments122['name'] = NULL;
$arguments122['rel'] = NULL;
$arguments122['rev'] = NULL;
$arguments122['target'] = NULL;
$arguments122['useCacheHash'] = false;
$arguments122['addQueryStringMethod'] = NULL;
$arguments122['action'] = NULL;
$arguments122['arguments'] = array (
);
$arguments122['section'] = '';
$arguments122['format'] = '';
$arguments122['ajax'] = false;
// Rendering Boolean node
// Rendering Array
$array124 = array();
$array124['0'] = 1;

$expression125 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments122['useCacheHash'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression125(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array124)
					),
					$renderingContext
				);
$arguments122['addQueryStringMethod'] = 'GET';
// Rendering Array
$array126 = array();
$array127 = array (
);$array126['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.previousPage', $array127);
$arguments122['arguments'] = $array126;

$output121 .= TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments122, $renderChildrenClosure123, $renderingContext);

$output121 .= '
							';
return $output121;
};
$arguments119 = array();

$output118 .= '';

$output118 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure132 = function() use ($renderingContext, $self) {
$output133 = '';

$output133 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
$output136 = '';

$output136 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure138 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments137 = array();
$arguments137['key'] = NULL;
$arguments137['id'] = NULL;
$arguments137['default'] = NULL;
$arguments137['arguments'] = NULL;
$arguments137['extensionName'] = NULL;
$arguments137['languageKey'] = NULL;
$arguments137['alternativeLanguageKeys'] = NULL;
$arguments137['key'] = 'paginate_previous';

$output136 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments137, $renderChildrenClosure138, $renderingContext)]);

$output136 .= '
								';
return $output136;
};
$arguments134 = array();
$arguments134['additionalAttributes'] = NULL;
$arguments134['data'] = NULL;
$arguments134['class'] = NULL;
$arguments134['dir'] = NULL;
$arguments134['id'] = NULL;
$arguments134['lang'] = NULL;
$arguments134['style'] = NULL;
$arguments134['title'] = NULL;
$arguments134['accesskey'] = NULL;
$arguments134['tabindex'] = NULL;
$arguments134['onclick'] = NULL;
$arguments134['name'] = NULL;
$arguments134['rel'] = NULL;
$arguments134['rev'] = NULL;
$arguments134['target'] = NULL;
$arguments134['useCacheHash'] = false;
$arguments134['addQueryStringMethod'] = NULL;
$arguments134['action'] = NULL;
$arguments134['arguments'] = array (
);
$arguments134['section'] = '';
$arguments134['format'] = '';
$arguments134['ajax'] = false;
$arguments134['addQueryStringMethod'] = 'GET';

$output133 .= TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments134, $renderChildrenClosure135, $renderingContext);

$output133 .= '
							';
return $output133;
};
$arguments131 = array();
$arguments131['if'] = NULL;

$output118 .= '';

$output118 .= '
						';
return $output118;
};
$arguments97 = array();
$arguments97['then'] = NULL;
$arguments97['else'] = NULL;
$arguments97['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array115 = array();
$array116 = array (
);$array115['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.previousPage', $array116);
$array115['1'] = ' > 1';

$expression117 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments97['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression117(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array115)
					),
					$renderingContext
				);
$arguments97['__thenClosure'] = function() use ($renderingContext, $self) {
$output99 = '';

$output99 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
$output106 = '';

$output106 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments107 = array();
$arguments107['key'] = NULL;
$arguments107['id'] = NULL;
$arguments107['default'] = NULL;
$arguments107['arguments'] = NULL;
$arguments107['extensionName'] = NULL;
$arguments107['languageKey'] = NULL;
$arguments107['alternativeLanguageKeys'] = NULL;
$arguments107['key'] = 'paginate_previous';

$output106 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext)]);

$output106 .= '
								';
return $output106;
};
$arguments100 = array();
$arguments100['additionalAttributes'] = NULL;
$arguments100['data'] = NULL;
$arguments100['class'] = NULL;
$arguments100['dir'] = NULL;
$arguments100['id'] = NULL;
$arguments100['lang'] = NULL;
$arguments100['style'] = NULL;
$arguments100['title'] = NULL;
$arguments100['accesskey'] = NULL;
$arguments100['tabindex'] = NULL;
$arguments100['onclick'] = NULL;
$arguments100['name'] = NULL;
$arguments100['rel'] = NULL;
$arguments100['rev'] = NULL;
$arguments100['target'] = NULL;
$arguments100['useCacheHash'] = false;
$arguments100['addQueryStringMethod'] = NULL;
$arguments100['action'] = NULL;
$arguments100['arguments'] = array (
);
$arguments100['section'] = '';
$arguments100['format'] = '';
$arguments100['ajax'] = false;
// Rendering Boolean node
// Rendering Array
$array102 = array();
$array102['0'] = 1;

$expression103 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments100['useCacheHash'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression103(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array102)
					),
					$renderingContext
				);
$arguments100['addQueryStringMethod'] = 'GET';
// Rendering Array
$array104 = array();
$array105 = array (
);$array104['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.previousPage', $array105);
$arguments100['arguments'] = $array104;

$output99 .= TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);

$output99 .= '
							';
return $output99;
};
$arguments97['__elseClosures'][] = function() use ($renderingContext, $self) {
$output109 = '';

$output109 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
$output112 = '';

$output112 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments113 = array();
$arguments113['key'] = NULL;
$arguments113['id'] = NULL;
$arguments113['default'] = NULL;
$arguments113['arguments'] = NULL;
$arguments113['extensionName'] = NULL;
$arguments113['languageKey'] = NULL;
$arguments113['alternativeLanguageKeys'] = NULL;
$arguments113['key'] = 'paginate_previous';

$output112 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext)]);

$output112 .= '
								';
return $output112;
};
$arguments110 = array();
$arguments110['additionalAttributes'] = NULL;
$arguments110['data'] = NULL;
$arguments110['class'] = NULL;
$arguments110['dir'] = NULL;
$arguments110['id'] = NULL;
$arguments110['lang'] = NULL;
$arguments110['style'] = NULL;
$arguments110['title'] = NULL;
$arguments110['accesskey'] = NULL;
$arguments110['tabindex'] = NULL;
$arguments110['onclick'] = NULL;
$arguments110['name'] = NULL;
$arguments110['rel'] = NULL;
$arguments110['rev'] = NULL;
$arguments110['target'] = NULL;
$arguments110['useCacheHash'] = false;
$arguments110['addQueryStringMethod'] = NULL;
$arguments110['action'] = NULL;
$arguments110['arguments'] = array (
);
$arguments110['section'] = '';
$arguments110['format'] = '';
$arguments110['ajax'] = false;
$arguments110['addQueryStringMethod'] = 'GET';

$output109 .= TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments110, $renderChildrenClosure111, $renderingContext);

$output109 .= '
							';
return $output109;
};

$output96 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext);

$output96 .= '
					</li>
				';
return $output96;
};
$arguments91 = array();
$arguments91['then'] = NULL;
$arguments91['else'] = NULL;
$arguments91['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array93 = array();
$array94 = array (
);$array93['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.previousPage', $array94);

$expression95 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments91['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression95(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array93)
					),
					$renderingContext
				);
$arguments91['__thenClosure'] = $renderChildrenClosure92;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext);

$output6 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure140 = function() use ($renderingContext, $self) {
$output144 = '';

$output144 .= '
					<li class="first">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure146 = function() use ($renderingContext, $self) {
return '1';
};
$arguments145 = array();
$arguments145['additionalAttributes'] = NULL;
$arguments145['data'] = NULL;
$arguments145['class'] = NULL;
$arguments145['dir'] = NULL;
$arguments145['id'] = NULL;
$arguments145['lang'] = NULL;
$arguments145['style'] = NULL;
$arguments145['title'] = NULL;
$arguments145['accesskey'] = NULL;
$arguments145['tabindex'] = NULL;
$arguments145['onclick'] = NULL;
$arguments145['name'] = NULL;
$arguments145['rel'] = NULL;
$arguments145['rev'] = NULL;
$arguments145['target'] = NULL;
$arguments145['useCacheHash'] = false;
$arguments145['addQueryStringMethod'] = NULL;
$arguments145['action'] = NULL;
$arguments145['arguments'] = array (
);
$arguments145['section'] = '';
$arguments145['format'] = '';
$arguments145['ajax'] = false;
$arguments145['addQueryStringMethod'] = 'GET';

$output144 .= TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments145, $renderChildrenClosure146, $renderingContext);

$output144 .= '
					</li>
				';
return $output144;
};
$arguments139 = array();
$arguments139['then'] = NULL;
$arguments139['else'] = NULL;
$arguments139['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array141 = array();
$array142 = array (
);$array141['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.displayRangeStart', $array142);
$array141['1'] = ' > 1';

$expression143 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments139['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression143(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array141)
					),
					$renderingContext
				);
$arguments139['__thenClosure'] = $renderChildrenClosure140;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments139, $renderChildrenClosure140, $renderingContext);

$output6 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure148 = function() use ($renderingContext, $self) {
return '
					<li>…</li>
				';
};
$arguments147 = array();
$arguments147['then'] = NULL;
$arguments147['else'] = NULL;
$arguments147['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array149 = array();
$array150 = array (
);$array149['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.hasLessPages', $array150);

$expression151 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments147['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression151(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array149)
					),
					$renderingContext
				);
$arguments147['__thenClosure'] = $renderChildrenClosure148;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments147, $renderChildrenClosure148, $renderingContext);

$output6 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure153 = function() use ($renderingContext, $self) {
$output155 = '';

$output155 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
$output198 = '';

$output198 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure200 = function() use ($renderingContext, $self) {
$output201 = '';

$output201 .= '
							<li class="current">';
$array202 = array (
);
$output201 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.number', $array202)]);

$output201 .= '</li>
						';
return $output201;
};
$arguments199 = array();

$output198 .= '';

$output198 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure204 = function() use ($renderingContext, $self) {
$output205 = '';

$output205 .= '
							<li>
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure207 = function() use ($renderingContext, $self) {
$output223 = '';

$output223 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure225 = function() use ($renderingContext, $self) {
$output226 = '';

$output226 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure228 = function() use ($renderingContext, $self) {
$array233 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.number', $array233)]);
};
$arguments227 = array();
$arguments227['additionalAttributes'] = NULL;
$arguments227['data'] = NULL;
$arguments227['class'] = NULL;
$arguments227['dir'] = NULL;
$arguments227['id'] = NULL;
$arguments227['lang'] = NULL;
$arguments227['style'] = NULL;
$arguments227['title'] = NULL;
$arguments227['accesskey'] = NULL;
$arguments227['tabindex'] = NULL;
$arguments227['onclick'] = NULL;
$arguments227['name'] = NULL;
$arguments227['rel'] = NULL;
$arguments227['rev'] = NULL;
$arguments227['target'] = NULL;
$arguments227['useCacheHash'] = false;
$arguments227['addQueryStringMethod'] = NULL;
$arguments227['action'] = NULL;
$arguments227['arguments'] = array (
);
$arguments227['section'] = '';
$arguments227['format'] = '';
$arguments227['ajax'] = false;
// Rendering Boolean node
// Rendering Array
$array229 = array();
$array229['0'] = 1;

$expression230 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments227['useCacheHash'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression230(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array229)
					),
					$renderingContext
				);
$arguments227['addQueryStringMethod'] = 'GET';
// Rendering Array
$array231 = array();
$array232 = array (
);$array231['currentPage'] = $renderingContext->getVariableProvider()->getByPath('page.number', $array232);
$arguments227['arguments'] = $array231;

$output226 .= TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments227, $renderChildrenClosure228, $renderingContext);

$output226 .= '
									';
return $output226;
};
$arguments224 = array();

$output223 .= '';

$output223 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure235 = function() use ($renderingContext, $self) {
$output236 = '';

$output236 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure238 = function() use ($renderingContext, $self) {
$array239 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.number', $array239)]);
};
$arguments237 = array();
$arguments237['additionalAttributes'] = NULL;
$arguments237['data'] = NULL;
$arguments237['class'] = NULL;
$arguments237['dir'] = NULL;
$arguments237['id'] = NULL;
$arguments237['lang'] = NULL;
$arguments237['style'] = NULL;
$arguments237['title'] = NULL;
$arguments237['accesskey'] = NULL;
$arguments237['tabindex'] = NULL;
$arguments237['onclick'] = NULL;
$arguments237['name'] = NULL;
$arguments237['rel'] = NULL;
$arguments237['rev'] = NULL;
$arguments237['target'] = NULL;
$arguments237['useCacheHash'] = false;
$arguments237['addQueryStringMethod'] = NULL;
$arguments237['action'] = NULL;
$arguments237['arguments'] = array (
);
$arguments237['section'] = '';
$arguments237['format'] = '';
$arguments237['ajax'] = false;
$arguments237['addQueryStringMethod'] = 'GET';

$output236 .= TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments237, $renderChildrenClosure238, $renderingContext);

$output236 .= '
									';
return $output236;
};
$arguments234 = array();
$arguments234['if'] = NULL;

$output223 .= '';

$output223 .= '
								';
return $output223;
};
$arguments206 = array();
$arguments206['then'] = NULL;
$arguments206['else'] = NULL;
$arguments206['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array220 = array();
$array221 = array (
);$array220['0'] = $renderingContext->getVariableProvider()->getByPath('page.number', $array221);
$array220['1'] = ' > 1';

$expression222 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments206['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression222(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array220)
					),
					$renderingContext
				);
$arguments206['__thenClosure'] = function() use ($renderingContext, $self) {
$output208 = '';

$output208 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure210 = function() use ($renderingContext, $self) {
$array215 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.number', $array215)]);
};
$arguments209 = array();
$arguments209['additionalAttributes'] = NULL;
$arguments209['data'] = NULL;
$arguments209['class'] = NULL;
$arguments209['dir'] = NULL;
$arguments209['id'] = NULL;
$arguments209['lang'] = NULL;
$arguments209['style'] = NULL;
$arguments209['title'] = NULL;
$arguments209['accesskey'] = NULL;
$arguments209['tabindex'] = NULL;
$arguments209['onclick'] = NULL;
$arguments209['name'] = NULL;
$arguments209['rel'] = NULL;
$arguments209['rev'] = NULL;
$arguments209['target'] = NULL;
$arguments209['useCacheHash'] = false;
$arguments209['addQueryStringMethod'] = NULL;
$arguments209['action'] = NULL;
$arguments209['arguments'] = array (
);
$arguments209['section'] = '';
$arguments209['format'] = '';
$arguments209['ajax'] = false;
// Rendering Boolean node
// Rendering Array
$array211 = array();
$array211['0'] = 1;

$expression212 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments209['useCacheHash'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression212(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array211)
					),
					$renderingContext
				);
$arguments209['addQueryStringMethod'] = 'GET';
// Rendering Array
$array213 = array();
$array214 = array (
);$array213['currentPage'] = $renderingContext->getVariableProvider()->getByPath('page.number', $array214);
$arguments209['arguments'] = $array213;

$output208 .= TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments209, $renderChildrenClosure210, $renderingContext);

$output208 .= '
									';
return $output208;
};
$arguments206['__elseClosures'][] = function() use ($renderingContext, $self) {
$output216 = '';

$output216 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure218 = function() use ($renderingContext, $self) {
$array219 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.number', $array219)]);
};
$arguments217 = array();
$arguments217['additionalAttributes'] = NULL;
$arguments217['data'] = NULL;
$arguments217['class'] = NULL;
$arguments217['dir'] = NULL;
$arguments217['id'] = NULL;
$arguments217['lang'] = NULL;
$arguments217['style'] = NULL;
$arguments217['title'] = NULL;
$arguments217['accesskey'] = NULL;
$arguments217['tabindex'] = NULL;
$arguments217['onclick'] = NULL;
$arguments217['name'] = NULL;
$arguments217['rel'] = NULL;
$arguments217['rev'] = NULL;
$arguments217['target'] = NULL;
$arguments217['useCacheHash'] = false;
$arguments217['addQueryStringMethod'] = NULL;
$arguments217['action'] = NULL;
$arguments217['arguments'] = array (
);
$arguments217['section'] = '';
$arguments217['format'] = '';
$arguments217['ajax'] = false;
$arguments217['addQueryStringMethod'] = 'GET';

$output216 .= TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments217, $renderChildrenClosure218, $renderingContext);

$output216 .= '
									';
return $output216;
};

$output205 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments206, $renderChildrenClosure207, $renderingContext);

$output205 .= '
							</li>
						';
return $output205;
};
$arguments203 = array();
$arguments203['if'] = NULL;

$output198 .= '';

$output198 .= '
					';
return $output198;
};
$arguments156 = array();
$arguments156['then'] = NULL;
$arguments156['else'] = NULL;
$arguments156['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array195 = array();
$array196 = array (
);$array195['0'] = $renderingContext->getVariableProvider()->getByPath('page.isCurrent', $array196);

$expression197 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments156['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression197(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array195)
					),
					$renderingContext
				);
$arguments156['__thenClosure'] = function() use ($renderingContext, $self) {
$output158 = '';

$output158 .= '
							<li class="current">';
$array159 = array (
);
$output158 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.number', $array159)]);

$output158 .= '</li>
						';
return $output158;
};
$arguments156['__elseClosures'][] = function() use ($renderingContext, $self) {
$output160 = '';

$output160 .= '
							<li>
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure162 = function() use ($renderingContext, $self) {
$output178 = '';

$output178 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure180 = function() use ($renderingContext, $self) {
$output181 = '';

$output181 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure183 = function() use ($renderingContext, $self) {
$array188 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.number', $array188)]);
};
$arguments182 = array();
$arguments182['additionalAttributes'] = NULL;
$arguments182['data'] = NULL;
$arguments182['class'] = NULL;
$arguments182['dir'] = NULL;
$arguments182['id'] = NULL;
$arguments182['lang'] = NULL;
$arguments182['style'] = NULL;
$arguments182['title'] = NULL;
$arguments182['accesskey'] = NULL;
$arguments182['tabindex'] = NULL;
$arguments182['onclick'] = NULL;
$arguments182['name'] = NULL;
$arguments182['rel'] = NULL;
$arguments182['rev'] = NULL;
$arguments182['target'] = NULL;
$arguments182['useCacheHash'] = false;
$arguments182['addQueryStringMethod'] = NULL;
$arguments182['action'] = NULL;
$arguments182['arguments'] = array (
);
$arguments182['section'] = '';
$arguments182['format'] = '';
$arguments182['ajax'] = false;
// Rendering Boolean node
// Rendering Array
$array184 = array();
$array184['0'] = 1;

$expression185 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments182['useCacheHash'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression185(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array184)
					),
					$renderingContext
				);
$arguments182['addQueryStringMethod'] = 'GET';
// Rendering Array
$array186 = array();
$array187 = array (
);$array186['currentPage'] = $renderingContext->getVariableProvider()->getByPath('page.number', $array187);
$arguments182['arguments'] = $array186;

$output181 .= TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments182, $renderChildrenClosure183, $renderingContext);

$output181 .= '
									';
return $output181;
};
$arguments179 = array();

$output178 .= '';

$output178 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure190 = function() use ($renderingContext, $self) {
$output191 = '';

$output191 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure193 = function() use ($renderingContext, $self) {
$array194 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.number', $array194)]);
};
$arguments192 = array();
$arguments192['additionalAttributes'] = NULL;
$arguments192['data'] = NULL;
$arguments192['class'] = NULL;
$arguments192['dir'] = NULL;
$arguments192['id'] = NULL;
$arguments192['lang'] = NULL;
$arguments192['style'] = NULL;
$arguments192['title'] = NULL;
$arguments192['accesskey'] = NULL;
$arguments192['tabindex'] = NULL;
$arguments192['onclick'] = NULL;
$arguments192['name'] = NULL;
$arguments192['rel'] = NULL;
$arguments192['rev'] = NULL;
$arguments192['target'] = NULL;
$arguments192['useCacheHash'] = false;
$arguments192['addQueryStringMethod'] = NULL;
$arguments192['action'] = NULL;
$arguments192['arguments'] = array (
);
$arguments192['section'] = '';
$arguments192['format'] = '';
$arguments192['ajax'] = false;
$arguments192['addQueryStringMethod'] = 'GET';

$output191 .= TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments192, $renderChildrenClosure193, $renderingContext);

$output191 .= '
									';
return $output191;
};
$arguments189 = array();
$arguments189['if'] = NULL;

$output178 .= '';

$output178 .= '
								';
return $output178;
};
$arguments161 = array();
$arguments161['then'] = NULL;
$arguments161['else'] = NULL;
$arguments161['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array175 = array();
$array176 = array (
);$array175['0'] = $renderingContext->getVariableProvider()->getByPath('page.number', $array176);
$array175['1'] = ' > 1';

$expression177 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments161['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression177(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array175)
					),
					$renderingContext
				);
$arguments161['__thenClosure'] = function() use ($renderingContext, $self) {
$output163 = '';

$output163 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure165 = function() use ($renderingContext, $self) {
$array170 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.number', $array170)]);
};
$arguments164 = array();
$arguments164['additionalAttributes'] = NULL;
$arguments164['data'] = NULL;
$arguments164['class'] = NULL;
$arguments164['dir'] = NULL;
$arguments164['id'] = NULL;
$arguments164['lang'] = NULL;
$arguments164['style'] = NULL;
$arguments164['title'] = NULL;
$arguments164['accesskey'] = NULL;
$arguments164['tabindex'] = NULL;
$arguments164['onclick'] = NULL;
$arguments164['name'] = NULL;
$arguments164['rel'] = NULL;
$arguments164['rev'] = NULL;
$arguments164['target'] = NULL;
$arguments164['useCacheHash'] = false;
$arguments164['addQueryStringMethod'] = NULL;
$arguments164['action'] = NULL;
$arguments164['arguments'] = array (
);
$arguments164['section'] = '';
$arguments164['format'] = '';
$arguments164['ajax'] = false;
// Rendering Boolean node
// Rendering Array
$array166 = array();
$array166['0'] = 1;

$expression167 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments164['useCacheHash'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression167(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array166)
					),
					$renderingContext
				);
$arguments164['addQueryStringMethod'] = 'GET';
// Rendering Array
$array168 = array();
$array169 = array (
);$array168['currentPage'] = $renderingContext->getVariableProvider()->getByPath('page.number', $array169);
$arguments164['arguments'] = $array168;

$output163 .= TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments164, $renderChildrenClosure165, $renderingContext);

$output163 .= '
									';
return $output163;
};
$arguments161['__elseClosures'][] = function() use ($renderingContext, $self) {
$output171 = '';

$output171 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure173 = function() use ($renderingContext, $self) {
$array174 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.number', $array174)]);
};
$arguments172 = array();
$arguments172['additionalAttributes'] = NULL;
$arguments172['data'] = NULL;
$arguments172['class'] = NULL;
$arguments172['dir'] = NULL;
$arguments172['id'] = NULL;
$arguments172['lang'] = NULL;
$arguments172['style'] = NULL;
$arguments172['title'] = NULL;
$arguments172['accesskey'] = NULL;
$arguments172['tabindex'] = NULL;
$arguments172['onclick'] = NULL;
$arguments172['name'] = NULL;
$arguments172['rel'] = NULL;
$arguments172['rev'] = NULL;
$arguments172['target'] = NULL;
$arguments172['useCacheHash'] = false;
$arguments172['addQueryStringMethod'] = NULL;
$arguments172['action'] = NULL;
$arguments172['arguments'] = array (
);
$arguments172['section'] = '';
$arguments172['format'] = '';
$arguments172['ajax'] = false;
$arguments172['addQueryStringMethod'] = 'GET';

$output171 .= TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments172, $renderChildrenClosure173, $renderingContext);

$output171 .= '
									';
return $output171;
};

$output160 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments161, $renderChildrenClosure162, $renderingContext);

$output160 .= '
							</li>
						';
return $output160;
};

$output155 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments156, $renderChildrenClosure157, $renderingContext);

$output155 .= '
				';
return $output155;
};
$arguments152 = array();
$arguments152['each'] = NULL;
$arguments152['as'] = NULL;
$arguments152['key'] = NULL;
$arguments152['reverse'] = false;
$arguments152['iteration'] = NULL;
$array154 = array (
);$arguments152['each'] = $renderingContext->getVariableProvider()->getByPath('pagination.pages', $array154);
$arguments152['as'] = 'page';

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments152, $renderChildrenClosure153, $renderingContext);

$output6 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure241 = function() use ($renderingContext, $self) {
return '
					<li>…</li>
				';
};
$arguments240 = array();
$arguments240['then'] = NULL;
$arguments240['else'] = NULL;
$arguments240['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array242 = array();
$array243 = array (
);$array242['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.hasMorePages', $array243);

$expression244 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments240['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression244(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array242)
					),
					$renderingContext
				);
$arguments240['__thenClosure'] = $renderChildrenClosure241;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments240, $renderChildrenClosure241, $renderingContext);

$output6 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure246 = function() use ($renderingContext, $self) {
$output251 = '';

$output251 .= '
					<li class="last">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure253 = function() use ($renderingContext, $self) {
$array258 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pagination.numberOfPages', $array258)]);
};
$arguments252 = array();
$arguments252['additionalAttributes'] = NULL;
$arguments252['data'] = NULL;
$arguments252['class'] = NULL;
$arguments252['dir'] = NULL;
$arguments252['id'] = NULL;
$arguments252['lang'] = NULL;
$arguments252['style'] = NULL;
$arguments252['title'] = NULL;
$arguments252['accesskey'] = NULL;
$arguments252['tabindex'] = NULL;
$arguments252['onclick'] = NULL;
$arguments252['name'] = NULL;
$arguments252['rel'] = NULL;
$arguments252['rev'] = NULL;
$arguments252['target'] = NULL;
$arguments252['useCacheHash'] = false;
$arguments252['addQueryStringMethod'] = NULL;
$arguments252['action'] = NULL;
$arguments252['arguments'] = array (
);
$arguments252['section'] = '';
$arguments252['format'] = '';
$arguments252['ajax'] = false;
// Rendering Boolean node
// Rendering Array
$array254 = array();
$array254['0'] = 1;

$expression255 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments252['useCacheHash'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression255(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array254)
					),
					$renderingContext
				);
$arguments252['addQueryStringMethod'] = 'GET';
// Rendering Array
$array256 = array();
$array257 = array (
);$array256['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.numberOfPages', $array257);
$arguments252['arguments'] = $array256;

$output251 .= TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments252, $renderChildrenClosure253, $renderingContext);

$output251 .= '
					</li>
				';
return $output251;
};
$arguments245 = array();
$arguments245['then'] = NULL;
$arguments245['else'] = NULL;
$arguments245['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array247 = array();
$array248 = array (
);$array247['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.displayRangeEnd', $array248);
$array247['1'] = ' < ';
$array249 = array (
);$array247['2'] = $renderingContext->getVariableProvider()->getByPath('pagination.numberOfPages', $array249);

$expression250 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) < TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments245['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression250(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array247)
					),
					$renderingContext
				);
$arguments245['__thenClosure'] = $renderChildrenClosure246;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments245, $renderChildrenClosure246, $renderingContext);

$output6 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure260 = function() use ($renderingContext, $self) {
$output264 = '';

$output264 .= '
					<li class="last next">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure266 = function() use ($renderingContext, $self) {
$output271 = '';

$output271 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure273 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments272 = array();
$arguments272['key'] = NULL;
$arguments272['id'] = NULL;
$arguments272['default'] = NULL;
$arguments272['arguments'] = NULL;
$arguments272['extensionName'] = NULL;
$arguments272['languageKey'] = NULL;
$arguments272['alternativeLanguageKeys'] = NULL;
$arguments272['key'] = 'paginate_next';

$output271 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments272, $renderChildrenClosure273, $renderingContext)]);

$output271 .= '
						';
return $output271;
};
$arguments265 = array();
$arguments265['additionalAttributes'] = NULL;
$arguments265['data'] = NULL;
$arguments265['class'] = NULL;
$arguments265['dir'] = NULL;
$arguments265['id'] = NULL;
$arguments265['lang'] = NULL;
$arguments265['style'] = NULL;
$arguments265['title'] = NULL;
$arguments265['accesskey'] = NULL;
$arguments265['tabindex'] = NULL;
$arguments265['onclick'] = NULL;
$arguments265['name'] = NULL;
$arguments265['rel'] = NULL;
$arguments265['rev'] = NULL;
$arguments265['target'] = NULL;
$arguments265['useCacheHash'] = false;
$arguments265['addQueryStringMethod'] = NULL;
$arguments265['action'] = NULL;
$arguments265['arguments'] = array (
);
$arguments265['section'] = '';
$arguments265['format'] = '';
$arguments265['ajax'] = false;
// Rendering Boolean node
// Rendering Array
$array267 = array();
$array267['0'] = 1;

$expression268 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments265['useCacheHash'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression268(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array267)
					),
					$renderingContext
				);
$arguments265['addQueryStringMethod'] = 'GET';
// Rendering Array
$array269 = array();
$array270 = array (
);$array269['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.nextPage', $array270);
$arguments265['arguments'] = $array269;

$output264 .= TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments265, $renderChildrenClosure266, $renderingContext);

$output264 .= '
					</li>
				';
return $output264;
};
$arguments259 = array();
$arguments259['then'] = NULL;
$arguments259['else'] = NULL;
$arguments259['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array261 = array();
$array262 = array (
);$array261['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.nextPage', $array262);

$expression263 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments259['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression263(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array261)
					),
					$renderingContext
				);
$arguments259['__thenClosure'] = $renderChildrenClosure260;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments259, $renderChildrenClosure260, $renderingContext);

$output6 .= '
			</ul>
		</div>
		<div class="news-clear"></div>
	';
return $output6;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.numberOfPages', $array4);
$array3['1'] = ' > 1';

$expression5 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression5(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = $renderChildrenClosure2;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output274 = '';

$output274 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure276 = function() use ($renderingContext, $self) {
$output280 = '';

$output280 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure282 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments281 = array();
$arguments281['section'] = NULL;
$arguments281['partial'] = NULL;
$arguments281['delegate'] = NULL;
$arguments281['renderable'] = NULL;
$arguments281['arguments'] = array (
);
$arguments281['optional'] = false;
$arguments281['default'] = NULL;
$arguments281['contentAs'] = NULL;
$arguments281['debug'] = true;
$arguments281['section'] = 'paginator';
// Rendering Array
$array283 = array();
$array284 = array (
);$array283['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination', $array284);
$array285 = array (
);$array283['configuration'] = $renderingContext->getVariableProvider()->getByPath('configuration', $array285);
$arguments281['arguments'] = $array283;

$output280 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments281, $renderChildrenClosure282, $renderingContext);

$output280 .= '
';
return $output280;
};
$arguments275 = array();
$arguments275['then'] = NULL;
$arguments275['else'] = NULL;
$arguments275['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array277 = array();
$array278 = array (
);$array277['0'] = $renderingContext->getVariableProvider()->getByPath('configuration.insertAbove', $array278);

$expression279 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments275['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression279(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array277)
					),
					$renderingContext
				);
$arguments275['__thenClosure'] = $renderChildrenClosure276;

$output274 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments275, $renderChildrenClosure276, $renderingContext);

$output274 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderChildrenViewHelper
$renderChildrenClosure287 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments286 = array();
$arguments286['arguments'] = array (
);
$array288 = array (
);$arguments286['arguments'] = $renderingContext->getVariableProvider()->getByPath('contentArguments', $array288);

$output274 .= TYPO3\CMS\Fluid\ViewHelpers\RenderChildrenViewHelper::renderStatic($arguments286, $renderChildrenClosure287, $renderingContext);

$output274 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure290 = function() use ($renderingContext, $self) {
$output294 = '';

$output294 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure296 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments295 = array();
$arguments295['section'] = NULL;
$arguments295['partial'] = NULL;
$arguments295['delegate'] = NULL;
$arguments295['renderable'] = NULL;
$arguments295['arguments'] = array (
);
$arguments295['optional'] = false;
$arguments295['default'] = NULL;
$arguments295['contentAs'] = NULL;
$arguments295['debug'] = true;
$arguments295['section'] = 'paginator';
// Rendering Array
$array297 = array();
$array298 = array (
);$array297['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination', $array298);
$array299 = array (
);$array297['configuration'] = $renderingContext->getVariableProvider()->getByPath('configuration', $array299);
$arguments295['arguments'] = $array297;

$output294 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments295, $renderChildrenClosure296, $renderingContext);

$output294 .= '
';
return $output294;
};
$arguments289 = array();
$arguments289['then'] = NULL;
$arguments289['else'] = NULL;
$arguments289['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array291 = array();
$array292 = array (
);$array291['0'] = $renderingContext->getVariableProvider()->getByPath('configuration.insertBelow', $array292);

$expression293 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments289['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression293(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array291)
					),
					$renderingContext
				);
$arguments289['__thenClosure'] = $renderChildrenClosure290;

$output274 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments289, $renderChildrenClosure290, $renderingContext);

$output274 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure301 = function() use ($renderingContext, $self) {
$output302 = '';

$output302 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure304 = function() use ($renderingContext, $self) {
$output308 = '';

$output308 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure310 = function() use ($renderingContext, $self) {
$output314 = '';

$output314 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure316 = function() use ($renderingContext, $self) {
$output320 = '';

$output320 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure322 = function() use ($renderingContext, $self) {
$output346 = '';

$output346 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure348 = function() use ($renderingContext, $self) {
$output349 = '';

$output349 .= '
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\HeaderDataViewHelper
$renderChildrenClosure351 = function() use ($renderingContext, $self) {
$output352 = '';

$output352 .= '<link rel="prev" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$renderChildrenClosure354 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$renderChildrenClosure356 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments355 = array();
$arguments355['useCacheHash'] = false;
$arguments355['addQueryStringMethod'] = NULL;
$arguments355['action'] = NULL;
$arguments355['arguments'] = array (
);
$arguments355['section'] = '';
$arguments355['format'] = '';
$arguments355['ajax'] = false;
// Rendering Boolean node
// Rendering Array
$array357 = array();
$array357['0'] = 1;

$expression358 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments355['useCacheHash'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression358(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array357)
					),
					$renderingContext
				);
// Rendering Array
$array359 = array();
$array360 = array (
);$array359['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.previousPage', $array360);
$arguments355['arguments'] = $array359;
return TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper::renderStatic($arguments355, $renderChildrenClosure356, $renderingContext);
};
$arguments353 = array();
$arguments353['value'] = NULL;
$arguments353['keepQuotes'] = false;
$arguments353['encoding'] = NULL;
$arguments353['doubleEncode'] = true;
$renderChildrenClosure354 = ($arguments353['value'] !== null) ? function() use ($arguments353) { return $arguments353['value']; } : $renderChildrenClosure354;
$output352 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper::renderStatic($arguments353, $renderChildrenClosure354, $renderingContext);

$output352 .= '" />';
return $output352;
};
$arguments350 = array();

$output349 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\HeaderDataViewHelper::renderStatic($arguments350, $renderChildrenClosure351, $renderingContext)]);

$output349 .= '
					';
return $output349;
};
$arguments347 = array();

$output346 .= '';

$output346 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure362 = function() use ($renderingContext, $self) {
$output363 = '';

$output363 .= '
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\HeaderDataViewHelper
$renderChildrenClosure365 = function() use ($renderingContext, $self) {
$output366 = '';

$output366 .= '<link rel="prev" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$renderChildrenClosure368 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$renderChildrenClosure370 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments369 = array();
$arguments369['useCacheHash'] = false;
$arguments369['addQueryStringMethod'] = NULL;
$arguments369['action'] = NULL;
$arguments369['arguments'] = array (
);
$arguments369['section'] = '';
$arguments369['format'] = '';
$arguments369['ajax'] = false;
return TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper::renderStatic($arguments369, $renderChildrenClosure370, $renderingContext);
};
$arguments367 = array();
$arguments367['value'] = NULL;
$arguments367['keepQuotes'] = false;
$arguments367['encoding'] = NULL;
$arguments367['doubleEncode'] = true;
$renderChildrenClosure368 = ($arguments367['value'] !== null) ? function() use ($arguments367) { return $arguments367['value']; } : $renderChildrenClosure368;
$output366 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper::renderStatic($arguments367, $renderChildrenClosure368, $renderingContext);

$output366 .= '" />';
return $output366;
};
$arguments364 = array();

$output363 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\HeaderDataViewHelper::renderStatic($arguments364, $renderChildrenClosure365, $renderingContext)]);

$output363 .= '
					';
return $output363;
};
$arguments361 = array();
$arguments361['if'] = NULL;

$output346 .= '';

$output346 .= '
				';
return $output346;
};
$arguments321 = array();
$arguments321['then'] = NULL;
$arguments321['else'] = NULL;
$arguments321['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array343 = array();
$array344 = array (
);$array343['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.previousPage', $array344);
$array343['1'] = ' > 1';

$expression345 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments321['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression345(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array343)
					),
					$renderingContext
				);
$arguments321['__thenClosure'] = function() use ($renderingContext, $self) {
$output323 = '';

$output323 .= '
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\HeaderDataViewHelper
$renderChildrenClosure325 = function() use ($renderingContext, $self) {
$output326 = '';

$output326 .= '<link rel="prev" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$renderChildrenClosure328 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$renderChildrenClosure330 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments329 = array();
$arguments329['useCacheHash'] = false;
$arguments329['addQueryStringMethod'] = NULL;
$arguments329['action'] = NULL;
$arguments329['arguments'] = array (
);
$arguments329['section'] = '';
$arguments329['format'] = '';
$arguments329['ajax'] = false;
// Rendering Boolean node
// Rendering Array
$array331 = array();
$array331['0'] = 1;

$expression332 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments329['useCacheHash'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression332(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array331)
					),
					$renderingContext
				);
// Rendering Array
$array333 = array();
$array334 = array (
);$array333['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.previousPage', $array334);
$arguments329['arguments'] = $array333;
return TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper::renderStatic($arguments329, $renderChildrenClosure330, $renderingContext);
};
$arguments327 = array();
$arguments327['value'] = NULL;
$arguments327['keepQuotes'] = false;
$arguments327['encoding'] = NULL;
$arguments327['doubleEncode'] = true;
$renderChildrenClosure328 = ($arguments327['value'] !== null) ? function() use ($arguments327) { return $arguments327['value']; } : $renderChildrenClosure328;
$output326 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper::renderStatic($arguments327, $renderChildrenClosure328, $renderingContext);

$output326 .= '" />';
return $output326;
};
$arguments324 = array();

$output323 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\HeaderDataViewHelper::renderStatic($arguments324, $renderChildrenClosure325, $renderingContext)]);

$output323 .= '
					';
return $output323;
};
$arguments321['__elseClosures'][] = function() use ($renderingContext, $self) {
$output335 = '';

$output335 .= '
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\HeaderDataViewHelper
$renderChildrenClosure337 = function() use ($renderingContext, $self) {
$output338 = '';

$output338 .= '<link rel="prev" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$renderChildrenClosure340 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$renderChildrenClosure342 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments341 = array();
$arguments341['useCacheHash'] = false;
$arguments341['addQueryStringMethod'] = NULL;
$arguments341['action'] = NULL;
$arguments341['arguments'] = array (
);
$arguments341['section'] = '';
$arguments341['format'] = '';
$arguments341['ajax'] = false;
return TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper::renderStatic($arguments341, $renderChildrenClosure342, $renderingContext);
};
$arguments339 = array();
$arguments339['value'] = NULL;
$arguments339['keepQuotes'] = false;
$arguments339['encoding'] = NULL;
$arguments339['doubleEncode'] = true;
$renderChildrenClosure340 = ($arguments339['value'] !== null) ? function() use ($arguments339) { return $arguments339['value']; } : $renderChildrenClosure340;
$output338 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper::renderStatic($arguments339, $renderChildrenClosure340, $renderingContext);

$output338 .= '" />';
return $output338;
};
$arguments336 = array();

$output335 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\HeaderDataViewHelper::renderStatic($arguments336, $renderChildrenClosure337, $renderingContext)]);

$output335 .= '
					';
return $output335;
};

$output320 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments321, $renderChildrenClosure322, $renderingContext);

$output320 .= '
			';
return $output320;
};
$arguments315 = array();
$arguments315['then'] = NULL;
$arguments315['else'] = NULL;
$arguments315['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array317 = array();
$array318 = array (
);$array317['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.previousPage', $array318);

$expression319 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments315['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression319(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array317)
					),
					$renderingContext
				);
$arguments315['__thenClosure'] = $renderChildrenClosure316;

$output314 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments315, $renderChildrenClosure316, $renderingContext);

$output314 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure372 = function() use ($renderingContext, $self) {
$output376 = '';

$output376 .= '
				';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\HeaderDataViewHelper
$renderChildrenClosure378 = function() use ($renderingContext, $self) {
$output379 = '';

$output379 .= '<link rel="next" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$renderChildrenClosure381 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$renderChildrenClosure383 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments382 = array();
$arguments382['useCacheHash'] = false;
$arguments382['addQueryStringMethod'] = NULL;
$arguments382['action'] = NULL;
$arguments382['arguments'] = array (
);
$arguments382['section'] = '';
$arguments382['format'] = '';
$arguments382['ajax'] = false;
// Rendering Boolean node
// Rendering Array
$array384 = array();
$array384['0'] = 1;

$expression385 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments382['useCacheHash'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression385(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array384)
					),
					$renderingContext
				);
// Rendering Array
$array386 = array();
$array387 = array (
);$array386['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.nextPage', $array387);
$arguments382['arguments'] = $array386;
return TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper::renderStatic($arguments382, $renderChildrenClosure383, $renderingContext);
};
$arguments380 = array();
$arguments380['value'] = NULL;
$arguments380['keepQuotes'] = false;
$arguments380['encoding'] = NULL;
$arguments380['doubleEncode'] = true;
$renderChildrenClosure381 = ($arguments380['value'] !== null) ? function() use ($arguments380) { return $arguments380['value']; } : $renderChildrenClosure381;
$output379 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper::renderStatic($arguments380, $renderChildrenClosure381, $renderingContext);

$output379 .= '" />';
return $output379;
};
$arguments377 = array();

$output376 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\HeaderDataViewHelper::renderStatic($arguments377, $renderChildrenClosure378, $renderingContext)]);

$output376 .= '
			';
return $output376;
};
$arguments371 = array();
$arguments371['then'] = NULL;
$arguments371['else'] = NULL;
$arguments371['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array373 = array();
$array374 = array (
);$array373['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.nextPage', $array374);

$expression375 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments371['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression375(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array373)
					),
					$renderingContext
				);
$arguments371['__thenClosure'] = $renderChildrenClosure372;

$output314 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments371, $renderChildrenClosure372, $renderingContext);

$output314 .= '
		';
return $output314;
};
$arguments309 = array();
$arguments309['then'] = NULL;
$arguments309['else'] = NULL;
$arguments309['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array311 = array();
$array312 = array (
);$array311['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.prevNextHeaderTags', $array312);

$expression313 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments309['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression313(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array311)
					),
					$renderingContext
				);
$arguments309['__thenClosure'] = $renderChildrenClosure310;

$output308 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments309, $renderChildrenClosure310, $renderingContext);

$output308 .= '

		<div class="page-navigation">
			<p>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure389 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments388 = array();
$arguments388['key'] = NULL;
$arguments388['id'] = NULL;
$arguments388['default'] = NULL;
$arguments388['arguments'] = NULL;
$arguments388['extensionName'] = NULL;
$arguments388['languageKey'] = NULL;
$arguments388['alternativeLanguageKeys'] = NULL;
$arguments388['key'] = 'paginate_overall';
// Rendering Array
$array390 = array();
$array391 = array (
);$array390['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.current', $array391);
$array392 = array (
);$array390['1'] = $renderingContext->getVariableProvider()->getByPath('pagination.numberOfPages', $array392);
$arguments388['arguments'] = $array390;

$output308 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments388, $renderChildrenClosure389, $renderingContext)]);

$output308 .= '
			</p>
			<ul class="f3-widget-paginator">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure394 = function() use ($renderingContext, $self) {
$output398 = '';

$output398 .= '
					<li class="previous">
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure400 = function() use ($renderingContext, $self) {
$output420 = '';

$output420 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure422 = function() use ($renderingContext, $self) {
$output423 = '';

$output423 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure425 = function() use ($renderingContext, $self) {
$output430 = '';

$output430 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure432 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments431 = array();
$arguments431['key'] = NULL;
$arguments431['id'] = NULL;
$arguments431['default'] = NULL;
$arguments431['arguments'] = NULL;
$arguments431['extensionName'] = NULL;
$arguments431['languageKey'] = NULL;
$arguments431['alternativeLanguageKeys'] = NULL;
$arguments431['key'] = 'paginate_previous';

$output430 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments431, $renderChildrenClosure432, $renderingContext)]);

$output430 .= '
								';
return $output430;
};
$arguments424 = array();
$arguments424['additionalAttributes'] = NULL;
$arguments424['data'] = NULL;
$arguments424['class'] = NULL;
$arguments424['dir'] = NULL;
$arguments424['id'] = NULL;
$arguments424['lang'] = NULL;
$arguments424['style'] = NULL;
$arguments424['title'] = NULL;
$arguments424['accesskey'] = NULL;
$arguments424['tabindex'] = NULL;
$arguments424['onclick'] = NULL;
$arguments424['name'] = NULL;
$arguments424['rel'] = NULL;
$arguments424['rev'] = NULL;
$arguments424['target'] = NULL;
$arguments424['useCacheHash'] = false;
$arguments424['addQueryStringMethod'] = NULL;
$arguments424['action'] = NULL;
$arguments424['arguments'] = array (
);
$arguments424['section'] = '';
$arguments424['format'] = '';
$arguments424['ajax'] = false;
// Rendering Boolean node
// Rendering Array
$array426 = array();
$array426['0'] = 1;

$expression427 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments424['useCacheHash'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression427(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array426)
					),
					$renderingContext
				);
$arguments424['addQueryStringMethod'] = 'GET';
// Rendering Array
$array428 = array();
$array429 = array (
);$array428['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.previousPage', $array429);
$arguments424['arguments'] = $array428;

$output423 .= TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments424, $renderChildrenClosure425, $renderingContext);

$output423 .= '
							';
return $output423;
};
$arguments421 = array();

$output420 .= '';

$output420 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure434 = function() use ($renderingContext, $self) {
$output435 = '';

$output435 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure437 = function() use ($renderingContext, $self) {
$output438 = '';

$output438 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure440 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments439 = array();
$arguments439['key'] = NULL;
$arguments439['id'] = NULL;
$arguments439['default'] = NULL;
$arguments439['arguments'] = NULL;
$arguments439['extensionName'] = NULL;
$arguments439['languageKey'] = NULL;
$arguments439['alternativeLanguageKeys'] = NULL;
$arguments439['key'] = 'paginate_previous';

$output438 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments439, $renderChildrenClosure440, $renderingContext)]);

$output438 .= '
								';
return $output438;
};
$arguments436 = array();
$arguments436['additionalAttributes'] = NULL;
$arguments436['data'] = NULL;
$arguments436['class'] = NULL;
$arguments436['dir'] = NULL;
$arguments436['id'] = NULL;
$arguments436['lang'] = NULL;
$arguments436['style'] = NULL;
$arguments436['title'] = NULL;
$arguments436['accesskey'] = NULL;
$arguments436['tabindex'] = NULL;
$arguments436['onclick'] = NULL;
$arguments436['name'] = NULL;
$arguments436['rel'] = NULL;
$arguments436['rev'] = NULL;
$arguments436['target'] = NULL;
$arguments436['useCacheHash'] = false;
$arguments436['addQueryStringMethod'] = NULL;
$arguments436['action'] = NULL;
$arguments436['arguments'] = array (
);
$arguments436['section'] = '';
$arguments436['format'] = '';
$arguments436['ajax'] = false;
$arguments436['addQueryStringMethod'] = 'GET';

$output435 .= TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments436, $renderChildrenClosure437, $renderingContext);

$output435 .= '
							';
return $output435;
};
$arguments433 = array();
$arguments433['if'] = NULL;

$output420 .= '';

$output420 .= '
						';
return $output420;
};
$arguments399 = array();
$arguments399['then'] = NULL;
$arguments399['else'] = NULL;
$arguments399['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array417 = array();
$array418 = array (
);$array417['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.previousPage', $array418);
$array417['1'] = ' > 1';

$expression419 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments399['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression419(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array417)
					),
					$renderingContext
				);
$arguments399['__thenClosure'] = function() use ($renderingContext, $self) {
$output401 = '';

$output401 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure403 = function() use ($renderingContext, $self) {
$output408 = '';

$output408 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure410 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments409 = array();
$arguments409['key'] = NULL;
$arguments409['id'] = NULL;
$arguments409['default'] = NULL;
$arguments409['arguments'] = NULL;
$arguments409['extensionName'] = NULL;
$arguments409['languageKey'] = NULL;
$arguments409['alternativeLanguageKeys'] = NULL;
$arguments409['key'] = 'paginate_previous';

$output408 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments409, $renderChildrenClosure410, $renderingContext)]);

$output408 .= '
								';
return $output408;
};
$arguments402 = array();
$arguments402['additionalAttributes'] = NULL;
$arguments402['data'] = NULL;
$arguments402['class'] = NULL;
$arguments402['dir'] = NULL;
$arguments402['id'] = NULL;
$arguments402['lang'] = NULL;
$arguments402['style'] = NULL;
$arguments402['title'] = NULL;
$arguments402['accesskey'] = NULL;
$arguments402['tabindex'] = NULL;
$arguments402['onclick'] = NULL;
$arguments402['name'] = NULL;
$arguments402['rel'] = NULL;
$arguments402['rev'] = NULL;
$arguments402['target'] = NULL;
$arguments402['useCacheHash'] = false;
$arguments402['addQueryStringMethod'] = NULL;
$arguments402['action'] = NULL;
$arguments402['arguments'] = array (
);
$arguments402['section'] = '';
$arguments402['format'] = '';
$arguments402['ajax'] = false;
// Rendering Boolean node
// Rendering Array
$array404 = array();
$array404['0'] = 1;

$expression405 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments402['useCacheHash'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression405(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array404)
					),
					$renderingContext
				);
$arguments402['addQueryStringMethod'] = 'GET';
// Rendering Array
$array406 = array();
$array407 = array (
);$array406['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.previousPage', $array407);
$arguments402['arguments'] = $array406;

$output401 .= TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments402, $renderChildrenClosure403, $renderingContext);

$output401 .= '
							';
return $output401;
};
$arguments399['__elseClosures'][] = function() use ($renderingContext, $self) {
$output411 = '';

$output411 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure413 = function() use ($renderingContext, $self) {
$output414 = '';

$output414 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure416 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments415 = array();
$arguments415['key'] = NULL;
$arguments415['id'] = NULL;
$arguments415['default'] = NULL;
$arguments415['arguments'] = NULL;
$arguments415['extensionName'] = NULL;
$arguments415['languageKey'] = NULL;
$arguments415['alternativeLanguageKeys'] = NULL;
$arguments415['key'] = 'paginate_previous';

$output414 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments415, $renderChildrenClosure416, $renderingContext)]);

$output414 .= '
								';
return $output414;
};
$arguments412 = array();
$arguments412['additionalAttributes'] = NULL;
$arguments412['data'] = NULL;
$arguments412['class'] = NULL;
$arguments412['dir'] = NULL;
$arguments412['id'] = NULL;
$arguments412['lang'] = NULL;
$arguments412['style'] = NULL;
$arguments412['title'] = NULL;
$arguments412['accesskey'] = NULL;
$arguments412['tabindex'] = NULL;
$arguments412['onclick'] = NULL;
$arguments412['name'] = NULL;
$arguments412['rel'] = NULL;
$arguments412['rev'] = NULL;
$arguments412['target'] = NULL;
$arguments412['useCacheHash'] = false;
$arguments412['addQueryStringMethod'] = NULL;
$arguments412['action'] = NULL;
$arguments412['arguments'] = array (
);
$arguments412['section'] = '';
$arguments412['format'] = '';
$arguments412['ajax'] = false;
$arguments412['addQueryStringMethod'] = 'GET';

$output411 .= TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments412, $renderChildrenClosure413, $renderingContext);

$output411 .= '
							';
return $output411;
};

$output398 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments399, $renderChildrenClosure400, $renderingContext);

$output398 .= '
					</li>
				';
return $output398;
};
$arguments393 = array();
$arguments393['then'] = NULL;
$arguments393['else'] = NULL;
$arguments393['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array395 = array();
$array396 = array (
);$array395['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.previousPage', $array396);

$expression397 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments393['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression397(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array395)
					),
					$renderingContext
				);
$arguments393['__thenClosure'] = $renderChildrenClosure394;

$output308 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments393, $renderChildrenClosure394, $renderingContext);

$output308 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure442 = function() use ($renderingContext, $self) {
$output446 = '';

$output446 .= '
					<li class="first">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure448 = function() use ($renderingContext, $self) {
return '1';
};
$arguments447 = array();
$arguments447['additionalAttributes'] = NULL;
$arguments447['data'] = NULL;
$arguments447['class'] = NULL;
$arguments447['dir'] = NULL;
$arguments447['id'] = NULL;
$arguments447['lang'] = NULL;
$arguments447['style'] = NULL;
$arguments447['title'] = NULL;
$arguments447['accesskey'] = NULL;
$arguments447['tabindex'] = NULL;
$arguments447['onclick'] = NULL;
$arguments447['name'] = NULL;
$arguments447['rel'] = NULL;
$arguments447['rev'] = NULL;
$arguments447['target'] = NULL;
$arguments447['useCacheHash'] = false;
$arguments447['addQueryStringMethod'] = NULL;
$arguments447['action'] = NULL;
$arguments447['arguments'] = array (
);
$arguments447['section'] = '';
$arguments447['format'] = '';
$arguments447['ajax'] = false;
$arguments447['addQueryStringMethod'] = 'GET';

$output446 .= TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments447, $renderChildrenClosure448, $renderingContext);

$output446 .= '
					</li>
				';
return $output446;
};
$arguments441 = array();
$arguments441['then'] = NULL;
$arguments441['else'] = NULL;
$arguments441['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array443 = array();
$array444 = array (
);$array443['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.displayRangeStart', $array444);
$array443['1'] = ' > 1';

$expression445 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments441['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression445(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array443)
					),
					$renderingContext
				);
$arguments441['__thenClosure'] = $renderChildrenClosure442;

$output308 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments441, $renderChildrenClosure442, $renderingContext);

$output308 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure450 = function() use ($renderingContext, $self) {
return '
					<li>…</li>
				';
};
$arguments449 = array();
$arguments449['then'] = NULL;
$arguments449['else'] = NULL;
$arguments449['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array451 = array();
$array452 = array (
);$array451['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.hasLessPages', $array452);

$expression453 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments449['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression453(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array451)
					),
					$renderingContext
				);
$arguments449['__thenClosure'] = $renderChildrenClosure450;

$output308 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments449, $renderChildrenClosure450, $renderingContext);

$output308 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure455 = function() use ($renderingContext, $self) {
$output457 = '';

$output457 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure459 = function() use ($renderingContext, $self) {
$output500 = '';

$output500 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure502 = function() use ($renderingContext, $self) {
$output503 = '';

$output503 .= '
							<li class="current">';
$array504 = array (
);
$output503 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.number', $array504)]);

$output503 .= '</li>
						';
return $output503;
};
$arguments501 = array();

$output500 .= '';

$output500 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure506 = function() use ($renderingContext, $self) {
$output507 = '';

$output507 .= '
							<li>
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure509 = function() use ($renderingContext, $self) {
$output525 = '';

$output525 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure527 = function() use ($renderingContext, $self) {
$output528 = '';

$output528 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure530 = function() use ($renderingContext, $self) {
$array535 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.number', $array535)]);
};
$arguments529 = array();
$arguments529['additionalAttributes'] = NULL;
$arguments529['data'] = NULL;
$arguments529['class'] = NULL;
$arguments529['dir'] = NULL;
$arguments529['id'] = NULL;
$arguments529['lang'] = NULL;
$arguments529['style'] = NULL;
$arguments529['title'] = NULL;
$arguments529['accesskey'] = NULL;
$arguments529['tabindex'] = NULL;
$arguments529['onclick'] = NULL;
$arguments529['name'] = NULL;
$arguments529['rel'] = NULL;
$arguments529['rev'] = NULL;
$arguments529['target'] = NULL;
$arguments529['useCacheHash'] = false;
$arguments529['addQueryStringMethod'] = NULL;
$arguments529['action'] = NULL;
$arguments529['arguments'] = array (
);
$arguments529['section'] = '';
$arguments529['format'] = '';
$arguments529['ajax'] = false;
// Rendering Boolean node
// Rendering Array
$array531 = array();
$array531['0'] = 1;

$expression532 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments529['useCacheHash'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression532(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array531)
					),
					$renderingContext
				);
$arguments529['addQueryStringMethod'] = 'GET';
// Rendering Array
$array533 = array();
$array534 = array (
);$array533['currentPage'] = $renderingContext->getVariableProvider()->getByPath('page.number', $array534);
$arguments529['arguments'] = $array533;

$output528 .= TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments529, $renderChildrenClosure530, $renderingContext);

$output528 .= '
									';
return $output528;
};
$arguments526 = array();

$output525 .= '';

$output525 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure537 = function() use ($renderingContext, $self) {
$output538 = '';

$output538 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure540 = function() use ($renderingContext, $self) {
$array541 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.number', $array541)]);
};
$arguments539 = array();
$arguments539['additionalAttributes'] = NULL;
$arguments539['data'] = NULL;
$arguments539['class'] = NULL;
$arguments539['dir'] = NULL;
$arguments539['id'] = NULL;
$arguments539['lang'] = NULL;
$arguments539['style'] = NULL;
$arguments539['title'] = NULL;
$arguments539['accesskey'] = NULL;
$arguments539['tabindex'] = NULL;
$arguments539['onclick'] = NULL;
$arguments539['name'] = NULL;
$arguments539['rel'] = NULL;
$arguments539['rev'] = NULL;
$arguments539['target'] = NULL;
$arguments539['useCacheHash'] = false;
$arguments539['addQueryStringMethod'] = NULL;
$arguments539['action'] = NULL;
$arguments539['arguments'] = array (
);
$arguments539['section'] = '';
$arguments539['format'] = '';
$arguments539['ajax'] = false;
$arguments539['addQueryStringMethod'] = 'GET';

$output538 .= TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments539, $renderChildrenClosure540, $renderingContext);

$output538 .= '
									';
return $output538;
};
$arguments536 = array();
$arguments536['if'] = NULL;

$output525 .= '';

$output525 .= '
								';
return $output525;
};
$arguments508 = array();
$arguments508['then'] = NULL;
$arguments508['else'] = NULL;
$arguments508['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array522 = array();
$array523 = array (
);$array522['0'] = $renderingContext->getVariableProvider()->getByPath('page.number', $array523);
$array522['1'] = ' > 1';

$expression524 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments508['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression524(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array522)
					),
					$renderingContext
				);
$arguments508['__thenClosure'] = function() use ($renderingContext, $self) {
$output510 = '';

$output510 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure512 = function() use ($renderingContext, $self) {
$array517 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.number', $array517)]);
};
$arguments511 = array();
$arguments511['additionalAttributes'] = NULL;
$arguments511['data'] = NULL;
$arguments511['class'] = NULL;
$arguments511['dir'] = NULL;
$arguments511['id'] = NULL;
$arguments511['lang'] = NULL;
$arguments511['style'] = NULL;
$arguments511['title'] = NULL;
$arguments511['accesskey'] = NULL;
$arguments511['tabindex'] = NULL;
$arguments511['onclick'] = NULL;
$arguments511['name'] = NULL;
$arguments511['rel'] = NULL;
$arguments511['rev'] = NULL;
$arguments511['target'] = NULL;
$arguments511['useCacheHash'] = false;
$arguments511['addQueryStringMethod'] = NULL;
$arguments511['action'] = NULL;
$arguments511['arguments'] = array (
);
$arguments511['section'] = '';
$arguments511['format'] = '';
$arguments511['ajax'] = false;
// Rendering Boolean node
// Rendering Array
$array513 = array();
$array513['0'] = 1;

$expression514 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments511['useCacheHash'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression514(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array513)
					),
					$renderingContext
				);
$arguments511['addQueryStringMethod'] = 'GET';
// Rendering Array
$array515 = array();
$array516 = array (
);$array515['currentPage'] = $renderingContext->getVariableProvider()->getByPath('page.number', $array516);
$arguments511['arguments'] = $array515;

$output510 .= TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments511, $renderChildrenClosure512, $renderingContext);

$output510 .= '
									';
return $output510;
};
$arguments508['__elseClosures'][] = function() use ($renderingContext, $self) {
$output518 = '';

$output518 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure520 = function() use ($renderingContext, $self) {
$array521 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.number', $array521)]);
};
$arguments519 = array();
$arguments519['additionalAttributes'] = NULL;
$arguments519['data'] = NULL;
$arguments519['class'] = NULL;
$arguments519['dir'] = NULL;
$arguments519['id'] = NULL;
$arguments519['lang'] = NULL;
$arguments519['style'] = NULL;
$arguments519['title'] = NULL;
$arguments519['accesskey'] = NULL;
$arguments519['tabindex'] = NULL;
$arguments519['onclick'] = NULL;
$arguments519['name'] = NULL;
$arguments519['rel'] = NULL;
$arguments519['rev'] = NULL;
$arguments519['target'] = NULL;
$arguments519['useCacheHash'] = false;
$arguments519['addQueryStringMethod'] = NULL;
$arguments519['action'] = NULL;
$arguments519['arguments'] = array (
);
$arguments519['section'] = '';
$arguments519['format'] = '';
$arguments519['ajax'] = false;
$arguments519['addQueryStringMethod'] = 'GET';

$output518 .= TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments519, $renderChildrenClosure520, $renderingContext);

$output518 .= '
									';
return $output518;
};

$output507 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments508, $renderChildrenClosure509, $renderingContext);

$output507 .= '
							</li>
						';
return $output507;
};
$arguments505 = array();
$arguments505['if'] = NULL;

$output500 .= '';

$output500 .= '
					';
return $output500;
};
$arguments458 = array();
$arguments458['then'] = NULL;
$arguments458['else'] = NULL;
$arguments458['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array497 = array();
$array498 = array (
);$array497['0'] = $renderingContext->getVariableProvider()->getByPath('page.isCurrent', $array498);

$expression499 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments458['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression499(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array497)
					),
					$renderingContext
				);
$arguments458['__thenClosure'] = function() use ($renderingContext, $self) {
$output460 = '';

$output460 .= '
							<li class="current">';
$array461 = array (
);
$output460 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.number', $array461)]);

$output460 .= '</li>
						';
return $output460;
};
$arguments458['__elseClosures'][] = function() use ($renderingContext, $self) {
$output462 = '';

$output462 .= '
							<li>
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure464 = function() use ($renderingContext, $self) {
$output480 = '';

$output480 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure482 = function() use ($renderingContext, $self) {
$output483 = '';

$output483 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure485 = function() use ($renderingContext, $self) {
$array490 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.number', $array490)]);
};
$arguments484 = array();
$arguments484['additionalAttributes'] = NULL;
$arguments484['data'] = NULL;
$arguments484['class'] = NULL;
$arguments484['dir'] = NULL;
$arguments484['id'] = NULL;
$arguments484['lang'] = NULL;
$arguments484['style'] = NULL;
$arguments484['title'] = NULL;
$arguments484['accesskey'] = NULL;
$arguments484['tabindex'] = NULL;
$arguments484['onclick'] = NULL;
$arguments484['name'] = NULL;
$arguments484['rel'] = NULL;
$arguments484['rev'] = NULL;
$arguments484['target'] = NULL;
$arguments484['useCacheHash'] = false;
$arguments484['addQueryStringMethod'] = NULL;
$arguments484['action'] = NULL;
$arguments484['arguments'] = array (
);
$arguments484['section'] = '';
$arguments484['format'] = '';
$arguments484['ajax'] = false;
// Rendering Boolean node
// Rendering Array
$array486 = array();
$array486['0'] = 1;

$expression487 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments484['useCacheHash'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression487(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array486)
					),
					$renderingContext
				);
$arguments484['addQueryStringMethod'] = 'GET';
// Rendering Array
$array488 = array();
$array489 = array (
);$array488['currentPage'] = $renderingContext->getVariableProvider()->getByPath('page.number', $array489);
$arguments484['arguments'] = $array488;

$output483 .= TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments484, $renderChildrenClosure485, $renderingContext);

$output483 .= '
									';
return $output483;
};
$arguments481 = array();

$output480 .= '';

$output480 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure492 = function() use ($renderingContext, $self) {
$output493 = '';

$output493 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure495 = function() use ($renderingContext, $self) {
$array496 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.number', $array496)]);
};
$arguments494 = array();
$arguments494['additionalAttributes'] = NULL;
$arguments494['data'] = NULL;
$arguments494['class'] = NULL;
$arguments494['dir'] = NULL;
$arguments494['id'] = NULL;
$arguments494['lang'] = NULL;
$arguments494['style'] = NULL;
$arguments494['title'] = NULL;
$arguments494['accesskey'] = NULL;
$arguments494['tabindex'] = NULL;
$arguments494['onclick'] = NULL;
$arguments494['name'] = NULL;
$arguments494['rel'] = NULL;
$arguments494['rev'] = NULL;
$arguments494['target'] = NULL;
$arguments494['useCacheHash'] = false;
$arguments494['addQueryStringMethod'] = NULL;
$arguments494['action'] = NULL;
$arguments494['arguments'] = array (
);
$arguments494['section'] = '';
$arguments494['format'] = '';
$arguments494['ajax'] = false;
$arguments494['addQueryStringMethod'] = 'GET';

$output493 .= TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments494, $renderChildrenClosure495, $renderingContext);

$output493 .= '
									';
return $output493;
};
$arguments491 = array();
$arguments491['if'] = NULL;

$output480 .= '';

$output480 .= '
								';
return $output480;
};
$arguments463 = array();
$arguments463['then'] = NULL;
$arguments463['else'] = NULL;
$arguments463['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array477 = array();
$array478 = array (
);$array477['0'] = $renderingContext->getVariableProvider()->getByPath('page.number', $array478);
$array477['1'] = ' > 1';

$expression479 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments463['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression479(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array477)
					),
					$renderingContext
				);
$arguments463['__thenClosure'] = function() use ($renderingContext, $self) {
$output465 = '';

$output465 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure467 = function() use ($renderingContext, $self) {
$array472 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.number', $array472)]);
};
$arguments466 = array();
$arguments466['additionalAttributes'] = NULL;
$arguments466['data'] = NULL;
$arguments466['class'] = NULL;
$arguments466['dir'] = NULL;
$arguments466['id'] = NULL;
$arguments466['lang'] = NULL;
$arguments466['style'] = NULL;
$arguments466['title'] = NULL;
$arguments466['accesskey'] = NULL;
$arguments466['tabindex'] = NULL;
$arguments466['onclick'] = NULL;
$arguments466['name'] = NULL;
$arguments466['rel'] = NULL;
$arguments466['rev'] = NULL;
$arguments466['target'] = NULL;
$arguments466['useCacheHash'] = false;
$arguments466['addQueryStringMethod'] = NULL;
$arguments466['action'] = NULL;
$arguments466['arguments'] = array (
);
$arguments466['section'] = '';
$arguments466['format'] = '';
$arguments466['ajax'] = false;
// Rendering Boolean node
// Rendering Array
$array468 = array();
$array468['0'] = 1;

$expression469 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments466['useCacheHash'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression469(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array468)
					),
					$renderingContext
				);
$arguments466['addQueryStringMethod'] = 'GET';
// Rendering Array
$array470 = array();
$array471 = array (
);$array470['currentPage'] = $renderingContext->getVariableProvider()->getByPath('page.number', $array471);
$arguments466['arguments'] = $array470;

$output465 .= TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments466, $renderChildrenClosure467, $renderingContext);

$output465 .= '
									';
return $output465;
};
$arguments463['__elseClosures'][] = function() use ($renderingContext, $self) {
$output473 = '';

$output473 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure475 = function() use ($renderingContext, $self) {
$array476 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.number', $array476)]);
};
$arguments474 = array();
$arguments474['additionalAttributes'] = NULL;
$arguments474['data'] = NULL;
$arguments474['class'] = NULL;
$arguments474['dir'] = NULL;
$arguments474['id'] = NULL;
$arguments474['lang'] = NULL;
$arguments474['style'] = NULL;
$arguments474['title'] = NULL;
$arguments474['accesskey'] = NULL;
$arguments474['tabindex'] = NULL;
$arguments474['onclick'] = NULL;
$arguments474['name'] = NULL;
$arguments474['rel'] = NULL;
$arguments474['rev'] = NULL;
$arguments474['target'] = NULL;
$arguments474['useCacheHash'] = false;
$arguments474['addQueryStringMethod'] = NULL;
$arguments474['action'] = NULL;
$arguments474['arguments'] = array (
);
$arguments474['section'] = '';
$arguments474['format'] = '';
$arguments474['ajax'] = false;
$arguments474['addQueryStringMethod'] = 'GET';

$output473 .= TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments474, $renderChildrenClosure475, $renderingContext);

$output473 .= '
									';
return $output473;
};

$output462 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments463, $renderChildrenClosure464, $renderingContext);

$output462 .= '
							</li>
						';
return $output462;
};

$output457 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments458, $renderChildrenClosure459, $renderingContext);

$output457 .= '
				';
return $output457;
};
$arguments454 = array();
$arguments454['each'] = NULL;
$arguments454['as'] = NULL;
$arguments454['key'] = NULL;
$arguments454['reverse'] = false;
$arguments454['iteration'] = NULL;
$array456 = array (
);$arguments454['each'] = $renderingContext->getVariableProvider()->getByPath('pagination.pages', $array456);
$arguments454['as'] = 'page';

$output308 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments454, $renderChildrenClosure455, $renderingContext);

$output308 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure543 = function() use ($renderingContext, $self) {
return '
					<li>…</li>
				';
};
$arguments542 = array();
$arguments542['then'] = NULL;
$arguments542['else'] = NULL;
$arguments542['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array544 = array();
$array545 = array (
);$array544['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.hasMorePages', $array545);

$expression546 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments542['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression546(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array544)
					),
					$renderingContext
				);
$arguments542['__thenClosure'] = $renderChildrenClosure543;

$output308 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments542, $renderChildrenClosure543, $renderingContext);

$output308 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure548 = function() use ($renderingContext, $self) {
$output553 = '';

$output553 .= '
					<li class="last">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure555 = function() use ($renderingContext, $self) {
$array560 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pagination.numberOfPages', $array560)]);
};
$arguments554 = array();
$arguments554['additionalAttributes'] = NULL;
$arguments554['data'] = NULL;
$arguments554['class'] = NULL;
$arguments554['dir'] = NULL;
$arguments554['id'] = NULL;
$arguments554['lang'] = NULL;
$arguments554['style'] = NULL;
$arguments554['title'] = NULL;
$arguments554['accesskey'] = NULL;
$arguments554['tabindex'] = NULL;
$arguments554['onclick'] = NULL;
$arguments554['name'] = NULL;
$arguments554['rel'] = NULL;
$arguments554['rev'] = NULL;
$arguments554['target'] = NULL;
$arguments554['useCacheHash'] = false;
$arguments554['addQueryStringMethod'] = NULL;
$arguments554['action'] = NULL;
$arguments554['arguments'] = array (
);
$arguments554['section'] = '';
$arguments554['format'] = '';
$arguments554['ajax'] = false;
// Rendering Boolean node
// Rendering Array
$array556 = array();
$array556['0'] = 1;

$expression557 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments554['useCacheHash'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression557(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array556)
					),
					$renderingContext
				);
$arguments554['addQueryStringMethod'] = 'GET';
// Rendering Array
$array558 = array();
$array559 = array (
);$array558['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.numberOfPages', $array559);
$arguments554['arguments'] = $array558;

$output553 .= TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments554, $renderChildrenClosure555, $renderingContext);

$output553 .= '
					</li>
				';
return $output553;
};
$arguments547 = array();
$arguments547['then'] = NULL;
$arguments547['else'] = NULL;
$arguments547['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array549 = array();
$array550 = array (
);$array549['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.displayRangeEnd', $array550);
$array549['1'] = ' < ';
$array551 = array (
);$array549['2'] = $renderingContext->getVariableProvider()->getByPath('pagination.numberOfPages', $array551);

$expression552 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) < TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments547['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression552(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array549)
					),
					$renderingContext
				);
$arguments547['__thenClosure'] = $renderChildrenClosure548;

$output308 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments547, $renderChildrenClosure548, $renderingContext);

$output308 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure562 = function() use ($renderingContext, $self) {
$output566 = '';

$output566 .= '
					<li class="last next">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure568 = function() use ($renderingContext, $self) {
$output573 = '';

$output573 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure575 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments574 = array();
$arguments574['key'] = NULL;
$arguments574['id'] = NULL;
$arguments574['default'] = NULL;
$arguments574['arguments'] = NULL;
$arguments574['extensionName'] = NULL;
$arguments574['languageKey'] = NULL;
$arguments574['alternativeLanguageKeys'] = NULL;
$arguments574['key'] = 'paginate_next';

$output573 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments574, $renderChildrenClosure575, $renderingContext)]);

$output573 .= '
						';
return $output573;
};
$arguments567 = array();
$arguments567['additionalAttributes'] = NULL;
$arguments567['data'] = NULL;
$arguments567['class'] = NULL;
$arguments567['dir'] = NULL;
$arguments567['id'] = NULL;
$arguments567['lang'] = NULL;
$arguments567['style'] = NULL;
$arguments567['title'] = NULL;
$arguments567['accesskey'] = NULL;
$arguments567['tabindex'] = NULL;
$arguments567['onclick'] = NULL;
$arguments567['name'] = NULL;
$arguments567['rel'] = NULL;
$arguments567['rev'] = NULL;
$arguments567['target'] = NULL;
$arguments567['useCacheHash'] = false;
$arguments567['addQueryStringMethod'] = NULL;
$arguments567['action'] = NULL;
$arguments567['arguments'] = array (
);
$arguments567['section'] = '';
$arguments567['format'] = '';
$arguments567['ajax'] = false;
// Rendering Boolean node
// Rendering Array
$array569 = array();
$array569['0'] = 1;

$expression570 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments567['useCacheHash'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression570(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array569)
					),
					$renderingContext
				);
$arguments567['addQueryStringMethod'] = 'GET';
// Rendering Array
$array571 = array();
$array572 = array (
);$array571['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.nextPage', $array572);
$arguments567['arguments'] = $array571;

$output566 .= TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments567, $renderChildrenClosure568, $renderingContext);

$output566 .= '
					</li>
				';
return $output566;
};
$arguments561 = array();
$arguments561['then'] = NULL;
$arguments561['else'] = NULL;
$arguments561['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array563 = array();
$array564 = array (
);$array563['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.nextPage', $array564);

$expression565 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments561['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression565(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array563)
					),
					$renderingContext
				);
$arguments561['__thenClosure'] = $renderChildrenClosure562;

$output308 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments561, $renderChildrenClosure562, $renderingContext);

$output308 .= '
			</ul>
		</div>
		<div class="news-clear"></div>
	';
return $output308;
};
$arguments303 = array();
$arguments303['then'] = NULL;
$arguments303['else'] = NULL;
$arguments303['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array305 = array();
$array306 = array (
);$array305['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.numberOfPages', $array306);
$array305['1'] = ' > 1';

$expression307 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments303['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression307(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array305)
					),
					$renderingContext
				);
$arguments303['__thenClosure'] = $renderChildrenClosure304;

$output302 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments303, $renderChildrenClosure304, $renderingContext);

$output302 .= '
';
return $output302;
};
$arguments300 = array();
$arguments300['name'] = NULL;
$arguments300['name'] = 'paginator';

$output274 .= NULL;

$output274 .= '

';

return $output274;
}


}
#