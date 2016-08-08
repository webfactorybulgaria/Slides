<?php

namespace TypiCMS\Modules\Slides\Models;

use TypiCMS\Modules\Core\Shells\Models\BaseTranslation;

class SlideTranslation extends BaseTranslation
{
    /**
     * get the parent model.
     */
    public function owner()
    {
        return $this->belongsTo('TypiCMS\Modules\Slides\Shells\Models\Slide', 'slide_id')->withoutGlobalScopes();
    }
}
