# Slides

This module is part of [TypiCMS](https://github.com/TypiCMS/Base), a multilingual CMS based on Laravel 5.

To add slides, use the following:

@if($slides = Slides::all() and $slides->count())
    @include('slides::public._slider', ['items' => $slides])
@endif
