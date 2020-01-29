<?php

class Standard_action_index_fa6282202f94a3807a5ff60583cba21115d61e4e extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
));
}

/**
 * section Module
 */
public function section_b8ff02892916ff59f7fbd4e617fccd01f6bca576(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output4 = '';

$output4 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
$array7 = array (
);return $renderingContext->getVariableProvider()->getByPath('iteration.index', $array7);
};
$arguments5 = array();
$arguments5['value'] = NULL;
$arguments5['name'] = NULL;
$arguments5['name'] = 'uid';
$renderChildrenClosure6 = ($arguments5['value'] !== null) ? function() use ($arguments5) { return $arguments5['value']; } : $renderChildrenClosure6;
$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext)]);

$output4 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments10 = array();
$arguments10['identifier'] = NULL;
$arguments10['size'] = 'small';
$arguments10['overlay'] = NULL;
$arguments10['state'] = 'default';
$arguments10['alternativeMarkupIdentifier'] = NULL;
$array12 = array (
);$arguments10['identifier'] = $renderingContext->getVariableProvider()->getByPath('module.iconIdentifier', $array12);
$arguments10['alternativeMarkupIdentifier'] = 'inline';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);
};
$arguments8 = array();
$arguments8['value'] = NULL;
$arguments8['name'] = NULL;
$arguments8['name'] = 'icon';
$renderChildrenClosure9 = ($arguments8['value'] !== null) ? function() use ($arguments8) { return $arguments8['value']; } : $renderChildrenClosure9;
$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext)]);

$output4 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$array15 = array (
);return $renderingContext->getVariableProvider()->getByPath('module.label', $array15);
};
$arguments13 = array();
$arguments13['value'] = NULL;
$arguments13['name'] = NULL;
$arguments13['name'] = 'label';
$renderChildrenClosure14 = ($arguments13['value'] !== null) ? function() use ($arguments13) { return $arguments13['value']; } : $renderChildrenClosure14;
$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext)]);

$output4 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
$array18 = array (
);return $renderingContext->getVariableProvider()->getByPath('module.shortInfo', $array18);
};
$arguments16 = array();
$arguments16['value'] = NULL;
$arguments16['name'] = NULL;
$arguments16['name'] = 'information';
$renderChildrenClosure17 = ($arguments16['value'] !== null) ? function() use ($arguments16) { return $arguments16['value']; } : $renderChildrenClosure17;
$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext)]);

$output4 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['section'] = NULL;
$arguments19['partial'] = NULL;
$arguments19['delegate'] = NULL;
$arguments19['renderable'] = NULL;
$arguments19['arguments'] = array (
);
$arguments19['optional'] = false;
$arguments19['default'] = NULL;
$arguments19['contentAs'] = NULL;
$arguments19['debug'] = true;
$arguments19['partial'] = 'Modules/Item';
// Rendering Array
$array21 = array();
$array22 = array (
);$array21['module'] = $renderingContext->getVariableProvider()->getByPath('module', $array22);
$array23 = array (
);$array21['uid'] = $renderingContext->getVariableProvider()->getByPath('uid', $array23);
$array24 = array (
);$array21['icon'] = $renderingContext->getVariableProvider()->getByPath('icon', $array24);
$array25 = array (
);$array21['label'] = $renderingContext->getVariableProvider()->getByPath('label', $array25);
$array26 = array (
);$array21['information'] = $renderingContext->getVariableProvider()->getByPath('information', $array26);
$array27 = array (
);$array21['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array27);
$arguments19['arguments'] = $array21;
// Rendering Boolean node
// Rendering Array
$array28 = array();
$array28['0'] = 'false';

$expression29 = function($context) {return FALSE;};
$arguments19['debug'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression29(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array28)
					),
					$renderingContext
				);

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output4 .= '
    ';
return $output4;
};
$arguments1 = array();
$arguments1['each'] = NULL;
$arguments1['as'] = NULL;
$arguments1['key'] = NULL;
$arguments1['reverse'] = false;
$arguments1['iteration'] = NULL;
$array3 = array (
);$arguments1['each'] = $renderingContext->getVariableProvider()->getByPath('parentModules', $array3);
$arguments1['as'] = 'module';
$arguments1['iteration'] = 'iteration';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
$output35 = '';

