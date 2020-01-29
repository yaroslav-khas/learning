<?php

class partial_List_Item_7861c87878d074a1296a5c22308be76037f5146d extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
<!--
	=====================
		Partials/List/Item.html
-->
<div class="article articletype-';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.type', $array1)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure3 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2 = array();
$arguments2['then'] = NULL;
$arguments2['else'] = NULL;
$arguments2['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array4 = array();
$array5 = array (
);$array4['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.istopnews', $array5);

$expression6 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression6(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array4)
					),
					$renderingContext
				);
$arguments2['then'] = ' topnews';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2, $renderChildrenClosure3, $renderingContext);

$output0 .= '" itemscope="itemscope" itemtype="http://schema.org/Article">
	';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\ExcludeDisplayedNewsViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['newsItem'] = NULL;
$array9 = array (
);$arguments7['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array9);

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\ExcludeDisplayedNewsViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext)]);

$output0 .= '
	<!-- header -->
	<div class="header">
		<h3>
			';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$output15 = '';

$output15 .= '
				<span itemprop="headline">';
$array16 = array (
);
$output15 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.title', $array16)]);

$output15 .= '</span>
			';
return $output15;
};
$arguments10 = array();
$arguments10['additionalAttributes'] = NULL;
$arguments10['data'] = NULL;
$arguments10['class'] = NULL;
$arguments10['dir'] = NULL;
$arguments10['id'] = NULL;
$arguments10['lang'] = NULL;
$arguments10['style'] = NULL;
$arguments10['title'] = NULL;
$arguments10['accesskey'] = NULL;
$arguments10['tabindex'] = NULL;
$arguments10['onclick'] = NULL;
$arguments10['newsItem'] = NULL;
$arguments10['settings'] = array (
);
$arguments10['uriOnly'] = false;
$arguments10['configuration'] = array (
);
$arguments10['content'] = '';
$arguments10['section'] = NULL;
$array12 = array (
);$arguments10['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array12);
$array13 = array (
);$arguments10['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array13);
$array14 = array (
);$arguments10['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array14);

$output0 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output0 .= '
		</h3>
	</div>

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$output124 = '';

$output124 .= '
		<!-- media preview element -->
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure126 = function() use ($renderingContext, $self) {
$output127 = '';

$output127 .= '
			<div class="news-img-wrap">
				';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
$output133 = '';

$output133 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
$output138 = '';

$output138 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure140 = function() use ($renderingContext, $self) {
$output144 = '';

$output144 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure146 = function() use ($renderingContext, $self) {
return NULL;
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
$arguments145['alt'] = NULL;
$arguments145['ismap'] = NULL;
$arguments145['longdesc'] = NULL;
$arguments145['usemap'] = NULL;
$arguments145['src'] = NULL;
$arguments145['treatIdAsReference'] = NULL;
$arguments145['image'] = NULL;
$arguments145['crop'] = NULL;
$arguments145['cropVariant'] = 'default';
$arguments145['width'] = NULL;
$arguments145['height'] = NULL;
$arguments145['minWidth'] = NULL;
$arguments145['minHeight'] = NULL;
$arguments145['maxWidth'] = NULL;
$arguments145['maxHeight'] = NULL;
$arguments145['absolute'] = false;
$array147 = array (
);$arguments145['image'] = $renderingContext->getVariableProvider()->getByPath('mediaElement', $array147);
$array148 = array (
);$arguments145['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array148);
$array149 = array (
);$arguments145['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array149);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments150 = array();
$arguments150['then'] = NULL;
$arguments150['else'] = NULL;
$arguments150['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array152 = array();
$array153 = array (
);$array152['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array153);

$expression154 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments150['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression154(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array152)
					),
					$renderingContext
				);
$array155 = array (
);$arguments150['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array155);
$array156 = array (
);$arguments150['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array156);
$arguments145['maxWidth'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments150, $renderChildrenClosure151, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure158 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments157 = array();
$arguments157['then'] = NULL;
$arguments157['else'] = NULL;
$arguments157['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array159 = array();
$array160 = array (
);$array159['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array160);

$expression161 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments157['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression161(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array159)
					),
					$renderingContext
				);
$array162 = array (
);$arguments157['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array162);
$array163 = array (
);$arguments157['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array163);
$arguments145['maxHeight'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments157, $renderChildrenClosure158, $renderingContext);

$output144 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments145, $renderChildrenClosure146, $renderingContext);

$output144 .= '
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
);$array141['0'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.type', $array142);
$array141['1'] = ' == 2';

$expression143 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 2);};
$arguments139['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression143(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array141)
					),
					$renderingContext
				);
$arguments139['__thenClosure'] = $renderChildrenClosure140;

$output138 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments139, $renderChildrenClosure140, $renderingContext);

$output138 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure165 = function() use ($renderingContext, $self) {
$output169 = '';

$output169 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure171 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments170 = array();
$arguments170['section'] = NULL;
$arguments170['partial'] = NULL;
$arguments170['delegate'] = NULL;
$arguments170['renderable'] = NULL;
$arguments170['arguments'] = array (
);
$arguments170['optional'] = false;
$arguments170['default'] = NULL;
$arguments170['contentAs'] = NULL;
$arguments170['debug'] = true;
$arguments170['partial'] = 'Detail/MediaVideo';
// Rendering Array
$array172 = array();
$array173 = array (
);$array172['mediaElement'] = $renderingContext->getVariableProvider()->getByPath('mediaElement', $array173);
$arguments170['arguments'] = $array172;

$output169 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments170, $renderChildrenClosure171, $renderingContext);

$output169 .= '
						';
return $output169;
};
$arguments164 = array();
$arguments164['then'] = NULL;
$arguments164['else'] = NULL;
$arguments164['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array166 = array();
$array167 = array (
);$array166['0'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.type', $array167);
$array166['1'] = ' == 4';

$expression168 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 4);};
$arguments164['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression168(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array166)
					),
					$renderingContext
				);
$arguments164['__thenClosure'] = $renderChildrenClosure165;

$output138 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments164, $renderChildrenClosure165, $renderingContext);

$output138 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure175 = function() use ($renderingContext, $self) {
$output179 = '';

$output179 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure181 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments180 = array();
$arguments180['additionalAttributes'] = NULL;
$arguments180['data'] = NULL;
$arguments180['class'] = NULL;
$arguments180['dir'] = NULL;
$arguments180['id'] = NULL;
$arguments180['lang'] = NULL;
$arguments180['style'] = NULL;
$arguments180['title'] = NULL;
$arguments180['accesskey'] = NULL;
$arguments180['tabindex'] = NULL;
$arguments180['onclick'] = NULL;
$arguments180['alt'] = NULL;
$arguments180['ismap'] = NULL;
$arguments180['longdesc'] = NULL;
$arguments180['usemap'] = NULL;
$arguments180['src'] = NULL;
$arguments180['treatIdAsReference'] = NULL;
$arguments180['image'] = NULL;
$arguments180['crop'] = NULL;
$arguments180['cropVariant'] = 'default';
$arguments180['width'] = NULL;
$arguments180['height'] = NULL;
$arguments180['minWidth'] = NULL;
$arguments180['minHeight'] = NULL;
$arguments180['maxWidth'] = NULL;
$arguments180['maxHeight'] = NULL;
$arguments180['absolute'] = false;
$array182 = array (
);$arguments180['image'] = $renderingContext->getVariableProvider()->getByPath('mediaElement', $array182);
$array183 = array (
);$arguments180['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array183);
$array184 = array (
);$arguments180['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array184);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure186 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments185 = array();
$arguments185['then'] = NULL;
$arguments185['else'] = NULL;
$arguments185['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array187 = array();
$array188 = array (
);$array187['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array188);

$expression189 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments185['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression189(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array187)
					),
					$renderingContext
				);
$array190 = array (
);$arguments185['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array190);
$array191 = array (
);$arguments185['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array191);
$arguments180['maxWidth'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments185, $renderChildrenClosure186, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure193 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments192 = array();
$arguments192['then'] = NULL;
$arguments192['else'] = NULL;
$arguments192['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array194 = array();
$array195 = array (
);$array194['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array195);

$expression196 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments192['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression196(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array194)
					),
					$renderingContext
				);
$array197 = array (
);$arguments192['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array197);
$array198 = array (
);$arguments192['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array198);
$arguments180['maxHeight'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments192, $renderChildrenClosure193, $renderingContext);

$output179 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments180, $renderChildrenClosure181, $renderingContext);

$output179 .= '
						';
return $output179;
};
$arguments174 = array();
$arguments174['then'] = NULL;
$arguments174['else'] = NULL;
$arguments174['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array176 = array();
$array177 = array (
);$array176['0'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.type', $array177);
$array176['1'] = ' == 5';

$expression178 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 5);};
$arguments174['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression178(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array176)
					),
					$renderingContext
				);
$arguments174['__thenClosure'] = $renderChildrenClosure175;

$output138 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments174, $renderChildrenClosure175, $renderingContext);

$output138 .= '
					';
return $output138;
};
$arguments134 = array();
$arguments134['map'] = NULL;
// Rendering Array
$array136 = array();
$array137 = array (
);$array136['mediaElement'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array137);
$arguments134['map'] = $array136;

$output133 .= TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments134, $renderChildrenClosure135, $renderingContext);

$output133 .= '
				';
return $output133;
};
$arguments128 = array();
$arguments128['additionalAttributes'] = NULL;
$arguments128['data'] = NULL;
$arguments128['class'] = NULL;
$arguments128['dir'] = NULL;
$arguments128['id'] = NULL;
$arguments128['lang'] = NULL;
$arguments128['style'] = NULL;
$arguments128['title'] = NULL;
$arguments128['accesskey'] = NULL;
$arguments128['tabindex'] = NULL;
$arguments128['onclick'] = NULL;
$arguments128['newsItem'] = NULL;
$arguments128['settings'] = array (
);
$arguments128['uriOnly'] = false;
$arguments128['configuration'] = array (
);
$arguments128['content'] = '';
$arguments128['section'] = NULL;
$array130 = array (
);$arguments128['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array130);
$array131 = array (
);$arguments128['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array131);
$array132 = array (
);$arguments128['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array132);

$output127 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments128, $renderChildrenClosure129, $renderingContext);

$output127 .= '
			</div>
		';
return $output127;
};
$arguments125 = array();

$output124 .= '';

$output124 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure200 = function() use ($renderingContext, $self) {
$output201 = '';

$output201 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure203 = function() use ($renderingContext, $self) {
$output207 = '';

$output207 .= '
				<div class="news-img-wrap">
					<span class="no-media-element">
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure209 = function() use ($renderingContext, $self) {
$output213 = '';

$output213 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure215 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments214 = array();
$arguments214['additionalAttributes'] = NULL;
$arguments214['data'] = NULL;
$arguments214['class'] = NULL;
$arguments214['dir'] = NULL;
$arguments214['id'] = NULL;
$arguments214['lang'] = NULL;
$arguments214['style'] = NULL;
$arguments214['title'] = NULL;
$arguments214['accesskey'] = NULL;
$arguments214['tabindex'] = NULL;
$arguments214['onclick'] = NULL;
$arguments214['alt'] = NULL;
$arguments214['ismap'] = NULL;
$arguments214['longdesc'] = NULL;
$arguments214['usemap'] = NULL;
$arguments214['src'] = NULL;
$arguments214['treatIdAsReference'] = NULL;
$arguments214['image'] = NULL;
$arguments214['crop'] = NULL;
$arguments214['cropVariant'] = 'default';
$arguments214['width'] = NULL;
$arguments214['height'] = NULL;
$arguments214['minWidth'] = NULL;
$arguments214['minHeight'] = NULL;
$arguments214['maxWidth'] = NULL;
$arguments214['maxHeight'] = NULL;
$arguments214['absolute'] = false;
$array216 = array (
);$arguments214['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array216);
$arguments214['title'] = '';
$arguments214['alt'] = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure218 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments217 = array();
$arguments217['then'] = NULL;
$arguments217['else'] = NULL;
$arguments217['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array219 = array();
$array220 = array (
);$array219['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array220);

$expression221 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments217['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression221(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array219)
					),
					$renderingContext
				);
$array222 = array (
);$arguments217['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array222);
$array223 = array (
);$arguments217['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array223);
$arguments214['maxWidth'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments217, $renderChildrenClosure218, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure225 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments224 = array();
$arguments224['then'] = NULL;
$arguments224['else'] = NULL;
$arguments224['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array226 = array();
$array227 = array (
);$array226['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array227);

$expression228 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments224['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression228(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array226)
					),
					$renderingContext
				);
$array229 = array (
);$arguments224['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array229);
$array230 = array (
);$arguments224['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array230);
$arguments214['maxHeight'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments224, $renderChildrenClosure225, $renderingContext);

$output213 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments214, $renderChildrenClosure215, $renderingContext);

$output213 .= '
						';
return $output213;
};
$arguments208 = array();
$arguments208['additionalAttributes'] = NULL;
$arguments208['data'] = NULL;
$arguments208['class'] = NULL;
$arguments208['dir'] = NULL;
$arguments208['id'] = NULL;
$arguments208['lang'] = NULL;
$arguments208['style'] = NULL;
$arguments208['title'] = NULL;
$arguments208['accesskey'] = NULL;
$arguments208['tabindex'] = NULL;
$arguments208['onclick'] = NULL;
$arguments208['newsItem'] = NULL;
$arguments208['settings'] = array (
);
$arguments208['uriOnly'] = false;
$arguments208['configuration'] = array (
);
$arguments208['content'] = '';
$arguments208['section'] = NULL;
$array210 = array (
);$arguments208['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array210);
$array211 = array (
);$arguments208['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array211);
$array212 = array (
);$arguments208['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array212);

$output207 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments208, $renderChildrenClosure209, $renderingContext);

$output207 .= '
					</span>
				</div>
			';
return $output207;
};
$arguments202 = array();
$arguments202['then'] = NULL;
$arguments202['else'] = NULL;
$arguments202['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array204 = array();
$array205 = array (
);$array204['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array205);

$expression206 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments202['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression206(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array204)
					),
					$renderingContext
				);
$arguments202['__thenClosure'] = $renderChildrenClosure203;

$output201 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments202, $renderChildrenClosure203, $renderingContext);

$output201 .= '
		';
return $output201;
};
$arguments199 = array();
$arguments199['if'] = NULL;

$output124 .= '';

$output124 .= '
	';
return $output124;
};
$arguments17 = array();
$arguments17['then'] = NULL;
$arguments17['else'] = NULL;
$arguments17['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array121 = array();
$array122 = array (
);$array121['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews', $array122);

$expression123 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments17['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression123(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array121)
					),
					$renderingContext
				);
$arguments17['__thenClosure'] = function() use ($renderingContext, $self) {
$output19 = '';

$output19 .= '
			<div class="news-img-wrap">
				';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$output25 = '';

$output25 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$output30 = '';

$output30 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$output36 = '';

$output36 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments37 = array();
$arguments37['additionalAttributes'] = NULL;
$arguments37['data'] = NULL;
$arguments37['class'] = NULL;
$arguments37['dir'] = NULL;
$arguments37['id'] = NULL;
$arguments37['lang'] = NULL;
$arguments37['style'] = NULL;
$arguments37['title'] = NULL;
$arguments37['accesskey'] = NULL;
$arguments37['tabindex'] = NULL;
$arguments37['onclick'] = NULL;
$arguments37['alt'] = NULL;
$arguments37['ismap'] = NULL;
$arguments37['longdesc'] = NULL;
$arguments37['usemap'] = NULL;
$arguments37['src'] = NULL;
$arguments37['treatIdAsReference'] = NULL;
$arguments37['image'] = NULL;
$arguments37['crop'] = NULL;
$arguments37['cropVariant'] = 'default';
$arguments37['width'] = NULL;
$arguments37['height'] = NULL;
$arguments37['minWidth'] = NULL;
$arguments37['minHeight'] = NULL;
$arguments37['maxWidth'] = NULL;
$arguments37['maxHeight'] = NULL;
$arguments37['absolute'] = false;
$array39 = array (
);$arguments37['image'] = $renderingContext->getVariableProvider()->getByPath('mediaElement', $array39);
$array40 = array (
);$arguments37['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array40);
$array41 = array (
);$arguments37['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array41);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments42 = array();
$arguments42['then'] = NULL;
$arguments42['else'] = NULL;
$arguments42['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array44 = array();
$array45 = array (
);$array44['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array45);

$expression46 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments42['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression46(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array44)
					),
					$renderingContext
				);
$array47 = array (
);$arguments42['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array47);
$array48 = array (
);$arguments42['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array48);
$arguments37['maxWidth'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments49 = array();
$arguments49['then'] = NULL;
$arguments49['else'] = NULL;
$arguments49['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array51 = array();
$array52 = array (
);$array51['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array52);

$expression53 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments49['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression53(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array51)
					),
					$renderingContext
				);
$array54 = array (
);$arguments49['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array54);
$array55 = array (
);$arguments49['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array55);
$arguments37['maxHeight'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output36 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output36 .= '
						';
return $output36;
};
$arguments31 = array();
$arguments31['then'] = NULL;
$arguments31['else'] = NULL;
$arguments31['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array33 = array();
$array34 = array (
);$array33['0'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.type', $array34);
$array33['1'] = ' == 2';

$expression35 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 2);};
$arguments31['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression35(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array33)
					),
					$renderingContext
				);
$arguments31['__thenClosure'] = $renderChildrenClosure32;

$output30 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output30 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
$output61 = '';

$output61 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments62 = array();
$arguments62['section'] = NULL;
$arguments62['partial'] = NULL;
$arguments62['delegate'] = NULL;
$arguments62['renderable'] = NULL;
$arguments62['arguments'] = array (
);
$arguments62['optional'] = false;
$arguments62['default'] = NULL;
$arguments62['contentAs'] = NULL;
$arguments62['debug'] = true;
$arguments62['partial'] = 'Detail/MediaVideo';
// Rendering Array
$array64 = array();
$array65 = array (
);$array64['mediaElement'] = $renderingContext->getVariableProvider()->getByPath('mediaElement', $array65);
$arguments62['arguments'] = $array64;

$output61 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output61 .= '
						';
return $output61;
};
$arguments56 = array();
$arguments56['then'] = NULL;
$arguments56['else'] = NULL;
$arguments56['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array58 = array();
$array59 = array (
);$array58['0'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.type', $array59);
$array58['1'] = ' == 4';

$expression60 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 4);};
$arguments56['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression60(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array58)
					),
					$renderingContext
				);
$arguments56['__thenClosure'] = $renderChildrenClosure57;

$output30 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output30 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
$output71 = '';

$output71 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments72 = array();
$arguments72['additionalAttributes'] = NULL;
$arguments72['data'] = NULL;
$arguments72['class'] = NULL;
$arguments72['dir'] = NULL;
$arguments72['id'] = NULL;
$arguments72['lang'] = NULL;
$arguments72['style'] = NULL;
$arguments72['title'] = NULL;
$arguments72['accesskey'] = NULL;
$arguments72['tabindex'] = NULL;
$arguments72['onclick'] = NULL;
$arguments72['alt'] = NULL;
$arguments72['ismap'] = NULL;
$arguments72['longdesc'] = NULL;
$arguments72['usemap'] = NULL;
$arguments72['src'] = NULL;
$arguments72['treatIdAsReference'] = NULL;
$arguments72['image'] = NULL;
$arguments72['crop'] = NULL;
$arguments72['cropVariant'] = 'default';
$arguments72['width'] = NULL;
$arguments72['height'] = NULL;
$arguments72['minWidth'] = NULL;
$arguments72['minHeight'] = NULL;
$arguments72['maxWidth'] = NULL;
$arguments72['maxHeight'] = NULL;
$arguments72['absolute'] = false;
$array74 = array (
);$arguments72['image'] = $renderingContext->getVariableProvider()->getByPath('mediaElement', $array74);
$array75 = array (
);$arguments72['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array75);
$array76 = array (
);$arguments72['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array76);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments77 = array();
$arguments77['then'] = NULL;
$arguments77['else'] = NULL;
$arguments77['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array79 = array();
$array80 = array (
);$array79['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array80);

$expression81 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments77['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression81(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array79)
					),
					$renderingContext
				);
$array82 = array (
);$arguments77['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array82);
$array83 = array (
);$arguments77['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array83);
$arguments72['maxWidth'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments84 = array();
$arguments84['then'] = NULL;
$arguments84['else'] = NULL;
$arguments84['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array86 = array();
$array87 = array (
);$array86['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array87);

$expression88 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments84['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression88(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array86)
					),
					$renderingContext
				);
$array89 = array (
);$arguments84['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array89);
$array90 = array (
);$arguments84['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array90);
$arguments72['maxHeight'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);

$output71 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);

$output71 .= '
						';
return $output71;
};
$arguments66 = array();
$arguments66['then'] = NULL;
$arguments66['else'] = NULL;
$arguments66['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array68 = array();
$array69 = array (
);$array68['0'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.type', $array69);
$array68['1'] = ' == 5';

$expression70 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 5);};
$arguments66['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression70(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array68)
					),
					$renderingContext
				);
$arguments66['__thenClosure'] = $renderChildrenClosure67;

$output30 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output30 .= '
					';
return $output30;
};
$arguments26 = array();
$arguments26['map'] = NULL;
// Rendering Array
$array28 = array();
$array29 = array (
);$array28['mediaElement'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array29);
$arguments26['map'] = $array28;

$output25 .= TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output25 .= '
				';
return $output25;
};
$arguments20 = array();
$arguments20['additionalAttributes'] = NULL;
$arguments20['data'] = NULL;
$arguments20['class'] = NULL;
$arguments20['dir'] = NULL;
$arguments20['id'] = NULL;
$arguments20['lang'] = NULL;
$arguments20['style'] = NULL;
$arguments20['title'] = NULL;
$arguments20['accesskey'] = NULL;
$arguments20['tabindex'] = NULL;
$arguments20['onclick'] = NULL;
$arguments20['newsItem'] = NULL;
$arguments20['settings'] = array (
);
$arguments20['uriOnly'] = false;
$arguments20['configuration'] = array (
);
$arguments20['content'] = '';
$arguments20['section'] = NULL;
$array22 = array (
);$arguments20['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array22);
$array23 = array (
);$arguments20['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array23);
$array24 = array (
);$arguments20['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array24);

$output19 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output19 .= '
			</div>
		';
return $output19;
};
$arguments17['__elseClosures'][] = function() use ($renderingContext, $self) {
$output91 = '';

$output91 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
$output97 = '';

$output97 .= '
				<div class="news-img-wrap">
					<span class="no-media-element">
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
$output103 = '';

$output103 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments104 = array();
$arguments104['additionalAttributes'] = NULL;
$arguments104['data'] = NULL;
$arguments104['class'] = NULL;
$arguments104['dir'] = NULL;
$arguments104['id'] = NULL;
$arguments104['lang'] = NULL;
$arguments104['style'] = NULL;
$arguments104['title'] = NULL;
$arguments104['accesskey'] = NULL;
$arguments104['tabindex'] = NULL;
$arguments104['onclick'] = NULL;
$arguments104['alt'] = NULL;
$arguments104['ismap'] = NULL;
$arguments104['longdesc'] = NULL;
$arguments104['usemap'] = NULL;
$arguments104['src'] = NULL;
$arguments104['treatIdAsReference'] = NULL;
$arguments104['image'] = NULL;
$arguments104['crop'] = NULL;
$arguments104['cropVariant'] = 'default';
$arguments104['width'] = NULL;
$arguments104['height'] = NULL;
$arguments104['minWidth'] = NULL;
$arguments104['minHeight'] = NULL;
$arguments104['maxWidth'] = NULL;
$arguments104['maxHeight'] = NULL;
$arguments104['absolute'] = false;
$array106 = array (
);$arguments104['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array106);
$arguments104['title'] = '';
$arguments104['alt'] = '';
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
);$array109['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array110);

$expression111 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments107['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression111(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array109)
					),
					$renderingContext
				);
$array112 = array (
);$arguments107['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array112);
$array113 = array (
);$arguments107['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array113);
$arguments104['maxWidth'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments114 = array();
$arguments114['then'] = NULL;
$arguments114['else'] = NULL;
$arguments114['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array116 = array();
$array117 = array (
);$array116['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array117);

$expression118 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments114['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression118(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array116)
					),
					$renderingContext
				);
$array119 = array (
);$arguments114['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array119);
$array120 = array (
);$arguments114['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array120);
$arguments104['maxHeight'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext);

$output103 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext);

$output103 .= '
						';
return $output103;
};
$arguments98 = array();
$arguments98['additionalAttributes'] = NULL;
$arguments98['data'] = NULL;
$arguments98['class'] = NULL;
$arguments98['dir'] = NULL;
$arguments98['id'] = NULL;
$arguments98['lang'] = NULL;
$arguments98['style'] = NULL;
$arguments98['title'] = NULL;
$arguments98['accesskey'] = NULL;
$arguments98['tabindex'] = NULL;
$arguments98['onclick'] = NULL;
$arguments98['newsItem'] = NULL;
$arguments98['settings'] = array (
);
$arguments98['uriOnly'] = false;
$arguments98['configuration'] = array (
);
$arguments98['content'] = '';
$arguments98['section'] = NULL;
$array100 = array (
);$arguments98['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array100);
$array101 = array (
);$arguments98['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array101);
$array102 = array (
);$arguments98['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array102);

$output97 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments98, $renderChildrenClosure99, $renderingContext);

$output97 .= '
					</span>
				</div>
			';
return $output97;
};
$arguments92 = array();
$arguments92['then'] = NULL;
$arguments92['else'] = NULL;
$arguments92['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array94 = array();
$array95 = array (
);$array94['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array95);

$expression96 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments92['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression96(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array94)
					),
					$renderingContext
				);
$arguments92['__thenClosure'] = $renderChildrenClosure93;

$output91 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext);

$output91 .= '
		';
return $output91;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output0 .= '


	<!-- teaser -->
	<div class="teaser-text">
		';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\RemoveMediaTagsViewHelper
$renderChildrenClosure232 = function() use ($renderingContext, $self) {
$output233 = '';

$output233 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure235 = function() use ($renderingContext, $self) {
$output257 = '';

$output257 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure259 = function() use ($renderingContext, $self) {
$output260 = '';

$output260 .= '
				<div itemprop="description">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure262 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure264 = function() use ($renderingContext, $self) {
$array268 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array268);
};
$arguments263 = array();
$arguments263['maxCharacters'] = NULL;
$arguments263['append'] = '&hellip;';
$arguments263['respectWordBoundaries'] = true;
$arguments263['respectHtml'] = true;
$array265 = array (
);$arguments263['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('settings.cropMaxCharacters', $array265);
// Rendering Boolean node
// Rendering Array
$array266 = array();
$array266['0'] = 1;

$expression267 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments263['respectWordBoundaries'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression267(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array266)
					),
					$renderingContext
				);
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments263, $renderChildrenClosure264, $renderingContext);
};
$arguments261 = array();
$arguments261['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output260 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments261, $renderChildrenClosure262, $renderingContext);

$output260 .= '</div>
			';
return $output260;
};
$arguments258 = array();

$output257 .= '';

$output257 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure270 = function() use ($renderingContext, $self) {
$output271 = '';

$output271 .= '
				<div itemprop="description">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure273 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure275 = function() use ($renderingContext, $self) {
$array279 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.bodytext', $array279);
};
$arguments274 = array();
$arguments274['maxCharacters'] = NULL;
$arguments274['append'] = '&hellip;';
$arguments274['respectWordBoundaries'] = true;
$arguments274['respectHtml'] = true;
$array276 = array (
);$arguments274['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('settings.cropMaxCharacters', $array276);
// Rendering Boolean node
// Rendering Array
$array277 = array();
$array277['0'] = 1;

$expression278 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments274['respectWordBoundaries'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression278(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array277)
					),
					$renderingContext
				);
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments274, $renderChildrenClosure275, $renderingContext);
};
$arguments272 = array();
$arguments272['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output271 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments272, $renderChildrenClosure273, $renderingContext);

$output271 .= '</div>
			';
return $output271;
};
$arguments269 = array();
$arguments269['if'] = NULL;

$output257 .= '';

$output257 .= '
		';
return $output257;
};
$arguments234 = array();
$arguments234['then'] = NULL;
$arguments234['else'] = NULL;
$arguments234['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array254 = array();
$array255 = array (
);$array254['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array255);

$expression256 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments234['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression256(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array254)
					),
					$renderingContext
				);
$arguments234['__thenClosure'] = function() use ($renderingContext, $self) {
$output236 = '';

$output236 .= '
				<div itemprop="description">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure238 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure240 = function() use ($renderingContext, $self) {
$array244 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array244);
};
$arguments239 = array();
$arguments239['maxCharacters'] = NULL;
$arguments239['append'] = '&hellip;';
$arguments239['respectWordBoundaries'] = true;
$arguments239['respectHtml'] = true;
$array241 = array (
);$arguments239['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('settings.cropMaxCharacters', $array241);
// Rendering Boolean node
// Rendering Array
$array242 = array();
$array242['0'] = 1;

$expression243 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments239['respectWordBoundaries'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression243(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array242)
					),
					$renderingContext
				);
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments239, $renderChildrenClosure240, $renderingContext);
};
$arguments237 = array();
$arguments237['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output236 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments237, $renderChildrenClosure238, $renderingContext);

$output236 .= '</div>
			';
return $output236;
};
$arguments234['__elseClosures'][] = function() use ($renderingContext, $self) {
$output245 = '';

$output245 .= '
				<div itemprop="description">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure247 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure249 = function() use ($renderingContext, $self) {
$array253 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.bodytext', $array253);
};
$arguments248 = array();
$arguments248['maxCharacters'] = NULL;
$arguments248['append'] = '&hellip;';
$arguments248['respectWordBoundaries'] = true;
$arguments248['respectHtml'] = true;
$array250 = array (
);$arguments248['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('settings.cropMaxCharacters', $array250);
// Rendering Boolean node
// Rendering Array
$array251 = array();
$array251['0'] = 1;

$expression252 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments248['respectWordBoundaries'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression252(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array251)
					),
					$renderingContext
				);
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments248, $renderChildrenClosure249, $renderingContext);
};
$arguments246 = array();
$arguments246['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output245 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments246, $renderChildrenClosure247, $renderingContext);

$output245 .= '</div>
			';
return $output245;
};

$output233 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments234, $renderChildrenClosure235, $renderingContext);

$output233 .= '
		';
return $output233;
};
$arguments231 = array();

$output0 .= GeorgRinger\News\ViewHelpers\RemoveMediaTagsViewHelper::renderStatic($arguments231, $renderChildrenClosure232, $renderingContext);

$output0 .= '

		';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure281 = function() use ($renderingContext, $self) {
$output285 = '';

$output285 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure287 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments286 = array();
$arguments286['key'] = NULL;
$arguments286['id'] = NULL;
$arguments286['default'] = NULL;
$arguments286['arguments'] = NULL;
$arguments286['extensionName'] = NULL;
$arguments286['languageKey'] = NULL;
$arguments286['alternativeLanguageKeys'] = NULL;
$arguments286['key'] = 'more-link';

$output285 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments286, $renderChildrenClosure287, $renderingContext)]);

$output285 .= '
		';
return $output285;
};
$arguments280 = array();
$arguments280['additionalAttributes'] = NULL;
$arguments280['data'] = NULL;
$arguments280['class'] = NULL;
$arguments280['dir'] = NULL;
$arguments280['id'] = NULL;
$arguments280['lang'] = NULL;
$arguments280['style'] = NULL;
$arguments280['title'] = NULL;
$arguments280['accesskey'] = NULL;
$arguments280['tabindex'] = NULL;
$arguments280['onclick'] = NULL;
$arguments280['newsItem'] = NULL;
$arguments280['settings'] = array (
);
$arguments280['uriOnly'] = false;
$arguments280['configuration'] = array (
);
$arguments280['content'] = '';
$arguments280['section'] = NULL;
$array282 = array (
);$arguments280['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array282);
$array283 = array (
);$arguments280['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array283);
$arguments280['class'] = 'more';
$array284 = array (
);$arguments280['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array284);

$output0 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments280, $renderChildrenClosure281, $renderingContext);

$output0 .= '
	</div>

	<!-- footer information -->
	<div class="footer">
		<p>
			<!-- date -->
			<span class="news-list-date">
				<time itemprop="datePublished" datetime="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure289 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments288 = array();
$arguments288['date'] = NULL;
$arguments288['format'] = '';
$arguments288['base'] = NULL;
$array290 = array (
);$arguments288['date'] = $renderingContext->getVariableProvider()->getByPath('newsItem.datetime', $array290);
$arguments288['format'] = 'Y-m-d';
$renderChildrenClosure289 = ($arguments288['date'] !== null) ? function() use ($arguments288) { return $arguments288['date']; } : $renderChildrenClosure289;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments288, $renderChildrenClosure289, $renderingContext)]);

$output0 .= '">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure292 = function() use ($renderingContext, $self) {
$array295 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.datetime', $array295);
};
$arguments291 = array();
$arguments291['date'] = NULL;
$arguments291['format'] = '';
$arguments291['base'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure294 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments293 = array();
$arguments293['key'] = NULL;
$arguments293['id'] = NULL;
$arguments293['default'] = NULL;
$arguments293['arguments'] = NULL;
$arguments293['extensionName'] = NULL;
$arguments293['languageKey'] = NULL;
$arguments293['alternativeLanguageKeys'] = NULL;
$arguments293['key'] = 'dateFormat';
$arguments291['format'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments293, $renderChildrenClosure294, $renderingContext);
$renderChildrenClosure292 = ($arguments291['date'] !== null) ? function() use ($arguments291) { return $arguments291['date']; } : $renderChildrenClosure292;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments291, $renderChildrenClosure292, $renderingContext)]);

$output0 .= '
				</time>
			</span>

			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure297 = function() use ($renderingContext, $self) {
$output301 = '';

$output301 .= '
				<!-- first category -->
				<span class="news-list-category">';
$array302 = array (
);
$output301 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.firstCategory.title', $array302)]);

$output301 .= '</span>
			';
return $output301;
};
$arguments296 = array();
$arguments296['then'] = NULL;
$arguments296['else'] = NULL;
$arguments296['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array298 = array();
$array299 = array (
);$array298['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.firstCategory', $array299);

$expression300 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments296['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression300(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array298)
					),
					$renderingContext
				);
$arguments296['__thenClosure'] = $renderChildrenClosure297;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments296, $renderChildrenClosure297, $renderingContext);

$output0 .= '

			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure304 = function() use ($renderingContext, $self) {
$output308 = '';

$output308 .= '
				<!-- Tags -->
				<span class="news-list-tags" itemprop="keywords">
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure310 = function() use ($renderingContext, $self) {
$output312 = '';

$output312 .= '
						';
$array313 = array (
);
$output312 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('tag.title', $array313)]);

$output312 .= '
					';
return $output312;
};
$arguments309 = array();
$arguments309['each'] = NULL;
$arguments309['as'] = NULL;
$arguments309['key'] = NULL;
$arguments309['reverse'] = false;
$arguments309['iteration'] = NULL;
$array311 = array (
);$arguments309['each'] = $renderingContext->getVariableProvider()->getByPath('newsItem.tags', $array311);
$arguments309['as'] = 'tag';

$output308 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments309, $renderChildrenClosure310, $renderingContext);

$output308 .= '
				</span>
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
);$array305['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.tags', $array306);

$expression307 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments303['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression307(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array305)
					),
					$renderingContext
				);
$arguments303['__thenClosure'] = $renderChildrenClosure304;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments303, $renderChildrenClosure304, $renderingContext);

$output0 .= '

			<!-- author -->
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure315 = function() use ($renderingContext, $self) {
$output319 = '';

$output319 .= '
				<span class="news-list-author">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure321 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments320 = array();
$arguments320['key'] = NULL;
$arguments320['id'] = NULL;
$arguments320['default'] = NULL;
$arguments320['arguments'] = NULL;
$arguments320['extensionName'] = NULL;
$arguments320['languageKey'] = NULL;
$arguments320['alternativeLanguageKeys'] = NULL;
$arguments320['key'] = 'author';
// Rendering Array
$array322 = array();
$array323 = array (
);$array322['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.author', $array323);
$arguments320['arguments'] = $array322;

$output319 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments320, $renderChildrenClosure321, $renderingContext)]);

$output319 .= '
				</span>
			';
return $output319;
};
$arguments314 = array();
$arguments314['then'] = NULL;
$arguments314['else'] = NULL;
$arguments314['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array316 = array();
$array317 = array (
);$array316['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.author', $array317);

$expression318 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments314['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression318(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array316)
					),
					$renderingContext
				);
$arguments314['__thenClosure'] = $renderChildrenClosure315;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments314, $renderChildrenClosure315, $renderingContext);

$output0 .= '
		</p>
	</div>
</div>

';

return $output0;
}


}
#