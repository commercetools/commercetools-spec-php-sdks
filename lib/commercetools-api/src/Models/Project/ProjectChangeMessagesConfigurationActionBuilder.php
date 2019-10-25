<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Api\Models\Message\MessageConfigurationDraft;
use Commercetools\Api\Models\Message\MessageConfigurationDraftBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<ProjectChangeMessagesConfigurationAction>
 */
final class ProjectChangeMessagesConfigurationActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var MessageConfigurationDraft|?MessageConfigurationDraftBuilder
     */
    private $messagesConfiguration;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @return null|MessageConfigurationDraft
     */
    public function getMessagesConfiguration()
    {
        return $this->messagesConfiguration instanceof MessageConfigurationDraftBuilder ? $this->messagesConfiguration->build() : $this->messagesConfiguration;
    }

    /**
     * @return $this
     */
    public function withAction(?string $action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * @return $this
     */
    public function withMessagesConfiguration(?MessageConfigurationDraft $messagesConfiguration)
    {
        $this->messagesConfiguration = $messagesConfiguration;

        return $this;
    }

    /**
     * @return $this
     */
    public function withMessagesConfigurationBuilder(?MessageConfigurationDraftBuilder $messagesConfiguration)
    {
        $this->messagesConfiguration = $messagesConfiguration;

        return $this;
    }

    public function build(): ProjectChangeMessagesConfigurationAction
    {
        return new ProjectChangeMessagesConfigurationActionModel(
            $this->action,
            ($this->messagesConfiguration instanceof MessageConfigurationDraftBuilder ? $this->messagesConfiguration->build() : $this->messagesConfiguration)
        );
    }

    public static function of(): ProjectChangeMessagesConfigurationActionBuilder
    {
        return new self();
    }
}