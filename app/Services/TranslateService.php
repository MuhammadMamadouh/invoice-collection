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
	public static function getLocales()
	{
        return config('app.supported_languages');
	}


    /**
     * Get the translatable fields for the model with the given key name
     * @param Model $model
     * @param string $keyName
     * @return string
     */
    public static function getTranslatables($model, $keyName)
    {
        $keyDictionary = self::getTranslatableKeys($model);
        $locale = app()->getLocale();
        return $keyDictionary[$keyName][$locale . '_' . $keyName];
    }

    /**
     * Get the translatable keys for the model
     * @param Model $model
     * @return mixed
     */
    public static function getTranslatableKeys($model)
    {
        $languages = self::getLocales();
        $keyDictionary = [];
        foreach ($languages as $language) {
            foreach(self::getTranslatableFields($model) as $translatable) {
                $langKey = $language . '_' . $translatable;
                $keyDictionary[$translatable][$langKey] = $model->$langKey;
            }
        }
        return $keyDictionary;
    }



    public static function getTranslatableFields($model)
    {
        return $model::getTranslatableFields();
    }

    public static function mapTranslatablestoData($model, $data)
    {
        $translations = [];
        foreach (self::getLocales() as $locale) {
            foreach (self::getTranslatableFields($model) as $field) {
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
