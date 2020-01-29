<?php

class Form_action_form_83d815182a089ca10f9bc4fe720bfe87bdf52b45 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) 'Default';
}
public function hasLayout() {
return TRUE;
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
  'vh' => 
  array (
    0 => 'In2code\\Powermail\\ViewHelpers',
  ),
));
}

/**
 * section main
 */
public function section_b28b7af69320201d1cf206ebf28373980add1451(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output4 = '';

$output4 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments5 = array();
$arguments5['section'] = NULL;
$arguments5['partial'] = NULL;
$arguments5['delegate'] = NULL;
$arguments5['renderable'] = NULL;
$arguments5['arguments'] = array (
);
$arguments5['optional'] = false;
$arguments5['default'] = NULL;
$arguments5['contentAs'] = NULL;
$arguments5['debug'] = true;
$arguments5['partial'] = 'Misc/FlashMessages';
$arguments5['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output4 .= '
	';
return $output4;
};
$arguments1 = array();
$arguments1['map'] = NULL;
// Rendering Array
$array3 = array();
$array3['flashMessageClass'] = 'powermail_message_error';
$arguments1['map'] = $array3;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '


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
			<div class="container-fluid">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
$output86 = '';

$output86 .= '

					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
$output92 = '';

$output92 .= '
						<h3>';
$array93 = array (
);
$output92 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.title', $array93)]);

$output92 .= '</h3>
					';
return $output92;
};
$arguments87 = array();
$arguments87['then'] = NULL;
$arguments87['else'] = NULL;
$arguments87['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array89 = array();
$array90 = array (
);$array89['0'] = $renderingContext->getVariableProvider()->getByPath('form.css', $array90);
$array89['1'] = ' != \'nolabel\'';

$expression91 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != 'nolabel');};
$arguments87['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression91(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array89)
					),
					$renderingContext
				);
$arguments87['__thenClosure'] = $renderChildrenClosure88;

$output86 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext);

$output86 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments94 = array();
$arguments94['section'] = NULL;
$arguments94['partial'] = NULL;
$arguments94['delegate'] = NULL;
$arguments94['renderable'] = NULL;
$arguments94['arguments'] = array (
);
$arguments94['optional'] = false;
$arguments94['default'] = NULL;
$arguments94['contentAs'] = NULL;
$arguments94['debug'] = true;
$arguments94['partial'] = 'Misc/FormError';
$arguments94['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output86 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments94, $renderChildrenClosure95, $renderingContext);

$output86 .= '

					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
$output100 = '';

$output100 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments101 = array();
$arguments101['section'] = NULL;
$arguments101['partial'] = NULL;
$arguments101['delegate'] = NULL;
$arguments101['renderable'] = NULL;
$arguments101['arguments'] = array (
);
$arguments101['optional'] = false;
$arguments101['default'] = NULL;
$arguments101['contentAs'] = NULL;
$arguments101['debug'] = true;
$arguments101['partial'] = 'Form/Page';
$arguments101['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output100 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext);

$output100 .= '
					';
return $output100;
};
$arguments97 = array();
$arguments97['each'] = NULL;
$arguments97['as'] = NULL;
$arguments97['key'] = NULL;
$arguments97['reverse'] = false;
$arguments97['iteration'] = NULL;
$array99 = array (
);$arguments97['each'] = $renderingContext->getVariableProvider()->getByPath('form.pages', $array99);
$arguments97['as'] = 'page';

$output86 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext);

$output86 .= '

					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments104 = array();
$arguments104['additionalAttributes'] = NULL;
$arguments104['data'] = NULL;
$arguments104['name'] = NULL;
$arguments104['value'] = NULL;
$arguments104['property'] = NULL;
$arguments104['class'] = NULL;
$arguments104['dir'] = NULL;
$arguments104['id'] = NULL;
$arguments104['lang'] = NULL;
$arguments104['style'] = NULL;
$arguments104['title'] = NULL;
$arguments104['accesskey'] = NULL;
$arguments104['tabindex'] = NULL;
$arguments104['onclick'] = NULL;
$arguments104['name'] = 'mail[form]';
$array106 = array (
);$arguments104['value'] = $renderingContext->getVariableProvider()->getByPath('form.uid', $array106);
$arguments104['class'] = 'powermail_form_uid';

$output86 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext);

$output86 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments107 = array();
$arguments107['section'] = NULL;
$arguments107['partial'] = NULL;
$arguments107['delegate'] = NULL;
$arguments107['renderable'] = NULL;
$arguments107['arguments'] = array (
);
$arguments107['optional'] = false;
$arguments107['default'] = NULL;
$arguments107['contentAs'] = NULL;
$arguments107['debug'] = true;
$arguments107['partial'] = 'Misc/HoneyPod';
// Rendering Array
$array109 = array();
$array110 = array (
);$array109['form'] = $renderingContext->getVariableProvider()->getByPath('form', $array110);
$arguments107['arguments'] = $array109;

