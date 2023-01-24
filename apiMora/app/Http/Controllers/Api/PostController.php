<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class PostController extends Controller
{
    use ApiResponseTrait;

    public function index(){
    $posts = PostResource::collection(Post::all());

    return $this->apiResponse($posts,'ok',200);

    }

    public function show($id){

        $post = Post::find($id);

        if ($post) {
            return $this->apiResponse(new PostResource($post), 'ok', 200);
        }
        return $this->apiResponse($post, 'The post not found', 404);
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(),[
           'title' => 'required|max:255',
           'body' => 'required'
        ]);

        if ($validator->fails()){
            return $this->apiResponse(null, $validator->errors(), 400);
        }

        $post = Post::create($request->all());

        if ($post) {
            return $this->apiResponse(new PostResource($post), 'The post not save', 201);
        }
        return $this->apiResponse(null, 'The post not created', 400);
    }



    public function update(Request $request, $id){

        // شروط التحقق من المدخلات
        $validator = Validator::make($request->all(),[
            'title' => 'required|max:255',
            'body' => 'required'
        ]);

        if ($validator->fails()){
            return $this->apiResponse(null, $validator->errors(), 400);
        }

        $post = Post::find($id);

        //التحقق من انو البوست موجود او لا
        if (!$post) {
            return $this->apiResponse($post, 'The post not found', 404);
        }

        $post->update($request->all());
        //اذا كان موجود بعات الرسالة التالية
        if ($post) {
            return $this->apiResponse(new PostResource($post), 'The post update', 201);
        }
    }


    public function destroy($id){

        $post = Post::find($id);

        //التحقق من انو البوست موجود او لا
        if (!$post) {
            return $this->apiResponse($post, 'The post not found', 404);
        }

        $post->delete($id);

        if ($post) {
            return $this->apiResponse(null, 'The post deleted', 200);
        }
    }
}
