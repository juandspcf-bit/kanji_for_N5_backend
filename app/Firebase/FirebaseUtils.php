<?php

namespace App\Firebase;

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
}