$output86 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);

$output86 .= '
				';
return $output86;
};
$arguments66 = array();
$arguments66['additionalAttributes'] = NULL;
$arguments66['data'] = NULL;
$arguments66['action'] = NULL;
$arguments66['arguments'] = array (
);
$arguments66['controller'] = NULL;
$arguments66['extensionName'] = NULL;
$arguments66['pluginName'] = NULL;
$arguments66['pageUid'] = NULL;
$arguments66['object'] = NULL;
$arguments66['pageType'] = 0;
$arguments66['noCache'] = false;
$arguments66['noCacheHash'] = false;
$arguments66['section'] = '';
$arguments66['format'] = '';
$arguments66['additionalParams'] = array (
);
$arguments66['absolute'] = false;
$arguments66['addQueryString'] = false;
$arguments66['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments66['addQueryStringMethod'] = 'GET';
$arguments66['fieldNamePrefix'] = NULL;
$arguments66['actionUri'] = NULL;
$arguments66['objectName'] = NULL;
$arguments66['hiddenFieldClassName'] = NULL;
$arguments66['enctype'] = NULL;
$arguments66['method'] = NULL;
$arguments66['name'] = NULL;
$arguments66['onreset'] = NULL;
$arguments66['onsubmit'] = NULL;
$arguments66['target'] = NULL;
$arguments66['novalidate'] = NULL;
$arguments66['class'] = NULL;
$arguments66['dir'] = NULL;
$arguments66['id'] = NULL;
$arguments66['lang'] = NULL;
$arguments66['style'] = NULL;
$arguments66['title'] = NULL;
$arguments66['accesskey'] = NULL;
$arguments66['tabindex'] = NULL;
$arguments66['onclick'] = NULL;
$array68 = array (
);$arguments66['action'] = $renderingContext->getVariableProvider()->getByPath('action', $array68);
$output69 = '';

$output69 .= 'c';
$array70 = array (
);
$output69 .= $renderingContext->getVariableProvider()->getByPath('ttContentData.uid', $array70);
$arguments66['section'] = $output69;
$arguments66['name'] = 'field';
$arguments66['enctype'] = 'multipart/form-data';
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Validation\EnableParsleyAndAjaxViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments71 = array();
$arguments71['form'] = NULL;
$arguments71['additionalAttributes'] = array (
);
$array73 = array (
);$arguments71['form'] = $renderingContext->getVariableProvider()->getByPath('form', $array73);
$arguments66['additionalAttributes'] = In2code\Powermail\ViewHelpers\Validation\EnableParsleyAndAjaxViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);
// Rendering Boolean node
// Rendering Array
$array74 = array();
$array75 = array (
);$array74['0'] = $renderingContext->getVariableProvider()->getByPath('settings.misc.addQueryString', $array75);

$expression76 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments66['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression76(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array74)
					),
					$renderingContext
				);
$output77 = '';

$output77 .= 'powermail_form powermail_form_';
$array78 = array (
);
$output77 .= $renderingContext->getVariableProvider()->getByPath('form.uid', $array78);

$output77 .= ' ';
$array79 = array (
);
$output77 .= $renderingContext->getVariableProvider()->getByPath('form.css', $array79);

$output77 .= ' ';
$array80 = array (
);
$output77 .= $renderingContext->getVariableProvider()->getByPath('settings.styles.framework.formClasses', $array80);

$output77 .= ' ';
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Misc\MorestepClassViewHelper
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments81 = array();
$arguments81['activate'] = NULL;
$arguments81['class'] = 'powermail_morestep';
// Rendering Boolean node
// Rendering Array
$array83 = array();
$array84 = array (
);$array83['0'] = $renderingContext->getVariableProvider()->getByPath('settings.main.moresteps', $array84);

$expression85 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments81['activate'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression85(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array83)
					),
					$renderingContext
				);

$output77 .= In2code\Powermail\ViewHelpers\Misc\MorestepClassViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);
$arguments66['class'] = $output77;

$output65 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output65 .= '
			</div>
		';
return $output65;
};
$arguments63 = array();

$output62 .= '';

$output62 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
$output113 = '';

$output113 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments114 = array();
$arguments114['key'] = NULL;
$arguments114['id'] = NULL;
$arguments114['default'] = NULL;
$arguments114['arguments'] = NULL;
$arguments114['extensionName'] = NULL;
$arguments114['languageKey'] = NULL;
$arguments114['alternativeLanguageKeys'] = NULL;
$arguments114['key'] = 'error_no_form';

$output113 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext)]);

$output113 .= '
		';
return $output113;
};
$arguments111 = array();
$arguments111['if'] = NULL;

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
);$array59['0'] = $renderingContext->getVariableProvider()->getByPath('form', $array60);

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
			<div class="container-fluid">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$output31 = '';

