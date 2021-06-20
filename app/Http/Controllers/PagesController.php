<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function add_medicine(){

         return view ('add-medicine');
     }
    public function contact_us(){

         return view ('contact-us');
  }
  public function dashboard(){

         return view ('dashboard');
  }
  public function edit_inputs_settings(){

         return view ('edit-inputs-settings');
  }

  public function edit_medicine(){

         return view ('edit-medicine');
  }
  public function general_settings(){

         return view ('general-settings');
  }

  public function index(){

    return view ('index');
}

public function launcher(){

    return view ('launcher');
}

public function main(){

    return view ('main');
}
public function my_account(){

    return view ('my-account');
}

public function new_bill(){

    return view ('new-bill');
}

public function remove_medicine(){

    return view ('remove-medicine');
}

public function search_for_medicine(){

    return view ('search-for-medicine');
}

public function inventory(){

    return view ('inventory');
}

public function suppliers(){

    return view ('suppliers');
}

public function return(){

    return view ('return');
}

public function users(){

    return view ('users');
}

}
