<?php

namespace Novu\SDK\Actions;

use Novu\SDK\Resources\NotificationTemplate;

trait ManagesNotificationTemplates
{
   
    /**
     * Get Notification Templates
     *
     * @return \Nova\SDK\Resources\NotificationTemplate
     */
    public function getNotificationTemplates()
    {
        $response = $this->get("notification-templates")['data'];

        return new NotificationTemplate($response, $this);
    }

    /**
     * Create notification template
     *
     * @return \Nova\SDK\Resources\NotificationTemplate
     */
    public function createNotificationTemplate(array $data)
    {
        $response = $this->post("notification-templates", $data)['data'];

        return new NotificationTemplate($response, $this);
    }

    /**
     * Get One Notification Template
     *
     * @param string $templateId
     * @return \Nova\SDK\Resources\NotificationTemplate
     */
    public function getANotificationTemplate($templateId)
    {
        $response = $this->get("notification-templates/{$templateId}")['data'];

        return new NotificationTemplate($response, $this);
    }

    /**
     * Update Notification Template
     *
     * @param string $templateId
     * @param array  $data
     * @return \Nova\SDK\Resources\NotificationTemplate
     */
    public function updateNotificationTemplateStatus($templateId, array $data)
    {
        $response = $this->put("notification-templates/{$templateId}/status", $data)['data'];

        return new NotificationTemplate($response, $this);
    }

    /**
     * Delete Notification Template
     *
     * @return \Nova\SDK\Resources\NotificationTemplate
     */
    public function deleteNotificationTemplate($templateId)
    {
        $response = $this->delete("notification-templates/{$templateId}")['data'];

        return new NotificationTemplate($response, $this);
    }

}