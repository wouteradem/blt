<?php

namespace AcquiaBLT;

use ComposerScriptEvent;

class AcquiaBLTInstall
{

  public static function postInstall(Event $event) {
    echo "Post Install function \n";
  }
}