$output31 .= '

					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
$output37 = '';

$output37 .= '
						<h3>';
$array38 = array (
);
$output37 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.title', $array38)]);

$output37 .= '</h3>
					';
return $output37;
};
$arguments32 = array();
$arguments32['then'] = NULL;
$arguments32['else'] = NULL;
$arguments32['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array34 = array();
$array35 = array (
);$array34['0'] = $renderingContext->getVariableProvider()->getByPath('form.css', $array35);
$array34['1'] = ' != \'nolabel\'';

$expression36 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != 'nolabel');};
$arguments32['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression36(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array34)
					),
					$renderingContext
				);
$arguments32['__thenClosure'] = $renderChildrenClosure33;

$output31 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output31 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments39 = array();
$arguments39['section'] = NULL;
$arguments39['partial'] = NULL;
$arguments39['delegate'] = NULL;
$arguments39['renderable'] = NULL;
$arguments39['arguments'] = array (
);
$arguments39['optional'] = false;
$arguments39['default'] = NULL;
$arguments39['contentAs'] = NULL;
$arguments39['debug'] = true;
$arguments39['partial'] = 'Misc/FormError';
$arguments39['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output31 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output31 .= '

					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
$output45 = '';

$output45 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments46 = array();
$arguments46['section'] = NULL;
$arguments46['partial'] = NULL;
$arguments46['delegate'] = NULL;
$arguments46['renderable'] = NULL;
$arguments46['arguments'] = array (
);
$arguments46['optional'] = false;
$arguments46['default'] = NULL;
$arguments46['contentAs'] = NULL;
$arguments46['debug'] = true;
$arguments46['partial'] = 'Form/Page';
$arguments46['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output45 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);

$output45 .= '
					';
return $output45;
};
$arguments42 = array();
$arguments42['each'] = NULL;
$arguments42['as'] = NULL;
$arguments42['key'] = NULL;
$arguments42['reverse'] = false;
$arguments42['iteration'] = NULL;
$array44 = array (
);$arguments42['each'] = $renderingContext->getVariableProvider()->getByPath('form.pages', $array44);
$arguments42['as'] = 'page';

$output31 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output31 .= '

					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments49 = array();
$arguments49['additionalAttributes'] = NULL;
$arguments49['data'] = NULL;
$arguments49['name'] = NULL;
$arguments49['value'] = NULL;
$arguments49['property'] = NULL;
$arguments49['class'] = NULL;
$arguments49['dir'] = NULL;
$arguments49['id'] = NULL;
$arguments49['lang'] = NULL;
$arguments49['style'] = NULL;
$arguments49['title'] = NULL;
$arguments49['accesskey'] = NULL;
$arguments49['tabindex'] = NULL;
$arguments49['onclick'] = NULL;
$arguments49['name'] = 'mail[form]';
$array51 = array (
);$arguments49['value'] = $renderingContext->getVariableProvider()->getByPath('form.uid', $array51);
$arguments49['class'] = 'powermail_form_uid';

$output31 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output31 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments52 = array();
$arguments52['section'] = NULL;
$arguments52['partial'] = NULL;
$arguments52['delegate'] = NULL;
$arguments52['renderable'] = NULL;
$arguments52['arguments'] = array (
);
$arguments52['optional'] = false;
$arguments52['default'] = NULL;
$arguments52['contentAs'] = NULL;
$arguments52['debug'] = true;
$arguments52['partial'] = 'Misc/HoneyPod';
// Rendering Array
$array54 = array();
$array55 = array (
);$array54['form'] = $renderingContext->getVariableProvider()->getByPath('form', $array55);
$arguments52['arguments'] = $array54;

$output31 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output31 .= '
				';
return $output31;
};
$arguments11 = array();
$arguments11['additionalAttributes'] = NULL;
$arguments11['data'] = NULL;
$arguments11['action'] = NULL;
$arguments11['arguments'] = array (
);
$arguments11['controller'] = NULL;
$arguments11['extensionName'] = NULL;
$arguments11['pluginName'] = NULL;
$arguments11['pageUid'] = NULL;
$arguments11['object'] = NULL;
$arguments11['pageType'] = 0;
$arguments11['noCache'] = false;
$arguments11['noCacheHash'] = false;
$arguments11['section'] = '';
$arguments11['format'] = '';
$arguments11['additionalParams'] = array (
);
$arguments11['absolute'] = false;
$arguments11['addQueryString'] = false;
$arguments11['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments11['addQueryStringMethod'] = 'GET';
$arguments11['fieldNamePrefix'] = NULL;
$arguments11['actionUri'] = NULL;
$arguments11['objectName'] = NULL;
$arguments11['hiddenFieldClassName'] = NULL;
$arguments11['enctype'] = NULL;
$arguments11['method'] = NULL;
$arguments11['name'] = NULL;
$arguments11['onreset'] = NULL;
$arguments11['onsubmit'] = NULL;
$arguments11['target'] = NULL;
$arguments11['novalidate'] = NULL;
$arguments11['class'] = NULL;
$arguments11['dir'] = NULL;
$arguments11['id'] = NULL;
$arguments11['lang'] = NULL;
$arguments11['style'] = NULL;
$arguments11['title'] = NULL;
$arguments11['accesskey'] = NULL;
$arguments11['tabindex'] = NULL;
$arguments11['onclick'] = NULL;
$array13 = array (
);$arguments11['action'] = $renderingContext->getVariableProvider()->getByPath('action', $array13);
$output14 = '';

$output14 .= 'c';
$array15 = array (
);
$output14 .= $renderingContext->getVariableProvider()->getByPath('ttContentData.uid', $array15);
$arguments11['section'] = $output14;
$arguments11['name'] = 'field';
$arguments11['enctype'] = 'multipart/form-data';
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Validation\EnableParsleyAndAjaxViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments16 = array();
$arguments16['form'] = NULL;
$arguments16['additionalAttributes'] = array (
);
$array18 = array (
);$arguments16['form'] = $renderingContext->getVariableProvider()->getByPath('form', $array18);
$arguments11['additionalAttributes'] = In2code\Powermail\ViewHelpers\Validation\EnableParsleyAndAjaxViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);
// Rendering Boolean node
// Rendering Array
$array19 = array();
$array20 = array (
);$array19['0'] = $renderingContext->getVariableProvider()->getByPath('settings.misc.addQueryString', $array20);

