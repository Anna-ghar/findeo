<?php

namespace App\Http\Controllers;

use App\Http\Requests\PropertySubmitRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Image;

use App\Models\Feature;
use App\Models\Property;
use App\Models\Type;
use Illuminate\Http\Request;

use App\Mail\TemporaryUserCreated;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Models\User;


class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        $properties = Property::latest('id')->limit(5)->get();
        $properties = Property::all();
        return view('property.index')->with('properties', $properties);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Type::all();
        $features = Feature::all();
        return view('property.create', ['features' => $features, 'types' => $types]);
    }

    /**
     * Store a newly created resource in storage.
     */
//    public function store(PropertySubmitRequest $request)
//    {
//        $userId = Auth::id();
//        $typeId = $request->type_id;
//        $property = new Property();
//        $property->fill($request->only([
//            'title',
//            'status',
//            'price',
//            'area',
//            'rooms',
//            'address',
//            'city',
//            'state',
//            'zip-code',
//            'bathrooms',
//            'building_age',
//            'bedrooms',
//            'description',
//        ]));
//        $property->user_id = $userId;
//        $property->type_id = $typeId;
//        $property->save();
//                    return redirect('create');
//
//    }
//    public function store(Request $request)
//    {
////        dd($request);
//        // Get the authenticated user's ID
//        $userId = Auth::id();
//
//        // Create a new property instance
//        $property = new Property();
//        $property->fill($request->only([
//            'title',
//            'status',
//            'price',
//            'area',
//            'rooms',
//            'address',
//            'city',
//            'state',
//            'zip-code',
//            'bathrooms',
//            'building_age',
//            'bedrooms',
//            'description',
//        ]));
//        $property->user_id = $userId;
//        $property->type_id = $request->type_id;
//        $property->save();
//
//        if ($request->hasFile('photos')) {
//            foreach ($request->file('photos') as $photo) {
//                $path = $photo->store('images', 'public');
//
//                $image = new Image();
//                $image->url = $path;
//                $image->save();
//
//                $propertyImage = new PropertyImage();
//                $propertyImage->property_id = $property->id;
//                $propertyImage->img_id = $image->id;
//                $propertyImage->save();
//            }
//        }
//
//        return redirect('create')->with('success', 'Property created successfully!');
//    }
//


    public function store(PropertySubmitRequest $request)
    {
        if (Auth::check()) {
            // Get the authenticated user's ID
            $userId = Auth::id();
        } else {
            // Temporarily store property data
            $propertyData = $request->only([
                'title',
                'status',
                'price',
                'area',
                'rooms',
                'address',
                'city',
                'state',
                'zip-code',
                'bathrooms',
                'building_age',
                'bedrooms',
                'description',
            ]);

            // Generate a random password
            $password = Str::random(10);

            // Create a new user with the provided email and generated password
            $user = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => bcrypt($password),
            ]);

            // Send an email to the user with the generated password
            Mail::to($user->email)->send(new TemporaryUserCreated($user, $password));

            // Get the ID of the newly created user
            $userId = $user->id;
        }

        // Create a new property instance
        $property = new Property();
        $property->user_id = $userId;
        $property->type_id = $request->type_id;
        $property->fill($propertyData ?? $request->only([
            'title',
            'status',
            'price',
            'area',
            'rooms',
            'address',
            'city',
            'state',
            'zip-code',
            'bathrooms',
            'building_age',
            'bedrooms',
            'description',
        ]));
        $property->save();

        // Attach features to the property
        if ($request->has('features')) {
            $property->features()->attach($request->features);
        }

        // Attach images to the property
        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $photo) {
                $path = $photo->store('', 'public');

                $image = new Image();
                $image->url = $path;
                $image->save();

                // Attach the image to the property
                $property->images()->attach($image->id);
            }
        }

        return redirect('create')->with('success', 'Property created successfully!');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $property = Property::find($id);
        $features = Feature::all();
        return view('property.show', compact('property', 'features'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

    }

    public function welcome()
    {
        $properties = Property::latest('id')->limit(5)->get();
        return view('welcome')->with('properties', $properties);


    }
}
