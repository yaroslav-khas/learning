<?php

class Standard_action_Default_907d4c02c72a1223676068274f92be462b4ddf92 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) 'Layout';
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
));
}

/**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
    <main>
        <div class="row">
            <div class="content col">
                ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['column'] = NULL;
$arguments1['order'] = 'sorting';
$arguments1['sortDirection'] = 'ASC';
$arguments1['pageUid'] = 0;
$arguments1['contentUids'] = NULL;
$arguments1['sectionIndexOnly'] = false;
$arguments1['loadRegister'] = NULL;
$arguments1['render'] = true;
$arguments1['hideUntranslated'] = false;
$arguments1['limit'] = NULL;
$arguments1['slide'] = 0;
$arguments1['slideCollect'] = 0;
$arguments1['slideCollectReverse'] = false;
$arguments1['as'] = NULL;
$arguments1['column'] = 1;

$output0 .= FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
            </div>
        </div>
        <br>
    </main>
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output3 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['name'] = NULL;
$arguments4['name'] = 'Layout';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output3 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
$output8 = '';

$output8 .= '
    <main>
        <div class="row">
            <div class="content col">
                ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments9 = array();
$arguments9['column'] = NULL;
$arguments9['order'] = 'sorting';
$arguments9['sortDirection'] = 'ASC';
$arguments9['pageUid'] = 0;
$arguments9['contentUids'] = NULL;
$arguments9['sectionIndexOnly'] = false;
$arguments9['loadRegister'] = NULL;
$arguments9['render'] = true;
$arguments9['hideUntranslated'] = false;
$arguments9['limit'] = NULL;
$arguments9['slide'] = 0;
$arguments9['slideCollect'] = 0;
$arguments9['slideCollectReverse'] = false;
$arguments9['as'] = NULL;
$arguments9['column'] = 1;

$output8 .= FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output8 .= '
            </div>
        </div>
        <br>
    </main>
';
return $output8;
};
$arguments6 = array();
$arguments6['name'] = NULL;
$arguments6['name'] = 'content';

$output3 .= NULL;

$output3 .= '
';

return $output3;
}


}
#