$output35 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
return 'hook';
};
$arguments36 = array();
$arguments36['value'] = NULL;
$arguments36['name'] = NULL;
$arguments36['name'] = 'uid';
$renderChildrenClosure37 = ($arguments36['value'] !== null) ? function() use ($arguments36) { return $arguments36['value']; } : $renderChildrenClosure37;
$output35 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext)]);

$output35 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments40 = array();
$arguments40['identifier'] = NULL;
$arguments40['size'] = 'small';
$arguments40['overlay'] = NULL;
$arguments40['state'] = 'default';
$arguments40['alternativeMarkupIdentifier'] = NULL;
$arguments40['identifier'] = 'actions-window-open';
$arguments40['alternativeMarkupIdentifier'] = 'inline';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);
};
$arguments38 = array();
$arguments38['value'] = NULL;
$arguments38['name'] = NULL;
$arguments38['name'] = 'icon';
$renderChildrenClosure39 = ($arguments38['value'] !== null) ? function() use ($arguments38) { return $arguments38['value']; } : $renderChildrenClosure39;
$output35 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext)]);

$output35 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments44 = array();
$arguments44['key'] = NULL;
$arguments44['id'] = NULL;
$arguments44['default'] = NULL;
$arguments44['arguments'] = NULL;
$arguments44['extensionName'] = NULL;
$arguments44['languageKey'] = NULL;
$arguments44['alternativeLanguageKeys'] = NULL;
$arguments44['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang.xlf:deprecatedModuleLabel';
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);
};
$arguments42 = array();
$arguments42['value'] = NULL;
$arguments42['name'] = NULL;
$arguments42['name'] = 'label';
$renderChildrenClosure43 = ($arguments42['value'] !== null) ? function() use ($arguments42) { return $arguments42['value']; } : $renderChildrenClosure43;
$output35 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext)]);

$output35 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
$array48 = array (
);return $renderingContext->getVariableProvider()->getByPath('hookObjectModuleContent', $array48);
};
$arguments46 = array();
$arguments46['value'] = NULL;
$arguments46['name'] = NULL;
$arguments46['name'] = 'mainContent';
$renderChildrenClosure47 = ($arguments46['value'] !== null) ? function() use ($arguments46) { return $arguments46['value']; } : $renderChildrenClosure47;
$output35 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext)]);

$output35 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments49 = array();
$arguments49['section'] = NULL;
$arguments49['partial'] = NULL;
$arguments49['delegate'] = NULL;
$arguments49['renderable'] = NULL;
$arguments49['arguments'] = array (
);
$arguments49['optional'] = false;
$arguments49['default'] = NULL;
$arguments49['contentAs'] = NULL;
$arguments49['debug'] = true;
$arguments49['partial'] = 'Modules/Item';
$output51 = '';
// Rendering Array
$array52 = array();
$array53 = array (
);$array52['uid'] = $renderingContext->getVariableProvider()->getByPath('uid', $array53);
$array54 = array (
);$array52['icon'] = $renderingContext->getVariableProvider()->getByPath('icon', $array54);
$array55 = array (
);$array52['label'] = $renderingContext->getVariableProvider()->getByPath('label', $array55);
$array56 = array (
);$array52['mainContent'] = $renderingContext->getVariableProvider()->getByPath('mainContent', $array56);
$array57 = array (
);$array52['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array57);

$output51 .= $array52;

$output51 .= '}';
$arguments49['arguments'] = $output51;
// Rendering Boolean node
// Rendering Array
$array58 = array();
$array58['0'] = 'false';

$expression59 = function($context) {return FALSE;};
$arguments49['debug'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression59(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array58)
					),
					$renderingContext
				);

$output35 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output35 .= '
    ';
return $output35;
};
$arguments30 = array();
$arguments30['then'] = NULL;
$arguments30['else'] = NULL;
$arguments30['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array32 = array();
$array33 = array (
);$array32['0'] = $renderingContext->getVariableProvider()->getByPath('hookObjectModuleContent', $array33);

$expression34 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments30['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression34(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array32)
					),
					$renderingContext
				);
$arguments30['__thenClosure'] = $renderChildrenClosure31;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output0 .= '

';

return $output0;
}
/**
 * section Settings
 */
public function section_c7f73bb54d928922c3838bb789ee9fb8a5b1eb37(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output60 = '';

$output60 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
return 'settings';
};
$arguments61 = array();
$arguments61['value'] = NULL;
$arguments61['name'] = NULL;
$arguments61['name'] = 'uid';
$renderChildrenClosure62 = ($arguments61['value'] !== null) ? function() use ($arguments61) { return $arguments61['value']; } : $renderChildrenClosure62;
$output60 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext)]);

