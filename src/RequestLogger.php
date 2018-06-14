<?php

namespace SetBased\Abc\RequestLogger;

/**
 * Interface for defining classes for logging HTTP page requests.
 */
interface RequestLogger
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Logs the HTTP page request.
   *
   * @param int $status The HTTP status code.
   *
   * @return void
   *
   * @api
   * @since 1.0.0
   */
  public function logRequest(int $status): void;

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
