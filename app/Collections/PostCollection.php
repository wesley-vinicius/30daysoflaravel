<?php 

namespace App\Collections;

use Illuminate\Database\Eloquent\Collection;

class PostCollection extends Collection
{

    public function withGoogleAsTitle()
    {
        return $this->where('title', '=', 'test');
    }

}
