<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Format;
use App\Type;
use App\Factory;
use App\Shelf;
use App\Caliber;
use App\Chemicalname;
use App\Pharmacy;
use App\State;
use App\Location;
use App\Warehouse;

class PagesController extends Controller
{
    public function add_medicine(){

        $format=Format::all();
        $type=Type::all();
        $factory=Factory::all();
        $shelf=Shelf::all();
        $caliber=Caliber::all();
        $chemicalname=Chemicalname::all();
        $pharmacy=Pharmacy::all();
        return view ('add-medicine', compact('format','type','factory','shelf','caliber','chemicalname','pharmacy'));
    }

    public function contact_us(){

         return view ('contact-us');
  }
  public function dashboard(){

         return view ('dashboard');
  }

  public function edit_inputs_settings(){

    $format=Format::all();
    $caliber=Caliber::all();
    $type=Type::all();
    $factory=Factory::all();
    $shelf=Shelf::all();
    $chemicalname=Chemicalname::all();
         return view ('edit-inputs-settings',  compact('format','type','factory','shelf','caliber','chemicalname'));
  }

  public function site(){

    $state=State::all();
    $location=Location::all();
    $warehouse=Warehouse::all();
         return view ('site',  compact('state','location','warehouse'));
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

public function return(){

    return view ('return');
}

public function users(){

    return view ('users');
}

}
