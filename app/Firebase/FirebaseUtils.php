<?php

namespace App\Firebase;

use App\Utils\Messages;
use Kreait\Laravel\Firebase\Facades\Firebase;
use Illuminate\Support\Facades\DB;

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


    public static function deleteUserAccount($uuid): bool
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

        FirebaseUtils::deleteFavorites($database, $uuid);
        FirebaseUtils::deleteUserEntry($database, $uuid);
        FirebaseUtils::deleteQuizScore($database, $uuid);
    }

    public static function deleteUserImage(string $uuid)
    {

        try {
            $storage = app('firebase.storage');
            $defaultBucket = $storage->getBucket();

            $object = $defaultBucket->object("userImages/{$uuid}.jpg");
            $object->delete();
        } catch (\Throwable $th) {
            DB::table("unfinished_deleting_task_firebase")->insert([
                "uuid"=>$uuid,
                "unfinished_task"=>"avatar",
                "error_message"=>$th->getMessage()
            ]);
        }
    }

    public static function deleteFavorites($database, string $uuid)
    {
        try {

            $favoritesRef = $database
                ->collection("favorites");

            $query = $favoritesRef->where('uuid', '=', $uuid);
            $documents = $query->documents();


            foreach ($documents as $document) {
                if ($document->exists()) {
                    $database
                        ->collection("favorites")->document($document->id())->delete();
                } 
            }
        } catch (\Throwable $th) {
            DB::table("unfinished_deleting_task_firebase")->insert([
                "uuid"=>$uuid,
                "unfinished_task"=>"favorites",
                "error_message"=>$th->getMessage()
            ]);
        }
    }

    public static function deleteUserEntry($database, string $uuid)
    {
        try {
            $userDataRef = $database
                ->collection("user_data");

            $document = $userDataRef->document($uuid);
            if ($document->snapshot()->exists()) {
                $document->delete();
            }
        } catch (\Throwable $th) {
            DB::table("unfinished_deleting_task_firebase")->insert([
                "uuid"=>$uuid,
                "unfinished_task"=>"user_data",
                "error_message"=>$th->getMessage()
            ]);
            
        }
    }

    public static function deleteQuizScore($database, string $uuid)
    {

        try {
            $userDataRef = $database
                ->collection("quiz_score");

            $document = $userDataRef->document($uuid);
            if ($document->snapshot()->exists()) {
                $document->delete();
            }
        } catch (\Throwable $th) {
            DB::table("unfinished_deleting_task_firebase")->insert([
                "uuid"=>$uuid,
                "unfinished_task"=>"quiz_score",
                "error_message"=>$th->getMessage()
            ]);
            
        }
    }
}
