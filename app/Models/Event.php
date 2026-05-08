<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    private $title;
    private $data;
    private $attendeeCount;
    private $maxAttendeeCount = 5000;

    function __construct($title, $data, $attendeeCount) {
    $this->title = $title;
    $this->data = $data;
    $this->attendeeCount = $attendeeCount;
  }
      public static function create(
        string $title,
        string $data,
        int    $attendeeCount,
    ): self {
        return new self($title, $data, $attendeeCount);
    }

    public function html(): string
    {
        return sprintf(
            '<h2>%s %s</h2><p>Attendee Count: <b>%s</b></p>',
            $this->title,
            $this->data,
            $this->attendeeCount,
        );
    }

  function showInfo() {
    echo "Title: " . $this->title . "\nData: " . $this->data . "\nAttendees: " . $this->attendeeCount . "\n" . 
    "=================================" . "\n";
  }
    function showAttendeeCount() {
        return attendeeCount;
    }
    function addAttendee($skaits){
        if ($skaits > $maxAttendeeCount){
            $skaits = $maxAttendeeCount;
            } else {
                $this->attendeeCount += $skaits;
            }
    }
}
