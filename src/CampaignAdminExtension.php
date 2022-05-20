<?php

namespace SilverStripe\CampaignAdmin;

use SilverStripe\Core\Extension;
use SilverStripe\View\Requirements;

class CampaignAdminExtension extends Extension
{
    public function init()
    {
        Requirements::add_i18n_javascript('werkbot/campaign-admin: client/lang', false, true);
        Requirements::javascript('werkbot/campaign-admin: client/dist/js/bundle.js');
        Requirements::css('werkbot/campaign-admin: client/dist/styles/bundle.css');
    }
}
