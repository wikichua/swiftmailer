<?php
class Swift_Mime_ContentEncoder_MBQPContentEncoder extends Swift_Encoder_MBQPEncoder
  implements Swift_Mime_ContentEncoder 
{
  /**
   * (non-PHPdoc)
   * @see lib/ext/Swift/classes/Swift/Mime/Swift_Mime_ContentEncoder#encodeByteStream($os, $is, $firstLineOffset, $maxLineLength)
   */
  public function encodeByteStream(Swift_OutputByteStream $os, Swift_InputByteStream $is, $firstLineOffset = 0,
    $maxLineLength = 76) {
    $is->write($this->encodeString($os->read(PHP_INT_MAX),$firstLineOffset));
  }

  /**
   * 
   */
  public function getName()
  {
    return 'quoted-printable';
  }
}