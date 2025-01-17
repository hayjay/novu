<?php

namespace Novu\SDK\Actions;

use Novu\SDK\Resources\Trigger;

trait ManagesTriggers
{
   
    /**
     * Trigger event
     *
     * @param array $data
     * @return \Nova\SDK\Resources\Trigger
     */
    public function triggerEvent(array $data)
    {
        $response = $this->post("events/trigger", $data)['data'];

        return new Trigger($response, $this);
    }

    /**
     * Broadcast event to all
     *
     * @param array $data
     * @return \Nova\SDK\Resources\Trigger
     */
    public function broadcastEvent(array $data)
    {
        $response = $this->post("events/trigger/broadcast", $data)['data'];

        return new Trigger($response, $this);
    }

    /**
     * Cancel triggered event
     *
     * @return \Nova\SDK\Resources\Trigger
     */
    public function cancelEvent($transactionId)
    {
        $response = $this->delete("events/trigger/{$transactionId}")['data'];

        return new Trigger($response, $this);
    }

}