$output60 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments65 = array();
$arguments65['identifier'] = NULL;
$arguments65['size'] = 'small';
$arguments65['overlay'] = NULL;
$arguments65['state'] = 'default';
$arguments65['alternativeMarkupIdentifier'] = NULL;
$arguments65['identifier'] = 'actions-system-extension-configure';
$arguments65['alternativeMarkupIdentifier'] = 'inline';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext);
};
$arguments63 = array();
$arguments63['value'] = NULL;
$arguments63['name'] = NULL;
$arguments63['name'] = 'icon';
$renderChildrenClosure64 = ($arguments63['value'] !== null) ? function() use ($arguments63) { return $arguments63['value']; } : $renderChildrenClosure64;
$output60 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext)]);

$output60 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments69 = array();
$arguments69['key'] = NULL;
$arguments69['id'] = NULL;
$arguments69['default'] = NULL;
$arguments69['arguments'] = NULL;
$arguments69['extensionName'] = NULL;
$arguments69['languageKey'] = NULL;
$arguments69['alternativeLanguageKeys'] = NULL;
$arguments69['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang.xlf:settings.label';
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);
};
$arguments67 = array();
$arguments67['value'] = NULL;
$arguments67['name'] = NULL;
$arguments67['name'] = 'label';
$renderChildrenClosure68 = ($arguments67['value'] !== null) ? function() use ($arguments67) { return $arguments67['value']; } : $renderChildrenClosure68;
$output60 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext)]);

$output60 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
$array73 = array (
);return $renderingContext->getVariableProvider()->getByPath('module.shortInfo', $array73);
};
$arguments71 = array();
$arguments71['value'] = NULL;
$arguments71['name'] = NULL;
$arguments71['name'] = 'information';
$renderChildrenClosure72 = ($arguments71['value'] !== null) ? function() use ($arguments71) { return $arguments71['value']; } : $renderChildrenClosure72;
$output60 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext)]);

$output60 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
$output76 = '';

$output76 .= '
        <h1 class="typo3-adminPanel-headline">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments77 = array();
$arguments77['key'] = NULL;
$arguments77['id'] = NULL;
$arguments77['default'] = NULL;
$arguments77['arguments'] = NULL;
$arguments77['extensionName'] = NULL;
$arguments77['languageKey'] = NULL;
$arguments77['alternativeLanguageKeys'] = NULL;
$arguments77['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang.xlf:settings.label';

$output76 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);

$output76 .= '</h1>
        <div class="typo3-adminPanel-card-group">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
$output82 = '';

$output82 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
$output88 = '';

$output88 .= '
                    <div class="typo3-adminPanel-card">
                        <div class="typo3-adminPanel-card-header">
                            <h2 class="typo3-adminPanel-card-header-headline">
                                <span class="typo3-adminPanel-card-header-icon">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments89 = array();
$arguments89['identifier'] = NULL;
$arguments89['size'] = 'small';
$arguments89['overlay'] = NULL;
$arguments89['state'] = 'default';
$arguments89['alternativeMarkupIdentifier'] = NULL;
$array91 = array (
);$arguments89['identifier'] = $renderingContext->getVariableProvider()->getByPath('module.iconIdentifier', $array91);
$arguments89['alternativeMarkupIdentifier'] = 'inline';

$output88 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext);

$output88 .= '</span>
                                <span class="typo3-adminPanel-card-header-text">';
$array92 = array (
);
$output88 .= $renderingContext->getVariableProvider()->getByPath('module.label', $array92);

$output88 .= '</span>
                            </h2>
                        </div>
                        <div class="typo3-adminPanel-card-body">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
$array95 = array (
);return $renderingContext->getVariableProvider()->getByPath('module.pageSettings', $array95);
};
$arguments93 = array();
$arguments93['value'] = NULL;

$output88 .= isset($arguments93['value']) ? $arguments93['value'] : $renderChildrenClosure94();

$output88 .= '</div>
                    </div>
                ';
return $output88;
};
$arguments83 = array();
$arguments83['then'] = NULL;
$arguments83['else'] = NULL;
$arguments83['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array85 = array();
$array86 = array (
);$array85['0'] = $renderingContext->getVariableProvider()->getByPath('module.pageSettings', $array86);

$expression87 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments83['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression87(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array85)
					),
					$renderingContext
				);
