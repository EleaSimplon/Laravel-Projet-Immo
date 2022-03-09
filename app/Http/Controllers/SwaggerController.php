<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SwaggerController extends Controller
{
    /**
     * @OA\Get(
     *      path="/property/all",
     *      operationId="getAllProperties",
     *      tags={"All Properties"},

     *      summary="Get List Of Properties",
     *      description="Returns all properties and associated attributes.",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\MediaType(
     *           mediaType="application/json",
     *      )
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      ),
     * @OA\Response(
     *      response=400,
     *      description="Bad Request"
     *   ),
     * @OA\Response(
     *      response=404,
     *      description="not found"
     *   ),
     *  )
     */
    public function getAllProperties(){
        return serviceApi('property');
    }

    /**
     * @OA\Get(
     *      path="/property/detail/{id}",
     *      operationId="getOneProperty",
     *      tags={"All Properties"},

     *      summary="Get List Of One Property",
     *      description="Returns one property at a time and its associated attributes.",
     *     @OA\Parameter (
     *          name="id",
     *          in="path",
     *          required=true,
     *          @OA\Schema (
     *           type="integer",
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\MediaType(
     *           mediaType="application/json",
     *      )
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      ),
     * @OA\Response(
     *      response=400,
     *      description="Bad Request"
     *   ),
     * @OA\Response(
     *      response=404,
     *      description="not found"
     *   ),
     *  )
     */

    public function getOneProperty($id){
        $endPoint="property/$id";
        return serviceApi($endPoint);
    }

//    /**
//     * @OA\Post(
//     *     path="/property/add",
//     *     tags={"All Properties"},
//     *     summary="Adds a new property",
//     *
//     *     @OA\RequestBody(
//     *         @OA\MediaType(
//     *             mediaType="application/json",
//     *             @OA\Schema(
//     *                 @OA\Property(
//     *                     property="id",
//     *                     type="integer"
//     *                 ),
//     *                 @OA\Property(
//     *                     property="title",
//     *                     type="string"
//     *                 ),
//     *                  @OA\Property(
//     *                     property="description",
//     *                     type="string"
//     *                 ),
//     *                  @OA\Property(
//     *                     property="size",
//     *                     type="integer"
//     *                 ),
//     *                  @OA\Property(
//     *                     property="floor",
//     *                     type="integer"
//     *                 ),
//     *                  @OA\Property(
//     *                     property="image",
//     *                     type="string"
//     *                 ),
//     *                  @OA\Property(
//     *                     property="room",
//     *                     type="integer"
//     *                 ),
//     *                  @OA\Property(
//     *                     property="price",
//     *                     type="integer"
//     *                 ),
//     *                  @OA\Property(
//     *                     property="address",
//     *                     type="string"
//     *                 ),
//     *                  @OA\Property(
//     *                     property="post_code",
//     *                     type="integer"
//     *                 ),
//     *                  @OA\Property(
//     *                     property="city",
//     *                     type="string"
//     *                 ),
//     *             )
//     *         )
//     *     ),
//     *     @OA\Response(
//     *         response=200,
//     *         description="OK",
//     *         @OA\JsonContent(
//     *             oneOf={
//     *                 @OA\Schema(ref="#/components/schemas/Result"),
//     *                 @OA\Schema(type="boolean")
//     *             },
//     *             @OA\Examples(example="result", value={"success": true}, summary="An result object."),
//     *             @OA\Examples(example="bool", value=false, summary="A boolean value."),
//     *         )
//     *     )
//     * )
//     */
//
//    public function addProperty(PropertyRequest $request)
//    {
//        $params = $request->validated();
//
//        $property = Property::query()->create([
//            'title' => $params['title'],
//            'description' => $params['description'],
//            'size' => $params['size'],
//            'floor' => $params['floor'],
//            'image' => $params['image'],
//            'room' => $params['room'],
//            'price' => $params['price'],
//            'address' => $params['address'],
//            'post_code' => $params['post_code'],
//            'city' => $params['city'],
//        ]);
//        event(new Registered($property));
//
//        return response(["token" => $property->createToken($params['email'])->plainTextToken]);
//    }

    /**
     * @OA\Delete(
     *     path="/property/delete/{id}",
     *     description="delete a single property based on the ID supplied",
     *     summary="Delete a single property",
     *     operationId="deleteProperty",
     *     tags={"All Properties"},
     *     @OA\Parameter(
     *         description="ID of property to delete",
     *         in="path",
     *         name="id",
     *         required=true,
     *         @OA\Schema(
     *             format="int64",
     *             type="integer"
     *         )
     *     ),
     *     @OA\Response(
     *         response=204,
     *         description="property deleted"
     *     ),
     *     @OA\Response(
     *         response="default",
     *         description="unexpected error",
     *         @OA\Schema(ref="#/components/schemas/ErrorModel")
     *     )
     * )
     */

    public function deleteProperty($id){
        $endpoint="property/delete/$id";
        return serviceApi($endpoint);
    }
}
