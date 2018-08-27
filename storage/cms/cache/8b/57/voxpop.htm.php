<?php 
use RainLab\Translate\Classes\Translator;
class Cms5b6352079ee5a213636874_a3a442baede966757b7780bed5a10e28Class extends \Cms\Classes\PageCode
{
public function onStart()
{

    $this->translator = Translator::instance();
    $locale = $this->translator->getLocale();

    if ($locale == "fr") {
        $this["pageTitle"] = "Vidéos sur les forêts du Québec";
        $this["pageDescription"] = "Visionnez les capsules pour apprendre davantage sur plusieurs aspects liés à nos forêts comme la coupe à blanc, le caribou forestier, l'aménagement forestier.";
        $this["pageKeywords"] = "";
    } else if ($locale == "en") {
        $this["pageTitle"] = "Quebec's forest management plan videos";
        $this["pageDescription"] = "Watch the videos to learn more about many issues related to our forests, such as clearcutting, the woodland caribou, forest management.";
        $this["pageKeywords"] = "";
    }

    $this['pageClass'] = 'page-voxpop';

    $video_flags = "?autoplay=1&rel=0";
    $this['slides'] = [
        [
            'slug' => 'video-foret',
            'title' => 'La forêt d’aujourd’hui',
            'image' => 'assets/public/images/voxpop-aujourdhui.jpg',
            'video' => 'https://www.youtube.com/embed/pi4c9gIalqk' . $video_flags,
        ],
        [
            'slug' => 'video-avenir',
            'title' => 'Faire pousser l’avenir',
            'image' => 'assets/public/images/voxpop-avenir.jpg',
            'video' => 'https://www.youtube.com/embed/OziKUVBU3qM' . $video_flags,
        ],
        [
            'slug' => 'video-responsabilite',
            'title' => 'Une responsabilité partagée',
            'image' => 'assets/public/images/voxpop-responsabilite.jpg',
            'video' => 'https://www.youtube.com/embed/4y_CmZVwbqE' . $video_flags,
        ],
        [
            'slug' => 'video-climat',
            'title' => 'La lutte aux changements climatiques',
            'image' => 'assets/public/images/voxpop-climat.jpg',
            'video' => 'https://www.youtube.com/embed/4wjxcndcSu0' . $video_flags,
        ],
    ];

    $this['slidesEN'] = [
        [
            'slug' => 'video-foret',
            'title' => 'The Forest Today',
            'image' => 'assets/public/images/voxpop-aujourdhui.jpg',
            'video' => 'https://www.youtube.com/embed/pi4c9gIalqk' . $video_flags,
        ],
        [
            'slug' => 'video-avenir',
            'title' => 'Growing the Future ',
            'image' => 'assets/public/images/voxpop-avenir.jpg',
            'video' => 'https://www.youtube.com/embed/OziKUVBU3qM' . $video_flags,
        ],
        [
            'slug' => 'video-responsabilite',
            'title' => 'A Shared Responsibility',
            'image' => 'assets/public/images/voxpop-responsabilite.jpg',
            'video' => 'https://www.youtube.com/embed/4y_CmZVwbqE' . $video_flags,
        ],
        [
            'slug' => 'video-climat',
            'title' => 'Fighting Climate Change',
            'image' => 'assets/public/images/voxpop-climat.jpg',
            'video' => 'https://www.youtube.com/embed/4wjxcndcSu0' . $video_flags,
        ],
    ];
}
}
