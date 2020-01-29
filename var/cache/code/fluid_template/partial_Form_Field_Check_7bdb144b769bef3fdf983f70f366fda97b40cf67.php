<?php

class partial_Form_Field_Check_7bdb144b769bef3fdf983f70f366fda97b40cf67 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  'vh' => 
  array (
    0 => 'In2code\\Powermail\\ViewHelpers',
  ),
  'yourart' => 
  array (
    0 => 'Khas\\YourArt\\ViewHelpers\\Powermail',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '

<div class="powermail_fieldwrap powermail_fieldwrap_type_check powermail_fieldwrap_';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('field.marker', $array1)]);

$output0 .= ' ';
$array2 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('field.css', $array2)]);

$output0 .= ' ';
$array3 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.styles.framework.fieldAndLabelWrappingClasses', $array3)]);

$output0 .= '">
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['section'] = NULL;
$arguments4['partial'] = NULL;
$arguments4['delegate'] = NULL;
$arguments4['renderable'] = NULL;
$arguments4['arguments'] = array (
);
$arguments4['optional'] = false;
$arguments4['default'] = NULL;
$arguments4['contentAs'] = NULL;
$arguments4['debug'] = true;
$arguments4['partial'] = 'Form/FieldLabel';
$arguments4['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '

	<div class="';
$array7 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.styles.framework.fieldWrappingClasses', $array7)]);

$output0 .= '">
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$output11 = '';

$output11 .= '
			<div class="';
$array12 = array (
);
$output11 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.styles.framework.checkClasses', $array12)]);

$output11 .= ' ';
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Validation\ErrorClassViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments13 = array();
$arguments13['field'] = NULL;
$arguments13['class'] = 'error';
$array15 = array (
);$arguments13['field'] = $renderingContext->getVariableProvider()->getByPath('field', $array15);
$arguments13['class'] = 'powermail_field_error';

$output11 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [In2code\Powermail\ViewHelpers\Validation\ErrorClassViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext)]);

$output11 .= '">
				<label>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments16 = array();
$arguments16['additionalAttributes'] = NULL;
$arguments16['data'] = NULL;
$arguments16['name'] = NULL;
$arguments16['value'] = NULL;
$arguments16['property'] = NULL;
$arguments16['disabled'] = NULL;
$arguments16['errorClass'] = 'f3-form-error';
$arguments16['class'] = NULL;
$arguments16['dir'] = NULL;
$arguments16['id'] = NULL;
$arguments16['lang'] = NULL;
$arguments16['style'] = NULL;
$arguments16['title'] = NULL;
$arguments16['accesskey'] = NULL;
$arguments16['tabindex'] = NULL;
$arguments16['onclick'] = NULL;
$arguments16['checked'] = NULL;
$arguments16['multiple'] = false;
$output18 = '';
$array19 = array (
);
$output18 .= $renderingContext->getVariableProvider()->getByPath('field.marker', $array19);

$output18 .= '.';
$arguments16['property'] = $output18;
$array20 = array (
);$arguments16['value'] = $renderingContext->getVariableProvider()->getByPath('setting.value', $array20);
// Rendering Boolean node
// Rendering Array
$array21 = array();
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Misc\PrefillMultiFieldViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments22 = array();
$arguments22['field'] = NULL;
$arguments22['mail'] = NULL;
$arguments22['cycle'] = 0;
$arguments22['default'] = NULL;
$array24 = array (
);$arguments22['field'] = $renderingContext->getVariableProvider()->getByPath('field', $array24);
$array25 = array (
);$arguments22['mail'] = $renderingContext->getVariableProvider()->getByPath('mail', $array25);
$array26 = array (
);$arguments22['cycle'] = $renderingContext->getVariableProvider()->getByPath('index.cycle', $array26);
$array21['0'] = In2code\Powermail\ViewHelpers\Misc\PrefillMultiFieldViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$expression27 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments16['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression27(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array21)
					),
					$renderingContext
				);
$output28 = '';

$output28 .= 'powermail_field_';
$array29 = array (
);
$output28 .= $renderingContext->getVariableProvider()->getByPath('field.marker', $array29);

$output28 .= '_';
$array30 = array (
);
$output28 .= $renderingContext->getVariableProvider()->getByPath('index.cycle', $array30);
$arguments16['id'] = $output28;
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Validation\ValidationDataAttributeViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments31 = array();
$arguments31['field'] = NULL;
$arguments31['additionalAttributes'] = array (
);
$arguments31['iteration'] = NULL;
$array33 = array (
);$arguments31['field'] = $renderingContext->getVariableProvider()->getByPath('field', $array33);
$array34 = array (
);$arguments31['iteration'] = $renderingContext->getVariableProvider()->getByPath('index', $array34);
$arguments16['additionalAttributes'] = In2code\Powermail\ViewHelpers\Validation\ValidationDataAttributeViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);
$output35 = '';

$output35 .= 'powermail_checkbox powermail_checkbox_';
$array36 = array (
);
$output35 .= $renderingContext->getVariableProvider()->getByPath('field.uid', $array36);
$arguments16['class'] = $output35;

$output11 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output11 .= '
					';
// Rendering ViewHelper In2code\Powermail\ViewHelpers\String\EscapeLabelsViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
$array39 = array (
);return $renderingContext->getVariableProvider()->getByPath('setting.label', $array39);
};
$arguments37 = array();

$output11 .= In2code\Powermail\ViewHelpers\String\EscapeLabelsViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output11 .= '
				</label>
			</div>
		';
return $output11;
};
$arguments8 = array();
$arguments8['each'] = NULL;
$arguments8['as'] = NULL;
$arguments8['key'] = NULL;
$arguments8['reverse'] = false;
$arguments8['iteration'] = NULL;
$array10 = array (
);$arguments8['each'] = $renderingContext->getVariableProvider()->getByPath('field.modifiedSettings', $array10);
$arguments8['as'] = 'setting';
$arguments8['iteration'] = 'index';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output0 .= '

		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
$output45 = '';

$output45 .= '
			<div class="powermail_field_error_container powermail_field_error_container_';
$array46 = array (
);
$output45 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('field.marker', $array46)]);

$output45 .= '"></div>
		';
return $output45;
};
$arguments40 = array();
$arguments40['then'] = NULL;
$arguments40['else'] = NULL;
$arguments40['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array42 = array();
$array43 = array (
);$array42['0'] = $renderingContext->getVariableProvider()->getByPath('settings.validation.client', $array43);

$expression44 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments40['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression44(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array42)
					),
					$renderingContext
				);
$arguments40['__thenClosure'] = $renderChildrenClosure41;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output0 .= '
	</div>
</div>
';

return $output0;
}


}
#