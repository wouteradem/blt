<?php

namespace AcquiaBLT;

use Composer\Script\Event;

class AcquiaBLTInstall
{

  public static function postInstall(Event $event) {
    $event->getIO()->write("Post install");
  }

  public static function postPackageInstall(Event $event) {
    $event->getIO()->write("Post package install");
  }
}