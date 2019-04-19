<?php namespace Baoweb\Detailedreports\Controllers;

use Illuminate\Support\Facades\DB;

class DbCacheGetter {

    const PREFIX = 'october';

    const TABLE = 'cache';

    public static function get($key) {

        $key = self::PREFIX . $key;

        $data = DB::table(self::TABLE)
            ->select('*')
            ->where('key', $key)
            ->first();

        return (unserialize($data->value));
    }
    
}