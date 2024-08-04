<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Model;

class TranslateService
{

    /**
	 * Fetches the locales from application configuration.
	 *
	 * @return array
	 */
	public function getLocales()
	{
        return config('app.supported_languages');
	}


    /**
     * Get the translatable fields for the model with the given key name
     * @param Model $model
     * @param string $keyName
     * @return string
     */
    public function getTranslatables($model, $keyName)
    {
        $keyDictionary = $this->getTranslatableKeys($model);
        $locale = app()->getLocale();
        return $keyDictionary[$keyName][$locale . '_' . $keyName];
    }

    /**
     * Get the translatable keys for the model
     * @param Model $model
     * @return mixed
     */
    public function getTranslatableKeys($model)
    {
        $languages = $this->getLocales();
        $keyDictionary = [];
        foreach ($languages as $language) {
            foreach($this->getTranslatableFields($model) as $translatable) {
                $langKey = $language . '_' . $translatable;
                $keyDictionary[$translatable][$langKey] = $model->$langKey;
            }
        }
        return $keyDictionary;
    }



    public function getTranslatableFields($model)
    {
        return $model::translatables;
    }

    public function mapTranslatablestoData($model, $data)
    {
        $translations = [];
        foreach ($this->getLocales() as $locale) {
            foreach ($this->getTranslatableFields($model) as $field) {
                $translations[] = $locale . '_' . $field;
            }
        }

        return collect($translations)->flatMap(function ($translation) use ($data) {
            return [
                $translation => $data[$translation]
            ];
        });
    }
}
