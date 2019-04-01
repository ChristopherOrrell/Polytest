<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Address;

class Contact extends Model
{
  public function address()
  {
      return $this->hasOne('App\Address','contact_id');
  }

  public function customer()
  {
      return $this->address()->where('type', 'customer');
  }

  public function billing()
  {
      return $this->address()->where('type', 'billing');
  }

  public function shipping()
  {
      return $this->address()->where('type', 'shipping');
  }
}
