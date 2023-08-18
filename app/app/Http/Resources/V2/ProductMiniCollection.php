<?php

namespace App\Http\Resources\V2;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ProductMiniCollection extends ResourceCollection
{
    public function toArray($request)
    {
        return [
            'data' => $this->collection->map(function($data) {
                   $precision = 2;
                $calculable_price = home_discounted_base_price($data, false);
                $calculable_price = number_format($calculable_price, $precision, '.', '');
                $calculable_price = floatval($calculable_price);
                // $calculable_price = round($calculable_price, 2);
                $photo_paths = get_images_path($data->photos);   

                $photos = [];

                if (!empty($photo_paths)) {
                    for ($i = 0; $i < count($photo_paths); $i++) {
                        if ($photo_paths[$i] != "" ) {
                            $item = array();
                            $item['variant'] = "";
                            $item['path'] = static_asset($photo_paths[$i]);
                            $photos[]= $item; 
                        }

                    }

                }

                foreach ($data->stocks as $stockItem){
                    if($stockItem->image != null && $stockItem->image != ""){
                        $item = array();
                        $item['variant'] = $stockItem->variant;
                        $item['path'] = static_asset($stockItem->image);  
                        $photos[]= $item; 
                    }
                }

                $brand = [
                    'id'=> 0,
                    'name'=> "",
                    'logo'=> "",
                ];

                if($data->brand != null) {
                    $brand = [
                        'id'=> $data->brand->id,
                        'name'=> $data->brand->getTranslation('name'),
                        'logo'=> api_asset($data->brand->logo),
                    ];
                }


                return [
                    'id' => $data->id,
                    'name' => $data->getTranslation('name'), 
                    'sellername' => $data->user->name,
                    'sellerphone' => $data->user->phone,  
                    'description' => $data->description,
                    'address' => $data->address,  
                    'ownership_type' => $data->ownership_type,  
                    'total_area' => $data->total_area,  
                    'built_area' => $data->built_area,  
                    'road_access' => $data->road_access,  
                    'kitchen' => $data->kitchen,  
                    'dining_room' => $data->dining_room,  
                    'bedroom' => $data->bedroom,  
                    'bathroom' => $data->bathroom,  
                    'hall' => $data->hall,  
                    'newvideo' => static_asset($data->newvideo),  
                    'total_floors' => $data->total_floors,  
                    'parking' => $data->parking,
                    'stock_visibility_state' => $data->stock_visibility_state,
                   
                    'am1' => $data->am1, 
                    'am2' => $data->am2,
                    'am3' => $data->am3,
                    'am4' => $data->am4,
                    'am5' => $data->am5,
                    'am6' => $data->am6,
                    'am7' => $data->am7,
                    'am8' => $data->am8,
                    'am9' => $data->am9,
                    'am10' => $data->am10,
                    'am11' => $data->am11,
                    'am12' => $data->am12,
                    'am13' => $data->am13,
                    'am14' => $data->am14,
                    'am15' => $data->am15,
                    'am16' => $data->am16,
                    'am17' => $data->am17,
                    'am18' => $data->am18,
                    'am19' => $data->am19,
                    'am20' => $data->am20,
                    'am21' => $data->am21,
                    'am22' => $data->am22,
                    'am23' => $data->am23,
                    'am24' => $data->am24,
                    'am25' => $data->am25,
                    'am26' => $data->am26,
                    'am27' => $data->am27,
                    'maps' => $data->maps,
                    'seller_image' => uploaded_asset($data->user->avatar_original), 
                    'thumbnail_image' => uploaded_asset($data->thumbnail_img),
                    'photosad' => $photos,      
                    'has_discount' => home_base_price($data, false) !=  home_discounted_base_price($data, false) , 
                    'stroked_price' => home_base_price($data),
                    'main_price' => home_discounted_base_price($data), 
                    'rating' => (double) $data->rating, 
                    'sales' => (integer) $data->num_of_sale,
                    'links' => [
                        'details' => route('products.show', $data->id),    
                    ]
                ]; 
            })
        ];
    }

    public function with($request)
    {
        return [
            'success' => true,
            'status' => 200
        ];
    }
}
