<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace TON\Boc\Async;

use TON\Boc\ResultOfGetCodeSalt;
use TON\TonClientException;
use TON\TonRequest;

class AsyncResultOfGetCodeSalt
{
    /** TON request handle. */
    private TonRequest $_request;

    /**
     * AsyncResultOfGetCodeSalt constructor.
     * @param TonRequest $request Request handle.
     */
    public function __construct(TonRequest $request)
    {
        $this->_request = $request;
    }

    /**
     * Blocks until function execution is finished and returns execution result.
     * @param int $timeout Await timeout in millis. -1 means no timeout.
     * @return ResultOfGetCodeSalt Function execution result.
     * @throws TonClientException Function execution error.
     */
    public function await(int $timeout = -1): ResultOfGetCodeSalt
    {
        return new ResultOfGetCodeSalt($this->_request->await($timeout));
    }
}
