<?php

/**
 * @author Tomasz Silpion Gregorczyk <tom@lcbrq.com>
 */
class LCB_RichSnippets_Block_Widget extends Mage_Core_Block_Template
{
    /**
     * @return string
     */
    public function getLanguage()
    {
        return str_replace('_', '-', Mage::app()->getLocale()->getLocaleCode());
    }

    /**
     * @inheritDoc
     */
    public function formatDate($date = null, $format = Mage_Core_Model_Locale::FORMAT_TYPE_SHORT, $showTime = false)
    {
        if (!$date) {
            return '';
        }

        return date('c', strtotime($date));
    }
}
