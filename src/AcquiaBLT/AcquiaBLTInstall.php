<?php

namespace AcquiaBLT;

use Composer\Script\Event;

class AcquiaBLTInstall
{
  // Occurs after install command has been executed with a lock file present.
  public static function postInstall(Event $event) {
    $event->getIO()->write("Post install");
  }

  public static function postPackageInstall(Event $event) {
    $event->getIO()->write("Post package install");
  }

  public static function postRootPackageInstall(Event $event) {
    $event->getIO()->write("Post Root Package install");
  }
}