$expression21 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments11['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression21(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array19)
					),
					$renderingContext
				);
$output22 = '';

$output22 .= 'powermail_form powermail_form_';
$array23 = array (
);
$output22 .= $renderingContext->getVariableProvider()->getByPath('form.uid', $array23);

$output22 .= ' ';
$array24 = array (
);
$output22 .= $renderingContext->getVariableProvider()->getByPath('form.css', $array24);

$output22 .= ' ';
$array25 = array (
);
$output22 .= $renderingContext->getVariableProvider()->getByPath('settings.styles.framework.formClasses', $array25);

$output22 .= ' ';
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Misc\MorestepClassViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments26 = array();
$arguments26['activate'] = NULL;
$arguments26['class'] = 'powermail_morestep';
// Rendering Boolean node
// Rendering Array
$array28 = array();
$array29 = array (
);$array28['0'] = $renderingContext->getVariableProvider()->getByPath('settings.main.moresteps', $array29);

$expression30 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments26['activate'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression30(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array28)
					),
					$renderingContext
				);

$output22 .= In2code\Powermail\ViewHelpers\Misc\MorestepClassViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);
$arguments11['class'] = $output22;

$output10 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output10 .= '
			</div>
		';
return $output10;
};
$arguments8['__elseClosures'][] = function() use ($renderingContext, $self) {
$output56 = '';

$output56 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments57 = array();
$arguments57['key'] = NULL;
$arguments57['id'] = NULL;
$arguments57['default'] = NULL;
$arguments57['arguments'] = NULL;
$arguments57['extensionName'] = NULL;
$arguments57['languageKey'] = NULL;
$arguments57['alternativeLanguageKeys'] = NULL;
$arguments57['key'] = 'error_no_form';

$output56 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext)]);

$output56 .= '
		';
return $output56;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output0 .= '

';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output116 = '';

$output116 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments117 = array();
$arguments117['name'] = NULL;
$arguments117['name'] = 'Default';

$output116 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output116 .= '

Render Powermail Form
';
$array119 = array (
);
$output116 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form', $array119)]);

$output116 .= ' 			All Forms with their Pages and their Fields
';
$array120 = array (
);
$output116 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('ttContentData', $array120)]);

$output116 .= '		All values from content element with plugin


';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
$output123 = '';

$output123 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
$output127 = '';

$output127 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments128 = array();
$arguments128['section'] = NULL;
$arguments128['partial'] = NULL;
$arguments128['delegate'] = NULL;
$arguments128['renderable'] = NULL;
$arguments128['arguments'] = array (
);
$arguments128['optional'] = false;
$arguments128['default'] = NULL;
$arguments128['contentAs'] = NULL;
$arguments128['debug'] = true;
$arguments128['partial'] = 'Misc/FlashMessages';
$arguments128['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output127 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments128, $renderChildrenClosure129, $renderingContext);

$output127 .= '
	';
return $output127;
};
$arguments124 = array();
$arguments124['map'] = NULL;
// Rendering Array
$array126 = array();
$array126['flashMessageClass'] = 'powermail_message_error';
$arguments124['map'] = $array126;

$output123 .= TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments124, $renderChildrenClosure125, $renderingContext);

