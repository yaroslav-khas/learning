<?php

class partial_Form_Field_Input_fd4488d50b2bc26bd240485fcfc748a276a09262 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

<div class="powermail_fieldwrap powermail_fieldwrap_type_input powermail_fieldwrap_';
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
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments8 = array();
$arguments8['additionalAttributes'] = NULL;
$arguments8['data'] = NULL;
$arguments8['name'] = NULL;
$arguments8['value'] = NULL;
$arguments8['property'] = NULL;
$arguments8['autofocus'] = NULL;
$arguments8['disabled'] = NULL;
$arguments8['maxlength'] = NULL;
$arguments8['readonly'] = NULL;
$arguments8['size'] = NULL;
$arguments8['placeholder'] = NULL;
$arguments8['pattern'] = NULL;
$arguments8['errorClass'] = 'f3-form-error';
$arguments8['class'] = NULL;
$arguments8['dir'] = NULL;
$arguments8['id'] = NULL;
$arguments8['lang'] = NULL;
$arguments8['style'] = NULL;
$arguments8['title'] = NULL;
$arguments8['accesskey'] = NULL;
$arguments8['tabindex'] = NULL;
$arguments8['onclick'] = NULL;
$arguments8['required'] = false;
$arguments8['type'] = 'text';
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Validation\FieldTypeFromValidationViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments10 = array();
$arguments10['field'] = NULL;
$array12 = array (
);$arguments10['field'] = $renderingContext->getVariableProvider()->getByPath('field', $array12);
$arguments8['type'] = In2code\Powermail\ViewHelpers\Validation\FieldTypeFromValidationViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);
$array13 = array (
);$arguments8['property'] = $renderingContext->getVariableProvider()->getByPath('field.marker', $array13);
$array14 = array (
);$arguments8['placeholder'] = $renderingContext->getVariableProvider()->getByPath('field.placeholder', $array14);
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Misc\PrefillFieldViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments15 = array();
$arguments15['field'] = NULL;
$arguments15['mail'] = NULL;
$arguments15['default'] = NULL;
$array17 = array (
);$arguments15['field'] = $renderingContext->getVariableProvider()->getByPath('field', $array17);
$array18 = array (
);$arguments15['mail'] = $renderingContext->getVariableProvider()->getByPath('mail', $array18);
$arguments8['value'] = In2code\Powermail\ViewHelpers\Misc\PrefillFieldViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);
$output19 = '';

$output19 .= 'powermail_input ';
$array20 = array (
);
$output19 .= $renderingContext->getVariableProvider()->getByPath('settings.styles.framework.fieldClasses', $array20);

$output19 .= ' ';
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Validation\ErrorClassViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments21 = array();
$arguments21['field'] = NULL;
$arguments21['class'] = 'error';
$array23 = array (
);$arguments21['field'] = $renderingContext->getVariableProvider()->getByPath('field', $array23);
$arguments21['class'] = 'powermail_field_error';

$output19 .= In2code\Powermail\ViewHelpers\Validation\ErrorClassViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);
$arguments8['class'] = $output19;
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Validation\ValidationDataAttributeViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments24 = array();
$arguments24['field'] = NULL;
$arguments24['additionalAttributes'] = array (
);
$arguments24['iteration'] = NULL;
$array26 = array (
);$arguments24['field'] = $renderingContext->getVariableProvider()->getByPath('field', $array26);
$arguments8['additionalAttributes'] = In2code\Powermail\ViewHelpers\Validation\ValidationDataAttributeViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);
$output27 = '';

$output27 .= 'powermail_field_';
$array28 = array (
);
$output27 .= $renderingContext->getVariableProvider()->getByPath('field.marker', $array28);
$arguments8['id'] = $output27;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output0 .= '
	</div>
</div>
';

return $output0;
}


}
#