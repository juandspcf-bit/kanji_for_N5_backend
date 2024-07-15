<?php

namespace App\Firebase;

use App\Utils\Messages;

class FirebaseUtils
{

    public static function existUser(string $uuid): bool
    {
        $firestore = app('firebase.firestore');
        $database = $firestore->database();
        $snapshot = $database
            ->collection("user_data")->document($uuid)->snapshot();
        return $snapshot->exists();
    }


    public static function deleteUserAccount($uuid):bool
    {
        $auth = app('firebase.auth');

        try {
            $auth->deleteUser($uuid);
            return true;
        } catch (\Kreait\Firebase\Exception\Auth\UserNotFound $e) {
            return false;
        } catch (\Kreait\Firebase\Exception\AuthException $e) {
            return false;
        }
    }

    public static function deleteUserData(string $uuid)
    {

        $firestore = app('firebase.firestore');
        $database = $firestore->database();

        try {

            $favoritesRef = $database
                ->collection("favorites");

            $query = $favoritesRef->where('uuid', '=', $uuid);
            $documents = $query->documents();


            foreach ($documents as $document) {
                if ($document->exists()) {
                    $database
                        ->collection("favorites")->document($document->id())->delete();
                } else {
                    printf('Document %s does not exist!' . PHP_EOL, $document->id());
                }
            }
        } catch (\Throwable $th) {
            printf("erro deleting favorites");
            print_r($th->getMessage());
        }

        try {
            $userDataRef = $database
                ->collection("user_data");

            $document = $userDataRef->document($uuid);
            if ($document->snapshot()->exists()) {
                $document->delete();
            }
        } catch (\Throwable $th) {
            print_r($th->getMessage());
            printf("erro deleting user_data");
        }

        try {
            $userDataRef = $database
                ->collection("quiz_score");

            $document = $userDataRef->document($uuid);
            if ($document->snapshot()->exists()) {
                $document->delete();
            }
        } catch (\Throwable $th) {
            print_r($th->getMessage());
            printf("error deleting quiz score");
        }
    }

    public static function deleteUserImage(string $uuid)
    {

        try {
            $storage = app('firebase.storage');
            $defaultBucket = $storage->getBucket();

            $object = $defaultBucket->object("userImages/{$uuid}.jpg");
            $object->delete();
        } catch (\Throwable $th) {
            print_r($th->getMessage());
            printf("error deleting user image");
        }
    }
}