$output123 .= '


	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure132 = function() use ($renderingContext, $self) {
$output185 = '';

$output185 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure187 = function() use ($renderingContext, $self) {
$output188 = '';

$output188 .= '
			<div class="container-fluid">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure190 = function() use ($renderingContext, $self) {
$output209 = '';

$output209 .= '

					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure211 = function() use ($renderingContext, $self) {
$output215 = '';

$output215 .= '
						<h3>';
$array216 = array (
);
$output215 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.title', $array216)]);

$output215 .= '</h3>
					';
return $output215;
};
$arguments210 = array();
$arguments210['then'] = NULL;
$arguments210['else'] = NULL;
$arguments210['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array212 = array();
$array213 = array (
);$array212['0'] = $renderingContext->getVariableProvider()->getByPath('form.css', $array213);
$array212['1'] = ' != \'nolabel\'';

$expression214 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != 'nolabel');};
$arguments210['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression214(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array212)
					),
					$renderingContext
				);
$arguments210['__thenClosure'] = $renderChildrenClosure211;

$output209 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments210, $renderChildrenClosure211, $renderingContext);

$output209 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure218 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments217 = array();
$arguments217['section'] = NULL;
$arguments217['partial'] = NULL;
$arguments217['delegate'] = NULL;
$arguments217['renderable'] = NULL;
$arguments217['arguments'] = array (
);
$arguments217['optional'] = false;
$arguments217['default'] = NULL;
$arguments217['contentAs'] = NULL;
$arguments217['debug'] = true;
$arguments217['partial'] = 'Misc/FormError';
$arguments217['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output209 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments217, $renderChildrenClosure218, $renderingContext);

$output209 .= '

					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure221 = function() use ($renderingContext, $self) {
$output223 = '';

$output223 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure225 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments224 = array();
$arguments224['section'] = NULL;
$arguments224['partial'] = NULL;
$arguments224['delegate'] = NULL;
$arguments224['renderable'] = NULL;
$arguments224['arguments'] = array (
);
$arguments224['optional'] = false;
$arguments224['default'] = NULL;
$arguments224['contentAs'] = NULL;
$arguments224['debug'] = true;
$arguments224['partial'] = 'Form/Page';
$arguments224['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output223 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments224, $renderChildrenClosure225, $renderingContext);

$output223 .= '
					';
return $output223;
};
$arguments220 = array();
$arguments220['each'] = NULL;
$arguments220['as'] = NULL;
$arguments220['key'] = NULL;
$arguments220['reverse'] = false;
$arguments220['iteration'] = NULL;
$array222 = array (
);$arguments220['each'] = $renderingContext->getVariableProvider()->getByPath('form.pages', $array222);
$arguments220['as'] = 'page';

$output209 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments220, $renderChildrenClosure221, $renderingContext);

$output209 .= '

					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure228 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments227 = array();
$arguments227['additionalAttributes'] = NULL;
$arguments227['data'] = NULL;
$arguments227['name'] = NULL;
$arguments227['value'] = NULL;
$arguments227['property'] = NULL;
$arguments227['class'] = NULL;
$arguments227['dir'] = NULL;
$arguments227['id'] = NULL;
$arguments227['lang'] = NULL;
$arguments227['style'] = NULL;
$arguments227['title'] = NULL;
$arguments227['accesskey'] = NULL;
$arguments227['tabindex'] = NULL;
$arguments227['onclick'] = NULL;
$arguments227['name'] = 'mail[form]';
$array229 = array (
);$arguments227['value'] = $renderingContext->getVariableProvider()->getByPath('form.uid', $array229);
$arguments227['class'] = 'powermail_form_uid';

$output209 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments227, $renderChildrenClosure228, $renderingContext);

$output209 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure231 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments230 = array();
$arguments230['section'] = NULL;
$arguments230['partial'] = NULL;
$arguments230['delegate'] = NULL;
$arguments230['renderable'] = NULL;
$arguments230['arguments'] = array (
);
$arguments230['optional'] = false;
$arguments230['default'] = NULL;
$arguments230['contentAs'] = NULL;
$arguments230['debug'] = true;
$arguments230['partial'] = 'Misc/HoneyPod';
// Rendering Array
$array232 = array();
$array233 = array (
);$array232['form'] = $renderingContext->getVariableProvider()->getByPath('form', $array233);
$arguments230['arguments'] = $array232;

$output209 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments230, $renderChildrenClosure231, $renderingContext);

$output209 .= '
				';
