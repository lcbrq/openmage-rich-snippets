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

    /**
     * Escape string for JSON
     *
     * @param string $string
     * @return string
     */
    public function filter($string)
    {
        $string = trim(strip_tags((string)$string));
        $string = html_entity_decode($string, ENT_QUOTES | ENT_HTML5, 'UTF-8');
        $string = json_encode((string)$string, JSON_UNESCAPED_UNICODE);

        return substr($string, 1, -1);
    }

}
