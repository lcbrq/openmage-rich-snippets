<?php

/**
 * @author Tomasz Silpion Gregorczyk <tom@lcbrq.com>
 */
class LCB_RichSnippets_Block_Wordpress_Post extends LCB_RichSnippets_Block_Widget
{
    /**
     * @return Fishpig_Wordpress_Model_Post|null
     */
    public function getPost()
    {
        return Mage::registry('wordpress_post');
    }

}