return $output209;
};
$arguments189 = array();
$arguments189['additionalAttributes'] = NULL;
$arguments189['data'] = NULL;
$arguments189['action'] = NULL;
$arguments189['arguments'] = array (
);
$arguments189['controller'] = NULL;
$arguments189['extensionName'] = NULL;
$arguments189['pluginName'] = NULL;
$arguments189['pageUid'] = NULL;
$arguments189['object'] = NULL;
$arguments189['pageType'] = 0;
$arguments189['noCache'] = false;
$arguments189['noCacheHash'] = false;
$arguments189['section'] = '';
$arguments189['format'] = '';
$arguments189['additionalParams'] = array (
);
$arguments189['absolute'] = false;
$arguments189['addQueryString'] = false;
$arguments189['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments189['addQueryStringMethod'] = 'GET';
$arguments189['fieldNamePrefix'] = NULL;
$arguments189['actionUri'] = NULL;
$arguments189['objectName'] = NULL;
$arguments189['hiddenFieldClassName'] = NULL;
$arguments189['enctype'] = NULL;
$arguments189['method'] = NULL;
$arguments189['name'] = NULL;
$arguments189['onreset'] = NULL;
$arguments189['onsubmit'] = NULL;
$arguments189['target'] = NULL;
$arguments189['novalidate'] = NULL;
$arguments189['class'] = NULL;
$arguments189['dir'] = NULL;
$arguments189['id'] = NULL;
$arguments189['lang'] = NULL;
$arguments189['style'] = NULL;
$arguments189['title'] = NULL;
$arguments189['accesskey'] = NULL;
$arguments189['tabindex'] = NULL;
$arguments189['onclick'] = NULL;
$array191 = array (
);$arguments189['action'] = $renderingContext->getVariableProvider()->getByPath('action', $array191);
$output192 = '';

$output192 .= 'c';
$array193 = array (
);
$output192 .= $renderingContext->getVariableProvider()->getByPath('ttContentData.uid', $array193);
$arguments189['section'] = $output192;
$arguments189['name'] = 'field';
$arguments189['enctype'] = 'multipart/form-data';
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Validation\EnableParsleyAndAjaxViewHelper
$renderChildrenClosure195 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments194 = array();
$arguments194['form'] = NULL;
$arguments194['additionalAttributes'] = array (
);
$array196 = array (
);$arguments194['form'] = $renderingContext->getVariableProvider()->getByPath('form', $array196);
$arguments189['additionalAttributes'] = In2code\Powermail\ViewHelpers\Validation\EnableParsleyAndAjaxViewHelper::renderStatic($arguments194, $renderChildrenClosure195, $renderingContext);
// Rendering Boolean node
// Rendering Array
$array197 = array();
$array198 = array (
);$array197['0'] = $renderingContext->getVariableProvider()->getByPath('settings.misc.addQueryString', $array198);

$expression199 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments189['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression199(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array197)
					),
					$renderingContext
				);
$output200 = '';

$output200 .= 'powermail_form powermail_form_';
$array201 = array (
);
$output200 .= $renderingContext->getVariableProvider()->getByPath('form.uid', $array201);

$output200 .= ' ';
$array202 = array (
);
$output200 .= $renderingContext->getVariableProvider()->getByPath('form.css', $array202);

$output200 .= ' ';
$array203 = array (
);
$output200 .= $renderingContext->getVariableProvider()->getByPath('settings.styles.framework.formClasses', $array203);

$output200 .= ' ';
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Misc\MorestepClassViewHelper
$renderChildrenClosure205 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments204 = array();
$arguments204['activate'] = NULL;
$arguments204['class'] = 'powermail_morestep';
// Rendering Boolean node
// Rendering Array
$array206 = array();
$array207 = array (
);$array206['0'] = $renderingContext->getVariableProvider()->getByPath('settings.main.moresteps', $array207);

$expression208 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments204['activate'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression208(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array206)
					),
					$renderingContext
				);

$output200 .= In2code\Powermail\ViewHelpers\Misc\MorestepClassViewHelper::renderStatic($arguments204, $renderChildrenClosure205, $renderingContext);
$arguments189['class'] = $output200;

$output188 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments189, $renderChildrenClosure190, $renderingContext);

$output188 .= '
			</div>
		';
return $output188;
};
$arguments186 = array();

$output185 .= '';

$output185 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure235 = function() use ($renderingContext, $self) {
$output236 = '';

$output236 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure238 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments237 = array();
$arguments237['key'] = NULL;
$arguments237['id'] = NULL;
$arguments237['default'] = NULL;
$arguments237['arguments'] = NULL;
$arguments237['extensionName'] = NULL;
$arguments237['languageKey'] = NULL;
$arguments237['alternativeLanguageKeys'] = NULL;
$arguments237['key'] = 'error_no_form';

$output236 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments237, $renderChildrenClosure238, $renderingContext)]);

$output236 .= '
		';
return $output236;
};
$arguments234 = array();
$arguments234['if'] = NULL;

$output185 .= '';

$output185 .= '
	';
return $output185;
};
$arguments131 = array();
$arguments131['then'] = NULL;
$arguments131['else'] = NULL;
$arguments131['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array182 = array();
$array183 = array (
);$array182['0'] = $renderingContext->getVariableProvider()->getByPath('form', $array183);

$expression184 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments131['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression184(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array182)
					),
					$renderingContext
				);
