<?php

namespace Ssx\RemoveElasticSuiteNotification\Plugin;

use Smile\ElasticsuiteCore\Model\System\Message\NotificationAboutVersions;

class RemoveElasticSuiteNotice
{
    /**
     * @param NotificationAboutVersions $subject
     * @param bool $result
     * @return bool
     */
    public function afterIsDisplayed(NotificationAboutVersions $subject, bool $result): bool
    {
        return false;
    }
}