$arguments83['__thenClosure'] = $renderChildrenClosure84;

$output82 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext);

$output82 .= '
            ';
return $output82;
};
$arguments79 = array();
$arguments79['each'] = NULL;
$arguments79['as'] = NULL;
$arguments79['key'] = NULL;
$arguments79['reverse'] = false;
$arguments79['iteration'] = NULL;
$array81 = array (
);$arguments79['each'] = $renderingContext->getVariableProvider()->getByPath('settingsModules', $array81);
$arguments79['as'] = 'module';

$output76 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);

$output76 .= '
        </div>
        <div class="typo3-adminPanel-form-group">
            <button data-typo3-role="typo3-adminPanel-saveButton" class="typo3-adminPanel-btn typo3-adminPanel-btn-primary">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments96 = array();
$arguments96['key'] = NULL;
$arguments96['id'] = NULL;
$arguments96['default'] = NULL;
$arguments96['arguments'] = NULL;
$arguments96['extensionName'] = NULL;
$arguments96['languageKey'] = NULL;
$arguments96['alternativeLanguageKeys'] = NULL;
$arguments96['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang.xlf:settings.updateButtonLabel';

$output76 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments96, $renderChildrenClosure97, $renderingContext);

$output76 .= '
            </button>
        </div>
    ';
return $output76;
};
$arguments74 = array();
$arguments74['value'] = NULL;
$arguments74['name'] = NULL;
$arguments74['name'] = 'mainContent';
$renderChildrenClosure75 = ($arguments74['value'] !== null) ? function() use ($arguments74) { return $arguments74['value']; } : $renderChildrenClosure75;
$output60 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext)]);

$output60 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments98 = array();
$arguments98['section'] = NULL;
$arguments98['partial'] = NULL;
$arguments98['delegate'] = NULL;
$arguments98['renderable'] = NULL;
$arguments98['arguments'] = array (
);
$arguments98['optional'] = false;
$arguments98['default'] = NULL;
$arguments98['contentAs'] = NULL;
$arguments98['debug'] = true;
$arguments98['partial'] = 'Modules/Item';
// Rendering Array
$array100 = array();
$array101 = array (
);$array100['uid'] = $renderingContext->getVariableProvider()->getByPath('uid', $array101);
$array102 = array (
);$array100['icon'] = $renderingContext->getVariableProvider()->getByPath('icon', $array102);
$array103 = array (
);$array100['label'] = $renderingContext->getVariableProvider()->getByPath('label', $array103);
$array104 = array (
);$array100['information'] = $renderingContext->getVariableProvider()->getByPath('information', $array104);
$array105 = array (
);$array100['mainContent'] = $renderingContext->getVariableProvider()->getByPath('mainContent', $array105);
$array106 = array (
);$array100['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array106);
$arguments98['arguments'] = $array100;
// Rendering Boolean node
// Rendering Array
$array107 = array();
$array107['0'] = 'false';

$expression108 = function($context) {return FALSE;};
$arguments98['debug'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression108(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array107)
					),
					$renderingContext
				);

$output60 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments98, $renderChildrenClosure99, $renderingContext);

$output60 .= '
';

return $output60;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output109 = '';

$output109 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments110 = array();
$arguments110['name'] = NULL;
$arguments110['name'] = 'Default';

$output109 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output109 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
$output114 = '';

$output114 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
$output118 = '';

$output118 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure120 = function() use ($renderingContext, $self) {
$array121 = array (
);return $renderingContext->getVariableProvider()->getByPath('iteration.index', $array121);
};
$arguments119 = array();
$arguments119['value'] = NULL;
$arguments119['name'] = NULL;
$arguments119['name'] = 'uid';
$renderChildrenClosure120 = ($arguments119['value'] !== null) ? function() use ($arguments119) { return $arguments119['value']; } : $renderChildrenClosure120;
$output118 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments119, $renderChildrenClosure120, $renderingContext)]);

