<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Address;

class Contact extends Model
{
  public function address()
  {
      return $this->hasOne('App\Address','addressable_id');
  }

  public function customer()
  {
      return $this->address()->where('addressable_type', 'customer');
  }

  public function billing()
  {
      return $this->address()->where('addressable_type', 'billing');
  }

  public function shipping()
  {
      return $this->address()->where('addressable_type', 'shipping');
  }
}
