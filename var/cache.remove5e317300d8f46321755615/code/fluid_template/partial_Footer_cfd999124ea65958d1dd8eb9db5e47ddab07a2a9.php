<?php

class partial_Footer_cfd999124ea65958d1dd8eb9db5e47ddab07a2a9 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<footer>
    <div class="container">
        <div class="row d-flex justify-content-between ">
            <div class="col-md-4 text-center footer-left">
                <h6 class="text-uppercase">Company name</h6>
                <div class="align-content-center">
                    <a class="logo" href="#">
                        <img src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['src'] = NULL;
$arguments1['treatIdAsReference'] = false;
$arguments1['image'] = NULL;
$arguments1['crop'] = NULL;
$arguments1['cropVariant'] = 'default';
$arguments1['width'] = NULL;
$arguments1['height'] = NULL;
$arguments1['minWidth'] = NULL;
$arguments1['minHeight'] = NULL;
$arguments1['maxWidth'] = NULL;
$arguments1['maxHeight'] = NULL;
$arguments1['absolute'] = false;
$arguments1['src'] = 'EXT:template/Resources/Public/Images/logo.png';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '" alt="">
                    </a>
                </div>
            </div>
            <div class="col-md-2  footer-tree-menu footer-center">
                <h6 class="text-uppercase ">Products</h6>
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3 = array();
$arguments3['data'] = NULL;
$arguments3['typoscriptObjectPath'] = NULL;
$arguments3['currentValueKey'] = NULL;
$arguments3['table'] = '';
$arguments3['typoscriptObjectPath'] = 'lib.footer_menu';
$renderChildrenClosure4 = ($arguments3['data'] !== null) ? function() use ($arguments3) { return $arguments3['data']; } : $renderChildrenClosure4;
$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '
            </div>
            <div class="col-md-4 text-center footer-right">
                <h6 class="text-uppercase ">
                    ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\InfoViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments5 = array();
$arguments5['as'] = NULL;
$arguments5['contentUid'] = 0;
$arguments5['field'] = NULL;
$arguments5['contentUid'] = 13;
$arguments5['field'] = 'header';

$output0 .= FluidTYPO3\Vhs\ViewHelpers\Content\InfoViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output0 .= '
                </h6>
                ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\InfoViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['as'] = NULL;
$arguments7['contentUid'] = 0;
$arguments7['field'] = NULL;
$arguments7['contentUid'] = 13;
$arguments7['field'] = 'bodytext';

$output0 .= FluidTYPO3\Vhs\ViewHelpers\Content\InfoViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output0 .= '
            </div>
        </div>
        <div class="row d-flex justify-content-between ">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments9 = array();
$arguments9['data'] = NULL;
$arguments9['typoscriptObjectPath'] = NULL;
$arguments9['currentValueKey'] = NULL;
$arguments9['table'] = '';
$arguments9['typoscriptObjectPath'] = 'lib.language';
// Rendering Array
$array11 = array();
$array11['colPos'] = 6;
$arguments9['data'] = $array11;
$renderChildrenClosure10 = ($arguments9['data'] !== null) ? function() use ($arguments9) { return $arguments9['data']; } : $renderChildrenClosure10;
$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output0 .= '
        </div>
    </div>
</footer>';

return $output0;
}


}
#