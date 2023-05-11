<?php

use App\Exceptions\FailException;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;
use Laravel\Sanctum\PersonalAccessToken;

if (!function_exists("getModelColumns"))
{
    function getModelColumns($table)
    {
        $table = $table == "closet" ? "clothes" : $table;
        return Schema::getColumnListing($table);
    }
}

if (!function_exists("getModelFromToken"))
{
    function getModelFromToken($token)
    {
        return PersonalAccessToken::findToken($token) ? PersonalAccessToken::findToken($token)->tokenable()->first() : false;
    }
}

if (!function_exists("getTableFromRequest"))
{
    function getTableFromRequest($baseUri)
    {
        preg_match("/\/(\w+)\/search$/", $baseUri, $matches);
        return $matches[1] ?? "";
    }
}

if (!function_exists("standardDateTime"))
{
    function standardDateTime($date)
    {
        return Carbon::parse($date)->format('Y-m-d H:i:s');
    }
}

if (!function_exists("callTrans"))
{
    function callTrans($key, $attribute)
    {
        return trans("validation.".$key, compact('attribute'));
    }
}

if (!function_exists("checkUnique"))
{
    function checkUnique($data)
    {
        if (isset($data["exist"]) && $data["id"] != $data["exist"]->id) {
            throw new FailException(
                callTrans("unique", $data["column"]),
                422
            );
        }
    }
}

if (!function_exists("viewDateTime"))
{
    function viewDateTime($date)
    {
        return Carbon::parse($date)->format('d F Y');
    }
}

if (!function_exists("minutesAfterDate"))
{
    function minutesAfterDate($minutes, $date = null)
    {
        $date = $date ? Carbon::parse($date) : now();
        return $date->addMinutes($minutes)->format('Y-m-d H:i:s');
    }
}

if (!function_exists("dayAfterDate"))
{
    function dayAfterDate($days, $date = null)
    {
        $date = $date ? Carbon::parse($date) : now();
        return $date->addDays($days)->format('Y-m-d H:i:s');
    }
}

if (!function_exists("checkDateExpired"))
{
    function checkDateExpired($date, $date2 = null)
    {
        $date2 = $date2 ? Carbon::parse($date2) : now();
        return $date2->greaterThan(Carbon::parse($date));
    }
}

if (!function_exists("standardDateTime"))
{
    function standardDateTime($date)
    {
        return Carbon::parse($date)->format('Y-m-d H:i:s');
    }
}

if (!function_exists("createToken"))
{
    function createToken()
    {
        return Str::random(64);
    }
}

if (!function_exists("createCode"))
{
    function createCode()
    {
        return rand(100000, 999999);
    }
}