$arguments131['__thenClosure'] = function() use ($renderingContext, $self) {
$output133 = '';

$output133 .= '
			<div class="container-fluid">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
$output154 = '';

$output154 .= '

					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure156 = function() use ($renderingContext, $self) {
$output160 = '';

$output160 .= '
						<h3>';
$array161 = array (
);
$output160 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.title', $array161)]);

$output160 .= '</h3>
					';
return $output160;
};
$arguments155 = array();
$arguments155['then'] = NULL;
$arguments155['else'] = NULL;
$arguments155['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array157 = array();
$array158 = array (
);$array157['0'] = $renderingContext->getVariableProvider()->getByPath('form.css', $array158);
$array157['1'] = ' != \'nolabel\'';

$expression159 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != 'nolabel');};
$arguments155['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression159(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array157)
					),
					$renderingContext
				);
$arguments155['__thenClosure'] = $renderChildrenClosure156;

$output154 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments155, $renderChildrenClosure156, $renderingContext);

$output154 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure163 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments162 = array();
$arguments162['section'] = NULL;
$arguments162['partial'] = NULL;
$arguments162['delegate'] = NULL;
$arguments162['renderable'] = NULL;
$arguments162['arguments'] = array (
);
$arguments162['optional'] = false;
$arguments162['default'] = NULL;
$arguments162['contentAs'] = NULL;
$arguments162['debug'] = true;
$arguments162['partial'] = 'Misc/FormError';
$arguments162['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output154 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments162, $renderChildrenClosure163, $renderingContext);

$output154 .= '

					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure166 = function() use ($renderingContext, $self) {
$output168 = '';

$output168 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure170 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments169 = array();
$arguments169['section'] = NULL;
$arguments169['partial'] = NULL;
$arguments169['delegate'] = NULL;
$arguments169['renderable'] = NULL;
$arguments169['arguments'] = array (
);
$arguments169['optional'] = false;
$arguments169['default'] = NULL;
$arguments169['contentAs'] = NULL;
$arguments169['debug'] = true;
$arguments169['partial'] = 'Form/Page';
$arguments169['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output168 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments169, $renderChildrenClosure170, $renderingContext);

$output168 .= '
					';
return $output168;
};
$arguments165 = array();
$arguments165['each'] = NULL;
$arguments165['as'] = NULL;
$arguments165['key'] = NULL;
$arguments165['reverse'] = false;
$arguments165['iteration'] = NULL;
$array167 = array (
);$arguments165['each'] = $renderingContext->getVariableProvider()->getByPath('form.pages', $array167);
$arguments165['as'] = 'page';

$output154 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments165, $renderChildrenClosure166, $renderingContext);

$output154 .= '

					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure173 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments172 = array();
$arguments172['additionalAttributes'] = NULL;
$arguments172['data'] = NULL;
$arguments172['name'] = NULL;
$arguments172['value'] = NULL;
$arguments172['property'] = NULL;
$arguments172['class'] = NULL;
$arguments172['dir'] = NULL;
$arguments172['id'] = NULL;
$arguments172['lang'] = NULL;
$arguments172['style'] = NULL;
$arguments172['title'] = NULL;
$arguments172['accesskey'] = NULL;
$arguments172['tabindex'] = NULL;
$arguments172['onclick'] = NULL;
$arguments172['name'] = 'mail[form]';
$array174 = array (
);$arguments172['value'] = $renderingContext->getVariableProvider()->getByPath('form.uid', $array174);
$arguments172['class'] = 'powermail_form_uid';

$output154 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments172, $renderChildrenClosure173, $renderingContext);

$output154 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure176 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments175 = array();
$arguments175['section'] = NULL;
$arguments175['partial'] = NULL;
$arguments175['delegate'] = NULL;
$arguments175['renderable'] = NULL;
$arguments175['arguments'] = array (
);
$arguments175['optional'] = false;
$arguments175['default'] = NULL;
$arguments175['contentAs'] = NULL;
$arguments175['debug'] = true;
$arguments175['partial'] = 'Misc/HoneyPod';
// Rendering Array
$array177 = array();
$array178 = array (
);$array177['form'] = $renderingContext->getVariableProvider()->getByPath('form', $array178);
$arguments175['arguments'] = $array177;

$output154 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments175, $renderChildrenClosure176, $renderingContext);

$output154 .= '
				';