$output118 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments124 = array();
$arguments124['identifier'] = NULL;
$arguments124['size'] = 'small';
$arguments124['overlay'] = NULL;
$arguments124['state'] = 'default';
$arguments124['alternativeMarkupIdentifier'] = NULL;
$array126 = array (
);$arguments124['identifier'] = $renderingContext->getVariableProvider()->getByPath('module.iconIdentifier', $array126);
$arguments124['alternativeMarkupIdentifier'] = 'inline';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments124, $renderChildrenClosure125, $renderingContext);
};
$arguments122 = array();
$arguments122['value'] = NULL;
$arguments122['name'] = NULL;
$arguments122['name'] = 'icon';
$renderChildrenClosure123 = ($arguments122['value'] !== null) ? function() use ($arguments122) { return $arguments122['value']; } : $renderChildrenClosure123;
$output118 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments122, $renderChildrenClosure123, $renderingContext)]);

$output118 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
$array129 = array (
);return $renderingContext->getVariableProvider()->getByPath('module.label', $array129);
};
$arguments127 = array();
$arguments127['value'] = NULL;
$arguments127['name'] = NULL;
$arguments127['name'] = 'label';
$renderChildrenClosure128 = ($arguments127['value'] !== null) ? function() use ($arguments127) { return $arguments127['value']; } : $renderChildrenClosure128;
$output118 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments127, $renderChildrenClosure128, $renderingContext)]);

$output118 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
$array132 = array (
);return $renderingContext->getVariableProvider()->getByPath('module.shortInfo', $array132);
};
$arguments130 = array();
$arguments130['value'] = NULL;
$arguments130['name'] = NULL;
$arguments130['name'] = 'information';
$renderChildrenClosure131 = ($arguments130['value'] !== null) ? function() use ($arguments130) { return $arguments130['value']; } : $renderChildrenClosure131;
$output118 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext)]);

$output118 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments133 = array();
$arguments133['section'] = NULL;
$arguments133['partial'] = NULL;
$arguments133['delegate'] = NULL;
$arguments133['renderable'] = NULL;
$arguments133['arguments'] = array (
);
$arguments133['optional'] = false;
$arguments133['default'] = NULL;
$arguments133['contentAs'] = NULL;
$arguments133['debug'] = true;
$arguments133['partial'] = 'Modules/Item';
// Rendering Array
$array135 = array();
$array136 = array (
);$array135['module'] = $renderingContext->getVariableProvider()->getByPath('module', $array136);
$array137 = array (
);$array135['uid'] = $renderingContext->getVariableProvider()->getByPath('uid', $array137);
$array138 = array (
);$array135['icon'] = $renderingContext->getVariableProvider()->getByPath('icon', $array138);
$array139 = array (
);$array135['label'] = $renderingContext->getVariableProvider()->getByPath('label', $array139);
$array140 = array (
);$array135['information'] = $renderingContext->getVariableProvider()->getByPath('information', $array140);
$array141 = array (
);$array135['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array141);
$arguments133['arguments'] = $array135;
// Rendering Boolean node
// Rendering Array
$array142 = array();
$array142['0'] = 'false';

$expression143 = function($context) {return FALSE;};
$arguments133['debug'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression143(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array142)
					),
					$renderingContext
				);

$output118 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext);

$output118 .= '
    ';
return $output118;
};
$arguments115 = array();
$arguments115['each'] = NULL;
$arguments115['as'] = NULL;
$arguments115['key'] = NULL;
$arguments115['reverse'] = false;
$arguments115['iteration'] = NULL;
$array117 = array (
);$arguments115['each'] = $renderingContext->getVariableProvider()->getByPath('parentModules', $array117);
$arguments115['as'] = 'module';
$arguments115['iteration'] = 'iteration';

$output114 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext);

$output114 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure145 = function() use ($renderingContext, $self) {
$output149 = '';

$output149 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
return 'hook';
};
$arguments150 = array();
$arguments150['value'] = NULL;
$arguments150['name'] = NULL;
$arguments150['name'] = 'uid';
$renderChildrenClosure151 = ($arguments150['value'] !== null) ? function() use ($arguments150) { return $arguments150['value']; } : $renderChildrenClosure151;
$output149 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments150, $renderChildrenClosure151, $renderingContext)]);

$output149 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure153 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure155 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments154 = array();
$arguments154['identifier'] = NULL;
$arguments154['size'] = 'small';
$arguments154['overlay'] = NULL;
$arguments154['state'] = 'default';
$arguments154['alternativeMarkupIdentifier'] = NULL;
$arguments154['identifier'] = 'actions-window-open';
$arguments154['alternativeMarkupIdentifier'] = 'inline';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments154, $renderChildrenClosure155, $renderingContext);
};
$arguments152 = array();
$arguments152['value'] = NULL;
$arguments152['name'] = NULL;
$arguments152['name'] = 'icon';
$renderChildrenClosure153 = ($arguments152['value'] !== null) ? function() use ($arguments152) { return $arguments152['value']; } : $renderChildrenClosure153;
$output149 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments152, $renderChildrenClosure153, $renderingContext)]);

