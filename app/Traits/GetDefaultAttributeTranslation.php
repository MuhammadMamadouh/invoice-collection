<?php

namespace App\Traits;

trait GetDefaultAttributeTranslation
{
    public function getAttribute($key)
    {
        $translatableFeilds = $this->getTranslatableFields();
        if (in_array($key, $translatableFeilds)) {
            $locale = app()->getLocale();
            return $this->attributes[$locale . '_' . $key];
        }
        return parent::getAttribute($key);
    }
}
