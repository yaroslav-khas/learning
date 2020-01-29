<?php

class partial_Form_Field_Textarea_e1cb0dd89fe0c1d417f675a8418179e25ba6ed27 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

<div class="powermail_fieldwrap powermail_fieldwrap_type_textarea powermail_fieldwrap_';
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
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextareaViewHelper
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
$arguments8['rows'] = NULL;
$arguments8['cols'] = NULL;
$arguments8['disabled'] = NULL;
$arguments8['placeholder'] = NULL;
$arguments8['errorClass'] = 'f3-form-error';
$arguments8['readonly'] = NULL;
$arguments8['required'] = false;
$arguments8['class'] = NULL;
$arguments8['dir'] = NULL;
$arguments8['id'] = NULL;
$arguments8['lang'] = NULL;
$arguments8['style'] = NULL;
$arguments8['title'] = NULL;
$arguments8['accesskey'] = NULL;
$arguments8['tabindex'] = NULL;
$arguments8['onclick'] = NULL;
$arguments8['cols'] = 20;
$arguments8['rows'] = 5;
$output10 = '';

$output10 .= 'powermail_field_';
$array11 = array (
);
$output10 .= $renderingContext->getVariableProvider()->getByPath('field.marker', $array11);
$arguments8['id'] = $output10;
$array12 = array (
);$arguments8['property'] = $renderingContext->getVariableProvider()->getByPath('field.marker', $array12);
$array13 = array (
);$arguments8['placeholder'] = $renderingContext->getVariableProvider()->getByPath('field.placeholder', $array13);
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Misc\PrefillFieldViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments14 = array();
$arguments14['field'] = NULL;
$arguments14['mail'] = NULL;
$arguments14['default'] = NULL;
$array16 = array (
);$arguments14['field'] = $renderingContext->getVariableProvider()->getByPath('field', $array16);
$array17 = array (
);$arguments14['mail'] = $renderingContext->getVariableProvider()->getByPath('mail', $array17);
$arguments8['value'] = In2code\Powermail\ViewHelpers\Misc\PrefillFieldViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Validation\ValidationDataAttributeViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments18 = array();
$arguments18['field'] = NULL;
$arguments18['additionalAttributes'] = array (
);
$arguments18['iteration'] = NULL;
$array20 = array (
);$arguments18['field'] = $renderingContext->getVariableProvider()->getByPath('field', $array20);
$arguments8['additionalAttributes'] = In2code\Powermail\ViewHelpers\Validation\ValidationDataAttributeViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);
$output21 = '';

$output21 .= 'powermail_textarea ';
$array22 = array (
);
$output21 .= $renderingContext->getVariableProvider()->getByPath('settings.styles.framework.fieldClasses', $array22);

$output21 .= ' ';
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Validation\ErrorClassViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments23 = array();
$arguments23['field'] = NULL;
$arguments23['class'] = 'error';
$array25 = array (
);$arguments23['field'] = $renderingContext->getVariableProvider()->getByPath('field', $array25);
$arguments23['class'] = 'powermail_field_error';

$output21 .= In2code\Powermail\ViewHelpers\Validation\ErrorClassViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);
$arguments8['class'] = $output21;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextareaViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output0 .= '
		</div>
</div>
';

return $output0;
}


}
#