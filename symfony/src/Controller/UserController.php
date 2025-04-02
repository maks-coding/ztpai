<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class UserController extends AbstractController
{
    #[Route('/api/users', name: 'get_users', methods: ['GET'])]
    public function getUsers(): JsonResponse
    {
        $users = [
            ['id' => 1, 'name' => 'Jan Kowalski', 'email' => 'jan@example.com'],
            ['id' => 2, 'name' => 'Anna Nowak', 'email' => 'anna@example.com'],
        ];
        return $this->json($users);
    }

    #[Route('/api/users/{id}', name: 'get_user_by_id', methods: ['GET'])]
    public function getUserById(int $id): JsonResponse
    {
        $users = [
            1 => ['id' => 1, 'name' => 'Jan Kowalski', 'email' => 'jan@example.com'],
            2 => ['id' => 2, 'name' => 'Anna Nowak', 'email' => 'anna@example.com'],
        ];
        if (!isset($users[$id])) {
            return $this->json(['error' => 'User not found'], 404);
        }
        return $this->json($users[$id]);
    }

    #[Route('/api/users', name: 'create_user', methods: ['POST'])]
    public function createUser(Request $request): JsonResponse
    {
        return $this->json(['message' => 'User created'], 201);
    }

    #[Route('/api/users/{id}', name: 'update_user', methods: ['PUT'])]
    public function updateUser(int $id, Request $request): JsonResponse
    {
        return $this->json(['message' => "User $id updated"]);
    }

    #[Route('/api/users/{id}', name: 'delete_user', methods: ['DELETE'])]
    public function deleteUser(int $id): JsonResponse
    {
        return $this->json(['message' => "User $id deleted"]);
    }
}
