<?php
/**
 * This file is part of the ZBateson\MailMimeParser project.
 *
 * @license http://opensource.org/licenses/bsd-license.php BSD
 */

namespace ZBateson\MailMimeParser\Message\Factory;

use ZBateson\MailMimeParser\Stream\StreamFactory;
use ZBateson\MailMimeParser\Message\IMessagePart;

/**
 * Abstract factory for subclasses of IMessagePart.
 *
 * @author Zaahid Bateson
 */
abstract class IMessagePartFactory
{
    /**
     * @var StreamFactory
     */
    protected StreamFactory $streamFactory;

    /**
     * @var PartStreamContainerFactory
     */
    protected PartStreamContainerFactory $partStreamContainerFactory;

    public function __construct(
        StreamFactory $streamFactory,
        PartStreamContainerFactory $partStreamContainerFactory
    ) {
        $this->streamFactory = $streamFactory;
        $this->partStreamContainerFactory = $partStreamContainerFactory;
    }

    /**
     * Constructs a new IMessagePart object and returns it
     */
    abstract public function newInstance() : IMessagePart;
}