return $output154;
};
$arguments134 = array();
$arguments134['additionalAttributes'] = NULL;
$arguments134['data'] = NULL;
$arguments134['action'] = NULL;
$arguments134['arguments'] = array (
);
$arguments134['controller'] = NULL;
$arguments134['extensionName'] = NULL;
$arguments134['pluginName'] = NULL;
$arguments134['pageUid'] = NULL;
$arguments134['object'] = NULL;
$arguments134['pageType'] = 0;
$arguments134['noCache'] = false;
$arguments134['noCacheHash'] = false;
$arguments134['section'] = '';
$arguments134['format'] = '';
$arguments134['additionalParams'] = array (
);
$arguments134['absolute'] = false;
$arguments134['addQueryString'] = false;
$arguments134['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments134['addQueryStringMethod'] = 'GET';
$arguments134['fieldNamePrefix'] = NULL;
$arguments134['actionUri'] = NULL;
$arguments134['objectName'] = NULL;
$arguments134['hiddenFieldClassName'] = NULL;
$arguments134['enctype'] = NULL;
$arguments134['method'] = NULL;
$arguments134['name'] = NULL;
$arguments134['onreset'] = NULL;
$arguments134['onsubmit'] = NULL;
$arguments134['target'] = NULL;
$arguments134['novalidate'] = NULL;
$arguments134['class'] = NULL;
$arguments134['dir'] = NULL;
$arguments134['id'] = NULL;
$arguments134['lang'] = NULL;
$arguments134['style'] = NULL;
$arguments134['title'] = NULL;
$arguments134['accesskey'] = NULL;
$arguments134['tabindex'] = NULL;
$arguments134['onclick'] = NULL;
$array136 = array (
);$arguments134['action'] = $renderingContext->getVariableProvider()->getByPath('action', $array136);
$output137 = '';

$output137 .= 'c';
$array138 = array (
);
$output137 .= $renderingContext->getVariableProvider()->getByPath('ttContentData.uid', $array138);
$arguments134['section'] = $output137;
$arguments134['name'] = 'field';
$arguments134['enctype'] = 'multipart/form-data';
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Validation\EnableParsleyAndAjaxViewHelper
$renderChildrenClosure140 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments139 = array();
$arguments139['form'] = NULL;
$arguments139['additionalAttributes'] = array (
);
$array141 = array (
);$arguments139['form'] = $renderingContext->getVariableProvider()->getByPath('form', $array141);
$arguments134['additionalAttributes'] = In2code\Powermail\ViewHelpers\Validation\EnableParsleyAndAjaxViewHelper::renderStatic($arguments139, $renderChildrenClosure140, $renderingContext);
// Rendering Boolean node
// Rendering Array
$array142 = array();
$array143 = array (
);$array142['0'] = $renderingContext->getVariableProvider()->getByPath('settings.misc.addQueryString', $array143);

$expression144 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments134['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression144(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array142)
					),
					$renderingContext
				);
$output145 = '';

$output145 .= 'powermail_form powermail_form_';
$array146 = array (
);
$output145 .= $renderingContext->getVariableProvider()->getByPath('form.uid', $array146);

$output145 .= ' ';
$array147 = array (
);
$output145 .= $renderingContext->getVariableProvider()->getByPath('form.css', $array147);

$output145 .= ' ';
$array148 = array (
);
$output145 .= $renderingContext->getVariableProvider()->getByPath('settings.styles.framework.formClasses', $array148);

$output145 .= ' ';
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Misc\MorestepClassViewHelper
$renderChildrenClosure150 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments149 = array();
$arguments149['activate'] = NULL;
$arguments149['class'] = 'powermail_morestep';
// Rendering Boolean node
// Rendering Array
$array151 = array();
$array152 = array (
);$array151['0'] = $renderingContext->getVariableProvider()->getByPath('settings.main.moresteps', $array152);

$expression153 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments149['activate'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression153(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array151)
					),
					$renderingContext
				);

$output145 .= In2code\Powermail\ViewHelpers\Misc\MorestepClassViewHelper::renderStatic($arguments149, $renderChildrenClosure150, $renderingContext);
$arguments134['class'] = $output145;

$output133 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments134, $renderChildrenClosure135, $renderingContext);

$output133 .= '
			</div>
		';
return $output133;
};
$arguments131['__elseClosures'][] = function() use ($renderingContext, $self) {
$output179 = '';

$output179 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure181 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments180 = array();
$arguments180['key'] = NULL;
$arguments180['id'] = NULL;
$arguments180['default'] = NULL;
$arguments180['arguments'] = NULL;
$arguments180['extensionName'] = NULL;
$arguments180['languageKey'] = NULL;
$arguments180['alternativeLanguageKeys'] = NULL;
$arguments180['key'] = 'error_no_form';

$output179 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments180, $renderChildrenClosure181, $renderingContext)]);

$output179 .= '
		';
return $output179;
};

$output123 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments131, $renderChildrenClosure132, $renderingContext);

$output123 .= '

';
return $output123;
};
$arguments121 = array();
$arguments121['name'] = NULL;
$arguments121['name'] = 'main';

$output116 .= NULL;

$output116 .= '
';

return $output116;
}


}
#