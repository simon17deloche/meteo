<?php

class CNAlpsWeather extends WP_Widget
{
    public function __construct()
    {
        parent::__construct('CNAlpsWeather', 'Meteo Widget');
    }

    public function widget($args, $instance)
    {
        ?>
        <div class="cnalps-weather-widget">
            <div class="weather-title">Météo à Crest</div>
        </div>
        <?php
    }

    public function form($instance)
    {

    }

    public function update($newInstance, $oldInstance)
    {
        return [];
    }
}