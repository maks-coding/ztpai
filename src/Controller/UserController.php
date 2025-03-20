<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
class UserController extends AbstractController
{
 #[Route('/api/users', name: 'get_users', methods: ['GET'])]
 public function getUsers(): JsonResponse
 {
 $users = [
 ['id' => 1, 'name' => 'Jan Kowalski', 'email' =>
'jan@example.com'],
 ['id' => 2, 'name' => 'Anna Nowak', 'email' =>
'anna@example.com'],
 ];
 return $this->json($users);
 }
 #[Route('/api/users/{id}', name: 'get_user_by_id', methods: ['GET'])]
 public function getUserById(int $id): JsonResponse
 {
 $users = [
 1 => ['id' => 1, 'name' => 'Jan Kowalski', 'email' =>
'jan@example.com'],
 2 => ['id' => 2, 'name' => 'Anna Nowak', 'email' =>
'anna@example.com'],
 ];
 if (!isset($users[$id])) {
 return $this->json(['error' => 'User not found'], 404);
 }
 return $this->json($users[$id]);
 }
}