$output149 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments158 = array();
$arguments158['key'] = NULL;
$arguments158['id'] = NULL;
$arguments158['default'] = NULL;
$arguments158['arguments'] = NULL;
$arguments158['extensionName'] = NULL;
$arguments158['languageKey'] = NULL;
$arguments158['alternativeLanguageKeys'] = NULL;
$arguments158['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang.xlf:deprecatedModuleLabel';
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments158, $renderChildrenClosure159, $renderingContext);
};
$arguments156 = array();
$arguments156['value'] = NULL;
$arguments156['name'] = NULL;
$arguments156['name'] = 'label';
$renderChildrenClosure157 = ($arguments156['value'] !== null) ? function() use ($arguments156) { return $arguments156['value']; } : $renderChildrenClosure157;
$output149 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments156, $renderChildrenClosure157, $renderingContext)]);

$output149 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure161 = function() use ($renderingContext, $self) {
$array162 = array (
);return $renderingContext->getVariableProvider()->getByPath('hookObjectModuleContent', $array162);
};
$arguments160 = array();
$arguments160['value'] = NULL;
$arguments160['name'] = NULL;
$arguments160['name'] = 'mainContent';
$renderChildrenClosure161 = ($arguments160['value'] !== null) ? function() use ($arguments160) { return $arguments160['value']; } : $renderChildrenClosure161;
$output149 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments160, $renderChildrenClosure161, $renderingContext)]);

$output149 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure164 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments163 = array();
$arguments163['section'] = NULL;
$arguments163['partial'] = NULL;
$arguments163['delegate'] = NULL;
$arguments163['renderable'] = NULL;
$arguments163['arguments'] = array (
);
$arguments163['optional'] = false;
$arguments163['default'] = NULL;
$arguments163['contentAs'] = NULL;
$arguments163['debug'] = true;
$arguments163['partial'] = 'Modules/Item';
$output165 = '';
// Rendering Array
$array166 = array();
$array167 = array (
);$array166['uid'] = $renderingContext->getVariableProvider()->getByPath('uid', $array167);
$array168 = array (
);$array166['icon'] = $renderingContext->getVariableProvider()->getByPath('icon', $array168);
$array169 = array (
);$array166['label'] = $renderingContext->getVariableProvider()->getByPath('label', $array169);
$array170 = array (
);$array166['mainContent'] = $renderingContext->getVariableProvider()->getByPath('mainContent', $array170);
$array171 = array (
);$array166['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array171);

$output165 .= $array166;

$output165 .= '}';
$arguments163['arguments'] = $output165;
// Rendering Boolean node
// Rendering Array
$array172 = array();
$array172['0'] = 'false';

$expression173 = function($context) {return FALSE;};
$arguments163['debug'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression173(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array172)
					),
					$renderingContext
				);

$output149 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments163, $renderChildrenClosure164, $renderingContext);

$output149 .= '
    ';
return $output149;
};
$arguments144 = array();
$arguments144['then'] = NULL;
$arguments144['else'] = NULL;
$arguments144['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array146 = array();
$array147 = array (
);$array146['0'] = $renderingContext->getVariableProvider()->getByPath('hookObjectModuleContent', $array147);

$expression148 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments144['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression148(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array146)
					),
					$renderingContext
				);
$arguments144['__thenClosure'] = $renderChildrenClosure145;

$output114 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments144, $renderChildrenClosure145, $renderingContext);

$output114 .= '

';
return $output114;
};
$arguments112 = array();
$arguments112['name'] = NULL;
$arguments112['name'] = 'Module';

$output109 .= NULL;

$output109 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure175 = function() use ($renderingContext, $self) {
$output176 = '';

$output176 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure178 = function() use ($renderingContext, $self) {
return 'settings';
};
$arguments177 = array();
$arguments177['value'] = NULL;
$arguments177['name'] = NULL;
$arguments177['name'] = 'uid';
$renderChildrenClosure178 = ($arguments177['value'] !== null) ? function() use ($arguments177) { return $arguments177['value']; } : $renderChildrenClosure178;
$output176 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments177, $renderChildrenClosure178, $renderingContext)]);

