<?php

namespace App\Http\Controllers;

use App\{Ad,Category};
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use App\Events\AdWasCreated;
use Illuminate\Support\Facades\Event;

class CatalogController extends Controller
{

    public function showCategory( $id = null )
    {

        Event::fire( new AdWasCreated() );

        $ads = null;

        if( !$id ) {
            $ads = Ad::all();
        }
        else {
            $category = Category::findOrFail($id);
        }

        return view('category',
            [
                'categories' => Category::all(),
                'ads' => $ads ?? $category->ads,
                'catId' => $id
            ]
        );
    }

    public function createCategory( Request $request )
    {
        $this->validate($request, [
            'title' => 'required'
        ]);

        $user = Auth::user();

        $category = new Category();
        $category->title = $request->get('title');
        $category->user()->associate($user);
        $category->save();


    }
}
