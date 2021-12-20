<?php

namespace UniSharp\LaravelFilemanager\Handlers;

class ConfigHandler
{
    public function userField()
    {
        return auth()->id();
    }

    public function resourceField()
    {
        return request('resourceId');
    }
}
