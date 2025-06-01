<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Http\Resources\PostResource;
use App\Models\Post;
use App\Repositories\PostRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class PostController extends Controller
{
    protected $postRepository;

    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    /**
     * Display a listing of the resource.
     */

    public function index(Request $request): JsonResponse
    {
        $limit = $request->query('limit', 10);
        $posts = $this->postRepository->paginate($limit);

        return PostResource::collection($posts)->response();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request): JsonResponse
    {
        $post = $this->postRepository->create($request->validated());
        return response()->json(new PostResource($post), 201);
    }


    /**
     * Display the specified resource.
     */
    public function show($id): JsonResponse
    {
        $post = $this->postRepository->find($id);
        return response()->json(new PostResource($post));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, $id): JsonResponse
    {
        $post = $this->postRepository->update($id, $request->validated());
        return response()->json(new PostResource($post));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): JsonResponse
    {
        $this->postRepository->delete($id);
        return response()->json(null, 204);
    }
}
