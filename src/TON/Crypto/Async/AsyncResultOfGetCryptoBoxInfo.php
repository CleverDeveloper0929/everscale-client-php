<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace TON\Crypto\Async;

use TON\AsyncInterface;
use TON\Crypto\ResultOfGetCryptoBoxInfo;
use TON\JoinableInterface;
use TON\TonClientException;
use TON\TonRequest;

class AsyncResultOfGetCryptoBoxInfo implements AsyncInterface
{
    /** TON request handle. */
    private TonRequest $_request;

    /**
     * AsyncResultOfGetCryptoBoxInfo constructor.
     * @param TonRequest $request Request handle.
     */
    public function __construct(TonRequest $request)
    {
        $this->_request = $request;
    }

    /**
     * Blocks until function execution is finished and returns execution result.
     * @param int $timeout Await timeout in millis. -1 means no timeout.
     * @return ResultOfGetCryptoBoxInfo Function execution result.
     * @throws TonClientException Function execution error.
     */
    public function await(int $timeout = -1): ResultOfGetCryptoBoxInfo
    {
        return new ResultOfGetCryptoBoxInfo($this->_request->await($timeout));
    }

    /**
     * @param JoinableInterface $joinable Another request to join to.
     * @param int $disconnect Disconnect option.
     * @return $this
     */
    public function join(JoinableInterface $joinable, int $disconnect = 1): self
    {
        $this->_request->join($joinable->getRequest(), $disconnect);
        return $this;
    }

    /**
     * @param JoinableInterface $joinable Request to disconnect from.
     */
    public function disconnect(JoinableInterface $joinable): self
    {
        $this->_request->disconnect($joinable->getRequest());
        return $this;
    }
}
