<?php

/**
 * @author Tomasz Silpion Gregorczyk <tom@lcbrq.com>
 */
class LCB_RichSnippets_Block_Catalog_Breadcrumbs extends LCB_RichSnippets_Block_Widget
{
    /**
     * @return array
     */
    public function getCrumbs()
    {
        if ($breadcrumbsBlock = $this->getLayout()->getBlock('breadcrumbs')) {
            return isset($breadcrumbsBlock->_viewVars) ? $breadcrumbsBlock->_viewVars['crumbs'] : [];
        }

        return [];
    }

}
