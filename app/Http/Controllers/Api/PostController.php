<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Api\PostRequest;
use App\Http\Controllers\API\Traits\ApiResponseTrait;

class PostController extends Controller
{

    use ApiResponseTrait;


    public function __construct()
    {
        $this->middleware('auth:sanctum')->except(['index', 'show']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::with('user')->paginate(10);

        return $this->ApiPaginationResponse(PostResource::collection($posts));

    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = Auth::id();
        // Create a new post
        $post = Post::create($data);

        return $this->ApiResponse(new PostResource($post), __('Post created successfully'), 201);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::with('user')->find($id);

        return  $post ?  $this->ApiResponse(new PostResource($post)) : $this->notFoundResponse();

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostRequest $request, string $id)
    {
        $post = Post::with('user')->find($id);
        if ($post) {
            $data = $request->validated();
            $post->update($data);
            return $this->ApiResponse(new PostResource($post), __('Post updated successfully'), 200);
        }

        return $this->notFoundResponse();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id);
        if ($post) {
            $post->delete();
            return $this->ApiResponse(null, __('Post deleted successfully'), 200);
        }

        return $this->notFoundResponse();
    }
}
