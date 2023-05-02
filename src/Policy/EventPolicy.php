<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Event;
use Authorization\IdentityInterface;

/**
 * Event policy
 */
class EventPolicy
{
    public function canIndex(IdentityInterface $user, Event $event)
    {
        return $this->isAuthor($user, $event);
    }
    /**
     * Check if $user can create Event
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Event $event
     * @return bool
     */
    public function canAdd(IdentityInterface $user, Event $event)
    {
        return true;
    }

    /**
     * Check if $user can update Event
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Event $event
     * @return bool
     */
    public function canEdit(IdentityInterface $user, Event $event)
    {
        return $this->isAuthor($user, $event);
    }

    /**
     * Check if $user can delete Event
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Event $event
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Event $event)
    {
        return $this->isAuthor($user, $event);
    }

    /**
     * Check if $user can view Event
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Event $event
     * @return bool
     */
    public function canView(IdentityInterface $user, Event $event)
    {
        return true;
    }

    protected function isAuthor(IdentityInterface $user, Event $event)
    {
        return $event->user_id === $user->getIdentifier();
    }
}