$output176 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure180 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure182 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments181 = array();
$arguments181['identifier'] = NULL;
$arguments181['size'] = 'small';
$arguments181['overlay'] = NULL;
$arguments181['state'] = 'default';
$arguments181['alternativeMarkupIdentifier'] = NULL;
$arguments181['identifier'] = 'actions-system-extension-configure';
$arguments181['alternativeMarkupIdentifier'] = 'inline';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments181, $renderChildrenClosure182, $renderingContext);
};
$arguments179 = array();
$arguments179['value'] = NULL;
$arguments179['name'] = NULL;
$arguments179['name'] = 'icon';
$renderChildrenClosure180 = ($arguments179['value'] !== null) ? function() use ($arguments179) { return $arguments179['value']; } : $renderChildrenClosure180;
$output176 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments179, $renderChildrenClosure180, $renderingContext)]);

$output176 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure184 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure186 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments185 = array();
$arguments185['key'] = NULL;
$arguments185['id'] = NULL;
$arguments185['default'] = NULL;
$arguments185['arguments'] = NULL;
$arguments185['extensionName'] = NULL;
$arguments185['languageKey'] = NULL;
$arguments185['alternativeLanguageKeys'] = NULL;
$arguments185['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang.xlf:settings.label';
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments185, $renderChildrenClosure186, $renderingContext);
};
$arguments183 = array();
$arguments183['value'] = NULL;
$arguments183['name'] = NULL;
$arguments183['name'] = 'label';
$renderChildrenClosure184 = ($arguments183['value'] !== null) ? function() use ($arguments183) { return $arguments183['value']; } : $renderChildrenClosure184;
$output176 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments183, $renderChildrenClosure184, $renderingContext)]);

$output176 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure188 = function() use ($renderingContext, $self) {
$array189 = array (
);return $renderingContext->getVariableProvider()->getByPath('module.shortInfo', $array189);
};
$arguments187 = array();
$arguments187['value'] = NULL;
$arguments187['name'] = NULL;
$arguments187['name'] = 'information';
$renderChildrenClosure188 = ($arguments187['value'] !== null) ? function() use ($arguments187) { return $arguments187['value']; } : $renderChildrenClosure188;
$output176 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments187, $renderChildrenClosure188, $renderingContext)]);

$output176 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure191 = function() use ($renderingContext, $self) {
$output192 = '';

$output192 .= '
        <h1 class="typo3-adminPanel-headline">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure194 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments193 = array();
$arguments193['key'] = NULL;
$arguments193['id'] = NULL;
$arguments193['default'] = NULL;
$arguments193['arguments'] = NULL;
$arguments193['extensionName'] = NULL;
$arguments193['languageKey'] = NULL;
$arguments193['alternativeLanguageKeys'] = NULL;
$arguments193['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang.xlf:settings.label';

$output192 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments193, $renderChildrenClosure194, $renderingContext);

$output192 .= '</h1>
        <div class="typo3-adminPanel-card-group">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure196 = function() use ($renderingContext, $self) {
$output198 = '';

$output198 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure200 = function() use ($renderingContext, $self) {
$output204 = '';

$output204 .= '
                    <div class="typo3-adminPanel-card">
                        <div class="typo3-adminPanel-card-header">
                            <h2 class="typo3-adminPanel-card-header-headline">
                                <span class="typo3-adminPanel-card-header-icon">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure206 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments205 = array();
$arguments205['identifier'] = NULL;
$arguments205['size'] = 'small';
$arguments205['overlay'] = NULL;
$arguments205['state'] = 'default';
$arguments205['alternativeMarkupIdentifier'] = NULL;
$array207 = array (
);$arguments205['identifier'] = $renderingContext->getVariableProvider()->getByPath('module.iconIdentifier', $array207);
$arguments205['alternativeMarkupIdentifier'] = 'inline';

$output204 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments205, $renderChildrenClosure206, $renderingContext);

$output204 .= '</span>
                                <span class="typo3-adminPanel-card-header-text">';
$array208 = array (
);
$output204 .= $renderingContext->getVariableProvider()->getByPath('module.label', $array208);

$output204 .= '</span>
                            </h2>
                        </div>
                        <div class="typo3-adminPanel-card-body">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure210 = function() use ($renderingContext, $self) {
$array211 = array (
);return $renderingContext->getVariableProvider()->getByPath('module.pageSettings', $array211);
};
$arguments209 = array();
$arguments209['value'] = NULL;

$output204 .= isset($arguments209['value']) ? $arguments209['value'] : $renderChildrenClosure210();

$output204 .= '</div>
                    </div>
                ';
return $output204;
};
$arguments199 = array();
$arguments199['then'] = NULL;
$arguments199['else'] = NULL;
$arguments199['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array201 = array();
$array202 = array (
);$array201['0'] = $renderingContext->getVariableProvider()->getByPath('module.pageSettings', $array202);

$expression203 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments199['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression203(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array201)
					),
					$renderingContext
				);
$arguments199['__thenClosure'] = $renderChildrenClosure200;

$output198 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments199, $renderChildrenClosure200, $renderingContext);

