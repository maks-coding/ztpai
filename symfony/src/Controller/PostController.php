<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{
    // GET - lista postów
    #[Route('/api/posts', name: 'get_posts', methods: ['GET'])]
    public function getPosts(): JsonResponse
    {
        $posts = [
            ['id' => 1, 'title' => 'Pierwszy post', 'content' => 'Treść pierwszego posta'],
            ['id' => 2, 'title' => 'Drugi post', 'content' => 'Treść drugiego posta'],
        ];
        return $this->json($posts);
    }

    // GET - pobierz post po ID
    #[Route('/api/posts/{id}', name: 'get_post_by_id', methods: ['GET'])]
    public function getPostById(int $id): JsonResponse
    {
        $posts = [
            1 => ['id' => 1, 'title' => 'Pierwszy post', 'content' => 'Treść pierwszego posta'],
            2 => ['id' => 2, 'title' => 'Drugi post', 'content' => 'Treść drugiego posta'],
        ];
        if (!isset($posts[$id])) {
            return $this->json(['error' => 'Post not found'], 404);
        }
        return $this->json($posts[$id]);
    }

    // POST - dodaj post
    #[Route('/api/posts', name: 'create_post', methods: ['POST'])]
    public function createPost(Request $request): JsonResponse
    {
        return $this->json(['message' => 'Post created'], 201);
    }

    // PUT - edytuj post
    #[Route('/api/posts/{id}', name: 'update_post', methods: ['PUT'])]
    public function updatePost(int $id, Request $request): JsonResponse
    {
        return $this->json(['message' => "Post $id updated"]);
    }

    // DELETE - usuń post
    #[Route('/api/posts/{id}', name: 'delete_post', methods: ['DELETE'])]
    public function deletePost(int $id): JsonResponse
    {
        return $this->json(['message' => "Post $id deleted"]);
    }
}