$output198 .= '
            ';
return $output198;
};
$arguments195 = array();
$arguments195['each'] = NULL;
$arguments195['as'] = NULL;
$arguments195['key'] = NULL;
$arguments195['reverse'] = false;
$arguments195['iteration'] = NULL;
$array197 = array (
);$arguments195['each'] = $renderingContext->getVariableProvider()->getByPath('settingsModules', $array197);
$arguments195['as'] = 'module';

$output192 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments195, $renderChildrenClosure196, $renderingContext);

$output192 .= '
        </div>
        <div class="typo3-adminPanel-form-group">
            <button data-typo3-role="typo3-adminPanel-saveButton" class="typo3-adminPanel-btn typo3-adminPanel-btn-primary">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure213 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments212 = array();
$arguments212['key'] = NULL;
$arguments212['id'] = NULL;
$arguments212['default'] = NULL;
$arguments212['arguments'] = NULL;
$arguments212['extensionName'] = NULL;
$arguments212['languageKey'] = NULL;
$arguments212['alternativeLanguageKeys'] = NULL;
$arguments212['key'] = 'LLL:EXT:adminpanel/Resources/Private/Language/locallang.xlf:settings.updateButtonLabel';

$output192 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments212, $renderChildrenClosure213, $renderingContext);

$output192 .= '
            </button>
        </div>
    ';
return $output192;
};
$arguments190 = array();
$arguments190['value'] = NULL;
$arguments190['name'] = NULL;
$arguments190['name'] = 'mainContent';
$renderChildrenClosure191 = ($arguments190['value'] !== null) ? function() use ($arguments190) { return $arguments190['value']; } : $renderChildrenClosure191;
$output176 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments190, $renderChildrenClosure191, $renderingContext)]);

$output176 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure215 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments214 = array();
$arguments214['section'] = NULL;
$arguments214['partial'] = NULL;
$arguments214['delegate'] = NULL;
$arguments214['renderable'] = NULL;
$arguments214['arguments'] = array (
);
$arguments214['optional'] = false;
$arguments214['default'] = NULL;
$arguments214['contentAs'] = NULL;
$arguments214['debug'] = true;
$arguments214['partial'] = 'Modules/Item';
// Rendering Array
$array216 = array();
$array217 = array (
);$array216['uid'] = $renderingContext->getVariableProvider()->getByPath('uid', $array217);
$array218 = array (
);$array216['icon'] = $renderingContext->getVariableProvider()->getByPath('icon', $array218);
$array219 = array (
);$array216['label'] = $renderingContext->getVariableProvider()->getByPath('label', $array219);
$array220 = array (
);$array216['information'] = $renderingContext->getVariableProvider()->getByPath('information', $array220);
$array221 = array (
);$array216['mainContent'] = $renderingContext->getVariableProvider()->getByPath('mainContent', $array221);
$array222 = array (
);$array216['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array222);
$arguments214['arguments'] = $array216;
// Rendering Boolean node
// Rendering Array
$array223 = array();
$array223['0'] = 'false';

$expression224 = function($context) {return FALSE;};
$arguments214['debug'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression224(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array223)
					),
					$renderingContext
				);

$output176 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments214, $renderChildrenClosure215, $renderingContext);

$output176 .= '
';
return $output176;
};
$arguments174 = array();
$arguments174['name'] = NULL;
$arguments174['name'] = 'Settings';

$output109 .= NULL;

$output109 .= '

';

return $output109;
}


}
#